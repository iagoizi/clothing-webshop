// This script checks the length of certain elements, so it doesn't exeed a certain limit.
const infos = document.getElementsByClassName("product-info");
const maxChars = 200; // Limit for item description. 
for(i = 0; i < infos.length; i++){
    const text = infos[i].textContent;
  
  if (text.length > maxChars) {
    infos[i].textContent = text.substring(0, maxChars) + "...";
  }
}

const names = document.getElementsByClassName("product-name");
const maxNameChars = 100; // Limit for name. 
for(i = 0; i < names.length; i++){
    const text = names[i].textContent;
  
  if (text.length > maxChars) {
    names[i].textContent = text.substring(0, maxChars) + "...";
  }
}