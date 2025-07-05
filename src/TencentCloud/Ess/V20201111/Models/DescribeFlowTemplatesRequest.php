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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeFlowTemplates请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method Agent getAgent() 获取代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method void setAgent(Agent $Agent) 设置代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
 * @method integer getContentType() 获取查询内容控制

<ul><li>**0**：模板列表及详情（默认）</li>
<li>**1**：仅模板列表</li></ul>
 * @method void setContentType(integer $ContentType) 设置查询内容控制

<ul><li>**0**：模板列表及详情（默认）</li>
<li>**1**：仅模板列表</li></ul>
 * @method array getFilters() 获取搜索过滤的条件，本字段允许您通过指定模板 ID 或模板名称来进行查询。
<ul><li><strong>模板 ID</strong>：<strong>Key</strong>设置为 <code>template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">模板 ID </a>列表。</li>  <li><strong>主企业模板 ID</strong>：<strong>Key</strong>设置为 <code>share-template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">主企业模板 ID </a>列表。用来查询主企业分享模板到子企业场景下，子企业的模板信息，在此情境下，参数 <strong>Agent.ProxyOrganizationId</strong>（子企业的组织ID）为必填项。</li> <li><strong>模板名称</strong>：<strong>Key</strong>设置为 <code>template-name</code> ，<strong>Values</strong>为您想要查询的<a href="https://qcloudimg.tencent-cloud.cn/raw/03a924ee0a53d86575f8067d1c97876d.png" target="_blank">模板名称</a>列表。</li><li><strong>模板的用户合同类型</strong>：<strong>Key</strong>设置为 <code>user-flow-type-id</code> ，<strong>Values</strong>为您想要查询的用户模版类型id列表。</li></ul>
 * @method void setFilters(array $Filters) 设置搜索过滤的条件，本字段允许您通过指定模板 ID 或模板名称来进行查询。
