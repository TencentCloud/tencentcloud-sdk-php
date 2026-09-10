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
 * dubbing任务压制字幕配置
 *
 * @method integer getSubtitleEmbedId() 获取<p>压制字幕id。</p>
 * @method void setSubtitleEmbedId(integer $SubtitleEmbedId) 设置<p>压制字幕id。</p>
 * @method integer getUseOriginalPos() 获取<p>沿用原字幕位置。</p><p>默认值：1</p>
 * @method void setUseOriginalPos(integer $UseOriginalPos) 设置<p>沿用原字幕位置。</p><p>默认值：1</p>
 * @method integer getUseOriginalSize() 获取<p>沿用原字幕字号。</p><p>默认值：1</p>
 * @method void setUseOriginalSize(integer $UseOriginalSize) 设置<p>沿用原字幕字号。</p><p>默认值：1</p>
 */
class DubbingEmbedSubtitleConfig extends AbstractModel
{
    /**
     * @var integer <p>压制字幕id。</p>
     */
    public $SubtitleEmbedId;

    /**
     * @var integer <p>沿用原字幕位置。</p><p>默认值：1</p>
     */
    public $UseOriginalPos;

    /**
     * @var integer <p>沿用原字幕字号。</p><p>默认值：1</p>
     */
    public $UseOriginalSize;

    /**
     * @param integer $SubtitleEmbedId <p>压制字幕id。</p>
     * @param integer $UseOriginalPos <p>沿用原字幕位置。</p><p>默认值：1</p>
     * @param integer $UseOriginalSize <p>沿用原字幕字号。</p><p>默认值：1</p>
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
        if (array_key_exists("SubtitleEmbedId",$param) and $param["SubtitleEmbedId"] !== null) {
            $this->SubtitleEmbedId = $param["SubtitleEmbedId"];
        }

        if (array_key_exists("UseOriginalPos",$param) and $param["UseOriginalPos"] !== null) {
            $this->UseOriginalPos = $param["UseOriginalPos"];
        }

        if (array_key_exists("UseOriginalSize",$param) and $param["UseOriginalSize"] !== null) {
            $this->UseOriginalSize = $param["UseOriginalSize"];
        }
    }
}
