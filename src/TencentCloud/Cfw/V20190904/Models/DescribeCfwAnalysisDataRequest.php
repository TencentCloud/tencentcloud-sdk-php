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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwAnalysisData请求参数结构体
 *
 * @method string getScenario() 获取<p>分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。</p>
 * @method void setScenario(string $Scenario) 设置<p>分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。</p>
 * @method string getStartTime() 获取<p>查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。</p>
 * @method void setStartTime(string $StartTime) 设置<p>查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。</p>
 * @method string getEndTime() 获取<p>查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。</p>
 * @method void setEndTime(string $EndTime) 设置<p>查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。</p>
 * @method string getObjectType() 获取<p>分析对象类型。可选，默认 user；user 表示租户全局，asset 表示单个资产，vpc 表示 VPC，domain 表示域名。</p>
 * @method void setObjectType(string $ObjectType) 设置<p>分析对象类型。可选，默认 user；user 表示租户全局，asset 表示单个资产，vpc 表示 VPC，domain 表示域名。</p>
 * @method string getObjectId() 获取<p>分析对象标识。ObjectType 为 asset、vpc 或 domain 时按需传入，可填写 IP、实例 ID、VPC ID 或域名。</p>
 * @method void setObjectId(string $ObjectId) 设置<p>分析对象标识。ObjectType 为 asset、vpc 或 domain 时按需传入，可填写 IP、实例 ID、VPC ID 或域名。</p>
 * @method string getTarget() 获取<p>排障目标。可选，主要用于 access_troubleshoot 场景，可填写 IP 或域名。</p>
 * @method void setTarget(string $Target) 设置<p>排障目标。可选，主要用于 access_troubleshoot 场景，可填写 IP 或域名。</p>
 * @method array getSkipSections() 获取<p>需要跳过的分析段名称列表。可选；不传时执行该场景全部分析段。</p>
 * @method void setSkipSections(array $SkipSections) 设置<p>需要跳过的分析段名称列表。可选；不传时执行该场景全部分析段。</p>
 */
class DescribeCfwAnalysisDataRequest extends AbstractModel
{
    /**
     * @var string <p>分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。</p>
     */
    public $Scenario;

    /**
     * @var string <p>查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。</p>
     */
    public $StartTime;

    /**
     * @var string <p>查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。</p>
     */
    public $EndTime;

    /**
     * @var string <p>分析对象类型。可选，默认 user；user 表示租户全局，asset 表示单个资产，vpc 表示 VPC，domain 表示域名。</p>
     */
    public $ObjectType;

    /**
     * @var string <p>分析对象标识。ObjectType 为 asset、vpc 或 domain 时按需传入，可填写 IP、实例 ID、VPC ID 或域名。</p>
     */
    public $ObjectId;

    /**
     * @var string <p>排障目标。可选，主要用于 access_troubleshoot 场景，可填写 IP 或域名。</p>
     */
    public $Target;

    /**
     * @var array <p>需要跳过的分析段名称列表。可选；不传时执行该场景全部分析段。</p>
     */
    public $SkipSections;

    /**
     * @param string $Scenario <p>分析场景。必填。full_traffic 表示全流量深度分析；east_west 表示东西向流量分析；alert_comprehensive 表示告警综合分析；asset_exposure 表示资产暴露面分析；access_troubleshoot 表示访问阻断排障分析。</p>
     * @param string $StartTime <p>查询开始时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认查询最近 7 天。</p>
     * @param string $EndTime <p>查询结束时间。可选，格式 YYYY-MM-DD HH:MM:SS；不传时默认当前时间。</p>
     * @param string $ObjectType <p>分析对象类型。可选，默认 user；user 表示租户全局，asset 表示单个资产，vpc 表示 VPC，domain 表示域名。</p>
     * @param string $ObjectId <p>分析对象标识。ObjectType 为 asset、vpc 或 domain 时按需传入，可填写 IP、实例 ID、VPC ID 或域名。</p>
     * @param string $Target <p>排障目标。可选，主要用于 access_troubleshoot 场景，可填写 IP 或域名。</p>
     * @param array $SkipSections <p>需要跳过的分析段名称列表。可选；不传时执行该场景全部分析段。</p>
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
        if (array_key_exists("Scenario",$param) and $param["Scenario"] !== null) {
            $this->Scenario = $param["Scenario"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ObjectType",$param) and $param["ObjectType"] !== null) {
            $this->ObjectType = $param["ObjectType"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("SkipSections",$param) and $param["SkipSections"] !== null) {
            $this->SkipSections = $param["SkipSections"];
        }
    }
}
