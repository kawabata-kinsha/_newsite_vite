</div>
<!-- /wrap -->


<script src="<?php echo $root; ?>/assets/js_lib/jquery-3.5.1.min.js" type="text/javascript"></script>
<?php if($vite_dev_standing): ?>
<!-- dev -->
<script type="module" src="<?php echo $vite_dev_path; ?>/@vite/client"></script>
<script type="module" src="<?php echo $vite_dev_path; ?>/<?php echo $vite_input_ts; ?>"></script>
<?php else: ?>
<!-- build -->
<script type="module" src="/assets/dist/<?php echo $vite_manifest_ary[$vite_input_ts]["file"];?>"></script>
<?php endif; ?>


</body>
</html>