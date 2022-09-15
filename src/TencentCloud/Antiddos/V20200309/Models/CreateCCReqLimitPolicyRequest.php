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
 * CreateCCReqLimitPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getIp() 获取IP值
 * @method void setIp(string $Ip) 设置IP值
 * @method string getProtocol() 获取协议，可取值HTTP，HTTPS
 * @method void setProtocol(string $Protocol) 设置协议，可取值HTTP，HTTPS
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method CCReqLimitPolicyRecord getPolicy() 获取策略项
 * @method void setPolicy(CCReqLimitPolicyRecord $Policy) 设置策略项
 * @method integer getIsGlobal() 获取是否为兜底频控
 * @method void setIsGlobal(integer $IsGlobal) 设置是否为兜底频控
 */
class CreateCCReqLimitPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string IP值
     */
    public $Ip;

    /**
     * @var string 协议，可取值HTTP，HTTPS
     */
    public $Protocol;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var CCReqLimitPolicyRecord 策略项
     */
    public $Policy;

    /**
     * @var integer 是否为兜底频控
     */
    public $IsGlobal;

    /**
     * @param string $InstanceId 实例Id
     * @param string $Ip IP值
     * @param string $Protocol 协议，可取值HTTP，HTTPS
     * @param string $Domain 域名
     * @param CCReqLimitPolicyRecord $Policy 策略项
     * @param integer $IsGlobal 是否为兜底频控
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = new CCReqLimitPolicyRecord();
            $this->Policy->deserialize($param["Policy"]);
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }
    }
}