<ul><li><strong>模板 ID</strong>：<strong>Key</strong>设置为 <code>template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">模板 ID </a>列表。</li>  <li><strong>主企业模板 ID</strong>：<strong>Key</strong>设置为 <code>share-template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">主企业模板 ID </a>列表。用来查询主企业分享模板到子企业场景下，子企业的模板信息，在此情境下，参数 <strong>Agent.ProxyOrganizationId</strong>（子企业的组织ID）为必填项。</li> <li><strong>模板名称</strong>：<strong>Key</strong>设置为 <code>template-name</code> ，<strong>Values</strong>为您想要查询的<a href="https://qcloudimg.tencent-cloud.cn/raw/03a924ee0a53d86575f8067d1c97876d.png" target="_blank">模板名称</a>列表。</li><li><strong>模板的用户合同类型</strong>：<strong>Key</strong>设置为 <code>user-flow-type-id</code> ，<strong>Values</strong>为您想要查询的用户模版类型id列表。</li></ul>
 * @method integer getOffset() 获取查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
 * @method void setOffset(integer $Offset) 设置查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
 * @method integer getLimit() 获取指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为200。`
 * @method void setLimit(integer $Limit) 设置指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为200。`
 * @method string getApplicationId() 获取通过指定[第三方应用的应用号（ApplicationId）](https://qcloudimg.tencent-cloud.cn/raw/60efa1e9049732e5246b20a268882b1a.png)，您可以查询<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中某个第三方应用下的模板。

<p><strong>注意事项：</strong></p>
<ul><li>当 <strong>ApplicationId</strong> 为空时（默认），系统将查询<a href="https://qcloudimg.tencent-cloud.cn/raw/376943a1d472393dd5388592f2e85ee5.png" target="_blank">平台企业的所有模板</a>（自建应用使用的模板）。</li><li>当 <strong>ApplicationId</strong> 不为空时，系统将从<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中查询该特定应用下的模板（分享给第三方应用子企业的模板）。</li></ul>
 * @method void setApplicationId(string $ApplicationId) 设置通过指定[第三方应用的应用号（ApplicationId）](https://qcloudimg.tencent-cloud.cn/raw/60efa1e9049732e5246b20a268882b1a.png)，您可以查询<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中某个第三方应用下的模板。

<p><strong>注意事项：</strong></p>
<ul><li>当 <strong>ApplicationId</strong> 为空时（默认），系统将查询<a href="https://qcloudimg.tencent-cloud.cn/raw/376943a1d472393dd5388592f2e85ee5.png" target="_blank">平台企业的所有模板</a>（自建应用使用的模板）。</li><li>当 <strong>ApplicationId</strong> 不为空时，系统将从<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中查询该特定应用下的模板（分享给第三方应用子企业的模板）。</li></ul>
 * @method boolean getIsChannel() 获取默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
 * @method void setIsChannel(boolean $IsChannel) 设置默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
 * @method OrganizationInfo getOrganization() 获取暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置暂未开放
 * @method integer getGenerateSource() 获取暂未开放
 * @method void setGenerateSource(integer $GenerateSource) 设置暂未开放
 * @method boolean getWithPreviewUrl() 获取是否获取模板预览链接。

<ul><li><strong>false</strong>：不获取（默认）</li><li><strong>true</strong>：需要获取</li></ul>
设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接, 有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。
 * @method void setWithPreviewUrl(boolean $WithPreviewUrl) 设置是否获取模板预览链接。

<ul><li><strong>false</strong>：不获取（默认）</li><li><strong>true</strong>：需要获取</li></ul>
设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接, 有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。
 */
class DescribeFlowTemplatesRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     */
    public $Agent;

    /**
     * @var integer 查询内容控制

<ul><li>**0**：模板列表及详情（默认）</li>
<li>**1**：仅模板列表</li></ul>
     */
    public $ContentType;

    /**
     * @var array 搜索过滤的条件，本字段允许您通过指定模板 ID 或模板名称来进行查询。
<ul><li><strong>模板 ID</strong>：<strong>Key</strong>设置为 <code>template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">模板 ID </a>列表。</li>  <li><strong>主企业模板 ID</strong>：<strong>Key</strong>设置为 <code>share-template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">主企业模板 ID </a>列表。用来查询主企业分享模板到子企业场景下，子企业的模板信息，在此情境下，参数 <strong>Agent.ProxyOrganizationId</strong>（子企业的组织ID）为必填项。</li> <li><strong>模板名称</strong>：<strong>Key</strong>设置为 <code>template-name</code> ，<strong>Values</strong>为您想要查询的<a href="https://qcloudimg.tencent-cloud.cn/raw/03a924ee0a53d86575f8067d1c97876d.png" target="_blank">模板名称</a>列表。</li><li><strong>模板的用户合同类型</strong>：<strong>Key</strong>设置为 <code>user-flow-type-id</code> ，<strong>Values</strong>为您想要查询的用户模版类型id列表。</li></ul>
     */
    public $Filters;

    /**
     * @var integer 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
     */
    public $Offset;

    /**
     * @var integer 指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为200。`
     */
    public $Limit;

    /**
     * @var string 通过指定[第三方应用的应用号（ApplicationId）](https://qcloudimg.tencent-cloud.cn/raw/60efa1e9049732e5246b20a268882b1a.png)，您可以查询<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中某个第三方应用下的模板。

<p><strong>注意事项：</strong></p>
<ul><li>当 <strong>ApplicationId</strong> 为空时（默认），系统将查询<a href="https://qcloudimg.tencent-cloud.cn/raw/376943a1d472393dd5388592f2e85ee5.png" target="_blank">平台企业的所有模板</a>（自建应用使用的模板）。</li><li>当 <strong>ApplicationId</strong> 不为空时，系统将从<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中查询该特定应用下的模板（分享给第三方应用子企业的模板）。</li></ul>
     */
    public $ApplicationId;

    /**
     * @var boolean 默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
     * @deprecated
     */
    public $IsChannel;

    /**
     * @var OrganizationInfo 暂未开放
     * @deprecated
     */
    public $Organization;

    /**
     * @var integer 暂未开放
     * @deprecated
     */
    public $GenerateSource;

    /**
     * @var boolean 是否获取模板预览链接。

<ul><li><strong>false</strong>：不获取（默认）</li><li><strong>true</strong>：需要获取</li></ul>
设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接, 有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。
     */
    public $WithPreviewUrl;

    /**
     * @param UserInfo $Operator 执行本接口操作的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param Agent $Agent 代理企业和员工的信息。
在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。
     * @param integer $ContentType 查询内容控制

<ul><li>**0**：模板列表及详情（默认）</li>
<li>**1**：仅模板列表</li></ul>
     * @param array $Filters 搜索过滤的条件，本字段允许您通过指定模板 ID 或模板名称来进行查询。
<ul><li><strong>模板 ID</strong>：<strong>Key</strong>设置为 <code>template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">模板 ID </a>列表。</li>  <li><strong>主企业模板 ID</strong>：<strong>Key</strong>设置为 <code>share-template-id</code> ，<strong>Values</strong>为您想要查询的 <a href="https://qcloudimg.tencent-cloud.cn/raw/5c27b917b2bbe8c341566c78ca6f8782.png" target="_blank">主企业模板 ID </a>列表。用来查询主企业分享模板到子企业场景下，子企业的模板信息，在此情境下，参数 <strong>Agent.ProxyOrganizationId</strong>（子企业的组织ID）为必填项。</li> <li><strong>模板名称</strong>：<strong>Key</strong>设置为 <code>template-name</code> ，<strong>Values</strong>为您想要查询的<a href="https://qcloudimg.tencent-cloud.cn/raw/03a924ee0a53d86575f8067d1c97876d.png" target="_blank">模板名称</a>列表。</li><li><strong>模板的用户合同类型</strong>：<strong>Key</strong>设置为 <code>user-flow-type-id</code> ，<strong>Values</strong>为您想要查询的用户模版类型id列表。</li></ul>
     * @param integer $Offset 查询结果分页返回，指定从第几页返回数据，和Limit参数配合使用。

注：`1.offset从0开始，即第一页为0。`
`2.默认从第一页返回。`
     * @param integer $Limit 指定每页返回的数据条数，和Offset参数配合使用。

注：`1.默认值为20，单页做大值为200。`
     * @param string $ApplicationId 通过指定[第三方应用的应用号（ApplicationId）](https://qcloudimg.tencent-cloud.cn/raw/60efa1e9049732e5246b20a268882b1a.png)，您可以查询<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中某个第三方应用下的模板。

<p><strong>注意事项：</strong></p>
<ul><li>当 <strong>ApplicationId</strong> 为空时（默认），系统将查询<a href="https://qcloudimg.tencent-cloud.cn/raw/376943a1d472393dd5388592f2e85ee5.png" target="_blank">平台企业的所有模板</a>（自建应用使用的模板）。</li><li>当 <strong>ApplicationId</strong> 不为空时，系统将从<a href="https://qcloudimg.tencent-cloud.cn/raw/18319e5e77f7d47eab493d43d47827d3.png" target="_blank">【应用模板库管理】</a>中查询该特定应用下的模板（分享给第三方应用子企业的模板）。</li></ul>
     * @param boolean $IsChannel 默认为false，查询SaaS模板库列表；
为true，查询第三方应用集成平台企业模板库管理列表
     * @param OrganizationInfo $Organization 暂未开放
     * @param integer $GenerateSource 暂未开放
     * @param boolean $WithPreviewUrl 是否获取模板预览链接。

<ul><li><strong>false</strong>：不获取（默认）</li><li><strong>true</strong>：需要获取</li></ul>
设置为true之后， 返回参数PreviewUrl，为模板的H5预览链接, 有效期5分钟。可以通过浏览器打开此链接预览模板，或者嵌入到iframe中预览模板。
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("IsChannel",$param) and $param["IsChannel"] !== null) {
            $this->IsChannel = $param["IsChannel"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("GenerateSource",$param) and $param["GenerateSource"] !== null) {
            $this->GenerateSource = $param["GenerateSource"];
        }

        if (array_key_exists("WithPreviewUrl",$param) and $param["WithPreviewUrl"] !== null) {
            $this->WithPreviewUrl = $param["WithPreviewUrl"];
        }
    }
}
