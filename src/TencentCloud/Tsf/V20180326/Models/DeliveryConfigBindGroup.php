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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述投递配置项绑定的部署组
 *
 * @method string getConfigId() 获取配置id
 * @method void setConfigId(string $ConfigId) 设置配置id
 * @method string getConfigName() 获取配置名
 * @method void setConfigName(string $ConfigName) 设置配置名
 * @method array getCollectPath() 获取采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectPath(array $CollectPath) 设置采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGroups() 获取关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroups(array $Groups) 设置关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVIp() 获取KafkaVIp
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVIp(string $KafkaVIp) 设置KafkaVIp
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaAddress() 获取KafkaAddress
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaAddress(string $KafkaAddress) 设置KafkaAddress
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVPort() 获取KafkaVPort
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVPort(string $KafkaVPort) 设置KafkaVPort
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取Topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置Topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLineRule() 获取LineRule
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineRule(string $LineRule) 设置LineRule
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomRule() 获取CustomRule
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomRule(string $CustomRule) 设置CustomRule
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableGlobalLineRule() 获取EnableGlobalLineRule
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableGlobalLineRule(boolean $EnableGlobalLineRule) 设置EnableGlobalLineRule
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableAuth() 获取EnableAuth
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableAuth(boolean $EnableAuth) 设置EnableAuth
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取Username
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置Username
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取Password
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置Password
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKafkaInfos() 获取KafkaInfos
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaInfos(array $KafkaInfos) 设置KafkaInfos
注意：此字段可能返回 null，表示取不到有效值。
 */
class DeliveryConfigBindGroup extends AbstractModel
{
    /**
     * @var string 配置id
     */
    public $ConfigId;

    /**
     * @var string 配置名
     */
    public $ConfigName;

    /**
     * @var array 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectPath;

    /**
     * @var array 关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Groups;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string KafkaVIp
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVIp;

    /**
     * @var string KafkaAddress
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaAddress;

    /**
     * @var string KafkaVPort
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVPort;

    /**
     * @var string Topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string LineRule
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineRule;

    /**
     * @var string CustomRule
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomRule;

    /**
     * @var boolean EnableGlobalLineRule
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableGlobalLineRule;

    /**
     * @var boolean EnableAuth
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableAuth;

    /**
     * @var string Username
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string Password
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var array KafkaInfos
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaInfos;

    /**
     * @param string $ConfigId 配置id
     * @param string $ConfigName 配置名
     * @param array $CollectPath 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Groups 关联部署组信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVIp KafkaVIp
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaAddress KafkaAddress
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVPort KafkaVPort
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic Topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LineRule LineRule
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomRule CustomRule
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableGlobalLineRule EnableGlobalLineRule
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableAuth EnableAuth
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username Username
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password Password
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KafkaInfos KafkaInfos
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("CollectPath",$param) and $param["CollectPath"] !== null) {
            $this->CollectPath = $param["CollectPath"];
        }

        if (array_key_exists("Groups",$param) and $param["Groups"] !== null) {
            $this->Groups = [];
            foreach ($param["Groups"] as $key => $value){
                $obj = new GroupInfo();
                $obj->deserialize($value);
                array_push($this->Groups, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("KafkaVIp",$param) and $param["KafkaVIp"] !== null) {
            $this->KafkaVIp = $param["KafkaVIp"];
        }

        if (array_key_exists("KafkaAddress",$param) and $param["KafkaAddress"] !== null) {
            $this->KafkaAddress = $param["KafkaAddress"];
        }

        if (array_key_exists("KafkaVPort",$param) and $param["KafkaVPort"] !== null) {
            $this->KafkaVPort = $param["KafkaVPort"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("LineRule",$param) and $param["LineRule"] !== null) {
            $this->LineRule = $param["LineRule"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = $param["CustomRule"];
        }

        if (array_key_exists("EnableGlobalLineRule",$param) and $param["EnableGlobalLineRule"] !== null) {
            $this->EnableGlobalLineRule = $param["EnableGlobalLineRule"];
        }

        if (array_key_exists("EnableAuth",$param) and $param["EnableAuth"] !== null) {
            $this->EnableAuth = $param["EnableAuth"];
        }

        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
        }

        if (array_key_exists("KafkaInfos",$param) and $param["KafkaInfos"] !== null) {
            $this->KafkaInfos = [];
            foreach ($param["KafkaInfos"] as $key => $value){
                $obj = new DeliveryKafkaInfo();
                $obj->deserialize($value);
                array_push($this->KafkaInfos, $obj);
            }
        }
    }
}
