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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetUserList请求参数结构体
 *
 * @method string getQuuid() 获取查询指定Quuid主机的信息
 * @method void setQuuid(string $Quuid) 设置查询指定Quuid主机的信息
 * @method array getFilters() 获取过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Name - String - 是否必填：否 - 账户名（模糊匹配）</li>
<li>NameStrict - String - 是否必填：否 - 账户名（严格匹配）</li>
<li>Uid - uint64 - 是否必填：否 - Uid</li>
<li>Guid - uint64 - 是否必填：否 - Guid</li>
<li>LoginTimeStart - String - 是否必填：否 - 开始时间，如：2021-01-11</li>
<li>LoginTimeEnd - String - 是否必填：否 - 结束时间，如：2021-01-11</li>
<li>LoginType - uint64 - 是否必填：否 - 0-不可登录；1-只允许key登录；2只允许密码登录；3-允许key和密码 仅linux</li>
<li>OsType - String - 是否必填：否 - windows或linux</li>
<li>Status - uint64 - 是否必填：否 - 账号状态：0-禁用；1-启用</li>
<li>UserType - uint64 - 是否必填：否 - 账号类型：0访客用户，1标准用户，2管理员用户 仅windows</li>
<li>IsDomain - uint64 - 是否必填：否 - 是否域账号：0 不是，1是 仅windows
<li>IsRoot - uint64 - 是否必填：否 - 是否Root权限：0 不是，1是 仅linux
<li>IsSudo - uint64 - 是否必填：否 - 是否Sudo权限：0 不是，1是 仅linux</li>
<li>IsSshLogin - uint64 - 是否必填：否 - 是否ssh登录：0 不是，1是 仅linux</li>
<li>ShellLoginStatus - uint64 - 是否必填：否 - 是否shell登录性，0不是；1是 仅linux</li>
<li>PasswordStatus - uint64 - 是否必填：否 - 密码状态：1正常 2即将过期 3已过期 4已锁定 仅linux</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
 * @method void setFilters(array $Filters) 设置过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Name - String - 是否必填：否 - 账户名（模糊匹配）</li>
<li>NameStrict - String - 是否必填：否 - 账户名（严格匹配）</li>
<li>Uid - uint64 - 是否必填：否 - Uid</li>
<li>Guid - uint64 - 是否必填：否 - Guid</li>
<li>LoginTimeStart - String - 是否必填：否 - 开始时间，如：2021-01-11</li>
<li>LoginTimeEnd - String - 是否必填：否 - 结束时间，如：2021-01-11</li>
<li>LoginType - uint64 - 是否必填：否 - 0-不可登录；1-只允许key登录；2只允许密码登录；3-允许key和密码 仅linux</li>
<li>OsType - String - 是否必填：否 - windows或linux</li>
<li>Status - uint64 - 是否必填：否 - 账号状态：0-禁用；1-启用</li>
<li>UserType - uint64 - 是否必填：否 - 账号类型：0访客用户，1标准用户，2管理员用户 仅windows</li>
<li>IsDomain - uint64 - 是否必填：否 - 是否域账号：0 不是，1是 仅windows
<li>IsRoot - uint64 - 是否必填：否 - 是否Root权限：0 不是，1是 仅linux
<li>IsSudo - uint64 - 是否必填：否 - 是否Sudo权限：0 不是，1是 仅linux</li>
<li>IsSshLogin - uint64 - 是否必填：否 - 是否ssh登录：0 不是，1是 仅linux</li>
<li>ShellLoginStatus - uint64 - 是否必填：否 - 是否shell登录性，0不是；1是 仅linux</li>
<li>PasswordStatus - uint64 - 是否必填：否 - 密码状态：1正常 2即将过期 3已过期 4已锁定 仅linux</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method string getOrder() 获取排序方式，asc升序 或 desc降序
 * @method void setOrder(string $Order) 设置排序方式，asc升序 或 desc降序
 * @method string getBy() 获取可选排序：[FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime]
PasswordLockDays
 * @method void setBy(string $By) 设置可选排序：[FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime]
PasswordLockDays
 */
class DescribeAssetUserListRequest extends AbstractModel
{
    /**
     * @var string 查询指定Quuid主机的信息
     */
    public $Quuid;

