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
 * DetachNetworkInterface请求参数结构体
 *
 * @method string getNetworkInterfaceId() 获取弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method void setNetworkInterfaceId(string $NetworkInterfaceId) 设置弹性网卡实例ID，例如：eni-m6dyj72l。
 * @method string getInstanceId() 获取CVM实例ID。形如：ins-r8hr2upy。
 * @method void setInstanceId(string $InstanceId) 设置CVM实例ID。形如：ins-r8hr2upy。
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
 */
class DetachNetworkInterfaceRequest extends AbstractModel
{
    /**
     * @var string 弹性网卡实例ID，例如：eni-m6dyj72l。
     */
    public $NetworkInterfaceId;

    /**
     * @var string CVM实例ID。形如：ins-r8hr2upy。
     */
    public $InstanceId;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
     */
    public $ClientToken;

    /**
     * @param string $NetworkInterfaceId 弹性网卡实例ID，例如：eni-m6dyj72l。
     * @param string $InstanceId CVM实例ID。形如：ins-r8hr2upy。
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性。	
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
        if (array_key_exists("NetworkInterfaceId",$param) and $param["NetworkInterfaceId"] !== null) {
            $this->NetworkInterfaceId = $param["NetworkInterfaceId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }
    }
}
