/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./site/**/*.php",
    "./site/**/**/*.php"
  ],
  theme: {
    extend: {
      colors: {
        "prim-100": "#ECF5FC",
        "prim-200": "#C5E1F6",
        "prim-300": "#9ECDF1",
        "prim-400": "#77B8EB",
        "prim-500": "#50A4E5",
        "prim-600": "#3C9AE2",
        "prim-700": "#368BCB",
        "prim-800": "#2A6C9E",
        "prim-900": "#1E4D71",
        "neutrals-100": "#FFFFFF",
        "neutrals-200": "#F8FBFF",
        "neutrals-300": "#F4F4F6",
        "neutrals-400": "#E9ECEF",
        "neutrals-500": "#DEE2E6",
        "neutrals-600": "#CED4DA",
        "neutrals-700": "#ADB5BD",
        "neutrals-800": "#6C757D",
        "neutrals-900": "#495057",
        "neutrals-1000": "#414950",
        "neutrals-1100": "#343A40",
        "neutrals-1200": "#232323",
      },
    },
  },
  variants: {},
  plugins: [],
};
