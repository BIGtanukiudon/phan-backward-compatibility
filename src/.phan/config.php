<?php
return [
    'directory_list' => [
        './'
    ],
    'backward_compatibility_checks' => true,
    'ignore_undeclared_functions_with_known_signatures' => false,
    'whitelist_issue_types' => [
        'PhanCompatiblePHP7',  // 変更された可能背のある構文のチェック
        'PhanDeprecatedFunctionInternal',  // 7.0移行で非推奨になった関数についての警告
        'PhanUndeclaredFunction',  // PHP5.xで非推奨になり、PHP7.0で削除された関数の確認
    ],
    'plugins' => ['InvokePHPNativeSyntaxCheckPlugin'],
];
?>