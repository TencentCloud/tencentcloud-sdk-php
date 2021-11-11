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
namespace TencentCloud\Tcm\V20210413\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResourceMetricSource 定义了如何根据已知类型的资源指标进行扩缩容
 *
 * @method string getName() 获取资源名称 cpu/memory
 * @method void setName(string $Name) 设置资源名称 cpu/memory
 * @method integer getTargetAverageUtilization() 获取目标平均利用率
 * @method void setTargetAverageUtilization(integer $TargetAverageUtilization) 设置目标平均利用率
 * @method string getTargetAverageValue() 获取目标平均值
 * @method void setTargetAverageValue(string $TargetAverageValue) 设置目标平均值
 */
class ResourceMetricSource extends AbstractModel
{
    /**
     * @var string 资源名称 cpu/memory
     */
    public $Name;

    /**
     * @var integer 目标平均利用率
     */
    public $TargetAverageUtilization;

    /**
     * @var string 目标平均值
     */
    public $TargetAverageValue;

    /**
     * @param string $Name 资源名称 cpu/memory
     * @param integer $TargetAverageUtilization 目标平均利用率
     * @param string $TargetAverageValue 目标平均值
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TargetAverageUtilization",$param) and $param["TargetAverageUtilization"] !== null) {
            $this->TargetAverageUtilization = $param["TargetAverageUtilization"];
        }

        if (array_key_exists("TargetAverageValue",$param) and $param["TargetAverageValue"] !== null) {
            $this->TargetAverageValue = $param["TargetAverageValue"];
        }
    }
}
