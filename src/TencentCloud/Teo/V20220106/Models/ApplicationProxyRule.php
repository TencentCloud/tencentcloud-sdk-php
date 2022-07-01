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
 * @method string getProto() 获取协议，取值为TCP或者UDP
 * @method void setProto(string $Proto) 设置协议，取值为TCP或者UDP
 * @method array getPort() 获取端口，支持格式：
80：80端口
81-90：81至90端口
 * @method void setPort(array $Port) 设置端口，支持格式：
80：80端口
81-90：81至90端口
 * @method string getOriginType() 获取源站类型，取值：
custom：手动添加
origins：源站组
 * @method void setOriginType(string $OriginType) 设置源站类型，取值：
custom：手动添加
origins：源站组
 * @method array getOriginValue() 获取源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

当OriginType=origins时，包含一个元素，表示源站组ID，如：
OriginValue=["origin-xxx"]
 * @method void setOriginValue(array $OriginValue) 设置源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

当OriginType=origins时，包含一个元素，表示源站组ID，如：
OriginValue=["origin-xxx"]
 * @method string getRuleId() 获取规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置规则ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
 * @method void setStatus(string $Status) 设置状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
 * @method string getForwardClientIp() 获取传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
 * @method void setForwardClientIp(string $ForwardClientIp) 设置传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
 * @method boolean getSessionPersist() 获取是否开启会话保持
 * @method void setSessionPersist(boolean $SessionPersist) 设置是否开启会话保持
 */
class ApplicationProxyRule extends AbstractModel
{
    /**
     * @var string 协议，取值为TCP或者UDP
     */
    public $Proto;

    /**
     * @var array 端口，支持格式：
80：80端口
81-90：81至90端口
     */
    public $Port;

    /**
     * @var string 源站类型，取值：
custom：手动添加
origins：源站组
     */
    public $OriginType;

    /**
     * @var array 源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

当OriginType=origins时，包含一个元素，表示源站组ID，如：
OriginValue=["origin-xxx"]
     */
    public $OriginValue;

    /**
     * @var string 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
     */
    public $Status;

    /**
     * @var string 传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
     */
    public $ForwardClientIp;

    /**
     * @var boolean 是否开启会话保持
     */
    public $SessionPersist;

    /**
     * @param string $Proto 协议，取值为TCP或者UDP
     * @param array $Port 端口，支持格式：
80：80端口
81-90：81至90端口
     * @param string $OriginType 源站类型，取值：
custom：手动添加
origins：源站组
     * @param array $OriginValue 源站信息：
当OriginType=custom时，表示一个或多个源站，如：
OriginValue=["8.8.8.8:80","9.9.9.9:80"]
OriginValue=["test.com:80"]

当OriginType=origins时，包含一个元素，表示源站组ID，如：
OriginValue=["origin-xxx"]
     * @param string $RuleId 规则ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态：
online：启用
offline：停用
progress：部署中
stopping：停用中
fail：部署失败/停用失败
     * @param string $ForwardClientIp 传递客户端IP，当Proto=TCP时，取值：
TOA：TOA
PPV1: Proxy Protocol传递，协议版本V1
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
当Proto=UDP时，取值：
PPV2: Proxy Protocol传递，协议版本V2
OFF：不传递
     * @param boolean $SessionPersist 是否开启会话保持
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
