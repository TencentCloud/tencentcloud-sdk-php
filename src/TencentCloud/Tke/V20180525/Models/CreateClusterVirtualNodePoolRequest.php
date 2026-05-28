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
 * CreateClusterVirtualNodePool请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID，通过DescribeClusters接口获取</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID，通过DescribeClusters接口获取</p>
 * @method string getName() 获取<p>节点池名称</p>
 * @method void setName(string $Name) 设置<p>节点池名称</p>
 * @method array getSecurityGroupIds() 获取<p>安全组ID列表</p>
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置<p>安全组ID列表</p>
 * @method array getSubnetIds() 获取<p>子网ID列表</p>
 * @method void setSubnetIds(array $SubnetIds) 设置<p>子网ID列表</p>
 * @method array getLabels() 获取<p>虚拟节点label</p>
 * @method void setLabels(array $Labels) 设置<p>虚拟节点label</p>
 * @method array getTaints() 获取<p>虚拟节点taint</p>
 * @method void setTaints(array $Taints) 设置<p>虚拟节点taint</p>
 * @method array getVirtualNodes() 获取<p>节点列表</p>
 * @method void setVirtualNodes(array $VirtualNodes) 设置<p>节点列表</p>
 * @method boolean getDeletionProtection() 获取<p>删除保护开关，默认关闭</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>删除保护开关，默认关闭</p>
 * @method string getOS() 获取<p>节点池操作系统：</p><ul><li>linux（默认）</li><li>windows</li></ul>
 * @method void setOS(string $OS) 设置<p>节点池操作系统：</p><ul><li>linux（默认）</li><li>windows</li></ul>
 * @method SubnetAllocationPolicy getSubnetAllocationPolicy() 获取<p>子网资源分配策略，精确控制各子网之间的资源分配比例。</p>
 * @method void setSubnetAllocationPolicy(SubnetAllocationPolicy $SubnetAllocationPolicy) 设置<p>子网资源分配策略，精确控制各子网之间的资源分配比例。</p>
 * @method AgentPluginConfig getAgentPlugin() 获取<p>AgentPlugin 安装配置。传入即表示需要安装（即使是空对象 {}）</p>
 * @method void setAgentPlugin(AgentPluginConfig $AgentPlugin) 设置<p>AgentPlugin 安装配置。传入即表示需要安装（即使是空对象 {}）</p>
 */
class CreateClusterVirtualNodePoolRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID，通过DescribeClusters接口获取</p>
     */
    public $ClusterId;

    /**
     * @var string <p>节点池名称</p>
     */
    public $Name;

    /**
     * @var array <p>安全组ID列表</p>
     */
    public $SecurityGroupIds;

    /**
     * @var array <p>子网ID列表</p>
     */
    public $SubnetIds;

    /**
     * @var array <p>虚拟节点label</p>
     */
    public $Labels;

    /**
     * @var array <p>虚拟节点taint</p>
     */
    public $Taints;

    /**
     * @var array <p>节点列表</p>
     */
    public $VirtualNodes;

    /**
     * @var boolean <p>删除保护开关，默认关闭</p>
     */
    public $DeletionProtection;

    /**
     * @var string <p>节点池操作系统：</p><ul><li>linux（默认）</li><li>windows</li></ul>
     */
    public $OS;

    /**
     * @var SubnetAllocationPolicy <p>子网资源分配策略，精确控制各子网之间的资源分配比例。</p>
     */
    public $SubnetAllocationPolicy;

    /**
     * @var AgentPluginConfig <p>AgentPlugin 安装配置。传入即表示需要安装（即使是空对象 {}）</p>
     */
    public $AgentPlugin;

    /**
     * @param string $ClusterId <p>集群ID，通过DescribeClusters接口获取</p>
     * @param string $Name <p>节点池名称</p>
     * @param array $SecurityGroupIds <p>安全组ID列表</p>
     * @param array $SubnetIds <p>子网ID列表</p>
     * @param array $Labels <p>虚拟节点label</p>
     * @param array $Taints <p>虚拟节点taint</p>
     * @param array $VirtualNodes <p>节点列表</p>
     * @param boolean $DeletionProtection <p>删除保护开关，默认关闭</p>
     * @param string $OS <p>节点池操作系统：</p><ul><li>linux（默认）</li><li>windows</li></ul>
     * @param SubnetAllocationPolicy $SubnetAllocationPolicy <p>子网资源分配策略，精确控制各子网之间的资源分配比例。</p>
     * @param AgentPluginConfig $AgentPlugin <p>AgentPlugin 安装配置。传入即表示需要安装（即使是空对象 {}）</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SecurityGroupIds",$param) and $param["SecurityGroupIds"] !== null) {
            $this->SecurityGroupIds = $param["SecurityGroupIds"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
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

        if (array_key_exists("VirtualNodes",$param) and $param["VirtualNodes"] !== null) {
            $this->VirtualNodes = [];
            foreach ($param["VirtualNodes"] as $key => $value){
                $obj = new VirtualNodeSpec();
                $obj->deserialize($value);
                array_push($this->VirtualNodes, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("OS",$param) and $param["OS"] !== null) {
            $this->OS = $param["OS"];
        }

        if (array_key_exists("SubnetAllocationPolicy",$param) and $param["SubnetAllocationPolicy"] !== null) {
            $this->SubnetAllocationPolicy = new SubnetAllocationPolicy();
            $this->SubnetAllocationPolicy->deserialize($param["SubnetAllocationPolicy"]);
        }

        if (array_key_exists("AgentPlugin",$param) and $param["AgentPlugin"] !== null) {
            $this->AgentPlugin = new AgentPluginConfig();
            $this->AgentPlugin->deserialize($param["AgentPlugin"]);
        }
    }
}
