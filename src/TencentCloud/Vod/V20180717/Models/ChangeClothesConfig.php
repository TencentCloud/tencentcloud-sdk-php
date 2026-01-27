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
 * @method array getClothesFileInfos() 获取输入需要更换的**衣物**图片列表。目前最大支持4张图片。
 * @method void setClothesFileInfos(array $ClothesFileInfos) 设置输入需要更换的**衣物**图片列表。目前最大支持4张图片。
 * @method string getPrompt() 获取AI换衣的提示词。
 * @method void setPrompt(string $Prompt) 设置AI换衣的提示词。
 */
class ChangeClothesConfig extends AbstractModel
{
    /**
     * @var array 输入需要更换的**衣物**图片列表。目前最大支持4张图片。
     */
    public $ClothesFileInfos;

    /**
     * @var string AI换衣的提示词。
     */
    public $Prompt;

    /**
     * @param array $ClothesFileInfos 输入需要更换的**衣物**图片列表。目前最大支持4张图片。
     * @param string $Prompt AI换衣的提示词。
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
