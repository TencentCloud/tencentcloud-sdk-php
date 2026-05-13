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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDspmAssetAccountPrivileges请求参数结构体
 *
 * @method string getAssetId() 获取实例id
 * @method void setAssetId(string $AssetId) 设置实例id
 * @method string getAccount() 获取账号名
 * @method void setAccount(string $Account) 设置账号名
 * @method DspmDbAccountPrivilege getPrivilege() 获取权限信息
 * @method void setPrivilege(DspmDbAccountPrivilege $Privilege) 设置权限信息
 * @method string getHost() 获取主机地址
 * @method void setHost(string $Host) 设置主机地址
 * @method string getRiskId() 获取风险id
 * @method void setRiskId(string $RiskId) 设置风险id
 */
class ModifyDspmAssetAccountPrivilegesRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $AssetId;

    /**
     * @var string 账号名
     */
    public $Account;

    /**
     * @var DspmDbAccountPrivilege 权限信息
     */
    public $Privilege;

    /**
     * @var string 主机地址
     */
    public $Host;

    /**
     * @var string 风险id
     */
    public $RiskId;

    /**
     * @param string $AssetId 实例id
     * @param string $Account 账号名
     * @param DspmDbAccountPrivilege $Privilege 权限信息
     * @param string $Host 主机地址
     * @param string $RiskId 风险id
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
        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("Privilege",$param) and $param["Privilege"] !== null) {
            $this->Privilege = new DspmDbAccountPrivilege();
            $this->Privilege->deserialize($param["Privilege"]);
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }
    }
}
