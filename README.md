# User API - Pure PHP

A **simple yet powerful API built with pure PHP** to fetch user data in JSON format.  
This project demonstrates building an API handling HTTP status codes, structured JSON responses, and maintaining a clean, scalable architecture suitable for real-world backend projects.

---

## 🌟 Features
- Implemented entirely in **vanilla PHP**  
- Returns **all users** in JSON format with proper HTTP status codes  
- Custom JSON messages for **success** and **errors**  
- Clean and **organized folder structure**  
- Suitable for **portfolio showcase** or learning purposes  

---

## 📡 API Endpoint

### GET /users
- **Description:** Retrieve a list of all users  
- **Response Example:**
```json
{
  "status": 200,
  "message": "Users fetched successfully",
  "data": [
    {
      "id": 1,
      "name": "Ali",
      "email": "ali@example.com"
    },
    {
      "id": 2,
      "name": "Sara",
      "email": "sara@example.com"
    }
  ]
}
```
## 🗂 API Versioning
This API uses versioning to manage future updates:

- **v1** → Current stable version for fetching user list  
- **v2** → Future version (planned) for extended features or modified responses.
