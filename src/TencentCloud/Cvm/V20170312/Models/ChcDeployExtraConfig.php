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
 * @method string getMiniOsType() 获取<p>MiniOS类型。是使用腾讯云的MiniOS，还是客户私有的MiniOS。</p><p>枚举值：</p><ul><li>public： 腾讯云的MiniOS。</li><li>private： 客户私有的MiniOS。</li></ul>
 * @method void setMiniOsType(string $MiniOsType) 设置<p>MiniOS类型。是使用腾讯云的MiniOS，还是客户私有的MiniOS。</p><p>枚举值：</p><ul><li>public： 腾讯云的MiniOS。</li><li>private： 客户私有的MiniOS。</li></ul>
 * @method string getBootType() 获取<p>服务器的架构和启动方式。</p><p>枚举值：</p><ul><li>x86_legacy： X86架构、Legacy启动模式。</li><li>x86_uefi： X86架构、UEFI启动模式。</li><li>arm_uefi： ARM架构，UEFI启动模式。</li></ul>
 * @method void setBootType(string $BootType) 设置<p>服务器的架构和启动方式。</p><p>枚举值：</p><ul><li>x86_legacy： X86架构、Legacy启动模式。</li><li>x86_uefi： X86架构、UEFI启动模式。</li><li>arm_uefi： ARM架构，UEFI启动模式。</li></ul>
 * @method string getBootFile() 获取<p>PXE使用的引导文件。默认为pxelinux.0。</p>
 * @method void setBootFile(string $BootFile) 设置<p>PXE使用的引导文件。默认为pxelinux.0。</p>
 * @method string getNextServerAddress() 获取<p>TFTP服务器的IP地址。</p>
 * @method void setNextServerAddress(string $NextServerAddress) 设置<p>TFTP服务器的IP地址。</p>
 */
class ChcDeployExtraConfig extends AbstractModel
{
    /**
     * @var string <p>MiniOS类型。是使用腾讯云的MiniOS，还是客户私有的MiniOS。</p><p>枚举值：</p><ul><li>public： 腾讯云的MiniOS。</li><li>private： 客户私有的MiniOS。</li></ul>
     */
    public $MiniOsType;

    /**
     * @var string <p>服务器的架构和启动方式。</p><p>枚举值：</p><ul><li>x86_legacy： X86架构、Legacy启动模式。</li><li>x86_uefi： X86架构、UEFI启动模式。</li><li>arm_uefi： ARM架构，UEFI启动模式。</li></ul>
     */
    public $BootType;

    /**
     * @var string <p>PXE使用的引导文件。默认为pxelinux.0。</p>
     */
    public $BootFile;

    /**
     * @var string <p>TFTP服务器的IP地址。</p>
     */
    public $NextServerAddress;

    /**
     * @param string $MiniOsType <p>MiniOS类型。是使用腾讯云的MiniOS，还是客户私有的MiniOS。</p><p>枚举值：</p><ul><li>public： 腾讯云的MiniOS。</li><li>private： 客户私有的MiniOS。</li></ul>
     * @param string $BootType <p>服务器的架构和启动方式。</p><p>枚举值：</p><ul><li>x86_legacy： X86架构、Legacy启动模式。</li><li>x86_uefi： X86架构、UEFI启动模式。</li><li>arm_uefi： ARM架构，UEFI启动模式。</li></ul>
     * @param string $BootFile <p>PXE使用的引导文件。默认为pxelinux.0。</p>
     * @param string $NextServerAddress <p>TFTP服务器的IP地址。</p>
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
