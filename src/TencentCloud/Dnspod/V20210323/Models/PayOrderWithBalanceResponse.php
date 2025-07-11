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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PayOrderWithBalance返回参数结构体
 *
 * @method array getDealIdList() 获取此次操作支付成功的订单id数组
 * @method void setDealIdList(array $DealIdList) 设置此次操作支付成功的订单id数组
 * @method array getBigDealIdList() 获取此次操作支付成功的大订单号数组
 * @method void setBigDealIdList(array $BigDealIdList) 设置此次操作支付成功的大订单号数组
 * @method array getDealNameList() 获取此次操作支付成功的订单号数组
 * @method void setDealNameList(array $DealNameList) 设置此次操作支付成功的订单号数组
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class PayOrderWithBalanceResponse extends AbstractModel
{
    /**
     * @var array 此次操作支付成功的订单id数组
     */
    public $DealIdList;

    /**
     * @var array 此次操作支付成功的大订单号数组
     */
    public $BigDealIdList;

    /**
     * @var array 此次操作支付成功的订单号数组
     */
    public $DealNameList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DealIdList 此次操作支付成功的订单id数组
     * @param array $BigDealIdList 此次操作支付成功的大订单号数组
     * @param array $DealNameList 此次操作支付成功的订单号数组
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
        if (array_key_exists("DealIdList",$param) and $param["DealIdList"] !== null) {
            $this->DealIdList = $param["DealIdList"];
        }

        if (array_key_exists("BigDealIdList",$param) and $param["BigDealIdList"] !== null) {
            $this->BigDealIdList = $param["BigDealIdList"];
        }

        if (array_key_exists("DealNameList",$param) and $param["DealNameList"] !== null) {
            $this->DealNameList = $param["DealNameList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
