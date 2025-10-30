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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetInstanceMaintenance请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定实例ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method string getMaintenanceStart() 获取维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点或半点，如00:00或00:30。
 * @method void setMaintenanceStart(string $MaintenanceStart) 设置维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点或半点，如00:00或00:30。
 * @method string getMaintenanceEnd() 获取维护时间窗结束时间。
- 取值范围为"00:00-23:00"的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。
- 结束时间务必是基于开始时间向后的时间。
 * @method void setMaintenanceEnd(string $MaintenanceEnd) 设置维护时间窗结束时间。
- 取值范围为"00:00-23:00"的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。
- 结束时间务必是基于开始时间向后的时间。
 */
class SetInstanceMaintenanceRequest extends AbstractModel
{
    /**
     * @var string 指定实例ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var string 维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点或半点，如00:00或00:30。
     */
    public $MaintenanceStart;

    /**
     * @var string 维护时间窗结束时间。
- 取值范围为"00:00-23:00"的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。
- 结束时间务必是基于开始时间向后的时间。
     */
    public $MaintenanceEnd;

    /**
     * @param string $InstanceId 指定实例ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     * @param string $MaintenanceStart 维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点或半点，如00:00或00:30。
     * @param string $MaintenanceEnd 维护时间窗结束时间。
- 取值范围为"00:00-23:00"的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。
- 结束时间务必是基于开始时间向后的时间。
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

        if (array_key_exists("MaintenanceStart",$param) and $param["MaintenanceStart"] !== null) {
            $this->MaintenanceStart = $param["MaintenanceStart"];
        }

        if (array_key_exists("MaintenanceEnd",$param) and $param["MaintenanceEnd"] !== null) {
            $this->MaintenanceEnd = $param["MaintenanceEnd"];
        }
    }
}
