function showsidebar1() {
    const side_bar = document.querySelector(".Resp");
    side_bar.style.display = 'flex';
}

function hidesidebar1(event) {
    event.preventDefault();
    const side_bar = document.querySelector(".Resp");
    side_bar.style.display = 'none';
}
