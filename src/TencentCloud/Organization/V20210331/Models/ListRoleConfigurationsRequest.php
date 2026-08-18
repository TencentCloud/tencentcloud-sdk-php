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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListRoleConfigurations请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间 ID。</p>
 * @method string getNextToken() 获取<p>查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。</p>
 * @method void setNextToken(string $NextToken) 设置<p>查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。</p>
 * @method integer getMaxResults() 获取<p>每页的最大数据条数。  取值范围：1~100。  默认值：10。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页的最大数据条数。  取值范围：1~100。  默认值：10。</p>
 * @method string getFilter() 获取<p>过滤文本。不区分大小写。目前，支持 RoleConfigurationName和Description. 示例：Filter = &quot;test&quot;，表示查询名称或描述里包含 test 的权限配置。</p>
 * @method void setFilter(string $Filter) 设置<p>过滤文本。不区分大小写。目前，支持 RoleConfigurationName和Description. 示例：Filter = &quot;test&quot;，表示查询名称或描述里包含 test 的权限配置。</p>
 * @method array getFilterTargets() 获取<p>检索成员账号是否配置过权限，如果配置过返回IsSelected: true, 否则返回false。</p>
 * @method void setFilterTargets(array $FilterTargets) 设置<p>检索成员账号是否配置过权限，如果配置过返回IsSelected: true, 否则返回false。</p>
 * @method string getPrincipalId() 获取<p>授权的用户UserId或者用户组的GroupId，必须和入参数FilterTargets一起设置</p>
 * @method void setPrincipalId(string $PrincipalId) 设置<p>授权的用户UserId或者用户组的GroupId，必须和入参数FilterTargets一起设置</p>
 */
class ListRoleConfigurationsRequest extends AbstractModel
{
    /**
     * @var string <p>空间 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。</p>
     */
    public $NextToken;

    /**
     * @var integer <p>每页的最大数据条数。  取值范围：1~100。  默认值：10。</p>
     */
    public $MaxResults;

    /**
     * @var string <p>过滤文本。不区分大小写。目前，支持 RoleConfigurationName和Description. 示例：Filter = &quot;test&quot;，表示查询名称或描述里包含 test 的权限配置。</p>
     */
    public $Filter;

    /**
     * @var array <p>检索成员账号是否配置过权限，如果配置过返回IsSelected: true, 否则返回false。</p>
     */
    public $FilterTargets;

    /**
     * @var string <p>授权的用户UserId或者用户组的GroupId，必须和入参数FilterTargets一起设置</p>
     */
    public $PrincipalId;

    /**
     * @param string $ZoneId <p>空间 ID。</p>
     * @param string $NextToken <p>查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。</p>
     * @param integer $MaxResults <p>每页的最大数据条数。  取值范围：1~100。  默认值：10。</p>
     * @param string $Filter <p>过滤文本。不区分大小写。目前，支持 RoleConfigurationName和Description. 示例：Filter = &quot;test&quot;，表示查询名称或描述里包含 test 的权限配置。</p>
     * @param array $FilterTargets <p>检索成员账号是否配置过权限，如果配置过返回IsSelected: true, 否则返回false。</p>
     * @param string $PrincipalId <p>授权的用户UserId或者用户组的GroupId，必须和入参数FilterTargets一起设置</p>
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

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("FilterTargets",$param) and $param["FilterTargets"] !== null) {
            $this->FilterTargets = $param["FilterTargets"];
        }

        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }
    }
}
