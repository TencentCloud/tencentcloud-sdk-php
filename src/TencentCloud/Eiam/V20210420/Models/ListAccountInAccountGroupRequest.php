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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAccountInAccountGroup请求参数结构体
 *
 * @method string getAccountGroupId() 获取账号组ID。
 * @method void setAccountGroupId(string $AccountGroupId) 设置账号组ID。
 * @method AccountGroupSearchCriteria getSearchCondition() 获取查询条件，支持多搜索条件组合、多数据范围匹配的搜索。
 * @method void setSearchCondition(AccountGroupSearchCriteria $SearchCondition) 设置查询条件，支持多搜索条件组合、多数据范围匹配的搜索。
 * @method integer getOffset() 获取偏移量，默认为 0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为 0。
 * @method integer getLimit() 获取返回数量，默认为 20，最大值为 100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为 20，最大值为 100。
 */
class ListAccountInAccountGroupRequest extends AbstractModel
{
    /**
     * @var string 账号组ID。
     */
    public $AccountGroupId;

    /**
     * @var AccountGroupSearchCriteria 查询条件，支持多搜索条件组合、多数据范围匹配的搜索。
     */
    public $SearchCondition;

    /**
     * @var integer 偏移量，默认为 0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为 20，最大值为 100。
     */
    public $Limit;

    /**
     * @param string $AccountGroupId 账号组ID。
     * @param AccountGroupSearchCriteria $SearchCondition 查询条件，支持多搜索条件组合、多数据范围匹配的搜索。
     * @param integer $Offset 偏移量，默认为 0。
     * @param integer $Limit 返回数量，默认为 20，最大值为 100。
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
        if (array_key_exists("AccountGroupId",$param) and $param["AccountGroupId"] !== null) {
            $this->AccountGroupId = $param["AccountGroupId"];
        }

        if (array_key_exists("SearchCondition",$param) and $param["SearchCondition"] !== null) {
            $this->SearchCondition = new AccountGroupSearchCriteria();
            $this->SearchCondition->deserialize($param["SearchCondition"]);
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
