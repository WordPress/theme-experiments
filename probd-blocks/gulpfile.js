const gulp = require("gulp");
const plumberNotifier = require('gulp-plumber-notifier');
const sass = require("gulp-sass");
const csscomb = require('gulp-csscomb');
const autoprefixer = require('gulp-autoprefixer');
const csso = require('gulp-csso');
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const uglify = require("gulp-uglify");

const sassMain = "assets/dev/sass/frontend/probd-blocks-main.scss";
const sassFiles = "assets/dev/sass/frontend/**/*.scss";
const sassEditorMain = "assets/dev/sass/editor/probd-blocks-editor.scss";
const sassEditorFiles = "assets/dev/sass/editor/**/*.scss";
// const jsFiles = "assets/dev/js/*.js";

// browser prefix
const AUTOPREFIXER_BROWSERS = [
    "last 2 version",
    "> 1%",
    "ie >= 9",
    "ie_mob >= 10",
    "ff >= 30",
    "chrome >= 34",
    "safari >= 7",
    "opera >= 23",
    "ios >= 7",
    "android >= 4",
    "bb >= 10"
];

// Frontend css
function style() {
    return gulp.src(sassMain)
        .pipe(plumberNotifier())
        .pipe(sass())
        .pipe(csscomb())
        .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
        .pipe(gulp.dest("./assets/css"))
        .pipe(csso())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest("assets/css"))
}

// Editor css
function editorStyle() {
    return gulp.src(sassEditorMain)
        .pipe(plumberNotifier())
        .pipe(sass())
        .pipe(csscomb())
        .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
        .pipe(gulp.dest("./assets/css"))
        .pipe(csso())
        .pipe(rename({suffix: ".min"}))
        .pipe(gulp.dest("assets/css"))
}

// javascripts
// function scripts() {
//     return gulp.src(jsFiles)
//         .pipe(plumberNotifier())
//         .pipe(concat('skito-main.js'))
//         .pipe(gulp.dest("assets/js"))
//         .pipe(uglify())
//         .pipe(rename({suffix: ".min"}))
//         .pipe(gulp.dest("assets/js"));
// }

function watch() {
    gulp.watch(sassFiles, style);
    gulp.watch(sassEditorFiles, editorStyle);
    // gulp.watch(jsFiles, scripts);
}
// gulp.task("default", gulp.series(style, scripts, watch));
gulp.task("default", gulp.series(style, watch));
