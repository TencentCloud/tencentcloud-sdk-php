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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份不能执行的接口。
 *
 * @method string getAction() 获取不能操作的接口名。
 * @method void setAction(string $Action) 设置不能操作的接口名。
 * @method string getMessage() 获取接口不能操作的原因。
 * @method void setMessage(string $Message) 设置接口不能操作的原因。
 * @method string getCode() 获取接口不能操作对应提示的错误码。
 * @method void setCode(string $Code) 设置接口不能操作对应提示的错误码。
 */
class DeniedAction extends AbstractModel
{
    /**
     * @var string 不能操作的接口名。
     */
    public $Action;

    /**
     * @var string 接口不能操作的原因。
     */
    public $Message;

    /**
     * @var string 接口不能操作对应提示的错误码。
     */
    public $Code;

    /**
     * @param string $Action 不能操作的接口名。
     * @param string $Message 接口不能操作的原因。
     * @param string $Code 接口不能操作对应提示的错误码。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
