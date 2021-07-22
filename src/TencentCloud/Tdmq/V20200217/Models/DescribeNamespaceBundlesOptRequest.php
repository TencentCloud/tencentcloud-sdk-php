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
 * DescribeNamespaceBundlesOpt请求参数结构体
 *
 * @method string getClusterName() 获取物理集群名
 * @method void setClusterName(string $ClusterName) 设置物理集群名
 * @method string getTenantId() 获取虚拟集群（租户）ID
 * @method void setTenantId(string $TenantId) 设置虚拟集群（租户）ID
 * @method string getNamespaceName() 获取命名空间名
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名
 * @method boolean getNeedMetrics() 获取是否需要监控指标，若传false，则不需要传Limit和Offset分页参数
 * @method void setNeedMetrics(boolean $NeedMetrics) 设置是否需要监控指标，若传false，则不需要传Limit和Offset分页参数
 * @method integer getLimit() 获取查询限制条数
 * @method void setLimit(integer $Limit) 设置查询限制条数
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 */
class DescribeNamespaceBundlesOptRequest extends AbstractModel
{
    /**
     * @var string 物理集群名
     */
    public $ClusterName;

    /**
     * @var string 虚拟集群（租户）ID
     */
    public $TenantId;

    /**
     * @var string 命名空间名
     */
    public $NamespaceName;

    /**
     * @var boolean 是否需要监控指标，若传false，则不需要传Limit和Offset分页参数
     */
    public $NeedMetrics;

    /**
     * @var integer 查询限制条数
     */
    public $Limit;

    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @param string $ClusterName 物理集群名
     * @param string $TenantId 虚拟集群（租户）ID
     * @param string $NamespaceName 命名空间名
     * @param boolean $NeedMetrics 是否需要监控指标，若传false，则不需要传Limit和Offset分页参数
     * @param integer $Limit 查询限制条数
     * @param integer $Offset 查询偏移量
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
        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("NeedMetrics",$param) and $param["NeedMetrics"] !== null) {
            $this->NeedMetrics = $param["NeedMetrics"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
