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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Whois信息
 *
 * @method WhoisContact getContacts() 获取联系信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContacts(WhoisContact $Contacts) 设置联系信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationDate() 获取域名注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationDate(string $CreationDate) 设置域名注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpirationDate() 获取域名到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpirationDate(string $ExpirationDate) 设置域名到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsQcloud() 获取是否是在腾讯云注册的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsQcloud(boolean $IsQcloud) 设置是否是在腾讯云注册的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsQcloudOwner() 获取是否当前操作帐号注册的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsQcloudOwner(boolean $IsQcloudOwner) 设置是否当前操作帐号注册的域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNameServers() 获取域名配置的NS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameServers(array $NameServers) 设置域名配置的NS
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRaw() 获取Whois原始信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRaw(array $Raw) 设置Whois原始信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRegistrar() 获取域名注册商
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistrar(array $Registrar) 设置域名注册商
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(array $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedDate() 获取更新日期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedDate(string $UpdatedDate) 设置更新日期
注意：此字段可能返回 null，表示取不到有效值。
 */
class WhoisInfo extends AbstractModel
{
    /**
     * @var WhoisContact 联系信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contacts;

    /**
     * @var string 域名注册时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationDate;

    /**
     * @var string 域名到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpirationDate;

    /**
     * @var boolean 是否是在腾讯云注册的域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsQcloud;

    /**
     * @var boolean 是否当前操作帐号注册的域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsQcloudOwner;

    /**
     * @var array 域名配置的NS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameServers;

    /**
     * @var array Whois原始信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Raw;

    /**
     * @var array 域名注册商
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Registrar;

    /**
     * @var array 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 更新日期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedDate;

    /**
     * @param WhoisContact $Contacts 联系信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationDate 域名注册时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpirationDate 域名到期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsQcloud 是否是在腾讯云注册的域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsQcloudOwner 是否当前操作帐号注册的域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NameServers 域名配置的NS
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Raw Whois原始信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Registrar 域名注册商
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedDate 更新日期
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
        if (array_key_exists("Contacts",$param) and $param["Contacts"] !== null) {
            $this->Contacts = new WhoisContact();
            $this->Contacts->deserialize($param["Contacts"]);
        }

        if (array_key_exists("CreationDate",$param) and $param["CreationDate"] !== null) {
            $this->CreationDate = $param["CreationDate"];
        }

        if (array_key_exists("ExpirationDate",$param) and $param["ExpirationDate"] !== null) {
            $this->ExpirationDate = $param["ExpirationDate"];
        }

        if (array_key_exists("IsQcloud",$param) and $param["IsQcloud"] !== null) {
            $this->IsQcloud = $param["IsQcloud"];
        }

        if (array_key_exists("IsQcloudOwner",$param) and $param["IsQcloudOwner"] !== null) {
            $this->IsQcloudOwner = $param["IsQcloudOwner"];
        }

        if (array_key_exists("NameServers",$param) and $param["NameServers"] !== null) {
            $this->NameServers = $param["NameServers"];
        }

        if (array_key_exists("Raw",$param) and $param["Raw"] !== null) {
            $this->Raw = $param["Raw"];
        }

        if (array_key_exists("Registrar",$param) and $param["Registrar"] !== null) {
            $this->Registrar = $param["Registrar"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdatedDate",$param) and $param["UpdatedDate"] !== null) {
            $this->UpdatedDate = $param["UpdatedDate"];
        }
    }
}
