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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceBasic请求参数结构体
 *
 * @method string getInstanceId() 获取集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置集群实例ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getResourceBaseType() 获取用来标注修改计算资源
 * @method void setResourceBaseType(string $ResourceBaseType) 设置用来标注修改计算资源
 * @method string getComputeResourceId() 获取需要修改的计算资源id，与ResourceBaseType 配合使用
 * @method void setComputeResourceId(string $ComputeResourceId) 设置需要修改的计算资源id，与ResourceBaseType 配合使用
 */
class ModifyInstanceBasicRequest extends AbstractModel
{
    /**
     * @var string 集群实例ID
     */
    public $InstanceId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 用来标注修改计算资源
     */
    public $ResourceBaseType;

    /**
     * @var string 需要修改的计算资源id，与ResourceBaseType 配合使用
     */
    public $ComputeResourceId;

    /**
     * @param string $InstanceId 集群实例ID
     * @param string $ClusterName 集群名称
     * @param string $ResourceBaseType 用来标注修改计算资源
     * @param string $ComputeResourceId 需要修改的计算资源id，与ResourceBaseType 配合使用
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ResourceBaseType",$param) and $param["ResourceBaseType"] !== null) {
            $this->ResourceBaseType = $param["ResourceBaseType"];
        }

        if (array_key_exists("ComputeResourceId",$param) and $param["ComputeResourceId"] !== null) {
            $this->ComputeResourceId = $param["ComputeResourceId"];
        }
    }
}
