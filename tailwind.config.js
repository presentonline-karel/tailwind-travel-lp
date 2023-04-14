/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./site/**/*.php",
    "./site/**/**/*.php",
    "./assets/js/*.js"
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
      boxShadow: {
        card: "4px 8px 20px rgba(65, 73, 80, 0.12)",
      },
    },
    spacing: {
      0: "0",
      "2px": "2px",
      "4px": "4px",
      "8px": "8px",
      "12px": "12px",
      "16px": "16px",
      "20px": "20px",
      "24px": "24px",
      "32px": "32px",
      "40px": "40px",
      "48px": "48px",
      "56px": "56px",
      "64px": "64px",
      "72px": "72px",
      "80px": "80px",
      "120px": "120px",
      "136px": "136px",
    },
    fontFamily: {
      headings: ["'Josefin Sans', sans-serif"],
      paragraphs: ["'Cardo', serif"],
    },
    fontSize: {
      "12px": [
        "12px",
        {
          lineHeight: "12px",
          letterSpacing: "-0.02em",
          fontWeight: "400",
        },
      ],
      "14px": [
        "14px",
        {
          lineHeight: "14px",
          letterSpacing: "-0.02em",
          fontWeight: "600",
        },
      ],
      "16px": [
        "16px",
        {
          lineHeight: "26px",
          letterSpacing: "-0.02em",
          fontWeight: "400",
        },
      ],
      "20px": [
        "20px",
        {
          lineHeight: "28px",
          letterSpacing: "-0.02em",
          fontWeight: "600",
        },
      ],
      "24px": [
        "24px",
        {
          lineHeight: "32px",
          letterSpacing: "-0.02em",
          fontWeight: "600",
        },
      ],
      "32px": [
        "32px",
        {
          lineHeight: "36px",
          letterSpacing: "-0.02em",
          fontWeight: "600",
        },
      ],
      "40px": [
        "40px",
        {
          lineHeight: "44px",
          letterSpacing: "-0.02em",
          fontWeight: "600",
        },
      ],
      "56px": [
        "56px",
        {
          lineHeight: "60px",
          letterSpacing: "-0.02em",
          fontWeight: "600",
        },
      ],
      "72px": [
        "72px",
        {
          lineHeight: "72px",
          letterSpacing: "-0.02em",
          fontWeight: "600",
        },
      ],
    },
    letterSpacing: {
      tighter: "-.02em",
      tight: "-.01em",
      normal: "0",
      wide: ".01em",
      wider: ".02em",
    },
    screens: {
      sm: "640px",
      md: "1024",
      lg: "1280",
      xl: "1440",
      "2xl": "1600",
      hd: "1920px",
    },
  },
  variants: {},
  plugins: [],
};
