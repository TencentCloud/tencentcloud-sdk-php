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
 * UpdateOnCallForm请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method string getOnCallFormID() 获取值班表id
 * @method void setOnCallFormID(string $OnCallFormID) 设置值班表id
 * @method string getOnCallFormName() 获取值班表名称
 * @method void setOnCallFormName(string $OnCallFormName) 设置值班表名称
 * @method array getStaffInfos() 获取值班人员id组
 * @method void setStaffInfos(array $StaffInfos) 设置值班人员id组
 * @method string getRotationType() 获取轮转类型
 * @method void setRotationType(string $RotationType) 设置轮转类型
 * @method string getShiftTime() 获取换班时间
 * @method void setShiftTime(string $ShiftTime) 设置换班时间
 * @method integer getEffectiveStartTime() 获取有效期开始时间，单位s
 * @method void setEffectiveStartTime(integer $EffectiveStartTime) 设置有效期开始时间，单位s
 * @method integer getEffectiveEndTime() 获取有效期结束时间，单位s
 * @method void setEffectiveEndTime(integer $EffectiveEndTime) 设置有效期结束时间，单位s
 * @method float getTimeZone() 获取时区(-12 - 12)
 * @method void setTimeZone(float $TimeZone) 设置时区(-12 - 12)
 * @method string getOnCallFormDesc() 获取值班表描述
 * @method void setOnCallFormDesc(string $OnCallFormDesc) 设置值班表描述
 * @method array getCoverStaffInfos() 获取轮班信息
 * @method void setCoverStaffInfos(array $CoverStaffInfos) 设置轮班信息
 */
class UpdateOnCallFormRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var string 值班表id
     */
    public $OnCallFormID;

    /**
     * @var string 值班表名称
     */
    public $OnCallFormName;

    /**
     * @var array 值班人员id组
     */
    public $StaffInfos;

    /**
     * @var string 轮转类型
     */
    public $RotationType;

    /**
     * @var string 换班时间
     */
    public $ShiftTime;

    /**
     * @var integer 有效期开始时间，单位s
     */
    public $EffectiveStartTime;

    /**
     * @var integer 有效期结束时间，单位s
     */
    public $EffectiveEndTime;

    /**
     * @var float 时区(-12 - 12)
     */
    public $TimeZone;

    /**
     * @var string 值班表描述
     */
    public $OnCallFormDesc;

    /**
     * @var array 轮班信息
     */
    public $CoverStaffInfos;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param string $OnCallFormID 值班表id
     * @param string $OnCallFormName 值班表名称
     * @param array $StaffInfos 值班人员id组
     * @param string $RotationType 轮转类型
     * @param string $ShiftTime 换班时间
     * @param integer $EffectiveStartTime 有效期开始时间，单位s
     * @param integer $EffectiveEndTime 有效期结束时间，单位s
     * @param float $TimeZone 时区(-12 - 12)
     * @param string $OnCallFormDesc 值班表描述
     * @param array $CoverStaffInfos 轮班信息
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("OnCallFormID",$param) and $param["OnCallFormID"] !== null) {
            $this->OnCallFormID = $param["OnCallFormID"];
        }

        if (array_key_exists("OnCallFormName",$param) and $param["OnCallFormName"] !== null) {
            $this->OnCallFormName = $param["OnCallFormName"];
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

        if (array_key_exists("OnCallFormDesc",$param) and $param["OnCallFormDesc"] !== null) {
            $this->OnCallFormDesc = $param["OnCallFormDesc"];
        }

        if (array_key_exists("CoverStaffInfos",$param) and $param["CoverStaffInfos"] !== null) {
            $this->CoverStaffInfos = [];
            foreach ($param["CoverStaffInfos"] as $key => $value){
                $obj = new CoverStaffInfo();
                $obj->deserialize($value);
                array_push($this->CoverStaffInfos, $obj);
            }
        }
    }
}
