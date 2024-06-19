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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞风险信息
 *
 * @method string getFix() 获取修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFix(string $Fix) 设置修复建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReferences() 获取技术参考/参考链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReferences(string $References) 设置技术参考/参考链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescribe() 获取漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescribe(string $Describe) 设置漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getImpactComponent() 获取受影响组件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImpactComponent(array $ImpactComponent) 设置受影响组件
注意：此字段可能返回 null，表示取不到有效值。
 */
class VULRiskInfo extends AbstractModel
{
    /**
     * @var string 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Fix;

    /**
     * @var string 技术参考/参考链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $References;

    /**
     * @var string 漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Describe;

    /**
     * @var array 受影响组件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImpactComponent;

    /**
     * @param string $Fix 修复建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $References 技术参考/参考链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Describe 漏洞描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ImpactComponent 受影响组件
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
        if (array_key_exists("Fix",$param) and $param["Fix"] !== null) {
            $this->Fix = $param["Fix"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = $param["References"];
        }

        if (array_key_exists("Describe",$param) and $param["Describe"] !== null) {
            $this->Describe = $param["Describe"];
        }

        if (array_key_exists("ImpactComponent",$param) and $param["ImpactComponent"] !== null) {
            $this->ImpactComponent = [];
            foreach ($param["ImpactComponent"] as $key => $value){
                $obj = new VulImpactComponentInfo();
                $obj->deserialize($value);
                array_push($this->ImpactComponent, $obj);
            }
        }
    }
}
