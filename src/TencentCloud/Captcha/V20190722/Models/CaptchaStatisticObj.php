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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 验证码统计图Obj
 *
 * @method integer getActionTotal() 获取<p>请求总量</p>
 * @method void setActionTotal(integer $ActionTotal) 设置<p>请求总量</p>
 * @method integer getVerifyTotal() 获取<p>验证总量</p>
 * @method void setVerifyTotal(integer $VerifyTotal) 设置<p>验证总量</p>
 * @method integer getVerifyThroughTotal() 获取<p>验证通过总量</p>
 * @method void setVerifyThroughTotal(integer $VerifyThroughTotal) 设置<p>验证通过总量</p>
 * @method integer getVerifyInterceptTotal() 获取<p>验证拦截总量</p>
 * @method void setVerifyInterceptTotal(integer $VerifyInterceptTotal) 设置<p>验证拦截总量</p>
 * @method integer getTicketTotal() 获取<p>票据校验总量</p>
 * @method void setTicketTotal(integer $TicketTotal) 设置<p>票据校验总量</p>
 * @method integer getTicketThroughTotal() 获取<p>票据通过总量</p>
 * @method void setTicketThroughTotal(integer $TicketThroughTotal) 设置<p>票据通过总量</p>
 * @method integer getTicketInterceptTotal() 获取<p>票据拦截总量</p>
 * @method void setTicketInterceptTotal(integer $TicketInterceptTotal) 设置<p>票据拦截总量</p>
 * @method array getRequestTrend() 获取<p>请求趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequestTrend(array $RequestTrend) 设置<p>请求趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInterceptPerTrend() 获取<p>拦截率趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterceptPerTrend(array $InterceptPerTrend) 设置<p>拦截率趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTicketCheckTrend() 获取<p>票据校验趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTicketCheckTrend(array $TicketCheckTrend) 设置<p>票据校验趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CaptchaStatisticObj extends AbstractModel
{
    /**
     * @var integer <p>请求总量</p>
     */
    public $ActionTotal;

    /**
     * @var integer <p>验证总量</p>
     */
    public $VerifyTotal;

    /**
     * @var integer <p>验证通过总量</p>
     */
    public $VerifyThroughTotal;

    /**
     * @var integer <p>验证拦截总量</p>
     */
    public $VerifyInterceptTotal;

    /**
     * @var integer <p>票据校验总量</p>
     */
    public $TicketTotal;

    /**
     * @var integer <p>票据通过总量</p>
     */
    public $TicketThroughTotal;

    /**
     * @var integer <p>票据拦截总量</p>
     */
    public $TicketInterceptTotal;

    /**
     * @var array <p>请求趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequestTrend;

    /**
     * @var array <p>拦截率趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterceptPerTrend;

    /**
     * @var array <p>票据校验趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TicketCheckTrend;

    /**
     * @param integer $ActionTotal <p>请求总量</p>
     * @param integer $VerifyTotal <p>验证总量</p>
     * @param integer $VerifyThroughTotal <p>验证通过总量</p>
     * @param integer $VerifyInterceptTotal <p>验证拦截总量</p>
     * @param integer $TicketTotal <p>票据校验总量</p>
     * @param integer $TicketThroughTotal <p>票据通过总量</p>
     * @param integer $TicketInterceptTotal <p>票据拦截总量</p>
     * @param array $RequestTrend <p>请求趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InterceptPerTrend <p>拦截率趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TicketCheckTrend <p>票据校验趋势图</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ActionTotal",$param) and $param["ActionTotal"] !== null) {
            $this->ActionTotal = $param["ActionTotal"];
        }

        if (array_key_exists("VerifyTotal",$param) and $param["VerifyTotal"] !== null) {
            $this->VerifyTotal = $param["VerifyTotal"];
        }

        if (array_key_exists("VerifyThroughTotal",$param) and $param["VerifyThroughTotal"] !== null) {
            $this->VerifyThroughTotal = $param["VerifyThroughTotal"];
        }

        if (array_key_exists("VerifyInterceptTotal",$param) and $param["VerifyInterceptTotal"] !== null) {
            $this->VerifyInterceptTotal = $param["VerifyInterceptTotal"];
        }

        if (array_key_exists("TicketTotal",$param) and $param["TicketTotal"] !== null) {
            $this->TicketTotal = $param["TicketTotal"];
        }

        if (array_key_exists("TicketThroughTotal",$param) and $param["TicketThroughTotal"] !== null) {
            $this->TicketThroughTotal = $param["TicketThroughTotal"];
        }

        if (array_key_exists("TicketInterceptTotal",$param) and $param["TicketInterceptTotal"] !== null) {
            $this->TicketInterceptTotal = $param["TicketInterceptTotal"];
        }

        if (array_key_exists("RequestTrend",$param) and $param["RequestTrend"] !== null) {
            $this->RequestTrend = [];
            foreach ($param["RequestTrend"] as $key => $value){
                $obj = new RequestTrendObj();
                $obj->deserialize($value);
                array_push($this->RequestTrend, $obj);
            }
        }

        if (array_key_exists("InterceptPerTrend",$param) and $param["InterceptPerTrend"] !== null) {
            $this->InterceptPerTrend = [];
            foreach ($param["InterceptPerTrend"] as $key => $value){
                $obj = new InterceptPerTrendObj();
                $obj->deserialize($value);
                array_push($this->InterceptPerTrend, $obj);
            }
        }

        if (array_key_exists("TicketCheckTrend",$param) and $param["TicketCheckTrend"] !== null) {
            $this->TicketCheckTrend = [];
            foreach ($param["TicketCheckTrend"] as $key => $value){
                $obj = new TicketCheckTrendObj();
                $obj->deserialize($value);
                array_push($this->TicketCheckTrend, $obj);
            }
        }
    }
}
