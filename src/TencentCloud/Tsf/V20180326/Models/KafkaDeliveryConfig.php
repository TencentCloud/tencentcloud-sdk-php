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
 * 投递kafka配置项
 *
 * @method string getConfigId() 获取配置项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置配置项id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置配置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCollectPath() 获取采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectPath(array $CollectPath) 设置采集路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVIp() 获取kafka vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVIp(string $KafkaVIp) 设置kafka vip
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaVPort() 获取kafka vport
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaVPort(string $KafkaVPort) 设置kafka vport
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTopic() 获取kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopic(string $Topic) 设置kafka topic
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLineRule() 获取换行规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineRule(string $LineRule) 设置换行规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableAuth() 获取是否需要认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableAuth(boolean $EnableAuth) 设置是否需要认证
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsername() 获取用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsername(string $Username) 设置用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPassword() 获取密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPassword(string $Password) 设置密码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getKafkaInfos() 获取投递的topic和path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaInfos(array $KafkaInfos) 设置投递的topic和path
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableGlobalLineRule() 获取是否应用单行规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableGlobalLineRule(boolean $EnableGlobalLineRule) 设置是否应用单行规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCustomRule() 获取自定义分行规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomRule(string $CustomRule) 设置自定义分行规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKafkaAddress() 获取KafkaAddress
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaAddress(string $KafkaAddress) 设置KafkaAddress
注意：此字段可能返回 null，表示取不到有效值。
 */
class KafkaDeliveryConfig extends AbstractModel
{
    /**
     * @var string 配置项id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var string 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @var array 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectPath;

    /**
     * @var string kafka vip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVIp;

    /**
     * @var string kafka vport
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaVPort;

    /**
     * @var string kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Topic;

    /**
     * @var string 换行规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineRule;

    /**
     * @var boolean 是否需要认证
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableAuth;

    /**
     * @var string 用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Username;

    /**
     * @var string 密码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Password;

    /**
     * @var array 投递的topic和path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaInfos;

    /**
     * @var boolean 是否应用单行规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableGlobalLineRule;

    /**
     * @var string 自定义分行规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomRule;

    /**
     * @var string KafkaAddress
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaAddress;

    /**
     * @param string $ConfigId 配置项id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName 配置名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CollectPath 采集路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVIp kafka vip
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaVPort kafka vport
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Topic kafka topic
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LineRule 换行规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableAuth 是否需要认证
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Username 用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Password 密码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $KafkaInfos 投递的topic和path
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableGlobalLineRule 是否应用单行规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CustomRule 自定义分行规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $KafkaAddress KafkaAddress
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

        if (array_key_exists("KafkaVIp",$param) and $param["KafkaVIp"] !== null) {
            $this->KafkaVIp = $param["KafkaVIp"];
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

        if (array_key_exists("EnableGlobalLineRule",$param) and $param["EnableGlobalLineRule"] !== null) {
            $this->EnableGlobalLineRule = $param["EnableGlobalLineRule"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = $param["CustomRule"];
        }

        if (array_key_exists("KafkaAddress",$param) and $param["KafkaAddress"] !== null) {
            $this->KafkaAddress = $param["KafkaAddress"];
        }
    }
}
