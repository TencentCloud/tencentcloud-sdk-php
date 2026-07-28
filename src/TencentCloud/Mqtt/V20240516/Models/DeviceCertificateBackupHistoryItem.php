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
 * @method string getClientId() 获取<p>客户端id</p>
 * @method void setClientId(string $ClientId) 设置<p>客户端id</p>
 * @method string getDeviceCertificate() 获取<p>设备证书</p>
 * @method void setDeviceCertificate(string $DeviceCertificate) 设置<p>设备证书</p>
 * @method string getDeviceCertificateSn() 获取<p>设备证书SN序列号，用于唯一标识一个设备证书</p>
 * @method void setDeviceCertificateSn(string $DeviceCertificateSn) 设置<p>设备证书SN序列号，用于唯一标识一个设备证书</p>
 * @method string getDeviceCertificateCn() 获取<p>设备证书Cn</p>
 * @method void setDeviceCertificateCn(string $DeviceCertificateCn) 设置<p>设备证书Cn</p>
 * @method string getCaSn() 获取<p>签发该证书的CA证书的序列号</p>
 * @method void setCaSn(string $CaSn) 设置<p>签发该证书的CA证书的序列号</p>
 * @method string getFormat() 获取<p>证书格式，当前仅支持PEM</p>
 * @method void setFormat(string $Format) 设置<p>证书格式，当前仅支持PEM</p>
 * @method string getStatus() 获取<p>设备证书状态<br>    ACTIVE：激活<br>    INACTIVE：未激活<br>    REVOKED：吊销<br>    PENDING_ACTIVATION：注册待激活</p>
 * @method void setStatus(string $Status) 设置<p>设备证书状态<br>    ACTIVE：激活<br>    INACTIVE：未激活<br>    REVOKED：吊销<br>    PENDING_ACTIVATION：注册待激活</p>
 * @method string getOrganizationalUnit() 获取<p>组织单位</p>
 * @method void setOrganizationalUnit(string $OrganizationalUnit) 设置<p>组织单位</p>
 * @method integer getLastActivationTime() 获取<p>上次激活时间，毫秒级时间戳 。</p>
 * @method void setLastActivationTime(integer $LastActivationTime) 设置<p>上次激活时间，毫秒级时间戳 。</p>
 * @method integer getLastInactivationTime() 获取<p>上次取消激活时间，毫秒级时间戳 。</p>
 * @method void setLastInactivationTime(integer $LastInactivationTime) 设置<p>上次取消激活时间，毫秒级时间戳 。</p>
 * @method string getCertificateSource() 获取<p>证书来源：<br>API, 手动注册<br>JITP 自动注册</p>
 * @method void setCertificateSource(string $CertificateSource) 设置<p>证书来源：<br>API, 手动注册<br>JITP 自动注册</p>
 * @method integer getNotAfterTime() 获取<p>证书失效日期，毫秒级时间戳 。</p>
 * @method void setNotAfterTime(integer $NotAfterTime) 设置<p>证书失效日期，毫秒级时间戳 。</p>
 * @method integer getNotBeforeTime() 获取<p>证书生效开始日期，毫秒级时间戳 。</p>
 * @method void setNotBeforeTime(integer $NotBeforeTime) 设置<p>证书生效开始日期，毫秒级时间戳 。</p>
 * @method string getSource() 获取<p>数据来源</p>
 * @method void setSource(string $Source) 设置<p>数据来源</p>
 * @method integer getModificationTime() 获取<p>修改时间</p><p>单位：毫秒级时间戳</p>
 * @method void setModificationTime(integer $ModificationTime) 设置<p>修改时间</p><p>单位：毫秒级时间戳</p>
 */
class DeviceCertificateBackupHistoryItem extends AbstractModel
{
    /**
     * @var string <p>客户端id</p>
     */
    public $ClientId;

    /**
     * @var string <p>设备证书</p>
     */
    public $DeviceCertificate;

    /**
     * @var string <p>设备证书SN序列号，用于唯一标识一个设备证书</p>
     */
    public $DeviceCertificateSn;

    /**
     * @var string <p>设备证书Cn</p>
     */
    public $DeviceCertificateCn;

    /**
     * @var string <p>签发该证书的CA证书的序列号</p>
     */
    public $CaSn;

    /**
     * @var string <p>证书格式，当前仅支持PEM</p>
     */
    public $Format;

    /**
     * @var string <p>设备证书状态<br>    ACTIVE：激活<br>    INACTIVE：未激活<br>    REVOKED：吊销<br>    PENDING_ACTIVATION：注册待激活</p>
     */
    public $Status;

    /**
     * @var string <p>组织单位</p>
     */
    public $OrganizationalUnit;

    /**
     * @var integer <p>上次激活时间，毫秒级时间戳 。</p>
     */
    public $LastActivationTime;

    /**
     * @var integer <p>上次取消激活时间，毫秒级时间戳 。</p>
     */
    public $LastInactivationTime;

    /**
     * @var string <p>证书来源：<br>API, 手动注册<br>JITP 自动注册</p>
     */
    public $CertificateSource;

    /**
     * @var integer <p>证书失效日期，毫秒级时间戳 。</p>
     */
    public $NotAfterTime;

    /**
     * @var integer <p>证书生效开始日期，毫秒级时间戳 。</p>
     */
    public $NotBeforeTime;

    /**
     * @var string <p>数据来源</p>
     */
    public $Source;

    /**
     * @var integer <p>修改时间</p><p>单位：毫秒级时间戳</p>
     */
    public $ModificationTime;

    /**
     * @param string $ClientId <p>客户端id</p>
     * @param string $DeviceCertificate <p>设备证书</p>
     * @param string $DeviceCertificateSn <p>设备证书SN序列号，用于唯一标识一个设备证书</p>
     * @param string $DeviceCertificateCn <p>设备证书Cn</p>
     * @param string $CaSn <p>签发该证书的CA证书的序列号</p>
     * @param string $Format <p>证书格式，当前仅支持PEM</p>
     * @param string $Status <p>设备证书状态<br>    ACTIVE：激活<br>    INACTIVE：未激活<br>    REVOKED：吊销<br>    PENDING_ACTIVATION：注册待激活</p>
     * @param string $OrganizationalUnit <p>组织单位</p>
     * @param integer $LastActivationTime <p>上次激活时间，毫秒级时间戳 。</p>
     * @param integer $LastInactivationTime <p>上次取消激活时间，毫秒级时间戳 。</p>
     * @param string $CertificateSource <p>证书来源：<br>API, 手动注册<br>JITP 自动注册</p>
     * @param integer $NotAfterTime <p>证书失效日期，毫秒级时间戳 。</p>
     * @param integer $NotBeforeTime <p>证书生效开始日期，毫秒级时间戳 。</p>
     * @param string $Source <p>数据来源</p>
     * @param integer $ModificationTime <p>修改时间</p><p>单位：毫秒级时间戳</p>
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

        if (array_key_exists("CertificateSource",$param) and $param["CertificateSource"] !== null) {
            $this->CertificateSource = $param["CertificateSource"];
        }

        if (array_key_exists("NotAfterTime",$param) and $param["NotAfterTime"] !== null) {
            $this->NotAfterTime = $param["NotAfterTime"];
        }

        if (array_key_exists("NotBeforeTime",$param) and $param["NotBeforeTime"] !== null) {
            $this->NotBeforeTime = $param["NotBeforeTime"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ModificationTime",$param) and $param["ModificationTime"] !== null) {
            $this->ModificationTime = $param["ModificationTime"];
        }
    }
}
