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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAsyncJobs返回参数结构体
 *
 * @method array getJobs() 获取<p>异步任务列表</p>
 * @method void setJobs(array $Jobs) 设置<p>异步任务列表</p>
 * @method string getNextToken() 获取<p>分页游标</p>
 * @method void setNextToken(string $NextToken) 设置<p>分页游标</p>
 * @method integer getMaxResults() 获取<p>本次查询最大数量</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>本次查询最大数量</p>
 * @method integer getTotalCount() 获取<p>本次查询总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>本次查询总数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAsyncJobsResponse extends AbstractModel
{
    /**
     * @var array <p>异步任务列表</p>
     */
    public $Jobs;

    /**
     * @var string <p>分页游标</p>
     */
    public $NextToken;

    /**
     * @var integer <p>本次查询最大数量</p>
     */
    public $MaxResults;

    /**
     * @var integer <p>本次查询总数</p>
     */
    public $TotalCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Jobs <p>异步任务列表</p>
     * @param string $NextToken <p>分页游标</p>
     * @param integer $MaxResults <p>本次查询最大数量</p>
     * @param integer $TotalCount <p>本次查询总数</p>
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
        if (array_key_exists("Jobs",$param) and $param["Jobs"] !== null) {
            $this->Jobs = [];
            foreach ($param["Jobs"] as $key => $value){
                $obj = new Job();
                $obj->deserialize($value);
                array_push($this->Jobs, $obj);
            }
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
