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
 * 第三方渠道数据信息
 *
 * @method string getExternalChannelDataName() 获取第三方渠道数据名。
PAYMENT_ORDER_EXTERNAL_REQUEST_DATA: 支付下单请求数据
PAYMENT_ORDER_EXTERNAL_RETURN_DATA: 支付下单返回数据
PAYMENT_ORDER_EXTERNAL_NOTIFY_DATA: 支付通知数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalChannelDataName(string $ExternalChannelDataName) 设置第三方渠道数据名。
PAYMENT_ORDER_EXTERNAL_REQUEST_DATA: 支付下单请求数据
PAYMENT_ORDER_EXTERNAL_RETURN_DATA: 支付下单返回数据
PAYMENT_ORDER_EXTERNAL_NOTIFY_DATA: 支付通知数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalChannelDataValue() 获取第三方渠道数据值。
当ExternalChannelDataType=PAYMENT时，反序列化格式请参考[ExternalChannelPaymentDataValue](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/external-channel-data/QueryExternalChannelData.html#externalchannelpaymentdatavalue)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalChannelDataValue(string $ExternalChannelDataValue) 设置第三方渠道数据值。
当ExternalChannelDataType=PAYMENT时，反序列化格式请参考[ExternalChannelPaymentDataValue](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/external-channel-data/QueryExternalChannelData.html#externalchannelpaymentdatavalue)
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudExternalChannelData extends AbstractModel
{
    /**
     * @var string 第三方渠道数据名。
PAYMENT_ORDER_EXTERNAL_REQUEST_DATA: 支付下单请求数据
PAYMENT_ORDER_EXTERNAL_RETURN_DATA: 支付下单返回数据
PAYMENT_ORDER_EXTERNAL_NOTIFY_DATA: 支付通知数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalChannelDataName;

    /**
     * @var string 第三方渠道数据值。
当ExternalChannelDataType=PAYMENT时，反序列化格式请参考[ExternalChannelPaymentDataValue](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/external-channel-data/QueryExternalChannelData.html#externalchannelpaymentdatavalue)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalChannelDataValue;

    /**
     * @param string $ExternalChannelDataName 第三方渠道数据名。
PAYMENT_ORDER_EXTERNAL_REQUEST_DATA: 支付下单请求数据
PAYMENT_ORDER_EXTERNAL_RETURN_DATA: 支付下单返回数据
PAYMENT_ORDER_EXTERNAL_NOTIFY_DATA: 支付通知数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalChannelDataValue 第三方渠道数据值。
当ExternalChannelDataType=PAYMENT时，反序列化格式请参考[ExternalChannelPaymentDataValue](https://dev.tke.midas.qq.com/juxin-doc-next/apidocs/external-channel-data/QueryExternalChannelData.html#externalchannelpaymentdatavalue)
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ExternalChannelDataName",$param) and $param["ExternalChannelDataName"] !== null) {
            $this->ExternalChannelDataName = $param["ExternalChannelDataName"];
        }

        if (array_key_exists("ExternalChannelDataValue",$param) and $param["ExternalChannelDataValue"] !== null) {
            $this->ExternalChannelDataValue = $param["ExternalChannelDataValue"];
        }
    }
}
