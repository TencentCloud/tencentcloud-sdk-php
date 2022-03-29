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
 * 未处理的安全事件统计信息
 *
 * @method integer getEventsNum() 获取事件数
 * @method void setEventsNum(integer $EventsNum) 设置事件数
 * @method integer getMachineAffectNum() 获取受影响的主机数
 * @method void setMachineAffectNum(integer $MachineAffectNum) 设置受影响的主机数
 */
class EventStat extends AbstractModel
{
    /**
     * @var integer 事件数
     */
    public $EventsNum;

    /**
     * @var integer 受影响的主机数
     */
    public $MachineAffectNum;

    /**
     * @param integer $EventsNum 事件数
     * @param integer $MachineAffectNum 受影响的主机数
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
        if (array_key_exists("EventsNum",$param) and $param["EventsNum"] !== null) {
            $this->EventsNum = $param["EventsNum"];
        }

        if (array_key_exists("MachineAffectNum",$param) and $param["MachineAffectNum"] !== null) {
            $this->MachineAffectNum = $param["MachineAffectNum"];
        }
    }
}
