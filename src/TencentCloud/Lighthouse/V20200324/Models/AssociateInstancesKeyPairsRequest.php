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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateInstancesKeyPairs请求参数结构体
 *
 * @method array getKeyIds() 获取密钥对 ID 列表，每次请求批量密钥对的上限为 100。可通过[DescribeKeyPairs](https://cloud.tencent.com/document/api/1207/55540)接口返回值中的KeyId获取。
 * @method void setKeyIds(array $KeyIds) 设置密钥对 ID 列表，每次请求批量密钥对的上限为 100。可通过[DescribeKeyPairs](https://cloud.tencent.com/document/api/1207/55540)接口返回值中的KeyId获取。
 * @method array getInstanceIds() 获取实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method void setInstanceIds(array $InstanceIds) 设置实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
 * @method string getAssociateType() 获取绑定类型。可选值：
ONLINE - 在线绑定，不需要关机。
OFFLINE - 离线绑定，会对实例进行关机。
 * @method void setAssociateType(string $AssociateType) 设置绑定类型。可选值：
ONLINE - 在线绑定，不需要关机。
OFFLINE - 离线绑定，会对实例进行关机。
 * @method string getUsername() 获取绑定的用户名。当 AssociateType 为 OFFLINE 时，不支持该参数。
 * @method void setUsername(string $Username) 设置绑定的用户名。当 AssociateType 为 OFFLINE 时，不支持该参数。
 */
class AssociateInstancesKeyPairsRequest extends AbstractModel
{
    /**
     * @var array 密钥对 ID 列表，每次请求批量密钥对的上限为 100。可通过[DescribeKeyPairs](https://cloud.tencent.com/document/api/1207/55540)接口返回值中的KeyId获取。
     */
    public $KeyIds;

    /**
     * @var array 实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     */
    public $InstanceIds;

    /**
     * @var string 绑定类型。可选值：
ONLINE - 在线绑定，不需要关机。
OFFLINE - 离线绑定，会对实例进行关机。
     */
    public $AssociateType;

    /**
     * @var string 绑定的用户名。当 AssociateType 为 OFFLINE 时，不支持该参数。
     */
    public $Username;

    /**
     * @param array $KeyIds 密钥对 ID 列表，每次请求批量密钥对的上限为 100。可通过[DescribeKeyPairs](https://cloud.tencent.com/document/api/1207/55540)接口返回值中的KeyId获取。
     * @param array $InstanceIds 实例 ID 列表。每次请求批量实例的上限为 100。可通过[DescribeInstances](https://cloud.tencent.com/document/api/1207/47573)接口返回值中的InstanceId获取。
     * @param string $AssociateType 绑定类型。可选值：
ONLINE - 在线绑定，不需要关机。
OFFLINE - 离线绑定，会对实例进行关机。
     * @param string $Username 绑定的用户名。当 AssociateType 为 OFFLINE 时，不支持该参数。
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
        if (array_key_exists("KeyIds",$param) and $param["KeyIds"] !== null) {
            $this->KeyIds = $param["KeyIds"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("AssociateType",$param) and $param["AssociateType"] !== null) {
            $this->AssociateType = $param["AssociateType"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }
    }
}
