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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 权威机构
 *
 * @method integer getId() 获取权威机构ID
 * @method void setId(integer $Id) 设置权威机构ID
 * @method integer getDidId() 获取Did的ID
 * @method void setDidId(integer $DidId) 设置Did的ID
 * @method string getDid() 获取DID具体信息
 * @method void setDid(string $Did) 设置DID具体信息
 * @method string getName() 获取机构名称
 * @method void setName(string $Name) 设置机构名称
 * @method integer getStatus() 获取权威认证 1:已认证，2:未认证
 * @method void setStatus(integer $Status) 设置权威认证 1:已认证，2:未认证
 * @method integer getDidServiceId() 获取DID服务ID
 * @method void setDidServiceId(integer $DidServiceId) 设置DID服务ID
 * @method integer getContractAppId() 获取应用ID
 * @method void setContractAppId(integer $ContractAppId) 设置应用ID
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getRegisterTime() 获取注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterTime(string $RegisterTime) 设置注册时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRecognizeTime() 获取认证时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecognizeTime(string $RecognizeTime) 设置认证时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取生成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置生成时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getAppName() 获取合约名称
 * @method void setAppName(string $AppName) 设置合约名称
 * @method string getLabelName() 获取链上标签
 * @method void setLabelName(string $LabelName) 设置链上标签
 */
class Authority extends AbstractModel
{
    /**
     * @var integer 权威机构ID
     */
    public $Id;

    /**
     * @var integer Did的ID
     */
    public $DidId;

    /**
     * @var string DID具体信息
     */
    public $Did;

    /**
     * @var string 机构名称
     */
    public $Name;

    /**
     * @var integer 权威认证 1:已认证，2:未认证
     */
    public $Status;

    /**
     * @var integer DID服务ID
     */
    public $DidServiceId;

    /**
     * @var integer 应用ID
     */
    public $ContractAppId;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 注册时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterTime;

    /**
     * @var string 认证时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecognizeTime;

    /**
     * @var string 生成时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 合约名称
     */
    public $AppName;

    /**
     * @var string 链上标签
     */
    public $LabelName;

    /**
     * @param integer $Id 权威机构ID
     * @param integer $DidId Did的ID
     * @param string $Did DID具体信息
     * @param string $Name 机构名称
     * @param integer $Status 权威认证 1:已认证，2:未认证
     * @param integer $DidServiceId DID服务ID
     * @param integer $ContractAppId 应用ID
     * @param string $Remark 备注
     * @param string $RegisterTime 注册时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RecognizeTime 认证时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 生成时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId 网络ID
     * @param integer $GroupId 群组ID
     * @param string $AppName 合约名称
     * @param string $LabelName 链上标签
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

        if (array_key_exists("DidId",$param) and $param["DidId"] !== null) {
            $this->DidId = $param["DidId"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DidServiceId",$param) and $param["DidServiceId"] !== null) {
            $this->DidServiceId = $param["DidServiceId"];
        }

        if (array_key_exists("ContractAppId",$param) and $param["ContractAppId"] !== null) {
            $this->ContractAppId = $param["ContractAppId"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("RecognizeTime",$param) and $param["RecognizeTime"] !== null) {
            $this->RecognizeTime = $param["RecognizeTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }
    }
}
