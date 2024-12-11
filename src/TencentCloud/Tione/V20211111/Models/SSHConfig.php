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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * notebook ssh端口配置
 *
 * @method boolean getEnable() 获取是否开启ssh
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnable(boolean $Enable) 设置是否开启ssh
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicKey() 获取公钥信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicKey(string $PublicKey) 设置公钥信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPort() 获取端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(integer $Port) 设置端口号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLoginCommand() 获取登录命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoginCommand(string $LoginCommand) 设置登录命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAddressChanged() 获取登录地址是否改变
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAddressChanged(boolean $IsAddressChanged) 设置登录地址是否改变
注意：此字段可能返回 null，表示取不到有效值。
 */
class SSHConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启ssh
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Enable;

    /**
     * @var string 公钥信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicKey;

    /**
     * @var integer 端口号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string 登录命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoginCommand;

    /**
     * @var boolean 登录地址是否改变
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAddressChanged;

    /**
     * @param boolean $Enable 是否开启ssh
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicKey 公钥信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Port 端口号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LoginCommand 登录命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAddressChanged 登录地址是否改变
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
        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("LoginCommand",$param) and $param["LoginCommand"] !== null) {
            $this->LoginCommand = $param["LoginCommand"];
        }

        if (array_key_exists("IsAddressChanged",$param) and $param["IsAddressChanged"] !== null) {
            $this->IsAddressChanged = $param["IsAddressChanged"];
        }
    }
}
