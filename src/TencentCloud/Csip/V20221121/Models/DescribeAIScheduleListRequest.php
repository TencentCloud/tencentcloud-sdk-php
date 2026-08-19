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
 * DescribeAIScheduleList请求参数结构体
 *
 * @method integer getOffset() 获取<p>分页偏移量，默认 0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认 0。</p>
 * @method integer getLimit() 获取<p>分页大小，默认 20，最大 100。</p>
 * @method void setLimit(integer $Limit) 设置<p>分页大小，默认 20，最大 100。</p>
 * @method integer getStatus() 获取<p>状态过滤。取值：0（全部）、1（已启用）、2（已停用），默认 0。</p>
 * @method void setStatus(integer $Status) 设置<p>状态过滤。取值：0（全部）、1（已启用）、2（已停用），默认 0。</p>
 * @method string getScheduleId() 获取<p>定时任务ID，可选，为空时则全量查询</p>
 * @method void setScheduleId(string $ScheduleId) 设置<p>定时任务ID，可选，为空时则全量查询</p>
 */
class DescribeAIScheduleListRequest extends AbstractModel
{
    /**
     * @var integer <p>分页偏移量，默认 0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页大小，默认 20，最大 100。</p>
     */
    public $Limit;

    /**
     * @var integer <p>状态过滤。取值：0（全部）、1（已启用）、2（已停用），默认 0。</p>
     */
    public $Status;

    /**
     * @var string <p>定时任务ID，可选，为空时则全量查询</p>
     */
    public $ScheduleId;

    /**
     * @param integer $Offset <p>分页偏移量，默认 0。</p>
     * @param integer $Limit <p>分页大小，默认 20，最大 100。</p>
     * @param integer $Status <p>状态过滤。取值：0（全部）、1（已启用）、2（已停用），默认 0。</p>
     * @param string $ScheduleId <p>定时任务ID，可选，为空时则全量查询</p>
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScheduleId",$param) and $param["ScheduleId"] !== null) {
            $this->ScheduleId = $param["ScheduleId"];
        }
    }
}
