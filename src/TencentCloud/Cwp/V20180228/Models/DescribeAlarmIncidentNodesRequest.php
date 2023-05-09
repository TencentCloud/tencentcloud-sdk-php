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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAlarmIncidentNodes请求参数结构体
 *
 * @method string getUuid() 获取机器uuid
 * @method void setUuid(string $Uuid) 设置机器uuid
 * @method string getAlarmVid() 获取告警vid
 * @method void setAlarmVid(string $AlarmVid) 设置告警vid
 * @method integer getAlarmTime() 获取告警时间
 * @method void setAlarmTime(integer $AlarmTime) 设置告警时间
 * @method integer getTableId() 获取告警来源表ID
 * @method void setTableId(integer $TableId) 设置告警来源表ID
 */
class DescribeAlarmIncidentNodesRequest extends AbstractModel
{
    /**
     * @var string 机器uuid
     */
    public $Uuid;

    /**
     * @var string 告警vid
     */
    public $AlarmVid;

    /**
     * @var integer 告警时间
     */
    public $AlarmTime;

    /**
     * @var integer 告警来源表ID
     */
    public $TableId;

    /**
     * @param string $Uuid 机器uuid
     * @param string $AlarmVid 告警vid
     * @param integer $AlarmTime 告警时间
     * @param integer $TableId 告警来源表ID
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
        if (array_key_exists("Uuid",$param) and $param["Uuid"] !== null) {
            $this->Uuid = $param["Uuid"];
        }

        if (array_key_exists("AlarmVid",$param) and $param["AlarmVid"] !== null) {
            $this->AlarmVid = $param["AlarmVid"];
        }

        if (array_key_exists("AlarmTime",$param) and $param["AlarmTime"] !== null) {
            $this->AlarmTime = $param["AlarmTime"];
        }

        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }
    }
}
