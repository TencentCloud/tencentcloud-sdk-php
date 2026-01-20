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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递类任务数据过滤统计信息
 *
 * @method integer getOriginalCount() 获取<p>原始日志数</p>
 * @method void setOriginalCount(integer $OriginalCount) 设置<p>原始日志数</p>
 * @method integer getFilteredCount() 获取<p>过滤后日志数</p>
 * @method void setFilteredCount(integer $FilteredCount) 设置<p>过滤后日志数</p>
 * @method array getFilteredResult() 获取<p>过滤后结果</p>
 * @method void setFilteredResult(array $FilteredResult) 设置<p>过滤后结果</p>
 */
class FilterStatistics extends AbstractModel
{
    /**
     * @var integer <p>原始日志数</p>
     */
    public $OriginalCount;

    /**
     * @var integer <p>过滤后日志数</p>
     */
    public $FilteredCount;

    /**
     * @var array <p>过滤后结果</p>
     */
    public $FilteredResult;

    /**
     * @param integer $OriginalCount <p>原始日志数</p>
     * @param integer $FilteredCount <p>过滤后日志数</p>
     * @param array $FilteredResult <p>过滤后结果</p>
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
        if (array_key_exists("OriginalCount",$param) and $param["OriginalCount"] !== null) {
            $this->OriginalCount = $param["OriginalCount"];
        }

        if (array_key_exists("FilteredCount",$param) and $param["FilteredCount"] !== null) {
            $this->FilteredCount = $param["FilteredCount"];
        }

        if (array_key_exists("FilteredResult",$param) and $param["FilteredResult"] !== null) {
            $this->FilteredResult = $param["FilteredResult"];
        }
    }
}
