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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 审计日志查询过滤条件集合。所有字段均可选。注意：MultiSql 、 ExcludeMultiSql 以 JSON 字符串承载二维数组（云 API 平台不支持二维数组），示例：[[a,b]] 表示 (a OR b)。
 *
 * @method array getSqlType() 获取<p>SQL 类型列表，取值如 SELECT、INSERT、UPDATE、DELETE 等。</p>
 * @method void setSqlType(array $SqlType) 设置<p>SQL 类型列表，取值如 SELECT、INSERT、UPDATE、DELETE 等。</p>
 * @method array getExecTime() 获取<p>执行耗时范围（毫秒），长度为 2 的数组：[最小值, 最大值]。</p>
 * @method void setExecTime(array $ExecTime) 设置<p>执行耗时范围（毫秒），长度为 2 的数组：[最小值, 最大值]。</p>
 * @method array getIoWaitTime() 获取<p>IO 等待耗时范围（毫秒），长度为 2 的数组。</p>
 * @method void setIoWaitTime(array $IoWaitTime) 设置<p>IO 等待耗时范围（毫秒），长度为 2 的数组。</p>
 * @method array getCpuTime() 获取<p>CPU 耗时范围（毫秒），长度为 2 的数组。</p>
 * @method void setCpuTime(array $CpuTime) 设置<p>CPU 耗时范围（毫秒），长度为 2 的数组。</p>
 * @method array getLockWaitTime() 获取<p>锁等待耗时范围（毫秒），长度为 2 的数组。</p>
 * @method void setLockWaitTime(array $LockWaitTime) 设置<p>锁等待耗时范围（毫秒），长度为 2 的数组。</p>
 * @method string getErrCode() 获取<p>SQL 执行错误码，例如 0 表示成功。</p>
 * @method void setErrCode(string $ErrCode) 设置<p>SQL 执行错误码，例如 0 表示成功。</p>
 * @method string getErrInfo() 获取<p>错误信息。</p>
 * @method void setErrInfo(string $ErrInfo) 设置<p>错误信息。</p>
 * @method array getDBName() 获取<p>数据库名列表。</p>
 * @method void setDBName(array $DBName) 设置<p>数据库名列表。</p>
 * @method array getUser() 获取<p>用户名列表。</p>
 * @method void setUser(array $User) 设置<p>用户名列表。</p>
 * @method array getHost() 获取<p>来源 IP 列表。</p>
 * @method void setHost(array $Host) 设置<p>来源 IP 列表。</p>
 * @method array getThreadId() 获取<p>线程 ID 列表。</p>
 * @method void setThreadId(array $ThreadId) 设置<p>线程 ID 列表。</p>
 * @method array getProxyHostList() 获取<p>代理节点 Host 列表。</p>
 * @method void setProxyHostList(array $ProxyHostList) 设置<p>代理节点 Host 列表。</p>
 * @method array getSetHostList() 获取<p>后端 Set Host 列表。</p>
 * @method void setSetHostList(array $SetHostList) 设置<p>后端 Set Host 列表。</p>
 * @method array getSetIdList() 获取<p>后端 Set ID 列表。</p>
 * @method void setSetIdList(array $SetIdList) 设置<p>后端 Set ID 列表。</p>
 * @method string getMultiSql() 获取<p>多 SQL 关键词条件，JSON 字符串，内部为二维数组：第一级为 AND，第二级为 OR。注意云 API 平台不支持二维数组，此处用字符串承载，服务端自动解析。</p>
 * @method void setMultiSql(string $MultiSql) 设置<p>多 SQL 关键词条件，JSON 字符串，内部为二维数组：第一级为 AND，第二级为 OR。注意云 API 平台不支持二维数组，此处用字符串承载，服务端自动解析。</p>
 * @method string getExcludeMultiSql() 获取<p>排除的多 SQL 关键词条件，JSON 字符串，结构同 MultiSql。</p>
 * @method void setExcludeMultiSql(string $ExcludeMultiSql) 设置<p>排除的多 SQL 关键词条件，JSON 字符串，结构同 MultiSql。</p>
 * @method string getSqlTemplateId() 获取<p>SQL 模板 ID。</p>
 * @method void setSqlTemplateId(string $SqlTemplateId) 设置<p>SQL 模板 ID。</p>
 * @method string getSqlStartTime() 获取<p>SQL 开始时间，示例：2026-10-10 11:05:06.002211</p><p>参数格式：YYYY-MM-DD hh:mm:ss.SSSSSS</p>
 * @method void setSqlStartTime(string $SqlStartTime) 设置<p>SQL 开始时间，示例：2026-10-10 11:05:06.002211</p><p>参数格式：YYYY-MM-DD hh:mm:ss.SSSSSS</p>
 * @method string getQueryId() 获取<p>查询 ID，关联查询时使用（LogType=All 时必填）。</p>
 * @method void setQueryId(string $QueryId) 设置<p>查询 ID，关联查询时使用（LogType=All 时必填）。</p>
 */
class AuditLogQueryFilter extends AbstractModel
{
    /**
     * @var array <p>SQL 类型列表，取值如 SELECT、INSERT、UPDATE、DELETE 等。</p>
     */
    public $SqlType;

    /**
     * @var array <p>执行耗时范围（毫秒），长度为 2 的数组：[最小值, 最大值]。</p>
     */
    public $ExecTime;

    /**
     * @var array <p>IO 等待耗时范围（毫秒），长度为 2 的数组。</p>
     */
    public $IoWaitTime;

    /**
     * @var array <p>CPU 耗时范围（毫秒），长度为 2 的数组。</p>
     */
    public $CpuTime;

    /**
     * @var array <p>锁等待耗时范围（毫秒），长度为 2 的数组。</p>
     */
    public $LockWaitTime;

