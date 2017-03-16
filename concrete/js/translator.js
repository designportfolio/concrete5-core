!function(){"use strict";function a(a,b){$.extend(this,a),this.hasContext="context"in a,this.isPlural="originalPlural"in a,this.isTranslated="translations"in a,this.translator=b,!this.translator.approvalSupport||"isApproved"in a||(this.isApproved=!1),this.translator.translations.push(this)}function b(b){this.containerID=b.container,this.height=b.height,this.saveAction=b.saveAction,this.plurals=$.extend(!0,{},b.plurals),this.translations=[],this.approvalSupport=b.approvalSupport!==!1,this.referencePatterns=$.extend(!0,{file:null,file_line:null},b.referencePatterns),this.on={uiLaunched:"onUILaunched"in b?b.onUILaunched:null,beforeActivatingTranslation:"onBeforeActivatingTranslation"in b?b.onBeforeActivatingTranslation:null,currentTranslationChanged:"onCurrentTranslationChanged"in b?b.onCurrentTranslationChanged:null},this.approvalSupport&&(this.canModifyApproved=b.canModifyApproved===!0);for(var c=0,d=b.translations.length;c<d;c++)new a(b.translations[c],this);this.busy=!1,this.getInitialTranslationIndex=b.getInitialTranslationIndex?b.getInitialTranslationIndex:null}if(!window.ccmTranslator){var c=500,d={AskDiscardDirtyTranslation:"The current item has changed.\nIf you proceed you will lose your changes.\n\nDo you want to proceed anyway?",Approved:"Approved",Comments:"Comments",Context:"Context",ExamplePH:"Example: %s",Filter:"Filter",Original_String:"Original String",Please_fill_in_all_plurals:"Please fill-in all plural forms",Plural_Original_String:"Plural Original String",References:"References",Save_and_Continue:"Save & Continue",Search_for_:"Search for...",Search_in_contexts:"Search in contexts",Search_in_originals:"Search in originals",Search_in_translations:"Search in translations",Show_approved:"Show approved",Show_translated:"Show translated",Show_unapproved:"Show unapproved",Show_untranslated:"Show untranslated",Singular_Original_String:"Singular Original String",Toggle_Dropdown:"Toggle Dropdown",TAB:"[TAB] Forward",TAB_SHIFT:"[SHIFT]+[TAB] Backward",Translate:"Translate",Translation:"Translation",TranslationIsApproved_WillNeedApproval:"This translation is approved: your changes will need approval.",TranslationIsNotApproved:"This translation is not approved.",PluralNames:{zero:"Zero",one:"One",two:"Two",few:"Few",many:"Many",other:"Other"}},e={colFilter:"col-md-12",colOriginal:"col-md-5",colTranslations:"col-md-7"};a.prototype={buildListItem:function(){var a=this;this.li=document.createElement("li"),this.li.ccmTranslation=this,this.li.className="list-group-item clearfix"+(this.isTranslated?" list-group-item-success":"");var b=document.createElement("span");b.textContent=b.innerText=this.original,this.li.appendChild(b),this.liTranslated=document.createElement("span"),this.translationUpdated(!0),this.li.appendChild(this.liTranslated),this.translator.UI.$list[0].appendChild(this.li),this.li.onclick=function(){a.translator.setCurrentTranslation(a)}},translationUpdated:function(a){this.liTranslated.textContent=this.liTranslated.innerText=this.isTranslated?this.translations[0]:"",a!==!0&&(this.isTranslated?$(this.li).addClass("list-group-item-success"):$(this.li).removeClass("list-group-item-success"))},translatedSaved:function(a,b){null===a?(delete this.translations,this.isTranslated=!1,this.translator.approvalSupport&&(this.isApproved=!1)):(this.translations=a,this.isTranslated=!0,!this.translator.approvalSupport||b!==!0&&b!==!1||(this.isApproved=b)),this.translationUpdated()},contextContains:function(a){return this.hasContext!==!1&&this.context.toLowerCase().indexOf(a)>=0},originalContains:function(a){return this.original.toLowerCase().indexOf(a)>=0||this.isPlural===!0&&this.originalPlural.toLowerCase().indexOf(a)>=0},translationContains:function(a){if(this.isTranslated===!1)return!1;for(var b=this.translations.length,c=0;c<b;c++)if(this.translations[c].toLowerCase().indexOf(a)>=0)return!0;return!1},satisfyFilter:function(a){if(a.showTranslated===!1&&this.isTranslated===!0)return!1;if(a.showUntranslated===!1&&this.isTranslated===!1)return!1;if(a.showApproved===!1&&this.isApproved===!0)return!1;if(a.showUnapproved===!1&&this.isApproved===!1)return!1;if(a.text.length>0){var b=!1;if(b=b||a.searchInContexts&&this.contextContains(a.lowerCaseText),b=b||a.searchInOriginals&&this.originalContains(a.lowerCaseText),b=b||a.searchInTranslations&&this.translationContains(a.lowerCaseText),b===!1)return!1}return!0},applyFilter:function(){this.li.style.display=this.satisfyFilter(this.translator.appliedFilter)?"":"none"}};var f=function(){function a(a,b){if(this.UI={},this.translation=a,this.multiline=b,this.element=this.multiline?'textarea rows="8"':'input type="text"',this.UI.$container=this.translation.translator.UI.$translation,this.UI.$container.empty(),this.UI.$container.closest(".panel").css("visibility","visible"),this.buildOriginalUI(),this.buildTranslationUI(),this.translation.translator.approvalSupport&&(this.translation.translator.canModifyApproved?this.UI.$container.append($('<label class="control-label inline" />').text(d.Approved).prepend(this.UI.$approved=$('<input type="checkbox" '+(this.translation.isApproved?' checked="checked"':"")+" />"))):this.UI.$container.append($("<p />").text(this.translation.isApproved?d.TranslationIsApproved_WillNeedApproval:d.TranslationIsNotApproved))),"comments"in this.translation||"context"in this.translation||"references"in this.translation){var c;if(this.UI.$container.append(c=$("<dl />")),"comments"in this.translation&&c.append($("<dt />").text(d.Comments)).append($("<dd />").text(this.translation.comments)),"context"in this.translation&&c.append($("<dt />").text(d.Context)).append($("<dd />").text(this.translation.context)),"references"in this.translation){var e,f=this.translation.translator.referencePatterns;c.append($("<dt />").text(d.References)).append(e=$('<dd style="overflow: hidden; white-space: pre" />')),$.each(this.translation.references,function(a,b){a>0&&e.append("<br />");var c,d;b.length>1&&null!==b[1]?(c=b.join(":"),d=f.file_line):(c=b[0],d=f.file),d?e.append($('<a target="_blank" />').text(c).attr("href",d.replace(/\[\[FILE\]\]/g,b[0]).replace(/\[\[LINE\]\]/g,b[1]))):e.append($("<span />").text(c))}),e.attr("title",e.text())}}var g=$(this.translation.li);g.addClass("list-group-item-info");var h=null,i=g.closest("ul"),j=g.position().top-i.position().top,k=i.scrollTop();if(j<0)h=k+j;else{var l=j+g.outerHeight(),m=i.height();l>m&&(h=k+(l-m))}null!==h&&i.animate({scrollTop:h},50)}function b(b){a.call(this,b,b.original.indexOf("\n")>=0)}function c(b){a.call(this,b,b.original.indexOf("\n")>=0||b.originalPlural.indexOf("\n")>=0)}return a.prototype={getTranslatedState:function(a){var b=this.getTranslatedStrings(a);if(null===b||b===!1)return b;var c={strings:b};return"$approved"in this.UI&&(c.approved=!!this.UI.$approved.is(":checked")),c},isDirty:function(){var a=this.getTranslatedState();if(null===a)return!!this.translation.isTranslated;if(this.translation.isTranslated===!1)return!0;for(var b=!1,c=a.strings.length,d=0;d<c;d++)if(a.strings[d]!==this.translation.translations[d]){b=!0;break}return"approved"in a&&a.approved!==this.translation.isApproved&&(b=!0),b},dispose:function(){$(this.translation.li).removeClass("list-group-item-info"),this.UI.$container.empty().closest(".panel").css("visibility","hidden")}},$.extend(!0,b.prototype,a.prototype,{buildOriginalUI:function(){this.UI.$container.append($('<div class="form-group" />').append($('<label class="control-label" />').text(d.Original_String)).append($("<"+this.element+' class="form-control" readonly="readonly" />').val(this.translation.original)))},buildTranslationUI:function(){this.UI.$container.append($('<div class="form-group" />').append($('<label class="control-label" />').text(d.Translation)).append(this.UI.$translated=$("<"+this.element+' class="form-control" />').val(this.translation.isTranslated?this.translation.translations[0]:""))),this.UI.$translated.focus()},getCurrentTextInput:function(){return this.UI.$translated},getTranslatedStrings:function(a){var b=$.trim(this.UI.$translated.val());return b.length>0?[b]:null}}),$.extend(!0,c.prototype,a.prototype,{buildOriginalUI:function(){this.UI.$container.append($('<div class="form-group" />').append($('<label class="control-label" />').text(d.Singular_Original_String)).append($("<"+this.element+' class="form-control" readonly="readonly" />').val(this.translation.original))).append($('<div class="form-group" />').append($('<label class="control-label" />').text(d.Plural_Original_String)).append($("<"+this.element+' class="form-control" readonly="readonly" />').val(this.translation.originalPlural)))},showTranslationTab:function(a,b){this.UI.$tabHeaders.find("li.active").removeClass("active"),this.UI.$tabBodies.find(".tab-pane.active").removeClass("active"),this.UI.$tabHeaders.find('li[data-key="'+a+'"]').addClass("active");var c=this.UI.$tabBodies.find('.tab-pane[data-key="'+a+'"]').addClass("active");b&&c.find("textarea,input").focus()},buildTranslationUI:function(){var a=this;this.UI.$container.append($('<div class="form-group" />').append($('<label class="control-label" />').text(d.Translation)).append(this.UI.$tabHeaders=$('<ul class="nav nav-tabs" />')).append(this.UI.$tabBodies=$('<div class="tab-content" />')));var b=0;this.UI.$translated={};var c=null;$.each(this.translation.translator.plurals,function(e,f){null===c&&(c=e),a.UI.$tabHeaders.append($('<li data-key="'+e+'"'+(0===b?' class="active"':"")+" />").append($('<a href="#" />').text(d.PluralNames[e]))),a.UI.$tabBodies.append($('<div class="tab-pane'+(0===b?" active":"")+'" data-key="'+e+'" />').append($("<p />").text(d.ExamplePH.replace(/%s/,f))).append(a.UI.$translated[e]=$("<"+a.element+' class="form-control" />').val(a.translation.isTranslated?a.translation.translations[b]:""))),b++}),this.UI.$tabHeaders.find("a").on("click",function(b){b.preventDefault(),a.showTranslationTab($(this).closest("li").attr("data-key"))}),this.UI.$translated[c].focus()},getCurrentTextInput:function(){return this.UI.$tabBodies.find(".tab-pane.active").find("textarea,input")},getTranslatedStrings:function(a){var b=this,c=[],e=!1,f=null;return $.each(this.translation.translator.plurals,function(a){var d=$.trim(b.UI.$translated[a].val());d.length>0?e=!0:null===f&&(f=a),c.push(d)}),e===!1?null:null!==f&&a===!0?(this.showTranslationTab(f,!0),window.alert(d.Please_fill_in_all_plurals),!1):c}}),{Singular:b,Plural:c}}();b.prototype={launch:function(){var a=this;this.UI={},this.UI.$container=$(this.containerID),delete this.containerID;var b=this.height;delete this.height,(!b||b<200)&&(b=200),this.UI.$container.append($('<div class="row" />').append($('<div class="'+e.colFilter+'" />').append($('<div class="panel panel-info" />').append($('<div class="panel-heading" />').append($('<div class="panel-title" />').text(d.Filter))).append($('<div class="panel-body" />').append($('<div class="input-group">').append($('<div class="input-group-btn" />').append(this.UI.$showTranslated=$('<a href="javascript:void(0)" class="btn btn-default" />').text(d.Show_translated)).append(this.UI.$showUntranslated=$('<a href="javascript:void(0)" class="btn btn-default" />').text(d.Show_untranslated))).append(this.UI.$searchText=$('<input type="text" class="form-control" />').attr("placeholder",d.Search_for_)).append($('<div class="input-group-btn" />').append(this.UI.$searchButton=$('<button type="button" class="btn btn-primary"><span class="fa fa-search"></span></button>')).append($('<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" />').append($('<span class="caret" />'))).append($('<ul class="dropdown-menu dropdown-menu-right" role="menu" />').append($("<li />").append(this.UI.$searchInOriginals=$('<a href="javascript:void(0)" />').text(" "+d.Search_in_originals).prepend($('<i class="fa" />')))).append($("<li />").append(this.UI.$searchInTranslations=$('<a href="javascript:void(0)" />').text(" "+d.Search_in_translations).prepend($('<i class="fa" />')))).append($("<li />").append(this.UI.$searchInContexts=$('<a href="javascript:void(0)" />').text(" "+d.Search_in_contexts).prepend($('<i class="fa" />')))).append('<li class="divider"></li>').append($("<li />").append(this.UI.$showUnapproved=$('<a href="javascript:void(0)" />').text(" "+d.Show_unapproved).prepend($('<i class="fa" />')))).append($("<li />").append(this.UI.$showApproved=$('<a href="javascript:void(0)" />').text(" "+d.Show_approved).prepend($('<i class="fa" />'))))))))))).append($('<div class="row" />').append($('<div class="'+e.colOriginal+' ccm-translator-col-original" />').append($('<div class="panel panel-primary" />').append($('<div class="panel-heading clearfix" />').append($("<span />").text(d.Original_String)).append($("<span />").text(d.Translation))).append(this.UI.$list=$('<ul class="list-group" />').css("height",b+"px")))).append($('<div class="'+e.colTranslations+' ccm-translator-col-translations" />').append($('<div class="panel panel-primary" />').append($('<div class="panel-heading" />').text(d.Translate)).append(this.UI.$translation=$('<div class="panel-body" />')).append($('<div class="panel-footer" />').append($('<button class="btn btn-primary ccm-translator-savecontinue" />').text(d.Save_and_Continue).on("click",function(){a.saveAndContinue()})).append($('<small class="text-muted" style="margin-left: 20px" />').text(d.TAB)).append($('<small class="text-muted" style="margin-left: 20px" />').text(d.TAB_SHIFT)))))),this.on.uiLaunched&&this.on.uiLaunched(this);var f=this.translations.length;if(f<c){this.UI.$searchButton.remove();var g=null;this.UI.$searchText.on("change keydown keyup keypress",function(){g&&clearTimeout(g),g=setTimeout(function(){g=null,a.filter()},100)})}else this.UI.$searchText.on("keypress",function(b){13===(b.keyCode||b.charCode)&&a.filter()}),this.UI.$searchButton.on("click",function(){a.filter()});for(var h=!1,i=0;i<f;i++)this.translations[i].buildListItem(),this.translations[i].hasContext&&(h=!0);if(this.appliedFilter={text:"",searchInOriginals:!0,searchInTranslations:!0,searchInContexts:!1,showUnapproved:!0,showApproved:!0,showTranslated:!0,showUntranslated:!0},this.UI.$searchInOriginals.on("click",function(){a.filter({searchInOriginals:!a.appliedFilter.searchInOriginals})}),this.UI.$searchInTranslations.on("click",function(){a.filter({searchInTranslations:!a.appliedFilter.searchInTranslations})}),this.UI.$showTranslated.on("click",function(){a.filter({showTranslated:!a.appliedFilter.showTranslated})}),this.UI.$showUntranslated.on("click",function(){a.filter({showUntranslated:!a.appliedFilter.showUntranslated})}),this.approvalSupport?(this.UI.$showUnapproved.on("click",function(){a.filter({showUnapproved:!a.appliedFilter.showUnapproved})}),this.UI.$showApproved.on("click",function(){a.filter({showApproved:!a.appliedFilter.showApproved})})):(this.UI.$showUnapproved.closest("li").prev().remove(),this.UI.$showUnapproved.remove(),this.UI.$showApproved.remove(),delete this.appliedFilter.showUnapproved,delete this.appliedFilter.showApproved,delete this.UI.$showUnapproved,delete this.UI.$showApproved),h?this.UI.$searchInContexts.on("click",function(){a.filter({searchInContexts:!a.appliedFilter.searchInContexts})}):this.UI.$searchInContexts.remove(),this.viewAppliedFilter(),$(window).on("beforeunload",function(){if(a.currentTranslationView&&a.currentTranslationView.isDirty())return d.AskDiscardDirtyTranslation}),f>0){var j=0;this.getInitialTranslationIndex&&(j=this.getInitialTranslationIndex()||0),this.setCurrentTranslation(this.translations[j])}this.UI.$container.on("keydown",function(b){switch(b.keyCode||b.which){case 9:b.preventDefault(),setTimeout(function(){a.saveAndContinue(!!b.shiftKey)},0)}})},viewAppliedFilter:function(){var a=this.appliedFilter;this.UI.$searchText.text()!==a.text&&this.UI.$searchText.text(a.text),this.UI.$searchInOriginals.find("i").removeClass("fa-check-square-o fa-square-o").addClass(a.searchInOriginals?"fa-check-square-o":"fa-square-o"),this.UI.$searchInTranslations.find("i").removeClass("fa-check-square-o fa-square-o").addClass(a.searchInTranslations?"fa-check-square-o":"fa-square-o"),this.UI.$searchInContexts.find("i").removeClass("fa-check-square-o fa-square-o").addClass(a.searchInContexts?"fa-check-square-o":"fa-square-o"),this.approvalSupport&&(this.UI.$showUnapproved.find("i").removeClass("fa-check-square-o fa-square-o").addClass(a.showUnapproved?"fa-check-square-o":"fa-square-o"),this.UI.$showApproved.find("i").removeClass("fa-check-square-o fa-square-o").addClass(a.showApproved?"fa-check-square-o":"fa-square-o")),this.UI.$showTranslated.removeClass("btn-default btn-primary").addClass(a.showTranslated?"btn-primary":"btn-default"),this.UI.$showUntranslated.removeClass("btn-default btn-primary").addClass(a.showUntranslated?"btn-primary":"btn-default")},filter:function(a){var b=this,c=$.extend(!0,{},this.appliedFilter,a,{text:this.UI.$searchText.val()}),d=!1;if($.each(c,function(a,c){if(c!==b.appliedFilter[a]){switch(a){case"searchInOriginals":case"searchInTranslations":case"searchInContexts":if(""===b.appliedFilter.text)return}return d=!0,!1}}),this.appliedFilter=c,this.viewAppliedFilter(),d){this.appliedFilter.lowerCaseText=this.appliedFilter.text.toLowerCase();for(var e=this.translations.length,f=0;f<e;f++)this.translations[f].applyFilter()}},setCurrentTranslation:function(a){var b=this;if(b.busy)return!1;if(b.currentTranslationView){if(b.currentTranslationView.translation===a)return;if(b.currentTranslationView.isDirty()&&!window.confirm(d.AskDiscardDirtyTranslation))return}var c=function(){b.currentTranslationView&&(b.currentTranslationView.dispose(),b.currentTranslationView=null,b.on.currentTranslationChanged&&b.on.currentTranslationChanged(b)),a&&(b.currentTranslationView=a.isPlural?new f.Plural(a):new f.Singular(a),b.on.currentTranslationChanged&&b.on.currentTranslationChanged(b))};b.on.beforeActivatingTranslation?(b.setBusy(!0),b.on.beforeActivatingTranslation(b,a,function(a){b.setBusy(!1),a!==!1&&c()})):c()},setBusy:function(a){this.busy=!!a;var b=this.UI.$container.find("button.ccm-translator-savecontinue");this.busy?b.css("width",b.outerWidth()+"px").html('<span class="fa fa-spinner fa-spin"></span>'):b.css("width","auto").text(d.Save_and_Continue)},saveAndContinue:function(a){var b=this;if(!this.busy){if(this.currentTranslationView.isDirty()===!1)return void this.gotoNextTranslation(a);var c=this.currentTranslationView.getTranslatedState(!0);if(c!==!1){var d=this.currentTranslationView.translation,e={};e.id=d.id,null===c?e.clear=1:(e.translated=c.strings,"approved"in c&&(e.approved=c.approved?1:0)),this.setBusy(!0),$.isFunction(this.saveAction)?this.saveAction(d,e,function(c){b.setBusy(!1),c?window.alert(c):b.gotoNextTranslation(a)}):$.ajax({type:"POST",url:this.saveAction,data:e,dataType:"json"}).always(function(){b.setBusy(!1)}).fail(function(a){a.responseJSON&&a.responseJSON.errors?window.alert(a.responseJSON.errors.join("\n")):window.alert(a.responseText)}).done(function(e){return e&&e.error?void window.alert(e.errors.join("\n")):(d.translatedSaved(c.strings,c.approved),void b.gotoNextTranslation(a))})}}},gotoNextTranslation:function(a){var b=this.UI.$list.children(":visible");if(0===b.length)return void this.setCurrentTranslation(null);var c=0;if(this.currentTranslationView){var d=$.inArray(this.currentTranslationView.translation.li,b);a?d>=0&&(c=d-1,c<0&&(c=b.length-1)):d>=0&&d<b.length-1&&(c=d+1)}this.setCurrentTranslation(b[c].ccmTranslation)}};var g=function(){function a(){for(;c.length>0;)c.splice(0,1)[0].launch()}var b=!1,c=[];return{setDomReady:function(){b=!0,c.length&&a()},setTranslatorReady:function(d){c.push(d),b&&a()}}}();window.ccmTranslator={setI18NDictionart:function(a){$.extend(!0,d,a)},configureFrontend:function(a){$.isPlainObject(a)&&$.extend(e,a)},initialize:function(a){var c=new b(a);return g.setTranslatorReady(c),c},views:f},$(document).ready(function(){g.setDomReady()})}}();