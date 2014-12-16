
<!-- END PAGE LEVEL SCRIPTS -->
<script src="<?php echo site_url('/assets/global/plugins/gritter/js/jquery.gritter.js'); ?>" type="text/javascript"></script>
<?php if ($this->session->flashdata('error') != ''): ?>
  <script type="text/javascript">
     jQuery(document).ready(function() { 
          var unique_id = $.gritter.add({
               title: 'Invalid Credentials',
               text: '<?php echo $this->session->flashdata('error') ?>',
               sticky: false,
               time: 3000,
               class_name: 'my-sticky-class'
          });
     });
  </script>
<?php endif; ?>

<?php if ($this->session->flashdata('result') != ''): ?>
  <script type="text/javascript">
     jQuery(document).ready(function() { 

          var unique_id = $.gritter.add({
               // (string | mandatory) the heading of the notification
               title: 'Products',
               // (string | mandatory) the text inside the notification
               text: '<?php echo $this->session->flashdata('result') ?>',
               // (bool | optional) if you want it to fade out on its own or just sit there
               sticky: false,
               time: 3000,
               // (string | optional) the class name you want to apply to that specific message
               class_name: 'my-sticky-class'
          });

     });
 
  </script>
  
<?php endif; ?>

<?php if ($this->session->flashdata('customer') != ''): ?>
  <script type="text/javascript">
     jQuery(document).ready(function() { 

          var unique_id = $.gritter.add({
               // (string | mandatory) the heading of the notification
               title: 'Customer',
               // (string | mandatory) the text inside the notification
               text: '<?php echo $this->session->flashdata('customer') ?>',
               // (bool | optional) if you want it to fade out on its own or just sit there
               sticky: false,
               time: 3000,
               // (string | optional) the class name you want to apply to that specific message
               class_name: 'my-sticky-class'
          });

     });
 
  </script>
  
<?php endif; ?>