<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

        </div><!-- end .row -->
    </div>
</div><!-- end #body -->

<footer id="footer" role="contentinfo">
	<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=442920457&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:442920457:52" alt="请关照" title="请关照"/></a>
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    <?php _e('由 <a href="http://www.typecho.org">Typecho</a> 强力驱动'); ?>.
</footer><!-- end #footer -->

<?php $this->footer(); ?>
	<script type="application/ld+json">
    {
        "@context": "https://ziyuan.baidu.com/contexts/cambrian.jsonld",
        "@id": "<?php $this->permalink() ?>",
        "appid": "1603398061795086",
        "title": "<?php $this->title() ?>",
        "images": ["<?php $this->fields->XZHimages(); ?>"],
        "description": "<?php $this->description() ?>",
        "pubDate": "<?php $this->date('Y-m-d\TH:i:s'); ?>"
    }
</script>
<script src="//msite.baidu.com/sdk/c.js?appid=
1603398061795086"></script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>
</body>
</html>
