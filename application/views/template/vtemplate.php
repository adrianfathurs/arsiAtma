<!-- Syntac Load View Header -->
<?php
    if(isset($header))
    {
        $this->load->view($header);
    }
    ?>

<!-- Syntac Load CSS Assets -->
<?php
    if(isset($css))
    {
        $this->load->view($css);
    }
    ?>

<!-- Syntac Load content Content -->
<?php
    if(isset($content))
    {
        $this->load->view($content);
    }
    ?>



<!-- Syntac Load  Footer -->
<?php
    if(isset($footer))
    {
        $this->load->view($footer);
    }
    ?>