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
 * SwitchProxy请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
 * @method string getProxyID() 获取实例 ProxyID，请通过接口[DescribeInstanceNodeInfo](https://cloud.tencent.com/document/product/239/48603)的返回参数**Proxy**中的**NodeId**获取。  
 * @method void setProxyID(string $ProxyID) 设置实例 ProxyID，请通过接口[DescribeInstanceNodeInfo](https://cloud.tencent.com/document/product/239/48603)的返回参数**Proxy**中的**NodeId**获取。  
 */
class SwitchProxyRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 实例 ProxyID，请通过接口[DescribeInstanceNodeInfo](https://cloud.tencent.com/document/product/239/48603)的返回参数**Proxy**中的**NodeId**获取。  
     */
    public $ProxyID;

    /**
     * @param string $InstanceId 实例 ID，请登录[Redis控制台](https://console.cloud.tencent.com/redis/instance/list)在实例列表复制实例 ID。
     * @param string $ProxyID 实例 ProxyID，请通过接口[DescribeInstanceNodeInfo](https://cloud.tencent.com/document/product/239/48603)的返回参数**Proxy**中的**NodeId**获取。  
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

        if (array_key_exists("ProxyID",$param) and $param["ProxyID"] !== null) {
            $this->ProxyID = $param["ProxyID"];
        }
    }
}
