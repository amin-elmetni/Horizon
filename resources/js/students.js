const studentItems = document.querySelectorAll(".student-item");
const studentDetailsItems = document.querySelectorAll(".student-details");

const addStudentBtn = document.querySelector(".add-student-btn");
const addStudentForm = document.querySelector(".add-student-form");

studentItems.forEach((item) => {
    item.addEventListener("click", function () {
        const classWithID = [...item.classList].find((cls) =>
            cls.startsWith("student-item-")
        );
        const studentID = classWithID.split("-")[2];

        const studentDetailsItem = document.querySelector(
            `.student-${studentID}-details`
        );

        studentDetailsItems.forEach((item) => {
            item.classList.add("hidden");
        });

        studentItems.forEach((item) => {
            item.classList.remove("bg-bg3");
        });

        addStudentForm.classList.add("hidden");
        studentDetailsItem.classList.remove("hidden");
        item.classList.add("bg-bg3");
    });
});

addStudentBtn.addEventListener("click", () => {
    studentDetailsItems.forEach((item) => {
        item.classList.add("hidden");
    });

    addStudentForm.classList.remove("hidden");
});
