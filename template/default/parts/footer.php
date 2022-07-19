<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:26:05+07:00
# @Email:  ido.alit@gmail.com
# @Filename: footer.php
# @Last modified by:   user
# @Last modified time: 2018-01-23T11:26:47+07:00
?>


<footer class="py-2 bg-dark text-grey-lighter">
    <div class="container">
        <div class="row py-2">
            <div class="col-md-2">

                <!-- <svg class="fill-current text-grey-lighter block h-12 w-12 mb-2" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 118.4 135" style="enable-background:new 0 0 118.4 135;" xml:space="preserve">
                    <path d="M118.3,98.3l0-62.3l0-0.2c-0.1-1.6-1-3-2.3-3.9c-0.1,0-0.1-0.1-0.2-0.1L61.9,0.8c-1.7-1-3.9-1-5.4-0.1l-54,31.1
                    l-0.4,0.2C0.9,33,0.1,34.4,0,36c0,0.1,0,0.2,0,0.3l0,62.4l0,0.3c0.1,1.6,1,3,2.3,3.9c0.1,0.1,0.2,0.1,0.2,0.2l53.9,31.1l0.3,0.2
                    c0.8,0.4,1.6,0.6,2.4,0.6c0.8,0,1.5-0.2,2.2-0.5l53.9-31.1c0.3-0.1,0.6-0.3,0.9-0.5c1.2-0.9,2-2.3,2.1-3.7c0-0.1,0-0.3,0-0.4
                    C118.4,98.6,118.3,98.5,118.3,98.3z M114.4,98.8c0,0.3-0.2,0.7-0.5,0.9c-0.1,0.1-0.2,0.1-0.2,0.1l-20.6,11.9L59.2,92.1l-33.9,19.6
                    L4.6,99.7l0,0l0,0C4.2,99.5,4,99.2,4,98.8l0-62.5l0,0l0-0.1c0-0.4,0.2-0.7,0.5-0.9l20.8-12l33.9,19.6l33.9-19.6l20.6,11.9l0.1,0
                    c0.3,0.2,0.5,0.5,0.6,0.9l0,62.3L114.4,98.8L114.4,98.8z M95.3,68.6v39.4L23.1,66.4V26.9L95.3,68.6z" />
                </svg> -->

                <img class="aligncenter wp-image-2599" src="template/default/assets/images/logo_uin.png" width="200" height="180" style="margin: 2px">
                <!-- <div>
                    <i class="fa fa-map-marker"></i> Jalan T. Rizal Nurdin, Km. 4,5 Sihitang. Padangsidimpuan, <br>Kode Pos 22733.
                    <br>
                    <i class="fa fa-phone"></i> Telp. (0634) 22080
                    <br>
                    <i class="fa fa-fax"></i> Fax. (0634) 24022
                    <br>
                    <i class="fa fa-envelope"></i> <a href="humas@iain-padangsidimpuan.ac.id">
                        <p>
                            humas@iain-padangsidimpuan.ac.id
                        </p>
                    </a>
                </div> -->
                <!-- <div class="mb-4">  </div> -->
                <!-- <h3><u>Layanan Online</u></h3>
                <a title="Perpanjang Masa Peminjaman Online" class="btn btn-outline-success mb-2" href="index.php?p=perpanjang"><i class="fas fa-calendar-plus mr-2"></i>Perpanjang Mandiri</a>
                <a title="Bebas Pustaka" class="btn btn-outline-success mb-2" href="index.php?p=member"><i class="fas fa-graduation-cap mr-2"></i>Bebas Pustaka</a>
                <a title="Cek Peminjaman" class="btn btn-outline-success mb-2" href="index.php?p=member"><i class="fas fa-book mr-2"></i>Cek Peminjaman</a>
                <a target="_blank" title="Cek Status Keanggotaan" class="btn btn-outline-success mb-2" href="index.php?p=member&sec=my_account"><i class="fas fa-user mr-2"></i>Cek Status Keanggotaan</a>
                <a target="_blank" title="Rumah Jurnal" class="btn btn-outline-success mb-2" href="http://jurnal.iain-padangsidimpuan.ac.id/"><i class="fas fa-question mr-2"></i>Subject Guide (Topic Corner)</a>
                <a title="Cek Plagiarsm" class="btn btn-outline-success mb-2" href="index.php?p=member"><i class="fas fa-file-pdf mr-2"></i>Cek Plagiarisme Tulisan</a>
                <a target="_blank" title="Perpanjang Masa Peminjaman Online" class="btn btn-outline-success mb-2" href="http://library.fis.uny.ac.id/survei/index.php/298819?lang=id"><i class="fas fa-server mr-2"></i>Survei</a> -->
            </div>
            <div class="col-md-5 pt-8 md:pt-0">
                <h4 class="mb-4"><?= __('About Us'); ?></h4>
                <p>
                    <?= $sysconf['template']['classic_footer_about_us']; ?>
                </p>
            </div>
            <div class="col-md-4 pt-8 md:pt-0">
                <h4 class="mb-4"><?= __('Search'); ?></h4>
                <div class="mb-2"><?= __('start it by typing one or more keywords for title, author or subject'); ?></div>
                <form action="index.php">
                    <div class="input-group mb-3">
                        <input name="keywords" type="text" class="form-control" placeholder="<?= __('Enter keywords'); ?>" aria-label="Enter keywords" aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" value="search" name="search" id="button-addon2"><?= __('Find Collection'); ?>
                            </button>
                        </div>
                    </div>
                </form>
                <!-- <hr>
                <a target="_blank" title="Support Us" class="btn btn-outline-success mb-2" href="https://slims.web.id/web/pages/support-us/"><i class="fas fa-heart mr-2"></i><?= __('Keep SLiMS Alive'); ?></a>
                <a target="_blank" title="Contribute" class="btn btn-outline-light mb-2" href="https://github.com/slims/"><i class="fab fa-github mr-2"></i><?= __('Want to Contribute?'); ?></a> -->
            </div>
        </div>
        <hr>
        <div class="flex font-thin text-sm">
            <p class="flex-1">&copy; <?php echo date('Y'); ?> &mdash; Senayan Developer Community</p>
            <div class="flex-1 text-right text-grey"><?= __('Powered by '); ?><code>SLiMS</code></div>
        </div>
    </div>
