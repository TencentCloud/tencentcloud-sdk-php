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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自动性能剖析配置
 *
 * @method boolean getCpuProfilingEnable() 获取自动CPU剖析任务开关
 * @method void setCpuProfilingEnable(boolean $CpuProfilingEnable) 设置自动CPU剖析任务开关
 * @method boolean getMemoryProfilingEnable() 获取自动内存剖析任务开关
 * @method void setMemoryProfilingEnable(boolean $MemoryProfilingEnable) 设置自动内存剖析任务开关
 * @method integer getCpuProfilingThreshold() 获取自动CPU剖析任务阈值
 * @method void setCpuProfilingThreshold(integer $CpuProfilingThreshold) 设置自动CPU剖析任务阈值
 * @method integer getMemoryProfilingThreshold() 获取自动内存剖析任务阈值
 * @method void setMemoryProfilingThreshold(integer $MemoryProfilingThreshold) 设置自动内存剖析任务阈值
 * @method integer getCpuProfilingDuration() 获取CPU自动剖析任务时长
 * @method void setCpuProfilingDuration(integer $CpuProfilingDuration) 设置CPU自动剖析任务时长
 * @method integer getMemoryProfilingDuration() 获取内存自动剖析任务时长
 * @method void setMemoryProfilingDuration(integer $MemoryProfilingDuration) 设置内存自动剖析任务时长
 */
class AutoProfilingConfig extends AbstractModel
{
    /**
     * @var boolean 自动CPU剖析任务开关
     */
    public $CpuProfilingEnable;

    /**
     * @var boolean 自动内存剖析任务开关
     */
    public $MemoryProfilingEnable;

    /**
     * @var integer 自动CPU剖析任务阈值
     */
    public $CpuProfilingThreshold;

    /**
     * @var integer 自动内存剖析任务阈值
     */
    public $MemoryProfilingThreshold;

    /**
     * @var integer CPU自动剖析任务时长
     */
    public $CpuProfilingDuration;

    /**
     * @var integer 内存自动剖析任务时长
     */
    public $MemoryProfilingDuration;

    /**
     * @param boolean $CpuProfilingEnable 自动CPU剖析任务开关
     * @param boolean $MemoryProfilingEnable 自动内存剖析任务开关
     * @param integer $CpuProfilingThreshold 自动CPU剖析任务阈值
     * @param integer $MemoryProfilingThreshold 自动内存剖析任务阈值
     * @param integer $CpuProfilingDuration CPU自动剖析任务时长
     * @param integer $MemoryProfilingDuration 内存自动剖析任务时长
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
        if (array_key_exists("CpuProfilingEnable",$param) and $param["CpuProfilingEnable"] !== null) {
            $this->CpuProfilingEnable = $param["CpuProfilingEnable"];
        }

        if (array_key_exists("MemoryProfilingEnable",$param) and $param["MemoryProfilingEnable"] !== null) {
            $this->MemoryProfilingEnable = $param["MemoryProfilingEnable"];
        }

        if (array_key_exists("CpuProfilingThreshold",$param) and $param["CpuProfilingThreshold"] !== null) {
            $this->CpuProfilingThreshold = $param["CpuProfilingThreshold"];
        }

        if (array_key_exists("MemoryProfilingThreshold",$param) and $param["MemoryProfilingThreshold"] !== null) {
            $this->MemoryProfilingThreshold = $param["MemoryProfilingThreshold"];
        }

        if (array_key_exists("CpuProfilingDuration",$param) and $param["CpuProfilingDuration"] !== null) {
            $this->CpuProfilingDuration = $param["CpuProfilingDuration"];
        }

        if (array_key_exists("MemoryProfilingDuration",$param) and $param["MemoryProfilingDuration"] !== null) {
            $this->MemoryProfilingDuration = $param["MemoryProfilingDuration"];
        }
    }
}
