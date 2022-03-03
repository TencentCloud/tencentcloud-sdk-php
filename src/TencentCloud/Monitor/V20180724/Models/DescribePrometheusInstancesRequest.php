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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusInstances请求参数结构体
 *
 * @method array getInstanceIds() 获取按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
 * @method void setInstanceIds(array $InstanceIds) 设置按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
 * @method array getInstanceStatus() 获取按照【实例状态】进行过滤。
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
 * @method void setInstanceStatus(array $InstanceStatus) 设置按照【实例状态】进行过滤。
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
 * @method string getInstanceName() 获取按照【实例名称】进行过滤。
 * @method void setInstanceName(string $InstanceName) 设置按照【实例名称】进行过滤。
 * @method array getZones() 获取按照【可用区】进行过滤。可用区形如：ap-guangzhou-1。
 * @method void setZones(array $Zones) 设置按照【可用区】进行过滤。可用区形如：ap-guangzhou-1。
 * @method array getTagFilters() 获取按照【标签键值对】进行过滤。tag-key使用具体的标签键进行替换。
 * @method void setTagFilters(array $TagFilters) 设置按照【标签键值对】进行过滤。tag-key使用具体的标签键进行替换。
 * @method array getIPv4Address() 获取按照【实例的IPv4地址】进行过滤。
 * @method void setIPv4Address(array $IPv4Address) 设置按照【实例的IPv4地址】进行过滤。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getInstanceChargeType() 获取按照【计费类型】进行过滤。
<li>2：包年包月</li>
<li>3：按量</li>
 * @method void setInstanceChargeType(integer $InstanceChargeType) 设置按照【计费类型】进行过滤。
<li>2：包年包月</li>
<li>3：按量</li>
 */
class DescribePrometheusInstancesRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
     */
    public $InstanceIds;

    /**
     * @var array 按照【实例状态】进行过滤。
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
     */
    public $InstanceStatus;

    /**
     * @var string 按照【实例名称】进行过滤。
     */
    public $InstanceName;

    /**
     * @var array 按照【可用区】进行过滤。可用区形如：ap-guangzhou-1。
     */
    public $Zones;

    /**
     * @var array 按照【标签键值对】进行过滤。tag-key使用具体的标签键进行替换。
     */
    public $TagFilters;

    /**
     * @var array 按照【实例的IPv4地址】进行过滤。
     */
    public $IPv4Address;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 按照【计费类型】进行过滤。
<li>2：包年包月</li>
<li>3：按量</li>
     */
    public $InstanceChargeType;

    /**
     * @param array $InstanceIds 按照一个或者多个实例ID查询。实例ID形如：prom-xxxxxxxx。请求的实例的上限为100。
     * @param array $InstanceStatus 按照【实例状态】进行过滤。
<ul>
<li>1：正在创建</li>
<li>2：运行中</li>
<li>3：异常</li>
<li>4：重建中</li>
<li>5：销毁中</li>
<li>6：已停服</li>
<li>8：欠费停服中</li>
<li>9：欠费已停服</li>
</ul>
     * @param string $InstanceName 按照【实例名称】进行过滤。
     * @param array $Zones 按照【可用区】进行过滤。可用区形如：ap-guangzhou-1。
     * @param array $TagFilters 按照【标签键值对】进行过滤。tag-key使用具体的标签键进行替换。
     * @param array $IPv4Address 按照【实例的IPv4地址】进行过滤。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $InstanceChargeType 按照【计费类型】进行过滤。
<li>2：包年包月</li>
<li>3：按量</li>
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

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("IPv4Address",$param) and $param["IPv4Address"] !== null) {
            $this->IPv4Address = $param["IPv4Address"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }
    }
}
