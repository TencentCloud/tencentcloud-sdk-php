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
 * @method string getNextToken() 获取<p>查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。</p>
 * @method void setNextToken(string $NextToken) 设置<p>查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。</p>
 * @method array getGroups() 获取<p>用户组列表。</p>
 * @method void setGroups(array $Groups) 设置<p>用户组列表。</p>
 * @method integer getMaxResults() 获取<p>每页的最大数据条数。</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>每页的最大数据条数。</p>
 * @method integer getTotalCounts() 获取<p>符合请求参数条件的数据总条数。</p>
 * @method void setTotalCounts(integer $TotalCounts) 设置<p>符合请求参数条件的数据总条数。</p>
 * @method boolean getIsTruncated() 获取<p>返回结果是否被截断。取值：  true：已截断。 false：未截断。</p>
 * @method void setIsTruncated(boolean $IsTruncated) 设置<p>返回结果是否被截断。取值：  true：已截断。 false：未截断。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListGroupsResponse extends AbstractModel
{
    /**
     * @var string <p>查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。</p>
     */
    public $NextToken;

    /**
     * @var array <p>用户组列表。</p>
     */
    public $Groups;

    /**
     * @var integer <p>每页的最大数据条数。</p>
     */
    public $MaxResults;

    /**
     * @var integer <p>符合请求参数条件的数据总条数。</p>
     */
    public $TotalCounts;

    /**
     * @var boolean <p>返回结果是否被截断。取值：  true：已截断。 false：未截断。</p>
     */
    public $IsTruncated;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $NextToken <p>查询返回结果下一页的令牌。  说明 只有IsTruncated为true时，才显示该参数。</p>
     * @param array $Groups <p>用户组列表。</p>
     * @param integer $MaxResults <p>每页的最大数据条数。</p>
     * @param integer $TotalCounts <p>符合请求参数条件的数据总条数。</p>
     * @param boolean $IsTruncated <p>返回结果是否被截断。取值：  true：已截断。 false：未截断。</p>
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
