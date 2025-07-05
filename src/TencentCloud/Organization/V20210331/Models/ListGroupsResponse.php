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
 * ListGroups返回参数结构体
 *
 * @method string getNextToken() 获取查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。
 * @method void setNextToken(string $NextToken) 设置查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。
 * @method array getGroups() 获取用户组列表。
 * @method void setGroups(array $Groups) 设置用户组列表。
 * @method integer getMaxResults() 获取每页的最大数据条数。
 * @method void setMaxResults(integer $MaxResults) 设置每页的最大数据条数。
 * @method integer getTotalCounts() 获取符合请求参数条件的数据总条数。
 * @method void setTotalCounts(integer $TotalCounts) 设置符合请求参数条件的数据总条数。
 * @method boolean getIsTruncated() 获取返回结果是否被截断。取值：  true：已截断。 false：未截断。
 * @method void setIsTruncated(boolean $IsTruncated) 设置返回结果是否被截断。取值：  true：已截断。 false：未截断。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListGroupsResponse extends AbstractModel
{
    /**
     * @var string 查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。
     */
    public $NextToken;

    /**
     * @var array 用户组列表。
     */
    public $Groups;

    /**
     * @var integer 每页的最大数据条数。
     */
    public $MaxResults;

    /**
     * @var integer 符合请求参数条件的数据总条数。
     */
    public $TotalCounts;

    /**
     * @var boolean 返回结果是否被截断。取值：  true：已截断。 false：未截断。
     */
    public $IsTruncated;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NextToken 查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。
     * @param array $Groups 用户组列表。
     * @param integer $MaxResults 每页的最大数据条数。
     * @param integer $TotalCounts 符合请求参数条件的数据总条数。
     * @param boolean $IsTruncated 返回结果是否被截断。取值：  true：已截断。 false：未截断。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("TotalCounts",$param) and $param["TotalCounts"] !== null) {
            $this->TotalCounts = $param["TotalCounts"];
        }

        if (array_key_exists("IsTruncated",$param) and $param["IsTruncated"] !== null) {
            $this->IsTruncated = $param["IsTruncated"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
