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
 * VPC防火墙实例的CVM信息
 *
 * @method string getFwInsId() 获取VPC防火墙实例ID
 * @method void setFwInsId(string $FwInsId) 设置VPC防火墙实例ID
 * @method string getRegion() 获取CVM所在地域
 * @method void setRegion(string $Region) 设置CVM所在地域
 * @method string getRegionZh() 获取CVM所在地域中文
 * @method void setRegionZh(string $RegionZh) 设置CVM所在地域中文
 * @method string getRegionDetail() 获取CVM所在地域详情
 * @method void setRegionDetail(string $RegionDetail) 设置CVM所在地域详情
 * @method string getZoneZh() 获取主机所在可用区
 * @method void setZoneZh(string $ZoneZh) 设置主机所在可用区
 * @method string getZoneZhBack() 获取备机所在可用区
 * @method void setZoneZhBack(string $ZoneZhBack) 设置备机所在可用区
 * @method integer getBandWidth() 获取防火墙CVM带宽值
 * @method void setBandWidth(integer $BandWidth) 设置防火墙CVM带宽值
 * @method string getZone() 获取实例主机所在可用区
 * @method void setZone(string $Zone) 设置实例主机所在可用区
 * @method string getZoneBak() 获取实例备机所在可用区
 * @method void setZoneBak(string $ZoneBak) 设置实例备机所在可用区
 */
class VpcFwCvmInsInfo extends AbstractModel
{
    /**
     * @var string VPC防火墙实例ID
     */
    public $FwInsId;

    /**
     * @var string CVM所在地域
     */
    public $Region;

    /**
     * @var string CVM所在地域中文
     */
    public $RegionZh;

    /**
     * @var string CVM所在地域详情
     */
    public $RegionDetail;

    /**
     * @var string 主机所在可用区
     */
    public $ZoneZh;

    /**
     * @var string 备机所在可用区
     */
    public $ZoneZhBack;

    /**
     * @var integer 防火墙CVM带宽值
     */
    public $BandWidth;

    /**
     * @var string 实例主机所在可用区
     */
    public $Zone;

    /**
     * @var string 实例备机所在可用区
     */
    public $ZoneBak;

    /**
     * @param string $FwInsId VPC防火墙实例ID
     * @param string $Region CVM所在地域
     * @param string $RegionZh CVM所在地域中文
     * @param string $RegionDetail CVM所在地域详情
     * @param string $ZoneZh 主机所在可用区
     * @param string $ZoneZhBack 备机所在可用区
     * @param integer $BandWidth 防火墙CVM带宽值
     * @param string $Zone 实例主机所在可用区
     * @param string $ZoneBak 实例备机所在可用区
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
        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionZh",$param) and $param["RegionZh"] !== null) {
            $this->RegionZh = $param["RegionZh"];
        }

        if (array_key_exists("RegionDetail",$param) and $param["RegionDetail"] !== null) {
            $this->RegionDetail = $param["RegionDetail"];
        }

        if (array_key_exists("ZoneZh",$param) and $param["ZoneZh"] !== null) {
            $this->ZoneZh = $param["ZoneZh"];
        }

        if (array_key_exists("ZoneZhBack",$param) and $param["ZoneZhBack"] !== null) {
            $this->ZoneZhBack = $param["ZoneZhBack"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneBak",$param) and $param["ZoneBak"] !== null) {
            $this->ZoneBak = $param["ZoneBak"];
        }
    }
}
