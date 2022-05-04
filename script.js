function arszamitas() {
    let t1 = parseInt(document.getElementById("termek1").value);
    let m1 = document.getElementById("mennyiseg1").value;
    let e1 = parseInt(document.getElementById("extra1").value);

    let t2 = parseInt(document.getElementById("termek2").value);
    let m2 = document.getElementById("mennyiseg2").value;
    let e2 = parseInt(document.getElementById("extra2").value);

    let t3 = parseInt(document.getElementById("termek3").value);
    let m3 = document.getElementById("mennyiseg3").value;
    let e3 = parseInt(document.getElementById("extra3").value);

    let osszes1 = t1 * m1 + e1;
    let osszes2 = t2 * m2 + e2;
    let osszes3 = t3 * m3 + e3;

    alert(`A rendelés végösszege: ${osszes1 + osszes2 + osszes3}`);
}