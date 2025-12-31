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
 * 引流地域CIDR配置
 *
 * @method string getRegion() 获取引流地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置引流地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCidrMode() 获取CIDR模式：0-跳过，1-自动，2-自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCidrMode(integer $CidrMode) 设置CIDR模式：0-跳过，1-自动，2-自定义
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomCidr() 获取自定义CIDR（CidrMode=2时必填），其它时候为空字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomCidr(string $CustomCidr) 设置自定义CIDR（CidrMode=2时必填），其它时候为空字符串
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegionCidrConfig extends AbstractModel
{
    /**
     * @var string 引流地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer CIDR模式：0-跳过，1-自动，2-自定义
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CidrMode;

    /**
     * @var string 自定义CIDR（CidrMode=2时必填），其它时候为空字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomCidr;

    /**
     * @param string $Region 引流地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CidrMode CIDR模式：0-跳过，1-自动，2-自定义
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomCidr 自定义CIDR（CidrMode=2时必填），其它时候为空字符串
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CidrMode",$param) and $param["CidrMode"] !== null) {
            $this->CidrMode = $param["CidrMode"];
        }

        if (array_key_exists("CustomCidr",$param) and $param["CustomCidr"] !== null) {
            $this->CustomCidr = $param["CustomCidr"];
        }
    }
}
