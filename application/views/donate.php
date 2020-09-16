<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('templates/header');?>

<div class="container">
<div class="donate">
    <div class="thanks">Thank you!</div>
    <button>
        <div class="top"></div>
        <div class="inside">
            <form>
                <input type="text" value="$0,00">
            </form>
        </div>
        <span>
            <svg viewBox="0 0 24 24">
                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
            </svg>
            Donate
        </span>
    </button>
</div>

</div>

<?php $this->load->view('templates/footer');?>