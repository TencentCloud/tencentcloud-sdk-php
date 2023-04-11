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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRunningTasks请求参数结构体
 *
 * @method integer getSdkAppID() 获取应用的SdkAppID
 * @method void setSdkAppID(integer $SdkAppID) 设置应用的SdkAppID
 * @method string getTaskType() 获取指定需要获取的任务类型。
有效取值如下：
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
 * @method void setTaskType(string $TaskType) 设置指定需要获取的任务类型。
有效取值如下：
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
 * @method integer getOffset() 获取分页获取时的任务偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置分页获取时的任务偏移量，默认为0。
 * @method integer getLimit() 获取每次获取任务列表时最大获取任务数，默认值为100。
有效取值范围：[1, 500]
 * @method void setLimit(integer $Limit) 设置每次获取任务列表时最大获取任务数，默认值为100。
有效取值范围：[1, 500]
 */
class DescribeRunningTasksRequest extends AbstractModel
{
    /**
     * @var integer 应用的SdkAppID
     */
    public $SdkAppID;

    /**
     * @var string 指定需要获取的任务类型。
有效取值如下：
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
     */
    public $TaskType;

    /**
     * @var integer 分页获取时的任务偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 每次获取任务列表时最大获取任务数，默认值为100。
有效取值范围：[1, 500]
     */
    public $Limit;

    /**
     * @param integer $SdkAppID 应用的SdkAppID
     * @param string $TaskType 指定需要获取的任务类型。
有效取值如下：
- TranscodeH5: 动态转码任务，文档转HTML5页面
- TranscodeJPG: 静态转码任务，文档转图片
- WhiteboardPush: 白板推流任务
- OnlineRecord: 实时录制任务
     * @param integer $Offset 分页获取时的任务偏移量，默认为0。
     * @param integer $Limit 每次获取任务列表时最大获取任务数，默认值为100。
有效取值范围：[1, 500]
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
        if (array_key_exists("SdkAppID",$param) and $param["SdkAppID"] !== null) {
            $this->SdkAppID = $param["SdkAppID"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
