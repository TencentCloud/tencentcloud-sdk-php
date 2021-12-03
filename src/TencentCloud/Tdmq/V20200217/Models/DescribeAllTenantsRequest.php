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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAllTenants请求参数结构体
 *
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询限制条数
 * @method void setLimit(integer $Limit) 设置查询限制条数
 * @method string getClusterName() 获取物理集群名称
 * @method void setClusterName(string $ClusterName) 设置物理集群名称
 * @method string getTenantId() 获取虚拟集群ID
 * @method void setTenantId(string $TenantId) 设置虚拟集群ID
 * @method string getTenantName() 获取虚拟集群名称
 * @method void setTenantName(string $TenantName) 设置虚拟集群名称
 * @method array getTypes() 获取协议类型数组
 * @method void setTypes(array $Types) 设置协议类型数组
 * @method string getSortBy() 获取排序字段名，支持createTime，updateTime
 * @method void setSortBy(string $SortBy) 设置排序字段名，支持createTime，updateTime
 * @method string getSortOrder() 获取升序排列ASC，降序排列DESC
 * @method void setSortOrder(string $SortOrder) 设置升序排列ASC，降序排列DESC
 */
class DescribeAllTenantsRequest extends AbstractModel
{
    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 查询限制条数
     */
    public $Limit;

    /**
     * @var string 物理集群名称
     */
    public $ClusterName;

    /**
     * @var string 虚拟集群ID
     */
    public $TenantId;

    /**
     * @var string 虚拟集群名称
     */
    public $TenantName;

    /**
     * @var array 协议类型数组
     */
    public $Types;

    /**
     * @var string 排序字段名，支持createTime，updateTime
     */
    public $SortBy;

    /**
     * @var string 升序排列ASC，降序排列DESC
     */
    public $SortOrder;

    /**
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询限制条数
     * @param string $ClusterName 物理集群名称
     * @param string $TenantId 虚拟集群ID
     * @param string $TenantName 虚拟集群名称
     * @param array $Types 协议类型数组
     * @param string $SortBy 排序字段名，支持createTime，updateTime
     * @param string $SortOrder 升序排列ASC，降序排列DESC
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("TenantName",$param) and $param["TenantName"] !== null) {
            $this->TenantName = $param["TenantName"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
