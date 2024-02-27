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
 * 成本分析产品返回复杂类型
 *
 * @method string getBusinessCode() 获取产品码code
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessCode(string $BusinessCode) 设置产品码code
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessCodeName() 获取产品名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessCodeName(string $BusinessCodeName) 设置产品名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AnalyseBusinessDetail extends AbstractModel
{
    /**
     * @var string 产品码code
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessCode;

    /**
     * @var string 产品名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessCodeName;

    /**
     * @param string $BusinessCode 产品码code
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessCodeName 产品名称
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
        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }

        if (array_key_exists("BusinessCodeName",$param) and $param["BusinessCodeName"] !== null) {
            $this->BusinessCodeName = $param["BusinessCodeName"];
        }
    }
}
