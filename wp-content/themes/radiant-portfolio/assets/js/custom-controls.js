(function(api) {

    api.sectionConstructor['radiant-portfolio-upsell'] = api.Section.extend({
        attachEvents: function() {},
        isContextuallyActive: function() {
            return true;
        }
    });
})(wp.customize);