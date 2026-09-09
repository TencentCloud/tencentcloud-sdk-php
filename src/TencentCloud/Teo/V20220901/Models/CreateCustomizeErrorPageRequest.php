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
 * CreateCustomizeErrorPage请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getName() 获取<p>自定义响应页面名称，名称为 2-30 个字符。</p>
 * @method void setName(string $Name) 设置<p>自定义响应页面名称，名称为 2-30 个字符。</p>
 * @method string getContentType() 获取<p>自定义响应页面类型，取值有：</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
 * @method void setContentType(string $ContentType) 设置<p>自定义响应页面类型，取值有：</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
 * @method string getDescription() 获取<p>自定义响应页面描述，描述不超过 60 个字符。</p>
 * @method void setDescription(string $Description) 设置<p>自定义响应页面描述，描述不超过 60 个字符。</p>
 * @method string getContent() 获取<p>自定义响应页面内容，内容不超过 16KB。</p>
 * @method void setContent(string $Content) 设置<p>自定义响应页面内容，内容不超过 16KB。</p>
 */
class CreateCustomizeErrorPageRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>自定义响应页面名称，名称为 2-30 个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>自定义响应页面类型，取值有：</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
     */
    public $ContentType;

    /**
     * @var string <p>自定义响应页面描述，描述不超过 60 个字符。</p>
     */
    public $Description;

    /**
     * @var string <p>自定义响应页面内容，内容不超过 16KB。</p>
     */
    public $Content;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Name <p>自定义响应页面名称，名称为 2-30 个字符。</p>
     * @param string $ContentType <p>自定义响应页面类型，取值有：</p><ul><li>text/html</li><li>application/json</li><li>plain/text</li><li>text/xml</li><li>text/css</li><li>text/javascript</li><li>application/javascript</li><li>text/markdown</li></ul>
     * @param string $Description <p>自定义响应页面描述，描述不超过 60 个字符。</p>
     * @param string $Content <p>自定义响应页面内容，内容不超过 16KB。</p>
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

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
