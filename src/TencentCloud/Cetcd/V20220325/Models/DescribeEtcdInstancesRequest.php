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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEtcdInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取按照一个或者多个实例ID查询。实例ID形如：etcd-xxxxxxxx。参数不支持同时指定InstanceIds和Filters
 * @method void setInstanceIds(array $InstanceIds) 设置按照一个或者多个实例ID查询。实例ID形如：etcd-xxxxxxxx。参数不支持同时指定InstanceIds和Filters
 * @method array getFilters() 获取支持按照vpc-id和instance-id过滤。参数不支持同时指定InstanceIds和Filters
 * @method void setFilters(array $Filters) 设置支持按照vpc-id和instance-id过滤。参数不支持同时指定InstanceIds和Filters
 * @method integer getOffset() 获取偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0
 * @method integer getLimit() 获取返回数量，最大值为50
 * @method void setLimit(integer $Limit) 设置返回数量，最大值为50
 */
class DescribeEtcdInstancesRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个实例ID查询。实例ID形如：etcd-xxxxxxxx。参数不支持同时指定InstanceIds和Filters
     */
    public $InstanceIds;

    /**
     * @var array 支持按照vpc-id和instance-id过滤。参数不支持同时指定InstanceIds和Filters
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer 返回数量，最大值为50
     */
    public $Limit;

    /**
     * @param array $InstanceIds 按照一个或者多个实例ID查询。实例ID形如：etcd-xxxxxxxx。参数不支持同时指定InstanceIds和Filters
     * @param array $Filters 支持按照vpc-id和instance-id过滤。参数不支持同时指定InstanceIds和Filters
     * @param integer $Offset 偏移量，默认为0
     * @param integer $Limit 返回数量，最大值为50
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
