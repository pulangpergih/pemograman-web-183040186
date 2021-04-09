const tombolCari = document.querySelector(".tombol-cari");
const keyword = document.querySelector(".keyword");
const daftar = document.querySelector(".daftar");

// hilangkan tombol cari
tombolCari.style.display = "none";

keyword.addEventListener("keyup", function () {
  //  ajak
  // xmlhttprequest
  // const xhr = new XMLHttpRequest();
  // xhr.onreadystatechange = function () {
  //   if (xhr.readyState == 4 && xhr.status == 200) {
  //     daftar.innerHTML = xhr.responseText;
  //   }
  // };

  // xhr.open("get", "ajax/ajax_cari.php?keyword=" + keyword.value);
  // xhr.send();

  // fetch()
  fetch("ajax/ajax_cari.php?keyword=" + keyword.value)
    .then((response) => response.text())
    .then((response) => (daftar.innerHTML = response));
});

// Preview Image untuk Tambah dan Ubah
function previewImage() {
  const gambar = document.querySelector(".coba");
  const imgPreview = document.querySelector(".img-preview");

  const oFReader = new FileReader();
  oFReader.readAsDataURL(gambar.files[0]);

  oFReader.onload = function (oFREvent) {
    imgPreview.src = oFREvent.target.result;
  };
}
