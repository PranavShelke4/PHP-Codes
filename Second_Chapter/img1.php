<?php
            header("content-type: image/png");
            $handel = ImageCrate(130, 50);
            $bg_color = ImageColorAllocate($handel,240,240,140);
            $txt_color = ImageColorAllocate($handel,0,0,0);
            ImageString ($handel,5,5,18,"Pranav",$txt_color);
            imagepng($handel);
?>