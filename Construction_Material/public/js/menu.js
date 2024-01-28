// function showsidebar1(){
//     const  sidebar1 = document.querySelector(".Resp");
//     sidebar1.style.display = 'flex';
// }
// function hidesidebar1(){
//     const  sidebar1 = document.querySelector(".Resp");
//     sidebar1.style.display = 'none';
// }
function showsidebar1() {
    const side_bar = document.querySelector(".Resp");
    side_bar.style.display = 'flex';
}

function hidesidebar1(event) {
    event.preventDefault();
    const side_bar = document.querySelector(".Resp");
    side_bar.style.display = 'none';
}
