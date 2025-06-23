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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanStatistic返回参数结构体
 *
 * @method integer getPortServiceCount() 获取端口服务数量
 * @method void setPortServiceCount(integer $PortServiceCount) 设置端口服务数量
 * @method integer getWebAppCount() 获取Web服务数量
 * @method void setWebAppCount(integer $WebAppCount) 设置Web服务数量
 * @method integer getWeakPasswordCount() 获取弱口令风险数量
 * @method void setWeakPasswordCount(integer $WeakPasswordCount) 设置弱口令风险数量
 * @method integer getVulCount() 获取漏洞风险数量
 * @method void setVulCount(integer $VulCount) 设置漏洞风险数量
 * @method integer getHighRiskPortServiceCount() 获取高危端口服务数量
 * @method void setHighRiskPortServiceCount(integer $HighRiskPortServiceCount) 设置高危端口服务数量
 * @method integer getRiskWebAppCount() 获取风险Web服务数量
 * @method void setRiskWebAppCount(integer $RiskWebAppCount) 设置风险Web服务数量
 * @method integer getPortServiceIncrement() 获取端口服务近7天新增数量
 * @method void setPortServiceIncrement(integer $PortServiceIncrement) 设置端口服务近7天新增数量
 * @method integer getWebAppIncrement() 获取Web服务近7天新增数量
 * @method void setWebAppIncrement(integer $WebAppIncrement) 设置Web服务近7天新增数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScanStatisticResponse extends AbstractModel
{
    /**
     * @var integer 端口服务数量
     */
    public $PortServiceCount;

    /**
     * @var integer Web服务数量
     */
    public $WebAppCount;

    /**
     * @var integer 弱口令风险数量
     */
    public $WeakPasswordCount;

    /**
     * @var integer 漏洞风险数量
     */
    public $VulCount;

    /**
     * @var integer 高危端口服务数量
     */
    public $HighRiskPortServiceCount;

    /**
     * @var integer 风险Web服务数量
     */
    public $RiskWebAppCount;

    /**
     * @var integer 端口服务近7天新增数量
     */
    public $PortServiceIncrement;

    /**
     * @var integer Web服务近7天新增数量
     */
    public $WebAppIncrement;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $PortServiceCount 端口服务数量
     * @param integer $WebAppCount Web服务数量
     * @param integer $WeakPasswordCount 弱口令风险数量
     * @param integer $VulCount 漏洞风险数量
     * @param integer $HighRiskPortServiceCount 高危端口服务数量
     * @param integer $RiskWebAppCount 风险Web服务数量
     * @param integer $PortServiceIncrement 端口服务近7天新增数量
     * @param integer $WebAppIncrement Web服务近7天新增数量
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
        if (array_key_exists("PortServiceCount",$param) and $param["PortServiceCount"] !== null) {
            $this->PortServiceCount = $param["PortServiceCount"];
        }

        if (array_key_exists("WebAppCount",$param) and $param["WebAppCount"] !== null) {
            $this->WebAppCount = $param["WebAppCount"];
        }

        if (array_key_exists("WeakPasswordCount",$param) and $param["WeakPasswordCount"] !== null) {
            $this->WeakPasswordCount = $param["WeakPasswordCount"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("HighRiskPortServiceCount",$param) and $param["HighRiskPortServiceCount"] !== null) {
            $this->HighRiskPortServiceCount = $param["HighRiskPortServiceCount"];
        }

        if (array_key_exists("RiskWebAppCount",$param) and $param["RiskWebAppCount"] !== null) {
            $this->RiskWebAppCount = $param["RiskWebAppCount"];
        }

        if (array_key_exists("PortServiceIncrement",$param) and $param["PortServiceIncrement"] !== null) {
            $this->PortServiceIncrement = $param["PortServiceIncrement"];
        }

        if (array_key_exists("WebAppIncrement",$param) and $param["WebAppIncrement"] !== null) {
            $this->WebAppIncrement = $param["WebAppIncrement"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
