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
 * DescribeAssetOverview返回参数结构体
 *
 * @method AssetStatisticsInfo getAssetOverview() 获取资产概览统计
 * @method void setAssetOverview(AssetStatisticsInfo $AssetOverview) 设置资产概览统计
 * @method AssetProviderDistributeInfo getAssetProviderDistribute() 获取云厂商资产数量
 * @method void setAssetProviderDistribute(AssetProviderDistributeInfo $AssetProviderDistribute) 设置云厂商资产数量
 * @method AssetTypeStatisticsInfo getAssetTypeOverview() 获取资产类型以及存在风险的资产类型数量
 * @method void setAssetTypeOverview(AssetTypeStatisticsInfo $AssetTypeOverview) 设置资产类型以及存在风险的资产类型数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetOverviewResponse extends AbstractModel
{
    /**
     * @var AssetStatisticsInfo 资产概览统计
     */
    public $AssetOverview;

    /**
     * @var AssetProviderDistributeInfo 云厂商资产数量
     */
    public $AssetProviderDistribute;

    /**
     * @var AssetTypeStatisticsInfo 资产类型以及存在风险的资产类型数量
     */
    public $AssetTypeOverview;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param AssetStatisticsInfo $AssetOverview 资产概览统计
     * @param AssetProviderDistributeInfo $AssetProviderDistribute 云厂商资产数量
     * @param AssetTypeStatisticsInfo $AssetTypeOverview 资产类型以及存在风险的资产类型数量
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
        if (array_key_exists("AssetOverview",$param) and $param["AssetOverview"] !== null) {
            $this->AssetOverview = new AssetStatisticsInfo();
            $this->AssetOverview->deserialize($param["AssetOverview"]);
        }

        if (array_key_exists("AssetProviderDistribute",$param) and $param["AssetProviderDistribute"] !== null) {
            $this->AssetProviderDistribute = new AssetProviderDistributeInfo();
            $this->AssetProviderDistribute->deserialize($param["AssetProviderDistribute"]);
        }

        if (array_key_exists("AssetTypeOverview",$param) and $param["AssetTypeOverview"] !== null) {
            $this->AssetTypeOverview = new AssetTypeStatisticsInfo();
            $this->AssetTypeOverview->deserialize($param["AssetTypeOverview"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
