console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

var placeholderText = [
    "Siêu Hội Hàng Tiêu Dùng",
    "Where would you like to go?",
    "Amsterdam?",
    "Paris?",
    "Berlin?",
    "London?",
    "New York?",
    "San Francisco?"
];

window.addEventListener("load", ()=>{
    $('#search').placeholderTypewriter({text: placeholderText});
});