    /**
     * @var string <p>SQL 执行错误码，例如 0 表示成功。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>错误信息。</p>
     */
    public $ErrInfo;

    /**
     * @var array <p>数据库名列表。</p>
     */
    public $DBName;

    /**
     * @var array <p>用户名列表。</p>
     */
    public $User;

    /**
     * @var array <p>来源 IP 列表。</p>
     */
    public $Host;

    /**
     * @var array <p>线程 ID 列表。</p>
     */
    public $ThreadId;

    /**
     * @var array <p>代理节点 Host 列表。</p>
     */
    public $ProxyHostList;

    /**
     * @var array <p>后端 Set Host 列表。</p>
     */
    public $SetHostList;

    /**
     * @var array <p>后端 Set ID 列表。</p>
     */
    public $SetIdList;

    /**
     * @var string <p>多 SQL 关键词条件，JSON 字符串，内部为二维数组：第一级为 AND，第二级为 OR。注意云 API 平台不支持二维数组，此处用字符串承载，服务端自动解析。</p>
     */
    public $MultiSql;

    /**
     * @var string <p>排除的多 SQL 关键词条件，JSON 字符串，结构同 MultiSql。</p>
     */
    public $ExcludeMultiSql;

    /**
     * @var string <p>SQL 模板 ID。</p>
     */
    public $SqlTemplateId;

    /**
     * @var string <p>SQL 开始时间，示例：2026-10-10 11:05:06.002211</p><p>参数格式：YYYY-MM-DD hh:mm:ss.SSSSSS</p>
     */
    public $SqlStartTime;

    /**
     * @var string <p>查询 ID，关联查询时使用（LogType=All 时必填）。</p>
     */
    public $QueryId;

    /**
     * @param array $SqlType <p>SQL 类型列表，取值如 SELECT、INSERT、UPDATE、DELETE 等。</p>
     * @param array $ExecTime <p>执行耗时范围（毫秒），长度为 2 的数组：[最小值, 最大值]。</p>
     * @param array $IoWaitTime <p>IO 等待耗时范围（毫秒），长度为 2 的数组。</p>
     * @param array $CpuTime <p>CPU 耗时范围（毫秒），长度为 2 的数组。</p>
     * @param array $LockWaitTime <p>锁等待耗时范围（毫秒），长度为 2 的数组。</p>
     * @param string $ErrCode <p>SQL 执行错误码，例如 0 表示成功。</p>
     * @param string $ErrInfo <p>错误信息。</p>
     * @param array $DBName <p>数据库名列表。</p>
     * @param array $User <p>用户名列表。</p>
     * @param array $Host <p>来源 IP 列表。</p>
     * @param array $ThreadId <p>线程 ID 列表。</p>
     * @param array $ProxyHostList <p>代理节点 Host 列表。</p>
     * @param array $SetHostList <p>后端 Set Host 列表。</p>
     * @param array $SetIdList <p>后端 Set ID 列表。</p>
     * @param string $MultiSql <p>多 SQL 关键词条件，JSON 字符串，内部为二维数组：第一级为 AND，第二级为 OR。注意云 API 平台不支持二维数组，此处用字符串承载，服务端自动解析。</p>
     * @param string $ExcludeMultiSql <p>排除的多 SQL 关键词条件，JSON 字符串，结构同 MultiSql。</p>
     * @param string $SqlTemplateId <p>SQL 模板 ID。</p>
     * @param string $SqlStartTime <p>SQL 开始时间，示例：2026-10-10 11:05:06.002211</p><p>参数格式：YYYY-MM-DD hh:mm:ss.SSSSSS</p>
     * @param string $QueryId <p>查询 ID，关联查询时使用（LogType=All 时必填）。</p>
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
        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("ExecTime",$param) and $param["ExecTime"] !== null) {
            $this->ExecTime = $param["ExecTime"];
        }

        if (array_key_exists("IoWaitTime",$param) and $param["IoWaitTime"] !== null) {
            $this->IoWaitTime = $param["IoWaitTime"];
        }

        if (array_key_exists("CpuTime",$param) and $param["CpuTime"] !== null) {
            $this->CpuTime = $param["CpuTime"];
        }

        if (array_key_exists("LockWaitTime",$param) and $param["LockWaitTime"] !== null) {
            $this->LockWaitTime = $param["LockWaitTime"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrInfo",$param) and $param["ErrInfo"] !== null) {
            $this->ErrInfo = $param["ErrInfo"];
        }

        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("ThreadId",$param) and $param["ThreadId"] !== null) {
            $this->ThreadId = $param["ThreadId"];
        }

        if (array_key_exists("ProxyHostList",$param) and $param["ProxyHostList"] !== null) {
            $this->ProxyHostList = $param["ProxyHostList"];
        }

        if (array_key_exists("SetHostList",$param) and $param["SetHostList"] !== null) {
            $this->SetHostList = $param["SetHostList"];
        }

        if (array_key_exists("SetIdList",$param) and $param["SetIdList"] !== null) {
            $this->SetIdList = $param["SetIdList"];
        }

        if (array_key_exists("MultiSql",$param) and $param["MultiSql"] !== null) {
            $this->MultiSql = $param["MultiSql"];
        }

        if (array_key_exists("ExcludeMultiSql",$param) and $param["ExcludeMultiSql"] !== null) {
            $this->ExcludeMultiSql = $param["ExcludeMultiSql"];
        }

        if (array_key_exists("SqlTemplateId",$param) and $param["SqlTemplateId"] !== null) {
            $this->SqlTemplateId = $param["SqlTemplateId"];
        }

        if (array_key_exists("SqlStartTime",$param) and $param["SqlStartTime"] !== null) {
            $this->SqlStartTime = $param["SqlStartTime"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }
    }
}
