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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 流量镜像五元组过滤规则对象
 *
 * @method string getSrcNet() 获取过滤规则的源网段
 * @method void setSrcNet(string $SrcNet) 设置过滤规则的源网段
 * @method string getDstNet() 获取过滤规则的目的网段
 * @method void setDstNet(string $DstNet) 设置过滤规则的目的网段
 * @method string getProtocol() 获取过滤规则的协议
 * @method void setProtocol(string $Protocol) 设置过滤规则的协议
 * @method string getSrcPort() 获取过滤规则的源端口，默认值1-65535
 * @method void setSrcPort(string $SrcPort) 设置过滤规则的源端口，默认值1-65535
 * @method string getDstPort() 获取过滤规则的目的端口，默认值1-65535
 * @method void setDstPort(string $DstPort) 设置过滤规则的目的端口，默认值1-65535
 */
class TrafficMirrorFilter extends AbstractModel
{
    /**
     * @var string 过滤规则的源网段
     */
    public $SrcNet;

    /**
     * @var string 过滤规则的目的网段
     */
    public $DstNet;

    /**
     * @var string 过滤规则的协议
     */
    public $Protocol;

    /**
     * @var string 过滤规则的源端口，默认值1-65535
     */
    public $SrcPort;

    /**
     * @var string 过滤规则的目的端口，默认值1-65535
     */
    public $DstPort;

    /**
     * @param string $SrcNet 过滤规则的源网段
     * @param string $DstNet 过滤规则的目的网段
     * @param string $Protocol 过滤规则的协议
     * @param string $SrcPort 过滤规则的源端口，默认值1-65535
     * @param string $DstPort 过滤规则的目的端口，默认值1-65535
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
        if (array_key_exists("SrcNet",$param) and $param["SrcNet"] !== null) {
            $this->SrcNet = $param["SrcNet"];
        }

        if (array_key_exists("DstNet",$param) and $param["DstNet"] !== null) {
            $this->DstNet = $param["DstNet"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("SrcPort",$param) and $param["SrcPort"] !== null) {
            $this->SrcPort = $param["SrcPort"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }
    }
}
