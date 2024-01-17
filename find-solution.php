<?php 
add_shortcode( 'find_solution', 'find_solution_fn' );

function find_solution_fn( $atts ) {
	
	$atts = shortcode_atts( array(
		'form' => 'none'
	), $atts );

	$alpha = range('A', 'M');

	$areas = array(
		'tw' => array(
			'icon' => '<img src="https://placehold.co/32x32/orange/fff?text=w">',
			'img' => 'https://placehold.co/500x400/blue/fff?text=tw',
			'helper_txt' => 'Select all of the problems you are having with tw:',
			'fields' => array(
				'tw 1' => 13,
				'tw 2' => 123,
				'tw 3' => 134,
				'tw 4' => 32,
				'tw 5' => 23,
				'tw 6' => 31,
				'tw 7' => 321,
			)
		),
		'k' => array(
			'icon' => '<img src="https://placehold.co/32x32/orange/fff?text=k">',
			'img' => 'https://placehold.co/500x400/blue/fff?text=k',
			'helper_txt' => 'Select all of the problems you are having with k:',
			'fields' => array(
				'k 1' => 31,
				'k 2' => 31,
				'k 3' => 123,
				'k 4' => 13,
				'k 5' => 13,
			)
		),
		'd' => array(
			'icon' => '<img src="https://placehold.co/32x32/orange/fff?text=D">',
			'img' => 'https://placehold.co/500x400/blue/fff?text=d',
			'helper_txt' => 'Select all of the problems you are having with d:',
			'fields' => array(
				'l 1' => 4,
				'l 2' => 41,
				'l 3' => 24,
				'l 4' => 42,
				'l 5' => 24,
			)
		),
		's' => array(
			'icon' => '<img src="https://placehold.co/32x32/orange/fff?text=L">',
			'img' => 'https://placehold.co/500x400/blue/fff?text=s',
			'helper_txt' => 'Select all problems you are having with s:',
			'fields' => array(
				's 1' => 1,
				's 2' => 12,
				's 3' => 12,
				's 4' => 12,
				's 5' => 124,
				's 6' => 12,
				's 7' => 12,
			)
		),
		'sp' => array(
			'icon' => '<img src="https://placehold.co/32x32/orange/fff?text=sp">',
			'img' => 'https://placehold.co/500x400/blue/fff?text=c',
			'helper_txt' => 'Select all of the c in your w:',
			'fields' => array(
				'sp 1' => 13,
				'sp 2' => 32,
				'sp 3' => 123,
				'sp 4' => 14,
				'sp 5' => 13,
				'sp 6' => 143,
				'sp 7' => 25,
				'sp 8' => 135,
				'sp 9' => 13,
				'sp 10' => 134,
			)
		),
	);

	$solutions = array(
		'Solution 1' => array(
			'benefits' => array(
				'Benefit 1',
				'Benefit 2',
				'Benefit 3',
				'Benefit 4',
				'Benefit 5',
			),
			'img' => 'https://placehold.co/500x400/yellow/fff?text=wc',
			'link' => '#a'
		),
		'Solution 2' => array(
			'benefits' => array(
				'Benefit 1',
				'Benefit 2',
				'Benefit 3',
			),
			'img' => 'https://placehold.co/500x400/yellow/fff?text=cf',
			'link' => '#b'
		),
		'Solution 3' => array(
			'benefits' => array(
				'Benefit 1',
				'Benefit 2',
				'Benefit 3',
				'Benefit 4',
				'Benefit 5',
			),
			'img' => 'https://placehold.co/500x400/yellow/fff?text=ws',
			'link' => '#c'
		),
		'Solution 4' => array(
			'benefits' => array(
				'Benefit 1',
				'Benefit 2',
				'Benefit 3',
				'Benefit 4',
				'Benefit 5',
			),
			'img' => 'https://placehold.co/500x400/yellow/fff?text=ls',
			'link' => '#d'
		),
		'Solution 5' => array(
			'benefits' => array(
				'Benefit 1',
				'Benefit 2',
				'Benefit 3',
				'Benefit 4',
			),
			'img' => 'https://placehold.co/500x400/yellow/fff?text=ps',
			'link' => '#e'
		),
	);

	$return = '<div id="findSolution">
		<div class="fsstepsnav">
			<div id="nav-fsstep1">
				<strong>Step 1 <span>1</span></strong>
				Identify problems with your w
			</div>
			<div id="nav-fsstep2" class="disabled">
				<strong>Step 2 <span>2</span></strong>
				Review your recommended solutions
			</div>
			<div id="nav-fsstep3" class="disabled">
				<strong>Step 3 <span>3</span></strong>
				Learn how to fix your issues
			</div>
		</div>

		<div id="fsstep1">
			<div class="fsareasnav">';
				$i = 1;//<img src="' . $data[ 'icon' ] . '">
				foreach( $areas as $name => $data ) {
					$return .= '<div id="fsheading-tab' . $i . '" ' . ( $i==1 ? "class=\"active\"" : '' ) . '>
						<div>
							' . $data[ 'icon' ] . '
							' . $name . '
						</div>
					</div>';
					$i++;
				}
			$return .= '</div>
			<div class="tabs"><form id="areasform">';
				$i = 1;
				foreach( $areas as $name => $data ) {
					$return .= '<div class="tab' . $i . ' tab">
						<div class="tabimg" style="background-image:url(\'' . $data[ 'img' ]. '\');">
						</div>
						<div class="tabform">
							<strong>' . $name . '</strong>
							<p>' . $data[ 'helper_txt' ] . '</p>
							<div class="checkboxes">';
								$ii = 0;
								foreach( $data[ 'fields' ] as $title => $vals ) {
									$return .= '
										<label>
											<input name="' . $alpha[$ii] . $i . '" value="' . $vals . '" type="checkbox"> ' . $title . '
										</label>
									';
									$ii++;
								}
							$return .= '</div>
							<div class="prevnext">
								<span class="doprev" data-current=' . $i . ' style="' . ( $i == 1 ? 'display:none;' : '' ) . '">Prev</span>
								<span class="donext" data-current=' . $i . ' style="' . ( $i == 5 ? 'display:none;' : '' ) . '">Next</span>
								<div class="movestep2" style="display:none">
									- OR - 
									<span class="movestep2btn">View My Solution</span>
								</div>
							</div>
						</div>
					</div>';
					$i++;
				}

			$return .= '</form></div>
	</div>

	<input type="hidden" value="0" class="ct_1">
	<input type="hidden" value="0" class="ct_2">
	<input type="hidden" value="0" class="ct_3">
	<input type="hidden" value="0" class="ct_4">
	<input type="hidden" value="0" class="ct_5">';

	$i = 1;
	$solutionoutput = '';
	$modalcontent = '';
	foreach( $solutions as $name => $data) {
		$solutionoutput .= '<div class="solution sol' . $i . '" style="display:none">	
			<strong><span>' . $i . '</span> ' . $name . '</strong>
			<div class="solcontent closed">
				<div class="solimg">
					<img src="' . $data[ 'img' ] . '">
				</div>
				<div class="benefits">
					<p>KEY BENEFITS</p>
					<ul>';
						foreach( $data[ 'benefits' ] as $bt ) {
							$solutionoutput .= '<li>' . $bt . '</li>';
						}
					$solutionoutput .= '</ul>
					<a href="#fsnsform">Fix My Problem</a> <a href="' . $data[ 'link' ] . '">View Product Details</a>
				</div>
			</div>
		</div>';

		$modalcontent .= '<div id="fs2h' . $i . '-ctnt" class="housemodal">
			<strong>' . $name . '</strong>
			<div class="solcontent">
				<div class="solimg">
					<img src="' . $data[ 'img' ] . '">
				</div>
				<div class="benefits">
					<p>KEY BENEFITS</p>
					<ul>';
						foreach( $data[ 'benefits' ] as $bt ) {
							$modalcontent .= '<li>' . $bt . '</li>';
						}
					$modalcontent .= '</ul>
					<a href="#fsnsform">Fix My Problem</a> <a href="' . $data[ 'link' ] . '">View Product Details</a>
				</div>
			</div>
		</div>';
		$i++;
	}

	$return .= '<div id="fsstep2" style="display:none">
		<div class="stp2sols">
			<strong>Recommended Solutions</strong>
			<div class="recdd">';
				$return .= $solutionoutput;
			$return .= '</div>
			<strong>Other Solutions Available</strong>
			<div class="other">';
				$return .= $solutionoutput;
			$return .= '</div>
		</div>

		<div class="stp2img">
			<div>
				<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 660 797">
					<image width="660" height="797" xlink:href="https://placehold.co/660x797/red/fff?text=pic"></image> 
					<a xlink:href="#1" class="fs2house" id="fs2h1">
						<rect x="201" y="644" fill="#fff" opacity="0" width="50" height="50"></rect>
					</a>
					<a xlink:href="#2" class="fs2house" id="fs2h2">
						<rect x="251" y="587" fill="#fff" opacity="0" width="50" height="50"></rect>
					</a>
					<a xlink:href="#3" class="fs2house" id="fs2h3">
						<rect x="79" y="445" fill="#fff" opacity="0" width="50" height="50"></rect>
					</a>
					<a xlink:href="#4" class="fs2house" id="fs2h4">
						<rect x="71" y="571" fill="#fff" opacity="0" width="50" height="50"></rect>
					</a>
					<a xlink:href="#5" class="fs2house" id="fs2h5">
						<rect x="359" y="639" fill="#fff" opacity="0" width="50" height="50"></rect>
					</a>
				</svg>
			</div>
		</div>
	</div>

	<div id="fsstep3" style="display:none">
		<div class="concerns">
			<strong class="s3heading">Based on your concerns</strong>';

			$i = 1;
			foreach( $areas as $name => $data ) {

				$return .= '<div class="tab' . $i . '">
					<strong>' . $data[ 'icon' ] . $name . '</strong>';

					$ii = 0;
					foreach( $data[ 'fields' ] as $title => $vals ) {
						$return .= '<span style="display:none" class="con' . $alpha[$ii] . $i . '"><img src="https://placehold.co/32x32/orange/fff?text=L"> ' . $title . '</span>';
						$ii++;
					}

				$return .= '</div>';
				$i++;
			}
		$return .= '</div>

		<div class="nextstep" id="fsnsform">
			<strong class="s3heading">Next Step?</strong>
			<p>Learn how we can help you!</p>
			' . do_shortcode( '[form shortcode goes here id=' . $atts['form'] . ']' ) . '
		</div>

	</div>

	<div id="modal-background"></div>
	<div id="modal-content">
		<span id="modal-close">&#10005; CLOSE</span>
		' . $modalcontent . '
	</div>

	<script>
	var sols, currentval, newval, ssteps;

	jQuery( ".fsstepsnav div" ).click( function() {
		jQuery( ".fsstepsnav div" ).addClass( "disabled" );
		jQuery(this).removeClass( "disabled" );
		ssteps = jQuery(this).attr( "id" ).substring( 4 );

		if ( ssteps == "fsstep1") {
			jQuery( "#fsstep1").show();
			jQuery( "#fsstep2, #fsstep3").hide();
		} else {

			if( jQuery( "#findSolution .ct_1").val() > 0 ) {
				jQuery( "#fsstep2 .recdd .sol1" ).show();
				jQuery( "#fsstep2 .other .sol1" ).hide();
			} else {
				jQuery( "#fsstep2 .recdd .sol1" ).hide();
				jQuery( "#fsstep2 .other .sol1" ).show();
			}

			if( jQuery( "#findSolution .ct_2").val() > 0 ) {
				jQuery( "#fsstep2 .recdd .sol2" ).show();
				jQuery( "#fsstep2 .other .sol2" ).hide();
			} else {
				jQuery( "#fsstep2 .recdd .sol2" ).hide();
				jQuery( "#fsstep2 .other .sol2" ).show();
			}

			if( jQuery( "#findSolution .ct_3").val() > 0 ) {
				jQuery( "#fsstep2 .recdd .sol3" ).show();
				jQuery( "#fsstep2 .other .sol3" ).hide();
			} else {
				jQuery( "#fsstep2 .recdd .sol3" ).hide();
				jQuery( "#fsstep2 .other .sol3" ).show();
			}

			if( jQuery( "#findSolution .ct_4").val() > 0 ) {
				jQuery( "#fsstep2 .recdd .sol4" ).show();
				jQuery( "#fsstep2 .other .sol4" ).hide();
			} else {
				jQuery( "#fsstep2 .recdd .sol4" ).hide();
				jQuery( "#fsstep2 .other .sol4" ).show();
			}

			if( jQuery( "#findSolution .ct_5").val() > 0 ) {
				jQuery( "#fsstep2 .recdd .sol5" ).show();
				jQuery( "#fsstep2 .other .sol5" ).hide();
			} else {
				jQuery( "#fsstep2 .recdd .sol5" ).hide();
				jQuery( "#fsstep2 .other .sol5" ).show();
			}

			jQuery( "#fsstep1").hide();
			jQuery( "#fsstep2, #fsstep3").show();

			if ( ssteps == "fsstep3") {
				jQuery("html, body").animate({
					scrollTop: jQuery("#fsstep3").offset().top - 145
				}, 500);
			}
		}
	});

	jQuery( "#areasform input" ).change( function() {

		sols = jQuery(this).val().split("");

		if( jQuery(this).is(":checked") ) {

			jQuery(".con" + jQuery(this).attr( "name") ).show();

			jQuery.each(sols , function(index, val) {
				currentval = parseInt( jQuery( "#findSolution .ct_" + val ).val() );
				newval = currentval + 1;
				jQuery( "#findSolution .ct_" + val ).val( newval );
			});

		} else {
			jQuery(".con" + jQuery(this).attr( "name") ).hide();

			jQuery.each(sols , function(index, val) {
				currentval = parseInt( jQuery( "#findSolution .ct_" + val ).val() );
				newval = currentval - 1;
				jQuery( "#findSolution .ct_" + val ).val( newval );
			});
		}
	});

	jQuery( "#areasform .tab:not(:first-child)" ).hide();

	jQuery( ".fsareasnav > div" ).click( function() {
		jQuery( ".fsareasnav > div" ).removeClass( "active" );
		jQuery(this).addClass( "active" );
		jQuery( "#areasform .tab" ).hide();
		ssteps = jQuery(this).attr( "id" ).substring( 10 );
		jQuery( "#areasform ." + ssteps ).css( "display", "flex" );
		if( ssteps == "tab5" ) {
			jQuery( ".movestep2" ).show();
		}
	});

	jQuery( ".prevnext span" ).click( function() {

		if ( jQuery(this).hasClass( "movestep2btn" ) ) {
			jQuery( "#nav-fsstep2" ).trigger( "click" );
		} else {
			if ( jQuery(this).hasClass( "doprev" ) ) {
				ssteps = jQuery(this).attr( "data-current" ) - 1;
			} else {
				ssteps = parseInt( jQuery(this).attr( "data-current" ) ) + 1;
			}
			jQuery( "#fsheading-tab" + ssteps ).trigger("click");
		}
	});

	jQuery( "#fsstep2 .solution strong" ).click( function() {
		if ( jQuery( this ).next().hasClass( "closed" ) ) {
			jQuery( this ).next().css( "display", "flex");
			jQuery( this ).next().removeClass( "closed" );
			jQuery( this ).addClass( "opened" );
		} else {
			jQuery( this ).next().css( "display", "none");
			jQuery( this ).next().addClass( "closed" );
			jQuery( this ).removeClass( "opened" );
		}
	});

	jQuery(function(){
		jQuery(".fs2house, #modal-background, #modal-close").click(function() {
			jQuery("#modal-content, #modal-background").toggleClass("active");
			sols = jQuery( this ).attr( "id" ) + "-ctnt";
			jQuery( ".housemodal" ).hide();
			jQuery( "#" + sols ).show();
		});
	});
	</script>

	<style type="text/css">
.fsstepsnav div {display:inline-block;width:33%;text-align:center;color:#2a5f96;cursor:pointer}
.fsstepsnav strong {display:block;color:#1db5e6;font-weight:400;font-size:35px;margin-bottom:20px;}
.fsstepsnav span {color:#fff;background:#1db5e6;border-radius:100px;display:inline-block;width:56px;height:56px;line-height:56px}
.fsstepsnav .disabled strong {color:#d8e2ee;}
.fsstepsnav .disabled span {border:2px solid #cddae9;;background:none;color:#d8e2ee;}

.fsareasnav {margin:70px -2% 50px;overflow-x:clip;display:flex;}
.fsareasnav > div {display:inline-block;background:#e4ecf5;margin-left:4px;margin-right:4px;text-align:center;padding:16px 8px 12px;justify-content:center;align-items:center;flex-grow:1;transform:skew(-20deg,0deg);max-width:100%;cursor:pointer}
.fsareasnav div:first-child {margin-left:-18px;}
.fsareasnav div:last-child {margin-right:-16px;}
.fsareasnav div div {color:#265688;transform:skew(20deg,0deg);font-weight:600;}
.fsareasnav svg {width:32px;height:32px;display:block;margin:0 auto 10px;}
.fsareasnav .active {background:#0d2f52;box-shadow:0 -5px 0 0 #1db5e6;}
.fsareasnav .active div {color:#fff}
.fsareasnav > div:hover {background:#1db5e6;transition:ease-in 0.25s;} 
.fsareasnav > div:hover div {color:#fff}
.fsareasnav > div:hover svg {filter:brightness(0) invert(1);}

#areasform .tab {margin:0 -16px 20px -16px;display:flex;flex-wrap:wrap;}
#areasform .tabimg {flex:0 0 auto;width:40%;background:center center no-repeat;background-size:cover;}
#areasform .tabform {flex:0 0 auto;width:60%;padding-left:50px}
#areasform .tabform strong {color:#28598d;font-size:32px;font-weight:normal    }
#areasform .tabform p {color:#1db5e6;font-size:20px;}
#areasform .checkboxes {display:flex;flex-wrap:wrap;align-content:start;justify-content:space-between;min-height:320px}
#areasform .checkboxes label {width:48%;flex-grow:0;border-top:1px solid #d8e2ee;border-bottom:1px solid #d8e2ee;padding:12px 0;margin-top:-1px;color:#2a5f96;line-height:32px;font-size:20px;font-weight:400;}
#areasform input {width:32px;height:32px;vertical-align:middle;margin:0 5px 3px 0; border-radius:8px;vertical-align:middle;border:2px solid #1db5e6;appearance:none;outline:none;cursor:pointer;}
#areasform input:checked {
  appearance:auto;clip-path:circle(63% at 50% 50%);filter:hue-rotate(-376deg) grayscale(.5);}
#areasform .prevnext span {background-color:#1db5e6;padding:16px 40px;display:inline-block;border-radius:50px;color:#fff;margin-right:20px;cursor:pointer}
#areasform .prevnext span:hover {background:#234263}
.movestep2 {display:inline}
#areasform .prevnext .movestep2btn {margin-left:20px;border:2px solid #234263;background:#fff;color:#234263}
#areasform .prevnext .movestep2btn:hover {color:#fff}

#fsstep2 {display:flex;align-items:center;column-gap:30px;justify-content:space-between;}
#fsstep2 .stp2sols {flex:0 0 auto;width:50%;}
#fsstep2 .stp2sols > strong {font-size:28px;font-weight:400;color:#1db5e6;padding-bottom:35px;
    display:block;}   

#fsstep2 .recdd {margin-bottom:60px;}

#fsstep2 .solution {border-top:1px solid #d8e2ee;}
#fsstep2 .solution strong {color:#2a5f96;font-size:20px;font-weight:normal;padding:0px 0px 15px;width:100%;display:block;cursor:pointer}
#fsstep2 .solution strong:before {content:"\2039 ";color:#333;display:inline-block;font-size:43px;transform:rotate(-90deg);padding:0 19px 0 0;margin:0 15px 0 0px;}

#fsstep2 .solution strong.opened:before {transform:rotate(90deg);margin:0 6px 0 10px;
    padding:0px 0px 0px 19px;}

#fsstep2 .solution strong:hover {background:#e6ebf0}
#fsstep2 .solution strong span {color:#fff;background:#1db5e6;border-radius:100px;display:inline-block;width:30px;height:30px;text-align:center;line-height:30px;}
#fsstep2 .other .solution strong span {background:none;border:1px solid #1db5e6;color:#2a5f96;}
#fsstep2 .solution .closed {display:none}

.solcontent {display:flex;column-gap:33px;margin:0 0 65px;transition:ease-in 3s;}
.solcontent .solimg {flex:0 0 auto;width:165px;text-align:center;}
.solcontent .solimg img {max-height:200px;}
.solcontent .benefits {flex:0 0 auto;}
.solcontent .benefits p {color:#1db5e6;font-size:19px;}
.solcontent .benefits ul {padding-left:19px;margin-bottom:25px}
.solcontent .benefits li {color:#2a5f96;font-size:16px;margin-bottom:12px}
.solcontent .benefits a {display:inline-block;color:#234263;padding:15px 38px;border:1px solid #234263;border-radius:50px;text-decoration:none}
.solcontent .benefits a:first-of-type {background:#1db5e6;border-color:#1db5e6;color:#fff;margin-right:20px}
.solcontent .benefits a:hover {color:#fff;background-color:#234263;}
.solcontent .benefits a:hover:first-of-type {background-color:#234263;border-color:#234263}

#fsstep2 .stp2img {flex:0 0 auto;width:45%;}

#fsstep3 {display:flex;column-gap:33px;border-top:1px solid #d8e2ee;margin:150px 0 0;padding:50px 0 0;}
#fsstep3 .s3heading {color:#1db5e6;font-weight:normal;font-size:28px;}

#fsstep3 .concerns {flex:0 0 auto;width:50%;display:flex;flex-wrap:wrap;align-content:start;justify-content:space-between;}
#fsstep3 .concerns strong {display:block;width:100%;}

#fsstep3 .concerns svg {width:28px;height:28px;vertical-align:middle;margin-right:10px;}
#fsstep3 .concerns div {width:48%;padding:16px 0;flex-grow:0;}
#fsstep3 .concerns div strong {font-size:20px;color:#2a5f96;font-weight:normal;line-height:35px;margin:10px 0;}
#fsstep3 .concerns span {display:block;color:#2a5f96}
#fsstep3 .concerns span svg {width:15px;margin-right:3px;}

#fsstep3 .nextstep {flex:0 0 auto;width:50%;}
#fsstep3 .nextstep p {color:#2a5f96;}

#modal-background {display:none;position:fixed;top:0;left:0;width:100%;height:100%;background-color:#000;opacity:.7;filter:alpha(opacity=50);z-index:1000;}
#modal-close {cursor:pointer;color:#aaa;font-size:28px;font-weight:bold}
#modal-close:hover {color:#000;}
#modal-content {background-color:white;border-radius:5px;box-shadow:0 0 20px 0 #222;display:none;height:auto;min-height:400px;margin:10px;padding:15px 20px;position:fixed;max-width:1046px;width:100%;z-index:1000;top:50%;left:50%;transform:translate(-50%, -50%);margin:0 0 20px}
#modal-content strong {font-size:26px;font-weight:normal;color:#2a5f96;padding:20px 0 40px;display:block;}
#modal-content .solcontent {justify-content:center;}
#modal-background.active, #modal-content.active {display:block;}

#frm_form_4_container {background:#e6ebf0;margin-top:30px;
    padding:30px;}
#frm_form_4_container .frm_primary_label {padding-bottom:10px;color:#2a5f96;font-size:16px;font-weight:bold;}
#frm_form_4_container .frm_submit {text-align:center}
#frm_form_4_container .frm_submit button {border-radius:50px;font-size:16px;background:#1db5e6;border:0;padding:20px 50px;font-weight:bold;}
#frm_form_4_container .frm_submit button:hover {background:#234263;color:#fff;}
	</style>';

	return $return;
}