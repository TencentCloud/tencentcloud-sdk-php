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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RefundOrder返回参数结构体
 *
 * @method string getMerchantAppId() 获取进件成功后返给商户方的AppId
 * @method void setMerchantAppId(string $MerchantAppId) 设置进件成功后返给商户方的AppId
 * @method string getOrderNo() 获取平台流水号。消费订单发起成功后，返回的平台唯一订单号。
 * @method void setOrderNo(string $OrderNo) 设置平台流水号。消费订单发起成功后，返回的平台唯一订单号。
 * @method string getStatus() 获取订单退款状态。0-退款失败
1-退款成功 
2-可疑状态
 * @method void setStatus(string $Status) 设置订单退款状态。0-退款失败
1-退款成功 
2-可疑状态
 * @method string getDescription() 获取订单退款状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置订单退款状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class RefundOrderResponse extends AbstractModel
{
    /**
     * @var string 进件成功后返给商户方的AppId
     */
    public $MerchantAppId;

    /**
     * @var string 平台流水号。消费订单发起成功后，返回的平台唯一订单号。
     */
    public $OrderNo;

    /**
     * @var string 订单退款状态。0-退款失败
1-退款成功 
2-可疑状态
     */
    public $Status;

    /**
     * @var string 订单退款状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $MerchantAppId 进件成功后返给商户方的AppId
     * @param string $OrderNo 平台流水号。消费订单发起成功后，返回的平台唯一订单号。
     * @param string $Status 订单退款状态。0-退款失败
1-退款成功 
2-可疑状态
     * @param string $Description 订单退款状态描述
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
