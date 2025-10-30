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
 * 依赖项
 *
 * @method string getType() 获取依赖项类型，只有LandingZoneSetUp或AccountFactorySetUp。LandingZoneSetUp表示landingZone的依赖项；AccountFactorySetUp表示账号工厂的依赖项
 * @method void setType(string $Type) 设置依赖项类型，只有LandingZoneSetUp或AccountFactorySetUp。LandingZoneSetUp表示landingZone的依赖项；AccountFactorySetUp表示账号工厂的依赖项
 * @method string getIdentifier() 获取功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method void setIdentifier(string $Identifier) 设置功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 */
class DependsOnItem extends AbstractModel
{
    /**
     * @var string 依赖项类型，只有LandingZoneSetUp或AccountFactorySetUp。LandingZoneSetUp表示landingZone的依赖项；AccountFactorySetUp表示账号工厂的依赖项
     */
    public $Type;

    /**
     * @var string 功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     */
    public $Identifier;

    /**
     * @param string $Type 依赖项类型，只有LandingZoneSetUp或AccountFactorySetUp。LandingZoneSetUp表示landingZone的依赖项；AccountFactorySetUp表示账号工厂的依赖项
     * @param string $Identifier 功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
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

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }
    }
}
