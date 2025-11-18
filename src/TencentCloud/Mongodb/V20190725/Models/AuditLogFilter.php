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
 * 审计日志过滤条件
 *
 * @method array getHost() 获取客户端地址。
 * @method void setHost(array $Host) 设置客户端地址。
 * @method array getUser() 获取用户名。
 * @method void setUser(array $User) 设置用户名。
 * @method integer getExecTime() 获取执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
 * @method void setExecTime(integer $ExecTime) 设置执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
 * @method integer getAffectRows() 获取影响行数。表示筛选影响行数大于该值的审计日志。
 * @method void setAffectRows(integer $AffectRows) 设置影响行数。表示筛选影响行数大于该值的审计日志。
 * @method array getAtype() 获取操作类型。
 * @method void setAtype(array $Atype) 设置操作类型。
 * @method array getResult() 获取执行结果。
 * @method void setResult(array $Result) 设置执行结果。
 * @method array getParam() 获取根据此关键字过滤日志
 * @method void setParam(array $Param) 设置根据此关键字过滤日志
 */
class AuditLogFilter extends AbstractModel
{
    /**
     * @var array 客户端地址。
     */
    public $Host;

    /**
     * @var array 用户名。
     */
    public $User;

    /**
     * @var integer 执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
     */
    public $ExecTime;

    /**
     * @var integer 影响行数。表示筛选影响行数大于该值的审计日志。
     */
    public $AffectRows;

    /**
     * @var array 操作类型。
     */
    public $Atype;

    /**
     * @var array 执行结果。
     */
    public $Result;

    /**
     * @var array 根据此关键字过滤日志
     */
    public $Param;

    /**
     * @param array $Host 客户端地址。
     * @param array $User 用户名。
     * @param integer $ExecTime 执行时间。单位为：ms。表示筛选执行时间大于该值的审计日志。
     * @param integer $AffectRows 影响行数。表示筛选影响行数大于该值的审计日志。
     * @param array $Atype 操作类型。
     * @param array $Result 执行结果。
     * @param array $Param 根据此关键字过滤日志
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
        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("AffectRows",$param) and $param["AffectRows"] !== null) {
            $this->AffectRows = $param["AffectRows"];
        }

        if (array_key_exists("Atype",$param) and $param["Atype"] !== null) {
            $this->Atype = $param["Atype"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Param",$param) and $param["Param"] !== null) {
            $this->Param = $param["Param"];
        }
    }
}
