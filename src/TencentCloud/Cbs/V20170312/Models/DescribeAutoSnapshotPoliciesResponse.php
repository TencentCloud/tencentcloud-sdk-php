<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取有效的定期快照策略数量。
 * @method void setTotalCount(integer $totalCount) 设置有效的定期快照策略数量。
 * @method array getAutoSnapshotPolicySet() 获取定期快照策略列表。
 * @method void setAutoSnapshotPolicySet(array $autoSnapshotPolicySet) 设置定期快照策略列表。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $requestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeAutoSnapshotPolicies返回参数结构体
 */
class DescribeAutoSnapshotPoliciesResponse extends AbstractModel
{
    /**
     * @var integer 有效的定期快照策略数量。
     */
    public $totalCount;

    /**
     * @var array 定期快照策略列表。
     */
    public $autoSnapshotPolicySet;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $requestId;
    /**
     * @param integer $totalCount 有效的定期快照策略数量。
     * @param array $autoSnapshotPolicySet 定期快照策略列表。
     * @param string $requestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->totalCount = $param["TotalCount"];
        }

        if (array_key_exists("AutoSnapshotPolicySet",$param) and $param["AutoSnapshotPolicySet"] !== null) {
            $this->autoSnapshotPolicySet = [];
            foreach ($param["AutoSnapshotPolicySet"] as $key => $value){
                $obj = new AutoSnapshotPolicy();
                $obj->deserialize($value);
                array_push($this->autoSnapshotPolicySet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->requestId = $param["RequestId"];
        }
    }
}
