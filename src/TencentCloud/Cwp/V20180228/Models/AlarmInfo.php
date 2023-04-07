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
 * 节点关联的告警信息
 *
 * @method string getAlarmId() 获取该节点关联的告警，告警的table_name+id（t1:id1,t2:id2,...)
 * @method void setAlarmId(string $AlarmId) 设置该节点关联的告警，告警的table_name+id（t1:id1,t2:id2,...)
 * @method integer getStatus() 获取告警事件表状态，当该节点为告警点时生效
 * @method void setStatus(integer $Status) 设置告警事件表状态，当该节点为告警点时生效
 */
class AlarmInfo extends AbstractModel
{
    /**
     * @var string 该节点关联的告警，告警的table_name+id（t1:id1,t2:id2,...)
     */
    public $AlarmId;

    /**
     * @var integer 告警事件表状态，当该节点为告警点时生效
     */
    public $Status;

    /**
     * @param string $AlarmId 该节点关联的告警，告警的table_name+id（t1:id1,t2:id2,...)
     * @param integer $Status 告警事件表状态，当该节点为告警点时生效
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
        if (array_key_exists("AlarmId",$param) and $param["AlarmId"] !== null) {
            $this->AlarmId = $param["AlarmId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
