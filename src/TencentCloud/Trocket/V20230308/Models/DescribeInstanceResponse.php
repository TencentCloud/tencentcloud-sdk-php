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
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceType(string $InstanceType) 设置实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
注意：此字段可能返回 null，表示取不到有效值。
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
 * @method integer getCreatedTime() 获取创建时间，秒为单位
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，秒为单位
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
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method string getSkuCode() 获取实例规格
 * @method void setSkuCode(string $SkuCode) 设置实例规格
 * @method string getPayMode() 获取计费模式
 * @method void setPayMode(string $PayMode) 设置计费模式
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeInstanceResponse extends AbstractModel
{
    /**
     * @var string 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
注意：此字段可能返回 null，表示取不到有效值。
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
     * @var integer 创建时间，秒为单位
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
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var string 实例规格
     */
    public $SkuCode;

    /**
     * @var string 计费模式
     */
    public $PayMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceType 实例类型，
EXPERIMENT 体验版
BASIC 基础版
PRO  专业版
PLATINUM 铂金版
注意：此字段可能返回 null，表示取不到有效值。
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
     * @param integer $CreatedTime 创建时间，秒为单位
     * @param float $SendReceiveRatio 消息发送接收比例
     * @param array $TagList 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EndpointList 接入点列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicQueueNumUpperLimit 主题队列数上限
     * @param integer $TopicQueueNumLowerLimit 主题队列数下限
     * @param string $Remark 备注信息
     * @param string $InstanceStatus 实例状态
     * @param string $SkuCode 实例规格
     * @param string $PayMode 计费模式
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
