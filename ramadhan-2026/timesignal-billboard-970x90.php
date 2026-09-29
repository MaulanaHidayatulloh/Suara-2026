<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Time Signal Ramadan 2026</title>
<style>
body{
    margin:0 ;
    padding: 0;
}
.ramadhan {
    margin-top:10px;
    width: 970px;
    height: 90px;
    background: url('https://creative.suara.com/ads/ramadan/970x90.jpeg') no-repeat center center;
    background-size:100%;
    display: inline-block;
    position: relative;
    font-family: 'Poppins', sans-serif;
    margin: 0;
}


.ramadhan-widget {
    position: relative;
    z-index: 2;
    padding: 8px 20px 20px 172px;
    color: #fdca86;
}

.ramadhan-widget h2{ font-size:14px; margin:0;color:#fff}
.ramadhan-widget h3{ font-size:12px; font-weight:300; margin:0; margin-bottom:5px; margin-top: 4px;color:#fff}

.ramadhan-widget td.active {
    background: #C12300;
    color: #fff;
    font-weight: bold;
}

.ramadhan-widget table {
    width: 550px;
    border-collapse: collapse;
    border: 1px solid #fdca86;
}
.ramadhan-widget th, .ramadhan-widget td {
    padding: 6px;
    text-align: center;
}
.ramadhan-widget th {
    font-weight:bold;
    color:#000;
    background:#FA9174;
    font-size: 15px;
    border:1px solid #fff;
}
.ramadhan-widget td{
    background:#fff;
    color:#000;
    font-weight:bold;
    font-size: 14px;
}

#citySelect{
    width: 150px;
    height:30px;
    border-radius:10px;
    background:#F3411D;
    color:#fff;
}

#countdown {
    background:#214FBC;
    border-radius:10px;
    display: inline-block; 
    width: 200px; 
    height:30px;
    line-height:30px;
    color:#fff;
    font-size:13px;
    text-align: center;
    font-weight:300; 
}

