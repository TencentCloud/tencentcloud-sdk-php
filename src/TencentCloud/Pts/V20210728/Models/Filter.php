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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指标查询过滤
 *
 * @method integer getOperator() 获取等于：0，不等于：1
 * @method void setOperator(integer $Operator) 设置等于：0，不等于：1
 * @method string getLabelName() 获取指标名
 * @method void setLabelName(string $LabelName) 设置指标名
 * @method string getLabelValue() 获取指标值
 * @method void setLabelValue(string $LabelValue) 设置指标值
 */
class Filter extends AbstractModel
{
    /**
     * @var integer 等于：0，不等于：1
     */
    public $Operator;

    /**
     * @var string 指标名
     */
    public $LabelName;

    /**
     * @var string 指标值
     */
    public $LabelValue;

    /**
     * @param integer $Operator 等于：0，不等于：1
     * @param string $LabelName 指标名
     * @param string $LabelValue 指标值
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }

        if (array_key_exists("LabelValue",$param) and $param["LabelValue"] !== null) {
            $this->LabelValue = $param["LabelValue"];
        }
    }
}
