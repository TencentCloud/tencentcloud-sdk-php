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
 * 字幕格式列表操作。
 *
 * @method string getType() 获取操作类型，取值范围：
<li>add：添加 Formats 指定的格式列表；</li>
<li>delete：删除 Formats 指定的格式列表；<l/i>
<li>reset：将已配置的格式列表重置为  Formats 指定的格式列表。</li>
 * @method void setType(string $Type) 设置操作类型，取值范围：
<li>add：添加 Formats 指定的格式列表；</li>
<li>delete：删除 Formats 指定的格式列表；<l/i>
<li>reset：将已配置的格式列表重置为  Formats 指定的格式列表。</li>
 * @method array getFormats() 获取字幕格式列表，取值范围：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
 * @method void setFormats(array $Formats) 设置字幕格式列表，取值范围：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
 */
class SubtitleFormatsOperation extends AbstractModel
{
    /**
     * @var string 操作类型，取值范围：
<li>add：添加 Formats 指定的格式列表；</li>
<li>delete：删除 Formats 指定的格式列表；<l/i>
<li>reset：将已配置的格式列表重置为  Formats 指定的格式列表。</li>
     */
    public $Type;

    /**
     * @var array 字幕格式列表，取值范围：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
     */
    public $Formats;

    /**
     * @param string $Type 操作类型，取值范围：
<li>add：添加 Formats 指定的格式列表；</li>
<li>delete：删除 Formats 指定的格式列表；<l/i>
<li>reset：将已配置的格式列表重置为  Formats 指定的格式列表。</li>
     * @param array $Formats 字幕格式列表，取值范围：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Formats",$param) and $param["Formats"] !== null) {
            $this->Formats = $param["Formats"];
        }
    }
}
