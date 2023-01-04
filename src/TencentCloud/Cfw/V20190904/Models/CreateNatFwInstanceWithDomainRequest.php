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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNatFwInstanceWithDomain请求参数结构体
 *
 * @method string getName() 获取防火墙实例名称
 * @method void setName(string $Name) 设置防火墙实例名称
 * @method integer getWidth() 获取带宽
 * @method void setWidth(integer $Width) 设置带宽
 * @method integer getMode() 获取模式 1：接入模式；0：新增模式
 * @method void setMode(integer $Mode) 设置模式 1：接入模式；0：新增模式
 * @method NewModeItems getNewModeItems() 获取新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。
 * @method void setNewModeItems(NewModeItems $NewModeItems) 设置新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。
 * @method array getNatGwList() 获取接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。
 * @method void setNatGwList(array $NatGwList) 设置接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。
 * @method string getZone() 获取主可用区，为空则选择默认可用区
 * @method void setZone(string $Zone) 设置主可用区，为空则选择默认可用区
 * @method string getZoneBak() 获取备可用区，为空则选择默认可用区
 * @method void setZoneBak(string $ZoneBak) 设置备可用区，为空则选择默认可用区
 * @method integer getCrossAZone() 获取异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
 * @method void setCrossAZone(integer $CrossAZone) 设置异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
 * @method integer getIsCreateDomain() 获取0不创建域名,1创建域名
 * @method void setIsCreateDomain(integer $IsCreateDomain) 设置0不创建域名,1创建域名
 * @method string getDomain() 获取如果要创建域名则必填
 * @method void setDomain(string $Domain) 设置如果要创建域名则必填
 * @method FwCidrInfo getFwCidrInfo() 获取指定防火墙使用网段信息
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) 设置指定防火墙使用网段信息
 */
class CreateNatFwInstanceWithDomainRequest extends AbstractModel
{
    /**
     * @var string 防火墙实例名称
     */
    public $Name;

    /**
     * @var integer 带宽
     */
    public $Width;

    /**
     * @var integer 模式 1：接入模式；0：新增模式
     */
    public $Mode;

    /**
     * @var NewModeItems 新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。
     */
    public $NewModeItems;

    /**
     * @var array 接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。
     */
    public $NatGwList;

    /**
     * @var string 主可用区，为空则选择默认可用区
     */
    public $Zone;

    /**
     * @var string 备可用区，为空则选择默认可用区
     */
    public $ZoneBak;

    /**
     * @var integer 异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
     */
    public $CrossAZone;

    /**
     * @var integer 0不创建域名,1创建域名
     */
    public $IsCreateDomain;

    /**
     * @var string 如果要创建域名则必填
     */
    public $Domain;

    /**
     * @var FwCidrInfo 指定防火墙使用网段信息
     */
    public $FwCidrInfo;

    /**
     * @param string $Name 防火墙实例名称
     * @param integer $Width 带宽
     * @param integer $Mode 模式 1：接入模式；0：新增模式
     * @param NewModeItems $NewModeItems 新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。
     * @param array $NatGwList 接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。
     * @param string $Zone 主可用区，为空则选择默认可用区
     * @param string $ZoneBak 备可用区，为空则选择默认可用区
     * @param integer $CrossAZone 异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备
     * @param integer $IsCreateDomain 0不创建域名,1创建域名
     * @param string $Domain 如果要创建域名则必填
     * @param FwCidrInfo $FwCidrInfo 指定防火墙使用网段信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("NewModeItems",$param) and $param["NewModeItems"] !== null) {
            $this->NewModeItems = new NewModeItems();
            $this->NewModeItems->deserialize($param["NewModeItems"]);
        }

        if (array_key_exists("NatGwList",$param) and $param["NatGwList"] !== null) {
            $this->NatGwList = $param["NatGwList"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneBak",$param) and $param["ZoneBak"] !== null) {
            $this->ZoneBak = $param["ZoneBak"];
        }

        if (array_key_exists("CrossAZone",$param) and $param["CrossAZone"] !== null) {
            $this->CrossAZone = $param["CrossAZone"];
        }

        if (array_key_exists("IsCreateDomain",$param) and $param["IsCreateDomain"] !== null) {
            $this->IsCreateDomain = $param["IsCreateDomain"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("FwCidrInfo",$param) and $param["FwCidrInfo"] !== null) {
            $this->FwCidrInfo = new FwCidrInfo();
            $this->FwCidrInfo->deserialize($param["FwCidrInfo"]);
        }
    }
}
