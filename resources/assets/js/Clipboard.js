export default class Clipboard {

    constructor(title = "Press Ctrl + C and Enter", text = location.href) {
      this.title = title;
      this.text = text;
    }

    showPanel() {
      prompt(this.title, this.text);
    }

}