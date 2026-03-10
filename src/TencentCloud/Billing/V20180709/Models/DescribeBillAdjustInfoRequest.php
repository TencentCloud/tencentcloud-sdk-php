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
 * DescribeBillAdjustInfo请求参数结构体
 *
 * @method string getMonth() 获取<p>格式：yyyy-MM<br>账单月份，month和timeFrom&amp;timeTo必传一个，如果有传timeFrom&amp;timeTo则month字段无效</p>
 * @method void setMonth(string $Month) 设置<p>格式：yyyy-MM<br>账单月份，month和timeFrom&amp;timeTo必传一个，如果有传timeFrom&amp;timeTo则month字段无效</p>
 * @method string getTimeFrom() 获取<p>格式：yyyy-MM-dd<br>开始时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
 * @method void setTimeFrom(string $TimeFrom) 设置<p>格式：yyyy-MM-dd<br>开始时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
 * @method string getTimeTo() 获取<p>格式：yyyy-MM-dd<br>截止时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
 * @method void setTimeTo(string $TimeTo) 设置<p>格式：yyyy-MM-dd<br>截止时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
 * @method string getPayerUin() 获取<p>支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN</p>
 */
class DescribeBillAdjustInfoRequest extends AbstractModel
{
    /**
     * @var string <p>格式：yyyy-MM<br>账单月份，month和timeFrom&amp;timeTo必传一个，如果有传timeFrom&amp;timeTo则month字段无效</p>
     */
    public $Month;

    /**
     * @var string <p>格式：yyyy-MM-dd<br>开始时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
     */
    public $TimeFrom;

    /**
     * @var string <p>格式：yyyy-MM-dd<br>截止时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
     */
    public $TimeTo;

    /**
     * @var string <p>支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN</p>
     */
    public $PayerUin;

    /**
     * @param string $Month <p>格式：yyyy-MM<br>账单月份，month和timeFrom&amp;timeTo必传一个，如果有传timeFrom&amp;timeTo则month字段无效</p>
     * @param string $TimeFrom <p>格式：yyyy-MM-dd<br>开始时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
     * @param string $TimeTo <p>格式：yyyy-MM-dd<br>截止时间，month和timeFrom&amp;timeTo必传一个，如果有该字段则month字段无效。timeFrom和timeTo必须一起传，且为相同月份，不支持跨月查询，查询结果是整月数据</p>
     * @param string $PayerUin <p>支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN</p>
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("TimeFrom",$param) and $param["TimeFrom"] !== null) {
            $this->TimeFrom = $param["TimeFrom"];
        }

        if (array_key_exists("TimeTo",$param) and $param["TimeTo"] !== null) {
            $this->TimeTo = $param["TimeTo"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}
