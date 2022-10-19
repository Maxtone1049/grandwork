<input class="form-control numeric" name="ref" placeholder="Reference Number" type="text" value="<?php echo $code;?>" hidden/>

<?php
            //code to generate random number for access Code;
            $alph = "PEL";
            $code = '';
            for ($i=0; $i < 25; $i++) { 
                $code .= $alph[rand(0,90)];
            }
            ?>