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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 防火墙实例运行状态
 *
 * @method string getCfwInsId() 获取防火墙实例id
 * @method void setCfwInsId(string $CfwInsId) 设置防火墙实例id
 * @method string getFwType() 获取防火墙类型，nat：nat防火墙；ew：vpc间防火墙
 * @method void setFwType(string $FwType) 设置防火墙类型，nat：nat防火墙；ew：vpc间防火墙
 * @method string getRegion() 获取实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中
 * @method void setStatus(string $Status) 设置实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中
 * @method string getEventTime() 获取事件时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventTime(string $EventTime) 设置事件时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecoverTime() 获取恢复时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecoverTime(string $RecoverTime) 设置恢复时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCfwInsName() 获取实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCfwInsName(string $CfwInsName) 设置实例名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrafficMode() 获取Normal: 正常模式
OnlyRoute: 透明模式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrafficMode(string $TrafficMode) 设置Normal: 正常模式
OnlyRoute: 透明模式
注意：此字段可能返回 null，表示取不到有效值。
 */
class CfwInsStatus extends AbstractModel
{
    /**
     * @var string 防火墙实例id
     */
    public $CfwInsId;

    /**
     * @var string 防火墙类型，nat：nat防火墙；ew：vpc间防火墙
     */
    public $FwType;

    /**
     * @var string 实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中
     */
    public $Status;

    /**
     * @var string 事件时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventTime;

    /**
     * @var string 恢复时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecoverTime;

    /**
     * @var string 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CfwInsName;

    /**
     * @var string Normal: 正常模式
OnlyRoute: 透明模式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrafficMode;

    /**
     * @param string $CfwInsId 防火墙实例id
     * @param string $FwType 防火墙类型，nat：nat防火墙；ew：vpc间防火墙
     * @param string $Region 实例所属地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 实例运行状态，Running：正常运行；BypassAutoFix：bypass修复；Updating：升级中；Expand：扩容中；BypassManual：手动触发bypass中；BypassAuto：自动触发bypass中
     * @param string $EventTime 事件时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecoverTime 恢复时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CfwInsName 实例名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrafficMode Normal: 正常模式
OnlyRoute: 透明模式
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
        if (array_key_exists("CfwInsId",$param) and $param["CfwInsId"] !== null) {
            $this->CfwInsId = $param["CfwInsId"];
        }

        if (array_key_exists("FwType",$param) and $param["FwType"] !== null) {
            $this->FwType = $param["FwType"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("RecoverTime",$param) and $param["RecoverTime"] !== null) {
            $this->RecoverTime = $param["RecoverTime"];
        }

        if (array_key_exists("CfwInsName",$param) and $param["CfwInsName"] !== null) {
            $this->CfwInsName = $param["CfwInsName"];
        }

        if (array_key_exists("TrafficMode",$param) and $param["TrafficMode"] !== null) {
            $this->TrafficMode = $param["TrafficMode"];
        }
    }
}
