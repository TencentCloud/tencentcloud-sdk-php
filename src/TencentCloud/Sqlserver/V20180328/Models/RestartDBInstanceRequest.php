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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartDBInstance请求参数结构体
 *
 * @method string getInstanceId() 获取数据库实例ID，形如mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) 设置数据库实例ID，形如mssql-njj2mtpl
 * @method integer getWaitSwitch() 获取重启设置，0-立刻重启，1-维护时间窗口内重启，默认0
 * @method void setWaitSwitch(integer $WaitSwitch) 设置重启设置，0-立刻重启，1-维护时间窗口内重启，默认0
 */
class RestartDBInstanceRequest extends AbstractModel
{
    /**
     * @var string 数据库实例ID，形如mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var integer 重启设置，0-立刻重启，1-维护时间窗口内重启，默认0
     */
    public $WaitSwitch;

    /**
     * @param string $InstanceId 数据库实例ID，形如mssql-njj2mtpl
     * @param integer $WaitSwitch 重启设置，0-立刻重启，1-维护时间窗口内重启，默认0
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

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }
    }
}
