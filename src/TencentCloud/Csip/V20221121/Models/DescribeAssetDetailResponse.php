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
 * DescribeAssetDetail返回参数结构体
 *
 * @method array getDynamicTabs() 获取<p>动态tab配置</p>
 * @method void setDynamicTabs(array $DynamicTabs) 设置<p>动态tab配置</p>
 * @method array getDetailTabs() 获取<p>基础tab项</p>
 * @method void setDetailTabs(array $DetailTabs) 设置<p>基础tab项</p>
 * @method AssetDetailItem getAssetDetail() 获取<p>资产详情信息</p>
 * @method void setAssetDetail(AssetDetailItem $AssetDetail) 设置<p>资产详情信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAssetDetailResponse extends AbstractModel
{
    /**
     * @var array <p>动态tab配置</p>
     */
    public $DynamicTabs;

    /**
     * @var array <p>基础tab项</p>
     */
    public $DetailTabs;

    /**
     * @var AssetDetailItem <p>资产详情信息</p>
     */
    public $AssetDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DynamicTabs <p>动态tab配置</p>
     * @param array $DetailTabs <p>基础tab项</p>
     * @param AssetDetailItem $AssetDetail <p>资产详情信息</p>
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
        if (array_key_exists("DynamicTabs",$param) and $param["DynamicTabs"] !== null) {
            $this->DynamicTabs = [];
            foreach ($param["DynamicTabs"] as $key => $value){
                $obj = new DynamicTab();
                $obj->deserialize($value);
                array_push($this->DynamicTabs, $obj);
            }
        }

        if (array_key_exists("DetailTabs",$param) and $param["DetailTabs"] !== null) {
            $this->DetailTabs = $param["DetailTabs"];
        }

        if (array_key_exists("AssetDetail",$param) and $param["AssetDetail"] !== null) {
            $this->AssetDetail = new AssetDetailItem();
            $this->AssetDetail->deserialize($param["AssetDetail"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
