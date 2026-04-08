<?php
class Page
{
    private string $name = 'page';
     private string $template = '
        <div style="background: #fdf5e6; padding: 20px; border-radius: 10px;">
            <h1>Добро пожаловать в Мир Путешествий!</h1>
            <p>Сейчас можно спланировать свою поездку, куда хочешь? Переходи в блог =) </p>
        </div>';

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

$linkPage = "lab14.php?page=page"; 
$linkBlog = "lab14.php?page=blog"; 

echo "<a href='$linkPage'>Открыть страницу Page</a><br>";
echo "<a href='$linkBlog'>Открыть страницу Blog</a><br><br>";

if (isset($_GET['page'])) {
    
    if ($_GET['page'] === 'blog') {
        $page = new BlogPage();
        $page->render();
    }
    elseif ($_GET['page'] === 'page') {
        $page = new Page();
        $page->render();    
    }
} else {
echo "Нужно выбрать с помощью ссылок выше."; 
}
?>
