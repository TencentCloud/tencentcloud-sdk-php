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
 * dubbing任务翻译配置
 *
 * @method string getVideoSrcLanguage() 获取<p>源语言。</p>
 * @method void setVideoSrcLanguage(string $VideoSrcLanguage) 设置<p>源语言。</p>
 * @method string getTranslateDstLanguage() 获取<p>翻译目标语言。</p>
 * @method void setTranslateDstLanguage(string $TranslateDstLanguage) 设置<p>翻译目标语言。</p>
 * @method string getSimplifyTranslation() 获取<p>智能简化译文。</p><p>枚举值：</p><ul><li>ON： 开启智能简化译文。</li><li>OFF： 关闭智能简化译文。</li></ul><p>默认值：OFF</p>
 * @method void setSimplifyTranslation(string $SimplifyTranslation) 设置<p>智能简化译文。</p><p>枚举值：</p><ul><li>ON： 开启智能简化译文。</li><li>OFF： 关闭智能简化译文。</li></ul><p>默认值：OFF</p>
 */
class DubbingTranslateConfig extends AbstractModel
{
    /**
     * @var string <p>源语言。</p>
     */
    public $VideoSrcLanguage;

    /**
     * @var string <p>翻译目标语言。</p>
     */
    public $TranslateDstLanguage;

    /**
     * @var string <p>智能简化译文。</p><p>枚举值：</p><ul><li>ON： 开启智能简化译文。</li><li>OFF： 关闭智能简化译文。</li></ul><p>默认值：OFF</p>
     */
    public $SimplifyTranslation;

    /**
     * @param string $VideoSrcLanguage <p>源语言。</p>
     * @param string $TranslateDstLanguage <p>翻译目标语言。</p>
     * @param string $SimplifyTranslation <p>智能简化译文。</p><p>枚举值：</p><ul><li>ON： 开启智能简化译文。</li><li>OFF： 关闭智能简化译文。</li></ul><p>默认值：OFF</p>
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
        if (array_key_exists("VideoSrcLanguage",$param) and $param["VideoSrcLanguage"] !== null) {
            $this->VideoSrcLanguage = $param["VideoSrcLanguage"];
        }

        if (array_key_exists("TranslateDstLanguage",$param) and $param["TranslateDstLanguage"] !== null) {
            $this->TranslateDstLanguage = $param["TranslateDstLanguage"];
        }

        if (array_key_exists("SimplifyTranslation",$param) and $param["SimplifyTranslation"] !== null) {
            $this->SimplifyTranslation = $param["SimplifyTranslation"];
        }
    }
}
