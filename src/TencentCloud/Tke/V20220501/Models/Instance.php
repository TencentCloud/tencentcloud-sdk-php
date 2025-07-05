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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群的实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceRole() 获取节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
 * @method void setInstanceRole(string $InstanceRole) 设置节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
 * @method string getFailedReason() 获取实例异常(或者处于初始化中)的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailedReason(string $FailedReason) 设置实例异常(或者处于初始化中)的原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceState() 获取实例的状态
- initializing创建中
- running 运行中
- failed 异常
 * @method void setInstanceState(string $InstanceState) 设置实例的状态
- initializing创建中
- running 运行中
- failed 异常
 * @method boolean getUnschedulable() 获取是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnschedulable(boolean $Unschedulable) 设置是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取添加时间
 * @method void setCreatedTime(string $CreatedTime) 设置添加时间
 * @method string getLanIP() 获取节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLanIP(string $LanIP) 设置节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodePoolId() 获取资源池ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodePoolId(string $NodePoolId) 设置资源池ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method NativeNodeInfo getNative() 获取原生节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNative(NativeNodeInfo $Native) 设置原生节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method RegularNodeInfo getRegular() 获取普通节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegular(RegularNodeInfo $Regular) 设置普通节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method SuperNodeInfo getSuper() 获取超级节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuper(SuperNodeInfo $Super) 设置超级节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method ExternalNodeInfo getExternal() 获取第三方节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternal(ExternalNodeInfo $External) 设置第三方节点参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeType() 获取节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeType(string $NodeType) 设置节点类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class Instance extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
     */
    public $InstanceRole;

    /**
     * @var string 实例异常(或者处于初始化中)的原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailedReason;

    /**
     * @var string 实例的状态
- initializing创建中
- running 运行中
- failed 异常
     */
    public $InstanceState;

    /**
     * @var boolean 是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unschedulable;

    /**
     * @var string 添加时间
     */
    public $CreatedTime;

    /**
     * @var string 节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LanIP;

    /**
     * @var string 资源池ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodePoolId;

    /**
     * @var NativeNodeInfo 原生节点参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Native;

    /**
     * @var RegularNodeInfo 普通节点参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regular;

    /**
     * @var SuperNodeInfo 超级节点参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Super;

    /**
     * @var ExternalNodeInfo 第三方节点参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $External;

    /**
     * @var string 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeType;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceRole 节点角色, MASTER, WORKER, ETCD, MASTER_ETCD,ALL, 默认为WORKER
     * @param string $FailedReason 实例异常(或者处于初始化中)的原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceState 实例的状态
- initializing创建中
- running 运行中
- failed 异常
     * @param boolean $Unschedulable 是否不可调度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 添加时间
     * @param string $LanIP 节点内网IP
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodePoolId 资源池ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param NativeNodeInfo $Native 原生节点参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param RegularNodeInfo $Regular 普通节点参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param SuperNodeInfo $Super 超级节点参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param ExternalNodeInfo $External 第三方节点参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeType 节点类型
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceRole",$param) and $param["InstanceRole"] !== null) {
            $this->InstanceRole = $param["InstanceRole"];
        }

        if (array_key_exists("FailedReason",$param) and $param["FailedReason"] !== null) {
            $this->FailedReason = $param["FailedReason"];
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("LanIP",$param) and $param["LanIP"] !== null) {
            $this->LanIP = $param["LanIP"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Native",$param) and $param["Native"] !== null) {
            $this->Native = new NativeNodeInfo();
            $this->Native->deserialize($param["Native"]);
        }

        if (array_key_exists("Regular",$param) and $param["Regular"] !== null) {
            $this->Regular = new RegularNodeInfo();
            $this->Regular->deserialize($param["Regular"]);
        }

        if (array_key_exists("Super",$param) and $param["Super"] !== null) {
            $this->Super = new SuperNodeInfo();
            $this->Super->deserialize($param["Super"]);
        }

        if (array_key_exists("External",$param) and $param["External"] !== null) {
            $this->External = new ExternalNodeInfo();
            $this->External->deserialize($param["External"]);
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }
    }
}
