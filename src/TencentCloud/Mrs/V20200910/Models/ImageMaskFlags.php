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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图片脱敏选项
不填默认敏感信息都脱敏
 *
 * @method boolean getHospitalFlag() 获取是否对医院信息进行脱敏
 * @method void setHospitalFlag(boolean $HospitalFlag) 设置是否对医院信息进行脱敏
 * @method boolean getDoctorFlag() 获取是否对医生信息进行脱敏
 * @method void setDoctorFlag(boolean $DoctorFlag) 设置是否对医生信息进行脱敏
 * @method boolean getPatientFlag() 获取是否对患者信息进行脱敏
 * @method void setPatientFlag(boolean $PatientFlag) 设置是否对患者信息进行脱敏
 * @method boolean getBarFlag() 获取是否对二维码信息进行脱敏
 * @method void setBarFlag(boolean $BarFlag) 设置是否对二维码信息进行脱敏
 */
class ImageMaskFlags extends AbstractModel
{
    /**
     * @var boolean 是否对医院信息进行脱敏
     */
    public $HospitalFlag;

    /**
     * @var boolean 是否对医生信息进行脱敏
     */
    public $DoctorFlag;

    /**
     * @var boolean 是否对患者信息进行脱敏
     */
    public $PatientFlag;

    /**
     * @var boolean 是否对二维码信息进行脱敏
     */
    public $BarFlag;

    /**
     * @param boolean $HospitalFlag 是否对医院信息进行脱敏
     * @param boolean $DoctorFlag 是否对医生信息进行脱敏
     * @param boolean $PatientFlag 是否对患者信息进行脱敏
     * @param boolean $BarFlag 是否对二维码信息进行脱敏
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
        if (array_key_exists("HospitalFlag",$param) and $param["HospitalFlag"] !== null) {
            $this->HospitalFlag = $param["HospitalFlag"];
        }

        if (array_key_exists("DoctorFlag",$param) and $param["DoctorFlag"] !== null) {
            $this->DoctorFlag = $param["DoctorFlag"];
        }

        if (array_key_exists("PatientFlag",$param) and $param["PatientFlag"] !== null) {
            $this->PatientFlag = $param["PatientFlag"];
        }

        if (array_key_exists("BarFlag",$param) and $param["BarFlag"] !== null) {
            $this->BarFlag = $param["BarFlag"];
        }
    }
}
