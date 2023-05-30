export default class CardsController {
    constructor(countCard, step) {
        this.currentShow = 0;
        this.countCard = countCard;
        this.step = step;
        this.isShowHand = true;

        this.hideAll();
        this.getCurrentShow();
    }

    hideAll() {
        for (let i = 0; i < this.countCard; i++) {
            document.getElementById(i).hidden = true;
        }
    }

    reboot() {
        this.hideAll();
        this.currentShow = 0;
    }

    getCurrentShow() {
        // document.getElementById("count").innerHTML = this.currentShow;
    }

    Show(begin, end) {
        /**
         * Back(begin, end) Показать карты на n - шагов вперёд
         * @param int begin
         * @param int end
         * **/

        end = Math.abs(begin - end - begin);

        if (begin > this.countCard) return;
        // if (begin + end > this.countCard) return;

        // console.log(begin, end);

        const endStep = begin + end;

        for (let i = begin; i < endStep; ) {
            if (i > this.countCard - 1) return;
            // console.log("document.getElementById({" + i + "}).hidden = false;");
            document.getElementById(i).hidden = false;
            i++;
        }
    }

    ToggleHand() {
        if (this.isShowHand) {
            document.getElementsByClassName("handsBottom")[0].hidden = true;
            console.log(
                "document.getElementsByClassName(handsBottom).hidden = true"
            );
        } else {
            document.getElementsByClassName("handsBottom")[0].hidden = false;
            console.log(
                "document.getElementsByClassName(handsBottom).hidden = false"
            );
        }
        this.isShowHand = !this.isShowHand;
    }

    ShowForPrev() {
        if (this.currentShow - this.step < 0) return;
        this.hideAll();
        this.currentShow -= this.step;
        this.Show(this.currentShow, this.step);
        this.getCurrentShow();
    }

    ShowForNext() {
        // if (this.currentShow + this.step > this.countCard - 1) return;
        this.hideAll();
        this.Show(this.currentShow, this.step);
        if (this.currentShow + this.step > this.countCard - 1) return;
        this.currentShow += this.step;
        this.getCurrentShow();
    }
}
