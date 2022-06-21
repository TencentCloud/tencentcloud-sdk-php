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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AdjustPublicAddress请求参数结构体
 *
 * @method string getInstanceId() 获取标识CVM实例的唯一 ID。CVM 唯一 ID 形如：`ins-11112222`。
 * @method void setInstanceId(string $InstanceId) 设置标识CVM实例的唯一 ID。CVM 唯一 ID 形如：`ins-11112222`。
 * @method string getAddressId() 获取标识EIP实例的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
 * @method void setAddressId(string $AddressId) 设置标识EIP实例的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
 */
class AdjustPublicAddressRequest extends AbstractModel
{
    /**
     * @var string 标识CVM实例的唯一 ID。CVM 唯一 ID 形如：`ins-11112222`。
     */
    public $InstanceId;

    /**
     * @var string 标识EIP实例的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
     */
    public $AddressId;

    /**
     * @param string $InstanceId 标识CVM实例的唯一 ID。CVM 唯一 ID 形如：`ins-11112222`。
     * @param string $AddressId 标识EIP实例的唯一 ID。EIP 唯一 ID 形如：`eip-11112222`。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AddressId",$param) and $param["AddressId"] !== null) {
            $this->AddressId = $param["AddressId"];
        }
    }
}
