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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMSSEDimensions请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID。这里是业务应用标识，不是腾讯云账号 AppId。</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID。这里是业务应用标识，不是腾讯云账号 AppId。</p>
 * @method integer getStartTime() 获取<p>开始时间，Unix 毫秒。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间，Unix 毫秒。</p>
 * @method integer getEndTime() 获取<p>结束时间，Unix 毫秒。须通过现有时间范围校验。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间，Unix 毫秒。须通过现有时间范围校验。</p>
 * @method string getMetric() 获取<p>指标。取值说明：token_throughput（token 吞吐率，token/秒）、first_message_delay（首次消息时延，毫秒）、error_rate（错误率，已乘 100 的百分比）、stall_rate（卡死率，已乘 100 的百分比）、fluency（流畅度，已乘 100 的百分比）。</p>
 * @method void setMetric(string $Metric) 设置<p>指标。取值说明：token_throughput（token 吞吐率，token/秒）、first_message_delay（首次消息时延，毫秒）、error_rate（错误率，已乘 100 的百分比）、stall_rate（卡死率，已乘 100 的百分比）、fluency（流畅度，已乘 100 的百分比）。</p>
 * @method string getDimension() 获取<p>多维分析维度。取值说明：region、app_version、platform、os、network_type、server_ip、isp、model_version。region 由 country 与 province 拼接，不属于趋势维度。</p>
 * @method void setDimension(string $Dimension) 设置<p>多维分析维度。取值说明：region、app_version、platform、os、network_type、server_ip、isp、model_version。region 由 country 与 province 拼接，不属于趋势维度。</p>
 * @method string getFilters() 获取<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。Op 只允许 in。Key 只允许 model_version、app_version、platform、os、region、is_error、is_stall、network_type、server_ip、isp、user_id。is_error 与 is_stall 的值只允许 true 或 false。</p>
 * @method void setFilters(string $Filters) 设置<p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。Op 只允许 in。Key 只允许 model_version、app_version、platform、os、region、is_error、is_stall、network_type、server_ip、isp、user_id。is_error 与 is_stall 的值只允许 true 或 false。</p>
 */
class DescribeTDEMSSEDimensionsRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID。这里是业务应用标识，不是腾讯云账号 AppId。</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间，Unix 毫秒。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间，Unix 毫秒。须通过现有时间范围校验。</p>
     */
    public $EndTime;

    /**
     * @var string <p>指标。取值说明：token_throughput（token 吞吐率，token/秒）、first_message_delay（首次消息时延，毫秒）、error_rate（错误率，已乘 100 的百分比）、stall_rate（卡死率，已乘 100 的百分比）、fluency（流畅度，已乘 100 的百分比）。</p>
     */
    public $Metric;

    /**
     * @var string <p>多维分析维度。取值说明：region、app_version、platform、os、network_type、server_ip、isp、model_version。region 由 country 与 province 拼接，不属于趋势维度。</p>
     */
    public $Dimension;

    /**
     * @var string <p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。Op 只允许 in。Key 只允许 model_version、app_version、platform、os、region、is_error、is_stall、network_type、server_ip、isp、user_id。is_error 与 is_stall 的值只允许 true 或 false。</p>
     */
    public $Filters;

    /**
     * @param string $AppId <p>应用 ID。这里是业务应用标识，不是腾讯云账号 AppId。</p>
     * @param integer $StartTime <p>开始时间，Unix 毫秒。</p>
     * @param integer $EndTime <p>结束时间，Unix 毫秒。须通过现有时间范围校验。</p>
     * @param string $Metric <p>指标。取值说明：token_throughput（token 吞吐率，token/秒）、first_message_delay（首次消息时延，毫秒）、error_rate（错误率，已乘 100 的百分比）、stall_rate（卡死率，已乘 100 的百分比）、fluency（流畅度，已乘 100 的百分比）。</p>
     * @param string $Dimension <p>多维分析维度。取值说明：region、app_version、platform、os、network_type、server_ip、isp、model_version。region 由 country 与 province 拼接，不属于趋势维度。</p>
     * @param string $Filters <p>筛选条件 JSON 字符串，格式为 [{Key,Op,Values}]。Op 只允许 in。Key 只允许 model_version、app_version、platform、os、region、is_error、is_stall、network_type、server_ip、isp、user_id。is_error 与 is_stall 的值只允许 true 或 false。</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Metric",$param) and $param["Metric"] !== null) {
            $this->Metric = $param["Metric"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = $param["Filters"];
        }
    }
}
