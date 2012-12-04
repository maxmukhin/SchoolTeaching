<?php

namespace View;

abstract class AView
{
    public function display()
    {
        ?>
<html>
    <head></head>
    <body>

        <?php

        print $this->getData();

        ?>

        <form action="">
            <input type="hidden" name="action" value="add" />
            <input type="hidden" name="target" value="data" />

            <label>Data: <input type="text" name="data" value="" /></label>

            <input type="submit" value="Add data" />
        </form>

    </body>
</html>
        <?php
    }

    abstract protected function getData();
}
