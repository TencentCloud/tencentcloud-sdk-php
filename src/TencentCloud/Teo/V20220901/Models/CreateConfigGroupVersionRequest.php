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
 * CreateConfigGroupVersion请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getGroupId() 获取<p>待新建版本的配置组 ID。您可以通过查询环境信息接口（DescribeEnvironments）获取完整的环境信息，环境信息中包含了每个配置组类型的配置组 ID。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101862">DescribeEnvironments</a> 返回值 <code>EnvInfos</code></p>
 * @method void setGroupId(string $GroupId) 设置<p>待新建版本的配置组 ID。您可以通过查询环境信息接口（DescribeEnvironments）获取完整的环境信息，环境信息中包含了每个配置组类型的配置组 ID。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101862">DescribeEnvironments</a> 返回值 <code>EnvInfos</code></p>
 * @method string getContent() 获取<p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置文件内容可参考下方示例和 <a href="https://cloud.tencent.com/document/product/1552/125342">配置组语法说明</a>。</p>
 * @method void setContent(string $Content) 设置<p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置文件内容可参考下方示例和 <a href="https://cloud.tencent.com/document/product/1552/125342">配置组语法说明</a>。</p>
 * @method string getDescription() 获取<p>版本描述，可输入最大长度为 50 个字符，可以通过本字段填写该版本的使用场景等。</p>
 * @method void setDescription(string $Description) 设置<p>版本描述，可输入最大长度为 50 个字符，可以通过本字段填写该版本的使用场景等。</p>
 * @method string getSourceVersion() 获取<p>新版本所基于的来源版本 ID。新版本将在该来源版本的配置基础上派生创建。该字段可选，未传入时默认采用当前生产环境正在生效的版本作为来源版本。</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
 * @method void setSourceVersion(string $SourceVersion) 设置<p>新版本所基于的来源版本 ID。新版本将在该来源版本的配置基础上派生创建。该字段可选，未传入时默认采用当前生产环境正在生效的版本作为来源版本。</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
 */
class CreateConfigGroupVersionRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>待新建版本的配置组 ID。您可以通过查询环境信息接口（DescribeEnvironments）获取完整的环境信息，环境信息中包含了每个配置组类型的配置组 ID。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101862">DescribeEnvironments</a> 返回值 <code>EnvInfos</code></p>
     */
    public $GroupId;

    /**
     * @var string <p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置文件内容可参考下方示例和 <a href="https://cloud.tencent.com/document/product/1552/125342">配置组语法说明</a>。</p>
     */
    public $Content;

    /**
     * @var string <p>版本描述，可输入最大长度为 50 个字符，可以通过本字段填写该版本的使用场景等。</p>
     */
    public $Description;

    /**
     * @var string <p>新版本所基于的来源版本 ID。新版本将在该来源版本的配置基础上派生创建。该字段可选，未传入时默认采用当前生产环境正在生效的版本作为来源版本。</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
     */
    public $SourceVersion;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $GroupId <p>待新建版本的配置组 ID。您可以通过查询环境信息接口（DescribeEnvironments）获取完整的环境信息，环境信息中包含了每个配置组类型的配置组 ID。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101862">DescribeEnvironments</a> 返回值 <code>EnvInfos</code></p>
     * @param string $Content <p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置文件内容可参考下方示例和 <a href="https://cloud.tencent.com/document/product/1552/125342">配置组语法说明</a>。</p>
     * @param string $Description <p>版本描述，可输入最大长度为 50 个字符，可以通过本字段填写该版本的使用场景等。</p>
     * @param string $SourceVersion <p>新版本所基于的来源版本 ID。新版本将在该来源版本的配置基础上派生创建。该字段可选，未传入时默认采用当前生产环境正在生效的版本作为来源版本。</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }
    }
}
