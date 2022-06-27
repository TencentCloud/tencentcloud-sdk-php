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
 * 聚合支付子商户线上入驻结果
 *
 * @method string getRegistrationStatus() 获取进件状态 
SUCCESS: 进件成功 
FAILED: 进件失败
PROCESSING: 进件中 
注意：若返回进件中，需要再次调用进件结果查询接口，查询结果。
 * @method void setRegistrationStatus(string $RegistrationStatus) 设置进件状态 
SUCCESS: 进件成功 
FAILED: 进件失败
PROCESSING: 进件中 
注意：若返回进件中，需要再次调用进件结果查询接口，查询结果。
 * @method string getRegistrationMessage() 获取进件返回描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistrationMessage(string $RegistrationMessage) 设置进件返回描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelRegistrationNo() 获取渠道进件序列号
 * @method void setChannelRegistrationNo(string $ChannelRegistrationNo) 设置渠道进件序列号
 * @method string getChannelSubMerchantId() 获取渠道子商户ID
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID
 */
class CreateOpenBankExternalAggregatedSubMerchantRegistrationResult extends AbstractModel
{
    /**
     * @var string 进件状态 
SUCCESS: 进件成功 
FAILED: 进件失败
PROCESSING: 进件中 
注意：若返回进件中，需要再次调用进件结果查询接口，查询结果。
     */
    public $RegistrationStatus;

    /**
     * @var string 进件返回描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistrationMessage;

    /**
     * @var string 渠道进件序列号
     */
    public $ChannelRegistrationNo;

    /**
     * @var string 渠道子商户ID
     */
    public $ChannelSubMerchantId;

    /**
     * @param string $RegistrationStatus 进件状态 
SUCCESS: 进件成功 
FAILED: 进件失败
PROCESSING: 进件中 
注意：若返回进件中，需要再次调用进件结果查询接口，查询结果。
     * @param string $RegistrationMessage 进件返回描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelRegistrationNo 渠道进件序列号
     * @param string $ChannelSubMerchantId 渠道子商户ID
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
        if (array_key_exists("RegistrationStatus",$param) and $param["RegistrationStatus"] !== null) {
            $this->RegistrationStatus = $param["RegistrationStatus"];
        }

        if (array_key_exists("RegistrationMessage",$param) and $param["RegistrationMessage"] !== null) {
            $this->RegistrationMessage = $param["RegistrationMessage"];
        }

        if (array_key_exists("ChannelRegistrationNo",$param) and $param["ChannelRegistrationNo"] !== null) {
            $this->ChannelRegistrationNo = $param["ChannelRegistrationNo"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }
    }
}
