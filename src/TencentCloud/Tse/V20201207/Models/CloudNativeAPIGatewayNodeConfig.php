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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生API网关节点配置。
 *
 * @method string getSpecification() 获取节点配置, 1c2g|2c4g|4c8g|8c16g。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecification(string $Specification) 设置节点配置, 1c2g|2c4g|4c8g|8c16g。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumber() 获取节点数量，2-9。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumber(integer $Number) 设置节点数量，2-9。
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudNativeAPIGatewayNodeConfig extends AbstractModel
{
    /**
     * @var string 节点配置, 1c2g|2c4g|4c8g|8c16g。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Specification;

    /**
     * @var integer 节点数量，2-9。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Number;

    /**
     * @param string $Specification 节点配置, 1c2g|2c4g|4c8g|8c16g。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Number 节点数量，2-9。
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
        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Number",$param) and $param["Number"] !== null) {
            $this->Number = $param["Number"];
        }
    }
}
