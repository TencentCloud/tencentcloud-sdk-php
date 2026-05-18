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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业目录的配置数据
 *
 * @method integer getId() 获取<p>企业目录 ID</p>
 * @method void setId(integer $Id) 设置<p>企业目录 ID</p>
 * @method string getType() 获取<p>目录对应身份源类型</p><p>枚举值：</p><ul><li>WeCom： 企业微信</li><li>Lark： 飞书</li><li>DingTalk： 钉钉</li><li>MicrosoftEntraID： 微软 AAD</li></ul>
 * @method void setType(string $Type) 设置<p>目录对应身份源类型</p><p>枚举值：</p><ul><li>WeCom： 企业微信</li><li>Lark： 飞书</li><li>DingTalk： 钉钉</li><li>MicrosoftEntraID： 微软 AAD</li></ul>
 * @method string getName() 获取<p>企业目录名称</p>
 * @method void setName(string $Name) 设置<p>企业目录名称</p>
 * @method string getConfig() 获取<p>使用 JSON 字符串表示的配置信息</p>
 * @method void setConfig(string $Config) 设置<p>使用 JSON 字符串表示的配置信息</p>
 * @method boolean getSyncEnable() 获取<p>是否开启了定时同步</p>
 * @method void setSyncEnable(boolean $SyncEnable) 设置<p>是否开启了定时同步</p>
 * @method string getSyncPolicy() 获取<p>定时同步的策略</p><p>枚举值：</p><ul><li>4hours： 按创建时间开始的每 4 小时</li><li>daily： 每日</li><li>weekly： 每周</li></ul>
 * @method void setSyncPolicy(string $SyncPolicy) 设置<p>定时同步的策略</p><p>枚举值：</p><ul><li>4hours： 按创建时间开始的每 4 小时</li><li>daily： 每日</li><li>weekly： 每周</li></ul>
 * @method string getSyncPolicyParams() 获取<p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
 * @method void setSyncPolicyParams(string $SyncPolicyParams) 设置<p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
 * @method boolean getCreateAuthConfig() 获取<p>是否配置了同步创建认证配置</p>
 * @method void setCreateAuthConfig(boolean $CreateAuthConfig) 设置<p>是否配置了同步创建认证配置</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getSourceId() 获取<p>对应 Config 的配置 ID</p>
 * @method void setSourceId(string $SourceId) 设置<p>对应 Config 的配置 ID</p>
 * @method boolean getDisplayOnLoginPage() 获取<p>是否在登录页展示</p>
 * @method void setDisplayOnLoginPage(boolean $DisplayOnLoginPage) 设置<p>是否在登录页展示</p>
 */
class DirectoryConfigData extends AbstractModel
{
    /**
     * @var integer <p>企业目录 ID</p>
     */
    public $Id;

    /**
     * @var string <p>目录对应身份源类型</p><p>枚举值：</p><ul><li>WeCom： 企业微信</li><li>Lark： 飞书</li><li>DingTalk： 钉钉</li><li>MicrosoftEntraID： 微软 AAD</li></ul>
     */
    public $Type;

    /**
     * @var string <p>企业目录名称</p>
     */
    public $Name;

    /**
     * @var string <p>使用 JSON 字符串表示的配置信息</p>
     */
    public $Config;

    /**
     * @var boolean <p>是否开启了定时同步</p>
     */
    public $SyncEnable;

    /**
     * @var string <p>定时同步的策略</p><p>枚举值：</p><ul><li>4hours： 按创建时间开始的每 4 小时</li><li>daily： 每日</li><li>weekly： 每周</li></ul>
     */
    public $SyncPolicy;

    /**
     * @var string <p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
     */
    public $SyncPolicyParams;

    /**
     * @var boolean <p>是否配置了同步创建认证配置</p>
     */
    public $CreateAuthConfig;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>对应 Config 的配置 ID</p>
     */
    public $SourceId;

    /**
     * @var boolean <p>是否在登录页展示</p>
     */
    public $DisplayOnLoginPage;

    /**
     * @param integer $Id <p>企业目录 ID</p>
     * @param string $Type <p>目录对应身份源类型</p><p>枚举值：</p><ul><li>WeCom： 企业微信</li><li>Lark： 飞书</li><li>DingTalk： 钉钉</li><li>MicrosoftEntraID： 微软 AAD</li></ul>
     * @param string $Name <p>企业目录名称</p>
     * @param string $Config <p>使用 JSON 字符串表示的配置信息</p>
     * @param boolean $SyncEnable <p>是否开启了定时同步</p>
     * @param string $SyncPolicy <p>定时同步的策略</p><p>枚举值：</p><ul><li>4hours： 按创建时间开始的每 4 小时</li><li>daily： 每日</li><li>weekly： 每周</li></ul>
     * @param string $SyncPolicyParams <p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
     * @param boolean $CreateAuthConfig <p>是否配置了同步创建认证配置</p>
     * @param string $Description <p>描述</p>
     * @param string $SourceId <p>对应 Config 的配置 ID</p>
     * @param boolean $DisplayOnLoginPage <p>是否在登录页展示</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("SyncEnable",$param) and $param["SyncEnable"] !== null) {
            $this->SyncEnable = $param["SyncEnable"];
        }

        if (array_key_exists("SyncPolicy",$param) and $param["SyncPolicy"] !== null) {
            $this->SyncPolicy = $param["SyncPolicy"];
        }

        if (array_key_exists("SyncPolicyParams",$param) and $param["SyncPolicyParams"] !== null) {
            $this->SyncPolicyParams = $param["SyncPolicyParams"];
        }

        if (array_key_exists("CreateAuthConfig",$param) and $param["CreateAuthConfig"] !== null) {
            $this->CreateAuthConfig = $param["CreateAuthConfig"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("DisplayOnLoginPage",$param) and $param["DisplayOnLoginPage"] !== null) {
            $this->DisplayOnLoginPage = $param["DisplayOnLoginPage"];
        }
    }
}
