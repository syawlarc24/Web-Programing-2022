const factor = 14650;

const usd = document.getElementById("usd");
const idr = document.getElementById("idr");

usd.addEventListener("input", function (ev){
   const valeu = ev.currentTarget.value;
   const valueIDR = valeu * factor;
   idr.value = valueIDR;
});

idr.addEventListener("input", function(ev){
    const value = ev.currentTarget.value;
    console.valueUSD = value / factor;
    usd.value = valueUSD;
});