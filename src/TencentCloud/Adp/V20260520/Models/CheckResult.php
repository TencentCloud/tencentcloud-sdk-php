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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通用校验结果
 *
 * @method boolean getPassed() 获取是否通过校验
 * @method void setPassed(boolean $Passed) 设置是否通过校验
 * @method string getReason() 获取失败原因（passed=false 时填充）
 * @method void setReason(string $Reason) 设置失败原因（passed=false 时填充）
 */
class CheckResult extends AbstractModel
{
    /**
     * @var boolean 是否通过校验
     */
    public $Passed;

    /**
     * @var string 失败原因（passed=false 时填充）
     */
    public $Reason;

    /**
     * @param boolean $Passed 是否通过校验
     * @param string $Reason 失败原因（passed=false 时填充）
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
        if (array_key_exists("Passed",$param) and $param["Passed"] !== null) {
            $this->Passed = $param["Passed"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
