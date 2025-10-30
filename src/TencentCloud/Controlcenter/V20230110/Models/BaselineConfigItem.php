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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号工厂基线配置项
 *
 * @method string getIdentifier() 获取账号工厂基线项唯一标识,只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method void setIdentifier(string $Identifier) 设置账号工厂基线项唯一标识,只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method string getConfiguration() 获取账号工厂基线项配置，不同基线项配置参数不同。
 * @method void setConfiguration(string $Configuration) 设置账号工厂基线项配置，不同基线项配置参数不同。
 */
class BaselineConfigItem extends AbstractModel
{
    /**
     * @var string 账号工厂基线项唯一标识,只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     */
    public $Identifier;

    /**
     * @var string 账号工厂基线项配置，不同基线项配置参数不同。
     */
    public $Configuration;

    /**
     * @param string $Identifier 账号工厂基线项唯一标识,只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     * @param string $Configuration 账号工厂基线项配置，不同基线项配置参数不同。
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
        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("Configuration",$param) and $param["Configuration"] !== null) {
            $this->Configuration = $param["Configuration"];
        }
    }
}
