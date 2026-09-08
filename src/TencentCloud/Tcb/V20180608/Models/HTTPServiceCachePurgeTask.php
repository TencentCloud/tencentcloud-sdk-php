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
 * 清除任务详情
 *
 * @method string getCacheType() 获取<p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO</li><li>TCBCDN： 云开发cdn</li></ul><p>默认值：EO</p>
 * @method void setCacheType(string $CacheType) 设置<p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO</li><li>TCBCDN： 云开发cdn</li></ul><p>默认值：EO</p>
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>TIMEOUT： 超时</li><li>CANCELED： 取消</li></ul>
 * @method void setStatus(string $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>TIMEOUT： 超时</li><li>CANCELED： 取消</li></ul>
 * @method string getPurgeType() 获取<p>刷新类型</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
 * @method void setPurgeType(string $PurgeType) 设置<p>刷新类型</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
 * @method string getMethod() 获取<p>清除缓存分为直接删除和标记过期两种方式。URL 类型默认为“直接删除”，其它清除类型默认为“标记过期”</p><p>枚举值：</p><ul><li>INVALIDATE： 标记过期：节点缓存标记为过期，用户请求时回源校验，源站 304 则复用，200 则更新</li><li>DELETE： 直接删除：从节点直接删除缓存，用户下次请求强制回源拉新</li></ul>
 * @method void setMethod(string $Method) 设置<p>清除缓存分为直接删除和标记过期两种方式。URL 类型默认为“直接删除”，其它清除类型默认为“标记过期”</p><p>枚举值：</p><ul><li>INVALIDATE： 标记过期：节点缓存标记为过期，用户请求时回源校验，源站 304 则复用，200 则更新</li><li>DELETE： 直接删除：从节点直接删除缓存，用户下次请求强制回源拉新</li></ul>
 * @method array getTargets() 获取<p>刷新目标列表（URL / 前缀 / host）</p>
 * @method void setTargets(array $Targets) 设置<p>刷新目标列表（URL / 前缀 / host）</p>
 * @method string getFailReason() 获取<p>失败原因</p>
 * @method void setFailReason(string $FailReason) 设置<p>失败原因</p>
 * @method string getCreateTime() 获取<p>任务创建时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 * @method string getUpdateTime() 获取<p>任务更新时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>任务更新时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 */
class HTTPServiceCachePurgeTask extends AbstractModel
{
    /**
     * @var string <p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO</li><li>TCBCDN： 云开发cdn</li></ul><p>默认值：EO</p>
     */
    public $CacheType;

    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>状态</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>TIMEOUT： 超时</li><li>CANCELED： 取消</li></ul>
     */
    public $Status;

    /**
     * @var string <p>刷新类型</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
     */
    public $PurgeType;

    /**
     * @var string <p>清除缓存分为直接删除和标记过期两种方式。URL 类型默认为“直接删除”，其它清除类型默认为“标记过期”</p><p>枚举值：</p><ul><li>INVALIDATE： 标记过期：节点缓存标记为过期，用户请求时回源校验，源站 304 则复用，200 则更新</li><li>DELETE： 直接删除：从节点直接删除缓存，用户下次请求强制回源拉新</li></ul>
     */
    public $Method;

    /**
     * @var array <p>刷新目标列表（URL / 前缀 / host）</p>
     */
    public $Targets;

    /**
     * @var string <p>失败原因</p>
     */
    public $FailReason;

    /**
     * @var string <p>任务创建时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务更新时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
     */
    public $UpdateTime;

    /**
     * @param string $CacheType <p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO</li><li>TCBCDN： 云开发cdn</li></ul><p>默认值：EO</p>
     * @param string $TaskId <p>任务id</p>
     * @param string $Status <p>状态</p><p>枚举值：</p><ul><li>PROCESSING： 处理中</li><li>SUCCESS： 成功</li><li>FAILED： 失败</li><li>TIMEOUT： 超时</li><li>CANCELED： 取消</li></ul>
     * @param string $PurgeType <p>刷新类型</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
     * @param string $Method <p>清除缓存分为直接删除和标记过期两种方式。URL 类型默认为“直接删除”，其它清除类型默认为“标记过期”</p><p>枚举值：</p><ul><li>INVALIDATE： 标记过期：节点缓存标记为过期，用户请求时回源校验，源站 304 则复用，200 则更新</li><li>DELETE： 直接删除：从节点直接删除缓存，用户下次请求强制回源拉新</li></ul>
     * @param array $Targets <p>刷新目标列表（URL / 前缀 / host）</p>
     * @param string $FailReason <p>失败原因</p>
     * @param string $CreateTime <p>任务创建时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
     * @param string $UpdateTime <p>任务更新时间</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
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
        if (array_key_exists("CacheType",$param) and $param["CacheType"] !== null) {
            $this->CacheType = $param["CacheType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("PurgeType",$param) and $param["PurgeType"] !== null) {
            $this->PurgeType = $param["PurgeType"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Targets",$param) and $param["Targets"] !== null) {
            $this->Targets = $param["Targets"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
