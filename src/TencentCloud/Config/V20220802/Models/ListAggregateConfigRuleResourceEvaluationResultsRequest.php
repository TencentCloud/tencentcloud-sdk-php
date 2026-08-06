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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAggregateConfigRuleResourceEvaluationResults请求参数结构体
 *
 * @method string getAccountGroupId() 获取<p>账号组Id</p>
 * @method void setAccountGroupId(string $AccountGroupId) 设置<p>账号组Id</p>
 * @method integer getLimit() 获取<p>返回数量，最大值1000，不填写返回全部</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，最大值1000，不填写返回全部</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0</p>
 */
class ListAggregateConfigRuleResourceEvaluationResultsRequest extends AbstractModel
{
    /**
     * @var string <p>账号组Id</p>
     */
    public $AccountGroupId;

    /**
     * @var integer <p>返回数量，最大值1000，不填写返回全部</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0</p>
     */
    public $Offset;

    /**
     * @param string $AccountGroupId <p>账号组Id</p>
     * @param integer $Limit <p>返回数量，最大值1000，不填写返回全部</p>
     * @param integer $Offset <p>偏移量，默认为0</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
