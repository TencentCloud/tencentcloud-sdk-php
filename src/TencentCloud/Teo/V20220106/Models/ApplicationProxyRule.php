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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用代理规则
 *
 * @method string getProto() 获取协议，取值有：
<li>TCP：TCP协议；</li>
<li>UDP：UDP协议。</li>
 * @method void setProto(string $Proto) 设置协议，取值有：
<li>TCP：TCP协议；</li>
<li>UDP：UDP协议。</li>
 * @method array getPort() 获取端口，支持格式：
单个端口，如：80。
端口段，如：81-82。表示81，82两个端口。
注意：一条规则最多可填写20个端口。
 * @method void setPort(array $Port) 设置端口，支持格式：
单个端口，如：80。
端口段，如：81-82。表示81，82两个端口。
注意：一条规则最多可填写20个端口。
 * @method string getOriginType() 获取源站类型，取值有：
<li>custom：手动添加；</li>
<li>origins：源站组。</li>
 * @method void setOriginType(string $OriginType) 设置源站类型，取值有：
<li>custom：手动添加；</li>
<li>origins：源站组。</li>
 * @method array getOriginValue() 获取源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]；
当OriginType=origins时，要求有且仅有一个元素，表示源站组ID，如：
OriginValue=["origin-537f5b41-162a-11ed-abaa-525400c5da15"]。
 * @method void setOriginValue(array $OriginValue) 设置源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]；
当OriginType=origins时，要求有且仅有一个元素，表示源站组ID，如：
OriginValue=["origin-537f5b41-162a-11ed-abaa-525400c5da15"]。
 * @method string getRuleId() 获取规则ID。
 * @method void setRuleId(string $RuleId) 设置规则ID。
 * @method string getStatus() 获取状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
 * @method void setStatus(string $Status) 设置状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
 * @method string getForwardClientIp() 获取传递客户端IP，取值有：
<li>TOA：TOA（仅Proto=TCP时可选）；</li>
<li>PPV1：Proxy Protocol传递，协议版本V1（仅Proto=TCP时可选）；</li>
<li>PPV2：Proxy Protocol传递，协议版本V2；</li>
<li>OFF：不传递。</li>
 * @method void setForwardClientIp(string $ForwardClientIp) 设置传递客户端IP，取值有：
<li>TOA：TOA（仅Proto=TCP时可选）；</li>
<li>PPV1：Proxy Protocol传递，协议版本V1（仅Proto=TCP时可选）；</li>
<li>PPV2：Proxy Protocol传递，协议版本V2；</li>
<li>OFF：不传递。</li>
 * @method boolean getSessionPersist() 获取是否开启会话保持，取值有：
<li>true：开启；</li>
<li>false：关闭。</li>
 * @method void setSessionPersist(boolean $SessionPersist) 设置是否开启会话保持，取值有：
<li>true：开启；</li>
<li>false：关闭。</li>
 */
class ApplicationProxyRule extends AbstractModel
{
    /**
     * @var string 协议，取值有：
<li>TCP：TCP协议；</li>
<li>UDP：UDP协议。</li>
     */
    public $Proto;

    /**
     * @var array 端口，支持格式：
单个端口，如：80。
端口段，如：81-82。表示81，82两个端口。
注意：一条规则最多可填写20个端口。
     */
    public $Port;

    /**
     * @var string 源站类型，取值有：
<li>custom：手动添加；</li>
<li>origins：源站组。</li>
     */
    public $OriginType;

    /**
     * @var array 源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]；
当OriginType=origins时，要求有且仅有一个元素，表示源站组ID，如：
OriginValue=["origin-537f5b41-162a-11ed-abaa-525400c5da15"]。
     */
    public $OriginValue;

    /**
     * @var string 规则ID。
     */
    public $RuleId;

    /**
     * @var string 状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
     */
    public $Status;

    /**
     * @var string 传递客户端IP，取值有：
<li>TOA：TOA（仅Proto=TCP时可选）；</li>
<li>PPV1：Proxy Protocol传递，协议版本V1（仅Proto=TCP时可选）；</li>
<li>PPV2：Proxy Protocol传递，协议版本V2；</li>
<li>OFF：不传递。</li>
     */
    public $ForwardClientIp;

    /**
     * @var boolean 是否开启会话保持，取值有：
<li>true：开启；</li>
<li>false：关闭。</li>
     */
    public $SessionPersist;

    /**
     * @param string $Proto 协议，取值有：
<li>TCP：TCP协议；</li>
<li>UDP：UDP协议。</li>
     * @param array $Port 端口，支持格式：
单个端口，如：80。
端口段，如：81-82。表示81，82两个端口。
注意：一条规则最多可填写20个端口。
     * @param string $OriginType 源站类型，取值有：
<li>custom：手动添加；</li>
<li>origins：源站组。</li>
     * @param array $OriginValue 源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]；
当OriginType=origins时，要求有且仅有一个元素，表示源站组ID，如：
OriginValue=["origin-537f5b41-162a-11ed-abaa-525400c5da15"]。
     * @param string $RuleId 规则ID。
     * @param string $Status 状态，取值有：
<li>online：启用；</li>
<li>offline：停用；</li>
<li>progress：部署中；</li>
<li>stopping：停用中；</li>
<li>fail：部署失败/停用失败。</li>
     * @param string $ForwardClientIp 传递客户端IP，取值有：
<li>TOA：TOA（仅Proto=TCP时可选）；</li>
<li>PPV1：Proxy Protocol传递，协议版本V1（仅Proto=TCP时可选）；</li>
<li>PPV2：Proxy Protocol传递，协议版本V2；</li>
<li>OFF：不传递。</li>
     * @param boolean $SessionPersist 是否开启会话保持，取值有：
<li>true：开启；</li>
<li>false：关闭。</li>
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
        if (array_key_exists("Proto",$param) and $param["Proto"] !== null) {
            $this->Proto = $param["Proto"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("OriginValue",$param) and $param["OriginValue"] !== null) {
            $this->OriginValue = $param["OriginValue"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ForwardClientIp",$param) and $param["ForwardClientIp"] !== null) {
            $this->ForwardClientIp = $param["ForwardClientIp"];
        }

        if (array_key_exists("SessionPersist",$param) and $param["SessionPersist"] !== null) {
            $this->SessionPersist = $param["SessionPersist"];
        }
    }
}
