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
namespace TencentCloud\Tag\V20180813\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 失败资源信息。
绑定或解绑资源标签时失败返回
 *
 * @method string getResource() 获取失败的资源六段式
 * @method void setResource(string $Resource) 设置失败的资源六段式
 * @method string getCode() 获取错误码
 * @method void setCode(string $Code) 设置错误码
 * @method string getMessage() 获取错误信息
 * @method void setMessage(string $Message) 设置错误信息
 */
class FailedResource extends AbstractModel
{
    /**
     * @var string 失败的资源六段式
     */
    public $Resource;

    /**
     * @var string 错误码
     */
    public $Code;

    /**
     * @var string 错误信息
     */
    public $Message;

    /**
     * @param string $Resource 失败的资源六段式
     * @param string $Code 错误码
     * @param string $Message 错误信息
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
        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = $param["Resource"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
