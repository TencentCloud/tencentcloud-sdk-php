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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询app详情响应
 *
 * @method integer getAppID() 获取<p>租户appID</p>
 * @method void setAppID(integer $AppID) 设置<p>租户appID</p>
 * @method string getUin() 获取<p>租户ID</p>
 * @method void setUin(string $Uin) 设置<p>租户ID</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getID() 获取<p>应用ID</p>
 * @method void setID(string $ID) 设置<p>应用ID</p>
 * @method string getName() 获取<p>名称</p>
 * @method void setName(string $Name) 设置<p>名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>修改时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>修改时间</p>
 * @method string getAuthType() 获取<p>认证类型</p>
 * @method void setAuthType(string $AuthType) 设置<p>认证类型</p>
 * @method array getApiKeys() 获取<p>apiKeys列表，脱敏</p>
 * @method void setApiKeys(array $ApiKeys) 设置<p>apiKeys列表，脱敏</p>
 * @method array getSecretKeys() 获取<p>secretKey列表，脱敏</p>
 * @method void setSecretKeys(array $SecretKeys) 设置<p>secretKey列表，脱敏</p>
 * @method string getOAuth2ResourceServerID() 获取<p>OAuth2 Resource Server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOAuth2ResourceServerID(string $OAuth2ResourceServerID) 设置<p>OAuth2 Resource Server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMcpServersNum() 获取<p>绑定mcpServer数量</p>
 * @method void setMcpServersNum(integer $McpServersNum) 设置<p>绑定mcpServer数量</p>
 * @method integer getModelServicesNum() 获取<p>绑定的模型服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelServicesNum(integer $ModelServicesNum) 设置<p>绑定的模型服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConnectorIDs() 获取<p>API认证列表</p>
 * @method void setConnectorIDs(array $ConnectorIDs) 设置<p>API认证列表</p>
 * @method integer getServicesNum() 获取<p>关联API数量</p>
 * @method void setServicesNum(integer $ServicesNum) 设置<p>关联API数量</p>
 */
class DescribeAgentAppResp extends AbstractModel
{
    /**
     * @var integer <p>租户appID</p>
     */
    public $AppID;

    /**
     * @var string <p>租户ID</p>
     */
    public $Uin;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>应用ID</p>
     */
    public $ID;

    /**
     * @var string <p>名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>认证类型</p>
     */
    public $AuthType;

    /**
     * @var array <p>apiKeys列表，脱敏</p>
     */
    public $ApiKeys;

    /**
     * @var array <p>secretKey列表，脱敏</p>
     */
    public $SecretKeys;

    /**
     * @var string <p>OAuth2 Resource Server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OAuth2ResourceServerID;

    /**
     * @var integer <p>绑定mcpServer数量</p>
     */
    public $McpServersNum;

    /**
     * @var integer <p>绑定的模型服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelServicesNum;

    /**
     * @var array <p>API认证列表</p>
     */
    public $ConnectorIDs;

    /**
     * @var integer <p>关联API数量</p>
     */
    public $ServicesNum;

    /**
     * @param integer $AppID <p>租户appID</p>
     * @param string $Uin <p>租户ID</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $ID <p>应用ID</p>
     * @param string $Name <p>名称</p>
     * @param string $Description <p>描述</p>
     * @param string $Status <p>状态</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>修改时间</p>
     * @param string $AuthType <p>认证类型</p>
     * @param array $ApiKeys <p>apiKeys列表，脱敏</p>
     * @param array $SecretKeys <p>secretKey列表，脱敏</p>
     * @param string $OAuth2ResourceServerID <p>OAuth2 Resource Server ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $McpServersNum <p>绑定mcpServer数量</p>
     * @param integer $ModelServicesNum <p>绑定的模型服务数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConnectorIDs <p>API认证列表</p>
     * @param integer $ServicesNum <p>关联API数量</p>
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("ApiKeys",$param) and $param["ApiKeys"] !== null) {
            $this->ApiKeys = $param["ApiKeys"];
        }

        if (array_key_exists("SecretKeys",$param) and $param["SecretKeys"] !== null) {
            $this->SecretKeys = [];
            foreach ($param["SecretKeys"] as $key => $value){
                $obj = new AgentAppSecretKeyVO();
                $obj->deserialize($value);
                array_push($this->SecretKeys, $obj);
            }
        }

        if (array_key_exists("OAuth2ResourceServerID",$param) and $param["OAuth2ResourceServerID"] !== null) {
            $this->OAuth2ResourceServerID = $param["OAuth2ResourceServerID"];
        }

        if (array_key_exists("McpServersNum",$param) and $param["McpServersNum"] !== null) {
            $this->McpServersNum = $param["McpServersNum"];
        }

        if (array_key_exists("ModelServicesNum",$param) and $param["ModelServicesNum"] !== null) {
            $this->ModelServicesNum = $param["ModelServicesNum"];
        }

        if (array_key_exists("ConnectorIDs",$param) and $param["ConnectorIDs"] !== null) {
            $this->ConnectorIDs = $param["ConnectorIDs"];
        }

        if (array_key_exists("ServicesNum",$param) and $param["ServicesNum"] !== null) {
            $this->ServicesNum = $param["ServicesNum"];
        }
    }
}
