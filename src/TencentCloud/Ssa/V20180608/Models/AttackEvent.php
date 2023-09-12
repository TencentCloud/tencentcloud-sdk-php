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
namespace TencentCloud\Ssa\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 攻击事件
 *
 * @method string getSsaSrcIp() 获取来源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaSrcIp(string $SsaSrcIp) 设置来源ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaDstIp() 获取目标ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaDstIp(string $SsaDstIp) 设置目标ip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaDstProvince() 获取目标省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaDstProvince(string $SsaDstProvince) 设置目标省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaDstCity() 获取目标城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaDstCity(string $SsaDstCity) 设置目标城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaDstCountry() 获取目标国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaDstCountry(string $SsaDstCountry) 设置目标国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaSrcProvince() 获取来源省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaSrcProvince(string $SsaSrcProvince) 设置来源省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaSrcCountry() 获取来源国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaSrcCountry(string $SsaSrcCountry) 设置来源国家
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSsaSrcCity() 获取来源城市
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSsaSrcCity(string $SsaSrcCity) 设置来源城市
注意：此字段可能返回 null，表示取不到有效值。
 */
class AttackEvent extends AbstractModel
{
    /**
     * @var string 来源ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaSrcIp;

    /**
     * @var string 目标ip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaDstIp;

    /**
     * @var string 目标省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaDstProvince;

    /**
     * @var string 目标城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaDstCity;

    /**
     * @var string 目标国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaDstCountry;

    /**
     * @var string 来源省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaSrcProvince;

    /**
     * @var string 来源国家
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaSrcCountry;

    /**
     * @var string 来源城市
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SsaSrcCity;

    /**
     * @param string $SsaSrcIp 来源ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaDstIp 目标ip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaDstProvince 目标省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaDstCity 目标城市
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaDstCountry 目标国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaSrcProvince 来源省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaSrcCountry 来源国家
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SsaSrcCity 来源城市
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
        if (array_key_exists("SsaSrcIp",$param) and $param["SsaSrcIp"] !== null) {
            $this->SsaSrcIp = $param["SsaSrcIp"];
        }

        if (array_key_exists("SsaDstIp",$param) and $param["SsaDstIp"] !== null) {
            $this->SsaDstIp = $param["SsaDstIp"];
        }

        if (array_key_exists("SsaDstProvince",$param) and $param["SsaDstProvince"] !== null) {
            $this->SsaDstProvince = $param["SsaDstProvince"];
        }

        if (array_key_exists("SsaDstCity",$param) and $param["SsaDstCity"] !== null) {
            $this->SsaDstCity = $param["SsaDstCity"];
        }

        if (array_key_exists("SsaDstCountry",$param) and $param["SsaDstCountry"] !== null) {
            $this->SsaDstCountry = $param["SsaDstCountry"];
        }

        if (array_key_exists("SsaSrcProvince",$param) and $param["SsaSrcProvince"] !== null) {
            $this->SsaSrcProvince = $param["SsaSrcProvince"];
        }

        if (array_key_exists("SsaSrcCountry",$param) and $param["SsaSrcCountry"] !== null) {
            $this->SsaSrcCountry = $param["SsaSrcCountry"];
        }

        if (array_key_exists("SsaSrcCity",$param) and $param["SsaSrcCity"] !== null) {
            $this->SsaSrcCity = $param["SsaSrcCity"];
        }
    }
}
