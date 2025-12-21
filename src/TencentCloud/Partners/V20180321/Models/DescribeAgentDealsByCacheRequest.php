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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentDealsByCache请求参数结构体
 *
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>限制数目 最大200</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数目 最大200</p>
 * @method string getCreatTimeRangeStart() 获取<p>下单时间范围起始点【*请必传并控制时间范围最大90天，避免出现超时】</p>
 * @method void setCreatTimeRangeStart(string $CreatTimeRangeStart) 设置<p>下单时间范围起始点【*请必传并控制时间范围最大90天，避免出现超时】</p>
 * @method string getCreatTimeRangeEnd() 获取<p>下单时间范围终止点【*请必传并控制时间范围最大90天，避免出现超时】</p>
 * @method void setCreatTimeRangeEnd(string $CreatTimeRangeEnd) 设置<p>下单时间范围终止点【*请必传并控制时间范围最大90天，避免出现超时】</p>
 * @method integer getOrder() 获取<p>0:下单时间降序；其他：下单时间升序</p>
 * @method void setOrder(integer $Order) 设置<p>0:下单时间降序；其他：下单时间升序</p>
 * @method integer getStatus() 获取<p>子订单状态(1-待支付,2-已支付,3-发货中,4-已发货,5-发货失败,6-已退款,7-已取消,8-已过期,9-已失效,12-支付中,13-退款中,30-处理中)</p><p>控制台订单状态为以上状态的组合：未支付(1) 处理中(2,3,5,12,13,30) 已取消(7) 交易成功(4) 已过期(8) 已退款(6) 订单错误(9)</p>
 * @method void setStatus(integer $Status) 设置<p>子订单状态(1-待支付,2-已支付,3-发货中,4-已发货,5-发货失败,6-已退款,7-已取消,8-已过期,9-已失效,12-支付中,13-退款中,30-处理中)</p><p>控制台订单状态为以上状态的组合：未支付(1) 处理中(2,3,5,12,13,30) 已取消(7) 交易成功(4) 已过期(8) 已退款(6) 订单错误(9)</p>
 * @method array getOwnerUins() 获取<p>下单人账号ID列表</p>
 * @method void setOwnerUins(array $OwnerUins) 设置<p>下单人账号ID列表</p>
 * @method array getDealNames() 获取<p>子订单号列表</p>
 * @method void setDealNames(array $DealNames) 设置<p>子订单号列表</p>
 * @method array getBigDealIds() 获取<p>大订单号列表</p>
 * @method void setBigDealIds(array $BigDealIds) 设置<p>大订单号列表</p>
 * @method integer getPayerMode() 获取<p>支付方式，0：自付；1：代付</p>
 * @method void setPayerMode(integer $PayerMode) 设置<p>支付方式，0：自付；1：代付</p>
 */
class DescribeAgentDealsByCacheRequest extends AbstractModel
{
    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制数目 最大200</p>
     */
    public $Limit;

    /**
     * @var string <p>下单时间范围起始点【*请必传并控制时间范围最大90天，避免出现超时】</p>
     */
    public $CreatTimeRangeStart;

    /**
     * @var string <p>下单时间范围终止点【*请必传并控制时间范围最大90天，避免出现超时】</p>
     */
    public $CreatTimeRangeEnd;

    /**
     * @var integer <p>0:下单时间降序；其他：下单时间升序</p>
     */
    public $Order;

    /**
     * @var integer <p>子订单状态(1-待支付,2-已支付,3-发货中,4-已发货,5-发货失败,6-已退款,7-已取消,8-已过期,9-已失效,12-支付中,13-退款中,30-处理中)</p><p>控制台订单状态为以上状态的组合：未支付(1) 处理中(2,3,5,12,13,30) 已取消(7) 交易成功(4) 已过期(8) 已退款(6) 订单错误(9)</p>
     */
    public $Status;

    /**
     * @var array <p>下单人账号ID列表</p>
     */
    public $OwnerUins;

    /**
     * @var array <p>子订单号列表</p>
     */
    public $DealNames;

    /**
     * @var array <p>大订单号列表</p>
     */
    public $BigDealIds;

    /**
     * @var integer <p>支付方式，0：自付；1：代付</p>
     */
    public $PayerMode;

    /**
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>限制数目 最大200</p>
     * @param string $CreatTimeRangeStart <p>下单时间范围起始点【*请必传并控制时间范围最大90天，避免出现超时】</p>
     * @param string $CreatTimeRangeEnd <p>下单时间范围终止点【*请必传并控制时间范围最大90天，避免出现超时】</p>
     * @param integer $Order <p>0:下单时间降序；其他：下单时间升序</p>
     * @param integer $Status <p>子订单状态(1-待支付,2-已支付,3-发货中,4-已发货,5-发货失败,6-已退款,7-已取消,8-已过期,9-已失效,12-支付中,13-退款中,30-处理中)</p><p>控制台订单状态为以上状态的组合：未支付(1) 处理中(2,3,5,12,13,30) 已取消(7) 交易成功(4) 已过期(8) 已退款(6) 订单错误(9)</p>
     * @param array $OwnerUins <p>下单人账号ID列表</p>
     * @param array $DealNames <p>子订单号列表</p>
     * @param array $BigDealIds <p>大订单号列表</p>
     * @param integer $PayerMode <p>支付方式，0：自付；1：代付</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CreatTimeRangeStart",$param) and $param["CreatTimeRangeStart"] !== null) {
            $this->CreatTimeRangeStart = $param["CreatTimeRangeStart"];
        }

        if (array_key_exists("CreatTimeRangeEnd",$param) and $param["CreatTimeRangeEnd"] !== null) {
            $this->CreatTimeRangeEnd = $param["CreatTimeRangeEnd"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OwnerUins",$param) and $param["OwnerUins"] !== null) {
            $this->OwnerUins = $param["OwnerUins"];
        }

        if (array_key_exists("DealNames",$param) and $param["DealNames"] !== null) {
            $this->DealNames = $param["DealNames"];
        }

        if (array_key_exists("BigDealIds",$param) and $param["BigDealIds"] !== null) {
            $this->BigDealIds = $param["BigDealIds"];
        }

        if (array_key_exists("PayerMode",$param) and $param["PayerMode"] !== null) {
            $this->PayerMode = $param["PayerMode"];
        }
    }
}
