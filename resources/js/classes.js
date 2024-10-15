const classItems = document.querySelectorAll(".class-item");
const classItemsDetails = document.querySelectorAll(".class-details");

const teachersLists = document.querySelectorAll(".teacherIDs-list");
const gardesLists = document.querySelectorAll(".grades-list");
const daysLists = document.querySelectorAll(".days-list");

const createClassBtn = document.querySelector(".create-class-btn");
const createClassForm = document.querySelector(".create-class-form");

const modifyClassBtns = document.querySelectorAll(".modify-class-btn");
const modifyClassForms = document.querySelectorAll(".modify-class-form");

const addSessionBtns = document.querySelectorAll(".add-session-btn");
const addSessionForms = document.querySelectorAll(".add-session-form");

const addTeacherBtns = document.querySelectorAll(".add-teacher-btn");
const addTeacherForms = document.querySelectorAll(".add-teacher-form");

function handleListClick(listBtn, prefix) {
    const listWithID = [...listBtn.classList].find((cls) =>
        cls.startsWith(`${prefix}s-list-`)
    );
    const classID = listWithID.split("-")[2];

    const dropList = document.querySelector(`.${prefix}s-list-${classID}`);
    const icon = document.querySelector(`.${prefix}-icon-${classID}`);

    icon.classList.add("text-primary");
    dropList.classList.add("text-black");
    dropList.parentNode.classList.add("border-primary");
}

function toggleForms(btn, prefix, formSelector) {
    const formWithID = [...btn.classList].find((cls) =>
        cls.startsWith(`${prefix}-btn-`)
    );
    const classID = formWithID.split("-")[3];

    const formToShow = document.querySelector(`.${formSelector}-${classID}`);

    classItemsDetails.forEach((item) => {
        item.classList.add("hidden");
    });

    modifyClassForms.forEach((form) => {
        form.classList.add("hidden");
    });

    addSessionForms.forEach((form) => {
        form.classList.add("hidden");
    });

    addTeacherForms.forEach((form) => {
        form.classList.add("hidden");
    });

    createClassForm.classList.add("hidden");

    formToShow.classList.remove("hidden");
}

gardesLists.forEach((listBtn) => {
    listBtn.addEventListener("click", function () {
        handleListClick(listBtn, "grade");
    });
});

teachersLists.forEach((listBtn) => {
    listBtn.addEventListener("click", function () {
        handleListClick(listBtn, "teacherID");
    });
});

daysLists.forEach((listBtn) => {
    listBtn.addEventListener("click", function () {
        handleListClick(listBtn, "day");
    });
});

modifyClassBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleForms(btn, "modify-class", "modify-class-form");
    });
});

addSessionBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleForms(btn, "add-session", "add-session-form");
    });
});

addTeacherBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleForms(btn, "add-teacher", "add-teacher-form");
    });
});

classItems.forEach((item) => {
    item.addEventListener("click", function () {
        const classWithID = [...item.classList].find((cls) =>
            cls.startsWith("class-item-")
        );
        const classID = classWithID.split("-")[2];

        const classDetailsItem = document.querySelector(
            `.class-${classID}-details`
        );

        classItemsDetails.forEach((item) => {
            item.classList.add("hidden");
        });

        modifyClassForms.forEach((form) => {
            form.classList.add("hidden");
        });

        addSessionForms.forEach((form) => {
            form.classList.add("hidden");
        });

        addTeacherForms.forEach((form) => {
            form.classList.add("hidden");
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
    });
});

createClassBtn.addEventListener("click", () => {
    classItemsDetails.forEach((item) => {
        item.classList.add("hidden");
    });
    modifyClassForms.forEach((form) => {
        form.classList.add("hidden");
    });

    addSessionForms.forEach((form) => {
        form.classList.add("hidden");
    });

    addTeacherForms.forEach((form) => {
        form.classList.add("hidden");
    });

    createClassForm.classList.remove("hidden");
});
