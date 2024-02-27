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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 成本分析支付方式复杂类型
 *
 * @method string getPayMode() 获取计费模式code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置计费模式code
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayModeName() 获取计费模式Name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayModeName(string $PayModeName) 设置计费模式Name
注意：此字段可能返回 null，表示取不到有效值。
 */
class AnalysePayModeDetail extends AbstractModel
{
    /**
     * @var string 计费模式code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 计费模式Name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayModeName;

    /**
     * @param string $PayMode 计费模式code
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayModeName 计费模式Name
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
        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("PayModeName",$param) and $param["PayModeName"] !== null) {
            $this->PayModeName = $param["PayModeName"];
        }
    }
}
