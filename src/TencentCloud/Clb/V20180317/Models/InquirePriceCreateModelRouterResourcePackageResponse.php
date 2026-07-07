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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquirePriceCreateModelRouterResourcePackage返回参数结构体
 *
 * @method ItemPrice getModelRouterResourcePackagePrice() 获取<p>模型路由资源包价格</p>
 * @method void setModelRouterResourcePackagePrice(ItemPrice $ModelRouterResourcePackagePrice) 设置<p>模型路由资源包价格</p>
 * @method integer getFirstBuy() 获取<p>本次购买资源包是否可享受首购优惠</p><p>1:可享受首购优惠，0:不可享受首购优惠</p>
 * @method void setFirstBuy(integer $FirstBuy) 设置<p>本次购买资源包是否可享受首购优惠</p><p>1:可享受首购优惠，0:不可享受首购优惠</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class InquirePriceCreateModelRouterResourcePackageResponse extends AbstractModel
{
    /**
     * @var ItemPrice <p>模型路由资源包价格</p>
     */
    public $ModelRouterResourcePackagePrice;

    /**
     * @var integer <p>本次购买资源包是否可享受首购优惠</p><p>1:可享受首购优惠，0:不可享受首购优惠</p>
     */
    public $FirstBuy;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param ItemPrice $ModelRouterResourcePackagePrice <p>模型路由资源包价格</p>
     * @param integer $FirstBuy <p>本次购买资源包是否可享受首购优惠</p><p>1:可享受首购优惠，0:不可享受首购优惠</p>
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
        if (array_key_exists("ModelRouterResourcePackagePrice",$param) and $param["ModelRouterResourcePackagePrice"] !== null) {
            $this->ModelRouterResourcePackagePrice = new ItemPrice();
            $this->ModelRouterResourcePackagePrice->deserialize($param["ModelRouterResourcePackagePrice"]);
        }

        if (array_key_exists("FirstBuy",$param) and $param["FirstBuy"] !== null) {
            $this->FirstBuy = $param["FirstBuy"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
