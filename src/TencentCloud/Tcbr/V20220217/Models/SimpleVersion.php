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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除版本时需要的简化信息
 *
 * @method string getEnvId() 获取要删除版本的环境 Id
 * @method void setEnvId(string $EnvId) 设置要删除版本的环境 Id
 * @method string getServerName() 获取要删除版本的服务名
 * @method void setServerName(string $ServerName) 设置要删除版本的服务名
 * @method string getVersionName() 获取要删除版本的版本名
 * @method void setVersionName(string $VersionName) 设置要删除版本的版本名
 */
class SimpleVersion extends AbstractModel
{
    /**
     * @var string 要删除版本的环境 Id
     */
    public $EnvId;

    /**
     * @var string 要删除版本的服务名
     */
    public $ServerName;

    /**
     * @var string 要删除版本的版本名
     */
    public $VersionName;

    /**
     * @param string $EnvId 要删除版本的环境 Id
     * @param string $ServerName 要删除版本的服务名
     * @param string $VersionName 要删除版本的版本名
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

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }
    }
}
