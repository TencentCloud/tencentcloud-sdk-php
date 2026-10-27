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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名控制策略详情
 *
 * @method string getDomain() 获取配置域名
 * @method void setDomain(string $Domain) 设置配置域名
 * @method string getAddress() 获取此参数必填，新版本无异议，请求包和回包强制填写空字符串,做校验
 * @method void setAddress(string $Address) 设置此参数必填，新版本无异议，请求包和回包强制填写空字符串,做校验
 * @method string getDescription() 获取规则描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置规则描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class DomainControlDetail extends AbstractModel
{
    /**
     * @var string 配置域名
     */
    public $Domain;

    /**
     * @var string 此参数必填，新版本无异议，请求包和回包强制填写空字符串,做校验
     */
    public $Address;

    /**
     * @var string 规则描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @param string $Domain 配置域名
     * @param string $Address 此参数必填，新版本无异议，请求包和回包强制填写空字符串,做校验
     * @param string $Description 规则描述
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
