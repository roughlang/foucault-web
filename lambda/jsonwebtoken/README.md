API Gatewayの認証設定

lambda/jsonwebtoken/index.mjs
シークレットキーを設定
```
const YOUR_SECRET_KEY = 'your_secret_key_here';
```

有効期限の設定
```
expiresIn: '1h'
```

トークンの発行
```
% node generate_token.js 
```


{
  "type": "TOKEN",
  "authorizationToken": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6InVzZXIxMjMiLCJuYW1lIjoiRXhhbXBsZSBVc2VyIiwiaWF0IjoxNzA5MDg1NDE3LCJleHAiOjE3MDkwODkwMTd9.qItoTij24yMkqfPfYICwj1kqlkIFQb8wFbAQVQNGmKs",
  "methodArn": "arn:aws:execute-api:us-east-1:123456789012:exampleApiId/dev/POST/users"
}


{
  "type": "TOKEN",
  "authorizationToken": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6InVzZXIxMjMiLCJuYW1lIjoiRXhhbXBsZSBVc2VyIiwiaWF0IjoxNzA5MDg1NDE3LCJleHAiOjE3MDkwODkwMTd9.qItoTij24yMkqfPfYICwj1kqlkIFQb8wFbAQVQNGmKs",
  "methodArn": "arn:aws:execute-api:us-east-1:123456789012:exampleApiId/dev/POST/users"
}