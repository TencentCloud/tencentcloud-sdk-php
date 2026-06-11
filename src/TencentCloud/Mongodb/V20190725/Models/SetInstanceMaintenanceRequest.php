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
 * @method string getInstanceId() 获取<p>指定实例ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method string getMaintenanceStart() 获取<p>维护时间窗开始时间。取值范围为&quot;00:00-23:00&quot;的任意整点或半点，如00:00或00:30。</p>
 * @method void setMaintenanceStart(string $MaintenanceStart) 设置<p>维护时间窗开始时间。取值范围为&quot;00:00-23:00&quot;的任意整点或半点，如00:00或00:30。</p>
 * @method string getMaintenanceEnd() 获取<p>维护时间窗结束时间。</p><ul><li>取值范围为&quot;00:00-23:00&quot;的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。</li><li>结束时间务必是基于开始时间向后的时间。</li></ul>
 * @method void setMaintenanceEnd(string $MaintenanceEnd) 设置<p>维护时间窗结束时间。</p><ul><li>取值范围为&quot;00:00-23:00&quot;的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。</li><li>结束时间务必是基于开始时间向后的时间。</li></ul>
 * @method string getMaintenanceDays() 获取<p>指定每周内维护时间窗口的具体日期。  格式：请输入 1-7 之间的数字代表周一到周日（例如：1 代表周一），多个日期请用英文逗号 , 分隔。 示例：输入 1,3,5 表示维护窗口周期在每周的周一、周三、周五。 默认值：不设置，则默认为全周期 (1,2,3,4,5,6,7)。</p>
 * @method void setMaintenanceDays(string $MaintenanceDays) 设置<p>指定每周内维护时间窗口的具体日期。  格式：请输入 1-7 之间的数字代表周一到周日（例如：1 代表周一），多个日期请用英文逗号 , 分隔。 示例：输入 1,3,5 表示维护窗口周期在每周的周一、周三、周五。 默认值：不设置，则默认为全周期 (1,2,3,4,5,6,7)。</p>
 */
class SetInstanceMaintenanceRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>维护时间窗开始时间。取值范围为&quot;00:00-23:00&quot;的任意整点或半点，如00:00或00:30。</p>
     */
    public $MaintenanceStart;

    /**
     * @var string <p>维护时间窗结束时间。</p><ul><li>取值范围为&quot;00:00-23:00&quot;的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。</li><li>结束时间务必是基于开始时间向后的时间。</li></ul>
     */
    public $MaintenanceEnd;

    /**
     * @var string <p>指定每周内维护时间窗口的具体日期。  格式：请输入 1-7 之间的数字代表周一到周日（例如：1 代表周一），多个日期请用英文逗号 , 分隔。 示例：输入 1,3,5 表示维护窗口周期在每周的周一、周三、周五。 默认值：不设置，则默认为全周期 (1,2,3,4,5,6,7)。</p>
     */
    public $MaintenanceDays;

    /**
     * @param string $InstanceId <p>指定实例ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param string $MaintenanceStart <p>维护时间窗开始时间。取值范围为&quot;00:00-23:00&quot;的任意整点或半点，如00:00或00:30。</p>
     * @param string $MaintenanceEnd <p>维护时间窗结束时间。</p><ul><li>取值范围为&quot;00:00-23:00&quot;的任意整点或半点，维护时间持续时长最小为30分钟，最大为3小时。</li><li>结束时间务必是基于开始时间向后的时间。</li></ul>
     * @param string $MaintenanceDays <p>指定每周内维护时间窗口的具体日期。  格式：请输入 1-7 之间的数字代表周一到周日（例如：1 代表周一），多个日期请用英文逗号 , 分隔。 示例：输入 1,3,5 表示维护窗口周期在每周的周一、周三、周五。 默认值：不设置，则默认为全周期 (1,2,3,4,5,6,7)。</p>
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

        if (array_key_exists("MaintenanceDays",$param) and $param["MaintenanceDays"] !== null) {
            $this->MaintenanceDays = $param["MaintenanceDays"];
        }
    }
}
