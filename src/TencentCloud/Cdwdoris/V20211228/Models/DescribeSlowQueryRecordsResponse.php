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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSlowQueryRecords返回参数结构体
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getSlowQueryRecords() 获取记录列表
 * @method void setSlowQueryRecords(array $SlowQueryRecords) 设置记录列表
 * @method array getDBNameList() 获取所有数据库名
 * @method void setDBNameList(array $DBNameList) 设置所有数据库名
 * @method array getCatalogNameList() 获取所有catalog名
 * @method void setCatalogNameList(array $CatalogNameList) 设置所有catalog名
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSlowQueryRecordsResponse extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 记录列表
     */
    public $SlowQueryRecords;

    /**
     * @var array 所有数据库名
     */
    public $DBNameList;

    /**
     * @var array 所有catalog名
     */
    public $CatalogNameList;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数
     * @param array $SlowQueryRecords 记录列表
     * @param array $DBNameList 所有数据库名
     * @param array $CatalogNameList 所有catalog名
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("SlowQueryRecords",$param) and $param["SlowQueryRecords"] !== null) {
            $this->SlowQueryRecords = [];
            foreach ($param["SlowQueryRecords"] as $key => $value){
                $obj = new SlowQueryRecord();
                $obj->deserialize($value);
                array_push($this->SlowQueryRecords, $obj);
            }
        }

        if (array_key_exists("DBNameList",$param) and $param["DBNameList"] !== null) {
            $this->DBNameList = $param["DBNameList"];
        }

        if (array_key_exists("CatalogNameList",$param) and $param["CatalogNameList"] !== null) {
            $this->CatalogNameList = $param["CatalogNameList"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
