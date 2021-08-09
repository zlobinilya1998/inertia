module.exports = {
  purge: [
      './resources/**/*.blade.php',
      './resources/**/*.js',
      './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    colors:{
        blue: {
            DEFAULT: "#00cfe8",
        },
        indigo:{
            DEFAULT:"#6610f2",
        },
        purple:{
            DEFAULT:"#7367f0",
        },
        pink:{
            DEFAULT:"#e83e8c",
        },
        red:{
            DEFAULT:"#ea5455",
        },
        orange:{
            DEFAULT:"#ff9f43",
        },
        yellow:{
            DEFAULT:"#ffc107",
        },
        green:{
            DEFAULT:"#28c76f",
        },
        teal:{
            DEFAULT:"#20c997",
        },
        cyan:{
            DEFAULT:"#17a2b8",
        },
        white:{
            DEFAULT:"#fff",
        },
        gray:{
            DEFAULT:"#b8c2cc",
        },
        'gray-dark':{
            DEFAULT:"#1e1e1e",
        },
        primary:{
            DEFAULT:"#7367f0",
        },
        secondary:{
            DEFAULT:"#82868b",
        },
        success:{
            DEFAULT:"#28c76f",
        },
        info:{
            DEFAULT:"#00cfe8",
        },
        warning:{
            DEFAULT:"#ff9f43",
        },
        danger:{
            DEFAULT:"#ea5455",
        },
        light:{
            DEFAULT:"#f6f6f6",
        },
        dark:{
            DEFAULT:"#4b4b4b",
        },




    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
