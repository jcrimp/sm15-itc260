<?php
//application/views/rss/index.php

$this->load->view($this->config->item('theme') . 'header');
?>

<h2><?php echo $title ?></h2>

<?php foreach ($rss->channel->item as $rss_item): ?>


        <h3><?php echo $rss_item->title ?></h3>
        <div class="main">
                <?php echo $rss_item->description ?>
        </div>
        <p><a href="<?php echo $rss_item->link ?>">View article</a></p>

<!--foreach($xml->channel->item as $story)
  {
    echo '<a href="' . $story->link . '">' . $story->title . '</a><br />'; 
    echo '<p>' . $story->description . '</p><br /><br />';
  }-->

<?php endforeach ?>

<?php 
$this->load->view($this->config->item('theme') . 'footer');   
?>