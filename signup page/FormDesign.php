<?php
    class FormDesign{
        public function formCard($body){
?>
        <!-- Registration Form -->
        <div class="card" style="width:30%; margin-right:50%; margin-top:5%; margin-bottom:50%; background-color:#ecd9a7;">
            <div class="card-header">
                <div class="card-body">
                    <!-- Code here -->
                    <?php echo $body; ?>
                    <!-- Code here -->
                </div>
            </div>
        </div>
    </div>
<?php
        }
    }
?>
