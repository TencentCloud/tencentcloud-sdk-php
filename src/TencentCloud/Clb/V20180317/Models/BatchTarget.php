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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量绑定类型
 *
 * @method string getListenerId() 获取<p>监听器 ID。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器 ID。</p>
 * @method integer getPort() 获取<p>绑定端口。</p>
 * @method void setPort(integer $Port) 设置<p>绑定端口。</p>
 * @method string getInstanceId() 获取<p>子机 ID。表示绑定主网卡主 IP。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>子机 ID。表示绑定主网卡主 IP。</p>
 * @method string getEniIp() 获取<p>绑定 IP 时需要传入此参数，支持弹性网卡的 IP 和其他内网 IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。注意：参数 InstanceId、EniIp 只能传入一个且必须传入一个。如果绑定双栈IPV6子机，必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。</p>
 * @method void setEniIp(string $EniIp) 设置<p>绑定 IP 时需要传入此参数，支持弹性网卡的 IP 和其他内网 IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。注意：参数 InstanceId、EniIp 只能传入一个且必须传入一个。如果绑定双栈IPV6子机，必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。</p>
 * @method integer getWeight() 获取<p>子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。</p>
 * @method void setWeight(integer $Weight) 设置<p>子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。</p>
 * @method string getLocationId() 获取<p>七层规则 ID。7层负载均衡该参数必填</p>
 * @method void setLocationId(string $LocationId) 设置<p>七层规则 ID。7层负载均衡该参数必填</p>
 * @method string getTag() 获取<p>标签。</p>
 * @method void setTag(string $Tag) 设置<p>标签。</p>
 */
class BatchTarget extends AbstractModel
{
    /**
     * @var string <p>监听器 ID。</p>
     */
    public $ListenerId;

    /**
     * @var integer <p>绑定端口。</p>
     */
    public $Port;

    /**
     * @var string <p>子机 ID。表示绑定主网卡主 IP。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>绑定 IP 时需要传入此参数，支持弹性网卡的 IP 和其他内网 IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。注意：参数 InstanceId、EniIp 只能传入一个且必须传入一个。如果绑定双栈IPV6子机，必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。</p>
     */
    public $EniIp;

    /**
     * @var integer <p>子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。</p>
     */
    public $Weight;

    /**
     * @var string <p>七层规则 ID。7层负载均衡该参数必填</p>
     */
    public $LocationId;

    /**
     * @var string <p>标签。</p>
     */
    public $Tag;

    /**
     * @param string $ListenerId <p>监听器 ID。</p>
     * @param integer $Port <p>绑定端口。</p>
     * @param string $InstanceId <p>子机 ID。表示绑定主网卡主 IP。</p>
     * @param string $EniIp <p>绑定 IP 时需要传入此参数，支持弹性网卡的 IP 和其他内网 IP，如果是弹性网卡则必须先绑定至CVM，然后才能绑定到负载均衡实例。注意：参数 InstanceId、EniIp 只能传入一个且必须传入一个。如果绑定双栈IPV6子机，必须传该参数。如果是跨地域绑定，则必须传该参数，不支持传InstanceId参数。</p>
     * @param integer $Weight <p>子机权重，范围[0, 100]。绑定时如果不存在，则默认为10。</p>
     * @param string $LocationId <p>七层规则 ID。7层负载均衡该参数必填</p>
     * @param string $Tag <p>标签。</p>
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
        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("EniIp",$param) and $param["EniIp"] !== null) {
            $this->EniIp = $param["EniIp"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
