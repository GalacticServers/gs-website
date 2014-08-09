`window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set._.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');$.src='//v2.zopim.com/?1oo1bIxEgCw8dmVvKh3hJrir8EPWEgMm';z.t=+new Date;$.type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script')`

`(function(w,t,gk,d,s,fs){if(w[gk])return;d=w.document;w[gk]=function(){(w[gk]._=w[gk]._||[]).push(arguments)};s=d.createElement(t);s.async=!0;s.src='//static.getkudos.me/widget.js';fs=d.getElementsByTagName(t)[0];fs.parentNode.insertBefore(s,fs)})(window,'script','getkudos');getkudos('create', 'GalacticServers')`

$(document).ready ->
	tickerGo = ->
		$('.ticker').each ->
			eh	= $('> *:first-child', this).height()
			num = $(this).children().length
			i = 1

			setInterval(
				=>
					if i >= num
						i = 0

					$('> *:first-child', this).css 'margin-top', (i * eh * -1) + 'px'
					i++
				, 3000
			)

	iconBarWidths = ->
		icons = $('#iconbar .icon')
		width = $('.container').width() / icons.length
		icons.css
			width: Math.floor(width) + 'px'
			display: 'inline-block'

	$("a[href*=#]:not([href=#])").click (e)->
		if location.pathname.replace(/^\//, "") is @pathname.replace(/^\//, "") and location.hostname is @hostname
			target = $(@hash)
			target = (if target.length then target else $("[name=" + @hash.slice(1) + "]"))
			if target.length
				$("html,body").animate
					scrollTop: target.offset().top
				, 1000, 'swing', => window.location.hash = @hash

			e.preventDefault()
			return false


	$(window).on 'resize', do ->
		tickerGo()
		iconBarWidths()