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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeWebRecord请求参数结构体
 *
 * @method string getTaskId() 获取开始页面录制时返回的任务id
 * @method void setTaskId(string $TaskId) 设置开始页面录制时返回的任务id
 * @method integer getSdkAppId() 获取发起页面录制时传递的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置发起页面录制时传递的SdkAppId
 * @method string getRecordId() 获取发起录制时传递的RecordId, 传入此值时需要传递SdkAppId
 * @method void setRecordId(string $RecordId) 设置发起录制时传递的RecordId, 传入此值时需要传递SdkAppId
 */
class DescribeWebRecordRequest extends AbstractModel
{
    /**
     * @var string 开始页面录制时返回的任务id
     */
    public $TaskId;

    /**
     * @var integer 发起页面录制时传递的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var string 发起录制时传递的RecordId, 传入此值时需要传递SdkAppId
     */
    public $RecordId;

    /**
     * @param string $TaskId 开始页面录制时返回的任务id
     * @param integer $SdkAppId 发起页面录制时传递的SdkAppId
     * @param string $RecordId 发起录制时传递的RecordId, 传入此值时需要传递SdkAppId
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

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }
    }
}
