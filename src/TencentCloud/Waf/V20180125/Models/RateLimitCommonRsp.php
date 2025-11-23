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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限流相关通用返回
 *
 * @method integer getCode() 获取响应码
 * @method void setCode(integer $Code) 设置响应码
 * @method string getInfo() 获取提示信息
 * @method void setInfo(string $Info) 设置提示信息
 */
class RateLimitCommonRsp extends AbstractModel
{
    /**
     * @var integer 响应码
     */
    public $Code;

    /**
     * @var string 提示信息
     */
    public $Info;

    /**
     * @param integer $Code 响应码
     * @param string $Info 提示信息
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Info",$param) and $param["Info"] !== null) {
            $this->Info = $param["Info"];
        }
    }
}
