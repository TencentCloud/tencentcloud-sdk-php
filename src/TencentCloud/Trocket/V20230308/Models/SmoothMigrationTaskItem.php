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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平滑迁移任务
 *
 * @method string getTaskId() 获取任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskName() 获取任务名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskName(string $TaskName) 设置任务名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceClusterName() 获取源集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceClusterName(string $SourceClusterName) 设置源集群名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取目标集群实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置目标集群实例ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConnectionType() 获取网络连接类型， 
PUBLIC 公网 
VPC 私有网络 
OTHER 其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConnectionType(string $ConnectionType) 设置网络连接类型， 
PUBLIC 公网 
VPC 私有网络 
OTHER 其他
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSourceNameServer() 获取源集群NameServer地址	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceNameServer(string $SourceNameServer) 设置源集群NameServer地址	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取任务状态:
Configuration 迁移配置,
SourceConnecting 连接源集群中,
 MetaDataImport 元数据导入,
EndpointSetup 切换接入点,
ServiceMigration 切流中,
Completed 已完成,
Cancelled 已取消
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态:
Configuration 迁移配置,
SourceConnecting 连接源集群中,
 MetaDataImport 元数据导入,
EndpointSetup 切换接入点,
ServiceMigration 切流中,
Completed 已完成,
Cancelled 已取消
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceVersion() 获取目标集群实例版本，
4 表示4.x版本
5 表示5.x版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceVersion(string $InstanceVersion) 设置目标集群实例版本，
4 表示4.x版本
5 表示5.x版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmoothMigrationTaskItem extends AbstractModel
{
    /**
     * @var string 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 任务名称	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskName;

    /**
     * @var string 源集群名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceClusterName;

    /**
     * @var string 目标集群实例ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 网络连接类型， 
PUBLIC 公网 
VPC 私有网络 
OTHER 其他
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConnectionType;

    /**
     * @var string 源集群NameServer地址	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceNameServer;

    /**
     * @var string 任务状态:
Configuration 迁移配置,
SourceConnecting 连接源集群中,
 MetaDataImport 元数据导入,
EndpointSetup 切换接入点,
ServiceMigration 切流中,
Completed 已完成,
Cancelled 已取消
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStatus;

    /**
     * @var string 目标集群实例版本，
4 表示4.x版本
5 表示5.x版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceVersion;

    /**
     * @param string $TaskId 任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskName 任务名称	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceClusterName 源集群名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 目标集群实例ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConnectionType 网络连接类型， 
PUBLIC 公网 
VPC 私有网络 
OTHER 其他
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SourceNameServer 源集群NameServer地址	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 任务状态:
Configuration 迁移配置,
SourceConnecting 连接源集群中,
 MetaDataImport 元数据导入,
EndpointSetup 切换接入点,
ServiceMigration 切流中,
Completed 已完成,
Cancelled 已取消
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceVersion 目标集群实例版本，
4 表示4.x版本
5 表示5.x版本
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("SourceClusterName",$param) and $param["SourceClusterName"] !== null) {
            $this->SourceClusterName = $param["SourceClusterName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("SourceNameServer",$param) and $param["SourceNameServer"] !== null) {
            $this->SourceNameServer = $param["SourceNameServer"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }
    }
}