</footer>

<?php if ($sysconf['chat_system']['enabled'] && $sysconf['chat_system']['opac']) : ?>
    <div id="show-pchat2" style="position: fixed; bottom: 16px; right: 16px" class="shadow rounded">
        <button title="Chat" class="btn btn-primary"><i class="fas fa-comments mr-2"></i><?= __('Chat'); ?></button>
    </div>
<?php endif; ?>

<?php
// Chat Engine
include LIB . "contents/chat.php"; ?>

<!-- // Load modal -->
<?php include "_modal_topic.php"; ?>
<?php include "_modal_advanced.php"; ?>

<!-- // Load highlight -->
<script src="<?= JWB; ?>highlight.js"></script>
<?php if (isset($_GET['search']) && (isset($_GET['keywords'])) && ($_GET['keywords'] != '')) : ?>
    <script>
        $('.card-link, p, dl > dd').highlight(<?= $searched_words_js_array; ?>);
    </script>
<?php endif; ?>

<!-- // load our vue app.js -->
<script src="<?php echo assets('js/app.js?v=' . date('Ymd-his')); ?>"></script>
<script src="<?php echo assets('js/app_jquery.js?v=' . date('Ymd-his')); ?>"></script>
<?php include __DIR__ . "./../assets/js/vegas.js.php"; ?>
<?php if ($sysconf['chat_system']['enabled'] && $sysconf['chat_system']['opac']) : ?>
    <script>
        $('#show-pchat').click(() => {
            $('.s-chat').hide()
            $('#show-pchat2').show()
        })
        $('#show-pchat2').click(() => {
            $('.s-chat').show(300, () => {
                $('#show-pchat2').hide()
            })
        })
    </script>
<?php endif; ?>
</body>

</html>