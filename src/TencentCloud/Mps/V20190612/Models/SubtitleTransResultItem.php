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
 * 字幕翻译输出结果
 *
 * @method string getStatus() 获取<p>翻译标识：</p><ul><li>Success</li><li>Error</li></ul>
 * @method void setStatus(string $Status) 设置<p>翻译标识：</p><ul><li>Success</li><li>Error</li></ul>
 * @method string getTransSrc() 获取<p>源语言（如&quot;en&quot;）</p>
 * @method void setTransSrc(string $TransSrc) 设置<p>源语言（如&quot;en&quot;）</p>
 * @method string getTransDst() 获取<p>目标语言（如&quot;zh&quot;）</p>
 * @method void setTransDst(string $TransDst) 设置<p>目标语言（如&quot;zh&quot;）</p>
 * @method string getPath() 获取<p>字幕文件地址</p>
 * @method void setPath(string $Path) 设置<p>字幕文件地址</p>
 * @method string getSubtitleEmbedPath() 获取<p>翻译字幕压制视频路径。</p>
 * @method void setSubtitleEmbedPath(string $SubtitleEmbedPath) 设置<p>翻译字幕压制视频路径。</p>
 */
class SubtitleTransResultItem extends AbstractModel
{
    /**
     * @var string <p>翻译标识：</p><ul><li>Success</li><li>Error</li></ul>
     */
    public $Status;

    /**
     * @var string <p>源语言（如&quot;en&quot;）</p>
     */
    public $TransSrc;

    /**
     * @var string <p>目标语言（如&quot;zh&quot;）</p>
     */
    public $TransDst;

    /**
     * @var string <p>字幕文件地址</p>
     */
    public $Path;

    /**
     * @var string <p>翻译字幕压制视频路径。</p>
     */
    public $SubtitleEmbedPath;

    /**
     * @param string $Status <p>翻译标识：</p><ul><li>Success</li><li>Error</li></ul>
     * @param string $TransSrc <p>源语言（如&quot;en&quot;）</p>
     * @param string $TransDst <p>目标语言（如&quot;zh&quot;）</p>
     * @param string $Path <p>字幕文件地址</p>
     * @param string $SubtitleEmbedPath <p>翻译字幕压制视频路径。</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TransSrc",$param) and $param["TransSrc"] !== null) {
            $this->TransSrc = $param["TransSrc"];
        }

        if (array_key_exists("TransDst",$param) and $param["TransDst"] !== null) {
            $this->TransDst = $param["TransDst"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("SubtitleEmbedPath",$param) and $param["SubtitleEmbedPath"] !== null) {
            $this->SubtitleEmbedPath = $param["SubtitleEmbedPath"];
        }
    }
}
