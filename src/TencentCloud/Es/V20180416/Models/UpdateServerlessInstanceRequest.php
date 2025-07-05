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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateServerlessInstance请求参数结构体
 *
 * @method string getInstanceId() 获取Serveless实例ID
 * @method void setInstanceId(string $InstanceId) 设置Serveless实例ID
 * @method string getUpdateMetaJson() 获取更新的索引元数据JSON，如mappings、settings
 * @method void setUpdateMetaJson(string $UpdateMetaJson) 设置更新的索引元数据JSON，如mappings、settings
 * @method string getPassword() 获取实例访问密码
 * @method void setPassword(string $Password) 设置实例访问密码
 * @method string getKibanaPrivateAccess() 获取开启kibana内网访问，如OPEN、CLOSE
 * @method void setKibanaPrivateAccess(string $KibanaPrivateAccess) 设置开启kibana内网访问，如OPEN、CLOSE
 * @method string getKibanaPublicAccess() 获取开启kibana外网访问，如OPEN、CLOSE
 * @method void setKibanaPublicAccess(string $KibanaPublicAccess) 设置开启kibana外网访问，如OPEN、CLOSE
 * @method KibanaPublicAcl getKibanaPublicAcl() 获取访问控制列表
 * @method void setKibanaPublicAcl(KibanaPublicAcl $KibanaPublicAcl) 设置访问控制列表
 */
class UpdateServerlessInstanceRequest extends AbstractModel
{
    /**
     * @var string Serveless实例ID
     */
    public $InstanceId;

    /**
     * @var string 更新的索引元数据JSON，如mappings、settings
     */
    public $UpdateMetaJson;

    /**
     * @var string 实例访问密码
     */
    public $Password;

    /**
     * @var string 开启kibana内网访问，如OPEN、CLOSE
     */
    public $KibanaPrivateAccess;

    /**
     * @var string 开启kibana外网访问，如OPEN、CLOSE
     */
    public $KibanaPublicAccess;

    /**
     * @var KibanaPublicAcl 访问控制列表
     */
    public $KibanaPublicAcl;

    /**
     * @param string $InstanceId Serveless实例ID
     * @param string $UpdateMetaJson 更新的索引元数据JSON，如mappings、settings
     * @param string $Password 实例访问密码
     * @param string $KibanaPrivateAccess 开启kibana内网访问，如OPEN、CLOSE
     * @param string $KibanaPublicAccess 开启kibana外网访问，如OPEN、CLOSE
     * @param KibanaPublicAcl $KibanaPublicAcl 访问控制列表
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

        if (array_key_exists("UpdateMetaJson",$param) and $param["UpdateMetaJson"] !== null) {
            $this->UpdateMetaJson = $param["UpdateMetaJson"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("KibanaPrivateAccess",$param) and $param["KibanaPrivateAccess"] !== null) {
            $this->KibanaPrivateAccess = $param["KibanaPrivateAccess"];
        }

        if (array_key_exists("KibanaPublicAccess",$param) and $param["KibanaPublicAccess"] !== null) {
            $this->KibanaPublicAccess = $param["KibanaPublicAccess"];
        }

        if (array_key_exists("KibanaPublicAcl",$param) and $param["KibanaPublicAcl"] !== null) {
            $this->KibanaPublicAcl = new KibanaPublicAcl();
            $this->KibanaPublicAcl->deserialize($param["KibanaPublicAcl"]);
        }
    }
}
