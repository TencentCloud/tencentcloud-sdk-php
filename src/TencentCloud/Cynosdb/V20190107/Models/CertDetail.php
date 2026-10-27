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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 证书详情
 *
 * @method string getCertId() 获取<p>证书ID</p>
 * @method void setCertId(string $CertId) 设置<p>证书ID</p>
 * @method string getAlias() 获取<p>证书备注名</p>
 * @method void setAlias(string $Alias) 设置<p>证书备注名</p>
 * @method string getDomain() 获取<p>证书绑定的主域名</p>
 * @method void setDomain(string $Domain) 设置<p>证书绑定的主域名</p>
 * @method string getSource() 获取<p>证书来源</p>
 * @method void setSource(string $Source) 设置<p>证书来源</p>
 * @method integer getEndTime() 获取<p>有效期结束（秒级时间戳）</p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>有效期结束（秒级时间戳）</p><p>单位：秒</p>
 * @method integer getRemainDays() 获取<p>证书到期剩余天数</p>
 * @method void setRemainDays(integer $RemainDays) 设置<p>证书到期剩余天数</p>
 * @method integer getCertStatus() 获取<p>证书状态，1为已通过</p>
 * @method void setCertStatus(integer $CertStatus) 设置<p>证书状态，1为已通过</p>
 */
class CertDetail extends AbstractModel
{
    /**
     * @var string <p>证书ID</p>
     */
    public $CertId;

    /**
     * @var string <p>证书备注名</p>
     */
    public $Alias;

    /**
     * @var string <p>证书绑定的主域名</p>
     */
    public $Domain;

    /**
     * @var string <p>证书来源</p>
     */
    public $Source;

    /**
     * @var integer <p>有效期结束（秒级时间戳）</p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @var integer <p>证书到期剩余天数</p>
     */
    public $RemainDays;

    /**
     * @var integer <p>证书状态，1为已通过</p>
     */
    public $CertStatus;

    /**
     * @param string $CertId <p>证书ID</p>
     * @param string $Alias <p>证书备注名</p>
     * @param string $Domain <p>证书绑定的主域名</p>
     * @param string $Source <p>证书来源</p>
     * @param integer $EndTime <p>有效期结束（秒级时间戳）</p><p>单位：秒</p>
     * @param integer $RemainDays <p>证书到期剩余天数</p>
     * @param integer $CertStatus <p>证书状态，1为已通过</p>
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
        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("RemainDays",$param) and $param["RemainDays"] !== null) {
            $this->RemainDays = $param["RemainDays"];
        }

        if (array_key_exists("CertStatus",$param) and $param["CertStatus"] !== null) {
            $this->CertStatus = $param["CertStatus"];
        }
    }
}
