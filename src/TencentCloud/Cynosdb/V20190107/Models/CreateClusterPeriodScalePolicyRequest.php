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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterPeriodScalePolicy请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getInstanceType() 获取<p>实例类型。rw读写，ro-只读</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型。rw读写，ro-只读</p>
 * @method string getScaleStartTime() 获取<p>当天开始弹性时间。格式是小时:分钟</p>
 * @method void setScaleStartTime(string $ScaleStartTime) 设置<p>当天开始弹性时间。格式是小时:分钟</p>
 * @method string getScaleEndTime() 获取<p>当天结束弹性时间。格式是小时:分钟</p>
 * @method void setScaleEndTime(string $ScaleEndTime) 设置<p>当天结束弹性时间。格式是小时:分钟</p>
 * @method string getPolicyStartTime() 获取<p>策略生效的起始日期时间</p>
 * @method void setPolicyStartTime(string $PolicyStartTime) 设置<p>策略生效的起始日期时间</p>
 * @method string getPolicyEndTime() 获取<p>策略生效的截止日期时间</p>
 * @method void setPolicyEndTime(string $PolicyEndTime) 设置<p>策略生效的截止日期时间</p>
 * @method string getPeriodType() 获取<p>周期类型。day-天，week-周，month-月。</p>
 * @method void setPeriodType(string $PeriodType) 设置<p>周期类型。day-天，week-周，month-月。</p>
 * @method float getMinCpu() 获取<p>弹性规格下限</p>
 * @method void setMinCpu(float $MinCpu) 设置<p>弹性规格下限</p>
 * @method float getMaxCpu() 获取<p>弹性规格上限</p>
 * @method void setMaxCpu(float $MaxCpu) 设置<p>弹性规格上限</p>
 * @method array getPeriodConfig() 获取<p>周期内的时间列表。针对PeriodType=week， 表示星期几，比如[1,3]表示星期一、星期三。同理，对于PeriodType=month，[1,3,10]表示每月的1、3、10号。PeriodType=day则该字段无效。</p>
 * @method void setPeriodConfig(array $PeriodConfig) 设置<p>周期内的时间列表。针对PeriodType=week， 表示星期几，比如[1,3]表示星期一、星期三。同理，对于PeriodType=month，[1,3,10]表示每月的1、3、10号。PeriodType=day则该字段无效。</p>
 */
class CreateClusterPeriodScalePolicyRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>实例类型。rw读写，ro-只读</p>
     */
    public $InstanceType;

    /**
     * @var string <p>当天开始弹性时间。格式是小时:分钟</p>
     */
    public $ScaleStartTime;

    /**
     * @var string <p>当天结束弹性时间。格式是小时:分钟</p>
     */
    public $ScaleEndTime;

    /**
     * @var string <p>策略生效的起始日期时间</p>
     */
    public $PolicyStartTime;

    /**
     * @var string <p>策略生效的截止日期时间</p>
     */
    public $PolicyEndTime;

    /**
     * @var string <p>周期类型。day-天，week-周，month-月。</p>
     */
    public $PeriodType;

    /**
     * @var float <p>弹性规格下限</p>
     */
    public $MinCpu;

    /**
     * @var float <p>弹性规格上限</p>
     */
    public $MaxCpu;

    /**
     * @var array <p>周期内的时间列表。针对PeriodType=week， 表示星期几，比如[1,3]表示星期一、星期三。同理，对于PeriodType=month，[1,3,10]表示每月的1、3、10号。PeriodType=day则该字段无效。</p>
     */
    public $PeriodConfig;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $InstanceType <p>实例类型。rw读写，ro-只读</p>
     * @param string $ScaleStartTime <p>当天开始弹性时间。格式是小时:分钟</p>
     * @param string $ScaleEndTime <p>当天结束弹性时间。格式是小时:分钟</p>
     * @param string $PolicyStartTime <p>策略生效的起始日期时间</p>
     * @param string $PolicyEndTime <p>策略生效的截止日期时间</p>
     * @param string $PeriodType <p>周期类型。day-天，week-周，month-月。</p>
     * @param float $MinCpu <p>弹性规格下限</p>
     * @param float $MaxCpu <p>弹性规格上限</p>
     * @param array $PeriodConfig <p>周期内的时间列表。针对PeriodType=week， 表示星期几，比如[1,3]表示星期一、星期三。同理，对于PeriodType=month，[1,3,10]表示每月的1、3、10号。PeriodType=day则该字段无效。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ScaleStartTime",$param) and $param["ScaleStartTime"] !== null) {
            $this->ScaleStartTime = $param["ScaleStartTime"];
        }

        if (array_key_exists("ScaleEndTime",$param) and $param["ScaleEndTime"] !== null) {
            $this->ScaleEndTime = $param["ScaleEndTime"];
        }

        if (array_key_exists("PolicyStartTime",$param) and $param["PolicyStartTime"] !== null) {
            $this->PolicyStartTime = $param["PolicyStartTime"];
        }

        if (array_key_exists("PolicyEndTime",$param) and $param["PolicyEndTime"] !== null) {
            $this->PolicyEndTime = $param["PolicyEndTime"];
        }

        if (array_key_exists("PeriodType",$param) and $param["PeriodType"] !== null) {
            $this->PeriodType = $param["PeriodType"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("PeriodConfig",$param) and $param["PeriodConfig"] !== null) {
            $this->PeriodConfig = $param["PeriodConfig"];
        }
    }
}
