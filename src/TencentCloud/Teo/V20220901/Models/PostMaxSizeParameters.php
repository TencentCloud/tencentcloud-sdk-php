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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * POST 请求上传文件流式传输最大限制。
 *
 * @method string getSwitch() 获取是否开启 POST 请求上传文件限制，单位为 Byte，平台默认为限制为 32 * 2<sup>20</sup> Byte，取值有：<li>on：开启限制；</li><li>off：关闭限制。</li>
 * @method void setSwitch(string $Switch) 设置是否开启 POST 请求上传文件限制，单位为 Byte，平台默认为限制为 32 * 2<sup>20</sup> Byte，取值有：<li>on：开启限制；</li><li>off：关闭限制。</li>
 * @method integer getMaxSize() 获取POST 请求上传文件流式传输最大限制，单位为 Byte，取值：1 * 2<sup>20</sup> Byte～500 * 2<sup>20</sup> Byte。
 * @method void setMaxSize(integer $MaxSize) 设置POST 请求上传文件流式传输最大限制，单位为 Byte，取值：1 * 2<sup>20</sup> Byte～500 * 2<sup>20</sup> Byte。
 */
class PostMaxSizeParameters extends AbstractModel
{
    /**
     * @var string 是否开启 POST 请求上传文件限制，单位为 Byte，平台默认为限制为 32 * 2<sup>20</sup> Byte，取值有：<li>on：开启限制；</li><li>off：关闭限制。</li>
     */
    public $Switch;

    /**
     * @var integer POST 请求上传文件流式传输最大限制，单位为 Byte，取值：1 * 2<sup>20</sup> Byte～500 * 2<sup>20</sup> Byte。
     */
    public $MaxSize;

    /**
     * @param string $Switch 是否开启 POST 请求上传文件限制，单位为 Byte，平台默认为限制为 32 * 2<sup>20</sup> Byte，取值有：<li>on：开启限制；</li><li>off：关闭限制。</li>
     * @param integer $MaxSize POST 请求上传文件流式传输最大限制，单位为 Byte，取值：1 * 2<sup>20</sup> Byte～500 * 2<sup>20</sup> Byte。
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
