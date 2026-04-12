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
 * DescribeIssuesStatisticsTrend请求参数结构体
 *
 * @method string getProductId() 获取产品Id
 * @method void setProductId(string $ProductId) 设置产品Id
 * @method string getParamToken() 获取提供给前端使用，当填写本字段时，会覆盖 form_list 的值
 * @method void setParamToken(string $ParamToken) 设置提供给前端使用，当填写本字段时，会覆盖 form_list 的值
 * @method string getFormList() 获取接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method void setFormList(string $FormList) 设置接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
 * @method string getIssueId() 获取问题Id
 * @method void setIssueId(string $IssueId) 设置问题Id
 * @method integer getIssueType() 获取问题类型
 * @method void setIssueType(integer $IssueType) 设置问题类型
 * @method integer getTimeWindow() 获取时间窗口
 * @method void setTimeWindow(integer $TimeWindow) 设置时间窗口
 * @method boolean getTotalSize() 获取累计值
 * @method void setTotalSize(boolean $TotalSize) 设置累计值
 * @method integer getStat() 获取无
 * @method void setStat(integer $Stat) 设置无
 * @method integer getMetricType() 获取指标类型
 * @method void setMetricType(integer $MetricType) 设置指标类型
 * @method string getExtraData() 获取拓展字段
 * @method void setExtraData(string $ExtraData) 设置拓展字段
 * @method string getRequestHeader() 获取请求头
 * @method void setRequestHeader(string $RequestHeader) 设置请求头
 * @method integer getTrendStat() 获取无
 * @method void setTrendStat(integer $TrendStat) 设置无
 */
class DescribeIssuesStatisticsTrendRequest extends AbstractModel
{
    /**
     * @var string 产品Id
     */
    public $ProductId;

    /**
     * @var string 提供给前端使用，当填写本字段时，会覆盖 form_list 的值
     */
    public $ParamToken;

    /**
     * @var string 接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
     */
    public $FormList;

    /**
     * @var string 问题Id
     */
    public $IssueId;

    /**
     * @var integer 问题类型
     */
    public $IssueType;

    /**
     * @var integer 时间窗口
     */
    public $TimeWindow;

    /**
     * @var boolean 累计值
     */
    public $TotalSize;

    /**
     * @var integer 无
     */
    public $Stat;

    /**
     * @var integer 指标类型
     */
    public $MetricType;

    /**
     * @var string 拓展字段
     */
    public $ExtraData;

    /**
     * @var string 请求头
     */
    public $RequestHeader;

    /**
     * @var integer 无
     */
    public $TrendStat;

    /**
     * @param string $ProductId 产品Id
     * @param string $ParamToken 提供给前端使用，当填写本字段时，会覆盖 form_list 的值
     * @param string $FormList 接口调试专用，当 token 为空时，以这里的 value 作为筛选表单信息
     * @param string $IssueId 问题Id
     * @param integer $IssueType 问题类型
     * @param integer $TimeWindow 时间窗口
     * @param boolean $TotalSize 累计值
     * @param integer $Stat 无
     * @param integer $MetricType 指标类型
     * @param string $ExtraData 拓展字段
     * @param string $RequestHeader 请求头
     * @param integer $TrendStat 无
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ParamToken",$param) and $param["ParamToken"] !== null) {
            $this->ParamToken = $param["ParamToken"];
        }

        if (array_key_exists("FormList",$param) and $param["FormList"] !== null) {
            $this->FormList = $param["FormList"];
        }

        if (array_key_exists("IssueId",$param) and $param["IssueId"] !== null) {
            $this->IssueId = $param["IssueId"];
        }

        if (array_key_exists("IssueType",$param) and $param["IssueType"] !== null) {
            $this->IssueType = $param["IssueType"];
        }

        if (array_key_exists("TimeWindow",$param) and $param["TimeWindow"] !== null) {
            $this->TimeWindow = $param["TimeWindow"];
        }

        if (array_key_exists("TotalSize",$param) and $param["TotalSize"] !== null) {
            $this->TotalSize = $param["TotalSize"];
        }

        if (array_key_exists("Stat",$param) and $param["Stat"] !== null) {
            $this->Stat = $param["Stat"];
        }

        if (array_key_exists("MetricType",$param) and $param["MetricType"] !== null) {
            $this->MetricType = $param["MetricType"];
        }

        if (array_key_exists("ExtraData",$param) and $param["ExtraData"] !== null) {
            $this->ExtraData = $param["ExtraData"];
        }

        if (array_key_exists("RequestHeader",$param) and $param["RequestHeader"] !== null) {
            $this->RequestHeader = $param["RequestHeader"];
        }

        if (array_key_exists("TrendStat",$param) and $param["TrendStat"] !== null) {
            $this->TrendStat = $param["TrendStat"];
        }
    }
}
