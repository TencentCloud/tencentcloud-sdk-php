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
 * ResetInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> API返回值中的<code>InstanceId</code>获取。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> API返回值中的<code>InstanceId</code>获取。</p>
 * @method string getImageId() 获取<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li><br>默认取值：默认使用当前镜像。</p>
 * @method void setImageId(string $ImageId) 设置<p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li><br>默认取值：默认使用当前镜像。</p>
 * @method SystemDisk getSystemDisk() 获取<p>实例系统盘配置信息。系统盘为云盘的实例可以通过该参数指定重装后的系统盘大小来实现对系统盘的扩容操作。系统盘大小只支持扩容不支持缩容；重装只支持修改系统盘的大小，不能修改系统盘的类型。</p>
 * @method void setSystemDisk(SystemDisk $SystemDisk) 设置<p>实例系统盘配置信息。系统盘为云盘的实例可以通过该参数指定重装后的系统盘大小来实现对系统盘的扩容操作。系统盘大小只支持扩容不支持缩容；重装只支持修改系统盘的大小，不能修改系统盘的类型。</p>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
 * @method EnhancedService getEnhancedService() 获取<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
 * @method void setEnhancedService(EnhancedService $EnhancedService) 设置<p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
 * @method string getHostName() 获取<p>重装系统时，可以指定修改实例的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></p>
 * @method void setHostName(string $HostName) 设置<p>重装系统时，可以指定修改实例的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></p>
 * @method string getUserData() 获取<p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
 * @method void setUserData(string $UserData) 设置<p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
 */
class ResetInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> API返回值中的<code>InstanceId</code>获取。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li><br>默认取值：默认使用当前镜像。</p>
     */
    public $ImageId;

    /**
     * @var SystemDisk <p>实例系统盘配置信息。系统盘为云盘的实例可以通过该参数指定重装后的系统盘大小来实现对系统盘的扩容操作。系统盘大小只支持扩容不支持缩容；重装只支持修改系统盘的大小，不能修改系统盘的类型。</p>
     */
    public $SystemDisk;

    /**
     * @var LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
     */
    public $LoginSettings;

    /**
     * @var EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
     */
    public $EnhancedService;

    /**
     * @var string <p>重装系统时，可以指定修改实例的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></p>
     */
    public $HostName;

    /**
     * @var string <p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
     */
    public $UserData;

    /**
     * @param string $InstanceId <p>实例ID。可通过 <a href="https://cloud.tencent.com/document/api/213/15728">DescribeInstances</a> API返回值中的<code>InstanceId</code>获取。</p>
     * @param string $ImageId <p>指定有效的<a href="https://cloud.tencent.com/document/product/213/4940">镜像</a>ID，格式形如<code>img-xxx</code>。镜像类型分为四种：<br><li>公共镜像</li><li>自定义镜像</li><li>共享镜像</li><li>服务市场镜像</li><br>可通过以下方式获取可用的镜像ID：<br><li><code>公共镜像</code>、<code>自定义镜像</code>、<code>共享镜像</code>的镜像ID可通过登录<a href="https://console.cloud.tencent.com/cvm/image?rid=1&amp;imageType=PUBLIC_IMAGE">控制台</a>查询；<code>服务镜像市场</code>的镜像ID可通过<a href="https://market.cloud.tencent.com/list">云市场</a>查询。</li><li>通过调用接口 <a href="https://cloud.tencent.com/document/api/213/15715">DescribeImages</a> ，取返回信息中的<code>ImageId</code>字段。</li><br>默认取值：默认使用当前镜像。</p>
     * @param SystemDisk $SystemDisk <p>实例系统盘配置信息。系统盘为云盘的实例可以通过该参数指定重装后的系统盘大小来实现对系统盘的扩容操作。系统盘大小只支持扩容不支持缩容；重装只支持修改系统盘的大小，不能修改系统盘的类型。</p>
     * @param LoginSettings $LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。默认情况下会随机生成密码，并以站内信方式知会到用户。</p>
     * @param EnhancedService $EnhancedService <p>增强服务。通过该参数可以指定是否开启云安全、云监控等服务。若不指定该参数，则默认公共镜像开启云监控、云安全服务；自定义镜像与镜像市场镜像默认不开启云监控，云安全服务，而使用镜像里保留的服务。</p>
     * @param string $HostName <p>重装系统时，可以指定修改实例的主机名。<br><li>点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</li><br><li>Windows 实例：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><br><li>其他类型（Linux 等）实例：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></p>
     * @param string $UserData <p>提供给实例使用的用户数据，需要以 base64 方式编码，支持的最大数据大小为 16KB。关于获取此参数的详细介绍，请参阅<a href="https://cloud.tencent.com/document/product/213/17526">Windows</a>和<a href="https://cloud.tencent.com/document/product/213/17525">Linux</a>启动时运行命令。</p>
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

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new SystemDisk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("EnhancedService",$param) and $param["EnhancedService"] !== null) {
            $this->EnhancedService = new EnhancedService();
            $this->EnhancedService->deserialize($param["EnhancedService"]);
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }
    }
}
