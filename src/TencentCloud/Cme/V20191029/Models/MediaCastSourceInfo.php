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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点播转直播输入源信息。
 *
 * @method string getId() 获取输入源 Id，由系统分配。
 * @method void setId(string $Id) 设置输入源 Id，由系统分配。
 * @method string getType() 获取输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
<li>EXTERNAL：非多媒体创建引擎或者云点播的媒资文件。</li>
 * @method void setType(string $Type) 设置输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
<li>EXTERNAL：非多媒体创建引擎或者云点播的媒资文件。</li>
 * @method string getFileId() 获取云点播媒体文件 ID。当 Type = VOD 时必填。
 * @method void setFileId(string $FileId) 设置云点播媒体文件 ID。当 Type = VOD 时必填。
 * @method string getMaterialId() 获取多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
 * @method void setMaterialId(string $MaterialId) 设置多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
 * @method float getOffset() 获取文件播放的起始位置，单位：秒。默认为0，从文件头开始播放。当 Type = CME  或者 VOD 时有效。
 * @method void setOffset(float $Offset) 设置文件播放的起始位置，单位：秒。默认为0，从文件头开始播放。当 Type = CME  或者 VOD 时有效。
 * @method float getDuration() 获取播放时长，单位：秒。默认播放整个文件。当 Type = CME  或者 VOD 时有效。
 * @method void setDuration(float $Duration) 设置播放时长，单位：秒。默认播放整个文件。当 Type = CME  或者 VOD 时有效。
 * @method string getUrl() 获取外部文件的 Url， Type=EXTERNAL 时必填，可以是点播文件或者直播文件，支持的 Scheme 包括HTTP、HTTPS、RTMP。
 * @method void setUrl(string $Url) 设置外部文件的 Url， Type=EXTERNAL 时必填，可以是点播文件或者直播文件，支持的 Scheme 包括HTTP、HTTPS、RTMP。
 */
class MediaCastSourceInfo extends AbstractModel
{
    /**
     * @var string 输入源 Id，由系统分配。
     */
    public $Id;

    /**
     * @var string 输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
<li>EXTERNAL：非多媒体创建引擎或者云点播的媒资文件。</li>
     */
    public $Type;

    /**
     * @var string 云点播媒体文件 ID。当 Type = VOD 时必填。
     */
    public $FileId;

    /**
     * @var string 多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
     */
    public $MaterialId;

    /**
     * @var float 文件播放的起始位置，单位：秒。默认为0，从文件头开始播放。当 Type = CME  或者 VOD 时有效。
     */
    public $Offset;

    /**
     * @var float 播放时长，单位：秒。默认播放整个文件。当 Type = CME  或者 VOD 时有效。
     */
    public $Duration;

    /**
     * @var string 外部文件的 Url， Type=EXTERNAL 时必填，可以是点播文件或者直播文件，支持的 Scheme 包括HTTP、HTTPS、RTMP。
     */
    public $Url;

    /**
     * @param string $Id 输入源 Id，由系统分配。
     * @param string $Type 输入源的媒体类型，取值有：
<li>CME：多媒体创作引擎的媒体文件；</li>
<li>VOD：云点播的媒资文件。</li>
<li>EXTERNAL：非多媒体创建引擎或者云点播的媒资文件。</li>
     * @param string $FileId 云点播媒体文件 ID。当 Type = VOD 时必填。
     * @param string $MaterialId 多媒体创作引擎的媒体 ID。当 Type = CME  时必填。
     * @param float $Offset 文件播放的起始位置，单位：秒。默认为0，从文件头开始播放。当 Type = CME  或者 VOD 时有效。
     * @param float $Duration 播放时长，单位：秒。默认播放整个文件。当 Type = CME  或者 VOD 时有效。
     * @param string $Url 外部文件的 Url， Type=EXTERNAL 时必填，可以是点播文件或者直播文件，支持的 Scheme 包括HTTP、HTTPS、RTMP。
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
