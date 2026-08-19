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
 * DescribeCWPLicenseBindSchedule请求参数结构体
 *
 * @method integer getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(integer $TaskId) 设置<p>任务ID</p>
 * @method integer getLimit() 获取<p>限制条数,默认10.</p>
 * @method void setLimit(integer $Limit) 设置<p>限制条数,默认10.</p>
 * @method integer getOffset() 获取<p>偏移量,默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量,默认0</p>
 * @method array getFilters() 获取<p>过滤参数<br>Status 绑定进度状态 0 进行中 1 已完成 2 失败</p>
 * @method void setFilters(array $Filters) 设置<p>过滤参数<br>Status 绑定进度状态 0 进行中 1 已完成 2 失败</p>
 */
class DescribeCWPLicenseBindScheduleRequest extends AbstractModel
{
    /**
     * @var integer <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>限制条数,默认10.</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量,默认0</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤参数<br>Status 绑定进度状态 0 进行中 1 已完成 2 失败</p>
     */
    public $Filters;

    /**
     * @param integer $TaskId <p>任务ID</p>
     * @param integer $Limit <p>限制条数,默认10.</p>
     * @param integer $Offset <p>偏移量,默认0</p>
     * @param array $Filters <p>过滤参数<br>Status 绑定进度状态 0 进行中 1 已完成 2 失败</p>
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
