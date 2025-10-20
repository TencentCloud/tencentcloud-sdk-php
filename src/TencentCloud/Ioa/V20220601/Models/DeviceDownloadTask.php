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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务响应数据
 *
 * @method string getDownloadURL() 获取同步数据下载的url
 * @method void setDownloadURL(string $DownloadURL) 设置同步数据下载的url
 * @method integer getTaskId() 获取异步任务id，需要根据id去任务中心下载
 * @method void setTaskId(integer $TaskId) 设置异步任务id，需要根据id去任务中心下载
 */
class DeviceDownloadTask extends AbstractModel
{
    /**
     * @var string 同步数据下载的url
     */
    public $DownloadURL;

    /**
     * @var integer 异步任务id，需要根据id去任务中心下载
     */
    public $TaskId;

    /**
     * @param string $DownloadURL 同步数据下载的url
     * @param integer $TaskId 异步任务id，需要根据id去任务中心下载
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
        if (array_key_exists("DownloadURL",$param) and $param["DownloadURL"] !== null) {
            $this->DownloadURL = $param["DownloadURL"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }
    }
}
