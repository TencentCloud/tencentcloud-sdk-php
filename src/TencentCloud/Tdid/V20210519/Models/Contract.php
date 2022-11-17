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
 * 部署合约
 *
 * @method string getApplyName() 获取应用名
 * @method void setApplyName(string $ApplyName) 设置应用名
 * @method boolean getEnable() 获取合约状态 true:已启用 false:未启用
 * @method void setEnable(boolean $Enable) 设置合约状态 true:已启用 false:未启用
 * @method string getHash() 获取合约CNS地址
 * @method void setHash(string $Hash) 设置合约CNS地址
 * @method string getHashShow() 获取合约CNS地址脱敏
 * @method void setHashShow(string $HashShow) 设置合约CNS地址脱敏
 * @method string getWeId() 获取部署机构DID
 * @method void setWeId(string $WeId) 设置部署机构DID
 * @method string getDeployName() 获取部署机构名称
 * @method void setDeployName(string $DeployName) 设置部署机构名称
 * @method string getGroupId() 获取部署群组
 * @method void setGroupId(string $GroupId) 设置部署群组
 * @method string getCreateTime() 获取部署时间
 * @method void setCreateTime(string $CreateTime) 设置部署时间
 */
class Contract extends AbstractModel
{
    /**
     * @var string 应用名
     */
    public $ApplyName;

    /**
     * @var boolean 合约状态 true:已启用 false:未启用
     */
    public $Enable;

    /**
     * @var string 合约CNS地址
     */
    public $Hash;

    /**
     * @var string 合约CNS地址脱敏
     */
    public $HashShow;

    /**
     * @var string 部署机构DID
     */
    public $WeId;

    /**
     * @var string 部署机构名称
     */
    public $DeployName;

    /**
     * @var string 部署群组
     */
    public $GroupId;

    /**
     * @var string 部署时间
     */
    public $CreateTime;

    /**
     * @param string $ApplyName 应用名
     * @param boolean $Enable 合约状态 true:已启用 false:未启用
     * @param string $Hash 合约CNS地址
     * @param string $HashShow 合约CNS地址脱敏
     * @param string $WeId 部署机构DID
     * @param string $DeployName 部署机构名称
     * @param string $GroupId 部署群组
     * @param string $CreateTime 部署时间
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
        if (array_key_exists("ApplyName",$param) and $param["ApplyName"] !== null) {
            $this->ApplyName = $param["ApplyName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }

        if (array_key_exists("HashShow",$param) and $param["HashShow"] !== null) {
            $this->HashShow = $param["HashShow"];
        }

        if (array_key_exists("WeId",$param) and $param["WeId"] !== null) {
            $this->WeId = $param["WeId"];
        }

        if (array_key_exists("DeployName",$param) and $param["DeployName"] !== null) {
            $this->DeployName = $param["DeployName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
