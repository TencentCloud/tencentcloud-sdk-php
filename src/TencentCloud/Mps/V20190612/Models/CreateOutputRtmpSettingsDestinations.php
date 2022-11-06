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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建媒体传输流的输出的RTMP的目标地址。
 *
 * @method string getUrl() 获取转推的URL，格式如：rtmp://domain/live。
 * @method void setUrl(string $Url) 设置转推的URL，格式如：rtmp://domain/live。
 * @method string getStreamKey() 获取转推的StreamKey，格式如：stream?key=value。
 * @method void setStreamKey(string $StreamKey) 设置转推的StreamKey，格式如：stream?key=value。
 */
class CreateOutputRtmpSettingsDestinations extends AbstractModel
{
    /**
     * @var string 转推的URL，格式如：rtmp://domain/live。
     */
    public $Url;

    /**
     * @var string 转推的StreamKey，格式如：stream?key=value。
     */
    public $StreamKey;

    /**
     * @param string $Url 转推的URL，格式如：rtmp://domain/live。
     * @param string $StreamKey 转推的StreamKey，格式如：stream?key=value。
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

        if (array_key_exists("StreamKey",$param) and $param["StreamKey"] !== null) {
            $this->StreamKey = $param["StreamKey"];
        }
    }
}
