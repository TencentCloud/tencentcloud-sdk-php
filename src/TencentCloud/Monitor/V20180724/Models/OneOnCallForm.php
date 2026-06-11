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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 排班详情
 *
 * @method string getOnCallFormID() 获取值班id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnCallFormID(string $OnCallFormID) 设置值班id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOnCallFormName() 获取值班名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnCallFormName(string $OnCallFormName) 设置值班名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOnCallFormDesc() 获取值班描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnCallFormDesc(string $OnCallFormDesc) 设置值班描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStaffInfos() 获取值班人员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStaffInfos(array $StaffInfos) 设置值班人员
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRotationType() 获取轮班类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationType(string $RotationType) 设置轮班类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShiftTime() 获取换班时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShiftTime(string $ShiftTime) 设置换班时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEffectiveStartTime() 获取值班有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectiveStartTime(integer $EffectiveStartTime) 设置值班有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEffectiveEndTime() 获取值班有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectiveEndTime(integer $EffectiveEndTime) 设置值班有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimeZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(float $TimeZone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCoverStaffInfos() 获取替班信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoverStaffInfos(array $CoverStaffInfos) 设置替班信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取模板绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置模板绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class OneOnCallForm extends AbstractModel
{
    /**
     * @var string 值班id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnCallFormID;

    /**
     * @var string 值班名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnCallFormName;

    /**
     * @var string 值班描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnCallFormDesc;

    /**
     * @var array 值班人员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StaffInfos;

    /**
     * @var string 轮班类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationType;

    /**
     * @var string 换班时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShiftTime;

    /**
     * @var integer 值班有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectiveStartTime;

    /**
     * @var integer 值班有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectiveEndTime;

    /**
     * @var float 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var array 替班信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoverStaffInfos;

    /**
     * @var array 模板绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $OnCallFormID 值班id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OnCallFormName 值班名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OnCallFormDesc 值班描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StaffInfos 值班人员
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RotationType 轮班类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShiftTime 换班时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EffectiveStartTime 值班有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EffectiveEndTime 值班有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimeZone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CoverStaffInfos 替班信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 模板绑定的标签
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
        if (array_key_exists("OnCallFormID",$param) and $param["OnCallFormID"] !== null) {
            $this->OnCallFormID = $param["OnCallFormID"];
        }

        if (array_key_exists("OnCallFormName",$param) and $param["OnCallFormName"] !== null) {
            $this->OnCallFormName = $param["OnCallFormName"];
        }

        if (array_key_exists("OnCallFormDesc",$param) and $param["OnCallFormDesc"] !== null) {
            $this->OnCallFormDesc = $param["OnCallFormDesc"];
        }

        if (array_key_exists("StaffInfos",$param) and $param["StaffInfos"] !== null) {
            $this->StaffInfos = [];
            foreach ($param["StaffInfos"] as $key => $value){
                $obj = new StaffInfo();
                $obj->deserialize($value);
                array_push($this->StaffInfos, $obj);
            }
        }

        if (array_key_exists("RotationType",$param) and $param["RotationType"] !== null) {
            $this->RotationType = $param["RotationType"];
        }

        if (array_key_exists("ShiftTime",$param) and $param["ShiftTime"] !== null) {
            $this->ShiftTime = $param["ShiftTime"];
        }

        if (array_key_exists("EffectiveStartTime",$param) and $param["EffectiveStartTime"] !== null) {
            $this->EffectiveStartTime = $param["EffectiveStartTime"];
        }

        if (array_key_exists("EffectiveEndTime",$param) and $param["EffectiveEndTime"] !== null) {
            $this->EffectiveEndTime = $param["EffectiveEndTime"];
        }

        if (array_key_exists("TimeZone",$param) and $param["TimeZone"] !== null) {
            $this->TimeZone = $param["TimeZone"];
        }

        if (array_key_exists("CoverStaffInfos",$param) and $param["CoverStaffInfos"] !== null) {
            $this->CoverStaffInfos = [];
            foreach ($param["CoverStaffInfos"] as $key => $value){
                $obj = new CoverStaffInfo();
                $obj->deserialize($value);
                array_push($this->CoverStaffInfos, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
