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
 * AI换装配置信息。
 *
 * @method string getModel() 获取<p>换装模型。</p><p>枚举值：</p><ul><li>WAND-tryon-1.0-lite： 轻量档，速度优先。</li><li>WAND-tryon-1.0-flash： 均衡档，兼顾效果与时延。</li><li>WAND-tryon-1.0-pro： 高质量档，效果优先。</li></ul>
 * @method void setModel(string $Model) 设置<p>换装模型。</p><p>枚举值：</p><ul><li>WAND-tryon-1.0-lite： 轻量档，速度优先。</li><li>WAND-tryon-1.0-flash： 均衡档，兼顾效果与时延。</li><li>WAND-tryon-1.0-pro： 高质量档，效果优先。</li></ul>
 * @method array getClothesFileInfos() 获取<p>输入需要更换的衣物图片列表。支持1-4张图片。</p>
 * @method void setClothesFileInfos(array $ClothesFileInfos) 设置<p>输入需要更换的衣物图片列表。支持1-4张图片。</p>
 * @method string getPrompt() 获取<p>换装指令Prompt。</p>
 * @method void setPrompt(string $Prompt) 设置<p>换装指令Prompt。</p>
 */
class AiTryOnConfig extends AbstractModel
{
    /**
     * @var string <p>换装模型。</p><p>枚举值：</p><ul><li>WAND-tryon-1.0-lite： 轻量档，速度优先。</li><li>WAND-tryon-1.0-flash： 均衡档，兼顾效果与时延。</li><li>WAND-tryon-1.0-pro： 高质量档，效果优先。</li></ul>
     */
    public $Model;

    /**
     * @var array <p>输入需要更换的衣物图片列表。支持1-4张图片。</p>
     */
    public $ClothesFileInfos;

    /**
     * @var string <p>换装指令Prompt。</p>
     */
    public $Prompt;

    /**
     * @param string $Model <p>换装模型。</p><p>枚举值：</p><ul><li>WAND-tryon-1.0-lite： 轻量档，速度优先。</li><li>WAND-tryon-1.0-flash： 均衡档，兼顾效果与时延。</li><li>WAND-tryon-1.0-pro： 高质量档，效果优先。</li></ul>
     * @param array $ClothesFileInfos <p>输入需要更换的衣物图片列表。支持1-4张图片。</p>
     * @param string $Prompt <p>换装指令Prompt。</p>
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

        if (array_key_exists("ClothesFileInfos",$param) and $param["ClothesFileInfos"] !== null) {
            $this->ClothesFileInfos = [];
            foreach ($param["ClothesFileInfos"] as $key => $value){
                $obj = new SceneAigcImageTaskInputFileInfo();
                $obj->deserialize($value);
                array_push($this->ClothesFileInfos, $obj);
            }
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }
    }
}
