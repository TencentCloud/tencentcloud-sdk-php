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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定关系，包含监听器名字、协议、url、vport。
 *
 * @method string getLoadBalancerId() 获取配置绑定的CLB ID
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置配置绑定的CLB ID
 * @method string getListenerId() 获取配置绑定的监听器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerId(string $ListenerId) 设置配置绑定的监听器ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDomain() 获取配置绑定的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDomain(string $Domain) 设置配置绑定的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocationId() 获取配置绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocationId(string $LocationId) 设置配置绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getListenerName() 获取监听器名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setListenerName(string $ListenerName) 设置监听器名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtocol() 获取监听器协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtocol(string $Protocol) 设置监听器协议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVport() 获取监听器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVport(integer $Vport) 设置监听器端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取location的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置location的url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUconfigId() 获取配置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUconfigId(string $UconfigId) 设置配置ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class BindDetailItem extends AbstractModel
{
    /**
     * @var string 配置绑定的CLB ID
     */
    public $LoadBalancerId;

    /**
     * @var string 配置绑定的监听器ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerId;

    /**
     * @var string 配置绑定的域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Domain;

    /**
     * @var string 配置绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LocationId;

    /**
     * @var string 监听器名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ListenerName;

    /**
     * @var string 监听器协议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Protocol;

    /**
     * @var integer 监听器端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vport;

    /**
     * @var string location的url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 配置ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UconfigId;

    /**
     * @param string $LoadBalancerId 配置绑定的CLB ID
     * @param string $ListenerId 配置绑定的监听器ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Domain 配置绑定的域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LocationId 配置绑定的规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ListenerName 监听器名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Protocol 监听器协议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Vport 监听器端口
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url location的url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UconfigId 配置ID
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LocationId",$param) and $param["LocationId"] !== null) {
            $this->LocationId = $param["LocationId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }
    }
}
