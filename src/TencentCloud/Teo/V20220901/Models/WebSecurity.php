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
 * 序列化的安全结构
 *
 * @method SecurityPolicy getZoneDefaultPolicy() 获取站点级策略的配置详情。
 * @method void setZoneDefaultPolicy(SecurityPolicy $ZoneDefaultPolicy) 设置站点级策略的配置详情。
 * @method HostPolicy getHostPolicy() 获取域名级策略的配置详情。
 * @method void setHostPolicy(HostPolicy $HostPolicy) 设置域名级策略的配置详情。
 * @method WebSecurityTemplates getTemplates() 获取策略模板的配置详情。
 * @method void setTemplates(WebSecurityTemplates $Templates) 设置策略模板的配置详情。
 */
class WebSecurity extends AbstractModel
{
    /**
     * @var SecurityPolicy 站点级策略的配置详情。
     */
    public $ZoneDefaultPolicy;

    /**
     * @var HostPolicy 域名级策略的配置详情。
     */
    public $HostPolicy;

    /**
     * @var WebSecurityTemplates 策略模板的配置详情。
     */
    public $Templates;

    /**
     * @param SecurityPolicy $ZoneDefaultPolicy 站点级策略的配置详情。
     * @param HostPolicy $HostPolicy 域名级策略的配置详情。
     * @param WebSecurityTemplates $Templates 策略模板的配置详情。
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
        if (array_key_exists("ZoneDefaultPolicy",$param) and $param["ZoneDefaultPolicy"] !== null) {
            $this->ZoneDefaultPolicy = new SecurityPolicy();
            $this->ZoneDefaultPolicy->deserialize($param["ZoneDefaultPolicy"]);
        }

        if (array_key_exists("HostPolicy",$param) and $param["HostPolicy"] !== null) {
            $this->HostPolicy = new HostPolicy();
            $this->HostPolicy->deserialize($param["HostPolicy"]);
        }

        if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
            $this->Templates = new WebSecurityTemplates();
            $this->Templates->deserialize($param["Templates"]);
        }
    }
}
