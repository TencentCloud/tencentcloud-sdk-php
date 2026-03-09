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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 泳道组
 *
 * @method string getName() 获取泳道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置泳道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getID() 获取泳道组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置泳道组ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTrafficEntries() 获取泳道入口服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrafficEntries(array $TrafficEntries) 设置泳道入口服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDestinations() 获取泳道服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinations(array $Destinations) 设置泳道服务列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取泳道组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置泳道组描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取该泳道组下的所有泳道规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置该泳道组下的所有泳道规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRevision() 获取规则内容摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRevision(string $Revision) 设置规则内容摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsistency() 获取规则一致性状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsistency(string $Consistency) 设置规则一致性状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class GovernanceLaneGroup extends AbstractModel
{
    /**
     * @var string 泳道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 泳道组ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var array 泳道入口服务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrafficEntries;

    /**
     * @var array 泳道服务列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Destinations;

    /**
     * @var string 泳道组描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 该泳道组下的所有泳道规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var string 规则内容摘要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Revision;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 规则一致性状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Consistency;

    /**
     * @param string $Name 泳道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ID 泳道组ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TrafficEntries 泳道入口服务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Destinations 泳道服务列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 泳道组描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules 该泳道组下的所有泳道规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Revision 规则内容摘要
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Consistency 规则一致性状态
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("TrafficEntries",$param) and $param["TrafficEntries"] !== null) {
            $this->TrafficEntries = [];
            foreach ($param["TrafficEntries"] as $key => $value){
                $obj = new LaneTrafficEntry();
                $obj->deserialize($value);
                array_push($this->TrafficEntries, $obj);
            }
        }

        if (array_key_exists("Destinations",$param) and $param["Destinations"] !== null) {
            $this->Destinations = [];
            foreach ($param["Destinations"] as $key => $value){
                $obj = new GovernanceServiceDestination();
                $obj->deserialize($value);
                array_push($this->Destinations, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new GovernanceLaneRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = $param["Consistency"];
        }
    }
}
