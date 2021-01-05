function showTime() {
    var today = new Date()
    if (today.getTimezoneOffset() == 0) (a=today.getTime() + ( 7 *60*60*1000))
    else (a=today.getTime());
    today.setTime(a);
    var tahun= today.getFullYear ();
    var hari= today.getDay ();
    var bulan= today.getMonth ();
    var tanggal= today.getDate ();
    var hariarray=new Array("Sunday,","Monday,","Tuesday,","Wednesday,","Thursday,","Friday,","Saturday,");
    var bulanarray=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
    document.getElementById("datetime").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;
}
showTime()
