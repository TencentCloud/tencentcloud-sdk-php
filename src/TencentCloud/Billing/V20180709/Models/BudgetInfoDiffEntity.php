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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 记录预算项目相关字段的变更信息
 *
 * @method string getProperty() 获取变更属性
 * @method void setProperty(string $Property) 设置变更属性
 * @method string getBefore() 获取变更前内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBefore(string $Before) 设置变更前内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAfter() 获取变更后内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAfter(string $After) 设置变更后内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class BudgetInfoDiffEntity extends AbstractModel
{
    /**
     * @var string 变更属性
     */
    public $Property;

    /**
     * @var string 变更前内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Before;

    /**
     * @var string 变更后内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $After;

    /**
     * @param string $Property 变更属性
     * @param string $Before 变更前内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $After 变更后内容
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
        if (array_key_exists("Property",$param) and $param["Property"] !== null) {
            $this->Property = $param["Property"];
        }

        if (array_key_exists("Before",$param) and $param["Before"] !== null) {
            $this->Before = $param["Before"];
        }

        if (array_key_exists("After",$param) and $param["After"] !== null) {
            $this->After = $param["After"];
        }
    }
}
