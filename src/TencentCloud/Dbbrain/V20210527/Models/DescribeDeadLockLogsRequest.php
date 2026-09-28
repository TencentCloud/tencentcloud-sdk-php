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
 * DescribeDeadLockLogs请求参数结构体
 *
 * @method string getProduct() 获取<p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
 * @method string getInstanceId() 获取<p>实例 ID。SQLServer: mssql-xxxx。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID。SQLServer: mssql-xxxx。</p>
 * @method string getStartTime() 获取<p>查询开始时间，格式 yyyy-MM-dd HH:mm:ss，按 UTC+8 解析；也兼容带偏移的 ISO-8601（如 2026-09-16T00:00:00+08:00）。半开区间左闭。</p><p>参数格式：2026-09-16 00:00:00</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间，格式 yyyy-MM-dd HH:mm:ss，按 UTC+8 解析；也兼容带偏移的 ISO-8601（如 2026-09-16T00:00:00+08:00）。半开区间左闭。</p><p>参数格式：2026-09-16 00:00:00</p>
 * @method string getEndTime() 获取<p>查询结束时间，格式同 StartTime。EndTime 必须大于 StartTime，且总查询窗口不超过 24 小时。半开区间右开。</p><p>参数格式：2026-09-16 23:59:59</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间，格式同 StartTime。EndTime 必须大于 StartTime，且总查询窗口不超过 24 小时。半开区间右开。</p><p>参数格式：2026-09-16 23:59:59</p>
 * @method integer getOffset() 获取<p>分页偏移量，非负整数，默认 0。当 Offset&gt;0 时必须同时传入 ResultVersion，否则报 INVALID_PARAMETER。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，非负整数，默认 0。当 Offset&gt;0 时必须同时传入 ResultVersion，否则报 INVALID_PARAMETER。</p>
 * @method integer getLimit() 获取<p>单页返回死锁事件数量，范围 [1, 100]。默认 20。</p>
 * @method void setLimit(integer $Limit) 设置<p>单页返回死锁事件数量，范围 [1, 100]。默认 20。</p>
 * @method boolean getIncludeXml() 获取<p>是否在响应中包含原始死锁图 XML（XmlReport）。默认 false，避免响应体过大。仅在需要绘制完整死锁环时置 true。</p>
 * @method void setIncludeXml(boolean $IncludeXml) 设置<p>是否在响应中包含原始死锁图 XML（XmlReport）。默认 false，避免响应体过大。仅在需要绘制完整死锁环时置 true。</p>
 * @method string getResultVersion() 获取<p>结果集版本号，最大 128 字符。首次查询无需传入；翻页时必须透传首次响应中的 ResultVersion，服务端会校验结果集是否发生变化，变化时返回 RESULT_CHANGED 提示重新拉取首页。</p>
 * @method void setResultVersion(string $ResultVersion) 设置<p>结果集版本号，最大 128 字符。首次查询无需传入；翻页时必须透传首次响应中的 ResultVersion，服务端会校验结果集是否发生变化，变化时返回 RESULT_CHANGED 提示重新拉取首页。</p>
 */
class DescribeDeadLockLogsRequest extends AbstractModel
{
    /**
     * @var string <p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
     */
    public $Product;

    /**
     * @var string <p>实例 ID。SQLServer: mssql-xxxx。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>查询开始时间，格式 yyyy-MM-dd HH:mm:ss，按 UTC+8 解析；也兼容带偏移的 ISO-8601（如 2026-09-16T00:00:00+08:00）。半开区间左闭。</p><p>参数格式：2026-09-16 00:00:00</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间，格式同 StartTime。EndTime 必须大于 StartTime，且总查询窗口不超过 24 小时。半开区间右开。</p><p>参数格式：2026-09-16 23:59:59</p>
     */
    public $EndTime;

    /**
     * @var integer <p>分页偏移量，非负整数，默认 0。当 Offset&gt;0 时必须同时传入 ResultVersion，否则报 INVALID_PARAMETER。</p>
     */
    public $Offset;

    /**
     * @var integer <p>单页返回死锁事件数量，范围 [1, 100]。默认 20。</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否在响应中包含原始死锁图 XML（XmlReport）。默认 false，避免响应体过大。仅在需要绘制完整死锁环时置 true。</p>
     */
    public $IncludeXml;

    /**
     * @var string <p>结果集版本号，最大 128 字符。首次查询无需传入；翻页时必须透传首次响应中的 ResultVersion，服务端会校验结果集是否发生变化，变化时返回 RESULT_CHANGED 提示重新拉取首页。</p>
     */
    public $ResultVersion;

    /**
     * @param string $Product <p>服务产品类型。取值：sqlserver（云数据库 Sqlserver）。</p>
     * @param string $InstanceId <p>实例 ID。SQLServer: mssql-xxxx。</p>
     * @param string $StartTime <p>查询开始时间，格式 yyyy-MM-dd HH:mm:ss，按 UTC+8 解析；也兼容带偏移的 ISO-8601（如 2026-09-16T00:00:00+08:00）。半开区间左闭。</p><p>参数格式：2026-09-16 00:00:00</p>
     * @param string $EndTime <p>查询结束时间，格式同 StartTime。EndTime 必须大于 StartTime，且总查询窗口不超过 24 小时。半开区间右开。</p><p>参数格式：2026-09-16 23:59:59</p>
     * @param integer $Offset <p>分页偏移量，非负整数，默认 0。当 Offset&gt;0 时必须同时传入 ResultVersion，否则报 INVALID_PARAMETER。</p>
     * @param integer $Limit <p>单页返回死锁事件数量，范围 [1, 100]。默认 20。</p>
     * @param boolean $IncludeXml <p>是否在响应中包含原始死锁图 XML（XmlReport）。默认 false，避免响应体过大。仅在需要绘制完整死锁环时置 true。</p>
     * @param string $ResultVersion <p>结果集版本号，最大 128 字符。首次查询无需传入；翻页时必须透传首次响应中的 ResultVersion，服务端会校验结果集是否发生变化，变化时返回 RESULT_CHANGED 提示重新拉取首页。</p>
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
        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
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

        if (array_key_exists("IncludeXml",$param) and $param["IncludeXml"] !== null) {
            $this->IncludeXml = $param["IncludeXml"];
        }

        if (array_key_exists("ResultVersion",$param) and $param["ResultVersion"] !== null) {
            $this->ResultVersion = $param["ResultVersion"];
        }
    }
}
