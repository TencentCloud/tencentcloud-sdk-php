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
 * DeployConfigGroupVersion请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getEnvId() 获取环境 ID。请填写版本需要发布到的环境 ID。
 * @method void setEnvId(string $EnvId) 设置环境 ID。请填写版本需要发布到的环境 ID。
 * @method array getConfigGroupVersionInfos() 获取需要发布的版本信息。可以同时变更多个不同配置组的版本，每个配置组一次仅支持变更一个版本。
 * @method void setConfigGroupVersionInfos(array $ConfigGroupVersionInfos) 设置需要发布的版本信息。可以同时变更多个不同配置组的版本，每个配置组一次仅支持变更一个版本。
 * @method string getDescription() 获取变更说明。用于描述此次变更的内容、原因，最大支持 100 个字符。
 * @method void setDescription(string $Description) 设置变更说明。用于描述此次变更的内容、原因，最大支持 100 个字符。
 */
class DeployConfigGroupVersionRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 环境 ID。请填写版本需要发布到的环境 ID。
     */
    public $EnvId;

    /**
     * @var array 需要发布的版本信息。可以同时变更多个不同配置组的版本，每个配置组一次仅支持变更一个版本。
     */
    public $ConfigGroupVersionInfos;

    /**
     * @var string 变更说明。用于描述此次变更的内容、原因，最大支持 100 个字符。
     */
    public $Description;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $EnvId 环境 ID。请填写版本需要发布到的环境 ID。
     * @param array $ConfigGroupVersionInfos 需要发布的版本信息。可以同时变更多个不同配置组的版本，每个配置组一次仅支持变更一个版本。
     * @param string $Description 变更说明。用于描述此次变更的内容、原因，最大支持 100 个字符。
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

        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ConfigGroupVersionInfos",$param) and $param["ConfigGroupVersionInfos"] !== null) {
            $this->ConfigGroupVersionInfos = [];
            foreach ($param["ConfigGroupVersionInfos"] as $key => $value){
                $obj = new ConfigGroupVersionInfo();
                $obj->deserialize($value);
                array_push($this->ConfigGroupVersionInfos, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
