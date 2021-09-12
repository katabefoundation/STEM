// #RegDist

var regionObject={
    "Arusha":["Arusha City","Arusha Rural","Karatu","Longido","Arumeru","Monduli","Ngorongoro"],

    "Dar es Salaam":["Ilala","Kinondoni","Temeke","Ubungo","Kigamboni"],

    "Dodoma":["Bahi","Chamwino","Chemba","Dodoma Municipal","Kondoa","Kongwa","Mpwapwa"],


    "Geita":["Bukombe","Chato","Geita Municipal","Mbogwe","Nyang'hwale"],

    "Iringa":["Iringa Municipal","Iringa Rural","Kilolo","Mafinga","Mufindi"],
    
    "Kagera":["Biharamulo","Bukoba Municipal","Bukoba Rural","Karagwe","Kyerwa","Missenyi","Muleba","Ngara"],
    
    "Kaskazini Pemba":["Micheweni","Wete"],

    "Kaskazini Unguja/North Zanzibar":["Kaskazini A","Kaskazini B"],

    "Katavi":["Mlele","Mpanda Rural","Mpanda Town"],

    "Kigoma":["Buhigwe","Kakonko","Kasulu Rural","Kasulu Town","Kibondo","Kigoma Rural","Kigoma-Ujiji Municipal","Uvinza"],

    "Kilimanjaro":["Hai","Moshi Municipal","Moshi Rural","Mwanga","Rombo","Same","Siha"],

    "Kusini Pemba":["Chake Chake","Mkoani"],

    "Kusini Unguja":["Kati / Central Unguja","Kusini / South Unguja"],

    "Lindi":["Kilwa","Lindi Municipal","Lindi Rural","Liwale","Nachingwea","Ruangwa"],

    "Manyara":["Babati Rural","Babati Town","Hanang","Kiteto","Mbulu","Simanjiro"],

    "Mara":["Bunda","Butiama","Musoma Municipal","Musoma Rural","Rorya","Serengeti","Tarime"],

    "Mbeya":["Chunya","Kyela","Mbarali","Mbeya City","Mbeya Rural","Rungwe"],

    "Mjini Magharibi":["Magharibi / Zanzibar West ","Mjini / Zanzibar City"],

    "Morogoro":["Gairo","Kilombero","Kilosa","Morogoro Municipal","Morogoro Rural","Mvomero","Ulanga"],

    "Mtwara":["Masasi Rural","Masasi Town","Mtwara Municipal","Mtwara Rural","Nanyumbu","Newala","Tandahimba"],

    "Mwanza":["Ilemela Municipal","Kwimba","Magu","Misungwi","NyamaganaMunicipal","Sengerema","Ukerewe"],

    "Njombe":["Ludewa","Makambako","Makete","Njombe Rural","Njombe Town","Wanging'ombe"],

    "Pwani":["Bagamoyo","Kibaha","Kibaha Town","Kisarawe","Mafia","Mkuranga","Rufiji"],

    "Rukwa":["Kalambo","Nkasi","Sumbawanga Municipal","Sumbawanga Rural"],

    "Ruvuma":["Mbinga","Namtumbo","Nyasa","Songea Municipal","Songea Rural","Tunduru"],

    "Shinyanga":["Kahama Rural","Kahama Town","Kishapu","Shinyanga Municipal","Shinyanga Rural"],

    "Simiyu":["Bariadi","Busega","Itilima","Maswa","Meatu"],

    "Singida":["Ikungi","Iramba","Manyoni","Mkalama","SingidaMunicipal","Singida Rural"],

    "Songwe":["Ileje","Mbozi","Momba","Songwe(Chunya)","Tunduma Town"],

    "Tabora":["Igunga","Kaliua","Nzega","Sikonge","Tabora Municipal","Urambo","Uyui"],

    "Tanga":["Handeni Rural","Handeni Town","Kilindi","Korogwe Rural","Korogwe Town","Lushoto","Mkinga","Muheza","Pangani","Tanga City"]
}

window.onload = function () {
    var Region = document.getElementById("Region"),
    District = document.getElementById("District");
    for (var country in regionObject) {
        Region.options[Region.options.length] = new Option(country, country);
    }

    Region.onchange = function () {
        District.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done  

        var district = regionObject[Region.value];

        for (var i = 0; i < district.length; i++) {
            District.options[District.options.length] = new Option(district[i],district[i]);
            
        }
        }


}



