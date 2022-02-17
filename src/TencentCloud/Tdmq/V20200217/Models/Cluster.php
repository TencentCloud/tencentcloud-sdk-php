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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群信息集合
 *
 * @method string getClusterId() 获取集群Id。
 * @method void setClusterId(string $ClusterId) 设置集群Id。
 * @method string getClusterName() 获取集群名称。
 * @method void setClusterName(string $ClusterName) 设置集群名称。
 * @method string getRemark() 获取说明信息。
 * @method void setRemark(string $Remark) 设置说明信息。
 * @method integer getEndPointNum() 获取接入点数量
 * @method void setEndPointNum(integer $EndPointNum) 设置接入点数量
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getHealthy() 获取集群是否健康，1表示健康，0表示异常
 * @method void setHealthy(integer $Healthy) 设置集群是否健康，1表示健康，0表示异常
 * @method string getHealthyInfo() 获取集群健康信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHealthyInfo(string $HealthyInfo) 设置集群健康信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
 * @method void setStatus(integer $Status) 设置集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
 * @method integer getMaxNamespaceNum() 获取最大命名空间数量
 * @method void setMaxNamespaceNum(integer $MaxNamespaceNum) 设置最大命名空间数量
 * @method integer getMaxTopicNum() 获取最大Topic数量
 * @method void setMaxTopicNum(integer $MaxTopicNum) 设置最大Topic数量
 * @method integer getMaxQps() 获取最大QPS
 * @method void setMaxQps(integer $MaxQps) 设置最大QPS
 * @method integer getMessageRetentionTime() 获取最大消息保留时间，秒为单位
 * @method void setMessageRetentionTime(integer $MessageRetentionTime) 设置最大消息保留时间，秒为单位
 * @method integer getMaxStorageCapacity() 获取最大存储容量
 * @method void setMaxStorageCapacity(integer $MaxStorageCapacity) 设置最大存储容量
 * @method string getVersion() 获取集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置集群版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicEndPoint() 获取公网访问接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicEndPoint(string $PublicEndPoint) 设置公网访问接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcEndPoint() 获取VPC访问接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcEndPoint(string $VpcEndPoint) 设置VPC访问接入点
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNamespaceNum() 获取命名空间数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceNum(integer $NamespaceNum) 设置命名空间数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsedStorageBudget() 获取已使用存储限制，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedStorageBudget(integer $UsedStorageBudget) 设置已使用存储限制，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPublishRateInMessages() 获取最大生产消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPublishRateInMessages(integer $MaxPublishRateInMessages) 设置最大生产消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDispatchRateInMessages() 获取最大推送消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDispatchRateInMessages(integer $MaxDispatchRateInMessages) 设置最大推送消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxPublishRateInBytes() 获取最大生产消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxPublishRateInBytes(integer $MaxPublishRateInBytes) 设置最大生产消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxDispatchRateInBytes() 获取最大推送消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxDispatchRateInBytes(integer $MaxDispatchRateInBytes) 设置最大推送消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNum() 获取已创建主题数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNum(integer $TopicNum) 设置已创建主题数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMessageDelayInSeconds() 获取最长消息延时，以秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxMessageDelayInSeconds(integer $MaxMessageDelayInSeconds) 设置最长消息延时，以秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPublicAccessEnabled() 获取是否开启公网访问，不填时默认开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicAccessEnabled(boolean $PublicAccessEnabled) 设置是否开启公网访问，不填时默认开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPayMode() 获取计费模式：
0: 按量计费
1: 包年包月
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(integer $PayMode) 设置计费模式：
0: 按量计费
1: 包年包月
注意：此字段可能返回 null，表示取不到有效值。
 */
class Cluster extends AbstractModel
{
    /**
     * @var string 集群Id。
     */
    public $ClusterId;

    /**
     * @var string 集群名称。
     */
    public $ClusterName;

    /**
     * @var string 说明信息。
     */
    public $Remark;

    /**
     * @var integer 接入点数量
     */
    public $EndPointNum;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 集群是否健康，1表示健康，0表示异常
     */
    public $Healthy;

    /**
     * @var string 集群健康信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HealthyInfo;

    /**
     * @var integer 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
     */
    public $Status;

    /**
     * @var integer 最大命名空间数量
     */
    public $MaxNamespaceNum;

    /**
     * @var integer 最大Topic数量
     */
    public $MaxTopicNum;

    /**
     * @var integer 最大QPS
     */
    public $MaxQps;

    /**
     * @var integer 最大消息保留时间，秒为单位
     */
    public $MessageRetentionTime;

    /**
     * @var integer 最大存储容量
     */
    public $MaxStorageCapacity;

