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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTranscodeTaskNum请求参数结构体
 *
 * @method string getStartTime() 获取起始时间，格式：yyyy-mm-dd HH:MM:SS。
 * @method void setStartTime(string $StartTime) 设置起始时间，格式：yyyy-mm-dd HH:MM:SS。
 * @method string getEndTime() 获取结束时间，格式：yyyy-mm-dd HH:MM:SS。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式：yyyy-mm-dd HH:MM:SS。
 * @method array getPushDomains() 获取推流域名列表，不填表示总体数据。
 * @method void setPushDomains(array $PushDomains) 设置推流域名列表，不填表示总体数据。
 */
class DescribeTranscodeTaskNumRequest extends AbstractModel
{
    /**
     * @var string 起始时间，格式：yyyy-mm-dd HH:MM:SS。
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式：yyyy-mm-dd HH:MM:SS。
     */
    public $EndTime;

    /**
     * @var array 推流域名列表，不填表示总体数据。
     */
    public $PushDomains;

    /**
     * @param string $StartTime 起始时间，格式：yyyy-mm-dd HH:MM:SS。
     * @param string $EndTime 结束时间，格式：yyyy-mm-dd HH:MM:SS。
     * @param array $PushDomains 推流域名列表，不填表示总体数据。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PushDomains",$param) and $param["PushDomains"] !== null) {
            $this->PushDomains = $param["PushDomains"];
        }
    }
}
