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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExposePath请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method string getAssetId() 获取资产ID
 * @method void setAssetId(string $AssetId) 设置资产ID
 * @method string getIp() 获取资产IP
 * @method void setIp(string $Ip) 设置资产IP
 * @method string getDomain() 获取资产域名
 * @method void setDomain(string $Domain) 设置资产域名
 * @method string getPort() 获取端口或端口范围
 * @method void setPort(string $Port) 设置端口或端口范围
 */
class DescribeExposePathRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var string 资产ID
     */
    public $AssetId;

    /**
     * @var string 资产IP
     */
    public $Ip;

    /**
     * @var string 资产域名
     */
    public $Domain;

    /**
     * @var string 端口或端口范围
     */
    public $Port;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param string $AssetId 资产ID
     * @param string $Ip 资产IP
     * @param string $Domain 资产域名
     * @param string $Port 端口或端口范围
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
