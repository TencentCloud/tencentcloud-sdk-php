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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HTTPS服务，若关闭，下发配置拦截https请求，开启时会产生计费
 *
 * @method string getSwitch() 获取HTTPS服务配置开关，取值有：
on：开启，缺省时默认开启，会产生计费
off：关闭，拦截https请求

 * @method void setSwitch(string $Switch) 设置HTTPS服务配置开关，取值有：
on：开启，缺省时默认开启，会产生计费
off：关闭，拦截https请求
 */
class HttpsBilling extends AbstractModel
{
    /**
     * @var string HTTPS服务配置开关，取值有：
on：开启，缺省时默认开启，会产生计费
off：关闭，拦截https请求

     */
    public $Switch;

    /**
     * @param string $Switch HTTPS服务配置开关，取值有：
on：开启，缺省时默认开启，会产生计费
off：关闭，拦截https请求
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }
    }
}
