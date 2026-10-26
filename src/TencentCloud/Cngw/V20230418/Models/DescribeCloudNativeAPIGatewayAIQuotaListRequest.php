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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudNativeAPIGatewayAIQuotaList请求参数结构体
 *
 * @method string getGatewayId() 获取<p>网关实例Id</p>
 * @method void setGatewayId(string $GatewayId) 设置<p>网关实例Id</p>
 * @method integer getOffset() 获取<p>开始位置</p>
 * @method void setOffset(integer $Offset) 设置<p>开始位置</p>
 * @method integer getLimit() 获取<p>每页数量</p>
 * @method void setLimit(integer $Limit) 设置<p>每页数量</p>
 * @method string getKeyword() 获取<p>关键字</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字</p>
 * @method array getFilters() 获取可选过滤条件，不同 Name 为 AND，同一 Values 为 OR。支持 ResourceType（单值 Consumer 或 ConsumerGroup，省略默认 Consumer）、ResourceId（资源 ID，1～100 项）、ConsumerId（仅 Consumer 可用）、Source（Manual / Default / DefaultPolicy）、QuotaId、QuotaType（RequestCount / TotalToken / Cost）、PeriodUnit（Day / Week / Month / Year / Unlimit）。Values 不得为空，QuotaId、QuotaType、PeriodUnit 各为 1～100 项。ConsumerGroup 使用 ResourceId，不使用 ConsumerId；不自动展开上下级。Source 省略时排除 DefaultPolicy。
 * @method void setFilters(array $Filters) 设置可选过滤条件，不同 Name 为 AND，同一 Values 为 OR。支持 ResourceType（单值 Consumer 或 ConsumerGroup，省略默认 Consumer）、ResourceId（资源 ID，1～100 项）、ConsumerId（仅 Consumer 可用）、Source（Manual / Default / DefaultPolicy）、QuotaId、QuotaType（RequestCount / TotalToken / Cost）、PeriodUnit（Day / Week / Month / Year / Unlimit）。Values 不得为空，QuotaId、QuotaType、PeriodUnit 各为 1～100 项。ConsumerGroup 使用 ResourceId，不使用 ConsumerId；不自动展开上下级。Source 省略时排除 DefaultPolicy。
 * @method array getAlarmLevels() 获取<p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
 * @method void setAlarmLevels(array $AlarmLevels) 设置<p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
 */
class DescribeCloudNativeAPIGatewayAIQuotaListRequest extends AbstractModel
{
    /**
     * @var string <p>网关实例Id</p>
     */
    public $GatewayId;

    /**
     * @var integer <p>开始位置</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页数量</p>
     */
    public $Limit;

    /**
     * @var string <p>关键字</p>
     */
    public $Keyword;

    /**
     * @var array 可选过滤条件，不同 Name 为 AND，同一 Values 为 OR。支持 ResourceType（单值 Consumer 或 ConsumerGroup，省略默认 Consumer）、ResourceId（资源 ID，1～100 项）、ConsumerId（仅 Consumer 可用）、Source（Manual / Default / DefaultPolicy）、QuotaId、QuotaType（RequestCount / TotalToken / Cost）、PeriodUnit（Day / Week / Month / Year / Unlimit）。Values 不得为空，QuotaId、QuotaType、PeriodUnit 各为 1～100 项。ConsumerGroup 使用 ResourceId，不使用 ConsumerId；不自动展开上下级。Source 省略时排除 DefaultPolicy。
     */
    public $Filters;

    /**
     * @var array <p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
     */
    public $AlarmLevels;

    /**
     * @param string $GatewayId <p>网关实例Id</p>
     * @param integer $Offset <p>开始位置</p>
     * @param integer $Limit <p>每页数量</p>
     * @param string $Keyword <p>关键字</p>
     * @param array $Filters 可选过滤条件，不同 Name 为 AND，同一 Values 为 OR。支持 ResourceType（单值 Consumer 或 ConsumerGroup，省略默认 Consumer）、ResourceId（资源 ID，1～100 项）、ConsumerId（仅 Consumer 可用）、Source（Manual / Default / DefaultPolicy）、QuotaId、QuotaType（RequestCount / TotalToken / Cost）、PeriodUnit（Day / Week / Month / Year / Unlimit）。Values 不得为空，QuotaId、QuotaType、PeriodUnit 各为 1～100 项。ConsumerGroup 使用 ResourceId，不使用 ConsumerId；不自动展开上下级。Source 省略时排除 DefaultPolicy。
     * @param array $AlarmLevels <p>配额预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("AlarmLevels",$param) and $param["AlarmLevels"] !== null) {
            $this->AlarmLevels = $param["AlarmLevels"];
        }
    }
}
