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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据集成大屏趋势图统计结果
 *
 * @method array getStatisticName() 获取统计属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticName(array $StatisticName) 设置统计属性名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatisticValue() 获取统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticValue(array $StatisticValue) 设置统计值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatisticType() 获取统计项目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatisticType(string $StatisticType) 设置统计项目
注意：此字段可能返回 null，表示取不到有效值。
 */
class IntegrationStatisticsTrendResult extends AbstractModel
{
    /**
     * @var array 统计属性名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticName;

    /**
     * @var array 统计值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticValue;

    /**
     * @var string 统计项目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatisticType;

    /**
     * @param array $StatisticName 统计属性名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $StatisticValue 统计值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatisticType 统计项目
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
        if (array_key_exists("StatisticName",$param) and $param["StatisticName"] !== null) {
            $this->StatisticName = $param["StatisticName"];
        }

        if (array_key_exists("StatisticValue",$param) and $param["StatisticValue"] !== null) {
            $this->StatisticValue = $param["StatisticValue"];
        }

        if (array_key_exists("StatisticType",$param) and $param["StatisticType"] !== null) {
            $this->StatisticType = $param["StatisticType"];
        }
    }
}
