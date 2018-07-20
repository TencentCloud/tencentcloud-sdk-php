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
namespace TencentCloud\Tbm\V20180129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取查询范围内文章总数
 * @method void setTotalCount(integer $TotalCount) 设置查询范围内文章总数
 * @method array getDateCountSet() 获取按天计算的每天文章数
 * @method void setDateCountSet(array $DateCountSet) 设置按天计算的每天文章数
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeBrandMediaReport返回参数结构体
 */
class DescribeBrandMediaReportResponse extends AbstractModel
{
    /**
     * @var integer 查询范围内文章总数
     */
    public $TotalCount;

    /**
     * @var array 按天计算的每天文章数
     */
    public $DateCountSet;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 查询范围内文章总数
     * @param array $DateCountSet 按天计算的每天文章数
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("DateCountSet",$param) and $param["DateCountSet"] !== null) {
            $this->DateCountSet = [];
            foreach ($param["DateCountSet"] as $key => $value){
                $obj = new DateCount();
                $obj->deserialize($value);
                array_push($this->DateCountSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
