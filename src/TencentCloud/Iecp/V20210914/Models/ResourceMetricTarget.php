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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源目标指标
 *
 * @method string getType() 获取类型(cpu|memory)
 * @method void setType(string $Type) 设置类型(cpu|memory)
 * @method integer getAverageValue() 获取平均值
 * @method void setAverageValue(integer $AverageValue) 设置平均值
 * @method string getScale() 获取单位
 * @method void setScale(string $Scale) 设置单位
 * @method integer getAverageUtilization() 获取平均值
 * @method void setAverageUtilization(integer $AverageUtilization) 设置平均值
 */
class ResourceMetricTarget extends AbstractModel
{
    /**
     * @var string 类型(cpu|memory)
     */
    public $Type;

    /**
     * @var integer 平均值
     */
    public $AverageValue;

    /**
     * @var string 单位
     */
    public $Scale;

    /**
     * @var integer 平均值
     */
    public $AverageUtilization;

    /**
     * @param string $Type 类型(cpu|memory)
     * @param integer $AverageValue 平均值
     * @param string $Scale 单位
     * @param integer $AverageUtilization 平均值
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

        if (array_key_exists("AverageValue",$param) and $param["AverageValue"] !== null) {
            $this->AverageValue = $param["AverageValue"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }

        if (array_key_exists("AverageUtilization",$param) and $param["AverageUtilization"] !== null) {
            $this->AverageUtilization = $param["AverageUtilization"];
        }
    }
}
