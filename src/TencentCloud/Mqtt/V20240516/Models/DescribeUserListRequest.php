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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserList请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
 * @method array getFilters() 获取查询条件列表支持字段
Username：按照【用户名】进行过滤，支持模糊过滤，类型：String
 * @method void setFilters(array $Filters) 设置查询条件列表支持字段
Username：按照【用户名】进行过滤，支持模糊过滤，类型：String
 * @method integer getOffset() 获取查询起始位置，默认值0
 * @method void setOffset(integer $Offset) 设置查询起始位置，默认值0
 * @method integer getLimit() 获取查询结果限制数量，默认值20，最大值100
 * @method void setLimit(integer $Limit) 设置查询结果限制数量，默认值20，最大值100
 */
class DescribeUserListRequest extends AbstractModel
{
    /**
     * @var string 实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     */
    public $InstanceId;

    /**
     * @var array 查询条件列表支持字段
Username：按照【用户名】进行过滤，支持模糊过滤，类型：String
     */
    public $Filters;

    /**
     * @var integer 查询起始位置，默认值0
     */
    public $Offset;

    /**
     * @var integer 查询结果限制数量，默认值20，最大值100
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例ID，从 [DescribeInstanceList](https://cloud.tencent.com/document/api/1778/111029)接口或控制台获得。
     * @param array $Filters 查询条件列表支持字段
Username：按照【用户名】进行过滤，支持模糊过滤，类型：String
     * @param integer $Offset 查询起始位置，默认值0
     * @param integer $Limit 查询结果限制数量，默认值20，最大值100
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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
