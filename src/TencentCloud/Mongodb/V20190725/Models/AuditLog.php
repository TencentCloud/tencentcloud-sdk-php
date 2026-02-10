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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志
 *
 * @method integer getAffectRows() 获取影响行数
 * @method void setAffectRows(integer $AffectRows) 设置影响行数
 * @method string getAtype() 获取操作类型。如：grantRolesToRole、dropRole等。
 * @method void setAtype(string $Atype) 设置操作类型。如：grantRolesToRole、dropRole等。
 * @method integer getExecTime() 获取执行时间。单位为：ms。
 * @method void setExecTime(integer $ExecTime) 设置执行时间。单位为：ms。
 * @method string getHost() 获取客户端地址。
 * @method void setHost(string $Host) 设置客户端地址。
 * @method string getParam() 获取操作参数。包含操作的详细参数信息。
 * @method void setParam(string $Param) 设置操作参数。包含操作的详细参数信息。
 * @method integer getResult() 获取执行结果。0表示成功，非0表示失败。
 * @method void setResult(integer $Result) 设置执行结果。0表示成功，非0表示失败。
 * @method string getRoles() 获取用户角色列表。格式为：role@db,role@db。
 * @method void setRoles(string $Roles) 设置用户角色列表。格式为：role@db,role@db。
 * @method string getTimestamp() 获取操作时间戳。格式为：YYYY-MM-DD HH:mm:ss。
 * @method void setTimestamp(string $Timestamp) 设置操作时间戳。格式为：YYYY-MM-DD HH:mm:ss。
 * @method string getUser() 获取用户名。格式为：user@db。
 * @method void setUser(string $User) 设置用户名。格式为：user@db。
 */
class AuditLog extends AbstractModel
{
    /**
     * @var integer 影响行数
     */
    public $AffectRows;

    /**
     * @var string 操作类型。如：grantRolesToRole、dropRole等。
     */
    public $Atype;

    /**
     * @var integer 执行时间。单位为：ms。
     */
    public $ExecTime;

    /**
     * @var string 客户端地址。
     */
    public $Host;

    /**
     * @var string 操作参数。包含操作的详细参数信息。
     */
    public $Param;

    /**
     * @var integer 执行结果。0表示成功，非0表示失败。
     */
    public $Result;

    /**
     * @var string 用户角色列表。格式为：role@db,role@db。
     */
    public $Roles;

    /**
     * @var string 操作时间戳。格式为：YYYY-MM-DD HH:mm:ss。
     */
    public $Timestamp;

    /**
     * @var string 用户名。格式为：user@db。
     */
    public $User;

    /**
     * @param integer $AffectRows 影响行数
     * @param string $Atype 操作类型。如：grantRolesToRole、dropRole等。
     * @param integer $ExecTime 执行时间。单位为：ms。
     * @param string $Host 客户端地址。
     * @param string $Param 操作参数。包含操作的详细参数信息。
     * @param integer $Result 执行结果。0表示成功，非0表示失败。
     * @param string $Roles 用户角色列表。格式为：role@db,role@db。
     * @param string $Timestamp 操作时间戳。格式为：YYYY-MM-DD HH:mm:ss。
     * @param string $User 用户名。格式为：user@db。
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
        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("Atype",$param) and $param["Atype"] !== null) {
            $this->Atype = $param["Atype"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Roles",$param) and $param["Roles"] !== null) {
            $this->Roles = $param["Roles"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }
    }
}
