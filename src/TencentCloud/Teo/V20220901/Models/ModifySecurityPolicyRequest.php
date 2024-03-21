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
 * ModifySecurityPolicy请求参数结构体
 *
 * @method string getZoneId() 获取站点Id。
 * @method void setZoneId(string $ZoneId) 设置站点Id。
 * @method SecurityConfig getSecurityConfig() 获取安全配置。
 * @method void setSecurityConfig(SecurityConfig $SecurityConfig) 设置安全配置。
 * @method string getEntity() 获取子域名/应用名。

注意：当同时指定本参数和 TemplateId 参数时，本参数不生效。请勿同时指定本参数和 TemplateId 参数。
 * @method void setEntity(string $Entity) 设置子域名/应用名。

注意：当同时指定本参数和 TemplateId 参数时，本参数不生效。请勿同时指定本参数和 TemplateId 参数。
 * @method string getTemplateId() 获取指定模板策略 ID，或指定站点全局策略。
- 如需配置策略模板，请指定策略模板 ID。
- 如需配置站点全局策略，请使用 @ZoneLevel@Domain 参数值

注意：当使用本参数时，Entity 参数不生效。请勿同时使用本参数和 Entity 参数。
 * @method void setTemplateId(string $TemplateId) 设置指定模板策略 ID，或指定站点全局策略。
- 如需配置策略模板，请指定策略模板 ID。
- 如需配置站点全局策略，请使用 @ZoneLevel@Domain 参数值

注意：当使用本参数时，Entity 参数不生效。请勿同时使用本参数和 Entity 参数。
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string 站点Id。
     */
    public $ZoneId;

    /**
     * @var SecurityConfig 安全配置。
     */
    public $SecurityConfig;

    /**
     * @var string 子域名/应用名。

注意：当同时指定本参数和 TemplateId 参数时，本参数不生效。请勿同时指定本参数和 TemplateId 参数。
     */
    public $Entity;

    /**
     * @var string 指定模板策略 ID，或指定站点全局策略。
- 如需配置策略模板，请指定策略模板 ID。
- 如需配置站点全局策略，请使用 @ZoneLevel@Domain 参数值

注意：当使用本参数时，Entity 参数不生效。请勿同时使用本参数和 Entity 参数。
     */
    public $TemplateId;

    /**
     * @param string $ZoneId 站点Id。
     * @param SecurityConfig $SecurityConfig 安全配置。
     * @param string $Entity 子域名/应用名。

注意：当同时指定本参数和 TemplateId 参数时，本参数不生效。请勿同时指定本参数和 TemplateId 参数。
     * @param string $TemplateId 指定模板策略 ID，或指定站点全局策略。
- 如需配置策略模板，请指定策略模板 ID。
- 如需配置站点全局策略，请使用 @ZoneLevel@Domain 参数值

注意：当使用本参数时，Entity 参数不生效。请勿同时使用本参数和 Entity 参数。
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

        if (array_key_exists("SecurityConfig",$param) and $param["SecurityConfig"] !== null) {
            $this->SecurityConfig = new SecurityConfig();
            $this->SecurityConfig->deserialize($param["SecurityConfig"]);
        }

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
