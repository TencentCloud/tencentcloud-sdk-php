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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecLogJoinObjectList返回参数结构体
 *
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getList() 获取接入对象列表
 * @method void setList(array $List) 设置接入对象列表
 * @method integer getRangeType() 获取日志节点范围类型,0自选 1全部
 * @method void setRangeType(integer $RangeType) 设置日志节点范围类型,0自选 1全部
 * @method boolean getAutoJoin() 获取新增资产是否自动加入，节点范围为全部时生效
 * @method void setAutoJoin(boolean $AutoJoin) 设置新增资产是否自动加入，节点范围为全部时生效
 * @method integer getExcludedCount() 获取剔除节点数
 * @method void setExcludedCount(integer $ExcludedCount) 设置剔除节点数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSecLogJoinObjectListResponse extends AbstractModel
{
    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 接入对象列表
     */
    public $List;

    /**
     * @var integer 日志节点范围类型,0自选 1全部
     */
    public $RangeType;

    /**
     * @var boolean 新增资产是否自动加入，节点范围为全部时生效
     */
    public $AutoJoin;

    /**
     * @var integer 剔除节点数
     */
    public $ExcludedCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalCount 总数
     * @param array $List 接入对象列表
     * @param integer $RangeType 日志节点范围类型,0自选 1全部
     * @param boolean $AutoJoin 新增资产是否自动加入，节点范围为全部时生效
     * @param integer $ExcludedCount 剔除节点数
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

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new SecLogJoinObjectInfo();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("RangeType",$param) and $param["RangeType"] !== null) {
            $this->RangeType = $param["RangeType"];
        }

        if (array_key_exists("AutoJoin",$param) and $param["AutoJoin"] !== null) {
            $this->AutoJoin = $param["AutoJoin"];
        }

        if (array_key_exists("ExcludedCount",$param) and $param["ExcludedCount"] !== null) {
            $this->ExcludedCount = $param["ExcludedCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
