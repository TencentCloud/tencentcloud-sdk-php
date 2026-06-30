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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListTargets请求参数结构体
 *
 * @method string getEventBusId() 获取<p>事件集ID</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集ID</p>
 * @method string getRuleId() 获取<p>事件规则ID</p>
 * @method void setRuleId(string $RuleId) 设置<p>事件规则ID</p>
 * @method string getOrderBy() 获取<p>根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认为0。</p>
 * @method string getOrder() 获取<p>以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）</p>
 * @method void setOrder(string $Order) 设置<p>以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）</p>
 */
class ListTargetsRequest extends AbstractModel
{
    /**
     * @var string <p>事件集ID</p>
     */
    public $EventBusId;

    /**
     * @var string <p>事件规则ID</p>
     */
    public $RuleId;

    /**
     * @var string <p>根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）</p>
     */
    public $OrderBy;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var string <p>以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）</p>
     */
    public $Order;

    /**
     * @param string $EventBusId <p>事件集ID</p>
     * @param string $RuleId <p>事件规则ID</p>
     * @param string $OrderBy <p>根据哪个字段进行返回结果排序,支持以下字段：AddTime（创建时间）, ModTime（修改时间）</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。</p>
     * @param integer $Offset <p>分页偏移量，默认为0。</p>
     * @param string $Order <p>以升序还是降序的方式返回结果，可选值 ASC（升序） 和 DESC（降序）</p>
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
        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
