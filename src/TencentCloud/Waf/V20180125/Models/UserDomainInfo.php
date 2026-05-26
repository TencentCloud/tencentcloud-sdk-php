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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * saas和clb、四层域名信息
 *
 * @method integer getAppid() 获取<p>用户id</p>
 * @method void setAppid(integer $Appid) 设置<p>用户id</p>
 * @method string getDomain() 获取<p>域名</p>
 * @method void setDomain(string $Domain) 设置<p>域名</p>
 * @method string getDomainId() 获取<p>域名id</p>
 * @method void setDomainId(string $DomainId) 设置<p>域名id</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method string getEdition() 获取<p>waf类型</p>
 * @method void setEdition(string $Edition) 设置<p>waf类型</p>
 * @method string getLevel() 获取<p>版本</p>
 * @method void setLevel(string $Level) 设置<p>版本</p>
 * @method string getWriteConfig() 获取<p>指定域名访问日志字段的开关</p>
 * @method void setWriteConfig(string $WriteConfig) 设置<p>指定域名访问日志字段的开关</p>
 * @method integer getCls() 获取<p>指定域名是否写cls的开关 1:写 0:不写</p>
 * @method void setCls(integer $Cls) 设置<p>指定域名是否写cls的开关 1:写 0:不写</p>
 * @method string getCloudType() 获取<p>标记是否是混合云接入。hybrid表示混合云接入域名</p>
 * @method void setCloudType(string $CloudType) 设置<p>标记是否是混合云接入。hybrid表示混合云接入域名</p>
 * @method string getAlbType() 获取<p>标记clbwaf类型</p>
 * @method void setAlbType(string $AlbType) 设置<p>标记clbwaf类型</p>
 * @method integer getBotStatus() 获取<p>BOT开关状态</p>
 * @method void setBotStatus(integer $BotStatus) 设置<p>BOT开关状态</p>
 * @method integer getApiStatus() 获取<p>API开关状态</p>
 * @method void setApiStatus(integer $ApiStatus) 设置<p>API开关状态</p>
 * @method integer getIsREIP() 获取<p>是否是四层clbwaf域名</p>
 * @method void setIsREIP(integer $IsREIP) 设置<p>是否是四层clbwaf域名</p>
 */
class UserDomainInfo extends AbstractModel
{
    /**
     * @var integer <p>用户id</p>
     */
    public $Appid;

    /**
     * @var string <p>域名</p>
     */
    public $Domain;

    /**
     * @var string <p>域名id</p>
     */
    public $DomainId;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var string <p>waf类型</p>
     */
    public $Edition;

    /**
     * @var string <p>版本</p>
     */
    public $Level;

    /**
     * @var string <p>指定域名访问日志字段的开关</p>
     */
    public $WriteConfig;

    /**
     * @var integer <p>指定域名是否写cls的开关 1:写 0:不写</p>
     */
    public $Cls;

    /**
     * @var string <p>标记是否是混合云接入。hybrid表示混合云接入域名</p>
     */
    public $CloudType;

    /**
     * @var string <p>标记clbwaf类型</p>
     */
    public $AlbType;

    /**
     * @var integer <p>BOT开关状态</p>
     */
    public $BotStatus;

    /**
     * @var integer <p>API开关状态</p>
     */
    public $ApiStatus;

    /**
     * @var integer <p>是否是四层clbwaf域名</p>
     */
    public $IsREIP;

    /**
     * @param integer $Appid <p>用户id</p>
     * @param string $Domain <p>域名</p>
     * @param string $DomainId <p>域名id</p>
     * @param string $InstanceId <p>实例id</p>
     * @param string $InstanceName <p>实例名</p>
     * @param string $Edition <p>waf类型</p>
     * @param string $Level <p>版本</p>
     * @param string $WriteConfig <p>指定域名访问日志字段的开关</p>
     * @param integer $Cls <p>指定域名是否写cls的开关 1:写 0:不写</p>
     * @param string $CloudType <p>标记是否是混合云接入。hybrid表示混合云接入域名</p>
     * @param string $AlbType <p>标记clbwaf类型</p>
     * @param integer $BotStatus <p>BOT开关状态</p>
     * @param integer $ApiStatus <p>API开关状态</p>
     * @param integer $IsREIP <p>是否是四层clbwaf域名</p>
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
        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("WriteConfig",$param) and $param["WriteConfig"] !== null) {
            $this->WriteConfig = $param["WriteConfig"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }

        if (array_key_exists("AlbType",$param) and $param["AlbType"] !== null) {
            $this->AlbType = $param["AlbType"];
        }

        if (array_key_exists("BotStatus",$param) and $param["BotStatus"] !== null) {
            $this->BotStatus = $param["BotStatus"];
        }

        if (array_key_exists("ApiStatus",$param) and $param["ApiStatus"] !== null) {
            $this->ApiStatus = $param["ApiStatus"];
        }

        if (array_key_exists("IsREIP",$param) and $param["IsREIP"] !== null) {
            $this->IsREIP = $param["IsREIP"];
        }
    }
}
