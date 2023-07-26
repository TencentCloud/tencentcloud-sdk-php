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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 小程序加固信息
 *
 * @method string getAppletJsUrl() 获取客户JS包
 * @method void setAppletJsUrl(string $AppletJsUrl) 设置客户JS包
 * @method integer getAppletLevel() 获取小程序加固等级配置
1 - 开启代码混淆、代码压缩、代码反调试保护。 2 - 开启字符串编码和代码变换，代码膨胀，随机插入冗余代码，开启代码控制流平坦化，保证业务逻辑正常前提下，扁平化代码逻辑分支，破坏代码简单的线性结构。 3 - 开启代码加密，对字符串、函数、变量、属性、类、数组等结构进行加密保护，更多得代码控制流平坦化，扁平化逻辑分支。
 * @method void setAppletLevel(integer $AppletLevel) 设置小程序加固等级配置
1 - 开启代码混淆、代码压缩、代码反调试保护。 2 - 开启字符串编码和代码变换，代码膨胀，随机插入冗余代码，开启代码控制流平坦化，保证业务逻辑正常前提下，扁平化代码逻辑分支，破坏代码简单的线性结构。 3 - 开启代码加密，对字符串、函数、变量、属性、类、数组等结构进行加密保护，更多得代码控制流平坦化，扁平化逻辑分支。
 * @method string getName() 获取本次加固输出产物名称，如”test.zip“,非空必须是 ”.zip“结尾
 * @method void setName(string $Name) 设置本次加固输出产物名称，如”test.zip“,非空必须是 ”.zip“结尾
 */
class AppletInfo extends AbstractModel
{
    /**
     * @var string 客户JS包
     */
    public $AppletJsUrl;

    /**
     * @var integer 小程序加固等级配置
1 - 开启代码混淆、代码压缩、代码反调试保护。 2 - 开启字符串编码和代码变换，代码膨胀，随机插入冗余代码，开启代码控制流平坦化，保证业务逻辑正常前提下，扁平化代码逻辑分支，破坏代码简单的线性结构。 3 - 开启代码加密，对字符串、函数、变量、属性、类、数组等结构进行加密保护，更多得代码控制流平坦化，扁平化逻辑分支。
     */
    public $AppletLevel;

    /**
     * @var string 本次加固输出产物名称，如”test.zip“,非空必须是 ”.zip“结尾
     */
    public $Name;

    /**
     * @param string $AppletJsUrl 客户JS包
     * @param integer $AppletLevel 小程序加固等级配置
1 - 开启代码混淆、代码压缩、代码反调试保护。 2 - 开启字符串编码和代码变换，代码膨胀，随机插入冗余代码，开启代码控制流平坦化，保证业务逻辑正常前提下，扁平化代码逻辑分支，破坏代码简单的线性结构。 3 - 开启代码加密，对字符串、函数、变量、属性、类、数组等结构进行加密保护，更多得代码控制流平坦化，扁平化逻辑分支。
     * @param string $Name 本次加固输出产物名称，如”test.zip“,非空必须是 ”.zip“结尾
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
        if (array_key_exists("AppletJsUrl",$param) and $param["AppletJsUrl"] !== null) {
            $this->AppletJsUrl = $param["AppletJsUrl"];
        }

        if (array_key_exists("AppletLevel",$param) and $param["AppletLevel"] !== null) {
            $this->AppletLevel = $param["AppletLevel"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
