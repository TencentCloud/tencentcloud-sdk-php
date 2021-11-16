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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 远程鉴权规则配置，可以包含多种规则配置。
RemoteAuthenticationRules和Server 互斥，只需要配置其中一个。
若只配置Server ，RemoteAuthenticationRules中详细规则参数将采用默认参数；默认参数值见各个配置项中说明；
 *
 * @method string getSwitch() 获取远程鉴权开关；
on : 开启;
off: 关闭；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSwitch(string $Switch) 设置远程鉴权开关；
on : 开启;
off: 关闭；
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRemoteAuthenticationRules() 获取远程鉴权规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoteAuthenticationRules(array $RemoteAuthenticationRules) 设置远程鉴权规则配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServer() 获取远程鉴权Server
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServer(string $Server) 设置远程鉴权Server
注意：此字段可能返回 null，表示取不到有效值。
 */
class RemoteAuthentication extends AbstractModel
{
    /**
     * @var string 远程鉴权开关；
on : 开启;
off: 关闭；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Switch;

    /**
     * @var array 远程鉴权规则配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoteAuthenticationRules;

    /**
     * @var string 远程鉴权Server
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Server;

    /**
     * @param string $Switch 远程鉴权开关；
on : 开启;
off: 关闭；
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RemoteAuthenticationRules 远程鉴权规则配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Server 远程鉴权Server
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("RemoteAuthenticationRules",$param) and $param["RemoteAuthenticationRules"] !== null) {
            $this->RemoteAuthenticationRules = [];
            foreach ($param["RemoteAuthenticationRules"] as $key => $value){
                $obj = new RemoteAuthenticationRule();
                $obj->deserialize($value);
                array_push($this->RemoteAuthenticationRules, $obj);
            }
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }
    }
}
