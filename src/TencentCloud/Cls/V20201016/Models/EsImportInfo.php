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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Es导入信息
 *
 * @method integer getType() 获取导入模式。
1. 导入历史数据
2. 导入实时数据
 * @method void setType(integer $Type) 设置导入模式。
1. 导入历史数据
2. 导入实时数据
 * @method integer getStartTime() 获取开始时间。 单位:秒级时间戳。

 * @method void setStartTime(integer $StartTime) 设置开始时间。 单位:秒级时间戳。

 * @method integer getEndTime() 获取结束时间。 单位：秒级时间戳。
 * @method void setEndTime(integer $EndTime) 设置结束时间。 单位：秒级时间戳。
 * @method integer getMaxDelay() 获取最大延迟时间。单位：s

导入模式为 2: 导入实时数据时必填
 * @method void setMaxDelay(integer $MaxDelay) 设置最大延迟时间。单位：s

导入模式为 2: 导入实时数据时必填
 * @method integer getCheckInterval() 获取检查间隔。单位：s

导入模式为 2: 导入实时数据时必填
 * @method void setCheckInterval(integer $CheckInterval) 设置检查间隔。单位：s

导入模式为 2: 导入实时数据时必填
 */
class EsImportInfo extends AbstractModel
{
    /**
     * @var integer 导入模式。
1. 导入历史数据
2. 导入实时数据
     */
    public $Type;

    /**
     * @var integer 开始时间。 单位:秒级时间戳。

     */
    public $StartTime;

    /**
     * @var integer 结束时间。 单位：秒级时间戳。
     */
    public $EndTime;

    /**
     * @var integer 最大延迟时间。单位：s

导入模式为 2: 导入实时数据时必填
     */
    public $MaxDelay;

    /**
     * @var integer 检查间隔。单位：s

导入模式为 2: 导入实时数据时必填
     */
    public $CheckInterval;

    /**
     * @param integer $Type 导入模式。
1. 导入历史数据
2. 导入实时数据
     * @param integer $StartTime 开始时间。 单位:秒级时间戳。

     * @param integer $EndTime 结束时间。 单位：秒级时间戳。
     * @param integer $MaxDelay 最大延迟时间。单位：s

导入模式为 2: 导入实时数据时必填
     * @param integer $CheckInterval 检查间隔。单位：s

导入模式为 2: 导入实时数据时必填
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("MaxDelay",$param) and $param["MaxDelay"] !== null) {
            $this->MaxDelay = $param["MaxDelay"];
        }

        if (array_key_exists("CheckInterval",$param) and $param["CheckInterval"] !== null) {
            $this->CheckInterval = $param["CheckInterval"];
        }
    }
}
