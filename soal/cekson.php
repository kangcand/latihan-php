<?php class Worker
{
    public function addWorker()
    {
        $this->name = $_POST['name'];
    }
}

$worker = new Worker();
echo $_POST['name'];

?>

<form method="post">
<input type="text" name="name">
<input type="submit" value="submit">
</form>