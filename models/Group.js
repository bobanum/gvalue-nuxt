import Model from './Model';

export default class Group extends Model {
    static relations = {
        course: { name: 'course', model: 'Course', type: 'hasMany' },
        teacher: { name: 'teacher', model: 'Teacher', type: 'belongsTo' },
        course_semester: { name: 'course_semester', model: 'CourseSemester', type: 'hasMany' },
    };
    id = null;
    number = 0;
    schedule = "";
    teacher_id = 0;
    teacher = null;
    course_semester_id = 0;
    course_semester = null;
    get courseTitle() {
        return `${this.course.code} - ${this.course.title}`;
    }
}
