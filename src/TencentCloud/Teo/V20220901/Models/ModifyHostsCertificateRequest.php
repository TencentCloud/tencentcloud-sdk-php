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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHostsCertificate请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method array getHosts() 获取本次变更的域名列表。
 * @method void setHosts(array $Hosts) 设置本次变更的域名列表。
 * @method array getServerCertInfo() 获取证书信息, 只需要传入 CertId 即可, 如果为空, 则使用默认证书。
 * @method void setServerCertInfo(array $ServerCertInfo) 设置证书信息, 只需要传入 CertId 即可, 如果为空, 则使用默认证书。
 * @method string getApplyType() 获取托管类型，取值有：
<li>apply：托管EO；</li>
<li>none：不托管EO；</li>不填，默认取值为apply。
 * @method void setApplyType(string $ApplyType) 设置托管类型，取值有：
<li>apply：托管EO；</li>
<li>none：不托管EO；</li>不填，默认取值为apply。
 */
class ModifyHostsCertificateRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var array 本次变更的域名列表。
     */
    public $Hosts;

    /**
     * @var array 证书信息, 只需要传入 CertId 即可, 如果为空, 则使用默认证书。
     */
    public $ServerCertInfo;

    /**
     * @var string 托管类型，取值有：
<li>apply：托管EO；</li>
<li>none：不托管EO；</li>不填，默认取值为apply。
     */
    public $ApplyType;

    /**
     * @param string $ZoneId 站点 ID。
     * @param array $Hosts 本次变更的域名列表。
     * @param array $ServerCertInfo 证书信息, 只需要传入 CertId 即可, 如果为空, 则使用默认证书。
     * @param string $ApplyType 托管类型，取值有：
<li>apply：托管EO；</li>
<li>none：不托管EO；</li>不填，默认取值为apply。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Hosts",$param) and $param["Hosts"] !== null) {
            $this->Hosts = $param["Hosts"];
        }

        if (array_key_exists("ServerCertInfo",$param) and $param["ServerCertInfo"] !== null) {
            $this->ServerCertInfo = [];
            foreach ($param["ServerCertInfo"] as $key => $value){
                $obj = new ServerCertInfo();
                $obj->deserialize($value);
                array_push($this->ServerCertInfo, $obj);
            }
        }

        if (array_key_exists("ApplyType",$param) and $param["ApplyType"] !== null) {
            $this->ApplyType = $param["ApplyType"];
        }
    }
}
