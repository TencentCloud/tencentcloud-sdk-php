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
 * 连续指标采样内容
 *
 * @method array getLabels() 获取labels描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabels(array $Labels) 设置labels描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValues() 获取指标采样数组
 * @method void setValues(array $Values) 设置指标采样数组
 * @method string getName() 获取指标序列名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置指标序列名字
注意：此字段可能返回 null，表示取不到有效值。
 */
class SampleStream extends AbstractModel
{
    /**
     * @var array labels描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Labels;

    /**
     * @var array 指标采样数组
     */
    public $Values;

    /**
     * @var string 指标序列名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @param array $Labels labels描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Values 指标采样数组
     * @param string $Name 指标序列名字
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = [];
            foreach ($param["Values"] as $key => $value){
                $obj = new SamplePair();
                $obj->deserialize($value);
                array_push($this->Values, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
