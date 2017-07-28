function displayResult(item, val, text) {
    console.log(item);
	
	var javascriptdegiskeni = text;
	var gelenid = val;
	window.location = "verials.php?veri=" + javascriptdegiskeni +"&id=" + gelenid;

}

$(function () {
	$('#demo').typeahead({
        source: [
		   { id: 1, name: 'Alışveriş Merkezleri'},
		   { id: 2, name: 'Alüminyum ve Yan Sanayi'},
		   { id: 3, name: 'Ambalaj ve Yan Sanayi'},
		   { id: 4, name: 'Bilişim Sektörü'},
		   { id: 5, name: 'Büro ve Kırtasiye Malz.'},
		   { id: 6, name: 'Cam Sanayi'},
		   { id: 7, name: 'Diğer Sektörler'},
		   { id: 8, name: 'Egitim Kurumları'},
		   { id: 9, name: 'Ekonomi ve Finans'},
		   { id: 10, name: 'Elektrik ve Elektronik'},
		   { id: 11, name: 'Emlak Sektörü'},
		   { id: 12, name: 'Endüstriyel Ürünler'},
		   { id: 13, name: 'Fuar ve Organizasyon'},
		   { id: 14, name: 'Gıda Sektörü'},
		   { id: 15, name: 'Güzellik Sektörü'},
		   { id: 16, name: 'Hizmet Sektörü'},
		   { id: 17, name: 'Holdingler'},
		   { id: 18, name: 'Hurda'},
		   { id: 19, name: 'İmalat'},
		   { id: 20, name: 'İthalat ve İhracat'},
		   { id: 21, name: 'Kağıt Sanayi'},
		   { id: 22, name: 'Kimya Sanayi'},
		   { id: 23, name: 'Maden ve Metal Sektörü'},
		   { id: 24, name: 'Makina Sanayi'},
		   { id: 25, name: 'Metal Sanayi'},
		   { id: 26, name: 'Mimarlık'},
		   { id: 27, name: 'Mobilya Sanayi'},
		   { id: 28, name: 'Mühendislik'},
		   { id: 29, name: 'Nakliyat Lojistik'},
		   { id: 30, name: 'Ofis ve Kırtasiye'},
		   { id: 31, name: 'Organize Sanayii Siteleri'},
		   { id: 32, name: 'Otomotiv ve Yan Sanayi'},
		   { id: 33, name: 'Pazarlama Şirketleri'},
		   { id: 34, name: 'Petrol ve Yan Sanayii'},
		   { id: 35, name: 'Plastik ve Yan Sanayi'},
		   { id: 36, name: 'Savunma Sanayi'},
		   { id: 37, name: 'Sigorta'},
		   { id: 38, name: 'Sogutma ve Isıtma'},
		   { id: 39, name: 'Spor Sektörü'},
		   { id: 40, name: 'Tamir ve Bakım Servisleri'},
		   { id: 41, name: 'Tarım ve Hayvancılık'},
		   { id: 42, name: 'Tekstil Sektörü'},
		   { id: 43, name: 'Telekomunikasyon'},
		   { id: 44, name: 'Ulaşım ve Taşımacılık'},
		   { id: 45, name: 'nşaat Sektörü'},
		   { id: 47, name: 'Reklam ve Tanıtım'},
	    ],
        display: 'name',
        val: 'id',
        itemSelected: displayResult
    });
});