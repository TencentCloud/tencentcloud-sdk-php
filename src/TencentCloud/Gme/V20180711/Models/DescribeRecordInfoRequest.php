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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRecordInfo请求参数结构体
 *
 * @method integer getTaskId() 获取进行中的任务taskid（StartRecord接口返回）。
 * @method void setTaskId(integer $TaskId) 设置进行中的任务taskid（StartRecord接口返回）。
 * @method integer getBizId() 获取应用ID。
 * @method void setBizId(integer $BizId) 设置应用ID。
 */
class DescribeRecordInfoRequest extends AbstractModel
{
    /**
     * @var integer 进行中的任务taskid（StartRecord接口返回）。
     */
    public $TaskId;

    /**
     * @var integer 应用ID。
     */
    public $BizId;

    /**
     * @param integer $TaskId 进行中的任务taskid（StartRecord接口返回）。
     * @param integer $BizId 应用ID。
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

        if (array_key_exists("BizId",$param) and $param["BizId"] !== null) {
            $this->BizId = $param["BizId"];
        }
    }
}
