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
namespace TencentCloud\Hasim\V20210716\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动化规则详细信息
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getID() 获取规则ID
 * @method void setID(integer $ID) 设置规则ID
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeletedAt() 获取删除时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeletedAt(string $DeletedAt) 设置删除时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置规则类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsActive() 获取是否激活
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsActive(boolean $IsActive) 设置是否激活
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNotice() 获取触发动作：1 邮件 2 API请求 5 停卡 6 地图标识为盲点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotice(integer $Notice) 设置触发动作：1 邮件 2 API请求 5 停卡 6 地图标识为盲点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取回调API地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置回调API地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDataThreshold() 获取用量类：用量阈值,单位MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataThreshold(integer $DataThreshold) 设置用量类：用量阈值,单位MB
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDistrict() 获取行政区类型：1. 省份 2. 城市 3. 区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistrict(integer $District) 设置行政区类型：1. 省份 2. 城市 3. 区
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDistance() 获取移动距离阈值，单位KM
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistance(integer $Distance) 设置移动距离阈值，单位KM
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSignalStrength() 获取信号强度阈值(-dbm）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignalStrength(integer $SignalStrength) 设置信号强度阈值(-dbm）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLostDay() 获取盲点阈值天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLostDay(integer $LostDay) 设置盲点阈值天数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTagIDs() 获取标签ID集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagIDs(array $TagIDs) 设置标签ID集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSalePlan() 获取资费信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSalePlan(string $SalePlan) 设置资费信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleDetail extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 规则ID
     */
    public $ID;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 删除时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeletedAt;

    /**
     * @var integer 规则类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var boolean 是否激活
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsActive;

    /**
     * @var integer 触发动作：1 邮件 2 API请求 5 停卡 6 地图标识为盲点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Notice;

    /**
     * @var string 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 回调API地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var integer 用量类：用量阈值,单位MB
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataThreshold;

    /**
     * @var integer 行政区类型：1. 省份 2. 城市 3. 区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $District;

    /**
     * @var integer 移动距离阈值，单位KM
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Distance;

    /**
     * @var integer 信号强度阈值(-dbm）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignalStrength;

    /**
     * @var integer 盲点阈值天数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LostDay;

    /**
     * @var array 标签ID集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagIDs;

    /**
     * @var string 资费信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SalePlan;

    /**
     * @param string $Name 规则名称
     * @param integer $ID 规则ID
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeletedAt 删除时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 规则类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsActive 是否激活
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Notice 触发动作：1 邮件 2 API请求 5 停卡 6 地图标识为盲点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 回调API地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DataThreshold 用量类：用量阈值,单位MB
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $District 行政区类型：1. 省份 2. 城市 3. 区
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Distance 移动距离阈值，单位KM
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SignalStrength 信号强度阈值(-dbm）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LostDay 盲点阈值天数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TagIDs 标签ID集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SalePlan 资费信息
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

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("DeletedAt",$param) and $param["DeletedAt"] !== null) {
            $this->DeletedAt = $param["DeletedAt"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("Notice",$param) and $param["Notice"] !== null) {
            $this->Notice = $param["Notice"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("DataThreshold",$param) and $param["DataThreshold"] !== null) {
            $this->DataThreshold = $param["DataThreshold"];
        }

        if (array_key_exists("District",$param) and $param["District"] !== null) {
            $this->District = $param["District"];
        }

        if (array_key_exists("Distance",$param) and $param["Distance"] !== null) {
            $this->Distance = $param["Distance"];
        }

        if (array_key_exists("SignalStrength",$param) and $param["SignalStrength"] !== null) {
            $this->SignalStrength = $param["SignalStrength"];
        }

        if (array_key_exists("LostDay",$param) and $param["LostDay"] !== null) {
            $this->LostDay = $param["LostDay"];
        }

        if (array_key_exists("TagIDs",$param) and $param["TagIDs"] !== null) {
            $this->TagIDs = $param["TagIDs"];
        }

        if (array_key_exists("SalePlan",$param) and $param["SalePlan"] !== null) {
            $this->SalePlan = $param["SalePlan"];
        }
    }
}
