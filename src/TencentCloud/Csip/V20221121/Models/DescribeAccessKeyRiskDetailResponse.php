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
 * DescribeAccessKeyRiskDetail返回参数结构体
 *
 * @method AccessKeyRisk getRiskInfo() 获取风险列表
 * @method void setRiskInfo(AccessKeyRisk $RiskInfo) 设置风险列表
 * @method integer getCamCount() 获取CAM策略总数
 * @method void setCamCount(integer $CamCount) 设置CAM策略总数
 * @method integer getAlarmCount() 获取账号关联告警数量
 * @method void setAlarmCount(integer $AlarmCount) 设置账号关联告警数量
 * @method integer getAccessType() 获取访问方式 0 API 1 控制台与API
 * @method void setAccessType(integer $AccessType) 设置访问方式 0 API 1 控制台与API
 * @method array getAccessKeyAlarmCount() 获取访问密钥告警数量列表
 * @method void setAccessKeyAlarmCount(array $AccessKeyAlarmCount) 设置访问密钥告警数量列表
 * @method integer getActionFlag() 获取操作保护是否开启 0 未开启 1 已开启
 * @method void setActionFlag(integer $ActionFlag) 设置操作保护是否开启 0 未开启 1 已开启
 * @method integer getLoginFlag() 获取登录保护是否开启 0 未开启 1 已开启
 * @method void setLoginFlag(integer $LoginFlag) 设置登录保护是否开启 0 未开启 1 已开启
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAccessKeyRiskDetailResponse extends AbstractModel
{
    /**
     * @var AccessKeyRisk 风险列表
     */
    public $RiskInfo;

    /**
     * @var integer CAM策略总数
     */
    public $CamCount;

    /**
     * @var integer 账号关联告警数量
     */
    public $AlarmCount;

    /**
     * @var integer 访问方式 0 API 1 控制台与API
     */
    public $AccessType;

    /**
     * @var array 访问密钥告警数量列表
     */
    public $AccessKeyAlarmCount;

    /**
     * @var integer 操作保护是否开启 0 未开启 1 已开启
     */
    public $ActionFlag;

    /**
     * @var integer 登录保护是否开启 0 未开启 1 已开启
     */
    public $LoginFlag;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AccessKeyRisk $RiskInfo 风险列表
     * @param integer $CamCount CAM策略总数
     * @param integer $AlarmCount 账号关联告警数量
     * @param integer $AccessType 访问方式 0 API 1 控制台与API
     * @param array $AccessKeyAlarmCount 访问密钥告警数量列表
     * @param integer $ActionFlag 操作保护是否开启 0 未开启 1 已开启
     * @param integer $LoginFlag 登录保护是否开启 0 未开启 1 已开启
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
        if (array_key_exists("RiskInfo",$param) and $param["RiskInfo"] !== null) {
            $this->RiskInfo = new AccessKeyRisk();
            $this->RiskInfo->deserialize($param["RiskInfo"]);
        }

        if (array_key_exists("CamCount",$param) and $param["CamCount"] !== null) {
            $this->CamCount = $param["CamCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("AccessKeyAlarmCount",$param) and $param["AccessKeyAlarmCount"] !== null) {
            $this->AccessKeyAlarmCount = [];
            foreach ($param["AccessKeyAlarmCount"] as $key => $value){
                $obj = new AccessKeyAlarmCount();
                $obj->deserialize($value);
                array_push($this->AccessKeyAlarmCount, $obj);
            }
        }

        if (array_key_exists("ActionFlag",$param) and $param["ActionFlag"] !== null) {
            $this->ActionFlag = $param["ActionFlag"];
        }

        if (array_key_exists("LoginFlag",$param) and $param["LoginFlag"] !== null) {
            $this->LoginFlag = $param["LoginFlag"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
