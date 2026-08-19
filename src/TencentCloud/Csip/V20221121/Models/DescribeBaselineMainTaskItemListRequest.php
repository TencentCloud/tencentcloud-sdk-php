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
 * DescribeBaselineMainTaskItemList请求参数结构体
 *
 * @method integer getMainTaskID() 获取<p>基线扫描主任务 ID。</p>
 * @method void setMainTaskID(integer $MainTaskID) 设置<p>基线扫描主任务 ID。</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getLimit() 获取<p>分页查询每页返回条数，默认值 10，最大值 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页查询每页返回条数，默认值 10，最大值 100。</p>
 * @method integer getOffset() 获取<p>分页查询偏移量，默认值 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页查询偏移量，默认值 0。</p>
 */
class DescribeBaselineMainTaskItemListRequest extends AbstractModel
{
    /**
     * @var integer <p>基线扫描主任务 ID。</p>
     */
    public $MainTaskID;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>分页查询每页返回条数，默认值 10，最大值 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页查询偏移量，默认值 0。</p>
     */
    public $Offset;

    /**
     * @param integer $MainTaskID <p>基线扫描主任务 ID。</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $Limit <p>分页查询每页返回条数，默认值 10，最大值 100。</p>
     * @param integer $Offset <p>分页查询偏移量，默认值 0。</p>
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
        if (array_key_exists("MainTaskID",$param) and $param["MainTaskID"] !== null) {
            $this->MainTaskID = $param["MainTaskID"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
