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
 * DescribeReleaseOrder请求参数结构体
 *
 * @method string getEnvId() 获取环境 Id
 * @method void setEnvId(string $EnvId) 设置环境 Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getStatus() 获取发布单状态
 * @method void setStatus(string $Status) 设置发布单状态
 */
class DescribeReleaseOrderRequest extends AbstractModel
{
    /**
     * @var string 环境 Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 发布单状态
     */
    public $Status;

    /**
     * @param string $EnvId 环境 Id
     * @param string $ServerName 服务名
     * @param string $Status 发布单状态
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
