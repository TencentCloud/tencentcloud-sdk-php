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
 * ModifyCCThresholdPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议，可取值HTTP，HTTPS
 * @method void setProtocol(string $Protocol) 设置协议，可取值HTTP，HTTPS
 * @method integer getThreshold() 获取清洗阈值，-1表示开启“默认”模式
 * @method void setThreshold(integer $Threshold) 设置清洗阈值，-1表示开启“默认”模式
 */
class ModifyCCThresholdPolicyRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议，可取值HTTP，HTTPS
     */
    public $Protocol;

    /**
     * @var integer 清洗阈值，-1表示开启“默认”模式
     */
    public $Threshold;

    /**
     * @param string $InstanceId 实例Id
     * @param string $Ip IP地址
     * @param string $Domain 域名
     * @param string $Protocol 协议，可取值HTTP，HTTPS
     * @param integer $Threshold 清洗阈值，-1表示开启“默认”模式
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }
    }
}
