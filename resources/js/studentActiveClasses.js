const updateStudentClassBtns = document.querySelectorAll(
    ".update-studentClass-btn"
);
// const updateStudentClassForms = document.querySelectorAll(
//     ".update-studentClass-form"
// );
const closeUpdateStudentClassFormsBtns = document.querySelectorAll(
    ".close-studentClass-btn"
);

function toggleUpdateStudentClassForms(btn, prefix, formSelector) {
    const formWithID = [...btn.classList].find((cls) =>
        cls.startsWith(`${prefix}-btn-`)
    );
    const studentClassID = formWithID.split("-")[3];

    const formToShow = document.querySelector(
        `.${formSelector}-${studentClassID}`
    );

    const formToHide = document.querySelector(
        `.studentClass-details-${studentClassID}`
    );

    formToShow.classList.toggle("hidden");
    formToHide.classList.toggle("hidden");
}

updateStudentClassBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleUpdateStudentClassForms(
            btn,
            "update-studentClass",
            "update-studentClass-form"
        );
    });
});

closeUpdateStudentClassFormsBtns.forEach((btn) => {
    btn.addEventListener("click", function () {
        toggleUpdateStudentClassForms(
            btn,
            "close-studentClass",
            "update-studentClass-form"
        );
    });
});
