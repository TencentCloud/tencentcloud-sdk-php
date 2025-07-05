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
namespace TencentCloud\Gs\V20191118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAndroidInstances请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为 0
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0
 * @method integer getLimit() 获取限制量，默认为20，最大值为100
 * @method void setLimit(integer $Limit) 设置限制量，默认为20，最大值为100
 * @method array getAndroidInstanceIds() 获取实例ID。每次请求的实例的上限为100。
 * @method void setAndroidInstanceIds(array $AndroidInstanceIds) 设置实例ID。每次请求的实例的上限为100。
 * @method string getAndroidInstanceRegion() 获取实例地域。目前还不支持按地域进行聚合查询
 * @method void setAndroidInstanceRegion(string $AndroidInstanceRegion) 设置实例地域。目前还不支持按地域进行聚合查询
 * @method string getAndroidInstanceZone() 获取实例可用区
 * @method void setAndroidInstanceZone(string $AndroidInstanceZone) 设置实例可用区
 * @method array getAndroidInstanceGroupIds() 获取实例分组 ID 列表
 * @method void setAndroidInstanceGroupIds(array $AndroidInstanceGroupIds) 设置实例分组 ID 列表
 * @method array getLabelSelector() 获取实例标签选择器
 * @method void setLabelSelector(array $LabelSelector) 设置实例标签选择器
 * @method array getFilters() 获取字段过滤器。Filter 的 Name 有以下值：
Name：实例名称
UserId：实例用户ID
HostSerialNumber：宿主机序列号
HostServerSerialNumber：机箱序列号
 * @method void setFilters(array $Filters) 设置字段过滤器。Filter 的 Name 有以下值：
Name：实例名称
UserId：实例用户ID
HostSerialNumber：宿主机序列号
HostServerSerialNumber：机箱序列号
 */
class DescribeAndroidInstancesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为 0
     */
    public $Offset;

    /**
     * @var integer 限制量，默认为20，最大值为100
     */
    public $Limit;

    /**
     * @var array 实例ID。每次请求的实例的上限为100。
     */
    public $AndroidInstanceIds;

    /**
     * @var string 实例地域。目前还不支持按地域进行聚合查询
     */
    public $AndroidInstanceRegion;

    /**
     * @var string 实例可用区
     */
    public $AndroidInstanceZone;

    /**
     * @var array 实例分组 ID 列表
     */
    public $AndroidInstanceGroupIds;

    /**
     * @var array 实例标签选择器
     */
    public $LabelSelector;

    /**
     * @var array 字段过滤器。Filter 的 Name 有以下值：
Name：实例名称
UserId：实例用户ID
HostSerialNumber：宿主机序列号
HostServerSerialNumber：机箱序列号
     */
    public $Filters;

    /**
     * @param integer $Offset 偏移量，默认为 0
     * @param integer $Limit 限制量，默认为20，最大值为100
     * @param array $AndroidInstanceIds 实例ID。每次请求的实例的上限为100。
     * @param string $AndroidInstanceRegion 实例地域。目前还不支持按地域进行聚合查询
     * @param string $AndroidInstanceZone 实例可用区
     * @param array $AndroidInstanceGroupIds 实例分组 ID 列表
     * @param array $LabelSelector 实例标签选择器
     * @param array $Filters 字段过滤器。Filter 的 Name 有以下值：
Name：实例名称
UserId：实例用户ID
HostSerialNumber：宿主机序列号
HostServerSerialNumber：机箱序列号
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

        if (array_key_exists("AndroidInstanceIds",$param) and $param["AndroidInstanceIds"] !== null) {
            $this->AndroidInstanceIds = $param["AndroidInstanceIds"];
        }

        if (array_key_exists("AndroidInstanceRegion",$param) and $param["AndroidInstanceRegion"] !== null) {
            $this->AndroidInstanceRegion = $param["AndroidInstanceRegion"];
        }

        if (array_key_exists("AndroidInstanceZone",$param) and $param["AndroidInstanceZone"] !== null) {
            $this->AndroidInstanceZone = $param["AndroidInstanceZone"];
        }

        if (array_key_exists("AndroidInstanceGroupIds",$param) and $param["AndroidInstanceGroupIds"] !== null) {
            $this->AndroidInstanceGroupIds = $param["AndroidInstanceGroupIds"];
        }

        if (array_key_exists("LabelSelector",$param) and $param["LabelSelector"] !== null) {
            $this->LabelSelector = [];
            foreach ($param["LabelSelector"] as $key => $value){
                $obj = new LabelRequirement();
                $obj->deserialize($value);
                array_push($this->LabelSelector, $obj);
            }
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
