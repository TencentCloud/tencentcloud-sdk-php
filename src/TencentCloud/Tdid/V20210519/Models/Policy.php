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
 * 策略管理
 *
 * @method integer getId() 获取披露策略索引
 * @method void setId(integer $Id) 设置披露策略索引
 * @method string getName() 获取披露策略名称
 * @method void setName(string $Name) 设置披露策略名称
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method integer getServiceId() 获取服务ID
 * @method void setServiceId(integer $ServiceId) 设置服务ID
 * @method integer getContractAppId() 获取合约应用ID
 * @method void setContractAppId(integer $ContractAppId) 设置合约应用ID
 * @method integer getPolicyId() 获取披露策略ID
 * @method void setPolicyId(integer $PolicyId) 设置披露策略ID
 * @method integer getCptId() 获取凭证模板ID
 * @method void setCptId(integer $CptId) 设置凭证模板ID
 * @method string getPolicyJson() 获取策略Json
 * @method void setPolicyJson(string $PolicyJson) 设置策略Json
 * @method string getCreateTime() 获取生成时间
 * @method void setCreateTime(string $CreateTime) 设置生成时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreatorDid() 获取创建者DID
 * @method void setCreatorDid(string $CreatorDid) 设置创建者DID
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 * @method integer getCptIndex() 获取模板索引
 * @method void setCptIndex(integer $CptIndex) 设置模板索引
 */
class Policy extends AbstractModel
{
    /**
     * @var integer 披露策略索引
     */
    public $Id;

    /**
     * @var string 披露策略名称
     */
    public $Name;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var integer 服务ID
     */
    public $ServiceId;

    /**
     * @var integer 合约应用ID
     */
    public $ContractAppId;

    /**
     * @var integer 披露策略ID
     */
    public $PolicyId;

    /**
     * @var integer 凭证模板ID
     */
    public $CptId;

    /**
     * @var string 策略Json
     */
    public $PolicyJson;

    /**
     * @var string 生成时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 创建者DID
     */
    public $CreatorDid;

    /**
     * @var string 应用名称
     */
    public $AppName;

    /**
     * @var integer 模板索引
     */
    public $CptIndex;

    /**
     * @param integer $Id 披露策略索引
     * @param string $Name 披露策略名称
     * @param string $ClusterId 网络ID
     * @param integer $GroupId 群组ID
     * @param integer $ServiceId 服务ID
     * @param integer $ContractAppId 合约应用ID
     * @param integer $PolicyId 披露策略ID
     * @param integer $CptId 凭证模板ID
     * @param string $PolicyJson 策略Json
     * @param string $CreateTime 生成时间
     * @param string $UpdateTime 更新时间
     * @param string $CreatorDid 创建者DID
     * @param string $AppName 应用名称
     * @param integer $CptIndex 模板索引
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ContractAppId",$param) and $param["ContractAppId"] !== null) {
            $this->ContractAppId = $param["ContractAppId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }

        if (array_key_exists("PolicyJson",$param) and $param["PolicyJson"] !== null) {
            $this->PolicyJson = $param["PolicyJson"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CreatorDid",$param) and $param["CreatorDid"] !== null) {
            $this->CreatorDid = $param["CreatorDid"];
        }

        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("CptIndex",$param) and $param["CptIndex"] !== null) {
            $this->CptIndex = $param["CptIndex"];
        }
    }
}
