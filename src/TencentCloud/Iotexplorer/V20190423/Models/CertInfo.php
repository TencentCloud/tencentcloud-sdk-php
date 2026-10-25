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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * X509证书信息
 *
 * @method string getCertName() 获取<p>证书名称</p>
 * @method void setCertName(string $CertName) 设置<p>证书名称</p>
 * @method string getCertSN() 获取<p>证书序列号</p>
 * @method void setCertSN(string $CertSN) 设置<p>证书序列号</p>
 * @method string getIssuerName() 获取<p>证书颁发者名称（颁发机构的 CN）</p>
 * @method void setIssuerName(string $IssuerName) 设置<p>证书颁发者名称（颁发机构的 CN）</p>
 * @method string getSubject() 获取<p>证书主题，即证书持有者信息</p>
 * @method void setSubject(string $Subject) 设置<p>证书主题，即证书持有者信息</p>
 * @method integer getCreateTime() 获取<p>证书创建时间，Unix 时间戳，</p><p>单位：秒</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>证书创建时间，Unix 时间戳，</p><p>单位：秒</p>
 * @method integer getEffectiveTime() 获取<p>证书生效时间，Unix 时间戳，</p><p>单位：秒</p>
 * @method void setEffectiveTime(integer $EffectiveTime) 设置<p>证书生效时间，Unix 时间戳，</p><p>单位：秒</p>
 * @method integer getExpireTime() 获取<p>证书过期时间，Unix 时间戳，</p><p>单位：秒</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>证书过期时间，Unix 时间戳，</p><p>单位：秒</p>
 * @method string getCertText() 获取<p>证书内容，PEM 格式文本</p>
 * @method void setCertText(string $CertText) 设置<p>证书内容，PEM 格式文本</p>
 */
class CertInfo extends AbstractModel
{
    /**
     * @var string <p>证书名称</p>
     */
    public $CertName;

    /**
     * @var string <p>证书序列号</p>
     */
    public $CertSN;

    /**
     * @var string <p>证书颁发者名称（颁发机构的 CN）</p>
     */
    public $IssuerName;

    /**
     * @var string <p>证书主题，即证书持有者信息</p>
     */
    public $Subject;

    /**
     * @var integer <p>证书创建时间，Unix 时间戳，</p><p>单位：秒</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>证书生效时间，Unix 时间戳，</p><p>单位：秒</p>
     */
    public $EffectiveTime;

    /**
     * @var integer <p>证书过期时间，Unix 时间戳，</p><p>单位：秒</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>证书内容，PEM 格式文本</p>
     */
    public $CertText;

    /**
     * @param string $CertName <p>证书名称</p>
     * @param string $CertSN <p>证书序列号</p>
     * @param string $IssuerName <p>证书颁发者名称（颁发机构的 CN）</p>
     * @param string $Subject <p>证书主题，即证书持有者信息</p>
     * @param integer $CreateTime <p>证书创建时间，Unix 时间戳，</p><p>单位：秒</p>
     * @param integer $EffectiveTime <p>证书生效时间，Unix 时间戳，</p><p>单位：秒</p>
     * @param integer $ExpireTime <p>证书过期时间，Unix 时间戳，</p><p>单位：秒</p>
     * @param string $CertText <p>证书内容，PEM 格式文本</p>
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
        if (array_key_exists("CertName",$param) and $param["CertName"] !== null) {
            $this->CertName = $param["CertName"];
        }

        if (array_key_exists("CertSN",$param) and $param["CertSN"] !== null) {
            $this->CertSN = $param["CertSN"];
        }

        if (array_key_exists("IssuerName",$param) and $param["IssuerName"] !== null) {
            $this->IssuerName = $param["IssuerName"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("EffectiveTime",$param) and $param["EffectiveTime"] !== null) {
            $this->EffectiveTime = $param["EffectiveTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CertText",$param) and $param["CertText"] !== null) {
            $this->CertText = $param["CertText"];
        }
    }
}
