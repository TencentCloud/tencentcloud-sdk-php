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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAvailRatioHistory请求参数结构体
 *
 * @method integer getTaskId() 获取拨测任务Id
 * @method void setTaskId(integer $TaskId) 设置拨测任务Id
 * @method string getTimeStamp() 获取具体时间点
 * @method void setTimeStamp(string $TimeStamp) 设置具体时间点
 */
class GetAvailRatioHistoryRequest extends AbstractModel
{
    /**
     * @var integer 拨测任务Id
     */
    public $TaskId;

    /**
     * @var string 具体时间点
     */
    public $TimeStamp;

    /**
     * @param integer $TaskId 拨测任务Id
     * @param string $TimeStamp 具体时间点
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
        if (array_key_exists('TaskId',$param) and $param['TaskId'] !== null) {
            $this->TaskId = $param['TaskId'];
        }

        if (array_key_exists('TimeStamp',$param) and $param['TimeStamp'] !== null) {
            $this->TimeStamp = $param['TimeStamp'];
        }
    }
}
