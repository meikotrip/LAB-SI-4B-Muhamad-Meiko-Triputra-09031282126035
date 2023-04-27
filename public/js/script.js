//Show and Hide Skills
function flip (id) {
    var skill = document.getElementById(id);
    var span1 = skill.getElementsByTagName('span')[0];
    var span2 = skill.getElementsByTagName('span')[1];

    if (span1.className.indexOf("show-skill") == -1 && span2.className.indexOf("hide-skill") == -1 ) {
        skill.className = skill.className.replace("skill", "skill-light");
        span1.className = span1.className.replace("hide-skill", "show-skill");
        span2.className = span2.className.replace("show-skill", "hide-skill");
    } else {
        skill.className = skill.className.replace("skill-light", "skill");
        span1.className = span1.className.replace("show-skill", "hide-skill");
        span2.className = span2.className.replace("hide-skill", "show-skill");
    }
}

document.getElementById("form").addEventListener("submit", function(event) {
  alert("Permintaan berhasil dikirim! Terimakasih ^_^"); document.getElementById("form").reset();
event.preventDefault();
});