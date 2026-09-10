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
 * AI配音自定义参数
 *
 * @method DubbingTranslateConfig getTranslateConfig() 获取<p>翻译配置信息。</p>
 * @method void setTranslateConfig(DubbingTranslateConfig $TranslateConfig) 设置<p>翻译配置信息。</p>
 * @method DubbingSubtitleConfig getSubtitleConfig() 获取<p>字幕配置信息。</p>
 * @method void setSubtitleConfig(DubbingSubtitleConfig $SubtitleConfig) 设置<p>字幕配置信息。</p>
 * @method DubbingConfig getDubbingConfig() 获取<p>配音配置信息。</p>
 * @method void setDubbingConfig(DubbingConfig $DubbingConfig) 设置<p>配音配置信息。</p>
 * @method DubbingOutputConfig getOutputConfig() 获取<p>输出配置信息。</p>
 * @method void setOutputConfig(DubbingOutputConfig $OutputConfig) 设置<p>输出配置信息。</p>
 */
class OverrideAIDubbingParameter extends AbstractModel
{
    /**
     * @var DubbingTranslateConfig <p>翻译配置信息。</p>
     */
    public $TranslateConfig;

    /**
     * @var DubbingSubtitleConfig <p>字幕配置信息。</p>
     */
    public $SubtitleConfig;

    /**
     * @var DubbingConfig <p>配音配置信息。</p>
     */
    public $DubbingConfig;

    /**
     * @var DubbingOutputConfig <p>输出配置信息。</p>
     */
    public $OutputConfig;

    /**
     * @param DubbingTranslateConfig $TranslateConfig <p>翻译配置信息。</p>
     * @param DubbingSubtitleConfig $SubtitleConfig <p>字幕配置信息。</p>
     * @param DubbingConfig $DubbingConfig <p>配音配置信息。</p>
     * @param DubbingOutputConfig $OutputConfig <p>输出配置信息。</p>
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
        if (array_key_exists("TranslateConfig",$param) and $param["TranslateConfig"] !== null) {
            $this->TranslateConfig = new DubbingTranslateConfig();
            $this->TranslateConfig->deserialize($param["TranslateConfig"]);
        }

        if (array_key_exists("SubtitleConfig",$param) and $param["SubtitleConfig"] !== null) {
            $this->SubtitleConfig = new DubbingSubtitleConfig();
            $this->SubtitleConfig->deserialize($param["SubtitleConfig"]);
        }

        if (array_key_exists("DubbingConfig",$param) and $param["DubbingConfig"] !== null) {
            $this->DubbingConfig = new DubbingConfig();
            $this->DubbingConfig->deserialize($param["DubbingConfig"]);
        }

        if (array_key_exists("OutputConfig",$param) and $param["OutputConfig"] !== null) {
            $this->OutputConfig = new DubbingOutputConfig();
            $this->OutputConfig->deserialize($param["OutputConfig"]);
        }
    }
}
