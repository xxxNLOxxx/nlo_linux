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

class BlogPage extends Page 
{
    private string $name = 'blog';
    private string $template = '
        <div style="display: flex; gap: 15px;">
            <div style="border: 1px solid #000; padding: 10px;">
                <h3>Италия</h3>
                <p>Рим и Колизей</p>
            </div>
            <div style="border: 1px solid #000; padding: 10px;">
                <h3>Франция</h3>
                <p>Париж и Лувр</p>
            </div>
        </div>';

    public function render(): void 
    {
        echo $this->template;
    }
}
?>
