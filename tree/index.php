<?php
 session_start();
 if(count($_SESSION)==0)
 {
 	$host  = $_SERVER['HTTP_HOST'];
	$uri   = str_replace('/tree','', rtrim(dirname($_SERVER['PHP_SELF']), '/\\'));
	header("Location: http://$host$uri");
	exit;
 }
?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Lista de opções Cursos/Disciplinas</title>
	<script type="text/javascript" src="_lib/jquery.js"></script>
	<script type="text/javascript" src="_lib/jquery.cookie.js"></script>
	<script type="text/javascript" src="_lib/jquery.hotkeys.js"></script>
	<script type="text/javascript" src="jquery.jstree.js"></script>
	<link type="text/css" rel="stylesheet" href="!style.css"/>
</head>
<body id="demo_body">
<div id="container">


<h1>Lista de opções Cursos/Disciplinas</h1>

<h2><a href="index_test.php">Ver resultado</a></h2>
<h2><a href="../index.php?r=site/index">Voltar à zona de administração</a></h2>
<div id="description">
<div id="mmenu" style="height:30px; overflow:auto;">
<input type="button" id="add_folder" value="Nova Subopção" style="display:block; float:left;"/>
<input type="button" id="add_default" value="Escolha alternativa" style="display:block; float:left;"/>
<input type="button" id="rename" value="Renomeiar" style="display:block; float:left;"/>
<input type="button" id="remove" value="Remover" style="display:block; float:left;"/>
<input type="button" id="cut" value="Cortar" style="display:block; float:left;"/>
<input type="button" id="copy" value="Copiar" style="display:block; float:left;"/>
<input type="button" id="paste" value="Colar" style="display:block; float:left;"/>
<input type="button" id="search" value="Procurar" style="display:block; float:right;"/>
<input type="text" id="text" value="" style="display:block; float:right;" />
</div>

<!-- the tree container (notice NOT an UL node) -->
<div id="demo" class="demo" style="height:200px;"></div>
<div style="height:30px; text-align:center;">
	<input type="button" style='width:170px; height:24px; margin:5px auto;' id="analyze" value="analyze" onclick="$('#alog').load('./server.php?analyze');" />
	<input type="button" style='width:170px; height:24px; margin:5px auto;' value="refresh" onclick="$('#demo').jstree('refresh',-1);" />
