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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 通话结果具体信息
 *
 * @method string getText() 获取<p>提取的类型是文本</p>
 * @method void setText(string $Text) 设置<p>提取的类型是文本</p>
 * @method array getChosen() 获取<p>提取的类型是选项</p>
 * @method void setChosen(array $Chosen) 设置<p>提取的类型是选项</p>
 * @method boolean getBoolean() 获取<p>提取类型是布尔值</p>
 * @method void setBoolean(boolean $Boolean) 设置<p>提取类型是布尔值</p>
 * @method float getNumber() 获取<p>提取类型是数字</p>
 * @method void setNumber(float $Number) 设置<p>提取类型是数字</p>
 */
class AICallExtractResultInfo extends AbstractModel
{
    /**
     * @var string <p>提取的类型是文本</p>
     */
    public $Text;

    /**
     * @var array <p>提取的类型是选项</p>
     */
    public $Chosen;

    /**
     * @var boolean <p>提取类型是布尔值</p>
     */
    public $Boolean;

    /**
     * @var float <p>提取类型是数字</p>
     */
    public $Number;

    /**
     * @param string $Text <p>提取的类型是文本</p>
     * @param array $Chosen <p>提取的类型是选项</p>
     * @param boolean $Boolean <p>提取类型是布尔值</p>
     * @param float $Number <p>提取类型是数字</p>
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Chosen",$param) and $param["Chosen"] !== null) {
            $this->Chosen = $param["Chosen"];
        }

        if (array_key_exists("Boolean",$param) and $param["Boolean"] !== null) {
            $this->Boolean = $param["Boolean"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
