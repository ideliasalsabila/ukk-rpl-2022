<?=$this->extend("template/dashboard")?>

<?=$this->section("content")?>
<p class="mb-4">Selamat datang <?= $userdata["nama"] ?> di aplikasi Road History!</p>
<a href="<?= base_url() ?>/isidata" class="btn btn-primary btn-icon-split">
    <span class="icon text-white-50">
        <i class="fas fa-flag"></i>
    </span>
    <span class="text">Isi Riwayat Perjalanan Anda</span>
</a>
<?=$this->endSection()?>