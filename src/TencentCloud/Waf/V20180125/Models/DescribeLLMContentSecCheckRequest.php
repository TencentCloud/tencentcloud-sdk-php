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
 * @method string getServiceId() 获取<p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
 * @method void setServiceId(string $ServiceId) 设置<p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
 * @method integer getType() 获取<p>流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填</p>
 * @method void setType(integer $Type) 设置<p>流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填</p>
 * @method string getInstanceId() 获取<p>实例id，必传</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id，必传</p>
 * @method string getContent() 获取<p>要审核的内容</p>
 * @method void setContent(string $Content) 设置<p>要审核的内容</p>
 * @method string getChatId() 获取<p>对话的id</p>
 * @method void setChatId(string $ChatId) 设置<p>对话的id</p>
 * @method string getUserId() 获取<p>标识用户的id，限速使用，不填，则限速会不生效</p>
 * @method void setUserId(string $UserId) 设置<p>标识用户的id，限速使用，不填，则限速会不生效</p>
 * @method integer getTokenUsage() 获取<p>token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2</p>
 * @method void setTokenUsage(integer $TokenUsage) 设置<p>token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2</p>
 * @method string getImageEncode() 获取<p>图片base64编码后的数据,body大小最大支持10M</p>
 * @method void setImageEncode(string $ImageEncode) 设置<p>图片base64编码后的数据,body大小最大支持10M</p>
 */
class DescribeLLMContentSecCheckRequest extends AbstractModel
{
    /**
     * @var string <p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
     */
    public $ServiceId;

    /**
     * @var integer <p>流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填</p>
     */
    public $Type;

    /**
     * @var string <p>实例id，必传</p>
     */
    public $InstanceId;

    /**
     * @var string <p>要审核的内容</p>
     */
    public $Content;

    /**
     * @var string <p>对话的id</p>
     */
    public $ChatId;

    /**
     * @var string <p>标识用户的id，限速使用，不填，则限速会不生效</p>
     */
    public $UserId;

    /**
     * @var integer <p>token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2</p>
     */
    public $TokenUsage;

    /**
     * @var string <p>图片base64编码后的数据,body大小最大支持10M</p>
     */
    public $ImageEncode;

    /**
     * @param string $ServiceId <p>服务id,使用哪一套防护策略，就需要传哪一套服务id，模型会检测该服务id下的所有规则</p>
     * @param integer $Type <p>流量类型，是入向流量还是出向流量，入向：1，出向：2；入向和出向必填</p>
     * @param string $InstanceId <p>实例id，必传</p>
     * @param string $Content <p>要审核的内容</p>
     * @param string $ChatId <p>对话的id</p>
     * @param string $UserId <p>标识用户的id，限速使用，不填，则限速会不生效</p>
     * @param integer $TokenUsage <p>token使用量，不填，会采用默认的token计算方法，计算的是模型的消耗，因为该值时在出向方向上添加，即Type=2</p>
     * @param string $ImageEncode <p>图片base64编码后的数据,body大小最大支持10M</p>
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
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

        if (array_key_exists("ImageEncode",$param) and $param["ImageEncode"] !== null) {
            $this->ImageEncode = $param["ImageEncode"];
        }
    }
}
