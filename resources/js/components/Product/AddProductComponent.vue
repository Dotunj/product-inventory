<template>
    <div class="main-content">
        <div class="container-fluid">
    
            <div class="col-lg-6">
                <form class="form-vertical" role="form" method="post" action="">
                    <div class="form-group">
                        <label for="title" class="control-label">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="">
                    </div>
    
    
                    <div class="form-group">
                        <label for="starting_amount" class="control-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" value="">
                    </div>
    
                    <hr>
    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</template>


<script>
    export default {
    
    }
</script>

