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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕信息。
 *
 * @method string getFormat() 获取字幕文件格式，取值范围：
<li>vtt：WebVTT 字幕文件；</li>
<li>srt：SRT 字幕文件。</li>
 * @method void setFormat(string $Format) 设置字幕文件格式，取值范围：
<li>vtt：WebVTT 字幕文件；</li>
<li>srt：SRT 字幕文件。</li>
 * @method string getUrl() 获取字幕文件 Url。
 * @method void setUrl(string $Url) 设置字幕文件 Url。
 */
class AiRecognitionTaskAsrFullTextResultOutputSubtitleItem extends AbstractModel
{
    /**
     * @var string 字幕文件格式，取值范围：
<li>vtt：WebVTT 字幕文件；</li>
<li>srt：SRT 字幕文件。</li>
     */
    public $Format;

    /**
     * @var string 字幕文件 Url。
     */
    public $Url;

    /**
     * @param string $Format 字幕文件格式，取值范围：
<li>vtt：WebVTT 字幕文件；</li>
<li>srt：SRT 字幕文件。</li>
     * @param string $Url 字幕文件 Url。
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
