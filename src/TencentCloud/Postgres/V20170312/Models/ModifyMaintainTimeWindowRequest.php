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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyMaintainTimeWindow请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
 * @method string getMaintainStartTime() 获取维护开始时间。时区为东八区（UTC+8）
 * @method void setMaintainStartTime(string $MaintainStartTime) 设置维护开始时间。时区为东八区（UTC+8）
 * @method integer getMaintainDuration() 获取维护持续时间。单位：小时。取值范围：[1,4]
 * @method void setMaintainDuration(integer $MaintainDuration) 设置维护持续时间。单位：小时。取值范围：[1,4]
 * @method array getMaintainWeekDays() 获取维护周期
 * @method void setMaintainWeekDays(array $MaintainWeekDays) 设置维护周期
 */
class ModifyMaintainTimeWindowRequest extends AbstractModel
{
    /**
     * @var string 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     */
    public $DBInstanceId;

    /**
     * @var string 维护开始时间。时区为东八区（UTC+8）
     */
    public $MaintainStartTime;

    /**
     * @var integer 维护持续时间。单位：小时。取值范围：[1,4]
     */
    public $MaintainDuration;

    /**
     * @var array 维护周期
     */
    public $MaintainWeekDays;

    /**
     * @param string $DBInstanceId 实例ID。可通过[DescribeDBInstances](https://cloud.tencent.com/document/api/409/16773)接口获取
     * @param string $MaintainStartTime 维护开始时间。时区为东八区（UTC+8）
     * @param integer $MaintainDuration 维护持续时间。单位：小时。取值范围：[1,4]
     * @param array $MaintainWeekDays 维护周期
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("MaintainStartTime",$param) and $param["MaintainStartTime"] !== null) {
            $this->MaintainStartTime = $param["MaintainStartTime"];
        }

        if (array_key_exists("MaintainDuration",$param) and $param["MaintainDuration"] !== null) {
            $this->MaintainDuration = $param["MaintainDuration"];
        }

        if (array_key_exists("MaintainWeekDays",$param) and $param["MaintainWeekDays"] !== null) {
            $this->MaintainWeekDays = $param["MaintainWeekDays"];
        }
    }
}
