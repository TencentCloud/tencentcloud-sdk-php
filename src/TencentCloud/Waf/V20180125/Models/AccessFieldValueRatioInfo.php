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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAccessFastAnalysis接口的出参
 *
 * @method integer getCount() 获取日志条数
 * @method void setCount(integer $Count) 设置日志条数
 * @method float getRatio() 获取对应的Value值的百分比
 * @method void setRatio(float $Ratio) 设置对应的Value值的百分比
 * @method string getValue() 获取字段对应的值
 * @method void setValue(string $Value) 设置字段对应的值
 */
class AccessFieldValueRatioInfo extends AbstractModel
{
    /**
     * @var integer 日志条数
     */
    public $Count;

    /**
     * @var float 对应的Value值的百分比
     */
    public $Ratio;

    /**
     * @var string 字段对应的值
     */
    public $Value;

    /**
     * @param integer $Count 日志条数
     * @param float $Ratio 对应的Value值的百分比
     * @param string $Value 字段对应的值
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
