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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateOrganizationSeal请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getSealType() 获取印章类型：
OFFICIAL-公章
SPECIAL_FINANCIAL-财务专用章
CONTRACT-合同专用章
LEGAL_REPRESENTATIVE-法定代表人章
SPECIAL_NATIONWIDE_INVOICE-发票专用章
OTHER-其他
 * @method void setSealType(string $SealType) 设置印章类型：
OFFICIAL-公章
SPECIAL_FINANCIAL-财务专用章
CONTRACT-合同专用章
LEGAL_REPRESENTATIVE-法定代表人章
SPECIAL_NATIONWIDE_INVOICE-发票专用章
OTHER-其他
 * @method string getSourceIp() 获取请求生成企业印章的客户端Ip
 * @method void setSourceIp(string $SourceIp) 设置请求生成企业印章的客户端Ip
 * @method string getSealName() 获取电子印章名称
 * @method void setSealName(string $SealName) 设置电子印章名称
 * @method string getSealHorizontalText() 获取企业印章横向文字，最多可填8个汉字（可不填，默认为"电子签名专用章"）
 * @method void setSealHorizontalText(string $SealHorizontalText) 设置企业印章横向文字，最多可填8个汉字（可不填，默认为"电子签名专用章"）
 * @method boolean getIsDefault() 获取是否是默认印章 true：是，false：否
 * @method void setIsDefault(boolean $IsDefault) 设置是否是默认印章 true：是，false：否
 */
class GenerateOrganizationSealRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 印章类型：
OFFICIAL-公章
SPECIAL_FINANCIAL-财务专用章
CONTRACT-合同专用章
LEGAL_REPRESENTATIVE-法定代表人章
SPECIAL_NATIONWIDE_INVOICE-发票专用章
OTHER-其他
     */
    public $SealType;

    /**
     * @var string 请求生成企业印章的客户端Ip
     */
    public $SourceIp;

    /**
     * @var string 电子印章名称
     */
    public $SealName;

    /**
     * @var string 企业印章横向文字，最多可填8个汉字（可不填，默认为"电子签名专用章"）
     */
    public $SealHorizontalText;

    /**
     * @var boolean 是否是默认印章 true：是，false：否
     */
    public $IsDefault;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $SealType 印章类型：
OFFICIAL-公章
SPECIAL_FINANCIAL-财务专用章
CONTRACT-合同专用章
LEGAL_REPRESENTATIVE-法定代表人章
SPECIAL_NATIONWIDE_INVOICE-发票专用章
OTHER-其他
     * @param string $SourceIp 请求生成企业印章的客户端Ip
     * @param string $SealName 电子印章名称
     * @param string $SealHorizontalText 企业印章横向文字，最多可填8个汉字（可不填，默认为"电子签名专用章"）
     * @param boolean $IsDefault 是否是默认印章 true：是，false：否
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("SealType",$param) and $param["SealType"] !== null) {
            $this->SealType = $param["SealType"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("SealName",$param) and $param["SealName"] !== null) {
            $this->SealName = $param["SealName"];
        }

        if (array_key_exists("SealHorizontalText",$param) and $param["SealHorizontalText"] !== null) {
            $this->SealHorizontalText = $param["SealHorizontalText"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
