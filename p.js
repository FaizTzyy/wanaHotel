function checkRegister() {
    // Cek apakah tombol register sudah ditekan
    if (document.querySelector(".reg").classList.contains("active")) {
      // Jika sudah, biarkan tombol booking tetap bisa ditekan
      return true;
    } else {
      // Jika belum, tampilkan peringatan
      alert("Silahkan daftar terlebih dahulu sebelum melakukan booking");
      return false;
    }
  }
  
  // Tambahkan event listener ke tombol booking
  document.querySelector(".book").addEventListener("click", checkRegister);
  