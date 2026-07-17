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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDetailedSingleProbeData返回参数结构体
 *
 * @method array getDataSet() 获取<p>单次详情数据</p>
 * @method void setDataSet(array $DataSet) 设置<p>单次详情数据</p>
 * @method integer getTotalNumber() 获取<p>符合条件的数据总数</p>
 * @method void setTotalNumber(integer $TotalNumber) 设置<p>符合条件的数据总数</p>
 * @method string getScrollID() 获取<p>es scroll查询的id</p>
 * @method void setScrollID(string $ScrollID) 设置<p>es scroll查询的id</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDetailedSingleProbeDataResponse extends AbstractModel
{
    /**
     * @var array <p>单次详情数据</p>
     */
    public $DataSet;

    /**
     * @var integer <p>符合条件的数据总数</p>
     */
    public $TotalNumber;

    /**
     * @var string <p>es scroll查询的id</p>
     */
    public $ScrollID;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $DataSet <p>单次详情数据</p>
     * @param integer $TotalNumber <p>符合条件的数据总数</p>
     * @param string $ScrollID <p>es scroll查询的id</p>
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
        if (array_key_exists("DataSet",$param) and $param["DataSet"] !== null) {
            $this->DataSet = [];
            foreach ($param["DataSet"] as $key => $value){
                $obj = new DetailedSingleDataDefine();
                $obj->deserialize($value);
                array_push($this->DataSet, $obj);
            }
        }

        if (array_key_exists("TotalNumber",$param) and $param["TotalNumber"] !== null) {
            $this->TotalNumber = $param["TotalNumber"];
        }

        if (array_key_exists("ScrollID",$param) and $param["ScrollID"] !== null) {
            $this->ScrollID = $param["ScrollID"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
