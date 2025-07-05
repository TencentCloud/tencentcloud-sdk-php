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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePodsBySpec请求参数结构体
 *
 * @method float getCpu() 获取核数
 * @method void setCpu(float $Cpu) 设置核数
 * @method float getMemory() 获取内存
 * @method void setMemory(float $Memory) 设置内存
 * @method string getGpuNum() 获取卡数，有0.25、0.5、1、2、4等
 * @method void setGpuNum(string $GpuNum) 设置卡数，有0.25、0.5、1、2、4等
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method array getFilters() 获取pod-type
按照**【Pod 类型**】进行过滤。资源类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
类型：String
必选：否

pod-deduct
按照**【上个周期抵扣的Pod**】进行过滤。Values可不设置。
必选：否

pod-not-deduct
按照**【上个周期未抵扣的Pod**】进行过滤。Values可不设置。
必选：否
 * @method void setFilters(array $Filters) 设置pod-type
按照**【Pod 类型**】进行过滤。资源类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
类型：String
必选：否

pod-deduct
按照**【上个周期抵扣的Pod**】进行过滤。Values可不设置。
必选：否

pod-not-deduct
按照**【上个周期未抵扣的Pod**】进行过滤。Values可不设置。
必选：否
 */
class DescribePodsBySpecRequest extends AbstractModel
{
    /**
     * @var float 核数
     */
    public $Cpu;

    /**
     * @var float 内存
     */
    public $Memory;

    /**
     * @var string 卡数，有0.25、0.5、1、2、4等
     */
    public $GpuNum;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var array pod-type
按照**【Pod 类型**】进行过滤。资源类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
类型：String
必选：否

pod-deduct
按照**【上个周期抵扣的Pod**】进行过滤。Values可不设置。
必选：否

pod-not-deduct
按照**【上个周期未抵扣的Pod**】进行过滤。Values可不设置。
必选：否
     */
    public $Filters;

    /**
     * @param float $Cpu 核数
     * @param float $Memory 内存
     * @param string $GpuNum 卡数，有0.25、0.5、1、2、4等
     * @param string $Zone 可用区
     * @param string $ClusterId 集群 ID
     * @param string $NodeName 节点名称
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param array $Filters pod-type
按照**【Pod 类型**】进行过滤。资源类型：intel、amd、v100、t4、a10\*gnv4、a10\*gnv4v等。
类型：String
必选：否

pod-deduct
按照**【上个周期抵扣的Pod**】进行过滤。Values可不设置。
必选：否

pod-not-deduct
按照**【上个周期未抵扣的Pod**】进行过滤。Values可不设置。
必选：否
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("GpuNum",$param) and $param["GpuNum"] !== null) {
            $this->GpuNum = $param["GpuNum"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
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
