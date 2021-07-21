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
 * 转发监听器
 *
 * @method integer getFrontendPort() 获取转发监听端口下限，取值1~65535
 * @method void setFrontendPort(integer $FrontendPort) 设置转发监听端口下限，取值1~65535
 * @method string getForwardProtocol() 获取转发协议，取值[
TCP
UDP
]
 * @method void setForwardProtocol(string $ForwardProtocol) 设置转发协议，取值[
TCP
UDP
]
 * @method integer getFrontendPortEnd() 获取转发监听端口上限，取值1~65535
 * @method void setFrontendPortEnd(integer $FrontendPortEnd) 设置转发监听端口上限，取值1~65535
 */
class ForwardListener extends AbstractModel
{
    /**
     * @var integer 转发监听端口下限，取值1~65535
     */
    public $FrontendPort;

    /**
     * @var string 转发协议，取值[
TCP
UDP
]
     */
    public $ForwardProtocol;

    /**
     * @var integer 转发监听端口上限，取值1~65535
     */
    public $FrontendPortEnd;

    /**
     * @param integer $FrontendPort 转发监听端口下限，取值1~65535
     * @param string $ForwardProtocol 转发协议，取值[
TCP
UDP
]
     * @param integer $FrontendPortEnd 转发监听端口上限，取值1~65535
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
        if (array_key_exists("FrontendPort",$param) and $param["FrontendPort"] !== null) {
            $this->FrontendPort = $param["FrontendPort"];
        }

        if (array_key_exists("ForwardProtocol",$param) and $param["ForwardProtocol"] !== null) {
            $this->ForwardProtocol = $param["ForwardProtocol"];
        }

        if (array_key_exists("FrontendPortEnd",$param) and $param["FrontendPortEnd"] !== null) {
            $this->FrontendPortEnd = $param["FrontendPortEnd"];
        }
    }
}
