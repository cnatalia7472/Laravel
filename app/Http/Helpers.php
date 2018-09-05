<?php

// Disk Space Calculators
function formatKB($kilobytes, $precision = 2, $unit_type)
{
    if($unit_type == 'short')
    {
        $unit = [" KB", " MB", " GB", " TB"];
    }
    else
    {
        $unit = [" Kilobytes", " Megabytes", " Gigabytes", " Terabytes"];
    }
    $exp = floor(log($kilobytes, 1024)) | 0;
    return round($kilobytes / (pow(1024, $exp)), $precision).$unit[$exp];
}

// Disk Space Converter TODO: Design this disk space converter.
function convertDiskSpace($space, $from, $to, $precision)
{




}