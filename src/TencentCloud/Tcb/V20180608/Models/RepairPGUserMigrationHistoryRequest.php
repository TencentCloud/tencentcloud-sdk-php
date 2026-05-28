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
 * RepairPGUserMigrationHistory请求参数结构体
 *
 * @method string getEnvId() 获取<p>云开发环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>云开发环境ID</p>
 * @method string getMigrationVersion() 获取<p>migration版本</p><p>参数格式：14位时间格式</p><p>入参限制：纯数字</p>
 * @method void setMigrationVersion(string $MigrationVersion) 设置<p>migration版本</p><p>参数格式：14位时间格式</p><p>入参限制：纯数字</p>
 * @method string getName() 获取<p>migration 版本名</p><p>入参限制：限制小写字母和下划线</p>
 * @method void setName(string $Name) 设置<p>migration 版本名</p><p>入参限制：限制小写字母和下划线</p>
 * @method string getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>reverted： 表示删除 history 记录</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>reverted： 表示删除 history 记录</li></ul>
 * @method string getReason() 获取<p>修复原因</p>
 * @method void setReason(string $Reason) 设置<p>修复原因</p>
 * @method string getQuery() 获取<p>applied的时候填写，记录应用的sql语句</p>
 * @method void setQuery(string $Query) 设置<p>applied的时候填写，记录应用的sql语句</p>
 */
class RepairPGUserMigrationHistoryRequest extends AbstractModel
{
    /**
     * @var string <p>云开发环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>migration版本</p><p>参数格式：14位时间格式</p><p>入参限制：纯数字</p>
     */
    public $MigrationVersion;

    /**
     * @var string <p>migration 版本名</p><p>入参限制：限制小写字母和下划线</p>
     */
    public $Name;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>reverted： 表示删除 history 记录</li></ul>
     */
    public $Status;

    /**
     * @var string <p>修复原因</p>
     */
    public $Reason;

    /**
     * @var string <p>applied的时候填写，记录应用的sql语句</p>
     */
    public $Query;

    /**
     * @param string $EnvId <p>云开发环境ID</p>
     * @param string $MigrationVersion <p>migration版本</p><p>参数格式：14位时间格式</p><p>入参限制：纯数字</p>
     * @param string $Name <p>migration 版本名</p><p>入参限制：限制小写字母和下划线</p>
     * @param string $Status <p>状态</p><p>枚举值：</p><ul><li>applied： 已应用</li><li>reverted： 表示删除 history 记录</li></ul>
     * @param string $Reason <p>修复原因</p>
     * @param string $Query <p>applied的时候填写，记录应用的sql语句</p>
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

        if (array_key_exists("MigrationVersion",$param) and $param["MigrationVersion"] !== null) {
            $this->MigrationVersion = $param["MigrationVersion"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }
    }
}
