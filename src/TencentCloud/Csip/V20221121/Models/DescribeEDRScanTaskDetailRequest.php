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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEDRScanTaskDetail请求参数结构体
 *
 * @method integer getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务ID</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method Filter getFilter() 获取<p>通用查询参数（含Filters/Limit/Offset）</p>
 * @method void setFilter(Filter $Filter) 设置<p>通用查询参数（含Filters/Limit/Offset）</p>
 */
class DescribeEDRScanTaskDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var Filter <p>通用查询参数（含Filters/Limit/Offset）</p>
     */
    public $Filter;

    /**
     * @param integer $TaskId <p>任务ID</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param Filter $Filter <p>通用查询参数（含Filters/Limit/Offset）</p>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new Filter();
            $this->Filter->deserialize($param["Filter"]);
        }
    }
}
