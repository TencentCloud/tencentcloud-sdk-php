<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOrganizationFinancialByMember请求参数结构体
 *
 * @method string getMonth() 获取查询开始月份。格式：yyyy-mm，例如：2021-01。
 * @method void setMonth(string $Month) 设置查询开始月份。格式：yyyy-mm，例如：2021-01。
 * @method integer getLimit() 获取限制数目。取值范围：1~50，默认值：10	
 * @method void setLimit(integer $Limit) 设置限制数目。取值范围：1~50，默认值：10	
 * @method integer getOffset() 获取偏移量。取值是limit的整数倍，默认值 : 0
 * @method void setOffset(integer $Offset) 设置偏移量。取值是limit的整数倍，默认值 : 0
 * @method string getEndMonth() 获取查询结束月份。格式：yyyy-mm，例如：2021-01,默认值为查询开始月份。
 * @method void setEndMonth(string $EndMonth) 设置查询结束月份。格式：yyyy-mm，例如：2021-01,默认值为查询开始月份。
 * @method array getMemberUins() 获取查询成员列表。 最大100个
 * @method void setMemberUins(array $MemberUins) 设置查询成员列表。 最大100个
 * @method array getProductCodes() 获取查询产品列表。 最大100个
 * @method void setProductCodes(array $ProductCodes) 设置查询产品列表。 最大100个
 */
class DescribeOrganizationFinancialByMemberRequest extends AbstractModel
{
    /**
     * @var string 查询开始月份。格式：yyyy-mm，例如：2021-01。
     */
    public $Month;

    /**
     * @var integer 限制数目。取值范围：1~50，默认值：10	
     */
    public $Limit;

    /**
     * @var integer 偏移量。取值是limit的整数倍，默认值 : 0
     */
    public $Offset;

    /**
     * @var string 查询结束月份。格式：yyyy-mm，例如：2021-01,默认值为查询开始月份。
     */
    public $EndMonth;

    /**
     * @var array 查询成员列表。 最大100个
     */
    public $MemberUins;

    /**
     * @var array 查询产品列表。 最大100个
     */
    public $ProductCodes;

    /**
     * @param string $Month 查询开始月份。格式：yyyy-mm，例如：2021-01。
     * @param integer $Limit 限制数目。取值范围：1~50，默认值：10	
     * @param integer $Offset 偏移量。取值是limit的整数倍，默认值 : 0
     * @param string $EndMonth 查询结束月份。格式：yyyy-mm，例如：2021-01,默认值为查询开始月份。
     * @param array $MemberUins 查询成员列表。 最大100个
     * @param array $ProductCodes 查询产品列表。 最大100个
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EndMonth",$param) and $param["EndMonth"] !== null) {
            $this->EndMonth = $param["EndMonth"];
        }

        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }

        if (array_key_exists("ProductCodes",$param) and $param["ProductCodes"] !== null) {
            $this->ProductCodes = $param["ProductCodes"];
        }
    }
}
