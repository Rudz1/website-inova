<section class="container">
    <?php if(isset($message)) { ?>
        <div class="alert alert-danger">
            <?php echo $message ?>
        </div>
    <?php } ?>
    <form method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/admin/banner-tourism-edit-save?id=' . $banners->getId()) ?>" name="edit-form">
        <div class="form-group">
            <label>Imagem</label>
            <input class="form-control-file" type="file" name="image">
        </div> 
        <div class="form-group">
            <label>Nome do Local</label>
            <input class="form-control" type="text" value="<?php echo $banners->getPlaceName() ?>" name="place_name">
        </div> 

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Editar</button>
        </div>
    </form>
    <<script src="link">
    document.edit-form.image.value = "<?php echo $banners->getUri() ?>"</script>
</section>
