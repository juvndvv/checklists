# Checklists

## Roles y permisos

### Roles definidos en la aplicación

- SuperAdmin
- Admin
- Worker
- Viewer

### Permisos definidos en la aplicación

- create_user
- update_user
- delete_user
- view_model
- create_model
- update_model
- delete_model
- view_assignment
- create_assignment
- update_assignment
- delete_assignment
- edit_checklist
- rate_checklist
- view_checklist

### Jerarquia de roles y permisos

- SuperAdmin: create_user, update_user, delete_user
- Admin: view_model, create_model, update_model, delete_model, view_assignment, create_assignment, update_assignment, delete_assignment, rate_checklist
- Worker: edit_checklists
- Viewer: view_checklist
