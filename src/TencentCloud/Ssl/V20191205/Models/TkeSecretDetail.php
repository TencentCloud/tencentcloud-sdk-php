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
 * tke secret详情
 *
 * @method string getName() 获取secret名称
 * @method void setName(string $Name) 设置secret名称
 * @method string getCertId() 获取证书ID
 * @method void setCertId(string $CertId) 设置证书ID
 * @method array getIngressList() 获取ingress列表
 * @method void setIngressList(array $IngressList) 设置ingress列表
 * @method array getNoMatchDomains() 获取和新证书不匹配的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoMatchDomains(array $NoMatchDomains) 设置和新证书不匹配的域名列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class TkeSecretDetail extends AbstractModel
{
    /**
     * @var string secret名称
     */
    public $Name;

    /**
     * @var string 证书ID
     */
    public $CertId;

    /**
     * @var array ingress列表
     */
    public $IngressList;

    /**
     * @var array 和新证书不匹配的域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoMatchDomains;

    /**
     * @param string $Name secret名称
     * @param string $CertId 证书ID
     * @param array $IngressList ingress列表
     * @param array $NoMatchDomains 和新证书不匹配的域名列表
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }

        if (array_key_exists("IngressList",$param) and $param["IngressList"] !== null) {
            $this->IngressList = [];
            foreach ($param["IngressList"] as $key => $value){
                $obj = new TkeIngressDetail();
                $obj->deserialize($value);
                array_push($this->IngressList, $obj);
            }
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }
    }
}
