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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 全景录制信息
 *
 * @method string getRecordUrl() 获取全景录制地址。
 * @method void setRecordUrl(string $RecordUrl) 设置全景录制地址。
 * @method string getRecordTaskId() 获取全景录制任务 ID。
 * @method void setRecordTaskId(string $RecordTaskId) 设置全景录制任务 ID。
 */
class WebPageRecordInfo extends AbstractModel
{
    /**
     * @var string 全景录制地址。
     */
    public $RecordUrl;

    /**
     * @var string 全景录制任务 ID。
     */
    public $RecordTaskId;

    /**
     * @param string $RecordUrl 全景录制地址。
     * @param string $RecordTaskId 全景录制任务 ID。
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
        if (array_key_exists("RecordUrl",$param) and $param["RecordUrl"] !== null) {
            $this->RecordUrl = $param["RecordUrl"];
        }

        if (array_key_exists("RecordTaskId",$param) and $param["RecordTaskId"] !== null) {
            $this->RecordTaskId = $param["RecordTaskId"];
        }
    }
}
