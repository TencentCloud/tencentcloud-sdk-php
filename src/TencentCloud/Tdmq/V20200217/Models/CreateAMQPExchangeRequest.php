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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAMQPExchange请求参数结构体
 *
 * @method string getExchange() 获取交换机名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method void setExchange(string $Exchange) 设置交换机名称，3-64个字符，只能包含字母、数字、“-”及“_”
 * @method array getVHosts() 获取交换机所在的vhost，目前支持在单个vhost下创建主题
 * @method void setVHosts(array $VHosts) 设置交换机所在的vhost，目前支持在单个vhost下创建主题
 * @method string getType() 获取交换机类型，可选值为Direct, Fanout, Topic, x-delayed-message
 * @method void setType(string $Type) 设置交换机类型，可选值为Direct, Fanout, Topic, x-delayed-message
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getRemark() 获取交换机说明，最大128个字符
 * @method void setRemark(string $Remark) 设置交换机说明，最大128个字符
 * @method string getAlternateExchange() 获取备用交换机名称
 * @method void setAlternateExchange(string $AlternateExchange) 设置备用交换机名称
 * @method string getDelayedType() 获取延迟交换机类型，可选值为Direct, Fanout, Topic, 不允许为x-delayed-message
 * @method void setDelayedType(string $DelayedType) 设置延迟交换机类型，可选值为Direct, Fanout, Topic, 不允许为x-delayed-message
 */
class CreateAMQPExchangeRequest extends AbstractModel
{
    /**
     * @var string 交换机名称，3-64个字符，只能包含字母、数字、“-”及“_”
     */
    public $Exchange;

    /**
     * @var array 交换机所在的vhost，目前支持在单个vhost下创建主题
     */
    public $VHosts;

    /**
     * @var string 交换机类型，可选值为Direct, Fanout, Topic, x-delayed-message
     */
    public $Type;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 交换机说明，最大128个字符
     */
    public $Remark;

    /**
     * @var string 备用交换机名称
     */
    public $AlternateExchange;

    /**
     * @var string 延迟交换机类型，可选值为Direct, Fanout, Topic, 不允许为x-delayed-message
     */
    public $DelayedType;

    /**
     * @param string $Exchange 交换机名称，3-64个字符，只能包含字母、数字、“-”及“_”
     * @param array $VHosts 交换机所在的vhost，目前支持在单个vhost下创建主题
     * @param string $Type 交换机类型，可选值为Direct, Fanout, Topic, x-delayed-message
     * @param string $ClusterId 集群ID
     * @param string $Remark 交换机说明，最大128个字符
     * @param string $AlternateExchange 备用交换机名称
     * @param string $DelayedType 延迟交换机类型，可选值为Direct, Fanout, Topic, 不允许为x-delayed-message
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
        if (array_key_exists("Exchange",$param) and $param["Exchange"] !== null) {
            $this->Exchange = $param["Exchange"];
        }

        if (array_key_exists("VHosts",$param) and $param["VHosts"] !== null) {
            $this->VHosts = $param["VHosts"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("AlternateExchange",$param) and $param["AlternateExchange"] !== null) {
            $this->AlternateExchange = $param["AlternateExchange"];
        }

        if (array_key_exists("DelayedType",$param) and $param["DelayedType"] !== null) {
            $this->DelayedType = $param["DelayedType"];
        }
    }
}
