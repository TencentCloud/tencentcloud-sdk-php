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
namespace TencentCloud\Dc\V20180410\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建敏捷上云入参
 *
 * @method string getName() 获取敏捷上云名称
 * @method void setName(string $Name) 设置敏捷上云名称
 * @method string getIdcAddress() 获取需要接入敏捷上云的IDC的地址
 * @method void setIdcAddress(string $IdcAddress) 设置需要接入敏捷上云的IDC的地址
 * @method string getIdcType() 获取需要接入敏捷上云的IDC的互联网服务提供商类型
 * @method void setIdcType(string $IdcType) 设置需要接入敏捷上云的IDC的互联网服务提供商类型
 * @method integer getBandwidth() 获取敏捷上云的带宽，单位为MB
 * @method void setBandwidth(integer $Bandwidth) 设置敏捷上云的带宽，单位为MB
 * @method string getTelephone() 获取联系电话
 * @method void setTelephone(string $Telephone) 设置联系电话
 * @method string getRemarks() 获取备注信息
 * @method void setRemarks(string $Remarks) 设置备注信息
 */
class CreateCasInput extends AbstractModel
{
    /**
     * @var string 敏捷上云名称
     */
    public $Name;

    /**
     * @var string 需要接入敏捷上云的IDC的地址
     */
    public $IdcAddress;

    /**
     * @var string 需要接入敏捷上云的IDC的互联网服务提供商类型
     */
    public $IdcType;

    /**
     * @var integer 敏捷上云的带宽，单位为MB
     */
    public $Bandwidth;

    /**
     * @var string 联系电话
     */
    public $Telephone;

    /**
     * @var string 备注信息
     */
    public $Remarks;

    /**
     * @param string $Name 敏捷上云名称
     * @param string $IdcAddress 需要接入敏捷上云的IDC的地址
     * @param string $IdcType 需要接入敏捷上云的IDC的互联网服务提供商类型
     * @param integer $Bandwidth 敏捷上云的带宽，单位为MB
     * @param string $Telephone 联系电话
     * @param string $Remarks 备注信息
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
    }
}
