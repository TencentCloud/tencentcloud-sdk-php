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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceSecurityGroup请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method array getSecurityGroupIds() 获取目标安全组 ID。请登录[安全组控制台页面](https://console.cloud.tencent.com/vpc/security-group)复制目标安全组 ID。
**注意**：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置目标安全组 ID。请登录[安全组控制台页面](https://console.cloud.tencent.com/vpc/security-group)复制目标安全组 ID。
**注意**：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
 */
class ModifyDBInstanceSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var array 目标安全组 ID。请登录[安全组控制台页面](https://console.cloud.tencent.com/vpc/security-group)复制目标安全组 ID。
**注意**：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
     */
    public $SecurityGroupIds;

    /**
     * @param string $InstanceId 实例 ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param array $SecurityGroupIds 目标安全组 ID。请登录[安全组控制台页面](https://console.cloud.tencent.com/vpc/security-group)复制目标安全组 ID。
**注意**：该入参会全量替换存量已有集合，非增量更新。修改需传入预期的全量集合。
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

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }
    }
}
