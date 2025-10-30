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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 组成CacheKey的一部分
 *
 * @method string getSwitch() 获取CacheKey是否由QueryString组成配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置CacheKey是否由QueryString组成配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReorder() 获取是否重新排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReorder(string $Reorder) 设置是否重新排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取使用/排除部分url参数，取值有：
includeAll：包含所有
excludeAll：排除所有
includeCustom：自定义包含
excludeCustom：自定义排除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置使用/排除部分url参数，取值有：
includeAll：包含所有
excludeAll：排除所有
includeCustom：自定义包含
excludeCustom：自定义排除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取使用/排除的url参数数组，';' 分割
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置使用/排除的url参数数组，';' 分割
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryStringKey extends AbstractModel
{
    /**
     * @var string CacheKey是否由QueryString组成配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var string 是否重新排序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reorder;

    /**
     * @var string 使用/排除部分url参数，取值有：
includeAll：包含所有
excludeAll：排除所有
includeCustom：自定义包含
excludeCustom：自定义排除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var string 使用/排除的url参数数组，';' 分割
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @param string $Switch CacheKey是否由QueryString组成配置开关，取值有：
on：开启
off：关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Reorder 是否重新排序
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 使用/排除部分url参数，取值有：
includeAll：包含所有
excludeAll：排除所有
includeCustom：自定义包含
excludeCustom：自定义排除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value 使用/排除的url参数数组，';' 分割
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Reorder",$param) and $param["Reorder"] !== null) {
            $this->Reorder = $param["Reorder"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
