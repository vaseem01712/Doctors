import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.data('appointmentForm', (doctors = [], initialSpecialty = '', initialDoctor = '') => ({
    specialtyId: String(initialSpecialty || ''),
    doctorId: String(initialDoctor || ''),
    doctors: doctors || [],

    get filteredDoctors() {
        if (!this.specialtyId) {
            return [];
        }

        return this.doctors.filter((doctor) => String(doctor.specialty_id) === String(this.specialtyId));
    },

    onSpecialtyChange() {
        this.doctorId = '';
    },
}));

Alpine.start();
