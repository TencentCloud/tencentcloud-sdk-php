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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLLMContentSecCheck请求参数结构体
 *
 * @method string getServiceId() 获取 服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
 * @method void setServiceId(string $ServiceId) 设置 服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
 * @method string getContent() 获取要审核的内容
 * @method void setContent(string $Content) 设置要审核的内容
 * @method integer getType() 获取流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填
 * @method void setType(integer $Type) 设置流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填
 * @method string getInstanceId() 获取实例id，必传
 * @method void setInstanceId(string $InstanceId) 设置实例id，必传
 * @method string getChatId() 获取对话的id
 * @method void setChatId(string $ChatId) 设置对话的id
 * @method string getUserId() 获取标识用户的id，限速使用，不填，则限速会不生效
 * @method void setUserId(string $UserId) 设置标识用户的id，限速使用，不填，则限速会不生效
 * @method integer getTokenUsage() 获取token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2
 * @method void setTokenUsage(integer $TokenUsage) 设置token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2
 */
class DescribeLLMContentSecCheckRequest extends AbstractModel
{
    /**
     * @var string  服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
     */
    public $ServiceId;

    /**
     * @var string 要审核的内容
     */
    public $Content;

    /**
     * @var integer 流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填
     */
    public $Type;

    /**
     * @var string 实例id，必传
     */
    public $InstanceId;

    /**
     * @var string 对话的id
     */
    public $ChatId;

    /**
     * @var string 标识用户的id，限速使用，不填，则限速会不生效
     */
    public $UserId;

    /**
     * @var integer token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2
     */
    public $TokenUsage;

    /**
     * @param string $ServiceId  服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则
     * @param string $Content 要审核的内容
     * @param integer $Type 流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填
     * @param string $InstanceId 实例id，必传
     * @param string $ChatId 对话的id
     * @param string $UserId 标识用户的id，限速使用，不填，则限速会不生效
     * @param integer $TokenUsage token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("TokenUsage",$param) and $param["TokenUsage"] !== null) {
            $this->TokenUsage = $param["TokenUsage"];
        }
    }
}
