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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字幕信息。
 *
 * @method string getId() 获取媒资字幕 ID，用于媒资字幕管理，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
 * @method void setId(string $Id) 设置媒资字幕 ID，用于媒资字幕管理，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
 * @method string getName() 获取媒资字幕名字，用于播放器展示，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
 * @method void setName(string $Name) 设置媒资字幕名字，用于播放器展示，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
 * @method string getLanguage() 获取字幕语言。
 * @method void setLanguage(string $Language) 设置字幕语言。
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
     * @var string 媒资字幕 ID，用于媒资字幕管理，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
     */
    public $Id;

    /**
     * @var string 媒资字幕名字，用于播放器展示，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
     */
    public $Name;

    /**
     * @var string 字幕语言。
     */
    public $Language;

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
     * @param string $Id 媒资字幕 ID，用于媒资字幕管理，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
     * @param string $Name 媒资字幕名字，用于播放器展示，仅当 Format 为 vtt 时有效。
<font color=red>注意：</font>2024-11-01T10:00:00Z 之前的任务返回此字段无效。
     * @param string $Language 字幕语言。
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
