document.onreadystatechange = function () {
  var buttonCta = document.getElementById("btn")
  var form = document.getElementById('form')
  buttonCta?.addEventListener('click', function () {
    window.scrollTo({
        top: form.offsetHeight,
        left: 0,
        behavior: "smooth"
    })
  })
};
