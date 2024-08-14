<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * ListUsers请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getUserStatus() 获取用户状态 Enabled：启用， Disabled：禁用。
 * @method void setUserStatus(string $UserStatus) 设置用户状态 Enabled：启用， Disabled：禁用。
 * @method string getUserType() 获取用户类型  Manual：手动创建，Synchronized：外部导入。
 * @method void setUserType(string $UserType) 设置用户类型  Manual：手动创建，Synchronized：外部导入。
 * @method string getFilter() 获取过滤条件。  目前仅支持用户名，邮箱，用户userId，描述
 * @method void setFilter(string $Filter) 设置过滤条件。  目前仅支持用户名，邮箱，用户userId，描述
 * @method integer getMaxResults() 获取每页的最大数据条数。  取值范围：1~100。  默认值：10。
 * @method void setMaxResults(integer $MaxResults) 设置每页的最大数据条数。  取值范围：1~100。  默认值：10。
 * @method string getNextToken() 获取查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法经过多次查询，直到IsTruncated为false时，表示全部数据查询完毕。
 * @method void setNextToken(string $NextToken) 设置查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法经过多次查询，直到IsTruncated为false时，表示全部数据查询完毕。
 * @method array getFilterGroups() 获取筛选的用户组，该用户组关联的子用户会返回IsSelected=1
 * @method void setFilterGroups(array $FilterGroups) 设置筛选的用户组，该用户组关联的子用户会返回IsSelected=1
 * @method string getSortField() 获取排序的字段，目前只支持CreateTime，默认是CreateTime字段
 * @method void setSortField(string $SortField) 设置排序的字段，目前只支持CreateTime，默认是CreateTime字段
 * @method string getSortType() 获取排序类型：Desc 倒序 Asc  正序，需要你和SortField一起设置
 * @method void setSortType(string $SortType) 设置排序类型：Desc 倒序 Asc  正序，需要你和SortField一起设置
 */
class ListUsersRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 用户状态 Enabled：启用， Disabled：禁用。
     */
    public $UserStatus;

    /**
     * @var string 用户类型  Manual：手动创建，Synchronized：外部导入。
     */
    public $UserType;

    /**
     * @var string 过滤条件。  目前仅支持用户名，邮箱，用户userId，描述
     */
    public $Filter;

    /**
     * @var integer 每页的最大数据条数。  取值范围：1~100。  默认值：10。
     */
    public $MaxResults;

    /**
     * @var string 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法经过多次查询，直到IsTruncated为false时，表示全部数据查询完毕。
     */
    public $NextToken;

    /**
     * @var array 筛选的用户组，该用户组关联的子用户会返回IsSelected=1
     */
    public $FilterGroups;

    /**
     * @var string 排序的字段，目前只支持CreateTime，默认是CreateTime字段
     */
    public $SortField;

    /**
     * @var string 排序类型：Desc 倒序 Asc  正序，需要你和SortField一起设置
     */
    public $SortType;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $UserStatus 用户状态 Enabled：启用， Disabled：禁用。
     * @param string $UserType 用户类型  Manual：手动创建，Synchronized：外部导入。
     * @param string $Filter 过滤条件。  目前仅支持用户名，邮箱，用户userId，描述
     * @param integer $MaxResults 每页的最大数据条数。  取值范围：1~100。  默认值：10。
     * @param string $NextToken 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法经过多次查询，直到IsTruncated为false时，表示全部数据查询完毕。
     * @param array $FilterGroups 筛选的用户组，该用户组关联的子用户会返回IsSelected=1
     * @param string $SortField 排序的字段，目前只支持CreateTime，默认是CreateTime字段
     * @param string $SortType 排序类型：Desc 倒序 Asc  正序，需要你和SortField一起设置
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

        if (array_key_exists("UserStatus",$param) and $param["UserStatus"] !== null) {
            $this->UserStatus = $param["UserStatus"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = $param["Filter"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("FilterGroups",$param) and $param["FilterGroups"] !== null) {
            $this->FilterGroups = $param["FilterGroups"];
        }

        if (array_key_exists("SortField",$param) and $param["SortField"] !== null) {
            $this->SortField = $param["SortField"];
        }

        if (array_key_exists("SortType",$param) and $param["SortType"] !== null) {
            $this->SortType = $param["SortType"];
        }
    }
}
