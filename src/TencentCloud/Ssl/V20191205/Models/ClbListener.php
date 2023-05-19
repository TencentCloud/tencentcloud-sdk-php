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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CLB实例监听器
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getListenerName() 获取监听器名称
 * @method void setListenerName(string $ListenerName) 设置监听器名称
 * @method integer getSniSwitch() 获取是否开启SNI，1为开启，0为关闭
 * @method void setSniSwitch(integer $SniSwitch) 设置是否开启SNI，1为开启，0为关闭
 * @method string getProtocol() 获取监听器协议类型， HTTPS|TCP_SSL
 * @method void setProtocol(string $Protocol) 设置监听器协议类型， HTTPS|TCP_SSL
 * @method Certificate getCertificate() 获取监听器绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCertificate(Certificate $Certificate) 设置监听器绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRules() 获取监听器规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置监听器规则列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoMatchDomains() 获取不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoMatchDomains(array $NoMatchDomains) 设置不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClbListener extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 监听器名称
     */
    public $ListenerName;

    /**
     * @var integer 是否开启SNI，1为开启，0为关闭
     */
    public $SniSwitch;

    /**
     * @var string 监听器协议类型， HTTPS|TCP_SSL
     */
    public $Protocol;

    /**
     * @var Certificate 监听器绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Certificate;

    /**
     * @var array 监听器规则列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var array 不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoMatchDomains;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $ListenerName 监听器名称
     * @param integer $SniSwitch 是否开启SNI，1为开启，0为关闭
     * @param string $Protocol 监听器协议类型， HTTPS|TCP_SSL
     * @param Certificate $Certificate 监听器绑定的证书数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rules 监听器规则列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoMatchDomains 不匹配域名列表
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SniSwitch",$param) and $param["SniSwitch"] !== null) {
            $this->SniSwitch = $param["SniSwitch"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new Certificate();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new ClbListenerRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }
    }
}
