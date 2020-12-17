window.onload = function () {
    document.getElementById('button').addEventListener('click', function () {
        console.log('im in here')
        document.querySelector('.bg-modal').style.display = 'flex';
    });

    document.querySelector('.full-image').addEventListener('click', function () {
        document.querySelector('.bg-modal').style.display = 'none';
    });
}