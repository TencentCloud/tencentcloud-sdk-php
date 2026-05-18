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
 * ModifyCompanyDirectoryConfig请求参数结构体
 *
 * @method string getType() 获取<p>企业目录类型</p>
 * @method void setType(string $Type) 设置<p>企业目录类型</p>
 * @method string getName() 获取<p>企业目录名</p>
 * @method void setName(string $Name) 设置<p>企业目录名</p>
 * @method string getConfig() 获取<p>使用 JSON 字符串表示的配置信息</p><p>调用此接口前，需要先调用DescribeCompanyDirectoryConfig获取完整的配置，然后对里面需要更新的配置进行修改，请求的时候必须传完整配置，否则可能导致配置缺失出现错误。如果是脱敏的信息，保持原样的脱敏格式提交，如果和脱敏格式不一致，会认为是新的配置值更新原有配置</p>
 * @method void setConfig(string $Config) 设置<p>使用 JSON 字符串表示的配置信息</p><p>调用此接口前，需要先调用DescribeCompanyDirectoryConfig获取完整的配置，然后对里面需要更新的配置进行修改，请求的时候必须传完整配置，否则可能导致配置缺失出现错误。如果是脱敏的信息，保持原样的脱敏格式提交，如果和脱敏格式不一致，会认为是新的配置值更新原有配置</p>
 * @method boolean getSyncEnable() 获取<p>是否开启定时同步</p>
 * @method void setSyncEnable(boolean $SyncEnable) 设置<p>是否开启定时同步</p>
 * @method string getSyncPolicy() 获取<p>定时同步的策略，枚举值：支持每4小时（4hours）/每日定时（daily）/每周定时（weekly）</p>
 * @method void setSyncPolicy(string $SyncPolicy) 设置<p>定时同步的策略，枚举值：支持每4小时（4hours）/每日定时（daily）/每周定时（weekly）</p>
 * @method string getSyncPolicyParams() 获取<p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
 * @method void setSyncPolicyParams(string $SyncPolicyParams) 设置<p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
 * @method boolean getCreateAuthConfig() 获取<p>是否同步创建认证源</p>
 * @method void setCreateAuthConfig(boolean $CreateAuthConfig) 设置<p>是否同步创建认证源</p>
 * @method boolean getDisplayOnLoginPage() 获取<p>是否在登录页展示</p>
 * @method void setDisplayOnLoginPage(boolean $DisplayOnLoginPage) 设置<p>是否在登录页展示</p>
 * @method integer getId() 获取<p>企业目录 ID</p>
 * @method void setId(integer $Id) 设置<p>企业目录 ID</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 */
class ModifyCompanyDirectoryConfigRequest extends AbstractModel
{
    /**
     * @var string <p>企业目录类型</p>
     */
    public $Type;

    /**
     * @var string <p>企业目录名</p>
     */
    public $Name;

    /**
     * @var string <p>使用 JSON 字符串表示的配置信息</p><p>调用此接口前，需要先调用DescribeCompanyDirectoryConfig获取完整的配置，然后对里面需要更新的配置进行修改，请求的时候必须传完整配置，否则可能导致配置缺失出现错误。如果是脱敏的信息，保持原样的脱敏格式提交，如果和脱敏格式不一致，会认为是新的配置值更新原有配置</p>
     */
    public $Config;

    /**
     * @var boolean <p>是否开启定时同步</p>
     */
    public $SyncEnable;

    /**
     * @var string <p>定时同步的策略，枚举值：支持每4小时（4hours）/每日定时（daily）/每周定时（weekly）</p>
     */
    public $SyncPolicy;

    /**
     * @var string <p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
     */
    public $SyncPolicyParams;

    /**
     * @var boolean <p>是否同步创建认证源</p>
     */
    public $CreateAuthConfig;

    /**
     * @var boolean <p>是否在登录页展示</p>
     */
    public $DisplayOnLoginPage;

    /**
     * @var integer <p>企业目录 ID</p>
     */
    public $Id;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @param string $Type <p>企业目录类型</p>
     * @param string $Name <p>企业目录名</p>
     * @param string $Config <p>使用 JSON 字符串表示的配置信息</p><p>调用此接口前，需要先调用DescribeCompanyDirectoryConfig获取完整的配置，然后对里面需要更新的配置进行修改，请求的时候必须传完整配置，否则可能导致配置缺失出现错误。如果是脱敏的信息，保持原样的脱敏格式提交，如果和脱敏格式不一致，会认为是新的配置值更新原有配置</p>
     * @param boolean $SyncEnable <p>是否开启定时同步</p>
     * @param string $SyncPolicy <p>定时同步的策略，枚举值：支持每4小时（4hours）/每日定时（daily）/每周定时（weekly）</p>
     * @param string $SyncPolicyParams <p>JSON 字符串，针对不同类型的同步策略，提取对应不同的值</p>
     * @param boolean $CreateAuthConfig <p>是否同步创建认证源</p>
     * @param boolean $DisplayOnLoginPage <p>是否在登录页展示</p>
     * @param integer $Id <p>企业目录 ID</p>
     * @param string $Description <p>描述</p>
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

        if (array_key_exists("DisplayOnLoginPage",$param) and $param["DisplayOnLoginPage"] !== null) {
            $this->DisplayOnLoginPage = $param["DisplayOnLoginPage"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
