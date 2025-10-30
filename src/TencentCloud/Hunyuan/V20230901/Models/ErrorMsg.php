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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行时异常信息。
 *
 * @method string getMsg() 获取错误提示信息。
 * @method void setMsg(string $Msg) 设置错误提示信息。
 * @method integer getCode() 获取错误码。
4000 服务内部异常。
4001 请求模型超时。

 * @method void setCode(integer $Code) 设置错误码。
4000 服务内部异常。
4001 请求模型超时。
 */
class ErrorMsg extends AbstractModel
{
    /**
     * @var string 错误提示信息。
     */
    public $Msg;

    /**
     * @var integer 错误码。
4000 服务内部异常。
4001 请求模型超时。

     */
    public $Code;

    /**
     * @param string $Msg 错误提示信息。
     * @param integer $Code 错误码。
4000 服务内部异常。
4001 请求模型超时。
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
        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
