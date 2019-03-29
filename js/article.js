


let anim_title= document.getElementsByClassName("anim_title");
let article_bloc=document.getElementsByClassName("article_bloc");
let article_bloc_text=document.getElementsByClassName("article_bloc_div");







function show(){
  for(let i=0;i<article_bloc.length;i++){
 article_bloc[i].classList.add("anim_articleBloc_show");}

 for(let i=0;i<article_bloc_text.length;i++){
 article_bloc_text[i].classList.add("article_bloc_text");}


}
for(let i=0;i<anim_title.length;i++){
anim_title[i].addEventListener("animationstart", show);}
