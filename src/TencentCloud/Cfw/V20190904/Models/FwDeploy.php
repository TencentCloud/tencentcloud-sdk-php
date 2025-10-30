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
 * 防火墙部署输入参数列表
 *
 * @method string getDeployRegion() 获取防火墙部署地域
 * @method void setDeployRegion(string $DeployRegion) 设置防火墙部署地域
 * @method integer getWidth() 获取带宽，单位：Mbps
 * @method void setWidth(integer $Width) 设置带宽，单位：Mbps
 * @method integer getCrossAZone() 获取异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
 * @method void setCrossAZone(integer $CrossAZone) 设置异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
 * @method string getZone() 获取主可用区，为空则选择默认可用区
 * @method void setZone(string $Zone) 设置主可用区，为空则选择默认可用区
 * @method string getZoneBak() 获取备可用区，为空则选择默认可用区
 * @method void setZoneBak(string $ZoneBak) 设置备可用区，为空则选择默认可用区
 * @method string getCdcId() 获取若为cdc防火墙时填充该id
 * @method void setCdcId(string $CdcId) 设置若为cdc防火墙时填充该id
 */
class FwDeploy extends AbstractModel
{
    /**
     * @var string 防火墙部署地域
     */
    public $DeployRegion;

    /**
     * @var integer 带宽，单位：Mbps
     */
    public $Width;

    /**
     * @var integer 异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
     */
    public $CrossAZone;

    /**
     * @var string 主可用区，为空则选择默认可用区
     */
    public $Zone;

    /**
     * @var string 备可用区，为空则选择默认可用区
     */
    public $ZoneBak;

    /**
     * @var string 若为cdc防火墙时填充该id
     */
    public $CdcId;

    /**
     * @param string $DeployRegion 防火墙部署地域
     * @param integer $Width 带宽，单位：Mbps
     * @param integer $CrossAZone 异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
     * @param string $Zone 主可用区，为空则选择默认可用区
     * @param string $ZoneBak 备可用区，为空则选择默认可用区
     * @param string $CdcId 若为cdc防火墙时填充该id
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
        if (array_key_exists("DeployRegion",$param) and $param["DeployRegion"] !== null) {
            $this->DeployRegion = $param["DeployRegion"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("CrossAZone",$param) and $param["CrossAZone"] !== null) {
            $this->CrossAZone = $param["CrossAZone"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneBak",$param) and $param["ZoneBak"] !== null) {
            $this->ZoneBak = $param["ZoneBak"];
        }

        if (array_key_exists("CdcId",$param) and $param["CdcId"] !== null) {
            $this->CdcId = $param["CdcId"];
        }
    }
}
