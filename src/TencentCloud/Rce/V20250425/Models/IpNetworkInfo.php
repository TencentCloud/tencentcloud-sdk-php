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
namespace TencentCloud\Rce\V20250425\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IP基础网络信息
 *
 * @method string getISP() 获取<p>互联网服务提供商</p>
 * @method void setISP(string $ISP) 设置<p>互联网服务提供商</p>
 * @method string getASN() 获取<p>自治系统号</p>
 * @method void setASN(string $ASN) 设置<p>自治系统号</p>
 * @method string getOrganization() 获取<p>IP注册组织名称</p>
 * @method void setOrganization(string $Organization) 设置<p>IP注册组织名称</p>
 * @method boolean getIsReserved() 获取<p>是否保留IP</p>
 * @method void setIsReserved(boolean $IsReserved) 设置<p>是否保留IP</p>
 * @method boolean getIsGateway() 获取<p>是否网关IP</p>
 * @method void setIsGateway(boolean $IsGateway) 设置<p>是否网关IP</p>
 * @method boolean getIsAnycast() 获取<p>是否任播网络</p>
 * @method void setIsAnycast(boolean $IsAnycast) 设置<p>是否任播网络</p>
 * @method boolean getIsMobile() 获取<p>是否移动网络</p>
 * @method void setIsMobile(boolean $IsMobile) 设置<p>是否移动网络</p>
 * @method boolean getIsDynamic() 获取<p>是否动态IP</p>
 * @method void setIsDynamic(boolean $IsDynamic) 设置<p>是否动态IP</p>
 * @method boolean getIsEgress() 获取<p>是否网络出口</p>
 * @method void setIsEgress(boolean $IsEgress) 设置<p>是否网络出口</p>
 * @method boolean getIsDNS() 获取<p>是否域名解析</p>
 * @method void setIsDNS(boolean $IsDNS) 设置<p>是否域名解析</p>
 * @method boolean getIsEducation() 获取<p>是否教育机构</p>
 * @method void setIsEducation(boolean $IsEducation) 设置<p>是否教育机构</p>
 * @method boolean getIsInstitution() 获取<p>是否组织机构</p>
 * @method void setIsInstitution(boolean $IsInstitution) 设置<p>是否组织机构</p>
 * @method boolean getIsCompany() 获取<p>是否企业专线</p>
 * @method void setIsCompany(boolean $IsCompany) 设置<p>是否企业专线</p>
 * @method boolean getIsResidence() 获取<p>是否家用宽带</p>
 * @method void setIsResidence(boolean $IsResidence) 设置<p>是否家用宽带</p>
 * @method boolean getIsCloudService() 获取<p>是否云服务</p>
 * @method void setIsCloudService(boolean $IsCloudService) 设置<p>是否云服务</p>
 * @method boolean getIsInfrastructure() 获取<p>是否基础设施</p>
 * @method void setIsInfrastructure(boolean $IsInfrastructure) 设置<p>是否基础设施</p>
 * @method boolean getIsMXServer() 获取<p>是否邮箱服务</p>
 * @method void setIsMXServer(boolean $IsMXServer) 设置<p>是否邮箱服务</p>
 */
class IpNetworkInfo extends AbstractModel
{
    /**
     * @var string <p>互联网服务提供商</p>
     */
    public $ISP;

    /**
     * @var string <p>自治系统号</p>
     */
    public $ASN;

    /**
     * @var string <p>IP注册组织名称</p>
     */
    public $Organization;

    /**
     * @var boolean <p>是否保留IP</p>
     */
    public $IsReserved;

    /**
     * @var boolean <p>是否网关IP</p>
     */
    public $IsGateway;

    /**
     * @var boolean <p>是否任播网络</p>
     */
    public $IsAnycast;

    /**
     * @var boolean <p>是否移动网络</p>
     */
    public $IsMobile;

    /**
     * @var boolean <p>是否动态IP</p>
     */
    public $IsDynamic;

    /**
     * @var boolean <p>是否网络出口</p>
     */
    public $IsEgress;

    /**
     * @var boolean <p>是否域名解析</p>
     */
    public $IsDNS;

    /**
     * @var boolean <p>是否教育机构</p>
     */
    public $IsEducation;

