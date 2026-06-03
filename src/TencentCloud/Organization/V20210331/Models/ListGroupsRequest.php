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
 * ListGroups请求参数结构体
 *
 * @method string getZoneId() 获取<p>空间 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>空间 ID。</p>
 * @method string getNextToken() 获取<p>查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。</p>
 * @method void setNextToken(string $NextToken) 设置<p>查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。</p>
 * @method integer getMaxResults() 获取<p>每页的最大数据条数。  取值范围：1~100。  默认值：10。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页的最大数据条数。  取值范围：1~100。  默认值：10。</p>
 * @method string getFilter() 获取<p>过滤条件，用户组名称</p>
 * @method void setFilter(string $Filter) 设置<p>过滤条件，用户组名称</p>
 * @method string getGroupType() 获取<p>用户组的类型  Manual：手动创建，Synchronized：外部导入。</p>
 * @method void setGroupType(string $GroupType) 设置<p>用户组的类型  Manual：手动创建，Synchronized：外部导入。</p>
 * @method array getFilterUsers() 获取<p>筛选的用户，该用户关联的用户组会返回IsSelected=1</p>
 * @method void setFilterUsers(array $FilterUsers) 设置<p>筛选的用户，该用户关联的用户组会返回IsSelected=1</p>
 * @method string getSortField() 获取<p>排序的字段，目前只支持CreateTime，默认是CreateTime字段</p>
 * @method void setSortField(string $SortField) 设置<p>排序的字段，目前只支持CreateTime，默认是CreateTime字段</p>
 * @method string getSortType() 获取<p>排序类型：Desc 倒序 Asc  正序，需要您和SortField一起设置</p>
 * @method void setSortType(string $SortType) 设置<p>排序类型：Desc 倒序 Asc  正序，需要您和SortField一起设置</p>
 * @method integer getOffset() 获取<p>翻页offset. 不要与NextToken同时使用，优先使用NextToken</p>
 * @method void setOffset(integer $Offset) 设置<p>翻页offset. 不要与NextToken同时使用，优先使用NextToken</p>
 */
class ListGroupsRequest extends AbstractModel
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
     * @var string <p>过滤条件，用户组名称</p>
     */
    public $Filter;

    /**
     * @var string <p>用户组的类型  Manual：手动创建，Synchronized：外部导入。</p>
     */
    public $GroupType;

    /**
     * @var array <p>筛选的用户，该用户关联的用户组会返回IsSelected=1</p>
     */
    public $FilterUsers;

    /**
     * @var string <p>排序的字段，目前只支持CreateTime，默认是CreateTime字段</p>
     */
    public $SortField;

    /**
     * @var string <p>排序类型：Desc 倒序 Asc  正序，需要您和SortField一起设置</p>
     */
    public $SortType;

    /**
     * @var integer <p>翻页offset. 不要与NextToken同时使用，优先使用NextToken</p>
     */
    public $Offset;

    /**
     * @param string $ZoneId <p>空间 ID。</p>
     * @param string $NextToken <p>查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。</p>
     * @param integer $MaxResults <p>每页的最大数据条数。  取值范围：1~100。  默认值：10。</p>
     * @param string $Filter <p>过滤条件，用户组名称</p>
     * @param string $GroupType <p>用户组的类型  Manual：手动创建，Synchronized：外部导入。</p>
     * @param array $FilterUsers <p>筛选的用户，该用户关联的用户组会返回IsSelected=1</p>
     * @param string $SortField <p>排序的字段，目前只支持CreateTime，默认是CreateTime字段</p>
     * @param string $SortType <p>排序类型：Desc 倒序 Asc  正序，需要您和SortField一起设置</p>
     * @param integer $Offset <p>翻页offset. 不要与NextToken同时使用，优先使用NextToken</p>
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

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("FilterUsers",$param) and $param["FilterUsers"] !== null) {
            $this->FilterUsers = $param["FilterUsers"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
