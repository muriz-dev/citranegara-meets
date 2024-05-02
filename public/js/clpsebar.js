$(".sidebar ul li").on('click', function () {
    $(".sidebar ul li.active").removeClass('active');
    $(this).addClass('active');
});

$('.open-btn').on('click', function () {
    $('.sidebar').addClass('active');

});


$('.close-btn').on('click', function () {
    $('.sidebar').removeClass('active');

});

// Ambil id ProfilDropdown dan StatusDropdown lalu disimpan dalam sebuah variabel
let ProfilDropdown = document.getElementById('ProfilDropdown')
let StatusDropdown = document.getElementById('StatusDropdown')
let LabelStatus = document.getElementById('LabelStatus')

// Ambil elemen-elemen dari dropdown status yang diambil dari masing-masing id, lalu disimpan ke dalam variabel
let SMP_MTS = document.getElementById("SMP_MTS")
let SMA_SMK = document.getElementById("SMA_SMK")
let Mahasiswa = document.getElementById("Mahasiswa")
let Guru = document.getElementById("Guru")
let Dosen = document.getElementById("Dosen")
let Sudah_Bekerja = document.getElementById("Sudah_Bekerja")
let Belum_Bekerja = document.getElementById("Belum_Bekerja")

//Tambahkan event listener untuk mengubah tampilan dropdown berdasarkan opsi yang dipilih
ProfilDropdown.addEventListener("change", function () {

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

    // Tampilkan dropdown yang sesuai dengan opsi yang dipilih
    let selectedOption = ProfilDropdown.value

    // jika opsinya masih default (defaultnya pilih)
    if (selectedOption === "0") {
        

        // Dropdown statusnya muncul dan opsi yang muncul disembunyikan
        StatusDropdown.style.display = "none"
        LabelStatus.style.display = "none"

        // Jika dia memilih pelajar 
    } else if (selectedOption === "Pelajar") {
        StatusDropdown.style.display = "inline"
        LabelStatus.style.display = "inline"

        // Set opsi default ketika user memilih opsi "Pelajar"
        StatusDropdown.querySelector("option[value='SMP/MTS SEDERAJAT']").selected = true;

        // Opsi yang kita harapkan ada,sisanya di hide
        SMP_MTS.style.display = "block";
        SMA_SMK.style.display = "block";
        Mahasiswa.style.display = "block";
    } else if (selectedOption === "Pengajar") {
        // Dropdown statusnya muncul dan opsi yang muncul dibatasi (kenapa block? karena agar label dan dropdownnya sejajar)
        StatusDropdown.style.display = "inline-block"
        LabelStatus.style.display = "inline-block"

        // Opsi guru otomatis terselect ketika user memilih opsi "Pengajar"
        StatusDropdown.querySelector("option[value='Guru']").selected = true

        // Opsi yang kita harapkan ada,sisanya di hide
        Guru.style.display = "block"
        Dosen.style.display = "block"
    } else {
        // Dropdown statusnya muncul dan opsi yang muncul dibatasi (kenapa block? karena agar label dan dropdownnya sejajar)
        StatusDropdown.style.display = "inline"
        LabelStatus.style.display = "inline"

        // Opsi guru otomatis terselect ketika user memilih opsi "Umum"
        StatusDropdown.querySelector("option[value='Sudah Bekerja']").selected = true

        // Opsi yang kita harapkan ada,sisanya di hide
        Sudah_Bekerja.style.display = "block"
        Belum_Bekerja.style.display = "block"
    }
})

// Ambil id ProfilDropdown dan StatusDropdown lalu disimpan dalam sebuah variabel
let ProfilDropdown2 = document.getElementById('ProfilDropdown2')
let StatusDropdown2 = document.getElementById('StatusDropdown2')
let LabelStatus2 = document.getElementById('LabelStatus2')

// Ambil elemen-elemen dari dropdown status yang diambil dari masing-masing id, lalu disimpan ke dalam variabel
let SMP_MTS2 = document.getElementById("SMP_MTS2")
let SMA_SMK2 = document.getElementById("SMA_SMK2")
let Mahasiswa2 = document.getElementById("Mahasiswa2")
let Guru2 = document.getElementById("Guru2")
let Dosen2 = document.getElementById("Dosen2")
let Sudah_Bekerja2 = document.getElementById("Sudah_Bekerja2")
let Belum_Bekerja2 = document.getElementById("Belum_Bekerja2")

//Tambahkan event listener untuk mengubah tampilan dropdown berdasarkan opsi yang dipilih
ProfilDropdown2.addEventListener("change", function () {

    // Semua dropdown awalnya disembunyikan
    SMA_SMK2.style.display = "none";
    SMP_MTS2.style.display = "none";
    Mahasiswa2.style.display = "none";
    Guru2.style.display = "none";
    Dosen2.style.display = "none";
    Sudah_Bekerja2.style.display = "none";
    Belum_Bekerja2.style.display = "none";
    StatusDropdown2.style.display = "none";
    LabelStatus2.style.display = "none";

    // Tampilkan dropdown yang sesuai dengan opsi yang dipilih
    let selectedOption2 = ProfilDropdown2.value

    // jika opsinya masih default (defaultnya pilih)
    if (selectedOption2 === "0") {
        

        // Dropdown statusnya muncul dan opsi yang muncul disembunyikan
        StatusDropdown2.style.display = "none"
        LabelStatus2.style.display = "none"

        // Jika dia memilih pelajar 
    } else if (selectedOption2 === "Pelajar") {
        StatusDropdown2.style.display = "inline"
        LabelStatus2.style.display = "inline"

        // Set opsi default ketika user memilih opsi "Pelajar"
        StatusDropdown2.querySelector("option[value='SMP/MTS SEDERAJAT']").selected = true;

        // Opsi yang kita harapkan ada,sisanya di hide
        SMP_MTS2.style.display = "block";
        SMA_SMK2.style.display = "block";
        Mahasiswa2.style.display = "block";
    } else if (selectedOption2 === "Pengajar") {
        // Dropdown statusnya muncul dan opsi yang muncul dibatasi (kenapa block? karena agar label dan dropdownnya sejajar)
        StatusDropdown2.style.display = "inline-block"
        LabelStatus2.style.display = "inline-block"

        // Opsi guru otomatis terselect ketika user memilih opsi "Pengajar"
        StatusDropdown2.querySelector("option[value='Guru']").selected = true

        // Opsi yang kita harapkan ada,sisanya di hide
        Guru2.style.display = "block"
        Dosen2.style.display = "block"
    } else {
        // Dropdown statusnya muncul dan opsi yang muncul dibatasi (kenapa block? karena agar label dan dropdownnya sejajar)
        StatusDropdown2.style.display = "inline"
        LabelStatus2.style.display = "inline"

        // Opsi guru otomatis terselect ketika user memilih opsi "Umum"
        StatusDropdown2.querySelector("option[value='Sudah Bekerja']").selected = true

        // Opsi yang kita harapkan ada,sisanya di hide
        Sudah_Bekerja2.style.display = "block"
        Belum_Bekerja2.style.display = "block"
    }
})