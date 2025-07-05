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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tse实例详情
 *
 * @method string getGatewayId() 获取网关ID
 * @method void setGatewayId(string $GatewayId) 设置网关ID
 * @method string getGatewayName() 获取网关名称
 * @method void setGatewayName(string $GatewayName) 设置网关名称
 * @method array getCertificateList() 获取网关证书列表
 * @method void setCertificateList(array $CertificateList) 设置网关证书列表
 */
class TSEInstanceDetail extends AbstractModel
{
    /**
     * @var string 网关ID
     */
    public $GatewayId;

    /**
     * @var string 网关名称
     */
    public $GatewayName;

    /**
     * @var array 网关证书列表
     */
    public $CertificateList;

    /**
     * @param string $GatewayId 网关ID
     * @param string $GatewayName 网关名称
     * @param array $CertificateList 网关证书列表
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GatewayName",$param) and $param["GatewayName"] !== null) {
            $this->GatewayName = $param["GatewayName"];
        }

        if (array_key_exists("CertificateList",$param) and $param["CertificateList"] !== null) {
            $this->CertificateList = [];
            foreach ($param["CertificateList"] as $key => $value){
                $obj = new GatewayCertificate();
                $obj->deserialize($value);
                array_push($this->CertificateList, $obj);
            }
        }
    }
}
