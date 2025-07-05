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
 * CreateSubAppId请求参数结构体
 *
 * @method string getName() 获取应用名称，长度限制：40个字符。
 * @method void setName(string $Name) 设置应用名称，长度限制：40个字符。
 * @method string getDescription() 获取应用简介，长度限制： 300个字符。不填则应用简介默认为空。
 * @method void setDescription(string $Description) 设置应用简介，长度限制： 300个字符。不填则应用简介默认为空。
 * @method string getType() 获取应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。
 * @method void setType(string $Type) 设置应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。
 */
class CreateSubAppIdRequest extends AbstractModel
{
    /**
     * @var string 应用名称，长度限制：40个字符。
     */
    public $Name;

    /**
     * @var string 应用简介，长度限制： 300个字符。不填则应用简介默认为空。
     */
    public $Description;

    /**
     * @var string 应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。
     */
    public $Type;

    /**
     * @param string $Name 应用名称，长度限制：40个字符。
     * @param string $Description 应用简介，长度限制： 300个字符。不填则应用简介默认为空。
     * @param string $Type 应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
