// ESモジュール形式でのインポート
import jwt from 'jsonwebtoken';

// JWTトークンの検証に使用する公開キーやシークレットキー
const YOUR_SECRET_KEY = '20240228';

export async function handler(event) {
    // トークンを取得
    const token = event.authorizationToken.split(' ')[1]; // "Bearer TOKEN_HERE"の形式を想定

    try {
        // トークンを検証
        const decoded = jwt.verify(token, YOUR_SECRET_KEY);

        // 検証成功した場合のポリシーを生成して返す
        return generatePolicy('user', 'Allow', event.methodArn);
    } catch (error) {
        // 検証失敗した場合はDenyのポリシーを返す
        return generatePolicy('user', 'Deny', event.methodArn);
    }
};

// アクセス制御ポリシーを生成する関数
function generatePolicy(principalId, effect, resource) {
    const authResponse = {};

    authResponse.principalId = principalId;
    if (effect && resource) {
        const policyDocument = {};
        policyDocument.Version = '2012-10-17';
        policyDocument.Statement = [];
        const statementOne = {};
        statementOne.Action = 'execute-api:Invoke';
        statementOne.Effect = effect;
        statementOne.Resource = resource;
        policyDocument.Statement[0] = statementOne;
        authResponse.policyDocument = policyDocument;
    }

    return authResponse;
}
