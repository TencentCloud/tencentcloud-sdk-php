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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取实例元组，数量上限100
 * @method void setInstanceIds(array $InstanceIds) 设置实例元组，数量上限100
 * @method array getFilters() 获取描述键值对过滤器，用于条件过滤查询。目前支持的过滤器有： instance-id，实例id； instance-state，实例状态：RUNNING，PENDING，STOPPED，ARREARS，STOPPED_NO_CHARGE； charge-type，付费方式：PREPAID_BY_MONTH，POSTPAID_BY_HOUR； public-ip-address，公网IP过滤
 * @method void setFilters(array $Filters) 设置描述键值对过滤器，用于条件过滤查询。目前支持的过滤器有： instance-id，实例id； instance-state，实例状态：RUNNING，PENDING，STOPPED，ARREARS，STOPPED_NO_CHARGE； charge-type，付费方式：PREPAID_BY_MONTH，POSTPAID_BY_HOUR； public-ip-address，公网IP过滤
 * @method integer getOffset() 获取偏移量，默认为0，不得大于100
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0，不得大于100
 * @method integer getLimit() 获取返回量，默认为20，不能小于0
 * @method void setLimit(integer $Limit) 设置返回量，默认为20，不能小于0
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 实例元组，数量上限100
     */
    public $InstanceIds;

    /**
     * @var array 描述键值对过滤器，用于条件过滤查询。目前支持的过滤器有： instance-id，实例id； instance-state，实例状态：RUNNING，PENDING，STOPPED，ARREARS，STOPPED_NO_CHARGE； charge-type，付费方式：PREPAID_BY_MONTH，POSTPAID_BY_HOUR； public-ip-address，公网IP过滤
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0，不得大于100
     */
    public $Offset;

    /**
     * @var integer 返回量，默认为20，不能小于0
     */
    public $Limit;

    /**
     * @param array $InstanceIds 实例元组，数量上限100
     * @param array $Filters 描述键值对过滤器，用于条件过滤查询。目前支持的过滤器有： instance-id，实例id； instance-state，实例状态：RUNNING，PENDING，STOPPED，ARREARS，STOPPED_NO_CHARGE； charge-type，付费方式：PREPAID_BY_MONTH，POSTPAID_BY_HOUR； public-ip-address，公网IP过滤
     * @param integer $Offset 偏移量，默认为0，不得大于100
     * @param integer $Limit 返回量，默认为20，不能小于0
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
