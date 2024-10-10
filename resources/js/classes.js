const classItems = document.querySelectorAll(".class-item");
const classItemDetails = document.querySelectorAll(".class-details");

classItems.forEach((item) => {
    item.addEventListener("click", function () {
        const classWithID = [...item.classList].find((cls) =>
            cls.startsWith("class-item-")
        );
        const classID = classWithID.split("-")[2];

        const classDetailsItem = document.querySelector(
            `.class-${classID}-details`
        );

        classItemDetails.forEach((item) => {
            item.classList.add("hidden");
        });

        classItems.forEach((item) => {
            const target1 = item.querySelector(".target-1");
            const lastChild = item.lastElementChild;
            const target2 = lastChild.querySelector(".target-2");

            target1.classList.remove("bg-bg1");
            target2.classList.remove("bg-bg1");
            target2.classList.add("bg-transparent");
        });

        classDetailsItem.classList.remove("hidden");

        const target1 = item.querySelector(".target-1");
        const lastChild = item.lastElementChild;
        const target2 = lastChild.querySelector(".target-2");

        target1.classList.add("bg-bg1");
        target2.classList.add("bg-bg1");
        target2.classList.remove("bg-transparent");
    });
});
