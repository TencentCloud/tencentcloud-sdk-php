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
 * 集群状态信息
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method string getClusterState() 获取集群状态
 * @method void setClusterState(string $ClusterState) 设置集群状态
 * @method string getClusterInstanceState() 获取集群下机器实例的状态
 * @method void setClusterInstanceState(string $ClusterInstanceState) 设置集群下机器实例的状态
 * @method boolean getClusterBMonitor() 获取集群是否开启监控
 * @method void setClusterBMonitor(boolean $ClusterBMonitor) 设置集群是否开启监控
 * @method integer getClusterInitNodeNum() 获取集群创建中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
 * @method void setClusterInitNodeNum(integer $ClusterInitNodeNum) 设置集群创建中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
 * @method integer getClusterRunningNodeNum() 获取集群运行中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
 * @method void setClusterRunningNodeNum(integer $ClusterRunningNodeNum) 设置集群运行中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
 * @method integer getClusterFailedNodeNum() 获取集群异常的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
 * @method void setClusterFailedNodeNum(integer $ClusterFailedNodeNum) 设置集群异常的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
 * @method integer getClusterClosedNodeNum() 获取集群已关机的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterClosedNodeNum(integer $ClusterClosedNodeNum) 设置集群已关机的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterClosingNodeNum() 获取集群关机中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterClosingNodeNum(integer $ClusterClosingNodeNum) 设置集群关机中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getClusterDeletionProtection() 获取集群是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterDeletionProtection(boolean $ClusterDeletionProtection) 设置集群是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getClusterAuditEnabled() 获取集群是否可审计
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterAuditEnabled(boolean $ClusterAuditEnabled) 设置集群是否可审计
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClusterStatus extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var string 集群状态
     */
    public $ClusterState;

    /**
     * @var string 集群下机器实例的状态
     */
    public $ClusterInstanceState;

    /**
     * @var boolean 集群是否开启监控
     */
    public $ClusterBMonitor;

    /**
     * @var integer 集群创建中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
     */
    public $ClusterInitNodeNum;

    /**
     * @var integer 集群运行中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
     */
    public $ClusterRunningNodeNum;

    /**
     * @var integer 集群异常的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
     */
    public $ClusterFailedNodeNum;

    /**
     * @var integer 集群已关机的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterClosedNodeNum;

    /**
     * @var integer 集群关机中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterClosingNodeNum;

    /**
     * @var boolean 集群是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterDeletionProtection;

    /**
     * @var boolean 集群是否可审计
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterAuditEnabled;

    /**
     * @param string $ClusterId 集群Id
     * @param string $ClusterState 集群状态
     * @param string $ClusterInstanceState 集群下机器实例的状态
     * @param boolean $ClusterBMonitor 集群是否开启监控
     * @param integer $ClusterInitNodeNum 集群创建中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
     * @param integer $ClusterRunningNodeNum 集群运行中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
     * @param integer $ClusterFailedNodeNum 集群异常的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
     * @param integer $ClusterClosedNodeNum 集群已关机的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterClosingNodeNum 集群关机中的节点数，-1表示获取节点状态超时，-2表示获取节点状态失败
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ClusterDeletionProtection 集群是否开启删除保护
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ClusterAuditEnabled 集群是否可审计
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterState",$param) and $param["ClusterState"] !== null) {
            $this->ClusterState = $param["ClusterState"];
        }

        if (array_key_exists("ClusterInstanceState",$param) and $param["ClusterInstanceState"] !== null) {
            $this->ClusterInstanceState = $param["ClusterInstanceState"];
        }

        if (array_key_exists("ClusterBMonitor",$param) and $param["ClusterBMonitor"] !== null) {
            $this->ClusterBMonitor = $param["ClusterBMonitor"];
        }

        if (array_key_exists("ClusterInitNodeNum",$param) and $param["ClusterInitNodeNum"] !== null) {
            $this->ClusterInitNodeNum = $param["ClusterInitNodeNum"];
        }

        if (array_key_exists("ClusterRunningNodeNum",$param) and $param["ClusterRunningNodeNum"] !== null) {
            $this->ClusterRunningNodeNum = $param["ClusterRunningNodeNum"];
        }

        if (array_key_exists("ClusterFailedNodeNum",$param) and $param["ClusterFailedNodeNum"] !== null) {
            $this->ClusterFailedNodeNum = $param["ClusterFailedNodeNum"];
        }

        if (array_key_exists("ClusterClosedNodeNum",$param) and $param["ClusterClosedNodeNum"] !== null) {
            $this->ClusterClosedNodeNum = $param["ClusterClosedNodeNum"];
        }

        if (array_key_exists("ClusterClosingNodeNum",$param) and $param["ClusterClosingNodeNum"] !== null) {
            $this->ClusterClosingNodeNum = $param["ClusterClosingNodeNum"];
        }

        if (array_key_exists("ClusterDeletionProtection",$param) and $param["ClusterDeletionProtection"] !== null) {
            $this->ClusterDeletionProtection = $param["ClusterDeletionProtection"];
        }

        if (array_key_exists("ClusterAuditEnabled",$param) and $param["ClusterAuditEnabled"] !== null) {
            $this->ClusterAuditEnabled = $param["ClusterAuditEnabled"];
        }
    }
}
