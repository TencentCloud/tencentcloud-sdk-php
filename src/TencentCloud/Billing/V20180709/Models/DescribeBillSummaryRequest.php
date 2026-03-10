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
 * DescribeBillSummary请求参数结构体
 *
 * @method string getMonth() 获取<p>账单月份，格式为2023-04</p>
 * @method void setMonth(string $Month) 设置<p>账单月份，格式为2023-04</p>
 * @method string getGroupType() 获取<p>账单维度类型，枚举值如下：business、project、region、payMode、tag</p>
 * @method void setGroupType(string $GroupType) 设置<p>账单维度类型，枚举值如下：business、project、region、payMode、tag</p>
 * @method array getTagKey() 获取<p>标签键，GroupType=tag获取标签维度账单时传</p>
 * @method void setTagKey(array $TagKey) 设置<p>标签键，GroupType=tag获取标签维度账单时传</p>
 * @method string getOperateUin() 获取<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method void setOperateUin(string $OperateUin) 设置<p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
 * @method string getPayerUin() 获取<p>支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN</p>
 * @method void setPayerUin(string $PayerUin) 设置<p>支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN</p>
 */
class DescribeBillSummaryRequest extends AbstractModel
{
    /**
     * @var string <p>账单月份，格式为2023-04</p>
     */
    public $Month;

    /**
     * @var string <p>账单维度类型，枚举值如下：business、project、region、payMode、tag</p>
     */
    public $GroupType;

    /**
     * @var array <p>标签键，GroupType=tag获取标签维度账单时传</p>
     */
    public $TagKey;

    /**
     * @var string <p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
     */
    public $OperateUin;

    /**
     * @var string <p>支付者的账号 ID（账号 ID 是用户在腾讯云的唯一账号标识），默认查询本账号账单，如集团管理账号需查询成员账号自付的账单，该字段需入参成员账号UIN</p>
     */
    public $PayerUin;

    /**
     * @param string $Month <p>账单月份，格式为2023-04</p>
     * @param string $GroupType <p>账单维度类型，枚举值如下：business、project、region、payMode、tag</p>
     * @param array $TagKey <p>标签键，GroupType=tag获取标签维度账单时传</p>
     * @param string $OperateUin <p>操作者UIN：操作者账号 ID（预付费资源下单或后付费操作开通资源账号的 ID 或者角色 ID ）</p>
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

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("PayerUin",$param) and $param["PayerUin"] !== null) {
            $this->PayerUin = $param["PayerUin"];
        }
    }
}
