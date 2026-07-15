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
 * Ai自动生成漫剧的输入
 *
 * @method string getScript() 获取<p>ai漫剧剧本</p><p>参数格式：无</p><p>入参限制：无</p>
 * @method void setScript(string $Script) 设置<p>ai漫剧剧本</p><p>参数格式：无</p><p>入参限制：无</p>
 * @method string getStyle() 获取<p>ai漫剧风格</p><p>枚举值：</p><ul><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p><p>枚举值：</p><ul><li>realistic_live_action： 真人写实</li><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p>
 * @method void setStyle(string $Style) 设置<p>ai漫剧风格</p><p>枚举值：</p><ul><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p><p>枚举值：</p><ul><li>realistic_live_action： 真人写实</li><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p>
 * @method string getRatio() 获取<p>宽高比</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li></ul><p>默认值：16:9</p>
 * @method void setRatio(string $Ratio) 设置<p>宽高比</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li></ul><p>默认值：16:9</p>
 * @method string getResolution() 获取<p>输出视频分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li></ul><p>默认值：720p</p>
 * @method void setResolution(string $Resolution) 设置<p>输出视频分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li></ul><p>默认值：720p</p>
 */
class AiDramaInput extends AbstractModel
{
    /**
     * @var string <p>ai漫剧剧本</p><p>参数格式：无</p><p>入参限制：无</p>
     */
    public $Script;

    /**
     * @var string <p>ai漫剧风格</p><p>枚举值：</p><ul><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p><p>枚举值：</p><ul><li>realistic_live_action： 真人写实</li><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p>
     */
    public $Style;

    /**
     * @var string <p>宽高比</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li></ul><p>默认值：16:9</p>
     */
    public $Ratio;

    /**
     * @var string <p>输出视频分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li></ul><p>默认值：720p</p>
     */
    public $Resolution;

    /**
     * @param string $Script <p>ai漫剧剧本</p><p>参数格式：无</p><p>入参限制：无</p>
     * @param string $Style <p>ai漫剧风格</p><p>枚举值：</p><ul><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p><p>枚举值：</p><ul><li>realistic_live_action： 真人写实</li><li>chinese_ink_wash： 国风水墨</li><li>fantasy_cyberpunk： 奇幻赛博朋克</li><li>japanese_anime_2d： 日漫二次元</li></ul><p>默认值：chinese_ink_wash</p>
     * @param string $Ratio <p>宽高比</p><p>枚举值：</p><ul><li>16:9： 16:9</li><li>9:16： 9:16</li></ul><p>默认值：16:9</p>
     * @param string $Resolution <p>输出视频分辨率</p><p>枚举值：</p><ul><li>720p： 720p</li><li>1080p： 1080p</li></ul><p>默认值：720p</p>
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
        if (array_key_exists("Script",$param) and $param["Script"] !== null) {
            $this->Script = $param["Script"];
        }

        if (array_key_exists("Style",$param) and $param["Style"] !== null) {
            $this->Style = $param["Style"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }
    }
}
