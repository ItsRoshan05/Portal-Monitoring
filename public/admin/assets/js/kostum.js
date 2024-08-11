$(document).ready(function() {
    function filterMenu(query) {
        $('.nav-item').each(function() {
            var itemText = $(this).text().toLowerCase();
            if (itemText.includes(query) || query === '') {
                $(this).removeClass('hidden'); // Tampilkan item menu jika cocok
            } else {
                $(this).addClass('hidden'); // Sembunyikan item menu jika tidak cocok
            }
        });
    }

    $('.sidebar-form input[name="q"]').on('input', function() {
        var query = $(this).val().toLowerCase(); // Ambil nilai input pencarian dan ubah menjadi huruf kecil
        filterMenu(query);
    });

    $('#clear-btn').on('click', function() {
        $('.sidebar-form input[name="q"]').val(''); // Kosongkan input pencarian
        filterMenu(''); // Tampilkan semua item menu
    });
});


