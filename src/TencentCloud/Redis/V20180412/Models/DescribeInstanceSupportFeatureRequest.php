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
 * DescribeInstanceSupportFeature请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
 * @method string getFeatureName() 获取支持查询的功能特性如下所示。
- read-local-node-only：就近接入。
- multi-account：多账号管理。
- auto-failback：故障恢复场景，主节点是否开启自动回切。
 * @method void setFeatureName(string $FeatureName) 设置支持查询的功能特性如下所示。
- read-local-node-only：就近接入。
- multi-account：多账号管理。
- auto-failback：故障恢复场景，主节点是否开启自动回切。
 */
class DescribeInstanceSupportFeatureRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 支持查询的功能特性如下所示。
- read-local-node-only：就近接入。
- multi-account：多账号管理。
- auto-failback：故障恢复场景，主节点是否开启自动回切。
     */
    public $FeatureName;

    /**
     * @param string $InstanceId 指定实例 ID。请登录[Redis控制台](https://console.cloud.tencent.com/redis#/)在实例列表复制实例 ID。
     * @param string $FeatureName 支持查询的功能特性如下所示。
- read-local-node-only：就近接入。
- multi-account：多账号管理。
- auto-failback：故障恢复场景，主节点是否开启自动回切。
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

        if (array_key_exists("FeatureName",$param) and $param["FeatureName"] !== null) {
            $this->FeatureName = $param["FeatureName"];
        }
    }
}
