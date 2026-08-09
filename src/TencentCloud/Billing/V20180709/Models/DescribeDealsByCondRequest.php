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
 * DescribeDealsByCond请求参数结构体
 *
 * @method string getStartTime() 获取<p>开始时间 2016-01-01 00:00:00</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间 2016-01-01 00:00:00</p>
 * @method string getEndTime() 获取<p>结束时间 2016-02-01 00:00:00 建议跨度不超过3个月</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间 2016-02-01 00:00:00 建议跨度不超过3个月</p>
 * @method integer getLimit() 获取<p>一页多少条数据，默认是20条，最大不超过1000</p>
 * @method void setLimit(integer $Limit) 设置<p>一页多少条数据，默认是20条，最大不超过1000</p>
 * @method integer getOffset() 获取<p>第多少页，从0开始，默认是0</p>
 * @method void setOffset(integer $Offset) 设置<p>第多少页，从0开始，默认是0</p>
 * @method integer getStatus() 获取<p>订单状态</p><p>枚举值：</p><ul><li>1：  待支付</li><li>2：  已支付</li><li>3：  发货中</li><li>4：  已发货</li><li>5：  发货失败</li><li>6：  已退款</li><li>7：  已取消</li><li>8：  订单过期</li><li>9 ：  订单已失效</li><li>10：  产品已失效</li><li>11：  代付拒绝</li><li>12：  支付中</li><li>13：  退款中</li><li>30：  服务市场订单待用户确认完成</li></ul><p>默认值：4（已发货，成功的订单）</p><p>其中，状态2、3、5、12、13、30 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>统一显示“处理中”；<br>状态4 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中显示交易成功；<br>状态9、10 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中无对应状态</p>
 * @method void setStatus(integer $Status) 设置<p>订单状态</p><p>枚举值：</p><ul><li>1：  待支付</li><li>2：  已支付</li><li>3：  发货中</li><li>4：  已发货</li><li>5：  发货失败</li><li>6：  已退款</li><li>7：  已取消</li><li>8：  订单过期</li><li>9 ：  订单已失效</li><li>10：  产品已失效</li><li>11：  代付拒绝</li><li>12：  支付中</li><li>13：  退款中</li><li>30：  服务市场订单待用户确认完成</li></ul><p>默认值：4（已发货，成功的订单）</p><p>其中，状态2、3、5、12、13、30 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>统一显示“处理中”；<br>状态4 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中显示交易成功；<br>状态9、10 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中无对应状态</p>
 * @method string getOrderId() 获取<p>子订单号</p>
 * @method void setOrderId(string $OrderId) 设置<p>子订单号</p>
 * @method string getBigDealId() 获取<p>大订单号</p>
 * @method void setBigDealId(string $BigDealId) 设置<p>大订单号</p>
 * @method string getResourceId() 获取<p>资源id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
 * @method array getStatusSet() 获取<p>订单状态</p>
 * @method void setStatusSet(array $StatusSet) 设置<p>订单状态</p>
 */
class DescribeDealsByCondRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间 2016-01-01 00:00:00</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间 2016-02-01 00:00:00 建议跨度不超过3个月</p>
     */
    public $EndTime;

    /**
     * @var integer <p>一页多少条数据，默认是20条，最大不超过1000</p>
     */
    public $Limit;

    /**
     * @var integer <p>第多少页，从0开始，默认是0</p>
     */
    public $Offset;

    /**
     * @var integer <p>订单状态</p><p>枚举值：</p><ul><li>1：  待支付</li><li>2：  已支付</li><li>3：  发货中</li><li>4：  已发货</li><li>5：  发货失败</li><li>6：  已退款</li><li>7：  已取消</li><li>8：  订单过期</li><li>9 ：  订单已失效</li><li>10：  产品已失效</li><li>11：  代付拒绝</li><li>12：  支付中</li><li>13：  退款中</li><li>30：  服务市场订单待用户确认完成</li></ul><p>默认值：4（已发货，成功的订单）</p><p>其中，状态2、3、5、12、13、30 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>统一显示“处理中”；<br>状态4 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中显示交易成功；<br>状态9、10 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中无对应状态</p>
     */
    public $Status;

    /**
     * @var string <p>子订单号</p>
     */
    public $OrderId;

    /**
     * @var string <p>大订单号</p>
     */
    public $BigDealId;

    /**
     * @var string <p>资源id</p>
     */
    public $ResourceId;

    /**
     * @var array <p>订单状态</p>
     */
    public $StatusSet;

    /**
     * @param string $StartTime <p>开始时间 2016-01-01 00:00:00</p>
     * @param string $EndTime <p>结束时间 2016-02-01 00:00:00 建议跨度不超过3个月</p>
     * @param integer $Limit <p>一页多少条数据，默认是20条，最大不超过1000</p>
     * @param integer $Offset <p>第多少页，从0开始，默认是0</p>
     * @param integer $Status <p>订单状态</p><p>枚举值：</p><ul><li>1：  待支付</li><li>2：  已支付</li><li>3：  发货中</li><li>4：  已发货</li><li>5：  发货失败</li><li>6：  已退款</li><li>7：  已取消</li><li>8：  订单过期</li><li>9 ：  订单已失效</li><li>10：  产品已失效</li><li>11：  代付拒绝</li><li>12：  支付中</li><li>13：  退款中</li><li>30：  服务市场订单待用户确认完成</li></ul><p>默认值：4（已发货，成功的订单）</p><p>其中，状态2、3、5、12、13、30 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>统一显示“处理中”；<br>状态4 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中显示交易成功；<br>状态9、10 在<a href="https://console.cloud.tencent.com/expense/deal">控制台</a>中无对应状态</p>
     * @param string $OrderId <p>子订单号</p>
     * @param string $BigDealId <p>大订单号</p>
     * @param string $ResourceId <p>资源id</p>
     * @param array $StatusSet <p>订单状态</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OrderId",$param) and $param["OrderId"] !== null) {
            $this->OrderId = $param["OrderId"];
        }

        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }
    }
}
