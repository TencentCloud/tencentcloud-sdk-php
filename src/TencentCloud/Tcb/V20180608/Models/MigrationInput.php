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
 * 结构化 SQL migration 信息
 *
 * @method string getVersion() 获取<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method void setVersion(string $Version) 设置<p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
 * @method string getName() 获取<p>migration 版本名</p><p>入参限制：仅允许小写字母和下划线</p>
 * @method void setName(string $Name) 设置<p>migration 版本名</p><p>入参限制：仅允许小写字母和下划线</p>
 * @method string getQuery() 获取<p>migration 应用 sql 语句</p>
 * @method void setQuery(string $Query) 设置<p>migration 应用 sql 语句</p>
 * @method string getRollback() 获取<p>migration 回滚 sql 语句</p>
 * @method void setRollback(string $Rollback) 设置<p>migration 回滚 sql 语句</p>
 */
class MigrationInput extends AbstractModel
{
    /**
     * @var string <p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
     */
    public $Version;

    /**
     * @var string <p>migration 版本名</p><p>入参限制：仅允许小写字母和下划线</p>
     */
    public $Name;

    /**
     * @var string <p>migration 应用 sql 语句</p>
     */
    public $Query;

    /**
     * @var string <p>migration 回滚 sql 语句</p>
     */
    public $Rollback;

    /**
     * @param string $Version <p>migration 版本号</p><p>参数格式：纯数字，14位时间格式</p>
     * @param string $Name <p>migration 版本名</p><p>入参限制：仅允许小写字母和下划线</p>
     * @param string $Query <p>migration 应用 sql 语句</p>
     * @param string $Rollback <p>migration 回滚 sql 语句</p>
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Rollback",$param) and $param["Rollback"] !== null) {
            $this->Rollback = $param["Rollback"];
        }
    }
}
