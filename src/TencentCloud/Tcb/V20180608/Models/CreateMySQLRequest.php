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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateMySQL请求参数结构体
 *
 * @method string getEnvId() 获取云开发环境ID
 * @method void setEnvId(string $EnvId) 设置云开发环境ID
 * @method string getDbInstanceType() 获取Db类型 1. FLEXDB 2.MYSQL
 * @method void setDbInstanceType(string $DbInstanceType) 设置Db类型 1. FLEXDB 2.MYSQL
 * @method string getMysqlVersion() 获取mysql版本
 * @method void setMysqlVersion(string $MysqlVersion) 设置mysql版本
 * @method string getVpcId() 获取vpc Id
 * @method void setVpcId(string $VpcId) 设置vpc Id
 * @method string getSubnetId() 获取子网ID
 * @method void setSubnetId(string $SubnetId) 设置子网ID
 * @method string getLowerCaseTableNames() 获取0 区分表名大小写；1 不区分表名大小写(默认)
 * @method void setLowerCaseTableNames(string $LowerCaseTableNames) 设置0 区分表名大小写；1 不区分表名大小写(默认)
 */
class CreateMySQLRequest extends AbstractModel
{
    /**
     * @var string 云开发环境ID
     */
    public $EnvId;

    /**
     * @var string Db类型 1. FLEXDB 2.MYSQL
     */
    public $DbInstanceType;

    /**
     * @var string mysql版本
     */
    public $MysqlVersion;

    /**
     * @var string vpc Id
     */
    public $VpcId;

    /**
     * @var string 子网ID
     */
    public $SubnetId;

    /**
     * @var string 0 区分表名大小写；1 不区分表名大小写(默认)
     */
    public $LowerCaseTableNames;

    /**
     * @param string $EnvId 云开发环境ID
     * @param string $DbInstanceType Db类型 1. FLEXDB 2.MYSQL
     * @param string $MysqlVersion mysql版本
     * @param string $VpcId vpc Id
     * @param string $SubnetId 子网ID
     * @param string $LowerCaseTableNames 0 区分表名大小写；1 不区分表名大小写(默认)
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("DbInstanceType",$param) and $param["DbInstanceType"] !== null) {
            $this->DbInstanceType = $param["DbInstanceType"];
        }

        if (array_key_exists("MysqlVersion",$param) and $param["MysqlVersion"] !== null) {
            $this->MysqlVersion = $param["MysqlVersion"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LowerCaseTableNames",$param) and $param["LowerCaseTableNames"] !== null) {
            $this->LowerCaseTableNames = $param["LowerCaseTableNames"];
        }
    }
}
