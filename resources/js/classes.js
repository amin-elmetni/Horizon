const classItems = document.querySelectorAll(".class-item");
const classItemDetails = document.querySelectorAll(".class-details");

const gardesList = document.querySelector(".grades-list");
const gradeIcon = document.querySelector(".grade-icon");

const createClassBtn = document.querySelector(".create-class-btn");
const createClassForm = document.querySelector(".create-class-form");

const modifyClassBtns = document.querySelectorAll(".modify-class-btn");
const modifyClassForms = document.querySelectorAll(".modify-class-form");

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
        createClassForm.classList.add("hidden");

        modifyClassForms.forEach((form) => {
            form.classList.add("hidden");
        });
    });
});

modifyClassBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        const formWithID = [...btn.classList].find((cls) =>
            cls.startsWith("modify-class-btn-")
        );
        const classID = formWithID.split("-")[3];

        const modifyClassForm = document.querySelector(
            `.modify-class-form-${classID}`
        );

        classItemDetails.forEach((item) => {
            item.classList.add("hidden");
        });

        modifyClassForms.forEach((form) => {
            form.classList.add("hidden");
        });

        modifyClassForm.classList.remove("hidden");
        createClassForm.classList.add("hidden");
    });
});

gardesList.addEventListener("click", () => {
    gradeIcon.classList.add("text-primary");
    gardesList.classList.add("text-black");
    gardesList.parentNode.classList.add("border-primary");
});

createClassBtn.addEventListener("click", () => {
    classItemDetails.forEach((item) => {
        item.classList.add("hidden");
    });
    createClassForm.classList.remove("hidden");
});
