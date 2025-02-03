function toggleSection(sectionId) {
    var section = document.getElementById(sectionId);
    section.style.maxHeight = section.style.maxHeight ? null : section.scrollHeight + "px";
}