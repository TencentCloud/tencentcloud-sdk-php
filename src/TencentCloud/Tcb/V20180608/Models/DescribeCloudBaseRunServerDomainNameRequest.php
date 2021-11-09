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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudBaseRunServerDomainName请求参数结构体
 *
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getUserEnvId() 获取环境Id
 * @method void setUserEnvId(string $UserEnvId) 设置环境Id
 * @method string getUserUin() 获取用户Uin
 * @method void setUserUin(string $UserUin) 设置用户Uin
 * @method string getExternalId() 获取外部Id
 * @method void setExternalId(string $ExternalId) 设置外部Id
 */
class DescribeCloudBaseRunServerDomainNameRequest extends AbstractModel
{
    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 环境Id
     */
    public $UserEnvId;

    /**
     * @var string 用户Uin
     */
    public $UserUin;

    /**
     * @var string 外部Id
     */
    public $ExternalId;

    /**
     * @param string $ServerName 服务名
     * @param string $UserEnvId 环境Id
     * @param string $UserUin 用户Uin
     * @param string $ExternalId 外部Id
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
        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("UserEnvId",$param) and $param["UserEnvId"] !== null) {
            $this->UserEnvId = $param["UserEnvId"];
        }

        if (array_key_exists("UserUin",$param) and $param["UserUin"] !== null) {
            $this->UserUin = $param["UserUin"];
        }

        if (array_key_exists("ExternalId",$param) and $param["ExternalId"] !== null) {
            $this->ExternalId = $param["ExternalId"];
        }
    }
}
