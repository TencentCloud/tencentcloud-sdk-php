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
 * 反查监听器类型
 *
 * @method string getListenerId() 获取监听器ID
 * @method void setListenerId(string $ListenerId) 设置监听器ID
 * @method string getProtocol() 获取监听器协议
 * @method void setProtocol(string $Protocol) 设置监听器协议
 * @method integer getPort() 获取监听器端口
 * @method void setPort(integer $Port) 设置监听器端口
 * @method array getRules() 获取绑定规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRules(array $Rules) 设置绑定规则
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTargets() 获取四层绑定对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargets(array $Targets) 设置四层绑定对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEndPort() 获取端口段监听器的结束端口
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndPort(integer $EndPort) 设置端口段监听器的结束端口
注意：此字段可能返回 null，表示取不到有效值。
 */
class ListenerItem extends AbstractModel
{
    /**
     * @var string 监听器ID
     */
    public $ListenerId;

    /**
     * @var string 监听器协议
     */
    public $Protocol;

    /**
     * @var integer 监听器端口
     */
    public $Port;

    /**
     * @var array 绑定规则
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rules;

    /**
     * @var array 四层绑定对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Targets;

    /**
     * @var integer 端口段监听器的结束端口
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndPort;

    /**
     * @param string $ListenerId 监听器ID
     * @param string $Protocol 监听器协议
     * @param integer $Port 监听器端口
     * @param array $Rules 绑定规则
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Targets 四层绑定对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EndPort 端口段监听器的结束端口
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new RulesItems();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = [];
            foreach ($param["Targets"] as $key => $value){
                $obj = new LbRsTargets();
                $obj->deserialize($value);
                array_push($this->Targets, $obj);
            }
        }

        if (array_key_exists("EndPort",$param) and $param["EndPort"] !== null) {
            $this->EndPort = $param["EndPort"];
        }
    }
}
