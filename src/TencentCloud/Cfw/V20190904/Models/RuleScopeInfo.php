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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则生效范围信息
 *
 * @method string getScope() 获取NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(string $Scope) 设置NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScopeDesc() 获取生效范围描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScopeDesc(string $ScopeDesc) 设置生效范围描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleScopeInfo extends AbstractModel
{
    /**
     * @var string NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @var string 生效范围描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScopeDesc;

    /**
     * @param string $Scope NAT边界防火墙：ALL，全局生效；ap-guangzhou，生效的地域；cfwnat-xxx，生效基于实例维度
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScopeDesc 生效范围描述
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("ScopeDesc",$param) and $param["ScopeDesc"] !== null) {
            $this->ScopeDesc = $param["ScopeDesc"];
        }
    }
}
