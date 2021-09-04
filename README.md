# Phan + Docker を使用した下方互換性のない変更点の検出

PHP の静的検証ツールである Phan と Docker を使用して、 PHP のバージョン間の下方互換性のない変更点を検出する。

# 実行環境

## 環境

- Docker
- docker-compose
- [phanphp/phan](https://github.com/phan/docker)

## 実行

実行コマンドは以下。

```cmd
docker-compose run phan -po /mnt/log/analysis.txt
```

解析結果は`log`ディレクトリ下の`analysis.txt`に出力される。

## 設定ファイル

`src`ディレクトリ下の`.phan/config.php`に Phan の設定を記載する。
設定内容については[Phan の公式ドキュメント](https://github.com/phan/phan)を参考にする。
