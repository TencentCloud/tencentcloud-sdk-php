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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOfflineExportTask请求参数结构体
 *
 * @method integer getLimit() 获取<p>分页参数</p>
 * @method void setLimit(integer $Limit) 设置<p>分页参数</p>
 * @method integer getOffset() 获取<p>分页参数</p>
 * @method void setOffset(integer $Offset) 设置<p>分页参数</p>
 * @method string getTaskName() 获取<p>任务ID/任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务ID/任务名称</p>
 */
class DescribeOfflineExportTaskRequest extends AbstractModel
{
    /**
     * @var integer <p>分页参数</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页参数</p>
     */
    public $Offset;

    /**
     * @var string <p>任务ID/任务名称</p>
     */
    public $TaskName;

    /**
     * @param integer $Limit <p>分页参数</p>
     * @param integer $Offset <p>分页参数</p>
     * @param string $TaskName <p>任务ID/任务名称</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
