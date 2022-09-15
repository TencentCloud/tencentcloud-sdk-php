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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifySecurityPolicy请求参数结构体
 *
 * @method string getZoneId() 获取一级域名
 * @method void setZoneId(string $ZoneId) 设置一级域名
 * @method string getEntity() 获取二级域名/应用名
 * @method void setEntity(string $Entity) 设置二级域名/应用名
 * @method SecurityConfig getConfig() 获取安全配置
 * @method void setConfig(SecurityConfig $Config) 设置安全配置
 */
class ModifySecurityPolicyRequest extends AbstractModel
{
    /**
     * @var string 一级域名
     */
    public $ZoneId;

    /**
     * @var string 二级域名/应用名
     */
    public $Entity;

    /**
     * @var SecurityConfig 安全配置
     */
    public $Config;

    /**
     * @param string $ZoneId 一级域名
     * @param string $Entity 二级域名/应用名
     * @param SecurityConfig $Config 安全配置
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

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new SecurityConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
