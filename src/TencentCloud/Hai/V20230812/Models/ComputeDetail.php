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
 * 算力详情
 *
 * @method string getBundleType() 获取<p>算力套餐ID</p>
 * @method void setBundleType(string $BundleType) 设置<p>算力套餐ID</p>
 * @method integer getCount() 获取<p>节点数量</p>
 * @method void setCount(integer $Count) 设置<p>节点数量</p>
 * @method string getGPUCount() 获取<p>显卡数量</p>
 * @method void setGPUCount(string $GPUCount) 设置<p>显卡数量</p>
 * @method string getGPUMemory() 获取<p>显存</p>
 * @method void setGPUMemory(string $GPUMemory) 设置<p>显存</p>
 * @method string getGPUPerformance() 获取<p>算力</p>
 * @method void setGPUPerformance(string $GPUPerformance) 设置<p>算力</p>
 * @method string getCPU() 获取<p>CPU核数</p>
 * @method void setCPU(string $CPU) 设置<p>CPU核数</p>
 * @method string getMemory() 获取<p>内存</p>
 * @method void setMemory(string $Memory) 设置<p>内存</p>
 * @method boolean getPrepaidEnable() 获取<p>该套餐是否支持包年包月</p>
 * @method void setPrepaidEnable(boolean $PrepaidEnable) 设置<p>该套餐是否支持包年包月</p>
 * @method boolean getPostpaidEnable() 获取<p>该套餐是否支持按量计费</p>
 * @method void setPostpaidEnable(boolean $PostpaidEnable) 设置<p>该套餐是否支持按量计费</p>
 */
class ComputeDetail extends AbstractModel
{
    /**
     * @var string <p>算力套餐ID</p>
     */
    public $BundleType;

    /**
     * @var integer <p>节点数量</p>
     */
    public $Count;

    /**
     * @var string <p>显卡数量</p>
     */
    public $GPUCount;

    /**
     * @var string <p>显存</p>
     */
    public $GPUMemory;

    /**
     * @var string <p>算力</p>
     */
    public $GPUPerformance;

    /**
     * @var string <p>CPU核数</p>
     */
    public $CPU;

    /**
     * @var string <p>内存</p>
     */
    public $Memory;

    /**
     * @var boolean <p>该套餐是否支持包年包月</p>
     */
    public $PrepaidEnable;

    /**
     * @var boolean <p>该套餐是否支持按量计费</p>
     */
    public $PostpaidEnable;

    /**
     * @param string $BundleType <p>算力套餐ID</p>
     * @param integer $Count <p>节点数量</p>
     * @param string $GPUCount <p>显卡数量</p>
     * @param string $GPUMemory <p>显存</p>
     * @param string $GPUPerformance <p>算力</p>
     * @param string $CPU <p>CPU核数</p>
     * @param string $Memory <p>内存</p>
     * @param boolean $PrepaidEnable <p>该套餐是否支持包年包月</p>
     * @param boolean $PostpaidEnable <p>该套餐是否支持按量计费</p>
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
        if (array_key_exists("BundleType",$param) and $param["BundleType"] !== null) {
            $this->BundleType = $param["BundleType"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("GPUCount",$param) and $param["GPUCount"] !== null) {
            $this->GPUCount = $param["GPUCount"];
        }

        if (array_key_exists("GPUMemory",$param) and $param["GPUMemory"] !== null) {
            $this->GPUMemory = $param["GPUMemory"];
        }

        if (array_key_exists("GPUPerformance",$param) and $param["GPUPerformance"] !== null) {
            $this->GPUPerformance = $param["GPUPerformance"];
        }

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("PrepaidEnable",$param) and $param["PrepaidEnable"] !== null) {
            $this->PrepaidEnable = $param["PrepaidEnable"];
        }

        if (array_key_exists("PostpaidEnable",$param) and $param["PostpaidEnable"] !== null) {
            $this->PostpaidEnable = $param["PostpaidEnable"];
        }
    }
}
