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
 * 泳道规则
 *
 * @method string getID() 获取泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取泳道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置泳道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaneGroup() 获取泳道所属泳道组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneGroup(string $LaneGroup) 设置泳道所属泳道组
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnable() 获取泳道规则启用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置泳道规则启用状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTrafficLabels() 获取流量标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrafficLabels(array $TrafficLabels) 设置流量标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTrafficMatchMode() 获取多个流量标签匹配方式
AND：与
OR：或
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrafficMatchMode(string $TrafficMatchMode) 设置多个流量标签匹配方式
AND：与
OR：或
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaneMatchMode() 获取泳道匹配方式
STRICT：严格匹配
PERMISSIVE：宽松匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneMatchMode(string $LaneMatchMode) 设置泳道匹配方式
STRICT：严格匹配
PERMISSIVE：宽松匹配
注意：此字段可能返回 null，表示取不到有效值。
 * @method TrafficGray getTrafficGray() 获取泳道灰度规则
 * @method void setTrafficGray(TrafficGray $TrafficGray) 设置泳道灰度规则
 * @method string getDescription() 获取泳道规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置泳道规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLaneLabelValue() 获取泳道标签内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLaneLabelValue(string $LaneLabelValue) 设置泳道标签内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnableTime() 获取启用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableTime(string $EnableTime) 设置启用时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPriority() 获取泳道规则优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriority(integer $Priority) 设置泳道规则优先级
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRevision() 获取规则摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRevision(string $Revision) 设置规则摘要
注意：此字段可能返回 null，表示取不到有效值。
 */
class GovernanceLaneRule extends AbstractModel
{
    /**
     * @var string 泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 泳道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 泳道所属泳道组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneGroup;

    /**
     * @var boolean 泳道规则启用状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var array 流量标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrafficLabels;

    /**
     * @var string 多个流量标签匹配方式
AND：与
OR：或
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrafficMatchMode;

    /**
     * @var string 泳道匹配方式
STRICT：严格匹配
PERMISSIVE：宽松匹配
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneMatchMode;

    /**
     * @var TrafficGray 泳道灰度规则
     */
    public $TrafficGray;

    /**
     * @var string 泳道规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 泳道标签内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LaneLabelValue;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 启用时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableTime;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var integer 泳道规则优先级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Priority;

    /**
     * @var string 规则摘要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Revision;

    /**
     * @param string $ID 泳道规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 泳道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaneGroup 泳道所属泳道组
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enable 泳道规则启用状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TrafficLabels 流量标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TrafficMatchMode 多个流量标签匹配方式
AND：与
OR：或
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaneMatchMode 泳道匹配方式
STRICT：严格匹配
PERMISSIVE：宽松匹配
注意：此字段可能返回 null，表示取不到有效值。
     * @param TrafficGray $TrafficGray 泳道灰度规则
     * @param string $Description 泳道规则描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LaneLabelValue 泳道标签内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnableTime 启用时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Priority 泳道规则优先级
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Revision 规则摘要
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("LaneGroup",$param) and $param["LaneGroup"] !== null) {
            $this->LaneGroup = $param["LaneGroup"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("TrafficLabels",$param) and $param["TrafficLabels"] !== null) {
            $this->TrafficLabels = [];
            foreach ($param["TrafficLabels"] as $key => $value){
                $obj = new Argument();
                $obj->deserialize($value);
                array_push($this->TrafficLabels, $obj);
            }
        }

        if (array_key_exists("TrafficMatchMode",$param) and $param["TrafficMatchMode"] !== null) {
            $this->TrafficMatchMode = $param["TrafficMatchMode"];
        }

        if (array_key_exists("LaneMatchMode",$param) and $param["LaneMatchMode"] !== null) {
            $this->LaneMatchMode = $param["LaneMatchMode"];
        }

        if (array_key_exists("TrafficGray",$param) and $param["TrafficGray"] !== null) {
            $this->TrafficGray = new TrafficGray();
            $this->TrafficGray->deserialize($param["TrafficGray"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("LaneLabelValue",$param) and $param["LaneLabelValue"] !== null) {
            $this->LaneLabelValue = $param["LaneLabelValue"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EnableTime",$param) and $param["EnableTime"] !== null) {
            $this->EnableTime = $param["EnableTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Revision",$param) and $param["Revision"] !== null) {
            $this->Revision = $param["Revision"];
        }
    }
}
