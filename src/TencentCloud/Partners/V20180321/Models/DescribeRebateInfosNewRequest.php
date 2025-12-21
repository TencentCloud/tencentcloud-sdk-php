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
 * DescribeRebateInfosNew请求参数结构体
 *
 * @method string getRebateMonth() 获取<p>返佣月份，如2018-02</p>
 * @method void setRebateMonth(string $RebateMonth) 设置<p>返佣月份，如2018-02</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method integer getLimit() 获取<p>限制数目</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数目</p>
 */
class DescribeRebateInfosNewRequest extends AbstractModel
{
    /**
     * @var string <p>返佣月份，如2018-02</p>
     */
    public $RebateMonth;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>限制数目</p>
     */
    public $Limit;

    /**
     * @param string $RebateMonth <p>返佣月份，如2018-02</p>
     * @param integer $Offset <p>偏移量</p>
     * @param integer $Limit <p>限制数目</p>
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
        if (array_key_exists("RebateMonth",$param) and $param["RebateMonth"] !== null) {
            $this->RebateMonth = $param["RebateMonth"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
