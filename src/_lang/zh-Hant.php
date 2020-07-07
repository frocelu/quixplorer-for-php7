<?php

// English Language Module for v2.3 (translated by the QuiX project)

$GLOBALS["charset"] = "utf-8";
$GLOBALS["text_dir"] = "ltr"; // ('ltr' for left to right, 'rtl' for right to left)
$GLOBALS["date_fmt"] = "Y-m-d H:i";
$GLOBALS["error_msg"] = array(
	// error
	"error"			=> "錯誤",
	"back"			=> "返回",
	
	// root
	"home"			=> "首頁路徑不存在，請檢查你的設定",
	"abovehome"		=> "目前的路徑可能不在首頁路徑上",
	"targetabovehome"	=> "目的地路徑可能不在首頁路徑上",

	// exist
	"direxist"		=> "此路徑不存在",
	//"filedoesexist"	=> "這個檔案已經存在",
	"fileexist"		=> "這個檔案不存在",
	"itemdoesexist"		=> "這些項目已經存在",
	"itemexist"		=> "這些項目不存在",
	"targetexist"		=> "目的地資料夾不存在",
	"targetdoesexist"	=> "目標項目已經存在",
	
	// open
	"opendir"		=> "無法開啟路徑",
	"readdir"		=> "無法讀取路徑",
	
	// access
	"accessdir"		=> "你不被允許存取此資料夾",
	"accessfile"		=> "你不被允許存取這檔案",
	"accessitem"		=> "你不被允許存取這些項目",
	"accessfunc"		=> "你不被允許存取使用這些功\能",
	"accesstarget"		=> "你不被允許存取目的地的資料夾",
	
	// actions
	"login_failed"		=> "登錄失敗",
	"permread"		=> "取得權限失敗",
	"permchange"		=> "同意權限失敗",
	"openfile"		=> "檔案開啟失敗.",
	"savefile"		=> "檔案儲存失敗.",
	"createfile"		=> "檔案建立失敗",
	"createdir"		=> "路徑建立失敗.",
	"uploadfile"		=> "檔案上傳失敗.",
	"copyitem"		=> "複製失敗",
	"moveitem"		=> "搬移失敗",
	"delitem"		=> "刪除失敗.",
	"chpass"		=> "變更密碼失敗.",
	"deluser"		=> "移除使用者失敗.",
	"adduser"		=> "新增使用者失敗.",
	"saveuser"		=> "儲存使用者失敗.",
	"searchnothing"		=> "你必須輸入要搜尋的條件",
	
	// misc
	"miscnofunc"		=> "不支援的功能",
	"miscfilesize"		=> "檔案超過最大的容量",
	"miscfilepart"		=> "檔案只能部分上傳",
	"miscnoname"		=> "你必須提供一個名稱",
	"miscselitems"		=> "你沒有選擇任何項目",
	"miscdelitems"		=> "你確定要刪除這 \"+num+\" 個項目嗎？",
	"miscdeluser"		=> "你確定要刪除 '\"+user+\"' 這個使用者？",
	"miscnopassdiff"	=> "新設定的密碼和現有的密碼並無不同",
	"miscnopassmatch"	=> "密碼不符合",
	"miscfieldmissed"	=> "你遺漏了一個重要的錯誤",
	"miscnouserpass"	=> "使用者名稱或是密碼錯誤",
	"miscselfremove"	=> "你不能自己移除",
	"miscuserexist"		=> "使用者已存在",
	"miscnofinduser"	=> "找不到使用者.",
);
$GLOBALS["messages"] = array(
	// links
	"download_selected"		=> "下載所選檔案",
	"unziplink"			=> "解壓縮",
	"permlink"		=> "變更使用者權限",
	"editlink"		=> "編輯",
	"downlink"		=> "下載",
	"uplink"		=> "上一層",
	"homelink"		=> "首頁",
	"reloadlink"		=> "重新載入",
	"copylink"		=> "複製",
	"movelink"		=> "搬移",
	"dellink"		=> "刪除",
	"comprlink"		=> "壓縮",
	"adminlink"		=> "管理",
	"logoutlink"		=> "登出",
	"uploadlink"		=> "上傳",
	"searchlink"		=> "搜尋",
	
	// list
	"nameheader"		=> "名稱",
	"sizeheader"		=> "大小",
	"typeheader"		=> "類型",
	"modifheader"		=> "修改日期",
	"permheader"		=> "屬性",
	"actionheader"		=> "動作",
	"pathheader"		=> "路徑",
	
	// buttons
	"btnunzip"		=> "解壓縮",
	"btncancel"		=> "取消",
	"btnsave"		=> "儲存",
	"btnchange"		=> "變更",
	"btnreset"		=> "重置",
	"btnclose"		=> "關閉",
	"btncreate"		=> "建立",
	"btnsearch"		=> "搜尋",
	"btnupload"		=> "上傳",
	"btncopy"		=> "複製",
	"btnmove"		=> "搬移",
	"btnlogin"		=> "登入",
	"btnlogout"		=> "登出",
	"btnadd"		=> "新增",
	"btnedit"		=> "編輯",
	"btnremove"		=> "移除",
	
	// actions
	"actunzipitem"		=> "解壓縮",
	"actdir"		=> "路徑",
	"actperms"		=> "變更使用者權限",
	"actedit"		=> "編輯檔案",
	"actsearchresults"	=> "搜尋結果",
	"actcopyitems"		=> "複製檔案",
	"actcopyfrom"		=> "從 /%s 複製到 /%s ",
	"actmoveitems"		=> "搬移檔案",
	"actmovefrom"		=> "從 %s 搬移到 /%s ",
	"actlogin"		=> "登入",
	"actloginheader"	=> "登入使用 QuiXplorer",
	"actadmin"		=> "管理員",
	"actchpwd"		=> "變更密碼",
	"actusers"		=> "使用者",
	"actarchive"		=> "壓縮檔案",
	"actupload"		=> "上傳檔案",
	
	// misc
	"miscitems"		=> "個項目",
	"miscfree"		=> "可用空間",
	"miscusername"		=> "使用者名稱",
	"miscpassword"		=> "密碼",
	"miscoldpass"		=> "舊的密碼",
	"miscnewpass"		=> "新的密碼",
	"miscconfpass"		=> "確認密碼",
	"miscconfnewpass"	=> "確認新的密碼",
	"miscchpass"		=> "變更密碼",
	"mischomedir"		=> "首頁的路徑",
	"mischomeurl"		=> "首頁的位址",
	"miscshowhidden"	=> "顯示隱藏的項目",
	"mischidepattern"	=> "隱藏檔標示方式",
	"miscperms"		=> "使用者權限",
	"miscuseritems"		=> "(名稱，首頁路徑，顯示隱藏檔，權限，啟用)",
	"miscadduser"		=> "新增使用者",
	"miscedituser"		=> "編輯使用者 '%s'",
	"miscactive"		=> "啟用",
	"misclang"		=> "語言",
	"miscnoresult"		=> "沒有符合的結果",
	"miscsubdirs"		=> "搜尋子目錄",

	"miscpermissions"	=> array(
					"read"		=> array("Read", "User may read and download a file"),
					"create" 	=> array("Write", "User may create a new file"),
					"change"	=> array("Change", "User may change (upload, modify) an existing file"),
					"delete"	=> array("Delete", "User may delete an existing file"),
					"password"	=> array("Change password", "User may change the password"),
					"admin"		=> array("Administrator", "Full access"),
			),

	"miscyesno"		=> array("是","否","是","否"),
	"miscchmod"		=> array("擁有者", "群組", "發行"),

    "select_file"   => "選擇檔案",
    "uploading"     => "上傳中",
);
?>
