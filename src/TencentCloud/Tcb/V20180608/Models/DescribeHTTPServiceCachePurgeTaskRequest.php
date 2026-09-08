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
 * DescribeHTTPServiceCachePurgeTask请求参数结构体
 *
 * @method string getEnvId() 获取<p>环境ID</p>
 * @method void setEnvId(string $EnvId) 设置<p>环境ID</p>
 * @method string getDomain() 获取<p>HTTPService域名</p>
 * @method void setDomain(string $Domain) 设置<p>HTTPService域名</p>
 * @method string getCacheType() 获取<p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
 * @method void setCacheType(string $CacheType) 设置<p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
 * @method string getTaskId() 获取<p>任务id，PurgeHTTPServiceCache返回的TaskId，可选</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id，PurgeHTTPServiceCache返回的TaskId，可选</p>
 * @method string getPurgeType() 获取<p>按刷新类型过滤</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
 * @method void setPurgeType(string $PurgeType) 设置<p>按刷新类型过滤</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
 * @method string getStartTime() 获取<p>查询开始时间，TaskId为空时，默认开始时间是7天前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间，TaskId为空时，默认开始时间是7天前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 * @method string getEndTime() 获取<p>查询结束时间，TaskId为空时，默认结束时间是当前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，TaskId为空时，默认结束时间是当前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
 * @method integer getOffset() 获取<p>分页偏移量。默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量。默认 0</p>
 * @method integer getLimit() 获取<p>分页限制。默认20，最大值1000</p>
 * @method void setLimit(integer $Limit) 设置<p>分页限制。默认20，最大值1000</p>
 */
class DescribeHTTPServiceCachePurgeTaskRequest extends AbstractModel
{
    /**
     * @var string <p>环境ID</p>
     */
    public $EnvId;

    /**
     * @var string <p>HTTPService域名</p>
     */
    public $Domain;

    /**
     * @var string <p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
     */
    public $CacheType;

    /**
     * @var string <p>任务id，PurgeHTTPServiceCache返回的TaskId，可选</p>
     */
    public $TaskId;

    /**
     * @var string <p>按刷新类型过滤</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
     */
    public $PurgeType;

    /**
     * @var string <p>查询开始时间，TaskId为空时，默认开始时间是7天前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，TaskId为空时，默认结束时间是当前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页偏移量。默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页限制。默认20，最大值1000</p>
     */
    public $Limit;

    /**
     * @param string $EnvId <p>环境ID</p>
     * @param string $Domain <p>HTTPService域名</p>
     * @param string $CacheType <p>缓存类型</p><p>枚举值：</p><ul><li>EO： EO缓存</li><li>CDN： CDN缓存</li></ul><p>默认值：EO</p>
     * @param string $TaskId <p>任务id，PurgeHTTPServiceCache返回的TaskId，可选</p>
     * @param string $PurgeType <p>按刷新类型过滤</p><p>枚举值：</p><ul><li>PURGE_URL： URL 刷新</li><li>PURGE_PREFIX： 目录刷新</li><li>PURGE_HOST： Hostname 刷新</li></ul>
     * @param string $StartTime <p>查询开始时间，TaskId为空时，默认开始时间是7天前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
     * @param string $EndTime <p>查询结束时间，TaskId为空时，默认结束时间是当前</p><p>参数格式：格式 YYYY-MM-DDTHH:mm:ss±HH:mmZ，时区为 UTC+0</p>
     * @param integer $Offset <p>分页偏移量。默认 0</p>
     * @param integer $Limit <p>分页限制。默认20，最大值1000</p>
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

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CacheType",$param) and $param["CacheType"] !== null) {
            $this->CacheType = $param["CacheType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("PurgeType",$param) and $param["PurgeType"] !== null) {
            $this->PurgeType = $param["PurgeType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
