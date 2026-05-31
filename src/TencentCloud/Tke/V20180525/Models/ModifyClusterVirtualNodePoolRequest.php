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
 * ModifyClusterVirtualNodePool请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID，通过DescribeClusters接口获取</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID，通过DescribeClusters接口获取</p>
 * @method string getNodePoolId() 获取<p>节点池ID，通过DescribeNodePools接口获取</p>
 * @method void setNodePoolId(string $NodePoolId) 设置<p>节点池ID，通过DescribeNodePools接口获取</p>
 * @method string getName() 获取<p>节点池名称，必须修改至少一个参数</p>
 * @method void setName(string $Name) 设置<p>节点池名称，必须修改至少一个参数</p>
 * @method array getSecurityGroupIds() 获取<p>安全组ID列表，必须修改至少一个参数</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组ID列表，必须修改至少一个参数</p>
 * @method array getLabels() 获取<p>虚拟节点label，必须修改至少一个参数</p>
 * @method void setLabels(array $Labels) 设置<p>虚拟节点label，必须修改至少一个参数</p>
 * @method array getTaints() 获取<p>虚拟节点taint，必须修改至少一个参数</p>
 * @method void setTaints(array $Taints) 设置<p>虚拟节点taint，必须修改至少一个参数</p>
 * @method boolean getDeletionProtection() 获取<p>删除保护开关，必须修改至少一个参数</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>删除保护开关，必须修改至少一个参数</p>
 * @method SubnetAllocationPolicy getSubnetAllocationPolicy() 获取<p>子网分配策略</p>
 * @method void setSubnetAllocationPolicy(SubnetAllocationPolicy $SubnetAllocationPolicy) 设置<p>子网分配策略</p>
 */
class ModifyClusterVirtualNodePoolRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID，通过DescribeClusters接口获取</p>
     */
    public $ClusterId;

    /**
     * @var string <p>节点池ID，通过DescribeNodePools接口获取</p>
     */
    public $NodePoolId;

    /**
     * @var string <p>节点池名称，必须修改至少一个参数</p>
     */
    public $Name;

    /**
     * @var array <p>安全组ID列表，必须修改至少一个参数</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>虚拟节点label，必须修改至少一个参数</p>
     */
    public $Labels;

    /**
     * @var array <p>虚拟节点taint，必须修改至少一个参数</p>
     */
    public $Taints;

    /**
     * @var boolean <p>删除保护开关，必须修改至少一个参数</p>
     */
    public $DeletionProtection;

    /**
     * @var SubnetAllocationPolicy <p>子网分配策略</p>
     */
    public $SubnetAllocationPolicy;

    /**
     * @param string $ClusterId <p>集群ID，通过DescribeClusters接口获取</p>
     * @param string $NodePoolId <p>节点池ID，通过DescribeNodePools接口获取</p>
     * @param string $Name <p>节点池名称，必须修改至少一个参数</p>
     * @param array $SecurityGroupIds <p>安全组ID列表，必须修改至少一个参数</p>
     * @param array $Labels <p>虚拟节点label，必须修改至少一个参数</p>
     * @param array $Taints <p>虚拟节点taint，必须修改至少一个参数</p>
     * @param boolean $DeletionProtection <p>删除保护开关，必须修改至少一个参数</p>
     * @param SubnetAllocationPolicy $SubnetAllocationPolicy <p>子网分配策略</p>
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

        if (array_key_exists("SubnetAllocationPolicy",$param) and $param["SubnetAllocationPolicy"] !== null) {
            $this->SubnetAllocationPolicy = new SubnetAllocationPolicy();
            $this->SubnetAllocationPolicy->deserialize($param["SubnetAllocationPolicy"]);
        }
    }
}
