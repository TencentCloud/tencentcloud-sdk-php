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
 * 实例列表页中的实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getVersion() 获取实例版本
 * @method void setVersion(string $Version) 设置实例版本
 * @method string getInstanceType() 获取实例类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
 * @method string getInstanceStatus() 获取实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
DESTROYED，已删除
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
DESTROYED，已删除
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
 * @method integer getTopicNumLimit() 获取实例主题数上限
 * @method void setTopicNumLimit(integer $TopicNumLimit) 设置实例主题数上限
 * @method integer getGroupNumLimit() 获取实例消费组数量上限
 * @method void setGroupNumLimit(integer $GroupNumLimit) 设置实例消费组数量上限
 * @method string getPayMode() 获取计费模式，
POSTPAID，按量计费
PREPAID，包年包月
 * @method void setPayMode(string $PayMode) 设置计费模式，
POSTPAID，按量计费
PREPAID，包年包月
 * @method integer getExpiryTime() 获取到期时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiryTime(integer $ExpiryTime) 设置到期时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNum() 获取主题数量
 * @method void setTopicNum(integer $TopicNum) 设置主题数量
 * @method integer getGroupNum() 获取消费组数量
 * @method void setGroupNum(integer $GroupNum) 设置消费组数量
 * @method array getTagList() 获取标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagList(array $TagList) 设置标签列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkuCode() 获取商品规格
 * @method void setSkuCode(string $SkuCode) 设置商品规格
 * @method integer getTpsLimit() 获取TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTpsLimit(integer $TpsLimit) 设置TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScaledTpsLimit() 获取弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaledTpsLimit(integer $ScaledTpsLimit) 设置弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMessageRetention() 获取消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMessageRetention(integer $MessageRetention) 设置消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxMessageDelay() 获取延迟消息最大时长，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxMessageDelay(integer $MaxMessageDelay) 设置延迟消息最大时长，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceItem extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例版本
     */
    public $Version;

    /**
     * @var string 实例类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
     */
    public $InstanceType;

    /**
     * @var string 实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
DESTROYED，已删除
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
     */
    public $InstanceStatus;

    /**
     * @var integer 实例主题数上限
     */
    public $TopicNumLimit;

    /**
     * @var integer 实例消费组数量上限
     */
    public $GroupNumLimit;

    /**
     * @var string 计费模式，
POSTPAID，按量计费
PREPAID，包年包月
     */
    public $PayMode;

    /**
     * @var integer 到期时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiryTime;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 主题数量
     */
    public $TopicNum;

    /**
     * @var integer 消费组数量
     */
    public $GroupNum;

    /**
     * @var array 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagList;

    /**
     * @var string 商品规格
     */
    public $SkuCode;

    /**
     * @var integer TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TpsLimit;

    /**
     * @var integer 弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaledTpsLimit;

    /**
     * @var integer 消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MessageRetention;

    /**
     * @var integer 延迟消息最大时长，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxMessageDelay;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Version 实例版本
     * @param string $InstanceType 实例类型，
EXPERIMENT，体验版
BASIC，基础版
PRO，专业版
PLATINUM，铂金版
     * @param string $InstanceStatus 实例状态，
RUNNING, 运行中
MAINTAINING，维护中
ABNORMAL，异常
OVERDUE，欠费
DESTROYED，已删除
CREATING，创建中
MODIFYING，变配中
CREATE_FAILURE，创建失败
MODIFY_FAILURE，变配失败
DELETING，删除中
     * @param integer $TopicNumLimit 实例主题数上限
     * @param integer $GroupNumLimit 实例消费组数量上限
     * @param string $PayMode 计费模式，
POSTPAID，按量计费
PREPAID，包年包月
     * @param integer $ExpiryTime 到期时间，秒为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNum 主题数量
     * @param integer $GroupNum 消费组数量
     * @param array $TagList 标签列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkuCode 商品规格
     * @param integer $TpsLimit TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScaledTpsLimit 弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MessageRetention 消息保留时间，小时为单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxMessageDelay 延迟消息最大时长，小时为单位
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("TopicNumLimit",$param) and $param["TopicNumLimit"] !== null) {
            $this->TopicNumLimit = $param["TopicNumLimit"];
        }

        if (array_key_exists("GroupNumLimit",$param) and $param["GroupNumLimit"] !== null) {
            $this->GroupNumLimit = $param["GroupNumLimit"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("ExpiryTime",$param) and $param["ExpiryTime"] !== null) {
            $this->ExpiryTime = $param["ExpiryTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("GroupNum",$param) and $param["GroupNum"] !== null) {
            $this->GroupNum = $param["GroupNum"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("ScaledTpsLimit",$param) and $param["ScaledTpsLimit"] !== null) {
            $this->ScaledTpsLimit = $param["ScaledTpsLimit"];
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("MaxMessageDelay",$param) and $param["MaxMessageDelay"] !== null) {
            $this->MaxMessageDelay = $param["MaxMessageDelay"];
        }
    }
}
