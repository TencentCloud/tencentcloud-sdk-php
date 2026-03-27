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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateVmInstance请求参数结构体
 *
 * @method string getEnvId() 获取环境ID
 * @method void setEnvId(string $EnvId) 设置环境ID
 * @method string getType() 获取服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
 * @method void setType(string $Type) 设置服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
 * @method string getLightHouseBundleId() 获取轻量云服务器套餐ID。 当Type=LightHouse时必传
 * @method void setLightHouseBundleId(string $LightHouseBundleId) 设置轻量云服务器套餐ID。 当Type=LightHouse时必传
 * @method string getLightHouseBlueprintId() 获取轻量云服务器镜像ID。当Type=LightHouse时必传
 * @method void setLightHouseBlueprintId(string $LightHouseBlueprintId) 设置轻量云服务器镜像ID。当Type=LightHouse时必传
 * @method string getInstanceName() 获取服务器别名
 * @method void setInstanceName(string $InstanceName) 设置服务器别名
 * @method VMLoginConfiguration getLoginConfiguration() 获取登录方式
 * @method void setLoginConfiguration(VMLoginConfiguration $LoginConfiguration) 设置登录方式
 */
class CreateVmInstanceRequest extends AbstractModel
{
    /**
     * @var string 环境ID
     */
    public $EnvId;

    /**
     * @var string 服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
     */
    public $Type;

    /**
     * @var string 轻量云服务器套餐ID。 当Type=LightHouse时必传
     */
    public $LightHouseBundleId;

    /**
     * @var string 轻量云服务器镜像ID。当Type=LightHouse时必传
     */
    public $LightHouseBlueprintId;

    /**
     * @var string 服务器别名
     */
    public $InstanceName;

    /**
     * @var VMLoginConfiguration 登录方式
     */
    public $LoginConfiguration;

    /**
     * @param string $EnvId 环境ID
     * @param string $Type 服务器类型：
LightHouse = 轻量云服务器
CVM = 云服务器
     * @param string $LightHouseBundleId 轻量云服务器套餐ID。 当Type=LightHouse时必传
     * @param string $LightHouseBlueprintId 轻量云服务器镜像ID。当Type=LightHouse时必传
     * @param string $InstanceName 服务器别名
     * @param VMLoginConfiguration $LoginConfiguration 登录方式
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LightHouseBundleId",$param) and $param["LightHouseBundleId"] !== null) {
            $this->LightHouseBundleId = $param["LightHouseBundleId"];
        }

        if (array_key_exists("LightHouseBlueprintId",$param) and $param["LightHouseBlueprintId"] !== null) {
            $this->LightHouseBlueprintId = $param["LightHouseBlueprintId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("LoginConfiguration",$param) and $param["LoginConfiguration"] !== null) {
            $this->LoginConfiguration = new VMLoginConfiguration();
            $this->LoginConfiguration->deserialize($param["LoginConfiguration"]);
        }
    }
}
