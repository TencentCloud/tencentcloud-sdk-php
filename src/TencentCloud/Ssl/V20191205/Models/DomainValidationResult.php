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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名验证结果
 *
 * @method string getDomain() 获取域名。
 * @method void setDomain(string $Domain) 设置域名。
 * @method string getVerifyType() 获取验证类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVerifyType(string $VerifyType) 设置验证类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLocalCheck() 获取本地检查结果。
 * @method void setLocalCheck(integer $LocalCheck) 设置本地检查结果。
 * @method integer getCaCheck() 获取CA检查结果。
 * @method void setCaCheck(integer $CaCheck) 设置CA检查结果。
 * @method string getLocalCheckFailReason() 获取检查失败原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocalCheckFailReason(string $LocalCheckFailReason) 设置检查失败原因。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCheckValue() 获取检查到的值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCheckValue(array $CheckValue) 设置检查到的值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getFrequently() 获取是否频繁请求。
 * @method void setFrequently(boolean $Frequently) 设置是否频繁请求。
 * @method boolean getIssued() 获取是否已经签发。
 * @method void setIssued(boolean $Issued) 设置是否已经签发。
 */
class DomainValidationResult extends AbstractModel
{
    /**
     * @var string 域名。
     */
    public $Domain;

    /**
     * @var string 验证类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VerifyType;

    /**
     * @var integer 本地检查结果。
     */
    public $LocalCheck;

    /**
     * @var integer CA检查结果。
     */
    public $CaCheck;

    /**
     * @var string 检查失败原因。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocalCheckFailReason;

    /**
     * @var array 检查到的值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CheckValue;

    /**
     * @var boolean 是否频繁请求。
     */
    public $Frequently;

    /**
     * @var boolean 是否已经签发。
     */
    public $Issued;

    /**
     * @param string $Domain 域名。
     * @param string $VerifyType 验证类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LocalCheck 本地检查结果。
     * @param integer $CaCheck CA检查结果。
     * @param string $LocalCheckFailReason 检查失败原因。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CheckValue 检查到的值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Frequently 是否频繁请求。
     * @param boolean $Issued 是否已经签发。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }

        if (array_key_exists("LocalCheck",$param) and $param["LocalCheck"] !== null) {
            $this->LocalCheck = $param["LocalCheck"];
        }

        if (array_key_exists("CaCheck",$param) and $param["CaCheck"] !== null) {
            $this->CaCheck = $param["CaCheck"];
        }

        if (array_key_exists("LocalCheckFailReason",$param) and $param["LocalCheckFailReason"] !== null) {
            $this->LocalCheckFailReason = $param["LocalCheckFailReason"];
        }

        if (array_key_exists("CheckValue",$param) and $param["CheckValue"] !== null) {
            $this->CheckValue = $param["CheckValue"];
        }

        if (array_key_exists("Frequently",$param) and $param["Frequently"] !== null) {
            $this->Frequently = $param["Frequently"];
        }

        if (array_key_exists("Issued",$param) and $param["Issued"] !== null) {
            $this->Issued = $param["Issued"];
        }
    }
}
