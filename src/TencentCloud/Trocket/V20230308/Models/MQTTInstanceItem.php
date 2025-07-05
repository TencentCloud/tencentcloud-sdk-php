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
 * MQTT 实例信息
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getVersion() 获取实例版本
 * @method void setVersion(string $Version) 设置实例版本
 * @method string getInstanceType() 获取实例类型，
BASIC，基础版
PRO，专业版
 * @method void setInstanceType(string $InstanceType) 设置实例类型，
BASIC，基础版
PRO，专业版
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
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTopicNum() 获取主题数量
 * @method void setTopicNum(integer $TopicNum) 设置主题数量
 * @method string getSkuCode() 获取商品规格
 * @method void setSkuCode(string $SkuCode) 设置商品规格
 * @method integer getTpsLimit() 获取弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTpsLimit(integer $TpsLimit) 设置弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubscriptionNumLimit() 获取订阅关系上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubscriptionNumLimit(integer $SubscriptionNumLimit) 设置订阅关系上限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClientNumLimit() 获取客户端连接数上线
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClientNumLimit(integer $ClientNumLimit) 设置客户端连接数上线
注意：此字段可能返回 null，表示取不到有效值。
 */
class MQTTInstanceItem extends AbstractModel
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
BASIC，基础版
PRO，专业版
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
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 主题数量
     */
    public $TopicNum;

    /**
     * @var string 商品规格
     */
    public $SkuCode;

    /**
     * @var integer 弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TpsLimit;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 订阅关系上限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubscriptionNumLimit;

    /**
     * @var integer 客户端连接数上线
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClientNumLimit;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $Version 实例版本
     * @param string $InstanceType 实例类型，
BASIC，基础版
PRO，专业版
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
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TopicNum 主题数量
     * @param string $SkuCode 商品规格
     * @param integer $TpsLimit 弹性TPS限流值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubscriptionNumLimit 订阅关系上限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClientNumLimit 客户端连接数上线
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

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("TpsLimit",$param) and $param["TpsLimit"] !== null) {
            $this->TpsLimit = $param["TpsLimit"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("SubscriptionNumLimit",$param) and $param["SubscriptionNumLimit"] !== null) {
            $this->SubscriptionNumLimit = $param["SubscriptionNumLimit"];
        }

        if (array_key_exists("ClientNumLimit",$param) and $param["ClientNumLimit"] !== null) {
            $this->ClientNumLimit = $param["ClientNumLimit"];
        }
    }
}
