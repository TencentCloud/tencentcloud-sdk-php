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
 * DID服务基本信息
 *
 * @method integer getId() 获取DID服务索引
 * @method void setId(integer $Id) 设置DID服务索引
 * @method integer getAppid() 获取应用ID
 * @method void setAppid(integer $Appid) 设置应用ID
 * @method string getUin() 获取账号唯一标识
 * @method void setUin(string $Uin) 设置账号唯一标识
 * @method integer getConsortiumId() 获取联盟id
 * @method void setConsortiumId(integer $ConsortiumId) 设置联盟id
 * @method string getConsortiumName() 获取联盟名称
 * @method void setConsortiumName(string $ConsortiumName) 设置联盟名称
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getChainId() 获取链ID
 * @method void setChainId(string $ChainId) 设置链ID
 * @method integer getRoleType() 获取1为盟主，0为非盟主
 * @method void setRoleType(integer $RoleType) 设置1为盟主，0为非盟主
 * @method string getAgencyDid() 获取机构DID
 * @method void setAgencyDid(string $AgencyDid) 设置机构DID
 * @method string getCreateOrg() 获取机构名称
 * @method void setCreateOrg(string $CreateOrg) 设置机构名称
 * @method string getEndpoint() 获取端点
 * @method void setEndpoint(string $Endpoint) 设置端点
 * @method string getCreateTime() 获取生成时间
 * @method void setCreateTime(string $CreateTime) 设置生成时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getGroupName() 获取群组名称
 * @method void setGroupName(string $GroupName) 设置群组名称
 */
class DidServiceInfo extends AbstractModel
{
    /**
     * @var integer DID服务索引
     */
    public $Id;

    /**
     * @var integer 应用ID
     */
    public $Appid;

    /**
     * @var string 账号唯一标识
     */
    public $Uin;

    /**
     * @var integer 联盟id
     */
    public $ConsortiumId;

    /**
     * @var string 联盟名称
     */
    public $ConsortiumName;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 链ID
     */
    public $ChainId;

    /**
     * @var integer 1为盟主，0为非盟主
     */
    public $RoleType;

    /**
     * @var string 机构DID
     */
    public $AgencyDid;

    /**
     * @var string 机构名称
     */
    public $CreateOrg;

    /**
     * @var string 端点
     */
    public $Endpoint;

    /**
     * @var string 生成时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 群组名称
     */
    public $GroupName;

    /**
     * @param integer $Id DID服务索引
     * @param integer $Appid 应用ID
     * @param string $Uin 账号唯一标识
     * @param integer $ConsortiumId 联盟id
     * @param string $ConsortiumName 联盟名称
     * @param string $ClusterId 网络ID
     * @param integer $GroupId 群组ID
     * @param string $ChainId 链ID
     * @param integer $RoleType 1为盟主，0为非盟主
     * @param string $AgencyDid 机构DID
     * @param string $CreateOrg 机构名称
     * @param string $Endpoint 端点
     * @param string $CreateTime 生成时间
     * @param string $UpdateTime 更新时间
     * @param string $GroupName 群组名称
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

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("AgencyDid",$param) and $param["AgencyDid"] !== null) {
            $this->AgencyDid = $param["AgencyDid"];
        }

        if (array_key_exists("CreateOrg",$param) and $param["CreateOrg"] !== null) {
            $this->CreateOrg = $param["CreateOrg"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
