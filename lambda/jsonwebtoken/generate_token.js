const jwt = require('jsonwebtoken');

const user = { id: 'user123', name: 'Example User' };
const secretKey = 'your-256-bit-secret'; // 安全なキーを使用してください

const token = jwt.sign(user, secretKey, { expiresIn: '1h' });
console.log(token);
