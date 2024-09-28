"use strict";

const jsWatch = ["./assets/js/app.js"],
  jsFiles = ["./assets/js/app.js", "./assets/js/*.js", "!./assets/js/*.min.js"],
  cssWatch = [
    "./assets/scss/*.scss",
    "./assets/scss/layout/*.scss",
    "./assets/scss/admin_menu/*.scss",
  ],
  cssFiles = ["./assets/scss/app.scss"];

// Ініціалізація модулів
const gulp = require("gulp");
const { src, dest, watch, series, parallel } = gulp;

// Імпорт всіх пакетів Gulp
const sourcemaps = require("gulp-sourcemaps"),
  sass = require("gulp-sass")(require("sass")),
  babel = require("gulp-babel"),
  minifyjs = require("gulp-uglify-es").default,
  autoPrefixer = require("gulp-autoprefixer"),
  plumber = require("gulp-plumber"),
  concat = require("gulp-concat"),
  merge = require("merge2");

// Шляхи до вихідних і згенерованих файлів
const distPath = "./dist"; // Додайте цю змінну для шляху до папки dist

// Задача для SCSS
function scssTask() {
  const cssBackFiles = src(cssFiles, { base: "./" })
    .pipe(
      autoPrefixer({
        cascade: false,
      })
    )
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(
      sass({
        outputStyle: "compressed",
      })
    )
    .pipe(concat("app.min.css"))
    .pipe(sourcemaps.write("."))
    .pipe(dest("./assets/scss/")) // Зберігає оригінальний файл
    .pipe(dest(distPath)); // Зберігає в dist

  return merge(cssBackFiles);
}

// Задача для JS
function jsTask() {
  const jsBackFiles = src(jsFiles, { base: "./" })
    .pipe(
      babel({
        presets: [
          [
            "@babel/env",
            {
              modules: "commonjs",
            },
          ],
        ],
      })
    )
    .pipe(minifyjs())
    .pipe(concat("app.min.js"))
    .pipe(dest("./assets/js/")) // Зберігає оригінальний файл
    .pipe(dest(distPath)); // Зберігає в dist

  return merge(jsBackFiles);
}

// Задача для спостереження
function watchTask() {
  watch([...cssWatch, ...jsWatch], series(parallel(scssTask, jsTask)));
}

// Експортуємо задачу build
exports.build = series(parallel(scssTask, jsTask));

// Експортуємо задачу за замовчуванням
exports.default = series(parallel(scssTask, jsTask), watchTask);
