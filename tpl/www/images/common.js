function addBookmark(B, A) {
    if (window.sidebar) {
        window.sidebar.addPanel(B, A, "")
    } else {
        if (document.all) {
            window.external.AddFavorite(A, B)
        } else {
            if (window.opera && window.print) {
                return true
            }
        }
    }
}
function setHome(A) {
    if (document.all) {
        document.body.style.behavior = "url(#default#homepage)";
        document.body.setHomePage(A)
    } else {
        if (window.sidebar) {
            if (window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect")
                } catch(B) {
                    alert("浏览器不支持自动设为主页，请手动设置！")
                }
                return false
            }
        }
    }
}
$(function() {
    $("#goTopBtn").hide();
    $(window).scroll(function() {
        if ($(window).scrollTop() > 0) {
            $("#goTopBtn").fadeIn(1500)
        } else {
            $("#goTopBtn").fadeOut(1500)
        }
    });
    $("#goTopBtn").click(function() {
        $("body,html").animate({
            scrollTop: 0
        },
        1000)
    })
});
$(function() {
    $(".mainbox").hover(function() {
        $(".imagebox").css("display", "inline-block")
    },
    function() {
        $(".imagebox").hide()
    })
});
$(function() {
    $("#jianli").click(function() {
        $("#downfiles").html("")
    });
    $("#downfiles li:eq(1)").attr("disabled", "disabled").addClass("lujing");
    $("#downfiles li:eq(0)").hide()
});
$(function() {
    $(".product-menu > div:gt(3)").css("margin-top", "-5px");
    $(".product-menu > div:last-child").css("margin-top", "10px");
	$(".product-menu > div:gt(2)").css("margin-top", "-5px")
});
$(function() {
    $(".mainmenu li").each(function(A) {
        $(this).hover(function() {
            $(this).children().eq(1).slideDown(200);
            $(this).children().eq(0).addClass("menu-hover");
            var menuvalue = $(this).children().eq(0).find("span").text();
            if (menuvalue == "技术支持") {
                $(this).children().eq(1).css("left", "220px")
            } else {
                $(this).children().eq(1).css("left", "60px")
            }
        },
        function() {
            $(this).children().eq(1).hide();
            $(this).children().eq(0).removeClass("menu-hover")
        })
    })
});
$(function() {
    $(".pro-items .items ul li").each(function(A) {
        $(this).click(function() {
            $(this).siblings().removeClass("items-hover");
            $(this).addClass("items-hover");
            $(".articals > div:eq(" + A + ")").show().siblings().hide()
        })
    })
});
$(function() {
    $(".nocuj .items ul li").each(function(A) {
        $(this).click(function() {
            $(this).siblings().removeClass("items-hover");
            $(this).addClass("items-hover");
            $(".articals > div:eq(" + A + ")").show().siblings().hide()
        })
    })
});
$(function() {
    $(".pro-items ul li:gt(0)").each(function(A) {
		if(!$(this).hasClass('fb')){
			$(this).css("padding-left", "47px");
		}
    })
});
$(function() {
    $("#special-items ul #machine1 ul li").each(function(A) {
        $(this).click(function() {
            $(this).siblings().removeClass("items-hover");
            $("#special-items ul #machine2 ul li").removeClass("items-hover");
            $(this).parent().parent().css("background", "none");
            $(this).addClass("items-hover");
            $(".articals2").hide();
            $(".articals2 > div:eq(" + A + ")").hide();
            $(".articals1").show();
            $(".articals1 > div:eq(" + A + ")").show().siblings().hide()
        })
    })
});
$(function() {
    $("#special-items ul #machine2 ul li").each(function(A) {
        $(this).click(function() {
            $(this).siblings().removeClass("items-hover");
            $("#special-items ul #machine1 ul li").removeClass("items-hover");
            $(this).parent().parent().css("background", "none");
            $(this).addClass("items-hover");
            $(".articals1").hide();
            $(".articals1 > div:eq(" + A + ")").hide();
            $(".articals2").show();
            $(".articals2 > div:eq(" + A + ")").show().siblings().hide()
        })
    })
});
$(function() {
    $(".com-items .items ul .hardware").each(function(A) {
        $(this).click(function() {
            $(this).children().slideToggle("fast",
            function() {
                if ($(this).is(":hidden")) {
                    $(this).css("margin-bottom", "0px")
                } else {
                    $(this).css("margin-bottom", "-2px")
                }
            })
        })
    })
});
$(function() {
    $(".items-hover").each(function(A) {
        $(this).children().show()
    })
});
$(function() {
	/*
	$('.recruit-title li').click(function(){
		var index = $(this).index();
		$(this).addClass('recruit-hover').siblings().removeClass('recruit-hover');
		$('.recruit-content').children('div:eq('+index+')').show().siblings().hide();
});
*/

$('.recruit-title li').click(function(){
		var index = $(this).index();
		$(this).addClass('recruit-hover').siblings().removeClass('recruit-hover');
		$(this).parents('.recruit-category ').children('.recruit-content').children('div:eq('+index+')').show().siblings().hide();
});

/*
    $(".recruit-title li").each(function(A) {
        $(this).click(function() {
            $(this).siblings().removeClass("recruit-hover");
            $(this).addClass("recruit-hover");
            $(".recruit-content > div:eq(" + A + ")").show().siblings().hide()
        })
    })
	*/
});
$(function() {
    $(".recruit-content table tr:even").each(function() {
        $(this).css("font-size", "14px").css("cursor", "pointer");
        $(this).children().eq(0).addClass("re-name");
        $(this).click(function() {
            $(this).next().slideToggle("fast");
            $(this).children().eq(0).find("span").toggleClass("expansion")
        });
        $(this).hover(function() {
            $(this).css("background", "#f7f6f6");
            $(this).css("color", "#498537")
        },
        function() {
            $(this).css("background", "none");
            $(this).css("color", "#707070")
        })
    });
    $(".recruit-content table tr:odd").each(function() {
        $(this).hide()
    });
    $(".re-name ").hover(function() {
        $(this).css("color", "#498537")
    },
    function() {
        $(this).css("color", "#073E6E")
    })
});
function SetFont(A) {
    var C = $(".artical-content");
    if (!C) {
        return
    }
    C.css("font-size", A + "px");
    var D = C.children();
    for (var B = 0; B < D.length; B++) {
        if (D[B].nodeType == 1) {
            D[B].style.fontSize = A + "px"
        }
    }
}
function DeletFont() {
    var B = $(".artical-content");
    if (!B) {
        return
    }
    B.css("font-size", "");
    var C = B.children();
    for (var A = 0; A < C.length; A++) {
        if (C[A].nodeType == 1) {
            C[A].style.fontSize = ""
        }
    }
}
$(function() {
    $(".askquestion form>p input[type=text]").each(function() {
        $(this).focusout(function() {
            var A = $(this).val();
            if (A == "") {
                $(this).parent().next().show()
            } else {
                if (A !== "") {
                    $(this).parent().next().hide()
                }
            }
        })
    });
    $(".askquestion form textarea").each(function() {
        $(this).focusout(function() {
            var A = $(this).val();
            if (A == "") {
                $(this).parent().next().show()
            } else {
                if (A !== "") {
                    $(this).parent().next().hide()
                }
            }
        })
    })
});
function setmodel(C, D, A, B) {
    $("#typeid").val(C);
    $("#search a").removeClass();
    D.addClass("on");
    if (B != null && B != "") {
        window.location = "?m=search&c=index&a=init&siteid=" + A + "&typeid=" + C + "&q=" + B
    }
}
function PPTBox() {
    this.uid = PPTBoxHelper.getId();
    PPTBoxHelper.instance[this.uid] = this;
    this._$ = function(A) {
        return document.getElementById(A)
    };
    this.width = 400;
    this.height = 300;
    this.picWidth = 15;
    this.picHeight = 12;
    this.autoplayer = 4;
    this.target = "_blank";
    this._box = [];
    this._curIndex = 0
}
PPTBox.prototype = {
    _createMainBox: function() {
        var B = this.width * this._box.length + 5;
        var A = "<div id='" + this.uid + "_mainbox' class='mainbox'  style='width:" + (this.width) + "px;height:" + (this.height + 2) + "px;'>";
        A += "<div id='" + this.uid + "_flashbox' class='flashbox' style='width:" + B + "px;height:" + (this.height + 2) + "px;'></div>";
        A += "<div id='" + this.uid + "_imagebox' class='imagebox' style='width:" + this.width + "px;height:" + (this.picHeight + 2) + "px;top:-" + (this.picHeight + 20) + "px;'></div>";
        A += "</div>";
        document.write(A)
    },
    _init: function() {
        var E = "";
        var D = "PPTBoxHelper.instance['" + this.uid + "']";
        var C = "";
        var A = "";
        for (var B = 0; B < this._box.length; B++) {
            var F = this._box[B];
            A += this.flashHTML(F.url, this.width, this.height, B);
            C = "<div class='bitdiv " + ((B == 0) ? "curimg": "defimg") + "' title =" + F.title + " src='bit01.gif' " + E + ' onclick = "' + D + ".clickPic(" + B + ')"  onmouseover="' + D + ".mouseoverPic(" + B + ')"></div>' + C
        }
        this._$(this.uid + "_flashbox").innerHTML = A;
        this._$(this.uid + "_imagebox").innerHTML = C
    },
    _play: function() {
        clearInterval(this._autoplay);
        var B = this._curIndex + 1;
        if (B >= this._box.length) {
            B = 0
        }
        this.changeIndex(B);
        var A = "PPTBoxHelper.instance['" + this.uid + "']._play()";
        this._autoplay = setInterval(A, this.autoplayer * 3000)
    },
    flashHTML: function(G, E, A, B) {
        var H = G.substring(G.lastIndexOf(".") + 1).toLowerCase() == "swf";
        var C = "";
        if (H) {
            C = "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0' width='" + E + "' height='" + A + '\'><param name="movie" value="' + G + "\" /><param name='quality' value='high' /><param name='wmode' value='transparent'><embed src='" + G + "' quality='high' wmode='opaque' pluginspage='http://www.macromedia.com/go/getflashplayer'  type='application/x-shockwave-flash' width=" + E + " height='" + A + "'></embed>  </object>"
        } else {
            var F = "PPTBoxHelper.instance['" + this.uid + "']";
            var D = "";
            if (this._box[B].href) {
                D = "cursor:pointer"
            }
            C = "<img src='" + G + "' style='width:" + E + "px;height:" + A + "px;" + D + "' onclick = \"" + F + ".clickPic(" + B + ')"/>'
        }
        return C
    },
    changeIndex: function(B) {
        var C = this._box[B];
        moveElement(this.uid + "_flashbox", -(B * this.width), 1);
        var A = this._$(this.uid + "_imagebox").getElementsByTagName("div");
        A[this._box.length - 1 - this._curIndex].className = "bitdiv defimg";
        A[this._box.length - 1 - B].className = "bitdiv curimg";
        this._curIndex = B
    },
    mouseoverPic: function(B) {
        this.changeIndex(B);
        if (this.autoplayer > 0) {
            clearInterval(this._autoplay);
            var A = "PPTBoxHelper.instance['" + this.uid + "']._play()";
            this._autoplay = setInterval(A, this.autoplayer * 1000)
        }
    },
    clickPic: function(A) {
        var B = this._box[A];
        if (B.href && B.href != "") {
            window.open(B.href, this.target)
        }
    },
    add: function(A) {
        this._box[this._box.length] = A
    },
    show: function() {
        this._createMainBox();
        this._init();
        if (this.autoplayer > 0) {
            var A = "PPTBoxHelper.instance['" + this.uid + "']._play()";
            this._autoplay = setInterval(A, this.autoplayer * 3000)
        }
    }
};
var PPTBoxHelper = {
    count: 0,
    instance: {},
    getId: function() {
        return "_ppt_box-" + (this.count++)
    }
};
function moveElement(A, G, C) {
    if (!document.getElementById) {
        return false
    }
    if (!document.getElementById(A)) {
        return false
    }
    var D = document.getElementById(A);
    if (D.movement) {
        clearTimeout(D.movement)
    }
    if (!D.style.left) {
        D.style.left = "0px"
    }
    var B = parseInt(D.style.left);
    if (B == G) {
        return true
    }
    if (B < G) {
        var E = Math.ceil((G - B) / 5);
        B = B + E
    }
    if (B > G) {
        var E = Math.ceil((B - G) / 5);
        B = B - E
    }
    D.style.left = B + "px";
    var F = "moveElement('" + A + "'," + G + "," + C + ")";
    D.movement = setTimeout(F, C)
};
/*
*二维码展示
*/
function showtable()
{
if(document.all("toutiaoweixin").style.display=="none")
{document.all("toutiaoweixin").style.display="";}
else
{document.all("toutiaoweixin").style.display="none";}
}
//商桥IM窗口
function showqiao()
{
 var w = 800;     //宽度
 var h = 565;   //高度
 var t = (screen.height-h)/2; //离顶部距离
 var l = (screen.width-w)/2; //离左边距离
 window.open("/qiao/qiao.php","在线咨询","width=800,height=565,top="+t+",left="+l)

}