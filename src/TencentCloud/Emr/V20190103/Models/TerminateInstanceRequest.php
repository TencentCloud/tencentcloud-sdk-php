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
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method array getResourceIds() 获取<p>销毁节点ID。该参数为预留参数，用户无需配置。</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>销毁节点ID。该参数为预留参数，用户无需配置。</p>
 * @method string getResourceBaseType() 获取<p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
 * @method void setResourceBaseType(string $ResourceBaseType) 设置<p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
 * @method string getComputeResourceId() 获取<p>计算资源ID</p>
 * @method void setComputeResourceId(string $ComputeResourceId) 设置<p>计算资源ID</p>
 * @method boolean getRetainTkeCluster() 获取<p>保留计算资源关联的TKE集群</p>
 * @method void setRetainTkeCluster(boolean $RetainTkeCluster) 设置<p>保留计算资源关联的TKE集群</p>
 */
class TerminateInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>销毁节点ID。该参数为预留参数，用户无需配置。</p>
     */
    public $ResourceIds;

    /**
     * @var string <p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
     */
    public $ResourceBaseType;

    /**
     * @var string <p>计算资源ID</p>
     */
    public $ComputeResourceId;

    /**
     * @var boolean <p>保留计算资源关联的TKE集群</p>
     */
    public $RetainTkeCluster;

    /**
     * @param string $InstanceId <p>实例ID。</p>
     * @param array $ResourceIds <p>销毁节点ID。该参数为预留参数，用户无需配置。</p>
     * @param string $ResourceBaseType <p>类型为ComputeResource和EMR以及默认，默认为EMR,类型为EMR时,InstanceId生效,类型为ComputeResource时,使用ComputeResourceId标识</p>
     * @param string $ComputeResourceId <p>计算资源ID</p>
     * @param boolean $RetainTkeCluster <p>保留计算资源关联的TKE集群</p>
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

        if (array_key_exists("RetainTkeCluster",$param) and $param["RetainTkeCluster"] !== null) {
            $this->RetainTkeCluster = $param["RetainTkeCluster"];
        }
    }
}
