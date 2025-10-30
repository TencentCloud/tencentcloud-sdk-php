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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BidDetailPage返回参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method float getCurrentPrice() 获取当前域名价格 单位元
 * @method void setCurrentPrice(float $CurrentPrice) 设置当前域名价格 单位元
 * @method float getBidPrice() 获取用户上次出价 单位元
 * @method void setBidPrice(float $BidPrice) 设置用户上次出价 单位元
 * @method float getCurrentPriceScope() 获取当前加价幅度 单位元
 * @method void setCurrentPriceScope(float $CurrentPriceScope) 设置当前加价幅度 单位元
 * @method array getPriceScope() 获取加价幅度区间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceScope(array $PriceScope) 设置加价幅度区间配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDepositPrice() 获取用户当前已经支付了的保证金 单位元
 * @method void setDepositPrice(float $DepositPrice) 设置用户当前已经支付了的保证金 单位元
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class BidDetailPageResponse extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var float 当前域名价格 单位元
     */
    public $CurrentPrice;

    /**
     * @var float 用户上次出价 单位元
     */
    public $BidPrice;

    /**
     * @var float 当前加价幅度 单位元
     */
    public $CurrentPriceScope;

    /**
     * @var array 加价幅度区间配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceScope;

    /**
     * @var float 用户当前已经支付了的保证金 单位元
     */
    public $DepositPrice;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Domain 域名
     * @param float $CurrentPrice 当前域名价格 单位元
     * @param float $BidPrice 用户上次出价 单位元
     * @param float $CurrentPriceScope 当前加价幅度 单位元
     * @param array $PriceScope 加价幅度区间配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $DepositPrice 用户当前已经支付了的保证金 单位元
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CurrentPrice",$param) and $param["CurrentPrice"] !== null) {
            $this->CurrentPrice = $param["CurrentPrice"];
        }

        if (array_key_exists("BidPrice",$param) and $param["BidPrice"] !== null) {
            $this->BidPrice = $param["BidPrice"];
        }

        if (array_key_exists("CurrentPriceScope",$param) and $param["CurrentPriceScope"] !== null) {
            $this->CurrentPriceScope = $param["CurrentPriceScope"];
        }

        if (array_key_exists("PriceScope",$param) and $param["PriceScope"] !== null) {
            $this->PriceScope = [];
            foreach ($param["PriceScope"] as $key => $value){
                $obj = new PriceScopeConf();
                $obj->deserialize($value);
                array_push($this->PriceScope, $obj);
            }
        }

        if (array_key_exists("DepositPrice",$param) and $param["DepositPrice"] !== null) {
            $this->DepositPrice = $param["DepositPrice"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
