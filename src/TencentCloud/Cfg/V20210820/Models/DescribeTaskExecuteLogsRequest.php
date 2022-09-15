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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskExecuteLogs请求参数结构体
 *
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method integer getLimit() 获取返回的内容行数
 * @method void setLimit(integer $Limit) 设置返回的内容行数
 * @method integer getOffset() 获取日志起始的行数。
 * @method void setOffset(integer $Offset) 设置日志起始的行数。
 */
class DescribeTaskExecuteLogsRequest extends AbstractModel
{
    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var integer 返回的内容行数
     */
    public $Limit;

    /**
     * @var integer 日志起始的行数。
     */
    public $Offset;

    /**
     * @param integer $TaskId 任务ID
     * @param integer $Limit 返回的内容行数
     * @param integer $Offset 日志起始的行数。
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
    }
}
