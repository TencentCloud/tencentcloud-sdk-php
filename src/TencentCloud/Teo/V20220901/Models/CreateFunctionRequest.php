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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFunction请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getName() 获取函数名称，只能包含小写字母、数字、连字符，以数字或字母开头，以数字或字母结尾，最大支持 30 个字符。
 * @method void setName(string $Name) 设置函数名称，只能包含小写字母、数字、连字符，以数字或字母开头，以数字或字母结尾，最大支持 30 个字符。
 * @method string getContent() 获取函数内容，当前仅支持 JavaScript 代码，最大支持 5MB 大小。
 * @method void setContent(string $Content) 设置函数内容，当前仅支持 JavaScript 代码，最大支持 5MB 大小。
 * @method string getRemark() 获取函数描述，最大支持 60 个字符。
 * @method void setRemark(string $Remark) 设置函数描述，最大支持 60 个字符。
 */
class CreateFunctionRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 函数名称，只能包含小写字母、数字、连字符，以数字或字母开头，以数字或字母结尾，最大支持 30 个字符。
     */
    public $Name;

    /**
     * @var string 函数内容，当前仅支持 JavaScript 代码，最大支持 5MB 大小。
     */
    public $Content;

    /**
     * @var string 函数描述，最大支持 60 个字符。
     */
    public $Remark;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Name 函数名称，只能包含小写字母、数字、连字符，以数字或字母开头，以数字或字母结尾，最大支持 30 个字符。
     * @param string $Content 函数内容，当前仅支持 JavaScript 代码，最大支持 5MB 大小。
     * @param string $Remark 函数描述，最大支持 60 个字符。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
