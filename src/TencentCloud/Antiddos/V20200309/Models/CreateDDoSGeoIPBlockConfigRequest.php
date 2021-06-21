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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDDoSGeoIPBlockConfig请求参数结构体
 *
 * @method string getInstanceId() 获取资源实例ID
 * @method void setInstanceId(string $InstanceId) 设置资源实例ID
 * @method DDoSGeoIPBlockConfig getDDoSGeoIPBlockConfig() 获取DDoS区域封禁配置，填写参数时配置ID请为空
 * @method void setDDoSGeoIPBlockConfig(DDoSGeoIPBlockConfig $DDoSGeoIPBlockConfig) 设置DDoS区域封禁配置，填写参数时配置ID请为空
 */
class CreateDDoSGeoIPBlockConfigRequest extends AbstractModel
{
    /**
     * @var string 资源实例ID
     */
    public $InstanceId;

    /**
     * @var DDoSGeoIPBlockConfig DDoS区域封禁配置，填写参数时配置ID请为空
     */
    public $DDoSGeoIPBlockConfig;

    /**
     * @param string $InstanceId 资源实例ID
     * @param DDoSGeoIPBlockConfig $DDoSGeoIPBlockConfig DDoS区域封禁配置，填写参数时配置ID请为空
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("DDoSGeoIPBlockConfig",$param) and $param["DDoSGeoIPBlockConfig"] !== null) {
            $this->DDoSGeoIPBlockConfig = new DDoSGeoIPBlockConfig();
            $this->DDoSGeoIPBlockConfig->deserialize($param["DDoSGeoIPBlockConfig"]);
        }
    }
}
