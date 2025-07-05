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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRocketMQSmoothMigrationTask返回参数结构体
 *
 * @method string getTaskName() 获取任务名称
 * @method void setTaskName(string $TaskName) 设置任务名称
 * @method string getClusterId() 获取目标集群ID
 * @method void setClusterId(string $ClusterId) 设置目标集群ID
 * @method string getSourceClusterName() 获取源集群名称
 * @method void setSourceClusterName(string $SourceClusterName) 设置源集群名称
 * @method string getConnectionType() 获取网络连接类型，
PUBLIC 公网
VPC 私有网络
OTHER 其它
 * @method void setConnectionType(string $ConnectionType) 设置网络连接类型，
PUBLIC 公网
VPC 私有网络
OTHER 其它
 * @method string getSourceClusterNameServer() 获取源集群NameServer地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceClusterNameServer(string $SourceClusterNameServer) 设置源集群NameServer地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcId() 获取源集群所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置源集群所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubnetId() 获取源集群所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置源集群所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableACL() 获取是否开启ACL
 * @method void setEnableACL(boolean $EnableACL) 设置是否开启ACL
 * @method string getAccessKey() 获取源集群AccessKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccessKey(string $AccessKey) 设置源集群AccessKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取元集群SecretKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置元集群SecretKey
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskError() 获取配置源集群时发生的错误
TIMEOUT 连接超时，
SERVER_ERROR 服务错误，
INTERNAL_ERROR 内部错误，
CONNECT_NAMESERVER_ERROR 连接nameserver错误
CONNECT_BROKER_ERROR 连接broker错误
ACL_WRONG ACL信息不正确

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskError(string $TaskError) 设置配置源集群时发生的错误
TIMEOUT 连接超时，
SERVER_ERROR 服务错误，
INTERNAL_ERROR 内部错误，
CONNECT_NAMESERVER_ERROR 连接nameserver错误
CONNECT_BROKER_ERROR 连接broker错误
ACL_WRONG ACL信息不正确

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取任务状态
Configuration 迁移配置
SourceConnecting 连接源集群中
SourceConnectionFailure 连接源集群失败
MetaDataImport 元数据导入
EndpointSetup 切换接入点
ServiceMigration 切流中
Completed 已完成
Cancelled 已取消
 * @method void setTaskStatus(string $TaskStatus) 设置任务状态
Configuration 迁移配置
SourceConnecting 连接源集群中
SourceConnectionFailure 连接源集群失败
MetaDataImport 元数据导入
EndpointSetup 切换接入点
ServiceMigration 切流中
Completed 已完成
Cancelled 已取消
 * @method string getTaskId() 获取任务ID
 * @method void setTaskId(string $TaskId) 设置任务ID
 * @method array getTopicTypeDistribution() 获取主题类型分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicTypeDistribution(array $TopicTypeDistribution) 设置主题类型分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTopicStageDistribution() 获取主题迁移进度分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicStageDistribution(array $TopicStageDistribution) 设置主题迁移进度分布情况
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRocketMQSmoothMigrationTaskResponse extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $TaskName;

    /**
     * @var string 目标集群ID
     */
    public $ClusterId;

    /**
     * @var string 源集群名称
     */
    public $SourceClusterName;

    /**
     * @var string 网络连接类型，
PUBLIC 公网
VPC 私有网络
OTHER 其它
     */
    public $ConnectionType;

    /**
     * @var string 源集群NameServer地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceClusterNameServer;

    /**
     * @var string 源集群所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @var string 源集群所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var boolean 是否开启ACL
     */
    public $EnableACL;

    /**
     * @var string 源集群AccessKey
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccessKey;

    /**
     * @var string 元集群SecretKey
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string 配置源集群时发生的错误
TIMEOUT 连接超时，
SERVER_ERROR 服务错误，
INTERNAL_ERROR 内部错误，
CONNECT_NAMESERVER_ERROR 连接nameserver错误
CONNECT_BROKER_ERROR 连接broker错误
ACL_WRONG ACL信息不正确

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskError;

    /**
     * @var string 任务状态
Configuration 迁移配置
SourceConnecting 连接源集群中
SourceConnectionFailure 连接源集群失败
MetaDataImport 元数据导入
EndpointSetup 切换接入点
ServiceMigration 切流中
Completed 已完成
Cancelled 已取消
     */
    public $TaskStatus;

    /**
     * @var string 任务ID
     */
    public $TaskId;

    /**
     * @var array 主题类型分布情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicTypeDistribution;

    /**
     * @var array 主题迁移进度分布情况
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicStageDistribution;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskName 任务名称
     * @param string $ClusterId 目标集群ID
     * @param string $SourceClusterName 源集群名称
     * @param string $ConnectionType 网络连接类型，
PUBLIC 公网
VPC 私有网络
OTHER 其它
     * @param string $SourceClusterNameServer 源集群NameServer地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcId 源集群所在私有网络ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubnetId 源集群所在子网ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableACL 是否开启ACL
     * @param string $AccessKey 源集群AccessKey
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey 元集群SecretKey
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskError 配置源集群时发生的错误
TIMEOUT 连接超时，
SERVER_ERROR 服务错误，
INTERNAL_ERROR 内部错误，
CONNECT_NAMESERVER_ERROR 连接nameserver错误
CONNECT_BROKER_ERROR 连接broker错误
ACL_WRONG ACL信息不正确

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus 任务状态
Configuration 迁移配置
SourceConnecting 连接源集群中
SourceConnectionFailure 连接源集群失败
MetaDataImport 元数据导入
EndpointSetup 切换接入点
ServiceMigration 切流中
Completed 已完成
Cancelled 已取消
     * @param string $TaskId 任务ID
     * @param array $TopicTypeDistribution 主题类型分布情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TopicStageDistribution 主题迁移进度分布情况
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SourceClusterName",$param) and $param["SourceClusterName"] !== null) {
            $this->SourceClusterName = $param["SourceClusterName"];
        }

        if (array_key_exists("ConnectionType",$param) and $param["ConnectionType"] !== null) {
            $this->ConnectionType = $param["ConnectionType"];
        }

        if (array_key_exists("SourceClusterNameServer",$param) and $param["SourceClusterNameServer"] !== null) {
            $this->SourceClusterNameServer = $param["SourceClusterNameServer"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("EnableACL",$param) and $param["EnableACL"] !== null) {
            $this->EnableACL = $param["EnableACL"];
        }

        if (array_key_exists("AccessKey",$param) and $param["AccessKey"] !== null) {
            $this->AccessKey = $param["AccessKey"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("TaskError",$param) and $param["TaskError"] !== null) {
            $this->TaskError = $param["TaskError"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TopicTypeDistribution",$param) and $param["TopicTypeDistribution"] !== null) {
            $this->TopicTypeDistribution = [];
            foreach ($param["TopicTypeDistribution"] as $key => $value){
                $obj = new RocketMQTopicDistribution();
                $obj->deserialize($value);
                array_push($this->TopicTypeDistribution, $obj);
            }
        }

        if (array_key_exists("TopicStageDistribution",$param) and $param["TopicStageDistribution"] !== null) {
            $this->TopicStageDistribution = [];
            foreach ($param["TopicStageDistribution"] as $key => $value){
                $obj = new RocketMQMigrationTopicDistribution();
                $obj->deserialize($value);
                array_push($this->TopicStageDistribution, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
