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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 信息提取子任务反馈信息
 *
 * @method string getSubTaskId() 获取信息提取子任务ID
 * @method void setSubTaskId(string $SubTaskId) 设置信息提取子任务ID
 * @method array getFeedbackList() 获取提取结果反馈信息
 * @method void setFeedbackList(array $FeedbackList) 设置提取结果反馈信息
 */
class SubTaskFeedback extends AbstractModel
{
    /**
     * @var string 信息提取子任务ID
     */
    public $SubTaskId;

    /**
     * @var array 提取结果反馈信息
     */
    public $FeedbackList;

    /**
     * @param string $SubTaskId 信息提取子任务ID
     * @param array $FeedbackList 提取结果反馈信息
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
        if (array_key_exists("SubTaskId",$param) and $param["SubTaskId"] !== null) {
            $this->SubTaskId = $param["SubTaskId"];
        }

        if (array_key_exists("FeedbackList",$param) and $param["FeedbackList"] !== null) {
            $this->FeedbackList = [];
            foreach ($param["FeedbackList"] as $key => $value){
                $obj = new FeedbackList();
                $obj->deserialize($value);
                array_push($this->FeedbackList, $obj);
            }
        }
    }
}
