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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发货步骤详情
 *
 * @method string getStepName() 获取<p>步骤名称</p>
 * @method void setStepName(string $StepName) 设置<p>步骤名称</p>
 * @method string getStepDesc() 获取<p>步骤描述</p>
 * @method void setStepDesc(string $StepDesc) 设置<p>步骤描述</p>
 * @method string getStatus() 获取<p>步骤状态</p>
 * @method void setStatus(string $Status) 设置<p>步骤状态</p>
 * @method string getFinishTime() 获取<p>完成时间</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>完成时间</p>
 * @method string getErrMsg() 获取<p>错误信息描述</p>
 * @method void setErrMsg(string $ErrMsg) 设置<p>错误信息描述</p>
 */
class CreatingStepInfo extends AbstractModel
{
    /**
     * @var string <p>步骤名称</p>
     */
    public $StepName;

    /**
     * @var string <p>步骤描述</p>
     */
    public $StepDesc;

    /**
     * @var string <p>步骤状态</p>
     */
    public $Status;

    /**
     * @var string <p>完成时间</p>
     */
    public $FinishTime;

    /**
     * @var string <p>错误信息描述</p>
     */
    public $ErrMsg;

    /**
     * @param string $StepName <p>步骤名称</p>
     * @param string $StepDesc <p>步骤描述</p>
     * @param string $Status <p>步骤状态</p>
     * @param string $FinishTime <p>完成时间</p>
     * @param string $ErrMsg <p>错误信息描述</p>
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

        if (array_key_exists("StepDesc",$param) and $param["StepDesc"] !== null) {
            $this->StepDesc = $param["StepDesc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }
    }
}
