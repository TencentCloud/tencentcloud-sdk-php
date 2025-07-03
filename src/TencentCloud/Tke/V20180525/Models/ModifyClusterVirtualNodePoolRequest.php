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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterVirtualNodePool请求参数结构体
 *
 * @method string getClusterId() 获取集群ID，通过DescribeClusters接口获取
 * @method void setClusterId(string $ClusterId) 设置集群ID，通过DescribeClusters接口获取
 * @method string getNodePoolId() 获取节点池ID，通过DescribeNodePools接口获取
 * @method void setNodePoolId(string $NodePoolId) 设置节点池ID，通过DescribeNodePools接口获取
 * @method string getName() 获取节点池名称，必须修改至少一个参数
 * @method void setName(string $Name) 设置节点池名称，必须修改至少一个参数
 * @method array getSecurityGroupIds() 获取安全组ID列表，必须修改至少一个参数
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID列表，必须修改至少一个参数
 * @method array getLabels() 获取虚拟节点label，必须修改至少一个参数
 * @method void setLabels(array $Labels) 设置虚拟节点label，必须修改至少一个参数
 * @method array getTaints() 获取虚拟节点taint，必须修改至少一个参数
 * @method void setTaints(array $Taints) 设置虚拟节点taint，必须修改至少一个参数
 * @method boolean getDeletionProtection() 获取删除保护开关，必须修改至少一个参数
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护开关，必须修改至少一个参数
 */
class ModifyClusterVirtualNodePoolRequest extends AbstractModel
{
    /**
     * @var string 集群ID，通过DescribeClusters接口获取
     */
    public $ClusterId;

    /**
     * @var string 节点池ID，通过DescribeNodePools接口获取
     */
    public $NodePoolId;

    /**
     * @var string 节点池名称，必须修改至少一个参数
     */
    public $Name;

    /**
     * @var array 安全组ID列表，必须修改至少一个参数
     */
    public $SecurityGroupIds;

    /**
     * @var array 虚拟节点label，必须修改至少一个参数
     */
    public $Labels;

    /**
     * @var array 虚拟节点taint，必须修改至少一个参数
     */
    public $Taints;

    /**
     * @var boolean 删除保护开关，必须修改至少一个参数
     */
    public $DeletionProtection;

    /**
     * @param string $ClusterId 集群ID，通过DescribeClusters接口获取
     * @param string $NodePoolId 节点池ID，通过DescribeNodePools接口获取
     * @param string $Name 节点池名称，必须修改至少一个参数
     * @param array $SecurityGroupIds 安全组ID列表，必须修改至少一个参数
     * @param array $Labels 虚拟节点label，必须修改至少一个参数
     * @param array $Taints 虚拟节点taint，必须修改至少一个参数
     * @param boolean $DeletionProtection 删除保护开关，必须修改至少一个参数
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }
    }
}
