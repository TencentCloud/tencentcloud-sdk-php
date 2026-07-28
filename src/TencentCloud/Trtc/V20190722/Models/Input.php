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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拉流输入源
 *
 * @method string getUrl() 获取<p>直播拉流地址</p><p>入参限制：字符长度小于2048</p>
 * @method void setUrl(string $Url) 设置<p>直播拉流地址</p><p>入参限制：字符长度小于2048</p>
 * @method string getFormat() 获取<p>显式协议</p><p>枚举值：</p><ul><li>rtmp： rtmp协议</li></ul>
 * @method void setFormat(string $Format) 设置<p>显式协议</p><p>枚举值：</p><ul><li>rtmp： rtmp协议</li></ul>
 */
class Input extends AbstractModel
{
    /**
     * @var string <p>直播拉流地址</p><p>入参限制：字符长度小于2048</p>
     */
    public $Url;

    /**
     * @var string <p>显式协议</p><p>枚举值：</p><ul><li>rtmp： rtmp协议</li></ul>
     */
    public $Format;

    /**
     * @param string $Url <p>直播拉流地址</p><p>入参限制：字符长度小于2048</p>
     * @param string $Format <p>显式协议</p><p>枚举值：</p><ul><li>rtmp： rtmp协议</li></ul>
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }
    }
}
