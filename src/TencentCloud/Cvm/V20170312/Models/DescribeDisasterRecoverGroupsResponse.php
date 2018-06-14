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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getDisasterRecoverGroupSet() 获取分散置放群组信息列表。
 * @method void setDisasterRecoverGroupSet(array $DisasterRecoverGroupSet) 设置分散置放群组信息列表。
 * @method integer getTotalCount() 获取用户置放群组总量。
 * @method void setTotalCount(integer $TotalCount) 设置用户置放群组总量。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeDisasterRecoverGroups返回参数结构体
 */
class DescribeDisasterRecoverGroupsResponse extends AbstractModel
{
    /**
     * @var array 分散置放群组信息列表。
     */
    public $DisasterRecoverGroupSet;

    /**
     * @var integer 用户置放群组总量。
     */
    public $TotalCount;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $DisasterRecoverGroupSet 分散置放群组信息列表。
     * @param integer $TotalCount 用户置放群组总量。
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("DisasterRecoverGroupSet",$param) and $param["DisasterRecoverGroupSet"] !== null) {
            $this->DisasterRecoverGroupSet = [];
            foreach ($param["DisasterRecoverGroupSet"] as $key => $value){
                $obj = new DisasterRecoverGroup();
                $obj->deserialize($value);
                array_push($this->DisasterRecoverGroupSet, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
