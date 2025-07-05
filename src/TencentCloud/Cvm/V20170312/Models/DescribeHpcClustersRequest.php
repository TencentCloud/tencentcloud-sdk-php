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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHpcClusters请求参数结构体
 *
 * @method array getHpcClusterIds() 获取一个或多个待操作的高性能计算集群ID。集群ID信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。每次请求高性能计算集群信息的批量上限为100，默认配合Limit传参数，不能超过Limit值，Limit默认20。
 * @method void setHpcClusterIds(array $HpcClusterIds) 设置一个或多个待操作的高性能计算集群ID。集群ID信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。每次请求高性能计算集群信息的批量上限为100，默认配合Limit传参数，不能超过Limit值，Limit默认20。
 * @method string getName() 获取高性能计算集群名称，长度限制[1-60]。
 * @method void setName(string $Name) 设置高性能计算集群名称，长度限制[1-60]。
 * @method string getZone() 获取可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
 * @method void setZone(string $Zone) 设置可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
 * @method integer getOffset() 获取偏移量, 默认值0。
 * @method void setOffset(integer $Offset) 设置偏移量, 默认值0。
 * @method integer getLimit() 获取本次请求量, 默认值20，范围限制为[1-100]。
 * @method void setLimit(integer $Limit) 设置本次请求量, 默认值20，范围限制为[1-100]。
 * @method string getHpcClusterType() 获取高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
 * @method void setHpcClusterType(string $HpcClusterType) 设置高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
 * @method string getHpcClusterBusinessId() 获取高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。	
 * @method void setHpcClusterBusinessId(string $HpcClusterBusinessId) 设置高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。	
 * @method string getInstanceType() 获取高性能计算集群实例类型
 * @method void setInstanceType(string $InstanceType) 设置高性能计算集群实例类型
 * @method array getFilters() 获取<li><strong>tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag-value</strong></li> <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag:tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。
 * @method void setFilters(array $Filters) 设置<li><strong>tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag-value</strong></li> <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag:tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。
 */
class DescribeHpcClustersRequest extends AbstractModel
{
    /**
     * @var array 一个或多个待操作的高性能计算集群ID。集群ID信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。每次请求高性能计算集群信息的批量上限为100，默认配合Limit传参数，不能超过Limit值，Limit默认20。
     */
    public $HpcClusterIds;

    /**
     * @var string 高性能计算集群名称，长度限制[1-60]。
     */
    public $Name;

    /**
     * @var string 可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
     */
    public $Zone;

    /**
     * @var integer 偏移量, 默认值0。
     */
    public $Offset;

    /**
     * @var integer 本次请求量, 默认值20，范围限制为[1-100]。
     */
    public $Limit;

    /**
     * @var string 高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
     */
    public $HpcClusterType;

    /**
     * @var string 高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。	
     */
    public $HpcClusterBusinessId;

    /**
     * @var string 高性能计算集群实例类型
     */
    public $InstanceType;

    /**
     * @var array <li><strong>tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag-value</strong></li> <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag:tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。
     */
    public $Filters;

    /**
     * @param array $HpcClusterIds 一个或多个待操作的高性能计算集群ID。集群ID信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。每次请求高性能计算集群信息的批量上限为100，默认配合Limit传参数，不能超过Limit值，Limit默认20。
     * @param string $Name 高性能计算集群名称，长度限制[1-60]。
     * @param string $Zone 可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
     * @param integer $Offset 偏移量, 默认值0。
     * @param integer $Limit 本次请求量, 默认值20，范围限制为[1-100]。
     * @param string $HpcClusterType 高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
     * @param string $HpcClusterBusinessId 高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。	
     * @param string $InstanceType 高性能计算集群实例类型
     * @param array $Filters <li><strong>tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag-value</strong></li> <p style="padding-left: 30px;">按照【<strong>标签值</strong>】进行过滤。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> <li><strong>tag:tag-key</strong></li> <p style="padding-left: 30px;">按照【<strong>标签键值对</strong>】进行过滤。tag-key使用具体的标签键进行替换。</p><p style="padding-left: 30px;">类型：String</p><p style="padding-left: 30px;">必选：否</p> 每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。
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
        if (array_key_exists("HpcClusterIds",$param) and $param["HpcClusterIds"] !== null) {
            $this->HpcClusterIds = $param["HpcClusterIds"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("HpcClusterType",$param) and $param["HpcClusterType"] !== null) {
            $this->HpcClusterType = $param["HpcClusterType"];
        }

        if (array_key_exists("HpcClusterBusinessId",$param) and $param["HpcClusterBusinessId"] !== null) {
            $this->HpcClusterBusinessId = $param["HpcClusterBusinessId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
