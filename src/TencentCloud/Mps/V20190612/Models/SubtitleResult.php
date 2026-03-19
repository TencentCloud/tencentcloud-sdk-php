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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 智能字幕结果
 *
 * @method string getLanguage() 获取<p>字幕文件语言</p>
 * @method void setLanguage(string $Language) 设置<p>字幕文件语言</p>
 * @method string getStatus() 获取<p>处理是否成功</p>
 * @method void setStatus(string $Status) 设置<p>处理是否成功</p>
 * @method string getPath() 获取<p>字幕文件路径。</p>
 * @method void setPath(string $Path) 设置<p>字幕文件路径。</p>
 * @method string getSubtitleEmbedPath() 获取<p>字幕压制视频路径。</p>
 * @method void setSubtitleEmbedPath(string $SubtitleEmbedPath) 设置<p>字幕压制视频路径。</p>
 */
class SubtitleResult extends AbstractModel
{
    /**
     * @var string <p>字幕文件语言</p>
     */
    public $Language;

    /**
     * @var string <p>处理是否成功</p>
     */
    public $Status;

    /**
     * @var string <p>字幕文件路径。</p>
     */
    public $Path;

    /**
     * @var string <p>字幕压制视频路径。</p>
     */
    public $SubtitleEmbedPath;

    /**
     * @param string $Language <p>字幕文件语言</p>
     * @param string $Status <p>处理是否成功</p>
     * @param string $Path <p>字幕文件路径。</p>
     * @param string $SubtitleEmbedPath <p>字幕压制视频路径。</p>
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
        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("SubtitleEmbedPath",$param) and $param["SubtitleEmbedPath"] !== null) {
            $this->SubtitleEmbedPath = $param["SubtitleEmbedPath"];
        }
    }
}
