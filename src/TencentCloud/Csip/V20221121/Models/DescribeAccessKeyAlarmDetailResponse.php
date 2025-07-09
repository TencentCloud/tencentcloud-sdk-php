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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessKeyAlarmDetail返回参数结构体
 *
 * @method AccessKeyAlarm getAlarmInfo() 获取告警信息
 * @method void setAlarmInfo(AccessKeyAlarm $AlarmInfo) 设置告警信息
 * @method integer getCamCount() 获取所属账号CAM策略数量
 * @method void setCamCount(integer $CamCount) 设置所属账号CAM策略数量
 * @method integer getRiskCount() 获取AK风险数量
 * @method void setRiskCount(integer $RiskCount) 设置AK风险数量
 * @method string getAlarmDesc() 获取告警策略描述
 * @method void setAlarmDesc(string $AlarmDesc) 设置告警策略描述
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccessKeyAlarmDetailResponse extends AbstractModel
{
    /**
     * @var AccessKeyAlarm 告警信息
     */
    public $AlarmInfo;

    /**
     * @var integer 所属账号CAM策略数量
     */
    public $CamCount;

    /**
     * @var integer AK风险数量
     */
    public $RiskCount;

    /**
     * @var string 告警策略描述
     */
    public $AlarmDesc;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AccessKeyAlarm $AlarmInfo 告警信息
     * @param integer $CamCount 所属账号CAM策略数量
     * @param integer $RiskCount AK风险数量
     * @param string $AlarmDesc 告警策略描述
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
        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = new AccessKeyAlarm();
            $this->AlarmInfo->deserialize($param["AlarmInfo"]);
        }

        if (array_key_exists("CamCount",$param) and $param["CamCount"] !== null) {
            $this->CamCount = $param["CamCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("AlarmDesc",$param) and $param["AlarmDesc"] !== null) {
            $this->AlarmDesc = $param["AlarmDesc"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
