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
 * 爆款复刻内容/风格参数
 *
 * @method string getUserPrompt() 获取<p>自定义提示词，对生成视频的要求</p>
 * @method void setUserPrompt(string $UserPrompt) 设置<p>自定义提示词，对生成视频的要求</p>
 * @method string getLanguage() 获取<p>生成视频的目标语言，默认不指定，支持zh / en / ja / ko / es / pt / instrumental（纯音乐无口播）</p>
 * @method void setLanguage(string $Language) 设置<p>生成视频的目标语言，默认不指定，支持zh / en / ja / ko / es / pt / instrumental（纯音乐无口播）</p>
 * @method string getMarket() 获取<p>目标市场，默认不指定。可选north_america / europe / china / japan / korea / sea / brazil</p>
 * @method void setMarket(string $Market) 设置<p>目标市场，默认不指定。可选north_america / europe / china / japan / korea / sea / brazil</p>
 * @method string getFissionLevel() 获取<p>裂变程度。exact/low/medium/high，默认exact 1:1复刻</p>
 * @method void setFissionLevel(string $FissionLevel) 设置<p>裂变程度。exact/low/medium/high，默认exact 1:1复刻</p>
 */
class CloneViralContent extends AbstractModel
{
    /**
     * @var string <p>自定义提示词，对生成视频的要求</p>
     */
    public $UserPrompt;

    /**
     * @var string <p>生成视频的目标语言，默认不指定，支持zh / en / ja / ko / es / pt / instrumental（纯音乐无口播）</p>
     */
    public $Language;

    /**
     * @var string <p>目标市场，默认不指定。可选north_america / europe / china / japan / korea / sea / brazil</p>
     */
    public $Market;

    /**
     * @var string <p>裂变程度。exact/low/medium/high，默认exact 1:1复刻</p>
     */
    public $FissionLevel;

    /**
     * @param string $UserPrompt <p>自定义提示词，对生成视频的要求</p>
     * @param string $Language <p>生成视频的目标语言，默认不指定，支持zh / en / ja / ko / es / pt / instrumental（纯音乐无口播）</p>
     * @param string $Market <p>目标市场，默认不指定。可选north_america / europe / china / japan / korea / sea / brazil</p>
     * @param string $FissionLevel <p>裂变程度。exact/low/medium/high，默认exact 1:1复刻</p>
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
        if (array_key_exists("UserPrompt",$param) and $param["UserPrompt"] !== null) {
            $this->UserPrompt = $param["UserPrompt"];
        }

        if (array_key_exists("Language",$param) and $param["Language"] !== null) {
            $this->Language = $param["Language"];
        }

        if (array_key_exists("Market",$param) and $param["Market"] !== null) {
            $this->Market = $param["Market"];
        }

        if (array_key_exists("FissionLevel",$param) and $param["FissionLevel"] !== null) {
            $this->FissionLevel = $param["FissionLevel"];
        }
    }
}
