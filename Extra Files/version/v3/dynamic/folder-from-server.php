<?php $decfolder = openssl_decrypt(base64_decode($item['name']), $method, $key, OPENSSL_RAW_DATA, $iv); ?>
<div class="folder-nav-container fnav-<?php echo $item['fid']; ?>" data-id="<?php echo $item['fid']; ?>">
  <button class="nav-btn-container folder-btn" id="f-<?php echo $item['fid']; ?>" data-id="<?php echo $item['fid']; ?>">
    <img src="icons/colored-folder-icons/folder-575b68.svg" alt="" class="nav-icon"><span class="nav-text fname-<?php echo $item['fid']; ?>" id="fname-<?php echo $item['fid']; ?>"><?php echo $decfolder; ?></span>
  </button>
</div>