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
namespace TencentCloud\Dbs\V20211108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 错误异常信息
 *
 * @method string getErrorType() 获取错误类型。
 * @method void setErrorType(string $ErrorType) 设置错误类型。
 * @method string getErrorMsg() 获取错误信息。
 * @method void setErrorMsg(string $ErrorMsg) 设置错误信息。
 */
class ErrorInfo extends AbstractModel
{
    /**
     * @var string 错误类型。
     */
    public $ErrorType;

    /**
     * @var string 错误信息。
     */
    public $ErrorMsg;

    /**
     * @param string $ErrorType 错误类型。
     * @param string $ErrorMsg 错误信息。
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
        if (array_key_exists("ErrorType",$param) and $param["ErrorType"] !== null) {
            $this->ErrorType = $param["ErrorType"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
