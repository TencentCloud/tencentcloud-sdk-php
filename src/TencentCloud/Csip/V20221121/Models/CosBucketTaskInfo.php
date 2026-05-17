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
 * cos存储桶任务信息
 *
 * @method integer getAppId() 获取appid
 * @method void setAppId(integer $AppId) 设置appid
 * @method string getBucketName() 获取存储桶名
 * @method void setBucketName(string $BucketName) 设置存储桶名
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method integer getLastScanTime() 获取最后一次扫描时间
 * @method void setLastScanTime(integer $LastScanTime) 设置最后一次扫描时间
 */
class CosBucketTaskInfo extends AbstractModel
{
    /**
     * @var integer appid
     */
    public $AppId;

    /**
     * @var string 存储桶名
     */
    public $BucketName;

    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var integer 最后一次扫描时间
     */
    public $LastScanTime;

    /**
     * @param integer $AppId appid
     * @param string $BucketName 存储桶名
     * @param string $TaskId 任务id
     * @param integer $LastScanTime 最后一次扫描时间
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("LastScanTime",$param) and $param["LastScanTime"] !== null) {
            $this->LastScanTime = $param["LastScanTime"];
        }
    }
}
