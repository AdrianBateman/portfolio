module.exports = {
  clearMocks: true,
  collectCoverage: true,
  coverageDirectory: "coverage",
  coveragePathIgnorePatterns: [
    "/node_modules/"
  ],
  coverageProvider: "v8",
  testEnvironment: "jsdom",
  testPathIgnorePatterns: [
    "/node_modules/"
  ],
  transform: {
    "^.+\\.(js|jsx)$": "babel-jest",
  }
};
