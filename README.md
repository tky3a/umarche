# 起動
```
sail up

sail npm run dev
 or
sail npm watch
```

# settings.json
```
{
    "makefile.extensionOutputFolder": "./.vscode",
    "editor.formatOnSave": true,
    // https://github.com/bmewburn/vscode-intelephense/issues/1413
    // 以下はUndefined method '?'. intelephense対策
    "intelephense.telemetry.enabled": false,
    "intelephense.completion.triggerParameterHints": true,
    "intelephense.completion.insertUseDeclaration": true,
    "intelephense.trace.server": "messages",
    "intelephense.diagnostics.undefinedClassConstants": false,
    "intelephense.diagnostics.undefinedFunctions": false,
    "intelephense.diagnostics.undefinedConstants": false,
    "intelephense.diagnostics.undefinedProperties": false,
    "intelephense.diagnostics.undefinedTypes": false,
    "intelephense.diagnostics.undefinedMethods": false,
}
```

# クラスベースのコンポーネント作成
```
// app/View/Components　と　resources/view/components　配下に作成
sail artisan make:component コンポーネント名

// app/View/Componentsのみに作成する場合
sail artisan make:component コンポーネント名 --inline
```