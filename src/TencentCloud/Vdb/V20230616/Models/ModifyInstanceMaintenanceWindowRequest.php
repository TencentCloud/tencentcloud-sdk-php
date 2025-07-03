<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Vdb\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceMaintenanceWindow请求参数结构体
 *
 * @method string getInstanceId() 获取指定需修改维护时间窗的实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定需修改维护时间窗的实例 ID。
 * @method string getStartTime() 获取维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点，如01:00。
 * @method void setStartTime(string $StartTime) 设置维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点，如01:00。
 * @method integer getTimeSpan() 获取设置维护时间窗的时长。根据指定的维护时间窗开始时间与时长可确定维护时间窗的范围。
- 单位：小时。
- 取值范围：3、6、8、10、12。
 * @method void setTimeSpan(integer $TimeSpan) 设置设置维护时间窗的时长。根据指定的维护时间窗开始时间与时长可确定维护时间窗的范围。
- 单位：小时。
- 取值范围：3、6、8、10、12。
 */
class ModifyInstanceMaintenanceWindowRequest extends AbstractModel
{
    /**
     * @var string 指定需修改维护时间窗的实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点，如01:00。
     */
    public $StartTime;

    /**
     * @var integer 设置维护时间窗的时长。根据指定的维护时间窗开始时间与时长可确定维护时间窗的范围。
- 单位：小时。
- 取值范围：3、6、8、10、12。
     */
    public $TimeSpan;

    /**
     * @param string $InstanceId 指定需修改维护时间窗的实例 ID。
     * @param string $StartTime 维护时间窗开始时间。取值范围为"00:00-23:00"的任意整点，如01:00。
     * @param integer $TimeSpan 设置维护时间窗的时长。根据指定的维护时间窗开始时间与时长可确定维护时间窗的范围。
- 单位：小时。
- 取值范围：3、6、8、10、12。
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }
    }
}
