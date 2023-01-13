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
 * CreateClusterVirtualNodePool请求参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getName() 获取节点池名称
 * @method void setName(string $Name) 设置节点池名称
 * @method array getSubnetIds() 获取子网ID列表
 * @method void setSubnetIds(array $SubnetIds) 设置子网ID列表
 * @method array getSecurityGroupIds() 获取安全组ID列表
 * @method void setSecurityGroupIds(array $SecurityGroupIds) 设置安全组ID列表
 * @method array getLabels() 获取虚拟节点label
 * @method void setLabels(array $Labels) 设置虚拟节点label
 * @method array getTaints() 获取虚拟节点taint
 * @method void setTaints(array $Taints) 设置虚拟节点taint
 * @method array getVirtualNodes() 获取节点列表
 * @method void setVirtualNodes(array $VirtualNodes) 设置节点列表
 * @method boolean getDeletionProtection() 获取删除保护开关
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置删除保护开关
 * @method string getOS() 获取节点池操作系统：
- linux（默认）
- windows
 * @method void setOS(string $OS) 设置节点池操作系统：
- linux（默认）
- windows
 */
class CreateClusterVirtualNodePoolRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 节点池名称
     */
    public $Name;

    /**
     * @var array 子网ID列表
     */
    public $SubnetIds;

    /**
     * @var array 安全组ID列表
     */
    public $SecurityGroupIds;

    /**
     * @var array 虚拟节点label
     */
    public $Labels;

    /**
     * @var array 虚拟节点taint
     */
    public $Taints;

    /**
     * @var array 节点列表
     */
    public $VirtualNodes;

    /**
     * @var boolean 删除保护开关
     */
    public $DeletionProtection;

    /**
     * @var string 节点池操作系统：
- linux（默认）
- windows
     */
    public $OS;

    /**
     * @param string $ClusterId 集群Id
     * @param string $Name 节点池名称
     * @param array $SubnetIds 子网ID列表
     * @param array $SecurityGroupIds 安全组ID列表
     * @param array $Labels 虚拟节点label
     * @param array $Taints 虚拟节点taint
     * @param array $VirtualNodes 节点列表
     * @param boolean $DeletionProtection 删除保护开关
     * @param string $OS 节点池操作系统：
- linux（默认）
- windows
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

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
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
    }
}
