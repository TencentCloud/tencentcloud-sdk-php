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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PluginProfile
 *
 * @method string getAuthor() 获取插件作者
 * @method void setAuthor(string $Author) 设置插件作者
 * @method string getDescription() 获取插件描述
 * @method void setDescription(string $Description) 设置插件描述
 * @method string getIconUrl() 获取插件图标url
 * @method void setIconUrl(string $IconUrl) 设置插件图标url
 * @method string getName() 获取插件名称
 * @method void setName(string $Name) 设置插件名称
 * @method integer getPluginClass() 获取插件产品分类
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 普通插件 |
| 1 | 连接器类插件 |
 * @method void setPluginClass(integer $PluginClass) 设置插件产品分类
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 普通插件 |
| 1 | 连接器类插件 |
 * @method integer getPluginKind() 获取插件类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | API接口 |
| 1 | 代码 |
| 2 | MCP |
| 3 | 应用 |
 * @method void setPluginKind(integer $PluginKind) 设置插件类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | API接口 |
| 1 | 代码 |
| 2 | MCP |
| 3 | 应用 |
 * @method integer getPluginSource() 获取插件来源
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 自定义插件 |
| 1 | 官方插件 |
| 2 | 第三方插件 |
 * @method void setPluginSource(integer $PluginSource) 设置插件来源
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 自定义插件 |
| 1 | 官方插件 |
| 2 | 第三方插件 |
 */
class PluginProfile extends AbstractModel
{
    /**
     * @var string 插件作者
     */
    public $Author;

    /**
     * @var string 插件描述
     */
    public $Description;

    /**
     * @var string 插件图标url
     */
    public $IconUrl;

    /**
     * @var string 插件名称
     */
    public $Name;

    /**
     * @var integer 插件产品分类
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 普通插件 |
| 1 | 连接器类插件 |
     */
    public $PluginClass;

    /**
     * @var integer 插件类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | API接口 |
| 1 | 代码 |
| 2 | MCP |
| 3 | 应用 |
     */
    public $PluginKind;

    /**
     * @var integer 插件来源
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 自定义插件 |
| 1 | 官方插件 |
| 2 | 第三方插件 |
     */
    public $PluginSource;

    /**
     * @param string $Author 插件作者
     * @param string $Description 插件描述
     * @param string $IconUrl 插件图标url
     * @param string $Name 插件名称
     * @param integer $PluginClass 插件产品分类
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 普通插件 |
| 1 | 连接器类插件 |
     * @param integer $PluginKind 插件类型
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | API接口 |
| 1 | 代码 |
| 2 | MCP |
| 3 | 应用 |
     * @param integer $PluginSource 插件来源
枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 自定义插件 |
| 1 | 官方插件 |
| 2 | 第三方插件 |
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
        if (array_key_exists("Author",$param) and $param["Author"] !== null) {
            $this->Author = $param["Author"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IconUrl",$param) and $param["IconUrl"] !== null) {
            $this->IconUrl = $param["IconUrl"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("PluginClass",$param) and $param["PluginClass"] !== null) {
            $this->PluginClass = $param["PluginClass"];
        }

        if (array_key_exists("PluginKind",$param) and $param["PluginKind"] !== null) {
            $this->PluginKind = $param["PluginKind"];
        }

        if (array_key_exists("PluginSource",$param) and $param["PluginSource"] !== null) {
            $this->PluginSource = $param["PluginSource"];
        }
    }
}
