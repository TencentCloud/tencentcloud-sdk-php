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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 地域配置
 *
 * @method string getRegion() 获取<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置<p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionName() 获取<p>地域中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionName(string $RegionName) 设置<p>地域中文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getForeign() 获取<p>是否境外</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForeign(integer $Foreign) 设置<p>是否境外</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCode() 获取<p>地域码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCode(integer $Code) 设置<p>地域码</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAutoDriveCloud() 获取<p>是否自驾云</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAutoDriveCloud(integer $IsAutoDriveCloud) 设置<p>是否自驾云</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSupportNat() 获取<p>是否支持nat</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportNat(integer $IsSupportNat) 设置<p>是否支持nat</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionArea() 获取<p>地区信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegionArea(string $RegionArea) 设置<p>地区信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegionNameEN() 获取<p>地域英文</p>
 * @method void setRegionNameEN(string $RegionNameEN) 设置<p>地域英文</p>
 */
class RegionConfig extends AbstractModel
{
    /**
     * @var string <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string <p>地域中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionName;

    /**
     * @var integer <p>是否境外</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Foreign;

    /**
     * @var integer <p>地域码</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Code;

    /**
     * @var integer <p>是否自驾云</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAutoDriveCloud;

    /**
     * @var integer <p>是否支持nat</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSupportNat;

    /**
     * @var string <p>地区信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegionArea;

    /**
     * @var string <p>地域英文</p>
     */
    public $RegionNameEN;

    /**
     * @param string $Region <p>地域</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionName <p>地域中文</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Foreign <p>是否境外</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Code <p>地域码</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAutoDriveCloud <p>是否自驾云</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSupportNat <p>是否支持nat</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionArea <p>地区信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RegionNameEN <p>地域英文</p>
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

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Foreign",$param) and $param["Foreign"] !== null) {
            $this->Foreign = $param["Foreign"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("IsAutoDriveCloud",$param) and $param["IsAutoDriveCloud"] !== null) {
            $this->IsAutoDriveCloud = $param["IsAutoDriveCloud"];
        }

        if (array_key_exists("IsSupportNat",$param) and $param["IsSupportNat"] !== null) {
            $this->IsSupportNat = $param["IsSupportNat"];
        }

        if (array_key_exists("RegionArea",$param) and $param["RegionArea"] !== null) {
            $this->RegionArea = $param["RegionArea"];
        }

        if (array_key_exists("RegionNameEN",$param) and $param["RegionNameEN"] !== null) {
            $this->RegionNameEN = $param["RegionNameEN"];
        }
    }
}
