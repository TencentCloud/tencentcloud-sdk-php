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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NodePool的运行时配置
 *
 * @method string getNodePoolId() 获取节点池ID
 * @method void setNodePoolId(string $NodePoolId) 设置节点池ID
 * @method string getRuntimeType() 获取运行时类型，参考：https://cloud.tencent.com/document/api/457/105241
 * @method void setRuntimeType(string $RuntimeType) 设置运行时类型，参考：https://cloud.tencent.com/document/api/457/105241
 * @method string getRuntimeVersion() 获取运行时版本，参考：https://cloud.tencent.com/document/api/457/105241
 * @method void setRuntimeVersion(string $RuntimeVersion) 设置运行时版本，参考：https://cloud.tencent.com/document/api/457/105241
 * @method string getNodePoolName() 获取节点池名称，限制 255 字符
 * @method void setNodePoolName(string $NodePoolName) 设置节点池名称，限制 255 字符
 */
class NodePoolRuntime extends AbstractModel
{
    /**
     * @var string 节点池ID
     */
    public $NodePoolId;

    /**
     * @var string 运行时类型，参考：https://cloud.tencent.com/document/api/457/105241
     */
    public $RuntimeType;

    /**
     * @var string 运行时版本，参考：https://cloud.tencent.com/document/api/457/105241
     */
    public $RuntimeVersion;

    /**
     * @var string 节点池名称，限制 255 字符
     */
    public $NodePoolName;

    /**
     * @param string $NodePoolId 节点池ID
     * @param string $RuntimeType 运行时类型，参考：https://cloud.tencent.com/document/api/457/105241
     * @param string $RuntimeVersion 运行时版本，参考：https://cloud.tencent.com/document/api/457/105241
     * @param string $NodePoolName 节点池名称，限制 255 字符
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
        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("RuntimeType",$param) and $param["RuntimeType"] !== null) {
            $this->RuntimeType = $param["RuntimeType"];
        }

        if (array_key_exists("RuntimeVersion",$param) and $param["RuntimeVersion"] !== null) {
            $this->RuntimeVersion = $param["RuntimeVersion"];
        }

        if (array_key_exists("NodePoolName",$param) and $param["NodePoolName"] !== null) {
            $this->NodePoolName = $param["NodePoolName"];
        }
    }
}
