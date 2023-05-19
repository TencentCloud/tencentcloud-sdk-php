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
 * CLB监听器规则
 *
 * @method string getLocationId() 获取规则ID
 * @method void setLocationId(string $LocationId) 设置规则ID
 * @method string getDomain() 获取规则绑定的域名
 * @method void setDomain(string $Domain) 设置规则绑定的域名
 * @method boolean getIsMatch() 获取规则是否匹配待绑定证书的域名
 * @method void setIsMatch(boolean $IsMatch) 设置规则是否匹配待绑定证书的域名
 * @method Certificate getCertificate() 获取规则已绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(Certificate $Certificate) 设置规则已绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoMatchDomains() 获取不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoMatchDomains(array $NoMatchDomains) 设置不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClbListenerRule extends AbstractModel
{
    /**
     * @var string 规则ID
     */
    public $LocationId;

    /**
     * @var string 规则绑定的域名
     */
    public $Domain;

    /**
     * @var boolean 规则是否匹配待绑定证书的域名
     */
    public $IsMatch;

    /**
     * @var Certificate 规则已绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var array 不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoMatchDomains;

    /**
     * @param string $LocationId 规则ID
     * @param string $Domain 规则绑定的域名
     * @param boolean $IsMatch 规则是否匹配待绑定证书的域名
     * @param Certificate $Certificate 规则已绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoMatchDomains 不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("IsMatch",$param) and $param["IsMatch"] !== null) {
            $this->IsMatch = $param["IsMatch"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new Certificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }
    }
}
