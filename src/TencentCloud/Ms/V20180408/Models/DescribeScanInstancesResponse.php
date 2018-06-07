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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalCount() 获取符合要求的app数量
 * @method void setTotalCount(integer $TotalCount) 设置符合要求的app数量
 * @method array getScanSet() 获取一个关于app详细信息的结构体，主要包括app的基本信息和扫描状态信息。
 * @method void setScanSet(array $ScanSet) 设置一个关于app详细信息的结构体，主要包括app的基本信息和扫描状态信息。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeScanInstances返回参数结构体
 */
class DescribeScanInstancesResponse extends AbstractModel
{
    /**
     * @var integer 符合要求的app数量
     */
    public $TotalCount;

    /**
     * @var array 一个关于app详细信息的结构体，主要包括app的基本信息和扫描状态信息。
     */
    public $ScanSet;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalCount 符合要求的app数量
     * @param array $ScanSet 一个关于app详细信息的结构体，主要包括app的基本信息和扫描状态信息。
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

        if (array_key_exists("ScanSet",$param) and $param["ScanSet"] !== null) {
            $this->ScanSet = [];
            foreach ($param["ScanSet"] as $key => $value){
                $obj = new AppScanSet();
                $obj->deserialize($value);
                array_push($this->ScanSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
