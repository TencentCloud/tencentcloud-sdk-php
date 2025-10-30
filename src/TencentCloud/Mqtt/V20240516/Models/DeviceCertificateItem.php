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
namespace TencentCloud\Mqtt\V20240516\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备证书信息
 *
 * @method string getClientId() 获取客户端id
 * @method void setClientId(string $ClientId) 设置客户端id
 * @method string getDeviceCertificate() 获取设备证书
 * @method void setDeviceCertificate(string $DeviceCertificate) 设置设备证书
 * @method string getDeviceCertificateSn() 获取设备证书SN序列号，用于唯一标识一个设备证书
 * @method void setDeviceCertificateSn(string $DeviceCertificateSn) 设置设备证书SN序列号，用于唯一标识一个设备证书
 * @method string getDeviceCertificateCn() 获取设备证书Cn
 * @method void setDeviceCertificateCn(string $DeviceCertificateCn) 设置设备证书Cn
 * @method string getCaSn() 获取签发该证书的CA证书的序列号
 * @method void setCaSn(string $CaSn) 设置签发该证书的CA证书的序列号
 * @method string getFormat() 获取证书格式，当前仅支持PEM
 * @method void setFormat(string $Format) 设置证书格式，当前仅支持PEM
 * @method string getStatus() 获取设备证书状态
    ACTIVE：激活
    INACTIVE：未激活
    REVOKED：吊销
    PENDING_ACTIVATION：注册待激活
 * @method void setStatus(string $Status) 设置设备证书状态
    ACTIVE：激活
    INACTIVE：未激活
    REVOKED：吊销
    PENDING_ACTIVATION：注册待激活
 * @method string getOrganizationalUnit() 获取组织单位
 * @method void setOrganizationalUnit(string $OrganizationalUnit) 设置组织单位
 * @method integer getLastActivationTime() 获取上次激活时间，毫秒级时间戳 。
 * @method void setLastActivationTime(integer $LastActivationTime) 设置上次激活时间，毫秒级时间戳 。
 * @method integer getLastInactivationTime() 获取上次取消激活时间，毫秒级时间戳 。
 * @method void setLastInactivationTime(integer $LastInactivationTime) 设置上次取消激活时间，毫秒级时间戳 。
 * @method integer getCreatedTime() 获取创建时间，毫秒级时间戳 。
 * @method void setCreatedTime(integer $CreatedTime) 设置创建时间，毫秒级时间戳 。
 * @method integer getUpdateTime() 获取更新时间，毫秒级时间戳 。
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，毫秒级时间戳 。
 * @method string getCertificateSource() 获取证书来源：
API, 手动注册   
JITP 自动注册
 * @method void setCertificateSource(string $CertificateSource) 设置证书来源：
API, 手动注册   
JITP 自动注册
 * @method integer getNotAfterTime() 获取证书失效日期，毫秒级时间戳 。
 * @method void setNotAfterTime(integer $NotAfterTime) 设置证书失效日期，毫秒级时间戳 。
 * @method integer getNotBeforeTime() 获取证书生效开始日期，毫秒级时间戳 。
 * @method void setNotBeforeTime(integer $NotBeforeTime) 设置证书生效开始日期，毫秒级时间戳 。
 */
class DeviceCertificateItem extends AbstractModel
{
    /**
     * @var string 客户端id
     */
    public $ClientId;

    /**
     * @var string 设备证书
     */
    public $DeviceCertificate;

    /**
     * @var string 设备证书SN序列号，用于唯一标识一个设备证书
     */
    public $DeviceCertificateSn;

    /**
     * @var string 设备证书Cn
     */
    public $DeviceCertificateCn;

    /**
     * @var string 签发该证书的CA证书的序列号
     */
    public $CaSn;

    /**
     * @var string 证书格式，当前仅支持PEM
     */
    public $Format;

    /**
     * @var string 设备证书状态
    ACTIVE：激活
    INACTIVE：未激活
    REVOKED：吊销
    PENDING_ACTIVATION：注册待激活
     */
    public $Status;

