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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyCopyPairAttribute请求参数结构体
 *
 * @method string getCopyPairId() 获取<p>要修改属性的复制对ID</p>
 * @method void setCopyPairId(string $CopyPairId) 设置<p>要修改属性的复制对ID</p>
 * @method string getCopyPairType() 获取<p>要修改的复制对类型，可选值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
 * @method void setCopyPairType(string $CopyPairType) 设置<p>要修改的复制对类型，可选值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
 * @method string getCopyPairName() 获取<p>修改复制对名称（长度最大支持 64 个字符）</p>
 * @method void setCopyPairName(string $CopyPairName) 设置<p>修改复制对名称（长度最大支持 64 个字符）</p>
 * @method string getInstanceType() 获取<p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
 * @method string getPrivateIpAddress() 获取<p>容灾端实例VPC IP（仅容灾端CVM未创建时可修改）</p>
 * @method void setPrivateIpAddress(string $PrivateIpAddress) 设置<p>容灾端实例VPC IP（仅容灾端CVM未创建时可修改）</p>
 * @method boolean getUseDefaultPrivateIp() 获取<p>是否使用默认IP，与PrivateIpAddress互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
 * @method void setUseDefaultPrivateIp(boolean $UseDefaultPrivateIp) 设置<p>是否使用默认IP，与PrivateIpAddress互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
 * @method LoginSettings getLoginSettings() 获取<p>实例登录设置，需要修改的时候才传（仅容灾端CVM未创建时可修改）</p>
 * @method void setLoginSettings(LoginSettings $LoginSettings) 设置<p>实例登录设置，需要修改的时候才传（仅容灾端CVM未创建时可修改）</p>
 * @method boolean getUseDefaultPassword() 获取<p>是否自动生成密码，与LoginSettings互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
 * @method void setUseDefaultPassword(boolean $UseDefaultPassword) 设置<p>是否自动生成密码，与LoginSettings互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
 */
class ModifyCopyPairAttributeRequest extends AbstractModel
{
    /**
     * @var string <p>要修改属性的复制对ID</p>
     */
    public $CopyPairId;

    /**
     * @var string <p>要修改的复制对类型，可选值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
     */
    public $CopyPairType;

    /**
     * @var string <p>修改复制对名称（长度最大支持 64 个字符）</p>
     */
    public $CopyPairName;

    /**
     * @var string <p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
     */
    public $InstanceType;

    /**
     * @var string <p>容灾端实例VPC IP（仅容灾端CVM未创建时可修改）</p>
     */
    public $PrivateIpAddress;

    /**
     * @var boolean <p>是否使用默认IP，与PrivateIpAddress互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
     */
    public $UseDefaultPrivateIp;

    /**
     * @var LoginSettings <p>实例登录设置，需要修改的时候才传（仅容灾端CVM未创建时可修改）</p>
     */
    public $LoginSettings;

    /**
     * @var boolean <p>是否自动生成密码，与LoginSettings互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
     */
    public $UseDefaultPassword;

    /**
     * @param string $CopyPairId <p>要修改属性的复制对ID</p>
     * @param string $CopyPairType <p>要修改的复制对类型，可选值：INSTANCE。</p><p>枚举值：</p><ul><li>INSTANCE： CVM复制对</li></ul>
     * @param string $CopyPairName <p>修改复制对名称（长度最大支持 64 个字符）</p>
     * @param string $InstanceType <p>容灾端实例类型（仅容灾端CVM未创建时可修改）</p>
     * @param string $PrivateIpAddress <p>容灾端实例VPC IP（仅容灾端CVM未创建时可修改）</p>
     * @param boolean $UseDefaultPrivateIp <p>是否使用默认IP，与PrivateIpAddress互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
     * @param LoginSettings $LoginSettings <p>实例登录设置，需要修改的时候才传（仅容灾端CVM未创建时可修改）</p>
     * @param boolean $UseDefaultPassword <p>是否自动生成密码，与LoginSettings互斥，不能同时使用（仅容灾端CVM未创建时可修改）</p>
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
        if (array_key_exists("CopyPairId",$param) and $param["CopyPairId"] !== null) {
            $this->CopyPairId = $param["CopyPairId"];
        }

        if (array_key_exists("CopyPairType",$param) and $param["CopyPairType"] !== null) {
            $this->CopyPairType = $param["CopyPairType"];
        }

        if (array_key_exists("CopyPairName",$param) and $param["CopyPairName"] !== null) {
            $this->CopyPairName = $param["CopyPairName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("PrivateIpAddress",$param) and $param["PrivateIpAddress"] !== null) {
            $this->PrivateIpAddress = $param["PrivateIpAddress"];
        }

        if (array_key_exists("UseDefaultPrivateIp",$param) and $param["UseDefaultPrivateIp"] !== null) {
            $this->UseDefaultPrivateIp = $param["UseDefaultPrivateIp"];
        }

        if (array_key_exists("LoginSettings",$param) and $param["LoginSettings"] !== null) {
            $this->LoginSettings = new LoginSettings();
            $this->LoginSettings->deserialize($param["LoginSettings"]);
        }

        if (array_key_exists("UseDefaultPassword",$param) and $param["UseDefaultPassword"] !== null) {
            $this->UseDefaultPassword = $param["UseDefaultPassword"];
        }
    }
}
