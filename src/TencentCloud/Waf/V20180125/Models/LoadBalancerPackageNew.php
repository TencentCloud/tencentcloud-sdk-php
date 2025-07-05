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
 * 负载均衡器
 *
 * @method string getListenerId() 获取监听id
 * @method void setListenerId(string $ListenerId) 设置监听id
 * @method string getListenerName() 获取监听名
 * @method void setListenerName(string $ListenerName) 设置监听名
 * @method string getLoadBalancerId() 获取负载均衡id
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置负载均衡id
 * @method string getLoadBalancerName() 获取负载均衡名
 * @method void setLoadBalancerName(string $LoadBalancerName) 设置负载均衡名
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getRegion() 获取地区
"多伦多": "ca",
    "广州": "gz",
    "成都": "cd",
    "福州": "fzec",
    "深圳": "szx",
    "印度": "in",
    "济南": "jnec",
    "重庆": "cq",
    "天津": "tsn",
    "欧洲东北": "ru",
    "南京": "nj",
    "美国硅谷": "usw",
    "泰国": "th",
    "广州Open": "gzopen",
    "深圳金融": "szjr",
    "法兰克福": "de",
    "日本": "jp",
    "弗吉尼亚": "use",
    "北京": "bj",
    "中国香港": "hk",
    "杭州": "hzec",
    "北京金融": "bjjr",
    "上海金融": "shjr",
    "台北": "tpe",
    "首尔": "kr",
    "上海": "sh",
    "新加坡": "sg",
    "清远": "qy"
 * @method void setRegion(string $Region) 设置地区
"多伦多": "ca",
    "广州": "gz",
    "成都": "cd",
    "福州": "fzec",
    "深圳": "szx",
    "印度": "in",
    "济南": "jnec",
    "重庆": "cq",
    "天津": "tsn",
    "欧洲东北": "ru",
    "南京": "nj",
    "美国硅谷": "usw",
    "泰国": "th",
    "广州Open": "gzopen",
    "深圳金融": "szjr",
    "法兰克福": "de",
    "日本": "jp",
    "弗吉尼亚": "use",
    "北京": "bj",
    "中国香港": "hk",
    "杭州": "hzec",
    "北京金融": "bjjr",
    "上海金融": "shjr",
    "台北": "tpe",
    "首尔": "kr",
    "上海": "sh",
    "新加坡": "sg",
    "清远": "qy"
 * @method string getVip() 获取接入IP
 * @method void setVip(string $Vip) 设置接入IP
 * @method integer getVport() 获取接入端口
 * @method void setVport(integer $Vport) 设置接入端口
 * @method string getZone() 获取地域
 * @method void setZone(string $Zone) 设置地域
 * @method integer getNumericalVpcId() 获取VPCID
 * @method void setNumericalVpcId(integer $NumericalVpcId) 设置VPCID
 * @method string getLoadBalancerType() 获取CLB类型
 * @method void setLoadBalancerType(string $LoadBalancerType) 设置CLB类型
 * @method string getLoadBalancerDomain() 获取负载均衡器的域名
 * @method void setLoadBalancerDomain(string $LoadBalancerDomain) 设置负载均衡器的域名
 */
class LoadBalancerPackageNew extends AbstractModel
{
    /**
     * @var string 监听id
     */
    public $ListenerId;

    /**
     * @var string 监听名
     */
    public $ListenerName;

    /**
     * @var string 负载均衡id
     */
    public $LoadBalancerId;

    /**
     * @var string 负载均衡名
     */
    public $LoadBalancerName;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 地区
"多伦多": "ca",
    "广州": "gz",
    "成都": "cd",
    "福州": "fzec",
    "深圳": "szx",
    "印度": "in",
    "济南": "jnec",
    "重庆": "cq",
    "天津": "tsn",
    "欧洲东北": "ru",
    "南京": "nj",
    "美国硅谷": "usw",
    "泰国": "th",
    "广州Open": "gzopen",
    "深圳金融": "szjr",
    "法兰克福": "de",
    "日本": "jp",
    "弗吉尼亚": "use",
    "北京": "bj",
    "中国香港": "hk",
    "杭州": "hzec",
    "北京金融": "bjjr",
    "上海金融": "shjr",
    "台北": "tpe",
    "首尔": "kr",
    "上海": "sh",
    "新加坡": "sg",
    "清远": "qy"
     */
    public $Region;

    /**
     * @var string 接入IP
     */
    public $Vip;

    /**
     * @var integer 接入端口
     */
    public $Vport;

    /**
     * @var string 地域
     */
    public $Zone;

    /**
     * @var integer VPCID
     */
    public $NumericalVpcId;

    /**
     * @var string CLB类型
     */
    public $LoadBalancerType;

    /**
     * @var string 负载均衡器的域名
     */
    public $LoadBalancerDomain;

    /**
     * @param string $ListenerId 监听id
     * @param string $ListenerName 监听名
     * @param string $LoadBalancerId 负载均衡id
     * @param string $LoadBalancerName 负载均衡名
     * @param string $Protocol 协议
     * @param string $Region 地区
"多伦多": "ca",
    "广州": "gz",
    "成都": "cd",
    "福州": "fzec",
    "深圳": "szx",
    "印度": "in",
    "济南": "jnec",
    "重庆": "cq",
    "天津": "tsn",
    "欧洲东北": "ru",
    "南京": "nj",
    "美国硅谷": "usw",
    "泰国": "th",
    "广州Open": "gzopen",
    "深圳金融": "szjr",
    "法兰克福": "de",
    "日本": "jp",
    "弗吉尼亚": "use",
    "北京": "bj",
    "中国香港": "hk",
    "杭州": "hzec",
    "北京金融": "bjjr",
    "上海金融": "shjr",
    "台北": "tpe",
    "首尔": "kr",
    "上海": "sh",
    "新加坡": "sg",
    "清远": "qy"
     * @param string $Vip 接入IP
     * @param integer $Vport 接入端口
     * @param string $Zone 地域
     * @param integer $NumericalVpcId VPCID
     * @param string $LoadBalancerType CLB类型
     * @param string $LoadBalancerDomain 负载均衡器的域名
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

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("LoadBalancerName",$param) and $param["LoadBalancerName"] !== null) {
            $this->LoadBalancerName = $param["LoadBalancerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("NumericalVpcId",$param) and $param["NumericalVpcId"] !== null) {
            $this->NumericalVpcId = $param["NumericalVpcId"];
        }

        if (array_key_exists("LoadBalancerType",$param) and $param["LoadBalancerType"] !== null) {
            $this->LoadBalancerType = $param["LoadBalancerType"];
        }

        if (array_key_exists("LoadBalancerDomain",$param) and $param["LoadBalancerDomain"] !== null) {
            $this->LoadBalancerDomain = $param["LoadBalancerDomain"];
        }
    }
}
