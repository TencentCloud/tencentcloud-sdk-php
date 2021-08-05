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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOrder返回参数结构体
 *
 * @method string getMerchantAppId() 获取进件成功后返给商户方的AppId。
 * @method void setMerchantAppId(string $MerchantAppId) 设置进件成功后返给商户方的AppId。
 * @method string getTraceNo() 获取商户流水号，商户唯一订单号由字母或数字组成。
 * @method void setTraceNo(string $TraceNo) 设置商户流水号，商户唯一订单号由字母或数字组成。
 * @method string getOrderNo() 获取平台流水号，若下单成功则返回。
 * @method void setOrderNo(string $OrderNo) 设置平台流水号，若下单成功则返回。
 * @method string getPayUrl() 获取支付页面跳转地址，若下单成功则返回。
 * @method void setPayUrl(string $PayUrl) 设置支付页面跳转地址，若下单成功则返回。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateOrderResponse extends AbstractModel
{
    /**
     * @var string 进件成功后返给商户方的AppId。
     */
    public $MerchantAppId;

    /**
     * @var string 商户流水号，商户唯一订单号由字母或数字组成。
     */
    public $TraceNo;

    /**
     * @var string 平台流水号，若下单成功则返回。
     */
    public $OrderNo;

    /**
     * @var string 支付页面跳转地址，若下单成功则返回。
     */
    public $PayUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MerchantAppId 进件成功后返给商户方的AppId。
     * @param string $TraceNo 商户流水号，商户唯一订单号由字母或数字组成。
     * @param string $OrderNo 平台流水号，若下单成功则返回。
     * @param string $PayUrl 支付页面跳转地址，若下单成功则返回。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MerchantAppId",$param) and $param["MerchantAppId"] !== null) {
            $this->MerchantAppId = $param["MerchantAppId"];
        }

        if (array_key_exists("TraceNo",$param) and $param["TraceNo"] !== null) {
            $this->TraceNo = $param["TraceNo"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("PayUrl",$param) and $param["PayUrl"] !== null) {
            $this->PayUrl = $param["PayUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
