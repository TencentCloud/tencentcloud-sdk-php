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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAppStatisticsOverview请求参数结构体
 *
 * @method integer getAppType() 获取<p>应用类型。可选值：APP_TYPE_RAG（RAG）、APP_TYPE_WORKFLOW（Workflow）、APP_TYPE_CLAW（Claw）、APP_TYPE_MULTIAGENT（MultiAgent）；本期仅 APP_TYPE_RAG 生效，其余为预留值，传入将返回 InvalidParameter</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG（本期唯一支持）</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow（预留，暂不支持）</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw（预留，暂不支持）</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent（预留，暂不支持）</td></tr></tbody></table>
 * @method void setAppType(integer $AppType) 设置<p>应用类型。可选值：APP_TYPE_RAG（RAG）、APP_TYPE_WORKFLOW（Workflow）、APP_TYPE_CLAW（Claw）、APP_TYPE_MULTIAGENT（MultiAgent）；本期仅 APP_TYPE_RAG 生效，其余为预留值，传入将返回 InvalidParameter</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG（本期唯一支持）</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow（预留，暂不支持）</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw（预留，暂不支持）</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent（预留，暂不支持）</td></tr></tbody></table>
 * @method TimeRange getTimeRange() 获取<p>查询时间范围（Unix 秒）</p>
 * @method void setTimeRange(TimeRange $TimeRange) 设置<p>查询时间范围（Unix 秒）</p>
 * @method ViewScope getViewScope() 获取<p>视图范围：应用视图（VIEW_TYPE_APP），scope_id 填应用 ID（uint64 雪花 ID 的十进制字符串）</p>
 * @method void setViewScope(ViewScope $ViewScope) 设置<p>视图范围：应用视图（VIEW_TYPE_APP），scope_id 填应用 ID（uint64 雪花 ID 的十进制字符串）</p>
 * @method string getSpaceId() 获取<p>空间 ID</p><p>参数格式：<p>空间 ID</p></p><p>默认值：default_space</p>
 * @method void setSpaceId(string $SpaceId) 设置<p>空间 ID</p><p>参数格式：<p>空间 ID</p></p><p>默认值：default_space</p>
 * @method string getAppId() 获取<p>应用 ID</p><p>参数格式：</p><p>应用 ID</p><p></p><p>参考值：2099767969573745984</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p><p>参数格式：</p><p>应用 ID</p><p></p><p>参考值：2099767969573745984</p>
 * @method array getFilterList() 获取<p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：space_id（空间 ID）、channel_type（调用方式/渠道类型，取值参考 trpc.adp.common.v2.ChannelType 枚举名）；channel_type 不传时按全部渠道聚合</p>
 * @method void setFilterList(array $FilterList) 设置<p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：space_id（空间 ID）、channel_type（调用方式/渠道类型，取值参考 trpc.adp.common.v2.ChannelType 枚举名）；channel_type 不传时按全部渠道聚合</p>
 */
class DescribeAppStatisticsOverviewRequest extends AbstractModel
{
    /**
     * @var integer <p>应用类型。可选值：APP_TYPE_RAG（RAG）、APP_TYPE_WORKFLOW（Workflow）、APP_TYPE_CLAW（Claw）、APP_TYPE_MULTIAGENT（MultiAgent）；本期仅 APP_TYPE_RAG 生效，其余为预留值，传入将返回 InvalidParameter</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG（本期唯一支持）</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow（预留，暂不支持）</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw（预留，暂不支持）</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent（预留，暂不支持）</td></tr></tbody></table>
     */
    public $AppType;

    /**
     * @var TimeRange <p>查询时间范围（Unix 秒）</p>
     */
    public $TimeRange;

    /**
     * @var ViewScope <p>视图范围：应用视图（VIEW_TYPE_APP），scope_id 填应用 ID（uint64 雪花 ID 的十进制字符串）</p>
     */
    public $ViewScope;

    /**
     * @var string <p>空间 ID</p><p>参数格式：<p>空间 ID</p></p><p>默认值：default_space</p>
     */
    public $SpaceId;

    /**
     * @var string <p>应用 ID</p><p>参数格式：</p><p>应用 ID</p><p></p><p>参考值：2099767969573745984</p>
     */
    public $AppId;

    /**
     * @var array <p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：space_id（空间 ID）、channel_type（调用方式/渠道类型，取值参考 trpc.adp.common.v2.ChannelType 枚举名）；channel_type 不传时按全部渠道聚合</p>
     */
    public $FilterList;

    /**
     * @param integer $AppType <p>应用类型。可选值：APP_TYPE_RAG（RAG）、APP_TYPE_WORKFLOW（Workflow）、APP_TYPE_CLAW（Claw）、APP_TYPE_MULTIAGENT（MultiAgent）；本期仅 APP_TYPE_RAG 生效，其余为预留值，传入将返回 InvalidParameter</p><table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>APP_TYPE_UNSPECIFIED</td><td>0</td><td>未指定（无效值，请求勿传）</td></tr><tr><td>APP_TYPE_RAG</td><td>1</td><td>RAG（本期唯一支持）</td></tr><tr><td>APP_TYPE_WORKFLOW</td><td>2</td><td>Workflow（预留，暂不支持）</td></tr><tr><td>APP_TYPE_CLAW</td><td>3</td><td>Claw（预留，暂不支持）</td></tr><tr><td>APP_TYPE_MULTIAGENT</td><td>4</td><td>MultiAgent（预留，暂不支持）</td></tr></tbody></table>
     * @param TimeRange $TimeRange <p>查询时间范围（Unix 秒）</p>
     * @param ViewScope $ViewScope <p>视图范围：应用视图（VIEW_TYPE_APP），scope_id 填应用 ID（uint64 雪花 ID 的十进制字符串）</p>
     * @param string $SpaceId <p>空间 ID</p><p>参数格式：<p>空间 ID</p></p><p>默认值：default_space</p>
     * @param string $AppId <p>应用 ID</p><p>参数格式：</p><p>应用 ID</p><p></p><p>参考值：2099767969573745984</p>
     * @param array $FilterList <p>扩展过滤。Filter 组合规则：多项 AND，同项 value_list OR。支持 Name：space_id（空间 ID）、channel_type（调用方式/渠道类型，取值参考 trpc.adp.common.v2.ChannelType 枚举名）；channel_type 不传时按全部渠道聚合</p>
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
        if (array_key_exists("AppType",$param) and $param["AppType"] !== null) {
            $this->AppType = $param["AppType"];
        }

        if (array_key_exists("TimeRange",$param) and $param["TimeRange"] !== null) {
            $this->TimeRange = new TimeRange();
            $this->TimeRange->deserialize($param["TimeRange"]);
        }

        if (array_key_exists("ViewScope",$param) and $param["ViewScope"] !== null) {
            $this->ViewScope = new ViewScope();
            $this->ViewScope->deserialize($param["ViewScope"]);
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }
    }
}
