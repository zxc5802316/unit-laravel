# 简单的单元测试

#### 安装

```yaml
composer requir zxl/unit-larvel
```

#### 路由

```php
前缀：zxl
Route::get("/","UnitController@index")->name('zxl.index');
Route::post("/","UnitController@store")->name("zxl.store");
```

#### 框架要求

laravel >=5.8

php >= 7.0

