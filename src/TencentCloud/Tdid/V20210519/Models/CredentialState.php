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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭证链上状态信息
 *
 * @method string getId() 获取凭证唯一id
 * @method void setId(string $Id) 设置凭证唯一id
 * @method integer getStatus() 获取凭证状态（0：吊销；1：有效）
 * @method void setStatus(integer $Status) 设置凭证状态（0：吊销；1：有效）
 * @method string getIssuer() 获取凭证颁发者Did
 * @method void setIssuer(string $Issuer) 设置凭证颁发者Did
 * @method string getVCDigest() 获取VC摘要，对应凭证Proof的vcDigest字段
 * @method void setVCDigest(string $VCDigest) 设置VC摘要，对应凭证Proof的vcDigest字段
 * @method string getTXDigest() 获取交易摘要，对应凭证Proof的txDigest字段 
 * @method void setTXDigest(string $TXDigest) 设置交易摘要，对应凭证Proof的txDigest字段 
 * @method integer getIssueTime() 获取颁布凭证的UTC时间戳
 * @method void setIssueTime(integer $IssueTime) 设置颁布凭证的UTC时间戳
 * @method integer getExpireTime() 获取凭证过期的UTC时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置凭证过期的UTC时间戳
 * @method integer getCPTId() 获取凭证模板id
 * @method void setCPTId(integer $CPTId) 设置凭证模板id
 * @method string getSignature() 获取凭证签名
 * @method void setSignature(string $Signature) 设置凭证签名
 * @method string getMetaDigest() 获取元数据摘要
 * @method void setMetaDigest(string $MetaDigest) 设置元数据摘要
 */
class CredentialState extends AbstractModel
{
    /**
     * @var string 凭证唯一id
     */
    public $Id;

    /**
     * @var integer 凭证状态（0：吊销；1：有效）
     */
    public $Status;

    /**
     * @var string 凭证颁发者Did
     */
    public $Issuer;

    /**
     * @var string VC摘要，对应凭证Proof的vcDigest字段
     */
    public $VCDigest;

    /**
     * @var string 交易摘要，对应凭证Proof的txDigest字段 
     */
    public $TXDigest;

    /**
     * @var integer 颁布凭证的UTC时间戳
     */
    public $IssueTime;

    /**
     * @var integer 凭证过期的UTC时间戳
     */
    public $ExpireTime;

    /**
     * @var integer 凭证模板id
     */
    public $CPTId;

    /**
     * @var string 凭证签名
     */
    public $Signature;

    /**
     * @var string 元数据摘要
     */
    public $MetaDigest;

    /**
     * @param string $Id 凭证唯一id
     * @param integer $Status 凭证状态（0：吊销；1：有效）
     * @param string $Issuer 凭证颁发者Did
     * @param string $VCDigest VC摘要，对应凭证Proof的vcDigest字段
     * @param string $TXDigest 交易摘要，对应凭证Proof的txDigest字段 
     * @param integer $IssueTime 颁布凭证的UTC时间戳
     * @param integer $ExpireTime 凭证过期的UTC时间戳
     * @param integer $CPTId 凭证模板id
     * @param string $Signature 凭证签名
     * @param string $MetaDigest 元数据摘要
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Issuer",$param) and $param["Issuer"] !== null) {
            $this->Issuer = $param["Issuer"];
        }

        if (array_key_exists("VCDigest",$param) and $param["VCDigest"] !== null) {
            $this->VCDigest = $param["VCDigest"];
        }

        if (array_key_exists("TXDigest",$param) and $param["TXDigest"] !== null) {
            $this->TXDigest = $param["TXDigest"];
        }

        if (array_key_exists("IssueTime",$param) and $param["IssueTime"] !== null) {
            $this->IssueTime = $param["IssueTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("CPTId",$param) and $param["CPTId"] !== null) {
            $this->CPTId = $param["CPTId"];
        }

        if (array_key_exists("Signature",$param) and $param["Signature"] !== null) {
            $this->Signature = $param["Signature"];
        }

        if (array_key_exists("MetaDigest",$param) and $param["MetaDigest"] !== null) {
            $this->MetaDigest = $param["MetaDigest"];
        }
    }
}
