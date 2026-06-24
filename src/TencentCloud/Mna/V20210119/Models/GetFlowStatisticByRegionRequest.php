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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetFlowStatisticByRegion请求参数结构体
 *
 * @method integer getBeginTime() 获取<p>开始查找时间</p>
 * @method void setBeginTime(integer $BeginTime) 设置<p>开始查找时间</p>
 * @method integer getEndTime() 获取<p>截止时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>截止时间</p>
 * @method integer getType() 获取<p>流量种类（1：上行流量，2：下行流量， 3: 上下行总和）</p>
 * @method void setType(integer $Type) 设置<p>流量种类（1：上行流量，2：下行流量， 3: 上下行总和）</p>
 * @method integer getTimeGranularity() 获取<p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
 * @method void setTimeGranularity(integer $TimeGranularity) 设置<p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
 * @method integer getGatewayType() 获取<p>网关类型。0：公有云网关；1：自有网关。</p>
 * @method void setGatewayType(integer $GatewayType) 设置<p>网关类型。0：公有云网关；1：自有网关。</p>
 * @method string getAccessRegion() 获取<p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
 * @method void setAccessRegion(string $AccessRegion) 设置<p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
 */
class GetFlowStatisticByRegionRequest extends AbstractModel
{
    /**
     * @var integer <p>开始查找时间</p>
     */
    public $BeginTime;

    /**
     * @var integer <p>截止时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>流量种类（1：上行流量，2：下行流量， 3: 上下行总和）</p>
     */
    public $Type;

    /**
     * @var integer <p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
     */
    public $TimeGranularity;

    /**
     * @var integer <p>网关类型。0：公有云网关；1：自有网关。</p>
     */
    public $GatewayType;

    /**
     * @var string <p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
     */
    public $AccessRegion;

    /**
     * @param integer $BeginTime <p>开始查找时间</p>
     * @param integer $EndTime <p>截止时间</p>
     * @param integer $Type <p>流量种类（1：上行流量，2：下行流量， 3: 上下行总和）</p>
     * @param integer $TimeGranularity <p>时间粒度</p><p>枚举值：</p><ul><li>1： 按小时统计</li><li>2： 按天统计</li><li>3： 按分钟统计</li><li>4： 按5分钟统计</li></ul>
     * @param integer $GatewayType <p>网关类型。0：公有云网关；1：自有网关。</p>
     * @param string $AccessRegion <p>接入区域。取值范围：[&#39;MC&#39;,&#39;AP&#39;,&#39;EU&#39;,&#39;AM&#39;] MC=中国大陆 AP=亚太 EU=欧洲 AM=美洲。不填代表全量区域。</p>
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TimeGranularity",$param) and $param["TimeGranularity"] !== null) {
            $this->TimeGranularity = $param["TimeGranularity"];
        }

        if (array_key_exists("GatewayType",$param) and $param["GatewayType"] !== null) {
            $this->GatewayType = $param["GatewayType"];
        }

        if (array_key_exists("AccessRegion",$param) and $param["AccessRegion"] !== null) {
            $this->AccessRegion = $param["AccessRegion"];
        }
    }
}
