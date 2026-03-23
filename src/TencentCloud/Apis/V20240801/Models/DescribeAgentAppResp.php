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
 * @method integer getAppID() 获取租户appID
 * @method void setAppID(integer $AppID) 设置租户appID
 * @method string getUin() 获取租户ID
 * @method void setUin(string $Uin) 设置租户ID
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getID() 获取应用ID
 * @method void setID(string $ID) 设置应用ID
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取修改时间
 * @method void setUpdateTime(string $UpdateTime) 设置修改时间
 * @method string getAuthType() 获取认证类型
 * @method void setAuthType(string $AuthType) 设置认证类型
 * @method array getApiKeys() 获取apiKeys列表，脱敏
 * @method void setApiKeys(array $ApiKeys) 设置apiKeys列表，脱敏
 * @method array getSecretKeys() 获取secretKey列表，脱敏
 * @method void setSecretKeys(array $SecretKeys) 设置secretKey列表，脱敏
 * @method string getOAuth2ResourceServerID() 获取OAuth2 Resource Server ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOAuth2ResourceServerID(string $OAuth2ResourceServerID) 设置OAuth2 Resource Server ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMcpServersNum() 获取绑定mcpServer数量
 * @method void setMcpServersNum(integer $McpServersNum) 设置绑定mcpServer数量
 * @method integer getModelServicesNum() 获取绑定的模型服务数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelServicesNum(integer $ModelServicesNum) 设置绑定的模型服务数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAgentAppResp extends AbstractModel
{
    /**
     * @var integer 租户appID
     */
    public $AppID;

    /**
     * @var string 租户ID
     */
    public $Uin;

    /**
     * @var string 实例ID
     */
    public $InstanceID;

    /**
     * @var string 应用ID
     */
    public $ID;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $UpdateTime;

    /**
     * @var string 认证类型
     */
    public $AuthType;

    /**
     * @var array apiKeys列表，脱敏
     */
    public $ApiKeys;

    /**
     * @var array secretKey列表，脱敏
     */
    public $SecretKeys;

    /**
     * @var string OAuth2 Resource Server ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OAuth2ResourceServerID;

    /**
     * @var integer 绑定mcpServer数量
     */
    public $McpServersNum;

    /**
     * @var integer 绑定的模型服务数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelServicesNum;

    /**
     * @param integer $AppID 租户appID
     * @param string $Uin 租户ID
     * @param string $InstanceID 实例ID
     * @param string $ID 应用ID
     * @param string $Name 名称
     * @param string $Description 描述
     * @param string $Status 状态
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 修改时间
     * @param string $AuthType 认证类型
     * @param array $ApiKeys apiKeys列表，脱敏
     * @param array $SecretKeys secretKey列表，脱敏
     * @param string $OAuth2ResourceServerID OAuth2 Resource Server ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $McpServersNum 绑定mcpServer数量
     * @param integer $ModelServicesNum 绑定的模型服务数量
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
    }
}
