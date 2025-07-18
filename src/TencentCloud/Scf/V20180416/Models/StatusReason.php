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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 状态原因描述
 *
 * @method string getErrorCode() 获取错误码
 * @method void setErrorCode(string $ErrorCode) 设置错误码
 * @method string getErrorMessage() 获取错误描述
 * @method void setErrorMessage(string $ErrorMessage) 设置错误描述
 */
class StatusReason extends AbstractModel
{
    /**
     * @var string 错误码
     */
    public $ErrorCode;

    /**
     * @var string 错误描述
     */
    public $ErrorMessage;

    /**
     * @param string $ErrorCode 错误码
     * @param string $ErrorMessage 错误描述
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
        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMessage",$param) and $param["ErrorMessage"] !== null) {
            $this->ErrorMessage = $param["ErrorMessage"];
        }
    }
}
