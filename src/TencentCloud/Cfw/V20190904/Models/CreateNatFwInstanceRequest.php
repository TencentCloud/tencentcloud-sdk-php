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
 * CreateNatFwInstance请求参数结构体
 *
 * @method string getName() 获取<p>防火墙实例名称</p>
 * @method void setName(string $Name) 设置<p>防火墙实例名称</p>
 * @method integer getWidth() 获取<p>带宽</p>
 * @method void setWidth(integer $Width) 设置<p>带宽</p>
 * @method integer getMode() 获取<p>模式 1：接入模式；0：新增模式</p>
 * @method void setMode(integer $Mode) 设置<p>模式 1：接入模式；0：新增模式</p>
 * @method NewModeItems getNewModeItems() 获取<p>新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。</p>
 * @method void setNewModeItems(NewModeItems $NewModeItems) 设置<p>新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。</p>
 * @method array getNatGwList() 获取<p>接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。</p>
 * @method void setNatGwList(array $NatGwList) 设置<p>接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。</p>
 * @method string getZone() 获取<p>主可用区，为空则选择默认可用区</p>
 * @method void setZone(string $Zone) 设置<p>主可用区，为空则选择默认可用区</p>
 * @method string getZoneBak() 获取<p>备可用区，为空则选择默认可用区</p>
 * @method void setZoneBak(string $ZoneBak) 设置<p>备可用区，为空则选择默认可用区</p>
 * @method integer getCrossAZone() 获取<p>异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备</p>
 * @method void setCrossAZone(integer $CrossAZone) 设置<p>异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备</p>
 * @method FwCidrInfo getFwCidrInfo() 获取<p>指定防火墙使用网段信息</p>
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) 设置<p>指定防火墙使用网段信息</p>
 */
class CreateNatFwInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>防火墙实例名称</p>
     */
    public $Name;

    /**
     * @var integer <p>带宽</p>
     */
    public $Width;

    /**
     * @var integer <p>模式 1：接入模式；0：新增模式</p>
     */
    public $Mode;

    /**
     * @var NewModeItems <p>新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。</p>
     */
    public $NewModeItems;

    /**
     * @var array <p>接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。</p>
     */
    public $NatGwList;

    /**
     * @var string <p>主可用区，为空则选择默认可用区</p>
     */
    public $Zone;

    /**
     * @var string <p>备可用区，为空则选择默认可用区</p>
     */
    public $ZoneBak;

    /**
     * @var integer <p>异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备</p>
     */
    public $CrossAZone;

    /**
     * @var FwCidrInfo <p>指定防火墙使用网段信息</p>
     */
    public $FwCidrInfo;

    /**
     * @param string $Name <p>防火墙实例名称</p>
     * @param integer $Width <p>带宽</p>
     * @param integer $Mode <p>模式 1：接入模式；0：新增模式</p>
     * @param NewModeItems $NewModeItems <p>新增模式传递参数，其中NewModeItems和NatgwList至少传递一种。</p>
     * @param array $NatGwList <p>接入模式接入的nat网关列表，其中NewModeItems和NatgwList至少传递一种。</p>
     * @param string $Zone <p>主可用区，为空则选择默认可用区</p>
     * @param string $ZoneBak <p>备可用区，为空则选择默认可用区</p>
     * @param integer $CrossAZone <p>异地灾备 1：使用异地灾备；0：不使用异地灾备；为空则默认不使用异地灾备</p>
     * @param FwCidrInfo $FwCidrInfo <p>指定防火墙使用网段信息</p>
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

        if (array_key_exists("FwCidrInfo",$param) and $param["FwCidrInfo"] !== null) {
            $this->FwCidrInfo = new FwCidrInfo();
            $this->FwCidrInfo->deserialize($param["FwCidrInfo"]);
        }
    }
}
