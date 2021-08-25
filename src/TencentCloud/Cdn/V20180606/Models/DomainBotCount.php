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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名及其他指标Bot次数
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getCount() 获取BOT次数
 * @method void setCount(integer $Count) 设置BOT次数
 * @method string getValue() 获取Top指标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置Top指标值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCountry() 获取国家/地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCountry(string $Country) 设置国家/地区
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProvince() 获取省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProvince(string $Province) 设置省份
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsp() 获取运营商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsp(string $Isp) 设置运营商
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainBotCount extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer BOT次数
     */
    public $Count;

    /**
     * @var string Top指标值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var string 国家/地区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Country;

    /**
     * @var string 省份
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Province;

    /**
     * @var string 运营商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Isp;

    /**
     * @param string $Domain 域名
     * @param integer $Count BOT次数
     * @param string $Value Top指标值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Country 国家/地区
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Province 省份
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Isp 运营商
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Country",$param) and $param["Country"] !== null) {
            $this->Country = $param["Country"];
        }

        if (array_key_exists("Province",$param) and $param["Province"] !== null) {
            $this->Province = $param["Province"];
        }

        if (array_key_exists("Isp",$param) and $param["Isp"] !== null) {
            $this->Isp = $param["Isp"];
        }
    }
}
