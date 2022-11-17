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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AddDevice返回参数结构体
 *
 * @method string getDataKey() 获取经过加密算法加密后的base64格式密钥
 * @method void setDataKey(string $DataKey) 设置经过加密算法加密后的base64格式密钥
 * @method string getDeviceId() 获取设备ID
 * @method void setDeviceId(string $DeviceId) 设置设备ID
 * @method string getSignature() 获取签名字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignature(string $Signature) 设置签名字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class AddDeviceResponse extends AbstractModel
{
    /**
     * @var string 经过加密算法加密后的base64格式密钥
     */
    public $DataKey;

    /**
     * @var string 设备ID
     */
    public $DeviceId;

    /**
     * @var string 签名字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Signature;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DataKey 经过加密算法加密后的base64格式密钥
     * @param string $DeviceId 设备ID
     * @param string $Signature 签名字符串
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
        if (array_key_exists("DataKey",$param) and $param["DataKey"] !== null) {
            $this->DataKey = $param["DataKey"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
