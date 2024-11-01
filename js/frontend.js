jQuery(document).ready(function ($) {
    $('.mh-frontend-wrapper').each(function(){
        div_count = 0;
        var mh_frontend_wrapper = $(this);
        mh_frontend_wrapper.find('.mh-frontend-wrapper-item').each(function(){
            if($(this).parent().hasClass('mh-frontend-sub-heading')){
                div_count++;
            }
        });
        mh_frontend_wrapper.find('.mh-frontend-sub-heading').addClass('mh-item-count-'+div_count);
    });
});
