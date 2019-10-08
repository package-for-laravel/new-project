module.exports = {
  moduleFileExtensions: ["js", "vue"],
  transform: {
    "^.+\\.js$": "babel-jest",
    ".*\\.(vue)$": "vue-jest"
  },
  collectCoverageFrom: ["<rootDir>/resources/js/**/*.{js,vue}"],
  coverageDirectory: "<rootDir>/tests/js-coverage",
  testPathIgnorePatterns: ["<rootDir>/node_modules", "<rootDir>/vendor"]
};
