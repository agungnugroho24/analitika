<!--footer start-->
<input type="hidden" class="message" value="<?= $this->session->flashdata('msg'); ?>">
<footer class="site-footer">
    <div class="text-center">
        <h6><p>Copyright ©</i><?php $date=date_create("");echo date_format($date,"Y"); ?> Kementerian PPN/Bappenas</p></h6>
        <a href="#" class="go-top">
            <i class="fa fa-angle-up"></i>
        </a>
    </div>
</footer>
<!--footer end-->