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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostSummaryByResource请求参数结构体
 *
 * @method string getBeginTime() 获取<p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
 * @method void setBeginTime(string $BeginTime) 设置<p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
 * @method string getEndTime() 获取<p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
 * @method void setEndTime(string $EndTime) 设置<p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
 * @method integer getLimit() 获取<p>每次获取数据量，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>每次获取数据量，最大值为100</p>
 * @method integer getOffset() 获取<p>偏移量,默认从0开始</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量,默认从0开始</p>
 * @method string getPayerUin() 获取<p>查询账单数据的用户UIN</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>查询账单数据的用户UIN</p>
 * @method integer getNeedRecordNum() 获取<p>是否需要返回记录数量，0不需要，1需要，默认不需要</p>
 * @method void setNeedRecordNum(integer $NeedRecordNum) 设置<p>是否需要返回记录数量，0不需要，1需要，默认不需要</p>
 * @method integer getNeedConditionValue() 获取<p>是否需要返回过滤条件，0不需要，1需要，默认不需要</p>
 * @method void setNeedConditionValue(integer $NeedConditionValue) 设置<p>是否需要返回过滤条件，0不需要，1需要，默认不需要</p>
 * @method Conditions getConditions() 获取<p>过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）</p>
 * @method void setConditions(Conditions $Conditions) 设置<p>过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）</p>
 * @method string getTagKey() 获取<p>分账标签键，用户自定义</p>
 * @method void setTagKey(string $TagKey) 设置<p>分账标签键，用户自定义</p>
 * @method string getTagValue() 获取<p>分账标签值，该参数为空表示该标签键下未设置标签值的记录</p>
 * @method void setTagValue(string $TagValue) 设置<p>分账标签值，该参数为空表示该标签键下未设置标签值的记录</p>
 */
class DescribeCostSummaryByResourceRequest extends AbstractModel
{
    /**
     * @var string <p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
     */
    public $BeginTime;

    /**
     * @var string <p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
     */
    public $EndTime;

    /**
     * @var integer <p>每次获取数据量，最大值为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量,默认从0开始</p>
     */
    public $Offset;

    /**
     * @var string <p>查询账单数据的用户UIN</p>
     */
    public $PayerUin;

    /**
     * @var integer <p>是否需要返回记录数量，0不需要，1需要，默认不需要</p>
     */
    public $NeedRecordNum;

    /**
     * @var integer <p>是否需要返回过滤条件，0不需要，1需要，默认不需要</p>
     */
    public $NeedConditionValue;

    /**
     * @var Conditions <p>过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）</p>
     */
    public $Conditions;

    /**
     * @var string <p>分账标签键，用户自定义</p>
     */
    public $TagKey;

    /**
     * @var string <p>分账标签值，该参数为空表示该标签键下未设置标签值的记录</p>
     */
    public $TagValue;

    /**
     * @param string $BeginTime <p>目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
     * @param string $EndTime <p>目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2018-09，EndTime 为 2018-09，查询结果是 2018 年 9 月数据。</p>
     * @param integer $Limit <p>每次获取数据量，最大值为100</p>
     * @param integer $Offset <p>偏移量,默认从0开始</p>
     * @param string $PayerUin <p>查询账单数据的用户UIN</p>
     * @param integer $NeedRecordNum <p>是否需要返回记录数量，0不需要，1需要，默认不需要</p>
     * @param integer $NeedConditionValue <p>是否需要返回过滤条件，0不需要，1需要，默认不需要</p>
     * @param Conditions $Conditions <p>过滤条件，只支持ResourceKeyword(资源关键字，支持资源id及资源名称模糊查询)，ProjectIds（项目id），RegionIds(地域id)，PayModes(付费模式，可选prePay和postPay)，HideFreeCost（是否隐藏0元流水，可选0和1），OrderByCost（按费用排序规则，可选desc和asc）</p>
     * @param string $TagKey <p>分账标签键，用户自定义</p>
     * @param string $TagValue <p>分账标签值，该参数为空表示该标签键下未设置标签值的记录</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }

        if (array_key_exists("NeedRecordNum",$param) and $param["NeedRecordNum"] !== null) {
            $this->NeedRecordNum = $param["NeedRecordNum"];
        }

        if (array_key_exists("NeedConditionValue",$param) and $param["NeedConditionValue"] !== null) {
            $this->NeedConditionValue = $param["NeedConditionValue"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = new Conditions();
            $this->Conditions->deserialize($param["Conditions"]);
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("TagValue",$param) and $param["TagValue"] !== null) {
            $this->TagValue = $param["TagValue"];
        }
    }
}
