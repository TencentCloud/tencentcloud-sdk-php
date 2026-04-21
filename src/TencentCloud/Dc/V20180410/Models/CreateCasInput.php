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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建敏捷上云入参
 *
 * @method string getName() 获取<p>敏捷上云名称</p>
 * @method void setName(string $Name) 设置<p>敏捷上云名称</p>
 * @method string getIdcAddress() 获取<p>需要接入敏捷上云的IDC的地址</p>
 * @method void setIdcAddress(string $IdcAddress) 设置<p>需要接入敏捷上云的IDC的地址</p>
 * @method string getIdcType() 获取<p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
 * @method void setIdcType(string $IdcType) 设置<p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
 * @method integer getBandwidth() 获取<p>敏捷上云的带宽，单位为MB</p>
 * @method void setBandwidth(integer $Bandwidth) 设置<p>敏捷上云的带宽，单位为MB</p>
 * @method string getTelephone() 获取<p>联系电话</p>
 * @method void setTelephone(string $Telephone) 设置<p>联系电话</p>
 * @method string getRemarks() 获取<p>备注信息</p>
 * @method void setRemarks(string $Remarks) 设置<p>备注信息</p>
 * @method string getArRegion() 获取<p>接入地域</p>
 * @method void setArRegion(string $ArRegion) 设置<p>接入地域</p>
 * @method string getIdcPointType() 获取<p>IDC侧类型，默认为OTHER。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
 * @method void setIdcPointType(string $IdcPointType) 设置<p>IDC侧类型，默认为OTHER。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
 * @method boolean getBIapLinkProtected() 获取<p>运营商链路是否有保护</p>
 * @method void setBIapLinkProtected(boolean $BIapLinkProtected) 设置<p>运营商链路是否有保护</p>
 * @method string getServiceType() 获取<p>服务类型，SHARE-共享型，EXCLUSIVE-独占型</p>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型，SHARE-共享型，EXCLUSIVE-独占型</p>
 */
class CreateCasInput extends AbstractModel
{
    /**
     * @var string <p>敏捷上云名称</p>
     */
    public $Name;

    /**
     * @var string <p>需要接入敏捷上云的IDC的地址</p>
     */
    public $IdcAddress;

    /**
     * @var string <p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
     */
    public $IdcType;

    /**
     * @var integer <p>敏捷上云的带宽，单位为MB</p>
     */
    public $Bandwidth;

    /**
     * @var string <p>联系电话</p>
     */
    public $Telephone;

    /**
     * @var string <p>备注信息</p>
     */
    public $Remarks;

    /**
     * @var string <p>接入地域</p>
     */
    public $ArRegion;

    /**
     * @var string <p>IDC侧类型，默认为OTHER。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
     */
    public $IdcPointType;

    /**
     * @var boolean <p>运营商链路是否有保护</p>
     */
    public $BIapLinkProtected;

    /**
     * @var string <p>服务类型，SHARE-共享型，EXCLUSIVE-独占型</p>
     */
    public $ServiceType;

    /**
     * @param string $Name <p>敏捷上云名称</p>
     * @param string $IdcAddress <p>需要接入敏捷上云的IDC的地址</p>
     * @param string $IdcType <p>需要接入敏捷上云的IDC的互联网服务提供商类型</p>
     * @param integer $Bandwidth <p>敏捷上云的带宽，单位为MB</p>
     * @param string $Telephone <p>联系电话</p>
     * @param string $Remarks <p>备注信息</p>
     * @param string $ArRegion <p>接入地域</p>
     * @param string $IdcPointType <p>IDC侧类型，默认为OTHER。枚举值：CLOUD-云，ISP-运营商，OTHER-第三方</p>
     * @param boolean $BIapLinkProtected <p>运营商链路是否有保护</p>
     * @param string $ServiceType <p>服务类型，SHARE-共享型，EXCLUSIVE-独占型</p>
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

        if (array_key_exists("IdcAddress",$param) and $param["IdcAddress"] !== null) {
            $this->IdcAddress = $param["IdcAddress"];
        }

        if (array_key_exists("IdcType",$param) and $param["IdcType"] !== null) {
            $this->IdcType = $param["IdcType"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }

        if (array_key_exists("Remarks",$param) and $param["Remarks"] !== null) {
            $this->Remarks = $param["Remarks"];
        }

        if (array_key_exists("ArRegion",$param) and $param["ArRegion"] !== null) {
            $this->ArRegion = $param["ArRegion"];
        }

        if (array_key_exists("IdcPointType",$param) and $param["IdcPointType"] !== null) {
            $this->IdcPointType = $param["IdcPointType"];
        }

        if (array_key_exists("BIapLinkProtected",$param) and $param["BIapLinkProtected"] !== null) {
            $this->BIapLinkProtected = $param["BIapLinkProtected"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }
    }
}
