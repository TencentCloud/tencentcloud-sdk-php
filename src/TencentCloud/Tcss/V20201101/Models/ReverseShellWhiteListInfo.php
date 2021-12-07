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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 反弹shell白名单信息
 *
 * @method string getDstIp() 获取目标IP
 * @method void setDstIp(string $DstIp) 设置目标IP
 * @method string getDstPort() 获取目标端口
 * @method void setDstPort(string $DstPort) 设置目标端口
 * @method string getProcessName() 获取目标进程
 * @method void setProcessName(string $ProcessName) 设置目标进程
 * @method array getImageIds() 获取镜像id数组，为空代表全部
 * @method void setImageIds(array $ImageIds) 设置镜像id数组，为空代表全部
 * @method string getId() 获取白名单id，如果新建则id为空
 * @method void setId(string $Id) 设置白名单id，如果新建则id为空
 */
class ReverseShellWhiteListInfo extends AbstractModel
{
    /**
     * @var string 目标IP
     */
    public $DstIp;

    /**
     * @var string 目标端口
     */
    public $DstPort;

    /**
     * @var string 目标进程
     */
    public $ProcessName;

    /**
     * @var array 镜像id数组，为空代表全部
     */
    public $ImageIds;

    /**
     * @var string 白名单id，如果新建则id为空
     */
    public $Id;

    /**
     * @param string $DstIp 目标IP
     * @param string $DstPort 目标端口
     * @param string $ProcessName 目标进程
     * @param array $ImageIds 镜像id数组，为空代表全部
     * @param string $Id 白名单id，如果新建则id为空
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
        if (array_key_exists("DstIp",$param) and $param["DstIp"] !== null) {
            $this->DstIp = $param["DstIp"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = $param["ProcessName"];
        }

        if (array_key_exists("ImageIds",$param) and $param["ImageIds"] !== null) {
            $this->ImageIds = $param["ImageIds"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
