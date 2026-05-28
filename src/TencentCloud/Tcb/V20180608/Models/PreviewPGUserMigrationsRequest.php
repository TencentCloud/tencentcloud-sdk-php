<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PreviewPGUserMigrations请求参数结构体
 *
 * @method string getEnvId() 获取<p>云开发环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>云开发环境ID</p>
 * @method array getMigrations() 获取<p>预览要执行的migration 列表</p>
 * @method void setMigrations(array $Migrations) 设置<p>预览要执行的migration 列表</p>
 * @method string getSource() 获取<p>标记请求来源</p>
 * @method void setSource(string $Source) 设置<p>标记请求来源</p>
 */
class PreviewPGUserMigrationsRequest extends AbstractModel
{
    /**
     * @var string <p>云开发环境ID</p>
     */
    public $EnvId;

    /**
     * @var array <p>预览要执行的migration 列表</p>
     */
    public $Migrations;

    /**
     * @var string <p>标记请求来源</p>
     */
    public $Source;

    /**
     * @param string $EnvId <p>云开发环境ID</p>
     * @param array $Migrations <p>预览要执行的migration 列表</p>
     * @param string $Source <p>标记请求来源</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Migrations",$param) and $param["Migrations"] !== null) {
            $this->Migrations = [];
            foreach ($param["Migrations"] as $key => $value){
                $obj = new MigrationInput();
                $obj->deserialize($value);
                array_push($this->Migrations, $obj);
            }
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
