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
 * 凭据详情响应
 *
 * @method integer getAppID() 获取租户应用ID
 * @method void setAppID(integer $AppID) 设置租户应用ID
 * @method string getUin() 获取租户ID
 * @method void setUin(string $Uin) 设置租户ID
 * @method string getInstanceID() 获取实例ID
 * @method void setInstanceID(string $InstanceID) 设置实例ID
 * @method string getID() 获取凭据ID
 * @method void setID(string $ID) 设置凭据ID
 * @method string getName() 获取凭据名称
 * @method void setName(string $Name) 设置凭据名称
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method integer getRelateAgentAppNum() 获取关联应用数
 * @method void setRelateAgentAppNum(integer $RelateAgentAppNum) 设置关联应用数
 * @method integer getRelateMcpServerNum() 获取关联mcp数
 * @method void setRelateMcpServerNum(integer $RelateMcpServerNum) 设置关联mcp数
 * @method integer getRelateModelNum() 获取关联模型数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelateModelNum(integer $RelateModelNum) 设置关联模型数
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentCredentialContentDTO getContent() 获取凭据内容
 * @method void setContent(AgentCredentialContentDTO $Content) 设置凭据内容
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getLastUpdateTime() 获取修改时间
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置修改时间
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 */
class DescribeAgentCredentialResp extends AbstractModel
{
    /**
     * @var integer 租户应用ID
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
     * @var string 凭据ID
     */
    public $ID;

    /**
     * @var string 凭据名称
     */
    public $Name;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var integer 关联应用数
     */
    public $RelateAgentAppNum;

    /**
     * @var integer 关联mcp数
     */
    public $RelateMcpServerNum;

    /**
     * @var integer 关联模型数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelateModelNum;

    /**
     * @var AgentCredentialContentDTO 凭据内容
     */
    public $Content;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $LastUpdateTime;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @param integer $AppID 租户应用ID
     * @param string $Uin 租户ID
     * @param string $InstanceID 实例ID
     * @param string $ID 凭据ID
     * @param string $Name 凭据名称
     * @param string $Status 状态
     * @param integer $RelateAgentAppNum 关联应用数
     * @param integer $RelateMcpServerNum 关联mcp数
     * @param integer $RelateModelNum 关联模型数
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentCredentialContentDTO $Content 凭据内容
     * @param string $CreateTime 创建时间
     * @param string $LastUpdateTime 修改时间
     * @param string $Type 类型
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("RelateAgentAppNum",$param) and $param["RelateAgentAppNum"] !== null) {
            $this->RelateAgentAppNum = $param["RelateAgentAppNum"];
        }

        if (array_key_exists("RelateMcpServerNum",$param) and $param["RelateMcpServerNum"] !== null) {
            $this->RelateMcpServerNum = $param["RelateMcpServerNum"];
        }

        if (array_key_exists("RelateModelNum",$param) and $param["RelateModelNum"] !== null) {
            $this->RelateModelNum = $param["RelateModelNum"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = new AgentCredentialContentDTO();
            $this->Content->deserialize($param["Content"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
