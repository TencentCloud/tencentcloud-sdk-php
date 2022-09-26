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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志告警请求信息
 *
 * @method string getInstanceId() 获取apm实例id
 * @method void setInstanceId(string $InstanceId) 设置apm实例id
 * @method array getFilter() 获取检索条件信息
 * @method void setFilter(array $Filter) 设置检索条件信息
 * @method string getAlarmMerge() 获取告警合并开启/暂停
 * @method void setAlarmMerge(string $AlarmMerge) 设置告警合并开启/暂停
 * @method string getAlarmMergeTime() 获取告警合并时间
 * @method void setAlarmMergeTime(string $AlarmMergeTime) 设置告警合并时间
 */
class LogAlarmReq extends AbstractModel
{
    /**
     * @var string apm实例id
     */
    public $InstanceId;

    /**
     * @var array 检索条件信息
     */
    public $Filter;

    /**
     * @var string 告警合并开启/暂停
     */
    public $AlarmMerge;

    /**
     * @var string 告警合并时间
     */
    public $AlarmMergeTime;

    /**
     * @param string $InstanceId apm实例id
     * @param array $Filter 检索条件信息
     * @param string $AlarmMerge 告警合并开启/暂停
     * @param string $AlarmMergeTime 告警合并时间
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = [];
            foreach ($param["Filter"] as $key => $value){
                $obj = new LogFilterInfo();
                $obj->deserialize($value);
                array_push($this->Filter, $obj);
            }
        }

        if (array_key_exists("AlarmMerge",$param) and $param["AlarmMerge"] !== null) {
            $this->AlarmMerge = $param["AlarmMerge"];
        }

        if (array_key_exists("AlarmMergeTime",$param) and $param["AlarmMergeTime"] !== null) {
            $this->AlarmMergeTime = $param["AlarmMergeTime"];
        }
    }
}