    /**
     * @var array 过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Name - String - 是否必填：否 - 账户名（模糊匹配）</li>
<li>NameStrict - String - 是否必填：否 - 账户名（严格匹配）</li>
<li>Uid - uint64 - 是否必填：否 - Uid</li>
<li>Guid - uint64 - 是否必填：否 - Guid</li>
<li>LoginTimeStart - String - 是否必填：否 - 开始时间，如：2021-01-11</li>
<li>LoginTimeEnd - String - 是否必填：否 - 结束时间，如：2021-01-11</li>
<li>LoginType - uint64 - 是否必填：否 - 0-不可登录；1-只允许key登录；2只允许密码登录；3-允许key和密码 仅linux</li>
<li>OsType - String - 是否必填：否 - windows或linux</li>
<li>Status - uint64 - 是否必填：否 - 账号状态：0-禁用；1-启用</li>
<li>UserType - uint64 - 是否必填：否 - 账号类型：0访客用户，1标准用户，2管理员用户 仅windows</li>
<li>IsDomain - uint64 - 是否必填：否 - 是否域账号：0 不是，1是 仅windows
<li>IsRoot - uint64 - 是否必填：否 - 是否Root权限：0 不是，1是 仅linux
<li>IsSudo - uint64 - 是否必填：否 - 是否Sudo权限：0 不是，1是 仅linux</li>
<li>IsSshLogin - uint64 - 是否必填：否 - 是否ssh登录：0 不是，1是 仅linux</li>
<li>ShellLoginStatus - uint64 - 是否必填：否 - 是否shell登录性，0不是；1是 仅linux</li>
<li>PasswordStatus - uint64 - 是否必填：否 - 密码状态：1正常 2即将过期 3已过期 4已锁定 仅linux</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
     */
    public $Filters;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序方式，asc升序 或 desc降序
     */
    public $Order;

    /**
     * @var string 可选排序：[FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime]
PasswordLockDays
     */
    public $By;

    /**
     * @param string $Quuid 查询指定Quuid主机的信息
     * @param array $Filters 过滤条件。
<li>IpOrAlias - String - 是否必填：否 - 主机ip或别名筛选</li>
<li>Name - String - 是否必填：否 - 账户名（模糊匹配）</li>
<li>NameStrict - String - 是否必填：否 - 账户名（严格匹配）</li>
<li>Uid - uint64 - 是否必填：否 - Uid</li>
<li>Guid - uint64 - 是否必填：否 - Guid</li>
<li>LoginTimeStart - String - 是否必填：否 - 开始时间，如：2021-01-11</li>
<li>LoginTimeEnd - String - 是否必填：否 - 结束时间，如：2021-01-11</li>
<li>LoginType - uint64 - 是否必填：否 - 0-不可登录；1-只允许key登录；2只允许密码登录；3-允许key和密码 仅linux</li>
<li>OsType - String - 是否必填：否 - windows或linux</li>
<li>Status - uint64 - 是否必填：否 - 账号状态：0-禁用；1-启用</li>
<li>UserType - uint64 - 是否必填：否 - 账号类型：0访客用户，1标准用户，2管理员用户 仅windows</li>
<li>IsDomain - uint64 - 是否必填：否 - 是否域账号：0 不是，1是 仅windows
<li>IsRoot - uint64 - 是否必填：否 - 是否Root权限：0 不是，1是 仅linux
<li>IsSudo - uint64 - 是否必填：否 - 是否Sudo权限：0 不是，1是 仅linux</li>
<li>IsSshLogin - uint64 - 是否必填：否 - 是否ssh登录：0 不是，1是 仅linux</li>
<li>ShellLoginStatus - uint64 - 是否必填：否 - 是否shell登录性，0不是；1是 仅linux</li>
<li>PasswordStatus - uint64 - 是否必填：否 - 密码状态：1正常 2即将过期 3已过期 4已锁定 仅linux</li>
<li>Os -String 是否必填: 否 - 操作系统( DescribeMachineOsList 接口 值 )</li>
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100
     * @param integer $Offset 偏移量，默认为0。
     * @param string $Order 排序方式，asc升序 或 desc降序
     * @param string $By 可选排序：[FirstTime|LoginTime|PasswordChangeTime|PasswordDuaTime]
PasswordLockDays
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
        if (array_key_exists("Quuid",$param) and $param["Quuid"] !== null) {
            $this->Quuid = $param["Quuid"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }
    }
}
