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
 * 排班信息
 *
 * @method string getOnCallFormID() 获取排班id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnCallFormID(string $OnCallFormID) 设置排班id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOnCallFormName() 获取排班名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnCallFormName(string $OnCallFormName) 设置排班名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOnCallFormDesc() 获取排班描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOnCallFormDesc(string $OnCallFormDesc) 设置排班描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRotationType() 获取轮值类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationType(string $RotationType) 设置轮值类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getShiftTime() 获取换班时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShiftTime(string $ShiftTime) 设置换班时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEffectiveStartTime() 获取有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectiveStartTime(integer $EffectiveStartTime) 设置有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEffectiveEndTime() 获取有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEffectiveEndTime(integer $EffectiveEndTime) 设置有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTimeZone() 获取时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZone(float $TimeZone) 设置时区
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCurrOnCallStaffs() 获取当前值班人员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurrOnCallStaffs(array $CurrOnCallStaffs) 设置当前值班人员
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取模板绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置模板绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
 */
class OnCallForm extends AbstractModel
{
    /**
     * @var string 排班id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnCallFormID;

    /**
     * @var string 排班名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnCallFormName;

    /**
     * @var string 排班描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OnCallFormDesc;

    /**
     * @var string 轮值类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationType;

    /**
     * @var string 换班时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShiftTime;

    /**
     * @var integer 有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectiveStartTime;

    /**
     * @var integer 有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EffectiveEndTime;

    /**
     * @var float 时区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZone;

    /**
     * @var array 当前值班人员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurrOnCallStaffs;

    /**
     * @var array 模板绑定的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @param string $OnCallFormID 排班id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OnCallFormName 排班名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OnCallFormDesc 排班描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RotationType 轮值类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ShiftTime 换班时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EffectiveStartTime 有效期开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EffectiveEndTime 有效期结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TimeZone 时区
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CurrOnCallStaffs 当前值班人员
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

        if (array_key_exists("CurrOnCallStaffs",$param) and $param["CurrOnCallStaffs"] !== null) {
            $this->CurrOnCallStaffs = $param["CurrOnCallStaffs"];
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
