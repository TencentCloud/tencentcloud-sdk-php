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
namespace TencentCloud\Ecm\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多运营商IPv6 Cidr Block
 *
 * @method string getIPv6CidrBlock() 获取IPv6 CIdr Block。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIPv6CidrBlock(string $IPv6CidrBlock) 设置IPv6 CIdr Block。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getISPType() 获取网络运营商类型 取值范围:'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setISPType(string $ISPType) 设置网络运营商类型 取值范围:'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
注意：此字段可能返回 null，表示取不到有效值。
 */
class ISPIPv6CidrBlock extends AbstractModel
{
    /**
     * @var string IPv6 CIdr Block。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IPv6CidrBlock;

    /**
     * @var string 网络运营商类型 取值范围:'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ISPType;

    /**
     * @param string $IPv6CidrBlock IPv6 CIdr Block。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ISPType 网络运营商类型 取值范围:'CMCC'-中国移动, 'CTCC'-中国电信, 'CUCC'-中国联调	
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
        if (array_key_exists("IPv6CidrBlock",$param) and $param["IPv6CidrBlock"] !== null) {
            $this->IPv6CidrBlock = $param["IPv6CidrBlock"];
        }

        if (array_key_exists("ISPType",$param) and $param["ISPType"] !== null) {
            $this->ISPType = $param["ISPType"];
        }
    }
}
