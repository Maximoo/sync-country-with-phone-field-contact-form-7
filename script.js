(function($){

	$(function(){

		$('.countrytext-sync').each(function(i, e){
			var $this = $(this),
				country_plugin = $this.data('plugin_countrySelect'),
				$that = $this.parents('form').find('.phonetext-sync'),
				phone_plugin = $that.data('plugin_intlTelInput');
			
			if($that.length){
				$this.change(function(){
					phone_plugin.setCountry(country_plugin.getSelectedCountryData().iso2);
				});
				
			}
		});
	});	

})(jQuery);