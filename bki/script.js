function bkihesap() {
var kilosu = document.BedenKitleEndeksi.kilosu.value
var boyu = document.BedenKitleEndeksi.boyu.value

	if(boyu > 1 && kilosu > 1){

		var bkisonucu = kilosu/(boyu*boyu/10000)
		document.BedenKitleEndeksi.bki.value = bkisonucu.toFixed(2)

		if(bkisonucu < 18.49){
		document.BedenKitleEndeksi.vkisonuc.value = "Zayıfsınız"
		}

		if(bkisonucu > 18.49 && bkisonucu < 24.99){
		document.BedenKitleEndeksi.vkisonuc.value = "Normal Kilodasınız"
		}

		if(bkisonucu > 24.99 && bkisonucu < 29.99){
		document.BedenKitleEndeksi.vkisonuc.value = "Fazla Kilolusunuz"
		}

		if(bkisonucu > 29.99 && bkisonucu < 34.99){
		document.BedenKitleEndeksi.vkisonuc.value = "1. Derece Obezsiniz"
		}

		if(bkisonucu > 34.99 && bkisonucu < 39.99){
		document.BedenKitleEndeksi.vkisonuc.value = "2. Derece Obezsiniz"
		}

		if(bkisonucu > 39.99){
		document.BedenKitleEndeksi.vkisonuc.value = "3. Derece morbid Obezsiniz"
		}

	}

else{
alert("Hatalı Alan Bulunmaktadır. Lütfen Kontrol Ederek Yeniden Deneyiniz.")
}

}

function fcs(el) {
    if (el.value === el.defaultValue) {
        el.value = '';
        el.setAttribute('class','col2');
    } else if (el.value === '') {
        el.value = el.defaultValue;
        el.setAttribute('class','col2');
    } 

}


