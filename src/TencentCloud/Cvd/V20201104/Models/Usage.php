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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 桌面使用时长详情
 *
 * @method string getInstanceId() 获取桌面实例 ID
 * @method void setInstanceId(string $InstanceId) 设置桌面实例 ID
 * @method string getName() 获取桌面名称
 * @method void setName(string $Name) 设置桌面名称
 * @method string getStatus() 获取桌面当前状态
 * @method void setStatus(string $Status) 设置桌面当前状态
 * @method string getUserName() 获取桌面绑定的用户名，若未绑定，为空
 * @method void setUserName(string $UserName) 设置桌面绑定的用户名，若未绑定，为空
 * @method string getChargeType() 获取桌面计费类型
 * @method void setChargeType(string $ChargeType) 设置桌面计费类型
 * @method string getInstanceType() 获取桌面类型
 * @method void setInstanceType(string $InstanceType) 设置桌面类型
 * @method string getOsName() 获取桌面操作系统
 * @method void setOsName(string $OsName) 设置桌面操作系统
 * @method string getActiveTime() 获取桌面使用时长，h:m:s
 * @method void setActiveTime(string $ActiveTime) 设置桌面使用时长，h:m:s
 * @method string getIdleTime() 获取桌面空闲时长，h:m:s
 * @method void setIdleTime(string $IdleTime) 设置桌面空闲时长，h:m:s
 * @method boolean getAnonymousAccess() 获取是否匿名访问
 * @method void setAnonymousAccess(boolean $AnonymousAccess) 设置是否匿名访问
 */
class Usage extends AbstractModel
{
    /**
     * @var string 桌面实例 ID
     */
    public $InstanceId;

    /**
     * @var string 桌面名称
     */
    public $Name;

    /**
     * @var string 桌面当前状态
     */
    public $Status;

    /**
     * @var string 桌面绑定的用户名，若未绑定，为空
     */
    public $UserName;

    /**
     * @var string 桌面计费类型
     */
    public $ChargeType;

    /**
     * @var string 桌面类型
     */
    public $InstanceType;

    /**
     * @var string 桌面操作系统
     */
    public $OsName;

    /**
     * @var string 桌面使用时长，h:m:s
     */
    public $ActiveTime;

    /**
     * @var string 桌面空闲时长，h:m:s
     */
    public $IdleTime;

    /**
     * @var boolean 是否匿名访问
     */
    public $AnonymousAccess;

    /**
     * @param string $InstanceId 桌面实例 ID
     * @param string $Name 桌面名称
     * @param string $Status 桌面当前状态
     * @param string $UserName 桌面绑定的用户名，若未绑定，为空
     * @param string $ChargeType 桌面计费类型
     * @param string $InstanceType 桌面类型
     * @param string $OsName 桌面操作系统
     * @param string $ActiveTime 桌面使用时长，h:m:s
     * @param string $IdleTime 桌面空闲时长，h:m:s
     * @param boolean $AnonymousAccess 是否匿名访问
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("OsName",$param) and $param["OsName"] !== null) {
            $this->OsName = $param["OsName"];
        }

        if (array_key_exists("ActiveTime",$param) and $param["ActiveTime"] !== null) {
            $this->ActiveTime = $param["ActiveTime"];
        }

        if (array_key_exists("IdleTime",$param) and $param["IdleTime"] !== null) {
            $this->IdleTime = $param["IdleTime"];
        }

        if (array_key_exists("AnonymousAccess",$param) and $param["AnonymousAccess"] !== null) {
            $this->AnonymousAccess = $param["AnonymousAccess"];
        }
    }
}
