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
 * ListGroupMembers请求参数结构体
 *
 * @method string getZoneId() 获取空间 ID。
 * @method void setZoneId(string $ZoneId) 设置空间 ID。
 * @method string getGroupId() 获取用户组ID。
 * @method void setGroupId(string $GroupId) 设置用户组ID。
 * @method string getNextToken() 获取查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
 * @method void setNextToken(string $NextToken) 设置查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
 * @method integer getMaxResults() 获取每页的最大数据条数。  取值范围：1~100。  默认值：10。
 * @method void setMaxResults(integer $MaxResults) 设置每页的最大数据条数。  取值范围：1~100。  默认值：10。
 * @method string getUserType() 获取用户类型  Manual：手动创建，Synchronized：外部导入。
 * @method void setUserType(string $UserType) 设置用户类型  Manual：手动创建，Synchronized：外部导入。
 */
class ListGroupMembersRequest extends AbstractModel
{
    /**
     * @var string 空间 ID。
     */
    public $ZoneId;

    /**
     * @var string 用户组ID。
     */
    public $GroupId;

    /**
     * @var string 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
     */
    public $NextToken;

    /**
     * @var integer 每页的最大数据条数。  取值范围：1~100。  默认值：10。
     */
    public $MaxResults;

    /**
     * @var string 用户类型  Manual：手动创建，Synchronized：外部导入。
     */
    public $UserType;

    /**
     * @param string $ZoneId 空间 ID。
     * @param string $GroupId 用户组ID。
     * @param string $NextToken 查询返回结果下一页的令牌。首次调用 API 不需要NextToken。  当您首次调用 API 时，如果返回数据总条数超过MaxResults限制，数据会被截断，只返回MaxResults条数据，同时，返回参数IsTruncated为true，返回一个NextToken。您可以使用上一次返回的NextToken继续调用 API，其他请求参数保持不变，查询被截断的数据。您可以按此方法多次查询，直到IsTruncated为false，表示全部数据查询完毕。
     * @param integer $MaxResults 每页的最大数据条数。  取值范围：1~100。  默认值：10。
     * @param string $UserType 用户类型  Manual：手动创建，Synchronized：外部导入。
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

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