table{ margin-top:10px; display:none }
#btnAdzan{
    position: absolute;
    right:8px;
}
.btn-adzan{
    margin-left:10px;
    height:40px;
    padding:0 15px;
    border:none;
    border-radius:10px;
    background:#fdca86;
    color:#000;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

.btn-adzan:hover{
    background:#3d161f;
    color:#fff;
}
.btn-adzan:disabled{
    background:#999;
    color:#555;
    cursor:not-allowed;
    opacity:0.6;
}
.running-text{
    width:100%;
    overflow:hidden;
    white-space:nowrap;
    background:#3d161f;
    color:#fff;
    height:37px;
    line-height:35px;
    margin-top:-40px;
    position:absolute;
}

.running-text span{
    display:inline-block;
    padding-left:100%;
    font-size:21px;
    animation:marquee 12s linear infinite;
    font-weight:regular;
}

@keyframes marquee{
    0% { transform:translateX(0); }
    100% { transform:translateX(-100%); }
}
a{
    text-decoration:none;
}
a.download-btn{
    background:#F32F31;
    color:#fff;
    float:right;
    padding: 8px 15px 8px 15px;
    border-radius:20px;
    margin-top:-25px;
    font-size:13px;
    display: none;
}
</style>
</head>
<body>
<div class="ramadhan">
  <div class="ramadhan-widget">
    <button id="btnAdzan" class="btn-adzan">🔊 Putar Adzan</button>
    <h2>Jadwal Imsyakiyah <span id="ramadanLabel">Memuat...</span></h2>
    <h3 id="tgl-ramadhan">Memuat...</h3>

    <select id="citySelect">
      <option>Loading kota...</option>
    </select>

    <div id="countdown">Menuju Imsak: --:--:--</div>
    <a href="https://www.suara.com/ramadan-imsakiyah" target="_blank">
    <table id="jadwal">
      <thead>
        <tr>
          <th>Imsak</th>
          <th>Subuh</th>
          <th>Dzuhur</th>
          <th>Ashar</th>
          <th>Maghrib</th>
          <th>Isya</th>
        </tr>
      </thead>
      <tbody>
        <tr><td colspan="6">Memuat jadwal...</td></tr>
      </tbody>
    </table>
    </a>
    <a class="download-btn" href="https://www.suara.com/ramadan-imsakiyah" target="_blank">
        Download Sekarang
    </a>

  </div>
</div>

<div id="runningText" class="running-text" style="display:none;">
    <span id="runningContent"></span>
</div>

<!-- AUDIO -->
<audio id="adzanAudio" src="https://creative.suara.com/ads/ramadan/adzan.mpeg" preload="auto"></audio>


<script>

let countdownInterval = null;
let currentPrayerName = "";
let adzanPlayed = false;
let activePrayerTime = null;


// ===============================
// ELEMENTS
// ===============================
const jadwalTableBody = document.querySelector("#jadwal tbody"),
      ramadanLabel = document.getElementById("ramadanLabel"),
      tglRamadhanSpan = document.getElementById("tgl-ramadhan"),
      countdownEl = document.getElementById("countdown"),
      citySelect = document.getElementById("citySelect"),
      adzanAudio = document.getElementById("adzanAudio"),
      btnAdzan = document.getElementById("btnAdzan"),
      runningText = document.getElementById("runningText"),
      runningContent = document.getElementById("runningContent");

btnAdzan.style.display="none";
btnAdzan.disabled=true;


// ===============================
// FORMAT TANGGAL
// ===============================
function formatDateYYYYMMDD(date){
    return date.toISOString().split('T')[0];
}

function formatDateMasehi(date){
    return date.toLocaleDateString('id-ID',{
        weekday:'long',
        day:'numeric',
        month:'long',
        year:'numeric'
    });
}

function getHijriDate(){

const today = new Date();

let d = today.getDate();
let m = today.getMonth() + 1;
let y = today.getFullYear();

if (m <= 2) {
  y -= 1;
  m += 12;
}

let A = Math.floor(y / 100);
let B = 2 - A + Math.floor(A / 4);

let JD = Math.floor(365.25 * (y + 4716))
       + Math.floor(30.6001 * (m + 1))
       + d + B - 1524;

let L = JD - 1948440 + 10632;
let N = Math.floor((L - 1) / 10631);
L = L - 10631 * N + 354;

let J = (Math.floor((10985 - L) / 5316)) * (Math.floor((50 * L) / 17719))
      + (Math.floor(L / 5670)) * (Math.floor((43 * L) / 15238));

L = L - (Math.floor((30 - J) / 15)) * (Math.floor((17719 * J) / 50))
      - (Math.floor(J / 16)) * (Math.floor((15238 * J) / 43)) + 29;

let M = Math.floor((24 * L) / 709);
let D = L - Math.floor((709 * M) / 24);
let Y = 30 * N + J - 30;

// 🔧 koreksi Indonesia
D = D - 1;

const bulanHijri = [
"Muharram",
"Safar",
"Rabiul Awal",
"Rabiul Akhir",
"Jumadil Awal",
"Jumadil Akhir",
"Rajab",
"Sya'ban",
"Ramadan",
"Syawal",
"Dzulqa'dah",
"Dzulhijjah"
];

return `${D} ${bulanHijri[M-1]} ${Y} H`;

}


// ===============================
// LOAD DEFAULT JAKARTA
// ===============================
async function loadJakarta() {
    ramadanLabel.innerText = "DKI Jakarta";

    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');

    const day = `${yyyy}${mm}${dd}`;
    const storageKey = `jadwal_${day}`; // Kunci unik harian (misal: jadwal_20260317)

    tglRamadhanSpan.innerText = `${getHijriDate()} | ${formatDateMasehi(today)}`;
    const row = jadwalTableBody.querySelector("tr");

    // 1. Cek apakah data hari ini sudah ada di Local Storage
    const cached = localStorage.getItem(storageKey);
    if (cached) {
        const jadwal = JSON.parse(cached);
        renderJadwal(jadwal);
        return; // Selesai, tidak perlu panggil API
    }

    // 2. Jika tidak ada cache, ambil dari API
    try {
        const res = await fetch(`https://api2.suara.com/v2/islamic/jadwal/sholat?day=${day}`);
        const json = await res.json();
        const data = json[0].data.jadwal[0];

        const jadwal = {
            imsak: data.imsak,
            subuh: data.subuh,
            dzuhur: data.dzuhur,
            ashar: data.ashar,
            maghrib: data.maghrib,
            isya: data.isya
        };

        // 3. Simpan hasil ke Local Storage
        localStorage.setItem(storageKey, JSON.stringify(jadwal));

        renderJadwal(jadwal);

    } catch (err) {
        row.innerHTML = `<td colspan="6">Gagal memuat jadwal Jakarta</td>`;
    }

    // Fungsi pembantu untuk menampilkan data ke tabel
    function renderJadwal(jadwal) {
        row.innerHTML = `
            <td>${jadwal.imsak}</td>
            <td>${jadwal.subuh}</td>
            <td>${jadwal.dzuhur}</td>
            <td>${jadwal.ashar}</td>
            <td>${jadwal.maghrib}</td>
            <td>${jadwal.isya}</td>
        `;
        startCountdown(jadwal);
    }
}


// ===============================
// LOAD KOTA EQURAN
// ===============================
async function loadCities(){

    if(citySelect.dataset.loaded) return;

    citySelect.innerHTML="<option>Loading kota...</option>";

    try{

    const res = await fetch(
    "https://api.myquran.com/v2/sholat/kota/semua"
    );

    const json = await res.json();

    citySelect.innerHTML='<option value="">Pilih Kota</option>';

    json.data.forEach(kota=>{

    citySelect.innerHTML +=
    `<option value="${kota.id}">${kota.lokasi}</option>`;

    });

    citySelect.dataset.loaded = true;

        }catch(err){

    console.error(err);

    citySelect.innerHTML='<option>Gagal memuat kota</option>';

    }

}


// ===============================
// FETCH JADWAL EQURAN
// ===============================
async function fetchJadwal(idKota){

const today = new Date();
const bulan = today.getMonth()+1;
const tahun = today.getFullYear();
const tanggalHariIni = today.getDate();

const row = jadwalTableBody.querySelector("tr");

row.innerHTML=`<td colspan="6">Loading jadwal...</td>`;

try{

const res = await fetch(
`https://api.myquran.com/v2/sholat/jadwal/${idKota}/${tahun}/${bulan}`
);

const json = await res.json();

const list = json.data.jadwal;

// langsung ambil index hari
const todayJadwal = list[tanggalHariIni - 1];

if(!todayJadwal){
row.innerHTML=`<td colspan="6">Jadwal tidak ditemukan</td>`;
return;
}

row.innerHTML=`
<td>${todayJadwal.imsak}</td>
<td>${todayJadwal.subuh}</td>
<td>${todayJadwal.dzuhur}</td>
<td>${todayJadwal.ashar}</td>
<td>${todayJadwal.maghrib}</td>
<td>${todayJadwal.isya}</td>
`;

startCountdown(todayJadwal);

}catch(err){

console.error(err);
row.innerHTML=`<td colspan="6">Error mengambil data</td>`;

}

}

// ===============================
// EVENT SELECT
// ===============================
citySelect.addEventListener("click",loadCities,{once:true});

citySelect.addEventListener("change",()=>{

const idKota=citySelect.value;

if(!idKota) return;

ramadanLabel.innerText=
citySelect.options[citySelect.selectedIndex].text;

fetchJadwal(idKota);

});


// ===============================
// COUNTDOWN
// ===============================
function startCountdown(jadwal){

if(countdownInterval)
clearInterval(countdownInterval);

const sholat=[
"imsak",
"subuh",
"dzuhur",
"ashar",
"maghrib",
"isya"
];

function update(){

const now=new Date();

let nextTime=null;
let nextName="";

for(let key of sholat){

const [h,m]=jadwal[key].split(":").map(Number);

const waktu=new Date(
now.getFullYear(),
now.getMonth(),
now.getDate(),
h,m,0
);

if(waktu>now && !nextTime){

nextTime=waktu;
nextName=
key.charAt(0).toUpperCase()+key.slice(1);

}

}

if(!nextTime){

const [h,m]=jadwal.imsak.split(":").map(Number);

nextTime=new Date(
now.getFullYear(),
now.getMonth(),
now.getDate()+1,
h,m,0
);

nextName="Imsak";

}

const diff=nextTime-now;

const jam=Math.floor(diff/3600000);
const menit=Math.floor((diff%3600000)/60000);
const detik=Math.floor((diff%60000)/1000);

countdownEl.innerText=
`Menuju ${nextName}: `
+`${String(jam).padStart(2,'0')}:`
+`${String(menit).padStart(2,'0')}:`
+`${String(detik).padStart(2,'0')}`;

}

update();

countdownInterval=setInterval(update,1000);

}


// ===============================
// INIT
// ===============================
document.addEventListener("DOMContentLoaded",()=>{

citySelect.innerHTML=
'<option value="jakarta">Kota Jakarta</option>';

citySelect.value="jakarta";

loadJakarta();

});

</script>



</body>
</html>