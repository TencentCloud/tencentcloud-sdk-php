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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMonitorResourceInfo返回参数结构体
 *
 * @method integer getPhoneAlarmNumber() 获取电话告警数量
 * @method void setPhoneAlarmNumber(integer $PhoneAlarmNumber) 设置电话告警数量
 * @method integer getAdvancedMetricNumber() 获取高级指标数量
 * @method void setAdvancedMetricNumber(integer $AdvancedMetricNumber) 设置高级指标数量
 * @method integer getAPIUsageNumber() 获取API调用量
 * @method void setAPIUsageNumber(integer $APIUsageNumber) 设置API调用量
 * @method integer getAlarmSMSNumber() 获取告警短信数量
 * @method void setAlarmSMSNumber(integer $AlarmSMSNumber) 设置告警短信数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMonitorResourceInfoResponse extends AbstractModel
{
    /**
     * @var integer 电话告警数量
     */
    public $PhoneAlarmNumber;

    /**
     * @var integer 高级指标数量
     */
    public $AdvancedMetricNumber;

    /**
     * @var integer API调用量
     */
    public $APIUsageNumber;

    /**
     * @var integer 告警短信数量
     */
    public $AlarmSMSNumber;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PhoneAlarmNumber 电话告警数量
     * @param integer $AdvancedMetricNumber 高级指标数量
     * @param integer $APIUsageNumber API调用量
     * @param integer $AlarmSMSNumber 告警短信数量
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PhoneAlarmNumber",$param) and $param["PhoneAlarmNumber"] !== null) {
            $this->PhoneAlarmNumber = $param["PhoneAlarmNumber"];
        }

        if (array_key_exists("AdvancedMetricNumber",$param) and $param["AdvancedMetricNumber"] !== null) {
            $this->AdvancedMetricNumber = $param["AdvancedMetricNumber"];
        }

        if (array_key_exists("APIUsageNumber",$param) and $param["APIUsageNumber"] !== null) {
            $this->APIUsageNumber = $param["APIUsageNumber"];
        }

        if (array_key_exists("AlarmSMSNumber",$param) and $param["AlarmSMSNumber"] !== null) {
            $this->AlarmSMSNumber = $param["AlarmSMSNumber"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
