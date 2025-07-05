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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityPolicy请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getEntity() 获取安全策略类型，可使用以下参数值进行查询： <li>ZoneDefaultPolicy：用于指定查询站点级策略；</li><li>Template：用于指定查询策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定查询域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>	
 * @method void setEntity(string $Entity) 设置安全策略类型，可使用以下参数值进行查询： <li>ZoneDefaultPolicy：用于指定查询站点级策略；</li><li>Template：用于指定查询策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定查询域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>	
 * @method string getTemplateId() 获取指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID 查询模板配置。
 * @method void setTemplateId(string $TemplateId) 设置指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID 查询模板配置。
 * @method string getHost() 获取指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略查询域名配置，例如：使用 www.example.com ，配置该域名的域名级策略。
 * @method void setHost(string $Host) 设置指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略查询域名配置，例如：使用 www.example.com ，配置该域名的域名级策略。
 */
class DescribeSecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 安全策略类型，可使用以下参数值进行查询： <li>ZoneDefaultPolicy：用于指定查询站点级策略；</li><li>Template：用于指定查询策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定查询域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>	
     */
    public $Entity;

    /**
     * @var string 指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID 查询模板配置。
     */
    public $TemplateId;

    /**
     * @var string 指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略查询域名配置，例如：使用 www.example.com ，配置该域名的域名级策略。
     */
    public $Host;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $Entity 安全策略类型，可使用以下参数值进行查询： <li>ZoneDefaultPolicy：用于指定查询站点级策略；</li><li>Template：用于指定查询策略模板，需要同时指定 TemplateId 参数；</li><li>Host：用于指定查询域名级策略（注意：当使用域名来指定域名服务策略时，仅支持已经应用了域名级策略的域名服务或者策略模板）。</li>	
     * @param string $TemplateId 指定策略模板 ID。当 Entity 参数值为 Template 时，使用本参数指定策略模板的 ID 查询模板配置。
     * @param string $Host 指定域名。当 Entity 参数值为 Host 时，使用本参数指定的域名级策略查询域名配置，例如：使用 www.example.com ，配置该域名的域名级策略。
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
