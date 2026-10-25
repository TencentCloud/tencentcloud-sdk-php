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
 * 角色场景配置
 *
 * @method string getModel() 获取<p>模型。</p><p>枚举值：</p><ul><li>character_scene_standard： 标准。</li><li>character_scene_mini： 轻量。</li><li>character_scene_fast： 快速。</li></ul>
 * @method void setModel(string $Model) 设置<p>模型。</p><p>枚举值：</p><ul><li>character_scene_standard： 标准。</li><li>character_scene_mini： 轻量。</li><li>character_scene_fast： 快速。</li></ul>
 * @method string getPromptMode() 获取<p>提示词模式。</p><p>枚举值：</p><ul><li>Standard： 标准模式，自行填写提示词。</li><li>Dynamic： 动态模式，由大模型根据参考素材产生提示词。</li></ul><p>默认值：Standard</p>
 * @method void setPromptMode(string $PromptMode) 设置<p>提示词模式。</p><p>枚举值：</p><ul><li>Standard： 标准模式，自行填写提示词。</li><li>Dynamic： 动态模式，由大模型根据参考素材产生提示词。</li></ul><p>默认值：Standard</p>
 */
class CharacterSceneConfig extends AbstractModel
{
    /**
     * @var string <p>模型。</p><p>枚举值：</p><ul><li>character_scene_standard： 标准。</li><li>character_scene_mini： 轻量。</li><li>character_scene_fast： 快速。</li></ul>
     */
    public $Model;

    /**
     * @var string <p>提示词模式。</p><p>枚举值：</p><ul><li>Standard： 标准模式，自行填写提示词。</li><li>Dynamic： 动态模式，由大模型根据参考素材产生提示词。</li></ul><p>默认值：Standard</p>
     */
    public $PromptMode;

    /**
     * @param string $Model <p>模型。</p><p>枚举值：</p><ul><li>character_scene_standard： 标准。</li><li>character_scene_mini： 轻量。</li><li>character_scene_fast： 快速。</li></ul>
     * @param string $PromptMode <p>提示词模式。</p><p>枚举值：</p><ul><li>Standard： 标准模式，自行填写提示词。</li><li>Dynamic： 动态模式，由大模型根据参考素材产生提示词。</li></ul><p>默认值：Standard</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("PromptMode",$param) and $param["PromptMode"] !== null) {
            $this->PromptMode = $param["PromptMode"];
        }
    }
}
