   <script>
     const base_url = "<?= base_url(); ?>";
   </script>
   <!-- Essential javascripts for application to work-->
    <script src="<?= media() ?>/admin/js/jquery-3.7.0.min.js"></script>
    <script src="<?= media() ?>/admin/js/bootstrap.min.js"></script>
    <script src="<?= media() ?>/admin/js/main.js"></script>
    <!-- Data table plugin-->
    <script type="text/javascript" src="<?= media() ?>/admin/plugins/jquery.dataTables.min.js"></script>
    <script src="<?= media() ?>/admin/plugins/tinymce/tinymce.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <script type="text/javascript" src="<?= media(); ?>/admin/plugins/select2.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/functions_admins.js"></script>
    <script src="<?= media();?>/admin/js/<?= $data['page_functions_js']; ?>"></script>
  </body>
</html>