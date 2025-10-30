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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快速分析统计信息
 *
 * @method integer getCount() 获取个数
 * @method void setCount(integer $Count) 设置个数
 * @method float getRatio() 获取比例
 * @method void setRatio(float $Ratio) 设置比例
 * @method string getValue() 获取值
 * @method void setValue(string $Value) 设置值
 */
class FieldValueRatioInfo extends AbstractModel
{
    /**
     * @var integer 个数
     */
    public $Count;

    /**
     * @var float 比例
     */
    public $Ratio;

    /**
     * @var string 值
     */
    public $Value;

    /**
     * @param integer $Count 个数
     * @param float $Ratio 比例
     * @param string $Value 值
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
