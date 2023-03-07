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
namespace TencentCloud\Intlpartnersmgt\V20220928\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 获取国家码接口的一个元素类型
 *
 * @method string getEnName() 获取国家英文名
 * @method void setEnName(string $EnName) 设置国家英文名
 * @method string getName() 获取国家中文名
 * @method void setName(string $Name) 设置国家中文名
 * @method string getIOS2() 获取ISO2标准国家/地区代码
 * @method void setIOS2(string $IOS2) 设置ISO2标准国家/地区代码
 * @method string getIOS3() 获取ISO3标准国家/地区代码
 * @method void setIOS3(string $IOS3) 设置ISO3标准国家/地区代码
 * @method string getCode() 获取电话代码
 * @method void setCode(string $Code) 设置电话代码
 */
class CountryCodeItem extends AbstractModel
{
    /**
     * @var string 国家英文名
     */
    public $EnName;

    /**
     * @var string 国家中文名
     */
    public $Name;

    /**
     * @var string ISO2标准国家/地区代码
     */
    public $IOS2;

    /**
     * @var string ISO3标准国家/地区代码
     */
    public $IOS3;

    /**
     * @var string 电话代码
     */
    public $Code;

    /**
     * @param string $EnName 国家英文名
     * @param string $Name 国家中文名
     * @param string $IOS2 ISO2标准国家/地区代码
     * @param string $IOS3 ISO3标准国家/地区代码
     * @param string $Code 电话代码
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
        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IOS2",$param) and $param["IOS2"] !== null) {
            $this->IOS2 = $param["IOS2"];
        }

        if (array_key_exists("IOS3",$param) and $param["IOS3"] !== null) {
            $this->IOS3 = $param["IOS3"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }
    }
}
