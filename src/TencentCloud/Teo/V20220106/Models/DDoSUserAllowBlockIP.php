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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS黑白名单
 *
 * @method string getIp() 获取用户ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp(string $Ip) 设置用户ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMask() 获取掩码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMask(integer $Mask) 设置掩码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取类型 block-丢弃；allow-允许
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置类型 block-丢弃；allow-允许
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateTime() 获取时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(integer $UpdateTime) 设置时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIp2() 获取用户ip范围截止
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIp2(string $Ip2) 设置用户ip范围截止
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMask2() 获取掩码截止范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMask2(integer $Mask2) 设置掩码截止范围
注意：此字段可能返回 null，表示取不到有效值。
 */
class DDoSUserAllowBlockIP extends AbstractModel
{
    /**
     * @var string 用户ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip;

    /**
     * @var integer 掩码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mask;

    /**
     * @var string 类型 block-丢弃；allow-允许
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 用户ip范围截止
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Ip2;

    /**
     * @var integer 掩码截止范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mask2;

    /**
     * @param string $Ip 用户ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mask 掩码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 类型 block-丢弃；allow-允许
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateTime 时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Ip2 用户ip范围截止
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Mask2 掩码截止范围
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
        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Mask",$param) and $param["Mask"] !== null) {
            $this->Mask = $param["Mask"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Ip2",$param) and $param["Ip2"] !== null) {
            $this->Ip2 = $param["Ip2"];
        }

        if (array_key_exists("Mask2",$param) and $param["Mask2"] !== null) {
            $this->Mask2 = $param["Mask2"];
        }
    }
}