    /**
     * @var boolean <p>是否组织机构</p>
     */
    public $IsInstitution;

    /**
     * @var boolean <p>是否企业专线</p>
     */
    public $IsCompany;

    /**
     * @var boolean <p>是否家用宽带</p>
     */
    public $IsResidence;

    /**
     * @var boolean <p>是否云服务</p>
     */
    public $IsCloudService;

    /**
     * @var boolean <p>是否基础设施</p>
     */
    public $IsInfrastructure;

    /**
     * @var boolean <p>是否邮箱服务</p>
     */
    public $IsMXServer;

    /**
     * @param string $ISP <p>互联网服务提供商</p>
     * @param string $ASN <p>自治系统号</p>
     * @param string $Organization <p>IP注册组织名称</p>
     * @param boolean $IsReserved <p>是否保留IP</p>
     * @param boolean $IsGateway <p>是否网关IP</p>
     * @param boolean $IsAnycast <p>是否任播网络</p>
     * @param boolean $IsMobile <p>是否移动网络</p>
     * @param boolean $IsDynamic <p>是否动态IP</p>
     * @param boolean $IsEgress <p>是否网络出口</p>
     * @param boolean $IsDNS <p>是否域名解析</p>
     * @param boolean $IsEducation <p>是否教育机构</p>
     * @param boolean $IsInstitution <p>是否组织机构</p>
     * @param boolean $IsCompany <p>是否企业专线</p>
     * @param boolean $IsResidence <p>是否家用宽带</p>
     * @param boolean $IsCloudService <p>是否云服务</p>
     * @param boolean $IsInfrastructure <p>是否基础设施</p>
     * @param boolean $IsMXServer <p>是否邮箱服务</p>
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
        if (array_key_exists("ISP",$param) and $param["ISP"] !== null) {
            $this->ISP = $param["ISP"];
        }

        if (array_key_exists("ASN",$param) and $param["ASN"] !== null) {
            $this->ASN = $param["ASN"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = $param["Organization"];
        }

        if (array_key_exists("IsReserved",$param) and $param["IsReserved"] !== null) {
            $this->IsReserved = $param["IsReserved"];
        }

        if (array_key_exists("IsGateway",$param) and $param["IsGateway"] !== null) {
            $this->IsGateway = $param["IsGateway"];
        }

        if (array_key_exists("IsAnycast",$param) and $param["IsAnycast"] !== null) {
            $this->IsAnycast = $param["IsAnycast"];
        }

        if (array_key_exists("IsMobile",$param) and $param["IsMobile"] !== null) {
            $this->IsMobile = $param["IsMobile"];
        }

        if (array_key_exists("IsDynamic",$param) and $param["IsDynamic"] !== null) {
            $this->IsDynamic = $param["IsDynamic"];
        }

        if (array_key_exists("IsEgress",$param) and $param["IsEgress"] !== null) {
            $this->IsEgress = $param["IsEgress"];
        }

        if (array_key_exists("IsDNS",$param) and $param["IsDNS"] !== null) {
            $this->IsDNS = $param["IsDNS"];
        }

        if (array_key_exists("IsEducation",$param) and $param["IsEducation"] !== null) {
            $this->IsEducation = $param["IsEducation"];
        }

        if (array_key_exists("IsInstitution",$param) and $param["IsInstitution"] !== null) {
            $this->IsInstitution = $param["IsInstitution"];
        }

        if (array_key_exists("IsCompany",$param) and $param["IsCompany"] !== null) {
            $this->IsCompany = $param["IsCompany"];
        }

        if (array_key_exists("IsResidence",$param) and $param["IsResidence"] !== null) {
            $this->IsResidence = $param["IsResidence"];
        }

        if (array_key_exists("IsCloudService",$param) and $param["IsCloudService"] !== null) {
            $this->IsCloudService = $param["IsCloudService"];
        }

        if (array_key_exists("IsInfrastructure",$param) and $param["IsInfrastructure"] !== null) {
            $this->IsInfrastructure = $param["IsInfrastructure"];
        }

        if (array_key_exists("IsMXServer",$param) and $param["IsMXServer"] !== null) {
            $this->IsMXServer = $param["IsMXServer"];
        }
    }
}
