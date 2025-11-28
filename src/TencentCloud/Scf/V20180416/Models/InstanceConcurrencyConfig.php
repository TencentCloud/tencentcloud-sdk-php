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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多并发执行配置描述
 *
 * @method string getDynamicEnabled() 获取是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDynamicEnabled(string $DynamicEnabled) 设置是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxConcurrency() 获取单实例并发数最大值。取值范围 [1,100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxConcurrency(integer $MaxConcurrency) 设置单实例并发数最大值。取值范围 [1,100]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceIsolationEnabled() 获取安全隔离开关
 * @method void setInstanceIsolationEnabled(string $InstanceIsolationEnabled) 设置安全隔离开关
 * @method string getType() 获取基于会话：Session-Based ， 或者基于请求：Request-Based，二选一
 * @method void setType(string $Type) 设置基于会话：Session-Based ， 或者基于请求：Request-Based，二选一
 * @method array getMixNodeConfig() 获取动态并发参数
 * @method void setMixNodeConfig(array $MixNodeConfig) 设置动态并发参数
 * @method SessionConfig getSessionConfig() 获取会话配置参数
 * @method void setSessionConfig(SessionConfig $SessionConfig) 设置会话配置参数
 */
class InstanceConcurrencyConfig extends AbstractModel
{
    /**
     * @var string 是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DynamicEnabled;

    /**
     * @var integer 单实例并发数最大值。取值范围 [1,100]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxConcurrency;

    /**
     * @var string 安全隔离开关
     */
    public $InstanceIsolationEnabled;

    /**
     * @var string 基于会话：Session-Based ， 或者基于请求：Request-Based，二选一
     */
    public $Type;

    /**
     * @var array 动态并发参数
     */
    public $MixNodeConfig;

    /**
     * @var SessionConfig 会话配置参数
     */
    public $SessionConfig;

    /**
     * @param string $DynamicEnabled 是否开启智能动态并发。'FALSE'时是静态并发。''时取消多并发配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxConcurrency 单实例并发数最大值。取值范围 [1,100]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceIsolationEnabled 安全隔离开关
     * @param string $Type 基于会话：Session-Based ， 或者基于请求：Request-Based，二选一
     * @param array $MixNodeConfig 动态并发参数
     * @param SessionConfig $SessionConfig 会话配置参数
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
        if (array_key_exists("DynamicEnabled",$param) and $param["DynamicEnabled"] !== null) {
            $this->DynamicEnabled = $param["DynamicEnabled"];
        }

        if (array_key_exists("MaxConcurrency",$param) and $param["MaxConcurrency"] !== null) {
            $this->MaxConcurrency = $param["MaxConcurrency"];
        }

        if (array_key_exists("InstanceIsolationEnabled",$param) and $param["InstanceIsolationEnabled"] !== null) {
            $this->InstanceIsolationEnabled = $param["InstanceIsolationEnabled"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("MixNodeConfig",$param) and $param["MixNodeConfig"] !== null) {
            $this->MixNodeConfig = [];
            foreach ($param["MixNodeConfig"] as $key => $value){
                $obj = new MixNodeConfig();
                $obj->deserialize($value);
                array_push($this->MixNodeConfig, $obj);
            }
        }

        if (array_key_exists("SessionConfig",$param) and $param["SessionConfig"] !== null) {
            $this->SessionConfig = new SessionConfig();
            $this->SessionConfig->deserialize($param["SessionConfig"]);
        }
    }
}
