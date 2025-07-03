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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssociateSecurityGroups请求参数结构体
 *
 * @method string getProduct() 获取数据库引擎名称，本接口取值：redis。
 * @method void setProduct(string $Product) 设置数据库引擎名称，本接口取值：redis。
 * @method string getSecurityGroupId() 获取要绑定的安全组ID，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
 * @method void setSecurityGroupId(string $SecurityGroupId) 设置要绑定的安全组ID，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
 * @method array getInstanceIds() 获取被绑定的实例ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID，支持指定多个实例。
 * @method void setInstanceIds(array $InstanceIds) 设置被绑定的实例ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID，支持指定多个实例。
 */
class AssociateSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 数据库引擎名称，本接口取值：redis。
     */
    public $Product;

    /**
     * @var string 要绑定的安全组ID，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
     */
    public $SecurityGroupId;

    /**
     * @var array 被绑定的实例ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID，支持指定多个实例。
     */
    public $InstanceIds;

    /**
     * @param string $Product 数据库引擎名称，本接口取值：redis。
     * @param string $SecurityGroupId 要绑定的安全组ID，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
     * @param array $InstanceIds 被绑定的实例ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID，支持指定多个实例。
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("SecurityGroupId",$param) and $param["SecurityGroupId"] !== null) {
            $this->SecurityGroupId = $param["SecurityGroupId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
