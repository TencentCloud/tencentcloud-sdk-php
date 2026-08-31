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
 * @method string getModule() 获取<p>固定值，为&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>固定值，为&quot;monitor&quot;</p>
 * @method string getOnCallFormID() 获取<p>值班表id</p>
 * @method void setOnCallFormID(string $OnCallFormID) 设置<p>值班表id</p>
 * @method string getOnCallFormName() 获取<p>值班表名称</p>
 * @method void setOnCallFormName(string $OnCallFormName) 设置<p>值班表名称</p>
 * @method array getStaffInfos() 获取<p>值班人员id组</p>
 * @method void setStaffInfos(array $StaffInfos) 设置<p>值班人员id组</p>
 * @method string getRotationType() 获取<p>轮转类型</p>
 * @method void setRotationType(string $RotationType) 设置<p>轮转类型</p>
 * @method string getShiftTime() 获取<p>换班时间</p>
 * @method void setShiftTime(string $ShiftTime) 设置<p>换班时间</p>
 * @method integer getEffectiveStartTime() 获取<p>有效期开始时间，单位s</p>
 * @method void setEffectiveStartTime(integer $EffectiveStartTime) 设置<p>有效期开始时间，单位s</p>
 * @method integer getEffectiveEndTime() 获取<p>有效期结束时间，单位s</p>
 * @method void setEffectiveEndTime(integer $EffectiveEndTime) 设置<p>有效期结束时间，单位s</p>
 * @method float getTimeZone() 获取<p>时区(-12 - 12)</p>
 * @method void setTimeZone(float $TimeZone) 设置<p>时区(-12 - 12)</p>
 * @method string getOnCallFormDesc() 获取<p>值班表描述</p>
 * @method void setOnCallFormDesc(string $OnCallFormDesc) 设置<p>值班表描述</p>
 * @method array getCoverStaffInfos() 获取<p>轮班信息</p>
 * @method void setCoverStaffInfos(array $CoverStaffInfos) 设置<p>轮班信息</p>
 */
class UpdateOnCallFormRequest extends AbstractModel
{
    /**
     * @var string <p>固定值，为&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var string <p>值班表id</p>
     */
    public $OnCallFormID;

    /**
     * @var string <p>值班表名称</p>
     */
    public $OnCallFormName;

    /**
     * @var array <p>值班人员id组</p>
     */
    public $StaffInfos;

    /**
     * @var string <p>轮转类型</p>
     */
    public $RotationType;

    /**
     * @var string <p>换班时间</p>
     */
    public $ShiftTime;

    /**
     * @var integer <p>有效期开始时间，单位s</p>
     */
    public $EffectiveStartTime;

    /**
     * @var integer <p>有效期结束时间，单位s</p>
     */
    public $EffectiveEndTime;

    /**
     * @var float <p>时区(-12 - 12)</p>
     */
    public $TimeZone;

    /**
     * @var string <p>值班表描述</p>
     */
    public $OnCallFormDesc;

    /**
     * @var array <p>轮班信息</p>
     */
    public $CoverStaffInfos;

    /**
     * @param string $Module <p>固定值，为&quot;monitor&quot;</p>
     * @param string $OnCallFormID <p>值班表id</p>
     * @param string $OnCallFormName <p>值班表名称</p>
     * @param array $StaffInfos <p>值班人员id组</p>
     * @param string $RotationType <p>轮转类型</p>
     * @param string $ShiftTime <p>换班时间</p>
     * @param integer $EffectiveStartTime <p>有效期开始时间，单位s</p>
     * @param integer $EffectiveEndTime <p>有效期结束时间，单位s</p>
     * @param float $TimeZone <p>时区(-12 - 12)</p>
     * @param string $OnCallFormDesc <p>值班表描述</p>
     * @param array $CoverStaffInfos <p>轮班信息</p>
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
