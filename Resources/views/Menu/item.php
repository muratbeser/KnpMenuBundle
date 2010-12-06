<?php if($item->shouldBeRendered()): ?>
    <li <?php echo $view['menu']->attributes($view['menu']->getItemAttributes($item->getRawValue())) ?>>
        <a href="<?php echo $item->getUri() ?>"><?php echo $item ?></a>
    </li>
    <?php if($item->hasChildren()): ?>
        <?php echo $view->render('MenuBundle:Menu:menu.php', array('item' => $item)) ?>
    <?php endif; ?>
<?php endif; ?>
