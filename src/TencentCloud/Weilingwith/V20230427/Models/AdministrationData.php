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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 行政区划数据结构
 *
 * @method string getAdministrationCode() 获取行政区划编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdministrationCode(string $AdministrationCode) 设置行政区划编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdministrationName() 获取行政区划名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdministrationName(string $AdministrationName) 设置行政区划名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class AdministrationData extends AbstractModel
{
    /**
     * @var string 行政区划编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdministrationCode;

    /**
     * @var string 行政区划名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdministrationName;

    /**
     * @param string $AdministrationCode 行政区划编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdministrationName 行政区划名称
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
        if (array_key_exists("AdministrationCode",$param) and $param["AdministrationCode"] !== null) {
            $this->AdministrationCode = $param["AdministrationCode"];
        }

        if (array_key_exists("AdministrationName",$param) and $param["AdministrationName"] !== null) {
            $this->AdministrationName = $param["AdministrationName"];
        }
    }
}
