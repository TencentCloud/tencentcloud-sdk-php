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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GenerateRegisterCommand返回参数结构体
 *
 * @method string getRegisterCommand() 获取<p>渲染好的节点注册命令，可直接在IDC机器上以root身份执行。</p>
 * @method void setRegisterCommand(string $RegisterCommand) 设置<p>渲染好的节点注册命令，可直接在IDC机器上以root身份执行。</p>
 * @method string getRegisterCode() 获取<p>节点注册码。作为不透明凭证使用，请妥善保管，仅在节点注册纳管时传入。</p>
 * @method void setRegisterCode(string $RegisterCode) 设置<p>节点注册码。作为不透明凭证使用，请妥善保管，仅在节点注册纳管时传入。</p>
 * @method integer getExpireAt() 获取<p>注册码到期的Unix时间戳，单位：秒。</p>
 * @method void setExpireAt(integer $ExpireAt) 设置<p>注册码到期的Unix时间戳，单位：秒。</p>
 * @method boolean getProxy() 获取<p>回显本次是否走内网专线代理。</p>
 * @method void setProxy(boolean $Proxy) 设置<p>回显本次是否走内网专线代理。</p>
 * @method string getEndPointVip() 获取<p>代理终端节点VIP地址。当<code>Proxy=true</code>且终端节点就绪时非空。</p>
 * @method void setEndPointVip(string $EndPointVip) 设置<p>代理终端节点VIP地址。当<code>Proxy=true</code>且终端节点就绪时非空。</p>
 * @method string getEndPointStatus() 获取<p>终端节点状态。取值范围：</p><li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><p></p>
 * @method void setEndPointStatus(string $EndPointStatus) 设置<p>终端节点状态。取值范围：</p><li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><p></p>
 * @method string getClusterId() 获取<p>回显集群ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>回显集群ID。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GenerateRegisterCommandResponse extends AbstractModel
{
    /**
     * @var string <p>渲染好的节点注册命令，可直接在IDC机器上以root身份执行。</p>
     */
    public $RegisterCommand;

    /**
     * @var string <p>节点注册码。作为不透明凭证使用，请妥善保管，仅在节点注册纳管时传入。</p>
     */
    public $RegisterCode;

    /**
     * @var integer <p>注册码到期的Unix时间戳，单位：秒。</p>
     */
    public $ExpireAt;

    /**
     * @var boolean <p>回显本次是否走内网专线代理。</p>
     */
    public $Proxy;

    /**
     * @var string <p>代理终端节点VIP地址。当<code>Proxy=true</code>且终端节点就绪时非空。</p>
     */
    public $EndPointVip;

    /**
     * @var string <p>终端节点状态。取值范围：</p><li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><p></p>
     */
    public $EndPointStatus;

    /**
     * @var string <p>回显集群ID。</p>
     */
    public $ClusterId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $RegisterCommand <p>渲染好的节点注册命令，可直接在IDC机器上以root身份执行。</p>
     * @param string $RegisterCode <p>节点注册码。作为不透明凭证使用，请妥善保管，仅在节点注册纳管时传入。</p>
     * @param integer $ExpireAt <p>注册码到期的Unix时间戳，单位：秒。</p>
     * @param boolean $Proxy <p>回显本次是否走内网专线代理。</p>
     * @param string $EndPointVip <p>代理终端节点VIP地址。当<code>Proxy=true</code>且终端节点就绪时非空。</p>
     * @param string $EndPointStatus <p>终端节点状态。取值范围：</p><li>ACTIVE：已激活</li><li>BINDCHANGE：变更中</li><li>BINDINGCREATE：创建中</li><li>BINDINGDELETE：删除中</li><p></p>
     * @param string $ClusterId <p>回显集群ID。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("RegisterCommand",$param) and $param["RegisterCommand"] !== null) {
            $this->RegisterCommand = $param["RegisterCommand"];
        }

        if (array_key_exists("RegisterCode",$param) and $param["RegisterCode"] !== null) {
            $this->RegisterCode = $param["RegisterCode"];
        }

        if (array_key_exists("ExpireAt",$param) and $param["ExpireAt"] !== null) {
            $this->ExpireAt = $param["ExpireAt"];
        }

        if (array_key_exists("Proxy",$param) and $param["Proxy"] !== null) {
            $this->Proxy = $param["Proxy"];
        }

        if (array_key_exists("EndPointVip",$param) and $param["EndPointVip"] !== null) {
            $this->EndPointVip = $param["EndPointVip"];
        }

        if (array_key_exists("EndPointStatus",$param) and $param["EndPointStatus"] !== null) {
            $this->EndPointStatus = $param["EndPointStatus"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
