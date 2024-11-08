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
namespace TencentCloud\Privatedns\V20201028\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域信息
 *
 * @method string getRegionCode() 获取地域编码
 * @method void setRegionCode(string $RegionCode) 设置地域编码
 * @method string getCnName() 获取地域中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCnName(string $CnName) 设置地域中文名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnName() 获取地域英文名
 * @method void setEnName(string $EnName) 设置地域英文名
 * @method integer getRegionId() 获取地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionId(integer $RegionId) 设置地域ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailableZoneNum() 获取可用区数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableZoneNum(integer $AvailableZoneNum) 设置可用区数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string 地域编码
     */
    public $RegionCode;

    /**
     * @var string 地域中文名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CnName;

    /**
     * @var string 地域英文名
     */
    public $EnName;

    /**
     * @var integer 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionId;

    /**
     * @var integer 可用区数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableZoneNum;

    /**
     * @param string $RegionCode 地域编码
     * @param string $CnName 地域中文名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnName 地域英文名
     * @param integer $RegionId 地域ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AvailableZoneNum 可用区数量
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
        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("CnName",$param) and $param["CnName"] !== null) {
            $this->CnName = $param["CnName"];
        }

        if (array_key_exists("EnName",$param) and $param["EnName"] !== null) {
            $this->EnName = $param["EnName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("AvailableZoneNum",$param) and $param["AvailableZoneNum"] !== null) {
            $this->AvailableZoneNum = $param["AvailableZoneNum"];
        }
    }
}
