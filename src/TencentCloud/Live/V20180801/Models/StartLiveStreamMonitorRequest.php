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
 * StartLiveStreamMonitor请求参数结构体
 *
 * @method string getMonitorId() 获取监播ID。
 * @method void setMonitorId(string $MonitorId) 设置监播ID。
 * @method array getAudibleInputIndexList() 获取监播画面声音InputIndex,支持多个输入声音。
取值范围 InputIndex必须已经存在。
不填默认无声音输出。
 * @method void setAudibleInputIndexList(array $AudibleInputIndexList) 设置监播画面声音InputIndex,支持多个输入声音。
取值范围 InputIndex必须已经存在。
不填默认无声音输出。
 */
class StartLiveStreamMonitorRequest extends AbstractModel
{
    /**
     * @var string 监播ID。
     */
    public $MonitorId;

    /**
     * @var array 监播画面声音InputIndex,支持多个输入声音。
取值范围 InputIndex必须已经存在。
不填默认无声音输出。
     */
    public $AudibleInputIndexList;

    /**
     * @param string $MonitorId 监播ID。
     * @param array $AudibleInputIndexList 监播画面声音InputIndex,支持多个输入声音。
取值范围 InputIndex必须已经存在。
不填默认无声音输出。
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
        if (array_key_exists("MonitorId",$param) and $param["MonitorId"] !== null) {
            $this->MonitorId = $param["MonitorId"];
        }

        if (array_key_exists("AudibleInputIndexList",$param) and $param["AudibleInputIndexList"] !== null) {
            $this->AudibleInputIndexList = $param["AudibleInputIndexList"];
        }
    }
}
