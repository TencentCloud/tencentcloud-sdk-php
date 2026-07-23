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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBlockList返回参数结构体
 *
 * @method array getData() 获取阻断记录集合
 * @method void setData(array $Data) 设置阻断记录集合
 * @method array getTopData() 获取置顶阻断记录集合
 * @method void setTopData(array $TopData) 设置置顶阻断记录集合
 * @method integer getTotal() 获取数量
 * @method void setTotal(integer $Total) 设置数量
 * @method integer getTopCount() 获取置顶数量
 * @method void setTopCount(integer $TopCount) 设置置顶数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeBlockListResponse extends AbstractModel
{
    /**
     * @var array 阻断记录集合
     */
    public $Data;

    /**
     * @var array 置顶阻断记录集合
     */
    public $TopData;

    /**
     * @var integer 数量
     */
    public $Total;

    /**
     * @var integer 置顶数量
     */
    public $TopCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 阻断记录集合
     * @param array $TopData 置顶阻断记录集合
     * @param integer $Total 数量
     * @param integer $TopCount 置顶数量
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new BlockInfo();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TopData",$param) and $param["TopData"] !== null) {
            $this->TopData = [];
            foreach ($param["TopData"] as $key => $value){
                $obj = new BlockInfo();
                $obj->deserialize($value);
                array_push($this->TopData, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("TopCount",$param) and $param["TopCount"] !== null) {
            $this->TopCount = $param["TopCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
