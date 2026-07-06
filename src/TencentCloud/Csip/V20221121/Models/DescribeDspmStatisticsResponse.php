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
 * DescribeDspmStatistics返回参数结构体
 *
 * @method DspmAssetCount getAssetCount() 获取<p>资产统计信息</p>
 * @method void setAssetCount(DspmAssetCount $AssetCount) 设置<p>资产统计信息</p>
 * @method DspmIpCount getIpCount() 获取<p>访问Ip统计信息</p>
 * @method void setIpCount(DspmIpCount $IpCount) 设置<p>访问Ip统计信息</p>
 * @method DspmAccountCount getUserCount() 获取<p>用户账号统计信息</p>
 * @method void setUserCount(DspmAccountCount $UserCount) 设置<p>用户账号统计信息</p>
 * @method DspmRiskCount getRiskCount() 获取<p>风险统计信息</p>
 * @method void setRiskCount(DspmRiskCount $RiskCount) 设置<p>风险统计信息</p>
 * @method DspmSecurityAnalyseStatusCount getAnalyseAssetStatusCount() 获取<p>资产安全分析统计信息</p>
 * @method void setAnalyseAssetStatusCount(DspmSecurityAnalyseStatusCount $AnalyseAssetStatusCount) 设置<p>资产安全分析统计信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDspmStatisticsResponse extends AbstractModel
{
    /**
     * @var DspmAssetCount <p>资产统计信息</p>
     */
    public $AssetCount;

    /**
     * @var DspmIpCount <p>访问Ip统计信息</p>
     */
    public $IpCount;

    /**
     * @var DspmAccountCount <p>用户账号统计信息</p>
     */
    public $UserCount;

    /**
     * @var DspmRiskCount <p>风险统计信息</p>
     */
    public $RiskCount;

    /**
     * @var DspmSecurityAnalyseStatusCount <p>资产安全分析统计信息</p>
     */
    public $AnalyseAssetStatusCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param DspmAssetCount $AssetCount <p>资产统计信息</p>
     * @param DspmIpCount $IpCount <p>访问Ip统计信息</p>
     * @param DspmAccountCount $UserCount <p>用户账号统计信息</p>
     * @param DspmRiskCount $RiskCount <p>风险统计信息</p>
     * @param DspmSecurityAnalyseStatusCount $AnalyseAssetStatusCount <p>资产安全分析统计信息</p>
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
        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = new DspmAssetCount();
            $this->AssetCount->deserialize($param["AssetCount"]);
        }

        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = new DspmIpCount();
            $this->IpCount->deserialize($param["IpCount"]);
        }

        if (array_key_exists("UserCount",$param) and $param["UserCount"] !== null) {
            $this->UserCount = new DspmAccountCount();
            $this->UserCount->deserialize($param["UserCount"]);
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = new DspmRiskCount();
            $this->RiskCount->deserialize($param["RiskCount"]);
        }

        if (array_key_exists("AnalyseAssetStatusCount",$param) and $param["AnalyseAssetStatusCount"] !== null) {
            $this->AnalyseAssetStatusCount = new DspmSecurityAnalyseStatusCount();
            $this->AnalyseAssetStatusCount->deserialize($param["AnalyseAssetStatusCount"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
