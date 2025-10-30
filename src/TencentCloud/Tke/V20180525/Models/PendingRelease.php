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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用市场安装的Pending应用
 *
 * @method string getCondition() 获取应用状态详情
 * @method void setCondition(string $Condition) 设置应用状态详情
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getID() 获取应用ID
 * @method void setID(string $ID) 设置应用ID
 * @method string getName() 获取应用名称
 * @method void setName(string $Name) 设置应用名称
 * @method string getNamespace() 获取应用命名空间
 * @method void setNamespace(string $Namespace) 设置应用命名空间
 * @method string getStatus() 获取应用状态(参考helm的发布状态： unknown, deployed, uninstalled, superseded, failed, uninstalling, pending-install, pending-upgrade 或 pending-rollback)
 * @method void setStatus(string $Status) 设置应用状态(参考helm的发布状态： unknown, deployed, uninstalled, superseded, failed, uninstalling, pending-install, pending-upgrade 或 pending-rollback)
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 */
class PendingRelease extends AbstractModel
{
    /**
     * @var string 应用状态详情
     */
    public $Condition;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 应用ID
     */
    public $ID;

    /**
     * @var string 应用名称
     */
    public $Name;

    /**
     * @var string 应用命名空间
     */
    public $Namespace;

    /**
     * @var string 应用状态(参考helm的发布状态： unknown, deployed, uninstalled, superseded, failed, uninstalling, pending-install, pending-upgrade 或 pending-rollback)
     */
    public $Status;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @param string $Condition 应用状态详情
     * @param string $CreatedTime 创建时间
     * @param string $ID 应用ID
     * @param string $Name 应用名称
     * @param string $Namespace 应用命名空间
     * @param string $Status 应用状态(参考helm的发布状态： unknown, deployed, uninstalled, superseded, failed, uninstalling, pending-install, pending-upgrade 或 pending-rollback)
     * @param string $UpdatedTime 更新时间
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }
    }
}
