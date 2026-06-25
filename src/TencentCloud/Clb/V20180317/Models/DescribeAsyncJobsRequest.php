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
 * DescribeAsyncJobs请求参数结构体
 *
 * @method array getRequestIds() 获取<p>请求ID列表</p>
 * @method void setRequestIds(array $RequestIds) 设置<p>请求ID列表</p>
 * @method string getNextToken() 获取<p>分页游标</p>
 * @method void setNextToken(string $NextToken) 设置<p>分页游标</p>
 * @method integer getMaxResults() 获取<p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 * @method void setMaxResults(integer $MaxResults) 设置<p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
 */
class DescribeAsyncJobsRequest extends AbstractModel
{
    /**
     * @var array <p>请求ID列表</p>
     */
    public $RequestIds;

    /**
     * @var string <p>分页游标</p>
     */
    public $NextToken;

    /**
     * @var integer <p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
     */
    public $MaxResults;

    /**
     * @param array $RequestIds <p>请求ID列表</p>
     * @param string $NextToken <p>分页游标</p>
     * @param integer $MaxResults <p>本次查询最大数量</p><p>取值范围：[1, 100]</p><p>默认值：20</p>
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
        if (array_key_exists("RequestIds",$param) and $param["RequestIds"] !== null) {
            $this->RequestIds = $param["RequestIds"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }

        if (array_key_exists("MaxResults",$param) and $param["MaxResults"] !== null) {
            $this->MaxResults = $param["MaxResults"];
        }
    }
}
