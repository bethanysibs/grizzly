module.exports = {
  mode: "jit",
  important: true,
  future: {
    // removeDeprecatedGapUtilities: true,
    // purgeLayersByDefault: true,
  },
  purge: ["/**/*.html", "/**/*.{js,jsx,ts,tsx,vue}"],
  theme: {
    extend: {},
  },
  variants: {},
  plugins: [],
};
