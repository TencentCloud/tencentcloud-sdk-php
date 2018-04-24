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
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getData() 获取慢查询日志数据
 * @method void setData(array $Data) 设置慢查询日志数据
 * @method string getLockTimeSum() 获取所有语句锁时间总和
 * @method void setLockTimeSum(string $LockTimeSum) 设置所有语句锁时间总和
 * @method string getQueryCount() 获取所有语句查询总次数
 * @method void setQueryCount(string $QueryCount) 设置所有语句查询总次数
 * @method string getTotal() 获取总记录数
 * @method void setTotal(string $Total) 设置总记录数
 * @method string getQueryTimeSum() 获取所有语句查询时间总和
 * @method void setQueryTimeSum(string $QueryTimeSum) 设置所有语句查询时间总和
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeDBSlowLogs返回参数结构体
 */
class DescribeDBSlowLogsResponse extends AbstractModel
{
    /**
     * @var array 慢查询日志数据
     */
    public $Data;

    /**
     * @var string 所有语句锁时间总和
     */
    public $LockTimeSum;

    /**
     * @var string 所有语句查询总次数
     */
    public $QueryCount;

    /**
     * @var string 总记录数
     */
    public $Total;

    /**
     * @var string 所有语句查询时间总和
     */
    public $QueryTimeSum;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param array $Data 慢查询日志数据
     * @param string $LockTimeSum 所有语句锁时间总和
     * @param string $QueryCount 所有语句查询总次数
     * @param string $Total 总记录数
     * @param string $QueryTimeSum 所有语句查询时间总和
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SlowLogData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("LockTimeSum",$param) and $param["LockTimeSum"] !== null) {
            $this->LockTimeSum = $param["LockTimeSum"];
        }

        if (array_key_exists("QueryCount",$param) and $param["QueryCount"] !== null) {
            $this->QueryCount = $param["QueryCount"];
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("QueryTimeSum",$param) and $param["QueryTimeSum"] !== null) {
            $this->QueryTimeSum = $param["QueryTimeSum"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
