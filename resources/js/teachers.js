const teacherItems = document.querySelectorAll(".teacher-item");
const teacherDetailsItems = document.querySelectorAll(".teacher-details");

const addTeacherBtn = document.querySelector(".add-teacher-btn");
const addTeacherForm = document.querySelector(".add-teacher-form");

teacherItems.forEach((item) => {
    item.addEventListener("click", function () {
        const classWithID = [...item.classList].find((cls) =>
            cls.startsWith("teacher-item-")
        );
        const teacherID = classWithID.split("-")[2];

        const teacherDetailsItem = document.querySelector(
            `.teacher-${teacherID}-details`
        );

        teacherDetailsItems.forEach((item) => {
            item.classList.add("hidden");
        });

        teacherItems.forEach((item) => {
            item.classList.remove("bg-bg3");
        });

        addTeacherForm.classList.add("hidden");
        teacherDetailsItem.classList.remove("hidden");
        item.classList.add("bg-bg3");
    });
});

addTeacherBtn.addEventListener("click", () => {
    teacherDetailsItems.forEach((item) => {
        item.classList.add("hidden");
    });

    addTeacherForm.classList.remove("hidden");
});
