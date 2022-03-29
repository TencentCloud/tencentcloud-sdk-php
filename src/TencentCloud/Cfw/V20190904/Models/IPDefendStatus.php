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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ip防护状态
 *
 * @method string getIP() 获取ip地址
 * @method void setIP(string $IP) 设置ip地址
 * @method integer getStatus() 获取防护状态   1:防护打开; -1:地址错误; 其他:未防护
 * @method void setStatus(integer $Status) 设置防护状态   1:防护打开; -1:地址错误; 其他:未防护
 */
class IPDefendStatus extends AbstractModel
{
    /**
     * @var string ip地址
     */
    public $IP;

    /**
     * @var integer 防护状态   1:防护打开; -1:地址错误; 其他:未防护
     */
    public $Status;

    /**
     * @param string $IP ip地址
     * @param integer $Status 防护状态   1:防护打开; -1:地址错误; 其他:未防护
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
        if (array_key_exists("IP",$param) and $param["IP"] !== null) {
            $this->IP = $param["IP"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
