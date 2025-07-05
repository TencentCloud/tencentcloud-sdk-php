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
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getName() 获取自定义错误页名称，名称为 2-30 个字符。
 * @method void setName(string $Name) 设置自定义错误页名称，名称为 2-30 个字符。
 * @method string getContentType() 获取自定义错误页面类型，取值有：<li>text/html； </li><li>application/json；</li><li>text/plain；</li><li>text/xml。</li>
 * @method void setContentType(string $ContentType) 设置自定义错误页面类型，取值有：<li>text/html； </li><li>application/json；</li><li>text/plain；</li><li>text/xml。</li>
 * @method string getDescription() 获取自定义错误页面描述，描述不超过 60 个字符。
 * @method void setDescription(string $Description) 设置自定义错误页面描述，描述不超过 60 个字符。
 * @method string getContent() 获取自定义错误页面内容，内容不超过 2KB。
 * @method void setContent(string $Content) 设置自定义错误页面内容，内容不超过 2KB。
 */
class CreateCustomizeErrorPageRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 自定义错误页名称，名称为 2-30 个字符。
     */
    public $Name;

    /**
     * @var string 自定义错误页面类型，取值有：<li>text/html； </li><li>application/json；</li><li>text/plain；</li><li>text/xml。</li>
     */
    public $ContentType;

    /**
     * @var string 自定义错误页面描述，描述不超过 60 个字符。
     */
    public $Description;

    /**
     * @var string 自定义错误页面内容，内容不超过 2KB。
     */
    public $Content;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Name 自定义错误页名称，名称为 2-30 个字符。
     * @param string $ContentType 自定义错误页面类型，取值有：<li>text/html； </li><li>application/json；</li><li>text/plain；</li><li>text/xml。</li>
     * @param string $Description 自定义错误页面描述，描述不超过 60 个字符。
     * @param string $Content 自定义错误页面内容，内容不超过 2KB。
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
