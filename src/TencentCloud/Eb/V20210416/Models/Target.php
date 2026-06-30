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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Target信息
 *
 * @method string getType() 获取<p>目标类型</p>
 * @method void setType(string $Type) 设置<p>目标类型</p>
 * @method string getEventBusId() 获取<p>事件集ID</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集ID</p>
 * @method string getTargetId() 获取<p>目标ID</p>
 * @method void setTargetId(string $TargetId) 设置<p>目标ID</p>
 * @method TargetDescription getTargetDescription() 获取<p>目标描述</p>
 * @method void setTargetDescription(TargetDescription $TargetDescription) 设置<p>目标描述</p>
 * @method string getRuleId() 获取<p>事件规则ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>事件规则ID</p>
 * @method boolean getEnableBatchDelivery() 获取<p>开启批量投递使能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableBatchDelivery(boolean $EnableBatchDelivery) 设置<p>开启批量投递使能</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchTimeout() 获取<p>批量投递最长等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchTimeout(integer $BatchTimeout) 设置<p>批量投递最长等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBatchEventCount() 获取<p>批量投递最大事件条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchEventCount(integer $BatchEventCount) 设置<p>批量投递最大事件条数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class Target extends AbstractModel
{
    /**
     * @var string <p>目标类型</p>
     */
    public $Type;

    /**
     * @var string <p>事件集ID</p>
     */
    public $EventBusId;

    /**
     * @var string <p>目标ID</p>
     */
    public $TargetId;

    /**
     * @var TargetDescription <p>目标描述</p>
     */
    public $TargetDescription;

    /**
     * @var string <p>事件规则ID</p>
     */
    public $RuleId;

    /**
     * @var boolean <p>开启批量投递使能</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableBatchDelivery;

    /**
     * @var integer <p>批量投递最长等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchTimeout;

    /**
     * @var integer <p>批量投递最大事件条数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchEventCount;

    /**
     * @param string $Type <p>目标类型</p>
     * @param string $EventBusId <p>事件集ID</p>
     * @param string $TargetId <p>目标ID</p>
     * @param TargetDescription $TargetDescription <p>目标描述</p>
     * @param string $RuleId <p>事件规则ID</p>
     * @param boolean $EnableBatchDelivery <p>开启批量投递使能</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchTimeout <p>批量投递最长等待时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BatchEventCount <p>批量投递最大事件条数</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("TargetId",$param) and $param["TargetId"] !== null) {
            $this->TargetId = $param["TargetId"];
        }

        if (array_key_exists("TargetDescription",$param) and $param["TargetDescription"] !== null) {
            $this->TargetDescription = new TargetDescription();
            $this->TargetDescription->deserialize($param["TargetDescription"]);
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("EnableBatchDelivery",$param) and $param["EnableBatchDelivery"] !== null) {
            $this->EnableBatchDelivery = $param["EnableBatchDelivery"];
        }

        if (array_key_exists("BatchTimeout",$param) and $param["BatchTimeout"] !== null) {
            $this->BatchTimeout = $param["BatchTimeout"];
        }

        if (array_key_exists("BatchEventCount",$param) and $param["BatchEventCount"] !== null) {
            $this->BatchEventCount = $param["BatchEventCount"];
        }
    }
}
