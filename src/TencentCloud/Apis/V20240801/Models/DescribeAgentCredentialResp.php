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
 * @method integer getAppID() 获取<p>租户应用ID</p>
 * @method void setAppID(integer $AppID) 设置<p>租户应用ID</p>
 * @method string getUin() 获取<p>租户ID</p>
 * @method void setUin(string $Uin) 设置<p>租户ID</p>
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getID() 获取<p>凭据ID</p>
 * @method void setID(string $ID) 设置<p>凭据ID</p>
 * @method string getName() 获取<p>凭据名称</p>
 * @method void setName(string $Name) 设置<p>凭据名称</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method integer getRelateAgentAppNum() 获取<p>关联应用数</p>
 * @method void setRelateAgentAppNum(integer $RelateAgentAppNum) 设置<p>关联应用数</p>
 * @method integer getRelateMcpServerNum() 获取<p>关联mcp数</p>
 * @method void setRelateMcpServerNum(integer $RelateMcpServerNum) 设置<p>关联mcp数</p>
 * @method integer getRelateModelNum() 获取<p>关联模型数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelateModelNum(integer $RelateModelNum) 设置<p>关联模型数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRelateServiceNum() 获取<p>关联服务数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelateServiceNum(integer $RelateServiceNum) 设置<p>关联服务数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentCredentialContentDTO getContent() 获取<p>凭据内容</p>
 * @method void setContent(AgentCredentialContentDTO $Content) 设置<p>凭据内容</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getLastUpdateTime() 获取<p>修改时间</p>
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置<p>修改时间</p>
 * @method string getType() 获取<p>类型</p>
 * @method void setType(string $Type) 设置<p>类型</p>
 */
class DescribeAgentCredentialResp extends AbstractModel
{
    /**
     * @var integer <p>租户应用ID</p>
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
     * @var string <p>凭据ID</p>
     */
    public $ID;

    /**
     * @var string <p>凭据名称</p>
     */
    public $Name;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var integer <p>关联应用数</p>
     * @deprecated
     */
    public $RelateAgentAppNum;

    /**
     * @var integer <p>关联mcp数</p>
     */
    public $RelateMcpServerNum;

    /**
     * @var integer <p>关联模型数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelateModelNum;

    /**
     * @var integer <p>关联服务数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelateServiceNum;

    /**
     * @var AgentCredentialContentDTO <p>凭据内容</p>
     */
    public $Content;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $LastUpdateTime;

    /**
     * @var string <p>类型</p>
     */
    public $Type;

    /**
     * @param integer $AppID <p>租户应用ID</p>
     * @param string $Uin <p>租户ID</p>
     * @param string $InstanceID <p>实例ID</p>
     * @param string $ID <p>凭据ID</p>
     * @param string $Name <p>凭据名称</p>
     * @param string $Status <p>状态</p>
     * @param integer $RelateAgentAppNum <p>关联应用数</p>
     * @param integer $RelateMcpServerNum <p>关联mcp数</p>
     * @param integer $RelateModelNum <p>关联模型数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RelateServiceNum <p>关联服务数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentCredentialContentDTO $Content <p>凭据内容</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $LastUpdateTime <p>修改时间</p>
     * @param string $Type <p>类型</p>
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

        if (array_key_exists("RelateServiceNum",$param) and $param["RelateServiceNum"] !== null) {
            $this->RelateServiceNum = $param["RelateServiceNum"];
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
