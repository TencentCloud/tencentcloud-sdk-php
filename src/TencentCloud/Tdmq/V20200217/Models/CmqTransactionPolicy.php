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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cmq TransactionPolicy
 *
 * @method integer getFirstQueryInterval() 获取第一次回查时间。
 * @method void setFirstQueryInterval(integer $FirstQueryInterval) 设置第一次回查时间。
 * @method integer getMaxQueryCount() 获取最大查询次数。
 * @method void setMaxQueryCount(integer $MaxQueryCount) 设置最大查询次数。
 */
class CmqTransactionPolicy extends AbstractModel
{
    /**
     * @var integer 第一次回查时间。
     */
    public $FirstQueryInterval;

    /**
     * @var integer 最大查询次数。
     */
    public $MaxQueryCount;

    /**
     * @param integer $FirstQueryInterval 第一次回查时间。
     * @param integer $MaxQueryCount 最大查询次数。
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
        if (array_key_exists("FirstQueryInterval",$param) and $param["FirstQueryInterval"] !== null) {
            $this->FirstQueryInterval = $param["FirstQueryInterval"];
        }

        if (array_key_exists("MaxQueryCount",$param) and $param["MaxQueryCount"] !== null) {
            $this->MaxQueryCount = $param["MaxQueryCount"];
        }
    }
}
