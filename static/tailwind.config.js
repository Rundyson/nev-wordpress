/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    extend: {
      fontFamily: {
        poppins: "Poppins",
      },
      colors: {
        primary: "#fcdf49",
        secondary: "#2B2B2B",
        hhover: "#DA7F31",
      },
      backgroundImage: {
        backGround:
          "url('../img/Banner-img.png')",
        backGround2:
          "url('../img/bg-trees.png')",
      },
    },
  },
  plugins: [],
};

