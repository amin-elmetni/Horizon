const addSessionBtns = document.querySelectorAll(".add-session-btn");
const addSessionsForms = document.querySelectorAll(".add-session-form");
const closeSessionsFormsBtns = document.querySelectorAll(".close-session-btn");

const daysLists = document.querySelectorAll(".days-list");

const updateTeacherClassBtns = document.querySelectorAll(
    ".update-teacherClass-btn"
);
// const updateTeacherClassForms = document.querySelectorAll(
//     ".update-teacherClass-form"
// );
const closeUpdateTeacherClassFormsBtns = document.querySelectorAll(
    ".close-teacherClass-btn"
);

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

function toggleAddSessionForms(btn, prefix, formSelector) {
    const formWithID = [...btn.classList].find((cls) =>
        cls.startsWith(`${prefix}-btn-`)
    );
    const teacherClassID = formWithID.split("-")[3];

    const formToShow = document.querySelector(
        `.${formSelector}-${teacherClassID}`
    );

    const formToHide = document.querySelector(
        `.teacherClass-details-${teacherClassID}`
    );

    formToShow.classList.toggle("hidden");
    formToHide.classList.toggle("hidden");
}

function toggleUpdateTeacherClassForms(btn, prefix, formSelector) {
    const formWithID = [...btn.classList].find((cls) =>
        cls.startsWith(`${prefix}-btn-`)
    );
    const teacherClassID = formWithID.split("-")[3];

    const formToShow = document.querySelector(
        `.${formSelector}-${teacherClassID}`
    );

    const formToHide = document.querySelector(
        `.teacherClass-details-${teacherClassID}`
    );

    formToShow.classList.toggle("hidden");
    formToHide.classList.toggle("hidden");
}

daysLists.forEach((listBtn) => {
    listBtn.addEventListener("click", function () {
        handleListClick(listBtn, "day");
    });
});

addSessionBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleAddSessionForms(btn, "add-session", "add-session-form");
    });
});

closeSessionsFormsBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleAddSessionForms(btn, "close-session", "add-session-form");
    });
});

updateTeacherClassBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleUpdateTeacherClassForms(
            btn,
            "update-teacherClass",
            "update-teacherClass-form"
        );
    });
});

closeUpdateTeacherClassFormsBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleUpdateTeacherClassForms(
            btn,
            "close-teacherClass",
            "update-teacherClass-form"
        );
    });
});
