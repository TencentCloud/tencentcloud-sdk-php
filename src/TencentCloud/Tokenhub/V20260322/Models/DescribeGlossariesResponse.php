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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGlossaries返回参数结构体
 *
 * @method array getItems() 获取术语库列表。
 * @method void setItems(array $Items) 设置术语库列表。
 * @method integer getTotalCount() 获取符合条件的术语库总数。
 * @method void setTotalCount(integer $TotalCount) 设置符合条件的术语库总数。
 * @method integer getCurrent() 获取当前页码。
 * @method void setCurrent(integer $Current) 设置当前页码。
 * @method integer getPageSize() 获取每页大小。
 * @method void setPageSize(integer $PageSize) 设置每页大小。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeGlossariesResponse extends AbstractModel
{
    /**
     * @var array 术语库列表。
     */
    public $Items;

    /**
     * @var integer 符合条件的术语库总数。
     */
    public $TotalCount;

    /**
     * @var integer 当前页码。
     */
    public $Current;

    /**
     * @var integer 每页大小。
     */
    public $PageSize;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Items 术语库列表。
     * @param integer $TotalCount 符合条件的术语库总数。
     * @param integer $Current 当前页码。
     * @param integer $PageSize 每页大小。
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new GlossaryItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Current",$param) and $param["Current"] !== null) {
            $this->Current = $param["Current"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
