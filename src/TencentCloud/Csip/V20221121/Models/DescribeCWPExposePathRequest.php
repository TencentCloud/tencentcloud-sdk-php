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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCWPExposePath请求参数结构体
 *
 * @method string getAssetID() 获取<p>主机资产ID</p>
 * @method void setAssetID(string $AssetID) 设置<p>主机资产ID</p>
 * @method integer getAssetAppID() 获取<p>资产归属用户AppID</p>
 * @method void setAssetAppID(integer $AssetAppID) 设置<p>资产归属用户AppID</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getIp() 获取<p>资产IP</p>
 * @method void setIp(string $Ip) 设置<p>资产IP</p>
 * @method string getDomain() 获取<p>资产域名</p>
 * @method void setDomain(string $Domain) 设置<p>资产域名</p>
 * @method string getPort() 获取<p>端口或端口范围</p>
 * @method void setPort(string $Port) 设置<p>端口或端口范围</p>
 */
class DescribeCWPExposePathRequest extends AbstractModel
{
    /**
     * @var string <p>主机资产ID</p>
     */
    public $AssetID;

    /**
     * @var integer <p>资产归属用户AppID</p>
     */
    public $AssetAppID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>资产IP</p>
     */
    public $Ip;

    /**
     * @var string <p>资产域名</p>
     */
    public $Domain;

    /**
     * @var string <p>端口或端口范围</p>
     */
    public $Port;

    /**
     * @param string $AssetID <p>主机资产ID</p>
     * @param integer $AssetAppID <p>资产归属用户AppID</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $Ip <p>资产IP</p>
     * @param string $Domain <p>资产域名</p>
     * @param string $Port <p>端口或端口范围</p>
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
        if (array_key_exists("AssetID",$param) and $param["AssetID"] !== null) {
            $this->AssetID = $param["AssetID"];
        }

        if (array_key_exists("AssetAppID",$param) and $param["AssetAppID"] !== null) {
            $this->AssetAppID = $param["AssetAppID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
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
