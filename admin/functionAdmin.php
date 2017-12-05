<?php 

/*******  TRI  ********/
// Notre fonction qui affiche les liens
function sort_link($text, $order=false){
    global $db, $order_by, $order_dir;

    if(!$order)
        $order = $text;

    $link = '<a href="?order=' . $order;
    if($order_by==$order && $order_dir=='ASC')
        $link .= '&inverse=true';
    $link .= '"';
    if($order_by==$order && $order_dir=='ASC')
        $link .= ' class="order_asc"';
    elseif($order_by==$order && $order_dir=='DESC')
        $link .= ' class="order_desc"';
    $link .= '>' . $text . '</a>';

    return $link;
}