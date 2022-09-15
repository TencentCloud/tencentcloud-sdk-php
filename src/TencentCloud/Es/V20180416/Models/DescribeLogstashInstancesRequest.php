<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLogstashInstances请求参数结构体
 *
 * @method string getZone() 获取实例所属可用区，不传则默认所有可用区
 * @method void setZone(string $Zone) 设置实例所属可用区，不传则默认所有可用区
 * @method array getInstanceIds() 获取实例ID列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表
 * @method array getInstanceNames() 获取实例名称列表
 * @method void setInstanceNames(array $InstanceNames) 设置实例名称列表
 * @method integer getOffset() 获取分页起始值, 默认值0
 * @method void setOffset(integer $Offset) 设置分页起始值, 默认值0
 * @method integer getLimit() 获取分页大小，默认值20
 * @method void setLimit(integer $Limit) 设置分页大小，默认值20
 * @method integer getOrderByKey() 获取排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
 * @method void setOrderByKey(integer $OrderByKey) 设置排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
 * @method integer getOrderByType() 获取排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
 * @method void setOrderByType(integer $OrderByType) 设置排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
 * @method array getVpcIds() 获取VpcId 筛选项
 * @method void setVpcIds(array $VpcIds) 设置VpcId 筛选项
 */
class DescribeLogstashInstancesRequest extends AbstractModel
{
    /**
     * @var string 实例所属可用区，不传则默认所有可用区
     */
    public $Zone;

    /**
     * @var array 实例ID列表
     */
    public $InstanceIds;

    /**
     * @var array 实例名称列表
     */
    public $InstanceNames;

    /**
     * @var integer 分页起始值, 默认值0
     */
    public $Offset;

    /**
     * @var integer 分页大小，默认值20
     */
    public $Limit;

    /**
     * @var integer 排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
     */
    public $OrderByKey;

    /**
     * @var integer 排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
     */
    public $OrderByType;

    /**
     * @var array VpcId 筛选项
     */
    public $VpcIds;

    /**
     * @param string $Zone 实例所属可用区，不传则默认所有可用区
     * @param array $InstanceIds 实例ID列表
     * @param array $InstanceNames 实例名称列表
     * @param integer $Offset 分页起始值, 默认值0
     * @param integer $Limit 分页大小，默认值20
     * @param integer $OrderByKey 排序字段<li>1：实例ID</li><li>2：实例名称</li><li>3：可用区</li><li>4：创建时间</li>若orderKey未传递则按创建时间降序排序
     * @param integer $OrderByType 排序方式<li>0：升序</li><li>1：降序</li>若传递了orderByKey未传递orderByType, 则默认升序
     * @param array $VpcIds VpcId 筛选项
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceNames",$param) and $param["InstanceNames"] !== null) {
            $this->InstanceNames = $param["InstanceNames"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderByKey",$param) and $param["OrderByKey"] !== null) {
            $this->OrderByKey = $param["OrderByKey"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }
    }
}
