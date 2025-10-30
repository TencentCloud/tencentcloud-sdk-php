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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroups请求参数结构体
 *
 * @method string getProduct() 获取数据库引擎名称，本接口取值：redis。
 * @method void setProduct(string $Product) 设置数据库引擎名称，本接口取值：redis。
 * @method array getSecurityGroupIds() 获取更换为新的安全组 ID 列表，即一个或者多个安全组 ID 组成的数组。
- 若实例第一次配置安全组，请使用接口[AssociateSecurityGroups](https://cloud.tencent.com/document/product/239/41260)先绑定安全组。
- 更换安全组，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
  **注意：**该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置更换为新的安全组 ID 列表，即一个或者多个安全组 ID 组成的数组。
- 若实例第一次配置安全组，请使用接口[AssociateSecurityGroups](https://cloud.tencent.com/document/product/239/41260)先绑定安全组。
- 更换安全组，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
  **注意：**该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 */
class ModifyDBInstanceSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var string 数据库引擎名称，本接口取值：redis。
     */
    public $Product;

    /**
     * @var array 更换为新的安全组 ID 列表，即一个或者多个安全组 ID 组成的数组。
- 若实例第一次配置安全组，请使用接口[AssociateSecurityGroups](https://cloud.tencent.com/document/product/239/41260)先绑定安全组。
- 更换安全组，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
  **注意：**该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
     */
    public $SecurityGroupIds;

    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @param string $Product 数据库引擎名称，本接口取值：redis。
     * @param array $SecurityGroupIds 更换为新的安全组 ID 列表，即一个或者多个安全组 ID 组成的数组。
- 若实例第一次配置安全组，请使用接口[AssociateSecurityGroups](https://cloud.tencent.com/document/product/239/41260)先绑定安全组。
- 更换安全组，请在[控制台安全组](https://console.cloud.tencent.com/vpc/security-group)页面获取安全组 ID。
  **注意：**该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
