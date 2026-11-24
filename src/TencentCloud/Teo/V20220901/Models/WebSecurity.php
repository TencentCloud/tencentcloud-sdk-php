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
 * @method SecurityPolicy getZoneDefaultPolicy() 获取<p>站点级策略的配置详情。</p>
 * @method void setZoneDefaultPolicy(SecurityPolicy $ZoneDefaultPolicy) 设置<p>站点级策略的配置详情。</p>
 * @method array getHostPolicy() 获取<p>域名级策略的配置详情。</p>
 * @method void setHostPolicy(array $HostPolicy) 设置<p>域名级策略的配置详情。</p>
 * @method array getTemplates() 获取<p>策略模板的配置详情。</p>
 * @method void setTemplates(array $Templates) 设置<p>策略模板的配置详情。</p>
 */
class WebSecurity extends AbstractModel
{
    /**
     * @var SecurityPolicy <p>站点级策略的配置详情。</p>
     */
    public $ZoneDefaultPolicy;

    /**
     * @var array <p>域名级策略的配置详情。</p>
     */
    public $HostPolicy;

    /**
     * @var array <p>策略模板的配置详情。</p>
     */
    public $Templates;

    /**
     * @param SecurityPolicy $ZoneDefaultPolicy <p>站点级策略的配置详情。</p>
     * @param array $HostPolicy <p>域名级策略的配置详情。</p>
     * @param array $Templates <p>策略模板的配置详情。</p>
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
            $this->HostPolicy = [];
            foreach ($param["HostPolicy"] as $key => $value){
                $obj = new HostPolicy();
                $obj->deserialize($value);
                array_push($this->HostPolicy, $obj);
            }
        }

        if (array_key_exists("Templates",$param) and $param["Templates"] !== null) {
            $this->Templates = [];
            foreach ($param["Templates"] as $key => $value){
                $obj = new WebSecurityTemplates();
                $obj->deserialize($value);
                array_push($this->Templates, $obj);
            }
        }
    }
}
