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
 * CreateAliasDomain请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getAliasName() 获取别称域名名称。
 * @method void setAliasName(string $AliasName) 设置别称域名名称。
 * @method string getTargetName() 获取目标域名名称。
 * @method void setTargetName(string $TargetName) 设置目标域名名称。
 * @method string getCertType() 获取证书配置，取值有：
<li> none：不配置；</li>
<li> hosting：SSL托管证书。</li>默认取值为 none。
 * @method void setCertType(string $CertType) 设置证书配置，取值有：
<li> none：不配置；</li>
<li> hosting：SSL托管证书。</li>默认取值为 none。
 * @method array getCertId() 获取当 CertType 取值为 hosting 时需填入相应证书 ID。
 * @method void setCertId(array $CertId) 设置当 CertType 取值为 hosting 时需填入相应证书 ID。
 */
class CreateAliasDomainRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 别称域名名称。
     */
    public $AliasName;

    /**
     * @var string 目标域名名称。
     */
    public $TargetName;

    /**
     * @var string 证书配置，取值有：
<li> none：不配置；</li>
<li> hosting：SSL托管证书。</li>默认取值为 none。
     */
    public $CertType;

    /**
     * @var array 当 CertType 取值为 hosting 时需填入相应证书 ID。
     */
    public $CertId;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $AliasName 别称域名名称。
     * @param string $TargetName 目标域名名称。
     * @param string $CertType 证书配置，取值有：
<li> none：不配置；</li>
<li> hosting：SSL托管证书。</li>默认取值为 none。
     * @param array $CertId 当 CertType 取值为 hosting 时需填入相应证书 ID。
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

        if (array_key_exists("AliasName",$param) and $param["AliasName"] !== null) {
            $this->AliasName = $param["AliasName"];
        }

        if (array_key_exists("TargetName",$param) and $param["TargetName"] !== null) {
            $this->TargetName = $param["TargetName"];
        }

        if (array_key_exists("CertType",$param) and $param["CertType"] !== null) {
            $this->CertType = $param["CertType"];
        }

        if (array_key_exists("CertId",$param) and $param["CertId"] !== null) {
            $this->CertId = $param["CertId"];
        }
    }
}
