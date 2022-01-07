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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetWeChatBillDetails请求参数结构体
 *
 * @method string getDate() 获取拉取的日期（YYYY-MM-DD）。最大可追溯到365天前。当天6点后才能拉取前一天的数据。
 * @method void setDate(string $Date) 设置拉取的日期（YYYY-MM-DD）。最大可追溯到365天前。当天6点后才能拉取前一天的数据。
 * @method integer getCursor() 获取游标。用于分页，取第一页时传0，取后续页面时，传入本接口响应中返回的NextCursor字段的值。
 * @method void setCursor(integer $Cursor) 设置游标。用于分页，取第一页时传0，取后续页面时，传入本接口响应中返回的NextCursor字段的值。
 * @method string getRuleId() 获取需要拉取账单详情业务对应的RuleId。不传会返回所有RuleId数据。默认为空字符串。
 * @method void setRuleId(string $RuleId) 设置需要拉取账单详情业务对应的RuleId。不传会返回所有RuleId数据。默认为空字符串。
 */
class GetWeChatBillDetailsRequest extends AbstractModel
{
    /**
     * @var string 拉取的日期（YYYY-MM-DD）。最大可追溯到365天前。当天6点后才能拉取前一天的数据。
     */
    public $Date;

    /**
     * @var integer 游标。用于分页，取第一页时传0，取后续页面时，传入本接口响应中返回的NextCursor字段的值。
     */
    public $Cursor;

    /**
     * @var string 需要拉取账单详情业务对应的RuleId。不传会返回所有RuleId数据。默认为空字符串。
     */
    public $RuleId;

    /**
     * @param string $Date 拉取的日期（YYYY-MM-DD）。最大可追溯到365天前。当天6点后才能拉取前一天的数据。
     * @param integer $Cursor 游标。用于分页，取第一页时传0，取后续页面时，传入本接口响应中返回的NextCursor字段的值。
     * @param string $RuleId 需要拉取账单详情业务对应的RuleId。不传会返回所有RuleId数据。默认为空字符串。
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
        if (array_key_exists("Date",$param) and $param["Date"] !== null) {
            $this->Date = $param["Date"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }
    }
}
