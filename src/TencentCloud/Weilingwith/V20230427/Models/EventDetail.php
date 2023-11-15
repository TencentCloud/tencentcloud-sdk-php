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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件详细信息
 *
 * @method integer getId() 获取事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置事件id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取事件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置事件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerType() 获取事件触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerType(string $TriggerType) 设置事件触发类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTriggerCondition() 获取事件触发条件，返回为x-json后的字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerCondition(string $TriggerCondition) 设置事件触发条件，返回为x-json后的字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidPeriod() 获取有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidPeriod(string $ValidPeriod) 设置有效期
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLinkRuleSet() 获取关联规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkRuleSet(array $LinkRuleSet) 设置关联规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeviceType() 获取设备类型，当触发类型为deviceType时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeviceType(string $DeviceType) 设置设备类型，当触发类型为deviceType时返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWID() 获取设备的wid，当触发类型是device返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWID(string $WID) 设置设备的wid，当触发类型是device返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class EventDetail extends AbstractModel
{
    /**
     * @var integer 事件id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 事件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 事件触发类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerType;

    /**
     * @var string 事件触发条件，返回为x-json后的字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerCondition;

    /**
     * @var string 有效期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidPeriod;

    /**
     * @var array 关联规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkRuleSet;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 设备类型，当触发类型为deviceType时返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeviceType;

    /**
     * @var string 设备的wid，当触发类型是device返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WID;

    /**
     * @param integer $Id 事件id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 事件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerType 事件触发类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TriggerCondition 事件触发条件，返回为x-json后的字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidPeriod 有效期
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LinkRuleSet 关联规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeviceType 设备类型，当触发类型为deviceType时返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WID 设备的wid，当触发类型是device返回
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("TriggerCondition",$param) and $param["TriggerCondition"] !== null) {
            $this->TriggerCondition = $param["TriggerCondition"];
        }

        if (array_key_exists("ValidPeriod",$param) and $param["ValidPeriod"] !== null) {
            $this->ValidPeriod = $param["ValidPeriod"];
        }

        if (array_key_exists("LinkRuleSet",$param) and $param["LinkRuleSet"] !== null) {
            $this->LinkRuleSet = [];
            foreach ($param["LinkRuleSet"] as $key => $value){
                $obj = new LinkRule();
                $obj->deserialize($value);
                array_push($this->LinkRuleSet, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("WID",$param) and $param["WID"] !== null) {
            $this->WID = $param["WID"];
        }
    }
}
