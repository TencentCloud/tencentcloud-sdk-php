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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudStorageAIServiceTask请求参数结构体
 *
 * @method string getTaskId() 获取任务 ID
 * @method void setTaskId(string $TaskId) 设置任务 ID
 * @method integer getFileURLExpireTime() 获取下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
 * @method void setFileURLExpireTime(integer $FileURLExpireTime) 设置下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
 */
class DescribeCloudStorageAIServiceTaskRequest extends AbstractModel
{
    /**
     * @var string 任务 ID
     */
    public $TaskId;

    /**
     * @var integer 下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
     */
    public $FileURLExpireTime;

    /**
     * @param string $TaskId 任务 ID
     * @param integer $FileURLExpireTime 下载 URL 的过期时间。

若传入该参数，则响应中将包含所有文件的下载 URL
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

        if (array_key_exists("FileURLExpireTime",$param) and $param["FileURLExpireTime"] !== null) {
            $this->FileURLExpireTime = $param["FileURLExpireTime"];
        }
    }
}
