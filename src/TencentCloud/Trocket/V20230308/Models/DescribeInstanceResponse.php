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
 * DescribeInstance返回参数结构体
 *
 * @method string getInstanceType() 获取实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method integer getTopicNum() 获取主题数量
 * @method void setTopicNum(integer $TopicNum) 设置主题数量
 * @method integer getTopicNumLimit() 获取实例最大主题数量
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置实例最大主题数量
 * @method integer getGroupNum() 获取消费组数量
 * @method void setGroupNum(integer $GroupNum) 设置消费组数量
 * @method integer getGroupNumLimit() 获取实例最大消费组数量
 * @method void setGroupNumLimit(integer $GroupNumLimit) 设置实例最大消费组数量
 * @method integer getMessageRetention() 获取消息保留时间，小时为单位
 * @method void setMessageRetention(integer $MessageRetention) 设置消息保留时间，小时为单位
 * @method integer getRetentionUpperLimit() 获取最大可调整消息保留时间，小时为单位
 * @method void setRetentionUpperLimit(integer $RetentionUpperLimit) 设置最大可调整消息保留时间，小时为单位
 * @method integer getRetentionLowerLimit() 获取最小可调整消息保留时间，小时为单位
 * @method void setRetentionLowerLimit(integer $RetentionLowerLimit) 设置最小可调整消息保留时间，小时为单位
 * @method integer getTpsLimit() 获取TPS限流值
 * @method void setTpsLimit(integer $TpsLimit) 设置TPS限流值
 * @method integer getScaledTpsLimit() 获取弹性TPS限流值
 * @method void setScaledTpsLimit(integer $ScaledTpsLimit) 设置弹性TPS限流值
 * @method integer getMaxMessageDelay() 获取延迟消息最长时间，小时为单位
 * @method void setMaxMessageDelay(integer $MaxMessageDelay) 设置延迟消息最长时间，小时为单位
 * @method integer getCreatedTime() 获取创建时间，**Unix时间戳（毫秒）**
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，**Unix时间戳（毫秒）**
 * @method float getSendReceiveRatio() 获取消息发送接收比例
 * @method void setSendReceiveRatio(float $SendReceiveRatio) 设置消息发送接收比例
 * @method array getTagList() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEndpointList() 获取接入点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpointList(array $EndpointList) 设置接入点列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicQueueNumUpperLimit() 获取主题队列数上限
 * @method void setTopicQueueNumUpperLimit(integer $TopicQueueNumUpperLimit) 设置主题队列数上限
 * @method integer getTopicQueueNumLowerLimit() 获取主题队列数下限
 * @method void setTopicQueueNumLowerLimit(integer $TopicQueueNumLowerLimit) 设置主题队列数下限
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method string getInstanceStatus() 获取实例状态，枚举值如下：

- RUNNING：运行中
- ABNORMAL：异常
- OVERDUE：隔离中
- DESTROYED：已销毁
- CREATING：创建中
- MODIFYING：变配中
- CREATE_FAILURE：创建失败
- MODIFY_FAILURE：变配失败
- DELETING：删除中
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态，枚举值如下：

- RUNNING：运行中
- ABNORMAL：异常
- OVERDUE：隔离中
- DESTROYED：已销毁
- CREATING：创建中
- MODIFYING：变配中
- CREATE_FAILURE：创建失败
- MODIFY_FAILURE：变配失败
- DELETING：删除中
 * @method string getSkuCode() 获取实例规格
 * @method void setSkuCode(string $SkuCode) 设置实例规格
 * @method string getPayMode() 获取计费模式，枚举值如下：

- POSTPAID：后付费按量计费
- PREPAID：预付费包年包月
 * @method void setPayMode(string $PayMode) 设置计费模式，枚举值如下：

- POSTPAID：后付费按量计费
- PREPAID：预付费包年包月
 * @method boolean getScaledTpsEnabled() 获取是否开启弹性TPS
 * @method void setScaledTpsEnabled(boolean $ScaledTpsEnabled) 设置是否开启弹性TPS
 * @method integer getRenewFlag() 获取预付费集群是否自动续费，枚举值如下：

- 0: 不自动续费
- 1: 自动续费
 * @method void setRenewFlag(integer $RenewFlag) 设置预付费集群是否自动续费，枚举值如下：

