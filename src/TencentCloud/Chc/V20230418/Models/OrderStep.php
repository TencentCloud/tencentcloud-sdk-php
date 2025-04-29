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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工单详情中的工单流程步骤
 *
 * @method string getStepName() 获取步骤名
 * @method void setStepName(string $StepName) 设置步骤名
 * @method string getOwnerName() 获取处理人
 * @method void setOwnerName(string $OwnerName) 设置处理人
 * @method string getOwnerPhone() 获取处理人手机号
 * @method void setOwnerPhone(string $OwnerPhone) 设置处理人手机号
 * @method string getFinishTime() 获取完成时间
 * @method void setFinishTime(string $FinishTime) 设置完成时间
 * @method string getStepStatus() 获取此步骤状态
 * @method void setStepStatus(string $StepStatus) 设置此步骤状态
 */
class OrderStep extends AbstractModel
{
    /**
     * @var string 步骤名
     */
    public $StepName;

    /**
     * @var string 处理人
     */
    public $OwnerName;

    /**
     * @var string 处理人手机号
     */
    public $OwnerPhone;

    /**
     * @var string 完成时间
     */
    public $FinishTime;

    /**
     * @var string 此步骤状态
     */
    public $StepStatus;

    /**
     * @param string $StepName 步骤名
     * @param string $OwnerName 处理人
     * @param string $OwnerPhone 处理人手机号
     * @param string $FinishTime 完成时间
     * @param string $StepStatus 此步骤状态
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
        if (array_key_exists("StepName",$param) and $param["StepName"] !== null) {
            $this->StepName = $param["StepName"];
        }

        if (array_key_exists("OwnerName",$param) and $param["OwnerName"] !== null) {
            $this->OwnerName = $param["OwnerName"];
        }

        if (array_key_exists("OwnerPhone",$param) and $param["OwnerPhone"] !== null) {
            $this->OwnerPhone = $param["OwnerPhone"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("StepStatus",$param) and $param["StepStatus"] !== null) {
            $this->StepStatus = $param["StepStatus"];
        }
    }
}
