(function($){

	$(function(){

		$('.classcountrytext-autophone').each(function(i, e){
			var $this = $(this),
				country_plugin = $this.find('.wpcf7-countrytext').data('plugin_countrySelect'),
				$that = $this.siblings('.classphonetext-autophone'),
				phone_plugin = $that.find('.wpcf7-phonetext').data('plugin_intlTelInput');
			
			if($that.length){
				$this.change(function(){
					phone_plugin.setCountry(country_plugin.getSelectedCountryData().iso2);
				});
				
			}
		});
	});	

})(jQuery);