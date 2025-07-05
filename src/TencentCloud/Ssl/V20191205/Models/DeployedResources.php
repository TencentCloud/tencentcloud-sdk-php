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
 * 资源详情
 *
 * @method string getCertificateId() 获取证书ID
 * @method void setCertificateId(string $CertificateId) 设置证书ID
 * @method integer getCount() 获取数量
 * @method void setCount(integer $Count) 设置数量
 * @method string getType() 获取资源标识:clb,cdn,live,waf,antiddos
 * @method void setType(string $Type) 设置资源标识:clb,cdn,live,waf,antiddos
 * @method array getResourceIds() 获取不建议使用。字段返回和Resources相同。本字段后续只返回null
 * @method void setResourceIds(array $ResourceIds) 设置不建议使用。字段返回和Resources相同。本字段后续只返回null
 * @method array getResources() 获取关联资源ID或关联域名。
 * @method void setResources(array $Resources) 设置关联资源ID或关联域名。
 */
class DeployedResources extends AbstractModel
{
    /**
     * @var string 证书ID
     */
    public $CertificateId;

    /**
     * @var integer 数量
     */
    public $Count;

    /**
     * @var string 资源标识:clb,cdn,live,waf,antiddos
     */
    public $Type;

    /**
     * @var array 不建议使用。字段返回和Resources相同。本字段后续只返回null
     */
    public $ResourceIds;

    /**
     * @var array 关联资源ID或关联域名。
     */
    public $Resources;

    /**
     * @param string $CertificateId 证书ID
     * @param integer $Count 数量
     * @param string $Type 资源标识:clb,cdn,live,waf,antiddos
     * @param array $ResourceIds 不建议使用。字段返回和Resources相同。本字段后续只返回null
     * @param array $Resources 关联资源ID或关联域名。
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
        if (array_key_exists("CertificateId",$param) and $param["CertificateId"] !== null) {
            $this->CertificateId = $param["CertificateId"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = $param["Resources"];
        }
    }
}
