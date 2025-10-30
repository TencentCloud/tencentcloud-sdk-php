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
namespace TencentCloud\Aca\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异常提醒
 *
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getAbnormalReason() 获取异常原因 PatientInfo 病人信息缺失；OrderInfo 医嘱信息缺失； PrescriptionError 处方异常提醒
 * @method void setAbnormalReason(string $AbnormalReason) 设置异常原因 PatientInfo 病人信息缺失；OrderInfo 医嘱信息缺失； PrescriptionError 处方异常提醒
 */
class Abnormals extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 异常原因 PatientInfo 病人信息缺失；OrderInfo 医嘱信息缺失； PrescriptionError 处方异常提醒
     */
    public $AbnormalReason;

    /**
     * @param string $Type 类型
     * @param string $Title 标题
     * @param string $AbnormalReason 异常原因 PatientInfo 病人信息缺失；OrderInfo 医嘱信息缺失； PrescriptionError 处方异常提醒
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("AbnormalReason",$param) and $param["AbnormalReason"] !== null) {
            $this->AbnormalReason = $param["AbnormalReason"];
        }
    }
}
