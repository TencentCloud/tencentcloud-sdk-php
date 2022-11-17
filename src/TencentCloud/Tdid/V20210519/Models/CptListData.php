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
 * cpt集合数据
 *
 * @method integer getId() 获取ID信息
 * @method void setId(integer $Id) 设置ID信息
 * @method string getName() 获取模版名称
 * @method void setName(string $Name) 设置模版名称
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method integer getServiceId() 获取服务ID
 * @method void setServiceId(integer $ServiceId) 设置服务ID
 * @method integer getContractAppId() 获取合约应用ID
 * @method void setContractAppId(integer $ContractAppId) 设置合约应用ID
 * @method integer getCptId() 获取凭证模板ID
 * @method void setCptId(integer $CptId) 设置凭证模板ID
 * @method integer getCptType() 获取模板类型，1: 系统模板，2: 用户模板，3:普通模板
 * @method void setCptType(integer $CptType) 设置模板类型，1: 系统模板，2: 用户模板，3:普通模板
 * @method string getDescription() 获取凭证模版描述
 * @method void setDescription(string $Description) 设置凭证模版描述
 * @method string getCptJson() 获取凭证模板Json
 * @method void setCptJson(string $CptJson) 设置凭证模板Json
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCreatorDid() 获取创建者DID
 * @method void setCreatorDid(string $CreatorDid) 设置创建者DID
 * @method string getAppName() 获取应用名称
 * @method void setAppName(string $AppName) 设置应用名称
 */
class CptListData extends AbstractModel
{
    /**
     * @var integer ID信息
     */
    public $Id;

    /**
     * @var string 模版名称
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
     * @var integer 凭证模板ID
     */
    public $CptId;

    /**
     * @var integer 模板类型，1: 系统模板，2: 用户模板，3:普通模板
     */
    public $CptType;

    /**
     * @var string 凭证模版描述
     */
    public $Description;

    /**
     * @var string 凭证模板Json
     */
    public $CptJson;

    /**
     * @var string 创建时间
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
     * @param integer $Id ID信息
     * @param string $Name 模版名称
     * @param string $ClusterId 网络ID
     * @param integer $GroupId 群组ID
     * @param integer $ServiceId 服务ID
     * @param integer $ContractAppId 合约应用ID
     * @param integer $CptId 凭证模板ID
     * @param integer $CptType 模板类型，1: 系统模板，2: 用户模板，3:普通模板
     * @param string $Description 凭证模版描述
     * @param string $CptJson 凭证模板Json
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $CreatorDid 创建者DID
     * @param string $AppName 应用名称
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

        if (array_key_exists("CptId",$param) and $param["CptId"] !== null) {
            $this->CptId = $param["CptId"];
        }

        if (array_key_exists("CptType",$param) and $param["CptType"] !== null) {
            $this->CptType = $param["CptType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CptJson",$param) and $param["CptJson"] !== null) {
            $this->CptJson = $param["CptJson"];
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
    }
}
