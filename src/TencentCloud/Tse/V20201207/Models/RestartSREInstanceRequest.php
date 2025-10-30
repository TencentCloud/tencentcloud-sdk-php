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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RestartSREInstance请求参数结构体
 *
 * @method string getInstanceId() 获取微服务引擎实例Id
 * @method void setInstanceId(string $InstanceId) 设置微服务引擎实例Id
 * @method array getEnvTypes() 获取重启的环境类型（PROD，DEV，UAT等）
 * @method void setEnvTypes(array $EnvTypes) 设置重启的环境类型（PROD，DEV，UAT等）
 * @method string getNodeName() 获取指定需要重启的实例节点（当前仅支持zk单节点重启）
 * @method void setNodeName(string $NodeName) 设置指定需要重启的实例节点（当前仅支持zk单节点重启）
 */
class RestartSREInstanceRequest extends AbstractModel
{
    /**
     * @var string 微服务引擎实例Id
     */
    public $InstanceId;

    /**
     * @var array 重启的环境类型（PROD，DEV，UAT等）
     */
    public $EnvTypes;

    /**
     * @var string 指定需要重启的实例节点（当前仅支持zk单节点重启）
     */
    public $NodeName;

    /**
     * @param string $InstanceId 微服务引擎实例Id
     * @param array $EnvTypes 重启的环境类型（PROD，DEV，UAT等）
     * @param string $NodeName 指定需要重启的实例节点（当前仅支持zk单节点重启）
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

        if (array_key_exists("EnvTypes",$param) and $param["EnvTypes"] !== null) {
            $this->EnvTypes = $param["EnvTypes"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
