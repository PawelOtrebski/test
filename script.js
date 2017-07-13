$(function(){
    app.init();
});

var app = {
    init:function() {
        var dummies = $('.dummy');
        console.log(dummies);
        dummies.prev().dblclick(function(){
            $(this).toggle().next().toggle();  
        });

        dummies.prev().click(function(){
            var red = Math.floor(Math.random()*255)+0;
            var format = 'rgb('+red+','+red+','+red+')';
            $(this).css('background-color',format);
        });

        dummies.dblclick(function(){
            $(this).toggle().prev().toggle();
        });

    }
}
