// Ambil id ProfilDropdown dan StatusDropdown lalu disimpan dalam sebuah variabel
let ProfilDropdown = document.getElementById('ProfilDropdown')
let StatusDropdown = document.getElementById('StatusDropdown')
let LabelStatus = document.getElementById('LabelStatus')
let spasi = document.getElementById('spasi')

// Ambil elemen-elemen dari dropdown status yang diambil dari masing-masing id, lalu disimpan ke dalam variabel
let SMP_MTS = document.getElementById("SMP_MTS")
let SMA_SMK = document.getElementById("SMA_SMK")
let Mahasiswa = document.getElementById("Mahasiswa")
let Guru = document.getElementById("Guru")
let Dosen = document.getElementById("Dosen")
let Sudah_Bekerja = document.getElementById("Sudah_Bekerja")
let Belum_Bekerja = document.getElementById("Belum_Bekerja")

// Tambahkan event listener untuk mengubah tampilan dropdown berdasarkan opsi yang dipilih
ProfilDropdown.addEventListener("change", function () {
    // simpan pilihan pada dropdown profil ke localstorage
    // localStorage.setItem("selectedOption", ProfilDropdown.value);

    // Semua dropdown awalnya disembunyikan
    SMA_SMK.style.display = "none";
    SMP_MTS.style.display = "none";
    Mahasiswa.style.display = "none";
    Guru.style.display = "none";
    Dosen.style.display = "none";
    Sudah_Bekerja.style.display = "none";
    Belum_Bekerja.style.display = "none";
    StatusDropdown.style.display = "none";
    LabelStatus.style.display = "none";
    spasi.style.display = "none";

    // Ambil value dari option pada dropdown profil, lalu disimpan dalam variabel
    let selectedOption = ProfilDropdown.value;

    // Jika opsinya masih default (defaultnya pilih)
    if (selectedOption === "0") {
        // Maka, spasi antara dropdown profil dan status disembunyikan
        spasi.style.display = "none";

        // Dropdown statusnya muncul dan opsi yang muncul disembunyikan
        StatusDropdown.style.display = "none";
        LabelStatus.style.display = "none";

    } else if (selectedOption === "Pelajar") {
        // Maka, spasi antara dropdown profil dan status dimundulkan
        spasi.style.display = "inline";
        StatusDropdown.style.display = "inline";
        LabelStatus.style.display = "inline";

        // Set opsi default ketika user memilih opsi "Pelajar"
        StatusDropdown.querySelector("option[value='SMP/MTS Sederajat']").selected = true;

        // save state dia
        localStorage.setItem('KeyPelajar','Pelajar')

        // Opsi yang kita harapkan ada, sisanya di hide
        SMP_MTS.style.display = "block"
        SMA_SMK.style.display = "block";
        Mahasiswa.style.display = "block";
    } else if (selectedOption === "Pengajar") {
        // Maka, spasi antara dropdown profil dan status dimunculkan
        spasi.style.display = "inline";

        // Dropdown statusnya muncul dan opsi yang muncul dibatasi (kenapa block? karena agar label dan dropdownnya sejajar)
        StatusDropdown.style.display = "inline";
        LabelStatus.style.display = "inline";

        // Opsi guru otomatis terselect ketika user memilih opsi "Pengajar"
        StatusDropdown.querySelector("option[value='Guru']").selected = true;

         // save state dia
         localStorage.setItem('KeyPengajar','Pengajar')

        // Opsi yang kita harapkan ada, sisanya di hide
        Guru.style.display = "block";
        Dosen.style.display = "block";
    } else {
        // Maka, spasi antara dropdown profil dan status dimunculkan
        spasi.style.display = "inline";

        // Dropdown statusnya muncul dan opsi yang muncul dibatasi (kenapa block? karena agar label dan dropdownnya sejajar)
        StatusDropdown.style.display = "inline";
        LabelStatus.style.display = "inline";


         // save state dia
         localStorage.setItem('KeyUmum','Umum')

        // Opsi guru otomatis terselect ketika user memilih opsi "Umum"
        StatusDropdown.querySelector("option[value='Sudah Bekerja']").selected = true;

        // Opsi yang kita harapkan ada, sisanya di hide
        Sudah_Bekerja.style.display = "block";
        Belum_Bekerja.style.display = "block";
    }
});
