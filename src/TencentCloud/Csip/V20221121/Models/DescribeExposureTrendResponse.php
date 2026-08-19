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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExposureTrend返回参数结构体
 *
 * @method array getExposeTrendList() 获取暴露周期趋势数量统计信息
 * @method void setExposeTrendList(array $ExposeTrendList) 设置暴露周期趋势数量统计信息
 * @method integer getExposeIncrement() 获取暴露周期新增数量统计
 * @method void setExposeIncrement(integer $ExposeIncrement) 设置暴露周期新增数量统计
 * @method integer getOpenCount() 获取近1天（24h）完全开放数量
 * @method void setOpenCount(integer $OpenCount) 设置近1天（24h）完全开放数量
 * @method integer getAclCount() 获取近1天（24h）受限访问数量
 * @method void setAclCount(integer $AclCount) 设置近1天（24h）受限访问数量
 * @method integer getCloseCount() 获取近1天（24h）无法访问数量
 * @method void setCloseCount(integer $CloseCount) 设置近1天（24h）无法访问数量
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeExposureTrendResponse extends AbstractModel
{
    /**
     * @var array 暴露周期趋势数量统计信息
     */
    public $ExposeTrendList;

    /**
     * @var integer 暴露周期新增数量统计
     */
    public $ExposeIncrement;

    /**
     * @var integer 近1天（24h）完全开放数量
     */
    public $OpenCount;

    /**
     * @var integer 近1天（24h）受限访问数量
     */
    public $AclCount;

    /**
     * @var integer 近1天（24h）无法访问数量
     */
    public $CloseCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ExposeTrendList 暴露周期趋势数量统计信息
     * @param integer $ExposeIncrement 暴露周期新增数量统计
     * @param integer $OpenCount 近1天（24h）完全开放数量
     * @param integer $AclCount 近1天（24h）受限访问数量
     * @param integer $CloseCount 近1天（24h）无法访问数量
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
        if (array_key_exists("ExposeTrendList",$param) and $param["ExposeTrendList"] !== null) {
            $this->ExposeTrendList = [];
            foreach ($param["ExposeTrendList"] as $key => $value){
                $obj = new ExposeTrendItem();
                $obj->deserialize($value);
                array_push($this->ExposeTrendList, $obj);
            }
        }

        if (array_key_exists("ExposeIncrement",$param) and $param["ExposeIncrement"] !== null) {
            $this->ExposeIncrement = $param["ExposeIncrement"];
        }

        if (array_key_exists("OpenCount",$param) and $param["OpenCount"] !== null) {
            $this->OpenCount = $param["OpenCount"];
        }

        if (array_key_exists("AclCount",$param) and $param["AclCount"] !== null) {
            $this->AclCount = $param["AclCount"];
        }

        if (array_key_exists("CloseCount",$param) and $param["CloseCount"] !== null) {
            $this->CloseCount = $param["CloseCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