    /**
     * @var string 集群版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 公网访问接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicEndPoint;

    /**
     * @var string VPC访问接入点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcEndPoint;

    /**
     * @var integer 命名空间数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceNum;

    /**
     * @var integer 已使用存储限制，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedStorageBudget;

    /**
     * @var integer 最大生产消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPublishRateInMessages;

    /**
     * @var integer 最大推送消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDispatchRateInMessages;

    /**
     * @var integer 最大生产消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxPublishRateInBytes;

    /**
     * @var integer 最大推送消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxDispatchRateInBytes;

    /**
     * @var integer 已创建主题数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNum;

    /**
     * @var integer 最长消息延时，以秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxMessageDelayInSeconds;

    /**
     * @var boolean 是否开启公网访问，不填时默认开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicAccessEnabled;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 计费模式：
0: 按量计费
1: 包年包月
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @param string $ClusterId 集群Id。
     * @param string $ClusterName 集群名称。
     * @param string $Remark 说明信息。
     * @param integer $EndPointNum 接入点数量
     * @param string $CreateTime 创建时间
     * @param integer $Healthy 集群是否健康，1表示健康，0表示异常
     * @param string $HealthyInfo 集群健康信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 集群状态，0:创建中，1:正常，2:销毁中，3:已删除，4: 隔离中，5:创建失败，6: 删除失败
     * @param integer $MaxNamespaceNum 最大命名空间数量
     * @param integer $MaxTopicNum 最大Topic数量
     * @param integer $MaxQps 最大QPS
     * @param integer $MessageRetentionTime 最大消息保留时间，秒为单位
     * @param integer $MaxStorageCapacity 最大存储容量
     * @param string $Version 集群版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicEndPoint 公网访问接入点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcEndPoint VPC访问接入点
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NamespaceNum 命名空间数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UsedStorageBudget 已使用存储限制，MB为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPublishRateInMessages 最大生产消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDispatchRateInMessages 最大推送消息速率，以条数为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxPublishRateInBytes 最大生产消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxDispatchRateInBytes 最大推送消息速率，以字节为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNum 已创建主题数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMessageDelayInSeconds 最长消息延时，以秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PublicAccessEnabled 是否开启公网访问，不填时默认开启
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PayMode 计费模式：
0: 按量计费
1: 包年包月
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

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("EndPointNum",$param) and $param["EndPointNum"] !== null) {
            $this->EndPointNum = $param["EndPointNum"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("HealthyInfo",$param) and $param["HealthyInfo"] !== null) {
            $this->HealthyInfo = $param["HealthyInfo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("MaxNamespaceNum",$param) and $param["MaxNamespaceNum"] !== null) {
            $this->MaxNamespaceNum = $param["MaxNamespaceNum"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }

        if (array_key_exists("MessageRetentionTime",$param) and $param["MessageRetentionTime"] !== null) {
            $this->MessageRetentionTime = $param["MessageRetentionTime"];
        }

        if (array_key_exists("MaxStorageCapacity",$param) and $param["MaxStorageCapacity"] !== null) {
            $this->MaxStorageCapacity = $param["MaxStorageCapacity"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("PublicEndPoint",$param) and $param["PublicEndPoint"] !== null) {
            $this->PublicEndPoint = $param["PublicEndPoint"];
        }

        if (array_key_exists("VpcEndPoint",$param) and $param["VpcEndPoint"] !== null) {
            $this->VpcEndPoint = $param["VpcEndPoint"];
        }

        if (array_key_exists("NamespaceNum",$param) and $param["NamespaceNum"] !== null) {
            $this->NamespaceNum = $param["NamespaceNum"];
        }

        if (array_key_exists("UsedStorageBudget",$param) and $param["UsedStorageBudget"] !== null) {
            $this->UsedStorageBudget = $param["UsedStorageBudget"];
        }

        if (array_key_exists("MaxPublishRateInMessages",$param) and $param["MaxPublishRateInMessages"] !== null) {
            $this->MaxPublishRateInMessages = $param["MaxPublishRateInMessages"];
        }

        if (array_key_exists("MaxDispatchRateInMessages",$param) and $param["MaxDispatchRateInMessages"] !== null) {
            $this->MaxDispatchRateInMessages = $param["MaxDispatchRateInMessages"];
        }

        if (array_key_exists("MaxPublishRateInBytes",$param) and $param["MaxPublishRateInBytes"] !== null) {
            $this->MaxPublishRateInBytes = $param["MaxPublishRateInBytes"];
        }

        if (array_key_exists("MaxDispatchRateInBytes",$param) and $param["MaxDispatchRateInBytes"] !== null) {
            $this->MaxDispatchRateInBytes = $param["MaxDispatchRateInBytes"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("MaxMessageDelayInSeconds",$param) and $param["MaxMessageDelayInSeconds"] !== null) {
            $this->MaxMessageDelayInSeconds = $param["MaxMessageDelayInSeconds"];
        }

        if (array_key_exists("PublicAccessEnabled",$param) and $param["PublicAccessEnabled"] !== null) {
            $this->PublicAccessEnabled = $param["PublicAccessEnabled"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }
    }
}
