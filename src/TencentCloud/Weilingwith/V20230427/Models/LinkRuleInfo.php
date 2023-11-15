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
 * 联动规则信息
 *
 * @method integer getId() 获取联动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置联动id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取联动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置联动名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventSet() 获取事件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventSet(array $EventSet) 设置事件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActionSet() 获取动作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActionSet(array $ActionSet) 设置动作列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态：0开，-1关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态：0开，-1关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBeginDate() 获取起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBeginDate(string $BeginDate) 设置起始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndDate() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndDate(string $EndDate) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValidPeriod() 获取有效周期内容,有效字段为x-json后的字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValidPeriod(string $ValidPeriod) 设置有效周期内容,有效字段为x-json后的字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class LinkRuleInfo extends AbstractModel
{
    /**
     * @var integer 联动id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 联动名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 事件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventSet;

    /**
     * @var array 动作列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ActionSet;

    /**
     * @var integer 状态：0开，-1关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BeginDate;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndDate;

    /**
     * @var string 有效周期内容,有效字段为x-json后的字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValidPeriod;

    /**
     * @param integer $Id 联动id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 联动名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventSet 事件列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ActionSet 动作列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态：0开，-1关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BeginDate 起始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndDate 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValidPeriod 有效周期内容,有效字段为x-json后的字段
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

        if (array_key_exists("EventSet",$param) and $param["EventSet"] !== null) {
            $this->EventSet = [];
            foreach ($param["EventSet"] as $key => $value){
                $obj = new Event();
                $obj->deserialize($value);
                array_push($this->EventSet, $obj);
            }
        }

        if (array_key_exists("ActionSet",$param) and $param["ActionSet"] !== null) {
            $this->ActionSet = [];
            foreach ($param["ActionSet"] as $key => $value){
                $obj = new Action();
                $obj->deserialize($value);
                array_push($this->ActionSet, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BeginDate",$param) and $param["BeginDate"] !== null) {
            $this->BeginDate = $param["BeginDate"];
        }

        if (array_key_exists("EndDate",$param) and $param["EndDate"] !== null) {
            $this->EndDate = $param["EndDate"];
        }

        if (array_key_exists("ValidPeriod",$param) and $param["ValidPeriod"] !== null) {
            $this->ValidPeriod = $param["ValidPeriod"];
        }
    }
}