- 0: 不自动续费
- 1: 自动续费
 * @method integer getExpiryTime() 获取到期时间，**Unix时间戳（毫秒）**
 * @method void setExpiryTime(integer $ExpiryTime) 设置到期时间，**Unix时间戳（毫秒）**
 * @method integer getRoleNumLimit() 获取角色数量限制
 * @method void setRoleNumLimit(integer $RoleNumLimit) 设置角色数量限制
 * @method boolean getAclEnabled() 获取是否开启 ACL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAclEnabled(boolean $AclEnabled) 设置是否开启 ACL
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNumLowerLimit() 获取topic个数免费额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNumLowerLimit(integer $TopicNumLowerLimit) 设置topic个数免费额度
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNumUpperLimit() 获取最大可设置的topic个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicNumUpperLimit(integer $TopicNumUpperLimit) 设置最大可设置的topic个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneIds() 获取所属可用区列表，参考 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构。
 * @method void setZoneIds(array $ZoneIds) 设置所属可用区列表，参考 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构。
 * @method integer getNodeCount() 获取proxy节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNodeCount(integer $NodeCount) 设置proxy节点数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneScheduledList() 获取proxy调度详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneScheduledList(array $ZoneScheduledList) 设置proxy调度详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceResponse extends AbstractModel
{
    /**
     * @var string 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     */
    public $InstanceType;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var integer 主题数量
     */
    public $TopicNum;

    /**
     * @var integer 实例最大主题数量
     */
    public $TopicNumLimit;

    /**
     * @var integer 消费组数量
     */
    public $GroupNum;

    /**
     * @var integer 实例最大消费组数量
     */
    public $GroupNumLimit;

    /**
     * @var integer 消息保留时间，小时为单位
     */
    public $MessageRetention;

    /**
     * @var integer 最大可调整消息保留时间，小时为单位
     */
    public $RetentionUpperLimit;

    /**
     * @var integer 最小可调整消息保留时间，小时为单位
     */
    public $RetentionLowerLimit;

    /**
     * @var integer TPS限流值
     */
    public $TpsLimit;

    /**
     * @var integer 弹性TPS限流值
     */
    public $ScaledTpsLimit;

    /**
     * @var integer 延迟消息最长时间，小时为单位
     */
    public $MaxMessageDelay;

    /**
     * @var integer 创建时间，**Unix时间戳（毫秒）**
     */
    public $CreatedTime;

    /**
     * @var float 消息发送接收比例
     */
    public $SendReceiveRatio;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var array 接入点列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndpointList;

    /**
     * @var integer 主题队列数上限
     */
    public $TopicQueueNumUpperLimit;

    /**
     * @var integer 主题队列数下限
     */
    public $TopicQueueNumLowerLimit;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var string 实例状态，枚举值如下：

- RUNNING：运行中
- ABNORMAL：异常
- OVERDUE：隔离中
- DESTROYED：已销毁
- CREATING：创建中
- MODIFYING：变配中
- CREATE_FAILURE：创建失败
- MODIFY_FAILURE：变配失败
- DELETING：删除中
     */
    public $InstanceStatus;

    /**
     * @var string 实例规格
     */
    public $SkuCode;

    /**
     * @var string 计费模式，枚举值如下：

- POSTPAID：后付费按量计费
- PREPAID：预付费包年包月
     */
    public $PayMode;

    /**
     * @var boolean 是否开启弹性TPS
     */
    public $ScaledTpsEnabled;

    /**
     * @var integer 预付费集群是否自动续费，枚举值如下：

- 0: 不自动续费
- 1: 自动续费
     */
    public $RenewFlag;

    /**
     * @var integer 到期时间，**Unix时间戳（毫秒）**
     */
    public $ExpiryTime;

    /**
     * @var integer 角色数量限制
     */
    public $RoleNumLimit;

    /**
     * @var boolean 是否开启 ACL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AclEnabled;

    /**
     * @var integer topic个数免费额度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNumLowerLimit;

    /**
     * @var integer 最大可设置的topic个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicNumUpperLimit;

    /**
     * @var array 所属可用区列表，参考 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构。
     */
    public $ZoneIds;

    /**
     * @var integer proxy节点数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NodeCount;

    /**
     * @var array proxy调度详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneScheduledList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceType 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param integer $TopicNum 主题数量
     * @param integer $TopicNumLimit 实例最大主题数量
     * @param integer $GroupNum 消费组数量
     * @param integer $GroupNumLimit 实例最大消费组数量
     * @param integer $MessageRetention 消息保留时间，小时为单位
     * @param integer $RetentionUpperLimit 最大可调整消息保留时间，小时为单位
     * @param integer $RetentionLowerLimit 最小可调整消息保留时间，小时为单位
     * @param integer $TpsLimit TPS限流值
     * @param integer $ScaledTpsLimit 弹性TPS限流值
     * @param integer $MaxMessageDelay 延迟消息最长时间，小时为单位
     * @param integer $CreatedTime 创建时间，**Unix时间戳（毫秒）**
     * @param float $SendReceiveRatio 消息发送接收比例
     * @param array $TagList 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EndpointList 接入点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicQueueNumUpperLimit 主题队列数上限
     * @param integer $TopicQueueNumLowerLimit 主题队列数下限
     * @param string $Remark 备注信息
     * @param string $InstanceStatus 实例状态，枚举值如下：

- RUNNING：运行中
- ABNORMAL：异常
- OVERDUE：隔离中
- DESTROYED：已销毁
- CREATING：创建中
- MODIFYING：变配中
- CREATE_FAILURE：创建失败
- MODIFY_FAILURE：变配失败
- DELETING：删除中
     * @param string $SkuCode 实例规格
     * @param string $PayMode 计费模式，枚举值如下：

- POSTPAID：后付费按量计费
- PREPAID：预付费包年包月
     * @param boolean $ScaledTpsEnabled 是否开启弹性TPS
     * @param integer $RenewFlag 预付费集群是否自动续费，枚举值如下：

- 0: 不自动续费
- 1: 自动续费
     * @param integer $ExpiryTime 到期时间，**Unix时间戳（毫秒）**
     * @param integer $RoleNumLimit 角色数量限制
     * @param boolean $AclEnabled 是否开启 ACL
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNumLowerLimit topic个数免费额度
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNumUpperLimit 最大可设置的topic个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneIds 所属可用区列表，参考 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构。
     * @param integer $NodeCount proxy节点数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneScheduledList proxy调度详情
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("GroupNumLimit",$param) and $param["GroupNumLimit"] !== null) {
            $this->GroupNumLimit = $param["GroupNumLimit"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("RetentionUpperLimit",$param) and $param["RetentionUpperLimit"] !== null) {
            $this->RetentionUpperLimit = $param["RetentionUpperLimit"];
        }

        if (array_key_exists("RetentionLowerLimit",$param) and $param["RetentionLowerLimit"] !== null) {
            $this->RetentionLowerLimit = $param["RetentionLowerLimit"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ScaledTpsLimit",$param) and $param["ScaledTpsLimit"] !== null) {
            $this->ScaledTpsLimit = $param["ScaledTpsLimit"];
        }

        if (array_key_exists("MaxMessageDelay",$param) and $param["MaxMessageDelay"] !== null) {
            $this->MaxMessageDelay = $param["MaxMessageDelay"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("SendReceiveRatio",$param) and $param["SendReceiveRatio"] !== null) {
            $this->SendReceiveRatio = $param["SendReceiveRatio"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("EndpointList",$param) and $param["EndpointList"] !== null) {
            $this->EndpointList = [];
            foreach ($param["EndpointList"] as $key => $value){
                $obj = new Endpoint();
                $obj->deserialize($value);
                array_push($this->EndpointList, $obj);
            }
        }

        if (array_key_exists("TopicQueueNumUpperLimit",$param) and $param["TopicQueueNumUpperLimit"] !== null) {
            $this->TopicQueueNumUpperLimit = $param["TopicQueueNumUpperLimit"];
        }

        if (array_key_exists("TopicQueueNumLowerLimit",$param) and $param["TopicQueueNumLowerLimit"] !== null) {
            $this->TopicQueueNumLowerLimit = $param["TopicQueueNumLowerLimit"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ScaledTpsEnabled",$param) and $param["ScaledTpsEnabled"] !== null) {
            $this->ScaledTpsEnabled = $param["ScaledTpsEnabled"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("RoleNumLimit",$param) and $param["RoleNumLimit"] !== null) {
            $this->RoleNumLimit = $param["RoleNumLimit"];
        }

        if (array_key_exists("AclEnabled",$param) and $param["AclEnabled"] !== null) {
            $this->AclEnabled = $param["AclEnabled"];
        }

        if (array_key_exists("TopicNumLowerLimit",$param) and $param["TopicNumLowerLimit"] !== null) {
            $this->TopicNumLowerLimit = $param["TopicNumLowerLimit"];
        }

        if (array_key_exists("TopicNumUpperLimit",$param) and $param["TopicNumUpperLimit"] !== null) {
            $this->TopicNumUpperLimit = $param["TopicNumUpperLimit"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("ZoneScheduledList",$param) and $param["ZoneScheduledList"] !== null) {
            $this->ZoneScheduledList = [];
            foreach ($param["ZoneScheduledList"] as $key => $value){
                $obj = new ZoneScheduledItem();
                $obj->deserialize($value);
                array_push($this->ZoneScheduledList, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
