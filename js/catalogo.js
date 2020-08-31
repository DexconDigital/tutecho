var instaFeed = new Instafeed({
  get: "user",
  userId: '7710102627',
  /* mi id 2229682032 */
  clientId: '3f4348d99f094c3c9184aa74f5160fd2',
  accessToken: "7710102627.1677ed0.618a123970954a49a91958d9e67a7bae",
  target: "instafeed",
  sortBy: "most-recent",
  limit: 20,
  resolution: "standard_resolution",
  template:
    '<div class="col-md-3 col-sm-6 col-xs-12" style="padding:4px;">'+
    '<a data-fancybox="gallery" href="{{image}}" class="">'+
    '<img src="{{image}}">'+
    '</a>'+
    '<div class="info">'+
    '<p style="color:#000"><i class="icon-comment"></i>{{caption}}</p><br>'+
    '<ul id="title-2">'+
    '<li class="icon-heart" >{{likes}} likes</li>'+
    '<li class="icon-chat">{{comments}} comments</li>'+
    '</ul>'+
    '</div>'+
    '</div>'
}).run();

$.fn.extend({
  matchHeight: function(data) {
    var maxHeight = 0;
    $(this).each(function() {
      maxHeight = maxHeight > $(this).height() ? maxHeight : $(this).height();
    });
    $(this).height(maxHeight);
  }
});


