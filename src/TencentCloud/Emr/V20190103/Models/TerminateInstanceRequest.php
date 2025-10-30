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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method array getResourceIds() 获取销毁节点ID。该参数为预留参数，用户无需配置。
 * @method void setResourceIds(array $ResourceIds) 设置销毁节点ID。该参数为预留参数，用户无需配置。
 * @method string getResourceBaseType() 获取类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识
 * @method void setResourceBaseType(string $ResourceBaseType) 设置类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识
 * @method string getComputeResourceId() 获取计算资源ID
 * @method void setComputeResourceId(string $ComputeResourceId) 设置计算资源ID
 */
class TerminateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var array 销毁节点ID。该参数为预留参数，用户无需配置。
     */
    public $ResourceIds;

    /**
     * @var string 类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识
     */
    public $ResourceBaseType;

    /**
     * @var string 计算资源ID
     */
    public $ComputeResourceId;

    /**
     * @param string $InstanceId 实例ID。
     * @param array $ResourceIds 销毁节点ID。该参数为预留参数，用户无需配置。
     * @param string $ResourceBaseType 类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识
     * @param string $ComputeResourceId 计算资源ID
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

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
