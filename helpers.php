<?php

function priceFormat($price)
{
    return number_format((float)$price / 100.0 , 2);
}
