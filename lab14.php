<?php
class Page
{
    private string $name = 'page';
    private string $template = '<div><p>It is a default page</p></div>';

    public function render(): void
    {
        echo $this->template;
    }
}
?>
