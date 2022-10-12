<?php
/**
 * Template Name: home Template
 * Template Post Type: post, page
 */

get_header(); 

?>
<style>
    .post-1{
	display: none !important;
}
.widget-area{
	display: none !important;
}
.sit-info{
	display: none;
}
body {
    background-color: #fff !important;
}



.btn-shop {
	margin-top: 15px;
}

.btn-shop-inner {
	display: inline-block;
	height: 40px;
	padding: 0 20px;
	border: 0;
	border-radius: 2px;
	color: #fff;
	background-color: #896d3d;
	font-size: 14px;
	line-height: 40px;
	text-align: center;
	font-weight: 700;
}

.bed-image-inner {
	position: relative;
	z-index: 1;
}

.bed-image-inner a {
	display: inline-block;
	overflow: hidden;
	position: relative;
}

.bed-image-inner a:before {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: rgba(0, 0, 0, .65);
	content: "";
}

.bed-image-inner a:hover:before {
	background-color: rgba(0, 0, 0, .65) !important;
	z-index: 9;
}

.bed-image-inner a  {
	transition: .15s ease-in-out;
	transform-origin: left top;
	object-fit: cover;
	background-color: rgba(0, 0, 0, .65);
}

/* .bed-image-inner a:hover img {
	transform: scale(1.1);
	background-color: rgba(0, 0, 0, .45);
	transition: .25s linear;
} */

.widget-image-text {
	position: absolute;
	color: #fff;
	top: 10%;
	left: 10%;
	transform: translate(-10%, -10%);
	z-index: 10;
}

.widget-image-text strong {
	font-size: 24px;
	font-weight: 700;
	line-height: 1.55;
	letter-spacing: -.3px;
}

.widget-image-text em {
	font-size: 17px;
	font-style: normal;
}
@media (max-width:960px) and (min-width:768px){
	.widget-image-text{
		left: 14%;
	}
}
@media (max-width:576px){
	.bed-image-inner{
		margin-top: 10px;
	}
	
}
</style>
<div class="container">
<div class="row bed-image-main  bed-image-inner">
            <div class="col-lg-6 col-md-6 col-12 ">
                <div class="bed-image-inner">
                    <div class="widget-image-text">
                        <strong>BEDS</strong><br>
                        <em>View the full range of beds</em>
                        <div class="btn-shop">
                            <button class="btn-shop-inner">Shop Now</button>
                        </div>
                    </div>
                    <a href="">
                        <img src="/wordpress-site/wordpress/wp-content/uploads/2022/09/1-6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 ">
                <div class="bed-image-inner">
                    <div class="widget-image-text">
                        <strong>Storage Boxes</strong><br>
                        <em>The perfect partner for your bed</em>
                        <div class="btn-shop">
                            <button class="btn-shop-inner">Shop Now</button>
                        </div>
                    </div>
                    <a href="">
                        <img src="/wordpress-site/wordpress/wp-content/uploads/2022/09/1-6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <div class="row bed-image-main mt-3  bed-image-inner">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="bed-image-inner">
                    <div class="widget-image-text">
                        <strong>DIVANS</strong><br>
                        <em>Browse our range of divans and otloman divans</em>
                        <div class="btn-shop">
                            <button class="btn-shop-inner">Shop Now</button>
                        </div>
                    </div>
                    <a href="">
                        <img src="/wordpress-site/wordpress/wp-content/uploads/2022/09/1-6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 ">
                <div class="bed-image-inner">
                    <div class="widget-image-text">
                        <strong>Mattresses</strong><br>
                        <em>Get the perfect mattress to accompany your bed</em>
                        <div class="btn-shop">
                            <button class="btn-shop-inner">Shop Now</button>
                        </div>
                    </div>
                    <a href="">
                        <img src="/wordpress-site/wordpress/wp-content/uploads/2022/09/1-6.jpg" alt="" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>







    <div class="table-main">

<?php
$table = get_field( 'table-main' );
if (  !empty ( $table ) ) {
    echo '<table border="0">';
        if ( ! empty( $table['header'] ) ) {
            echo '<thead>';
                echo '<tr>';
                    foreach ( $table['header'] as $th ) {
                        echo '<th>';
                            echo $th['c'];
                        echo '</th>';
                    }
                echo '</tr>';
            echo '</thead>';
        }
        echo '<tbody>;
        

        <tr>
        <td colspan="5">A</td>
        </tr>
        ';
        
            foreach ( $table['body'] as $tr ) {
                echo '<tr>';
                    foreach ( $tr as $td ) {
                        echo '<td>';
                            echo $td['c'];
                        echo '</td>';
                    }
                echo '</tr>';
            }
            
        echo '</tbody>';
    echo '</table>';
}
   



?>
</div>

</div>


