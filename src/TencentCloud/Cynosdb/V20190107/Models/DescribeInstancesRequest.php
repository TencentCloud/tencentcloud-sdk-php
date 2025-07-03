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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method integer getLimit() 获取返回数量，默认为 20，取值范围为(0,100]
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，取值范围为(0,100]
 * @method integer getOffset() 获取记录偏移量，默认值为0
 * @method void setOffset(integer $Offset) 设置记录偏移量，默认值为0
 * @method string getOrderBy() 获取排序字段，取值范围：
<li> CREATETIME：创建时间</li>
<li> PERIODENDTIME：过期时间</li>
 * @method void setOrderBy(string $OrderBy) 设置排序字段，取值范围：
<li> CREATETIME：创建时间</li>
<li> PERIODENDTIME：过期时间</li>
 * @method string getOrderByType() 获取排序类型，取值范围：
<li> ASC：升序排序 </li>
<li> DESC：降序排序 </li>
 * @method void setOrderByType(string $OrderByType) 设置排序类型，取值范围：
<li> ASC：升序排序 </li>
<li> DESC：降序排序 </li>
 * @method array getFilters() 获取搜索条件，若存在多个Filter时，Filter间的关系为逻辑与（AND）关系。
 * @method void setFilters(array $Filters) 设置搜索条件，若存在多个Filter时，Filter间的关系为逻辑与（AND）关系。
 * @method string getDbType() 获取引擎类型：目前支持“MYSQL”
 * @method void setDbType(string $DbType) 设置引擎类型：目前支持“MYSQL”
 * @method string getStatus() 获取实例状态, 可选值:
creating 创建中
running 运行中
isolating 隔离中
isolated 已隔离
activating 恢复中
offlining 下线中
offlined 已下线
 * @method void setStatus(string $Status) 设置实例状态, 可选值:
creating 创建中
running 运行中
isolating 隔离中
isolated 已隔离
activating 恢复中
offlining 下线中
offlined 已下线
 * @method array getInstanceIds() 获取实例id列表
 * @method void setInstanceIds(array $InstanceIds) 设置实例id列表
 * @method string getClusterType() 获取集群类型，取值范围<li> CYNOSDB：事务集群 </li><li> LIBRADB：分析集群 </li><li> ALL：全部 </li>，缺省为 ALL
 * @method void setClusterType(string $ClusterType) 设置集群类型，取值范围<li> CYNOSDB：事务集群 </li><li> LIBRADB：分析集群 </li><li> ALL：全部 </li>，缺省为 ALL
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var integer 返回数量，默认为 20，取值范围为(0,100]
     */
    public $Limit;

    /**
     * @var integer 记录偏移量，默认值为0
     */
    public $Offset;

    /**
     * @var string 排序字段，取值范围：
<li> CREATETIME：创建时间</li>
<li> PERIODENDTIME：过期时间</li>
     */
    public $OrderBy;

    /**
     * @var string 排序类型，取值范围：
<li> ASC：升序排序 </li>
<li> DESC：降序排序 </li>
     */
    public $OrderByType;

    /**
     * @var array 搜索条件，若存在多个Filter时，Filter间的关系为逻辑与（AND）关系。
     */
    public $Filters;

    /**
     * @var string 引擎类型：目前支持“MYSQL”
     */
    public $DbType;

    /**
     * @var string 实例状态, 可选值:
creating 创建中
running 运行中
isolating 隔离中
isolated 已隔离
activating 恢复中
offlining 下线中
offlined 已下线
     */
    public $Status;

    /**
     * @var array 实例id列表
     */
    public $InstanceIds;

    /**
     * @var string 集群类型，取值范围<li> CYNOSDB：事务集群 </li><li> LIBRADB：分析集群 </li><li> ALL：全部 </li>，缺省为 ALL
     */
    public $ClusterType;

    /**
     * @param integer $Limit 返回数量，默认为 20，取值范围为(0,100]
     * @param integer $Offset 记录偏移量，默认值为0
     * @param string $OrderBy 排序字段，取值范围：
<li> CREATETIME：创建时间</li>
<li> PERIODENDTIME：过期时间</li>
     * @param string $OrderByType 排序类型，取值范围：
<li> ASC：升序排序 </li>
<li> DESC：降序排序 </li>
     * @param array $Filters 搜索条件，若存在多个Filter时，Filter间的关系为逻辑与（AND）关系。
     * @param string $DbType 引擎类型：目前支持“MYSQL”
     * @param string $Status 实例状态, 可选值:
creating 创建中
running 运行中
isolating 隔离中
isolated 已隔离
activating 恢复中
offlining 下线中
offlined 已下线
     * @param array $InstanceIds 实例id列表
     * @param string $ClusterType 集群类型，取值范围<li> CYNOSDB：事务集群 </li><li> LIBRADB：分析集群 </li><li> ALL：全部 </li>，缺省为 ALL
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
