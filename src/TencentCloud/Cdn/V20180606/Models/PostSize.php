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
 * POST请求上传文件流式传输最大限制
 *
 * @method string getSwitch() 获取POST请求上传文件流式传输最大限制配置开关，取值有：
on：开启，平台默认为32MB
off：关闭

 * @method void setSwitch(string $Switch) 设置POST请求上传文件流式传输最大限制配置开关，取值有：
on：开启，平台默认为32MB
off：关闭

 * @method integer getMaxSize() 获取最大限制，取值在1MB和200MB之间。
 * @method void setMaxSize(integer $MaxSize) 设置最大限制，取值在1MB和200MB之间。
 */
class PostSize extends AbstractModel
{
    /**
     * @var string POST请求上传文件流式传输最大限制配置开关，取值有：
on：开启，平台默认为32MB
off：关闭

     */
    public $Switch;

    /**
     * @var integer 最大限制，取值在1MB和200MB之间。
     */
    public $MaxSize;

    /**
     * @param string $Switch POST请求上传文件流式传输最大限制配置开关，取值有：
on：开启，平台默认为32MB
off：关闭

     * @param integer $MaxSize 最大限制，取值在1MB和200MB之间。
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

        if (array_key_exists("MaxSize",$param) and $param["MaxSize"] !== null) {
            $this->MaxSize = $param["MaxSize"];
        }
    }
}
