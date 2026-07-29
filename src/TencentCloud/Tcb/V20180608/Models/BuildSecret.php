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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 构建密钥
 *
 * @method string getName() 获取<p>标准化为 DNS Label 风格；构建时注入为 $SECRET_&lt;NAME&gt;（同时也提供原大写形式 $SECRET_&lt;NAME_UPPERCASE&gt;）</p>
 * @method void setName(string $Name) 设置<p>标准化为 DNS Label 风格；构建时注入为 $SECRET_&lt;NAME&gt;（同时也提供原大写形式 $SECRET_&lt;NAME_UPPERCASE&gt;）</p>
 * @method string getValue() 获取<p>平台 AES 加密落库；DescribeVersion 永不回显明文</p>
 * @method void setValue(string $Value) 设置<p>平台 AES 加密落库；DescribeVersion 永不回显明文</p>
 */
class BuildSecret extends AbstractModel
{
    /**
     * @var string <p>标准化为 DNS Label 风格；构建时注入为 $SECRET_&lt;NAME&gt;（同时也提供原大写形式 $SECRET_&lt;NAME_UPPERCASE&gt;）</p>
     */
    public $Name;

    /**
     * @var string <p>平台 AES 加密落库；DescribeVersion 永不回显明文</p>
     */
    public $Value;

    /**
     * @param string $Name <p>标准化为 DNS Label 风格；构建时注入为 $SECRET_&lt;NAME&gt;（同时也提供原大写形式 $SECRET_&lt;NAME_UPPERCASE&gt;）</p>
     * @param string $Value <p>平台 AES 加密落库；DescribeVersion 永不回显明文</p>
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
