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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Agent 的插件基本配置
 *
 * @method string getPluginId() 获取<p>插件id</p>
 * @method void setPluginId(string $PluginId) 设置<p>插件id</p>
 * @method array getHeaderParameterList() 获取<p>插件 Header 参数</p>
 * @method void setHeaderParameterList(array $HeaderParameterList) 设置<p>插件 Header 参数</p>
 * @method array getQueryParameterList() 获取<p>插件 Query 参数</p>
 * @method void setQueryParameterList(array $QueryParameterList) 设置<p>插件 Query 参数</p>
 * @method boolean getEnableCamRoleAuth() 获取<p>是否使用CAM一键授权，仅 auth_type=2时生效</p>
 * @method void setEnableCamRoleAuth(boolean $EnableCamRoleAuth) 设置<p>是否使用CAM一键授权，仅 auth_type=2时生效</p>
 * @method integer getAuthType() 获取<p>授权类型</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： API Key</li><li>2： CAM授权</li><li>3： OAuth2.0授权</li></ul>
 * @method void setAuthType(integer $AuthType) 设置<p>授权类型</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： API Key</li><li>2： CAM授权</li><li>3： OAuth2.0授权</li></ul>
 * @method integer getOAuthConsent() 获取OAuth 授权同意模式；0-开发者授权；1-使用者授权（仅在auth_type=3时生效）
 * @method void setOAuthConsent(integer $OAuthConsent) 设置OAuth 授权同意模式；0-开发者授权；1-使用者授权（仅在auth_type=3时生效）
 */
class AgentPluginConfig extends AbstractModel
{
    /**
     * @var string <p>插件id</p>
     */
    public $PluginId;

    /**
     * @var array <p>插件 Header 参数</p>
     */
    public $HeaderParameterList;

    /**
     * @var array <p>插件 Query 参数</p>
     */
    public $QueryParameterList;

    /**
     * @var boolean <p>是否使用CAM一键授权，仅 auth_type=2时生效</p>
     */
    public $EnableCamRoleAuth;

    /**
     * @var integer <p>授权类型</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： API Key</li><li>2： CAM授权</li><li>3： OAuth2.0授权</li></ul>
     */
    public $AuthType;

    /**
     * @var integer OAuth 授权同意模式；0-开发者授权；1-使用者授权（仅在auth_type=3时生效）
     */
    public $OAuthConsent;

    /**
     * @param string $PluginId <p>插件id</p>
     * @param array $HeaderParameterList <p>插件 Header 参数</p>
     * @param array $QueryParameterList <p>插件 Query 参数</p>
     * @param boolean $EnableCamRoleAuth <p>是否使用CAM一键授权，仅 auth_type=2时生效</p>
     * @param integer $AuthType <p>授权类型</p><p>枚举值：</p><ul><li>0： 无鉴权</li><li>1： API Key</li><li>2： CAM授权</li><li>3： OAuth2.0授权</li></ul>
     * @param integer $OAuthConsent OAuth 授权同意模式；0-开发者授权；1-使用者授权（仅在auth_type=3时生效）
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("HeaderParameterList",$param) and $param["HeaderParameterList"] !== null) {
            $this->HeaderParameterList = [];
            foreach ($param["HeaderParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->HeaderParameterList, $obj);
            }
        }

        if (array_key_exists("QueryParameterList",$param) and $param["QueryParameterList"] !== null) {
            $this->QueryParameterList = [];
            foreach ($param["QueryParameterList"] as $key => $value){
                $obj = new AgentPluginParameter();
                $obj->deserialize($value);
                array_push($this->QueryParameterList, $obj);
            }
        }

        if (array_key_exists("EnableCamRoleAuth",$param) and $param["EnableCamRoleAuth"] !== null) {
            $this->EnableCamRoleAuth = $param["EnableCamRoleAuth"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("OAuthConsent",$param) and $param["OAuthConsent"] !== null) {
            $this->OAuthConsent = $param["OAuthConsent"];
        }
    }
}
