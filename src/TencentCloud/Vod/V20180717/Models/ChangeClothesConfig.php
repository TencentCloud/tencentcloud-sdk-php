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
 * AI 换衣参数配置
 *
 * @method array getClothesFileInfos() 获取<p>输入需要更换的<strong>衣物</strong>图片列表。各类型最大支持衣物数量：</p><ul><li>change_clothes：4 张图片；</li><li>change_clothes_under：1 张图片；</li><li>change_clothes_full_wear：1 张图片；</li><li>change_clothes_top_wear：1 张图片；</li><li>change_clothes_bottom_wear：1 张图片；</li></ul>
 * @method void setClothesFileInfos(array $ClothesFileInfos) 设置<p>输入需要更换的<strong>衣物</strong>图片列表。各类型最大支持衣物数量：</p><ul><li>change_clothes：4 张图片；</li><li>change_clothes_under：1 张图片；</li><li>change_clothes_full_wear：1 张图片；</li><li>change_clothes_top_wear：1 张图片；</li><li>change_clothes_bottom_wear：1 张图片；</li></ul>
 * @method string getPrompt() 获取<p>AI换衣的提示词。<strong>仅Type为change_clothes有效。</strong></p>
 * @method void setPrompt(string $Prompt) 设置<p>AI换衣的提示词。<strong>仅Type为change_clothes有效。</strong></p>
 */
class ChangeClothesConfig extends AbstractModel
{
    /**
     * @var array <p>输入需要更换的<strong>衣物</strong>图片列表。各类型最大支持衣物数量：</p><ul><li>change_clothes：4 张图片；</li><li>change_clothes_under：1 张图片；</li><li>change_clothes_full_wear：1 张图片；</li><li>change_clothes_top_wear：1 张图片；</li><li>change_clothes_bottom_wear：1 张图片；</li></ul>
     */
    public $ClothesFileInfos;

    /**
     * @var string <p>AI换衣的提示词。<strong>仅Type为change_clothes有效。</strong></p>
     */
    public $Prompt;

    /**
     * @param array $ClothesFileInfos <p>输入需要更换的<strong>衣物</strong>图片列表。各类型最大支持衣物数量：</p><ul><li>change_clothes：4 张图片；</li><li>change_clothes_under：1 张图片；</li><li>change_clothes_full_wear：1 张图片；</li><li>change_clothes_top_wear：1 张图片；</li><li>change_clothes_bottom_wear：1 张图片；</li></ul>
     * @param string $Prompt <p>AI换衣的提示词。<strong>仅Type为change_clothes有效。</strong></p>
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
