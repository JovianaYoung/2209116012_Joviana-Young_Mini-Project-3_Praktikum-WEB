<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
        <h3 class="text-center panel-title">Kategori Produk</h3>
    </div>

    <div class="panel-body">
        <ul class="row nav nav-pills nav-stacked category-menu">
            <?php 
                getPCategories();
            ?>
        </ul>
    </div>
</div>

<div class="panel panel-default sidebar-menu">
    <div class="panel-heading">
            <h3 class="text-center panel-title">Material Produk</h3>
    </div>

    <div class="panel-body">
        <ul class="row nav nav-pills nav-stacked category-menu">
            <?php 
                getMaterial();
            ?>
        </ul>
    </div>
</div>