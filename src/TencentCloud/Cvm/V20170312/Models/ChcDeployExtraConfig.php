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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * chc部署网络minos引导配置。
 *
 * @method string getMiniOsType() 获取minos类型。是使用腾讯云的minios，还是客户自己的minios。
 * @method void setMiniOsType(string $MiniOsType) 设置minos类型。是使用腾讯云的minios，还是客户自己的minios。
 * @method string getBootType() 获取服务器的架构和启动方式。取值为x86_legacy, arm_uefi。
 * @method void setBootType(string $BootType) 设置服务器的架构和启动方式。取值为x86_legacy, arm_uefi。
 * @method string getBootFile() 获取PXE使用的引导文件。默认为pxelinux.0。
 * @method void setBootFile(string $BootFile) 设置PXE使用的引导文件。默认为pxelinux.0。
 * @method string getNextServerAddress() 获取tftp服务器的ip地址。
 * @method void setNextServerAddress(string $NextServerAddress) 设置tftp服务器的ip地址。
 */
class ChcDeployExtraConfig extends AbstractModel
{
    /**
     * @var string minos类型。是使用腾讯云的minios，还是客户自己的minios。
     */
    public $MiniOsType;

    /**
     * @var string 服务器的架构和启动方式。取值为x86_legacy, arm_uefi。
     */
    public $BootType;

    /**
     * @var string PXE使用的引导文件。默认为pxelinux.0。
     */
    public $BootFile;

    /**
     * @var string tftp服务器的ip地址。
     */
    public $NextServerAddress;

    /**
     * @param string $MiniOsType minos类型。是使用腾讯云的minios，还是客户自己的minios。
     * @param string $BootType 服务器的架构和启动方式。取值为x86_legacy, arm_uefi。
     * @param string $BootFile PXE使用的引导文件。默认为pxelinux.0。
     * @param string $NextServerAddress tftp服务器的ip地址。
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
        if (array_key_exists("MiniOsType",$param) and $param["MiniOsType"] !== null) {
            $this->MiniOsType = $param["MiniOsType"];
        }

        if (array_key_exists("BootType",$param) and $param["BootType"] !== null) {
            $this->BootType = $param["BootType"];
        }

        if (array_key_exists("BootFile",$param) and $param["BootFile"] !== null) {
            $this->BootFile = $param["BootFile"];
        }

        if (array_key_exists("NextServerAddress",$param) and $param["NextServerAddress"] !== null) {
            $this->NextServerAddress = $param["NextServerAddress"];
        }
    }
}
