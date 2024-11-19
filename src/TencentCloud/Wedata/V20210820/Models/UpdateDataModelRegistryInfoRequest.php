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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateDataModelRegistryInfo请求参数结构体
 *
 * @method string getCloudappId() 获取云应用的实例id
 * @method void setCloudappId(string $CloudappId) 设置云应用的实例id
 * @method string getAppCamRole() 获取数语的CAM角色
 * @method void setAppCamRole(string $AppCamRole) 设置数语的CAM角色
 * @method string getIp() 获取数语的ip
 * @method void setIp(string $Ip) 设置数语的ip
 * @method integer getPort() 获取数语的端口
 * @method void setPort(integer $Port) 设置数语的端口
 * @method string getAppCamRoleId() 获取数语的CAM角色id
 * @method void setAppCamRoleId(string $AppCamRoleId) 设置数语的CAM角色id
 * @method string getProvider() 获取服务提供方
 * @method void setProvider(string $Provider) 设置服务提供方
 * @method string getTenantId() 获取租户id
 * @method void setTenantId(string $TenantId) 设置租户id
 * @method string getOwnId() 获取主账号id
 * @method void setOwnId(string $OwnId) 设置主账号id
 */
class UpdateDataModelRegistryInfoRequest extends AbstractModel
{
    /**
     * @var string 云应用的实例id
     */
    public $CloudappId;

    /**
     * @var string 数语的CAM角色
     */
    public $AppCamRole;

    /**
     * @var string 数语的ip
     */
    public $Ip;

    /**
     * @var integer 数语的端口
     */
    public $Port;

    /**
     * @var string 数语的CAM角色id
     */
    public $AppCamRoleId;

    /**
     * @var string 服务提供方
     */
    public $Provider;

    /**
     * @var string 租户id
     */
    public $TenantId;

    /**
     * @var string 主账号id
     */
    public $OwnId;

    /**
     * @param string $CloudappId 云应用的实例id
     * @param string $AppCamRole 数语的CAM角色
     * @param string $Ip 数语的ip
     * @param integer $Port 数语的端口
     * @param string $AppCamRoleId 数语的CAM角色id
     * @param string $Provider 服务提供方
     * @param string $TenantId 租户id
     * @param string $OwnId 主账号id
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
        if (array_key_exists("CloudappId",$param) and $param["CloudappId"] !== null) {
            $this->CloudappId = $param["CloudappId"];
        }

        if (array_key_exists("AppCamRole",$param) and $param["AppCamRole"] !== null) {
            $this->AppCamRole = $param["AppCamRole"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("AppCamRoleId",$param) and $param["AppCamRoleId"] !== null) {
            $this->AppCamRoleId = $param["AppCamRoleId"];
        }

        if (array_key_exists("Provider",$param) and $param["Provider"] !== null) {
            $this->Provider = $param["Provider"];
        }

        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("OwnId",$param) and $param["OwnId"] !== null) {
            $this->OwnId = $param["OwnId"];
        }
    }
}