</div>
<div id='alog' style="border:1px solid gray; padding:5px; height:100px; margin-top:15px; overflow:auto; font-family:Monospace;"></div>
<!-- JavaScript neccessary for the tree -->
<script type="text/javascript" class="source below">
$(function () {

$("#demo")
	.bind("before.jstree", function (e, data) {
		$("#alog").append(data.func + "<br />");
	})
	.jstree({
		// List of active plugins
		"plugins" : [
			"themes","json_data","ui","crrm","cookies","dnd","search","types","hotkeys","contextmenu"
		],

		// I usually configure the plugin that handles the data first
		// This example uses JSON as it is most common
		"json_data" : {
			// This tree is ajax enabled - as this is most common, and maybe a bit more complex
			// All the options are almost the same as jQuery's AJAX (read the docs)
			"ajax" : {
				// the URL to fetch the data
				"url" : "./server.php",
				// the `data` function is executed in the instance's scope
				// the parameter is the node being loaded
				// (may be -1, 0, or undefined when loading the root nodes)
				"data" : function (n) {
					// the result is fed to the AJAX request `data` option
					return {
						"operation" : "get_children",
						"id" : n.attr ? n.attr("id").replace("node_","") : 1
					};
				}
			}
		},
		// Configuring the search plugin
		"search" : {
			// As this has been a common question - async search
			// Same as above - the `ajax` config option is actually jQuery's AJAX object
			"ajax" : {
				"url" : "./server.php",
				// You get the search string as a parameter
				"data" : function (str) {
					return {
						"operation" : "search",
						"search_str" : str
					};
				}
			}
		},
		// Using types - most of the time this is an overkill
		// read the docs carefully to decide whether you need types
		"types" : {
			// I set both options to -2, as I do not need depth and children count checking
			// Those two checks may slow jstree a lot, so use only when needed
			"max_depth" : -2,
			"max_children" : -2,
			// I want only `drive` nodes to be root nodes
			// This will prevent moving or creating any other type as a root node
			"valid_children" : [ "drive" ],
			"types" : {
				// The default type
				"default" : {
					// I want this type to have no children (so only leaf nodes)
					// In my case - those are files
					"valid_children" : "none",
					// If we specify an icon for the default type it WILL OVERRIDE the theme icons
					"icon" : {
						"image" : "./file.png"
					}
				},
				// The `folder` type
				"folder" : {
					// can have files and other folders inside of it, but NOT `drive` nodes
					"valid_children" : [ "default", "folder" ],
					"icon" : {
						"image" : "./folder.png"
					}
				},
				// The `drive` nodes
				"drive" : {
					// can have files and folders inside, but NOT other `drive` nodes
					"valid_children" : [ "default", "folder" ],
					"icon" : {
						"image" : "./root.png"
					},
					// those prevent the functions with the same name to be used on `drive` nodes
					// internally the `before` event is used
					"start_drag" : false,
					"move_node" : false,
					"delete_node" : false,
					"remove" : false
				}
			}
		},
		// UI & core - the nodes to initially select and open will be overwritten by the cookie plugin

		// the UI plugin - it handles selecting/deselecting/hovering nodes
		"ui" : {
			// this makes the node with ID node_4 selected onload
			"initially_select" : [ "node_4" ]
		},
		// the core plugin - not many options here
		"core" : {
			// just open those two nodes up
			// as this is an AJAX enabled tree, both will be downloaded from the server
			"initially_open" : [ "node_2" , "node_3" ]
		}
	})
	.bind("create.jstree", function (e, data) {
		$.post(
			"./server.php",
			{
				"operation" : "create_node",
				"id" : data.rslt.parent.attr("id").replace("node_",""),
				"position" : data.rslt.position,
				"title" : data.rslt.name,
				"type" : data.rslt.obj.attr("rel")
			},
			function (r) {
				if(r.status) {
					$(data.rslt.obj).attr("id", "node_" + r.id);
				}
				else {
					$.jstree.rollback(data.rlbk);
				}
			}
		);
	})
	.bind("remove.jstree", function (e, data) {
		data.rslt.obj.each(function () {
			$.ajax({
				async : false,
				type: 'POST',
				url: "./server.php",
				data : {
					"operation" : "remove_node",
					"id" : this.id.replace("node_","")
				},
				success : function (r) {
					if(!r.status) {
						data.inst.refresh();
					}
				}
			});
		});
	})
	.bind("rename.jstree", function (e, data) {
		$.post(
			"./server.php",
			{
				"operation" : "rename_node",
				"id" : data.rslt.obj.attr("id").replace("node_",""),
				"title" : data.rslt.new_name
			},
			function (r) {
				if(!r.status) {
					$.jstree.rollback(data.rlbk);
				}
			}
		);
	})
	.bind("move_node.jstree", function (e, data) {
		data.rslt.o.each(function (i) {
			$.ajax({
				async : false,
				type: 'POST',
				url: "./server.php",
				data : {
					"operation" : "move_node",
					"id" : $(this).attr("id").replace("node_",""),
					"ref" : data.rslt.cr === -1 ? 1 : data.rslt.np.attr("id").replace("node_",""),
					"position" : data.rslt.cp + i,
					"title" : data.rslt.name,
					"copy" : data.rslt.cy ? 1 : 0
				},
				success : function (r) {
					if(!r.status) {
						$.jstree.rollback(data.rlbk);
					}
					else {
						$(data.rslt.oc).attr("id", "node_" + r.id);
						if(data.rslt.cy && $(data.rslt.oc).children("UL").length) {
							data.inst.refresh(data.inst._get_parent(data.rslt.oc));
						}
					}
					$("#analyze").click();
				}
			});
		});
	});

});
</script>
<script type="text/javascript" class="source below">
// Code for the menu buttons
$(function () {
	$("#mmenu input").click(function () {
		switch(this.id) {
			case "add_default":
			case "add_folder":
				$("#demo").jstree("create", null, "last", { "attr" : { "rel" : this.id.toString().replace("add_", "") } });
				break;
			case "search":
				$("#demo").jstree("search", document.getElementById("text").value);
				break;
			case "text": break;
			default:
				$("#demo").jstree(this.id);
				break;
		}
	});
});
</script>
</div>

</div>

</body>
</html>