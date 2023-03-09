let dataDiri = [
  {
    nama: 'Rafi Muhammad',
    wanted: '$50.000',
    summary: 'Hello, my name is Rafi Muhammad. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
    hobby: ['Ngoding', 'Main Futsal'],
    matkul: ['Web Programming', 'Software Engineering'],
    gambar: 'pics/rafi.jpg',
    // isActive: 0
  },
  {
    nama: 'Umar Siddiq Gege Khoiruddin',
    wanted: '$100.000',
    summary: 'Hello, my name is Umar Siddiq Gege Khoiruddin, now I m studying at Bina Nusantara University majoring in computer science and statistics since 2020 ',
    hobby: ['Membaca buku'],
    matkul: ['Computer network'],
    gambar: 'pics/umar.jpg',
    // isActive: 0
  },
  {
    nama: 'Sekar Azalea',
    wanted: '$120.000',
    summary: 'Hello, my name is Sekar Azalea. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
    hobby: ['Yoga'],
    matkul: ['Human and Computer Interaction'],
    gambar: 'pics/sekar.jpg',
    // isActive: 0
  }
];

let activeData = {
  nama: 'Rafi Muhammad',
  wanted: '$50.000',
  summary: 'Hello, my name is Rafi Muhammad. I am in my 20s and always eager to learn anything. Adaptive is one word that describes me the most. Currently, I am studying computer science and statistics at Bina Nusantara University. In addition, I am interested in designing UI/UX and back-end engineering.',
  hobby: ['Ngoding', 'Main Futsal'],
  matkul: ['Web Programming', 'Software Engineering'],
  gambar: 'pics/rafi.jpg',
};

let otherImg = document.getElementById('other-pics-button');
otherImg.addEventListener('click', function() {
  const nama = otherImg.getAttribute('value');
  let elNama = document.getElementById('nama');
  let elWanted = document.getElementById('wanted');
  let elSummary = document.getElementById('summary');
  let elHobby = document.getElementsByClassName('hobby');
  let elMatkul = document.getElementsByClassName('matkul');
  let activePic = document.getElementById('active-pic');

  dataDiri.every(anggota => {
    if (anggota.nama == nama) {
      activeData = anggota;
      return false;
    }
    return true;
  });

  elNama.innerText = activeData.nama;
  elWanted.innerText = activeData.wanted;
  elSummary.innerText = activeData.summary;
  activePic.src = activeData.gambar;  

  console.log("elHobby:", elHobby);
})