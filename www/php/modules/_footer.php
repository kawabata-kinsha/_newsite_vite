</div>
<!-- /wrap -->


<script src="<?php echo $root; ?>/assets/js_lib/jquery-3.5.1.min.js" type="text/javascript"></script>
<?php if($vite_dev_fp): ?>
<!-- dev -->
<script type="module" src="<?php echo $vite_dev; ?>/@vite/client"></script>
<script type="module" src="<?php echo $vite_dev; ?>/src/ts/main.ts"></script>
<?php else: ?>
<!-- build -->
<script type="module" src="/assets/dist/<?php echo $arr["src/ts/main.ts"]["file"];?>"></script>
<?php endif; ?>


</body>
</html>