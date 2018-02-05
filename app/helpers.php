<?php

function priceFormat($price) {
    return number_format((float)$price / 100.0 , 2, '.','');
}
/*
Blade::extend(function($view, $compiler)
{
  $pattern = $compiler->createMatcher('datetime');

  return preg_replace($pattern, '$1<?php echo $2->format(\'m/d/Y H:i\'); ?>', $view);
});
*/