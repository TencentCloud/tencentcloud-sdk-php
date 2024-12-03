<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 翻译对话参考示例
 *
 * @method string getType() 获取翻译文本类型，枚举"sentence"表示句子, "term"表示术语
 * @method void setType(string $Type) 设置翻译文本类型，枚举"sentence"表示句子, "term"表示术语
 * @method string getText() 获取原文
 * @method void setText(string $Text) 设置原文
 * @method string getTranslation() 获取译文
 * @method void setTranslation(string $Translation) 设置译文
 */
class Reference extends AbstractModel
{
    /**
     * @var string 翻译文本类型，枚举"sentence"表示句子, "term"表示术语
     */
    public $Type;

    /**
     * @var string 原文
     */
    public $Text;

    /**
     * @var string 译文
     */
    public $Translation;

    /**
     * @param string $Type 翻译文本类型，枚举"sentence"表示句子, "term"表示术语
     * @param string $Text 原文
     * @param string $Translation 译文
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Translation",$param) and $param["Translation"] !== null) {
            $this->Translation = $param["Translation"];
        }
    }
}
