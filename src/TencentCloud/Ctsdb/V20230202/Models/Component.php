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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例组件信息
 *
 * @method string getInstanceID() 获取<p>所属实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceID(string $InstanceID) 设置<p>所属实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置<p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>组件类型</p>枚举值：<ul><li> gateway： 时序节点</li><li> database： 数据节点</li><li> gateway-worker： 扩展节点</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>组件类型</p>枚举值：<ul><li> gateway： 时序节点</li><li> database： 数据节点</li><li> gateway-worker： 扩展节点</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCpu() 获取<p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(integer $Cpu) 设置<p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemory() 获取<p>内存</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemory(integer $Memory) 设置<p>内存</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDisk() 获取<p>磁盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisk(integer $Disk) 设置<p>磁盘</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShards() 获取<p>节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShards(integer $Shards) 设置<p>节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReplicas() 获取<p>副本数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReplicas(integer $Replicas) 设置<p>副本数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNetworks() 获取<p>网络</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworks(array $Networks) 设置<p>网络</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getState() 获取<p>组件状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 2： 变配中</li><li> 3： 隔离中</li><li> 4： 已隔离</li><li> 5： 删除中</li><li> 6： 已删除</li><li> 7： 禁用中</li><li> 8： 已禁用</li><li> 9： 启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setState(integer $State) 设置<p>组件状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 2： 变配中</li><li> 3： 隔离中</li><li> 4： 已隔离</li><li> 5： 删除中</li><li> 6： 已删除</li><li> 7： 禁用中</li><li> 8： 已禁用</li><li> 9： 启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getID() 获取<p>组件内部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置<p>组件内部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Component extends AbstractModel
{
    /**
     * @var string <p>所属实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceID;

    /**
     * @var string <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string <p>组件类型</p>枚举值：<ul><li> gateway： 时序节点</li><li> database： 数据节点</li><li> gateway-worker： 扩展节点</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer <p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var integer <p>内存</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Memory;

    /**
     * @var integer <p>磁盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Disk;

    /**
     * @var integer <p>节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Shards;

    /**
     * @var integer <p>副本数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Replicas;

    /**
     * @var array <p>网络</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Networks;

    /**
     * @var integer <p>组件状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 2： 变配中</li><li> 3： 隔离中</li><li> 4： 已隔离</li><li> 5： 删除中</li><li> 6： 已删除</li><li> 7： 禁用中</li><li> 8： 已禁用</li><li> 9： 启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $State;

    /**
     * @var integer <p>组件内部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @param string $InstanceID <p>所属实例id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>组件类型</p>枚举值：<ul><li> gateway： 时序节点</li><li> database： 数据节点</li><li> gateway-worker： 扩展节点</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cpu <p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Memory <p>内存</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Disk <p>磁盘</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Shards <p>节点数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Replicas <p>副本数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Networks <p>网络</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $State <p>组件状态</p>枚举值：<ul><li> 0： 运行中</li><li> 1： 创建中</li><li> 2： 变配中</li><li> 3： 隔离中</li><li> 4： 已隔离</li><li> 5： 删除中</li><li> 6： 已删除</li><li> 7： 禁用中</li><li> 8： 已禁用</li><li> 9： 启用中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ID <p>组件内部ID</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("Disk",$param) and $param["Disk"] !== null) {
            $this->Disk = $param["Disk"];
        }

        if (array_key_exists("Shards",$param) and $param["Shards"] !== null) {
            $this->Shards = $param["Shards"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("Networks",$param) and $param["Networks"] !== null) {
            $this->Networks = [];
            foreach ($param["Networks"] as $key => $value){
                $obj = new Network();
                $obj->deserialize($value);
                array_push($this->Networks, $obj);
            }
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
