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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetDBCustomNode请求参数结构体
 *
 * @method string getNodeId() 获取<p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
 * @method void setNodeId(string $NodeId) 设置<p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
 * @method string getImageId() 获取<p>重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
 * @method void setImageId(string $ImageId) 设置<p>重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
 * @method string getHostName() 获取<p>重装系统时，可以指定修改节点的主机名。</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</p><ul><li>Windows ：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>Linux：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></ul><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
 * @method void setHostName(string $HostName) 设置<p>重装系统时，可以指定修改节点的主机名。</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</p><ul><li>Windows ：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>Linux：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></ul><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
 */
class ResetDBCustomNodeRequest extends AbstractModel
{
    /**
     * @var string <p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
     */
    public $NodeId;

    /**
     * @var LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
     */
    public $LoginSettings;

    /**
     * @var string <p>重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
     */
    public $ImageId;

    /**
     * @var string <p>重装系统时，可以指定修改节点的主机名。</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</p><ul><li>Windows ：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>Linux：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></ul><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
     */
    public $HostName;

    /**
     * @param string $NodeId <p>节点ID</p><p>参数格式：dbcn-hq98qjym</p>
     * @param LoginSettings $LoginSettings <p>实例登录设置。通过该参数可以设置实例的登录方式密码、密钥或保持镜像的原始登录设置。</p><p>入参限制：若选择密钥方式，KeyIds 仅支持单个 ID。三种方式必须且仅可以设置其中一种。</p>
     * @param string $ImageId <p>重设的操作系统镜像ID</p><p>取值参考：可通过&quot;DescribeDBCustomImages&quot;接口获取支持的镜像。</p>
     * @param string $HostName <p>重装系统时，可以指定修改节点的主机名。</p><p>入参限制：- 点号（.）和短横线（-）不能作为 HostName 的首尾字符，不能连续使用。</p><ul><li>Windows ：主机名字符长度为[2, 15]，允许字母（不限制大小写）、数字和短横线（-）组成，不支持点号（.），不能全是数字。</li><li>Linux：主机名字符长度为[2, 60]，允许支持多个点号，点之间为一段，每段允许字母（不限制大小写）、数字和短横线（-）组成。</li></ul><p>注意：节点在没有加入到集群之前才支持修改主机 HostName。</p>
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
        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }
    }
}
