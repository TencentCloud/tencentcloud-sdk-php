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
 * 配置组版本信息。
 *
 * @method string getVersionId() 获取<p>配置组版本 ID，创建配置组版本时 EdgeOne 分配的唯一资源 ID。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
 * @method void setVersionId(string $VersionId) 设置<p>配置组版本 ID，创建配置组版本时 EdgeOne 分配的唯一资源 ID。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
 * @method string getVersionNumber() 获取<p>配置组版本号。该参数仅作展示使用，配置组每创建一次新版本，该版本号自增加一，初始版本的版本号为 &quot;0&quot;。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></p>
 * @method void setVersionNumber(string $VersionNumber) 设置<p>配置组版本号。该参数仅作展示使用，配置组每创建一次新版本，该版本号自增加一，初始版本的版本号为 &quot;0&quot;。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></p>
 * @method string getSourceVersion() 获取<p>配置组版本所基于的来源版本 ID，在创建配置组版本时进行指定来源版本 ID，新版本将在该来源版本的配置基础上派生创建。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
 * @method void setSourceVersion(string $SourceVersion) 设置<p>配置组版本所基于的来源版本 ID，在创建配置组版本时进行指定来源版本 ID，新版本将在该来源版本的配置基础上派生创建。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
 * @method string getGroupType() 获取<p>版本归属的配置组类型。</p><p>枚举值：</p><ul><li>l7_acceleration： 七层加速配置组</li><li>edge_functions： 边缘函数配置组</li><li>web_security： Web 防护配置组</li></ul>
 * @method void setGroupType(string $GroupType) 设置<p>版本归属的配置组类型。</p><p>枚举值：</p><ul><li>l7_acceleration： 七层加速配置组</li><li>edge_functions： 边缘函数配置组</li><li>web_security： Web 防护配置组</li></ul>
 * @method string getGroupId() 获取<p>版本归属的配置组 ID。</p><p>参数格式：cg-2kplomhisdcb</p>
 * @method void setGroupId(string $GroupId) 设置<p>版本归属的配置组 ID。</p><p>参数格式：cg-2kplomhisdcb</p>
 * @method string getDescription() 获取<p>版本描述。</p>
 * @method void setDescription(string $Description) 设置<p>版本描述。</p>
 * @method string getStatus() 获取<p>版本生效状态。</p><p>枚举值：</p><ul><li>creating： 版本创建中</li><li>inactive： 版本未生效</li><li>active： 版本已生效</li></ul>
 * @method void setStatus(string $Status) 设置<p>版本生效状态。</p><p>枚举值：</p><ul><li>creating： 版本创建中</li><li>inactive： 版本未生效</li><li>active： 版本已生效</li></ul>
 * @method string getCreateTime() 获取<p>版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
 */
class ConfigGroupVersionInfo extends AbstractModel
{
    /**
     * @var string <p>配置组版本 ID，创建配置组版本时 EdgeOne 分配的唯一资源 ID。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
     */
    public $VersionId;

    /**
     * @var string <p>配置组版本号。该参数仅作展示使用，配置组每创建一次新版本，该版本号自增加一，初始版本的版本号为 &quot;0&quot;。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></p>
     */
    public $VersionNumber;

    /**
     * @var string <p>配置组版本所基于的来源版本 ID，在创建配置组版本时进行指定来源版本 ID，新版本将在该来源版本的配置基础上派生创建。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
     */
    public $SourceVersion;

    /**
     * @var string <p>版本归属的配置组类型。</p><p>枚举值：</p><ul><li>l7_acceleration： 七层加速配置组</li><li>edge_functions： 边缘函数配置组</li><li>web_security： Web 防护配置组</li></ul>
     */
    public $GroupType;

    /**
     * @var string <p>版本归属的配置组 ID。</p><p>参数格式：cg-2kplomhisdcb</p>
     */
    public $GroupId;

    /**
     * @var string <p>版本描述。</p>
     */
    public $Description;

    /**
     * @var string <p>版本生效状态。</p><p>枚举值：</p><ul><li>creating： 版本创建中</li><li>inactive： 版本未生效</li><li>active： 版本已生效</li></ul>
     */
    public $Status;

    /**
     * @var string <p>版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
     */
    public $CreateTime;

    /**
     * @param string $VersionId <p>配置组版本 ID，创建配置组版本时 EdgeOne 分配的唯一资源 ID。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
     * @param string $VersionNumber <p>配置组版本号。该参数仅作展示使用，配置组每创建一次新版本，该版本号自增加一，初始版本的版本号为 &quot;0&quot;。</p><p>取值参考：<a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></p>
     * @param string $SourceVersion <p>配置组版本所基于的来源版本 ID，在创建配置组版本时进行指定来源版本 ID，新版本将在该来源版本的配置基础上派生创建。</p><p>参数格式：ver-2kplomhisdcb</p><p>取值参考：</p><ul><li><a href="https://cloud.tencent.com/document/api/1552/101867">CreateConfigGroupVersion</a> 返回值 <code>VersionId</code></li><li><a href="https://cloud.tencent.com/document/api/1552/101864">DescribeConfigGroupVersions</a> 返回值 <code>ConfigGroupVersionInfos</code></li></ul>
     * @param string $GroupType <p>版本归属的配置组类型。</p><p>枚举值：</p><ul><li>l7_acceleration： 七层加速配置组</li><li>edge_functions： 边缘函数配置组</li><li>web_security： Web 防护配置组</li></ul>
     * @param string $GroupId <p>版本归属的配置组 ID。</p><p>参数格式：cg-2kplomhisdcb</p>
     * @param string $Description <p>版本描述。</p>
     * @param string $Status <p>版本生效状态。</p><p>枚举值：</p><ul><li>creating： 版本创建中</li><li>inactive： 版本未生效</li><li>active： 版本已生效</li></ul>
     * @param string $CreateTime <p>版本创建时间。时间为世界标准时间（UTC）， 遵循 ISO 8601 标准的日期和时间格式。</p>
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
        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("VersionNumber",$param) and $param["VersionNumber"] !== null) {
            $this->VersionNumber = $param["VersionNumber"];
        }

        if (array_key_exists("SourceVersion",$param) and $param["SourceVersion"] !== null) {
            $this->SourceVersion = $param["SourceVersion"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
