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
 * 其他信息
 *
 * @method SurgeryAttr getAnesthesia() 获取麻醉方法
 * @method void setAnesthesia(SurgeryAttr $Anesthesia) 设置麻醉方法
 * @method SurgeryAttr getBloodLoss() 获取术中出血
 * @method void setBloodLoss(SurgeryAttr $BloodLoss) 设置术中出血
 * @method SurgeryAttr getBloodTransfusion() 获取输血
 * @method void setBloodTransfusion(SurgeryAttr $BloodTransfusion) 设置输血
 * @method SurgeryAttr getDuration() 获取手术用时
 * @method void setDuration(SurgeryAttr $Duration) 设置手术用时
 * @method SurgeryAttr getEndTime() 获取手术开始时间
 * @method void setEndTime(SurgeryAttr $EndTime) 设置手术开始时间
 * @method SurgeryAttr getStartTime() 获取手术结束时间
 * @method void setStartTime(SurgeryAttr $StartTime) 设置手术结束时间
 */
class OtherInfo extends AbstractModel
{
    /**
     * @var SurgeryAttr 麻醉方法
     */
    public $Anesthesia;

    /**
     * @var SurgeryAttr 术中出血
     */
    public $BloodLoss;

    /**
     * @var SurgeryAttr 输血
     */
    public $BloodTransfusion;

    /**
     * @var SurgeryAttr 手术用时
     */
    public $Duration;

    /**
     * @var SurgeryAttr 手术开始时间
     */
    public $EndTime;

    /**
     * @var SurgeryAttr 手术结束时间
     */
    public $StartTime;

    /**
     * @param SurgeryAttr $Anesthesia 麻醉方法
     * @param SurgeryAttr $BloodLoss 术中出血
     * @param SurgeryAttr $BloodTransfusion 输血
     * @param SurgeryAttr $Duration 手术用时
     * @param SurgeryAttr $EndTime 手术开始时间
     * @param SurgeryAttr $StartTime 手术结束时间
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
        if (array_key_exists("Anesthesia",$param) and $param["Anesthesia"] !== null) {
            $this->Anesthesia = new SurgeryAttr();
            $this->Anesthesia->deserialize($param["Anesthesia"]);
        }

        if (array_key_exists("BloodLoss",$param) and $param["BloodLoss"] !== null) {
            $this->BloodLoss = new SurgeryAttr();
            $this->BloodLoss->deserialize($param["BloodLoss"]);
        }

        if (array_key_exists("BloodTransfusion",$param) and $param["BloodTransfusion"] !== null) {
            $this->BloodTransfusion = new SurgeryAttr();
            $this->BloodTransfusion->deserialize($param["BloodTransfusion"]);
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = new SurgeryAttr();
            $this->Duration->deserialize($param["Duration"]);
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = new SurgeryAttr();
            $this->EndTime->deserialize($param["EndTime"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = new SurgeryAttr();
            $this->StartTime->deserialize($param["StartTime"]);
        }
    }
}