    /**
     * @var string 组织单位
     */
    public $OrganizationalUnit;

    /**
     * @var integer 上次激活时间，毫秒级时间戳 。
     */
    public $LastActivationTime;

    /**
     * @var integer 上次取消激活时间，毫秒级时间戳 。
     */
    public $LastInactivationTime;

    /**
     * @var integer 创建时间，毫秒级时间戳 。
     */
    public $CreatedTime;

    /**
     * @var integer 更新时间，毫秒级时间戳 。
     */
    public $UpdateTime;

    /**
     * @var string 证书来源：
API, 手动注册   
JITP 自动注册
     */
    public $CertificateSource;

    /**
     * @var integer 证书失效日期，毫秒级时间戳 。
     */
    public $NotAfterTime;

    /**
     * @var integer 证书生效开始日期，毫秒级时间戳 。
     */
    public $NotBeforeTime;

    /**
     * @param string $ClientId 客户端id
     * @param string $DeviceCertificate 设备证书
     * @param string $DeviceCertificateSn 设备证书SN序列号，用于唯一标识一个设备证书
     * @param string $DeviceCertificateCn 设备证书Cn
     * @param string $CaSn 签发该证书的CA证书的序列号
     * @param string $Format 证书格式，当前仅支持PEM
     * @param string $Status 设备证书状态
    ACTIVE：激活
    INACTIVE：未激活
    REVOKED：吊销
    PENDING_ACTIVATION：注册待激活
     * @param string $OrganizationalUnit 组织单位
     * @param integer $LastActivationTime 上次激活时间，毫秒级时间戳 。
     * @param integer $LastInactivationTime 上次取消激活时间，毫秒级时间戳 。
     * @param integer $CreatedTime 创建时间，毫秒级时间戳 。
     * @param integer $UpdateTime 更新时间，毫秒级时间戳 。
     * @param string $CertificateSource 证书来源：
API, 手动注册   
JITP 自动注册
     * @param integer $NotAfterTime 证书失效日期，毫秒级时间戳 。
     * @param integer $NotBeforeTime 证书生效开始日期，毫秒级时间戳 。
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
        if (array_key_exists("ClientId",$param) and $param["ClientId"] !== null) {
            $this->ClientId = $param["ClientId"];
        }

        if (array_key_exists("DeviceCertificate",$param) and $param["DeviceCertificate"] !== null) {
            $this->DeviceCertificate = $param["DeviceCertificate"];
        }

        if (array_key_exists("DeviceCertificateSn",$param) and $param["DeviceCertificateSn"] !== null) {
            $this->DeviceCertificateSn = $param["DeviceCertificateSn"];
        }

        if (array_key_exists("DeviceCertificateCn",$param) and $param["DeviceCertificateCn"] !== null) {
            $this->DeviceCertificateCn = $param["DeviceCertificateCn"];
        }

        if (array_key_exists("CaSn",$param) and $param["CaSn"] !== null) {
            $this->CaSn = $param["CaSn"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrganizationalUnit",$param) and $param["OrganizationalUnit"] !== null) {
            $this->OrganizationalUnit = $param["OrganizationalUnit"];
        }

        if (array_key_exists("LastActivationTime",$param) and $param["LastActivationTime"] !== null) {
            $this->LastActivationTime = $param["LastActivationTime"];
        }

        if (array_key_exists("LastInactivationTime",$param) and $param["LastInactivationTime"] !== null) {
            $this->LastInactivationTime = $param["LastInactivationTime"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CertificateSource",$param) and $param["CertificateSource"] !== null) {
            $this->CertificateSource = $param["CertificateSource"];
        }

        if (array_key_exists("NotAfterTime",$param) and $param["NotAfterTime"] !== null) {
            $this->NotAfterTime = $param["NotAfterTime"];
        }

        if (array_key_exists("NotBeforeTime",$param) and $param["NotBeforeTime"] !== null) {
            $this->NotBeforeTime = $param["NotBeforeTime"];
        }
    }
}
