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
 * DescribeOrgMemberAccountBalance请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>页码</p><p>默认值：1</p><p>取值范围≥1</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码</p><p>默认值：1</p><p>取值范围≥1</p>
 * @method integer getPageSize() 获取<p>单页大小</p><p>取值范围：[1, 10]</p><p>默认值：10</p>
 * @method void setPageSize(integer $PageSize) 设置<p>单页大小</p><p>取值范围：[1, 10]</p><p>默认值：10</p>
 * @method array getMemberUins() 获取<p>成员uin列表</p><p>入参限制：元素必须为纯数字字符串，并且元素个数不能大于10</p><p>为空时返回当前组织内所有成员的账户余额信息，不为空时返回指定成员的账户余额信息</p>
 * @method void setMemberUins(array $MemberUins) 设置<p>成员uin列表</p><p>入参限制：元素必须为纯数字字符串，并且元素个数不能大于10</p><p>为空时返回当前组织内所有成员的账户余额信息，不为空时返回指定成员的账户余额信息</p>
 */
class DescribeOrgMemberAccountBalanceRequest extends AbstractModel
{
    /**
     * @var integer <p>页码</p><p>默认值：1</p><p>取值范围≥1</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>单页大小</p><p>取值范围：[1, 10]</p><p>默认值：10</p>
     */
    public $PageSize;

    /**
     * @var array <p>成员uin列表</p><p>入参限制：元素必须为纯数字字符串，并且元素个数不能大于10</p><p>为空时返回当前组织内所有成员的账户余额信息，不为空时返回指定成员的账户余额信息</p>
     */
    public $MemberUins;

    /**
     * @param integer $PageNumber <p>页码</p><p>默认值：1</p><p>取值范围≥1</p>
     * @param integer $PageSize <p>单页大小</p><p>取值范围：[1, 10]</p><p>默认值：10</p>
     * @param array $MemberUins <p>成员uin列表</p><p>入参限制：元素必须为纯数字字符串，并且元素个数不能大于10</p><p>为空时返回当前组织内所有成员的账户余额信息，不为空时返回指定成员的账户余额信息</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }
    }
}
