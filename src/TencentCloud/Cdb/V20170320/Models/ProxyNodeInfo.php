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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 代理节点信息
 *
 * @method string getProxyNodeId() 获取代理节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNodeId(string $ProxyNodeId) 设置代理节点ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyNodeConnections() 获取节点当前连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNodeConnections(integer $ProxyNodeConnections) 设置节点当前连接数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyNodeCpu() 获取cup
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNodeCpu(integer $ProxyNodeCpu) 设置cup
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProxyNodeMem() 获取内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyNodeMem(integer $ProxyNodeMem) 设置内存
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProxyStatus() 获取节点状态：
init（申请中）
online（运行中）
offline（离线中）
destroy（已销毁）
recovering（故障恢复中）
error（节点故障）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProxyStatus(string $ProxyStatus) 设置节点状态：
init（申请中）
online（运行中）
offline（离线中）
destroy（已销毁）
recovering（故障恢复中）
error（节点故障）
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProxyNodeInfo extends AbstractModel
{
    /**
     * @var string 代理节点ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNodeId;

    /**
     * @var integer 节点当前连接数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNodeConnections;

    /**
     * @var integer cup
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNodeCpu;

    /**
     * @var integer 内存
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyNodeMem;

    /**
     * @var string 节点状态：
init（申请中）
online（运行中）
offline（离线中）
destroy（已销毁）
recovering（故障恢复中）
error（节点故障）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProxyStatus;

    /**
     * @param string $ProxyNodeId 代理节点ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyNodeConnections 节点当前连接数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyNodeCpu cup
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProxyNodeMem 内存
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProxyStatus 节点状态：
init（申请中）
online（运行中）
offline（离线中）
destroy（已销毁）
recovering（故障恢复中）
error（节点故障）
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
        if (array_key_exists("ProxyNodeId",$param) and $param["ProxyNodeId"] !== null) {
            $this->ProxyNodeId = $param["ProxyNodeId"];
        }

        if (array_key_exists("ProxyNodeConnections",$param) and $param["ProxyNodeConnections"] !== null) {
            $this->ProxyNodeConnections = $param["ProxyNodeConnections"];
        }

        if (array_key_exists("ProxyNodeCpu",$param) and $param["ProxyNodeCpu"] !== null) {
            $this->ProxyNodeCpu = $param["ProxyNodeCpu"];
        }

        if (array_key_exists("ProxyNodeMem",$param) and $param["ProxyNodeMem"] !== null) {
            $this->ProxyNodeMem = $param["ProxyNodeMem"];
        }

        if (array_key_exists("ProxyStatus",$param) and $param["ProxyStatus"] !== null) {
            $this->ProxyStatus = $param["ProxyStatus"];
        }
    }
}
