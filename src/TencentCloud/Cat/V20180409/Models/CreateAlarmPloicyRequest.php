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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTaskId() 获取正整数。拨测任务id
 * @method void setTaskId(integer $TaskId) 设置正整数。拨测任务id
 * @method integer getInterval() 获取持续周期。值为任务的Period 乘以0、1、2、3、4。单位：分钟
 * @method void setInterval(integer $Interval) 设置持续周期。值为任务的Period 乘以0、1、2、3、4。单位：分钟
 * @method string getOperate() 获取目前取值仅支持 lt (小于)。
 * @method void setOperate(string $Operate) 设置目前取值仅支持 lt (小于)。
 * @method integer getThreshold() 获取门限百分比。比如：80，表示80%。成功率低于80%时告警。
 * @method void setThreshold(integer $Threshold) 设置门限百分比。比如：80，表示80%。成功率低于80%时告警。
 * @method integer getReceiverGroupId() 获取告警接收组的id。参见： DescribeAlarmGroups 接口。从返回结果里的GroupId 中选取一个。
 * @method void setReceiverGroupId(integer $ReceiverGroupId) 设置告警接收组的id。参见： DescribeAlarmGroups 接口。从返回结果里的GroupId 中选取一个。
 */

/**
 *CreateAlarmPloicy请求参数结构体
 */
class CreateAlarmPloicyRequest extends AbstractModel
{
    /**
     * @var integer 正整数。拨测任务id
     */
    public $TaskId;

    /**
     * @var integer 持续周期。值为任务的Period 乘以0、1、2、3、4。单位：分钟
     */
    public $Interval;

    /**
     * @var string 目前取值仅支持 lt (小于)。
     */
    public $Operate;

    /**
     * @var integer 门限百分比。比如：80，表示80%。成功率低于80%时告警。
     */
    public $Threshold;

    /**
     * @var integer 告警接收组的id。参见： DescribeAlarmGroups 接口。从返回结果里的GroupId 中选取一个。
     */
    public $ReceiverGroupId;
    /**
     * @param integer $TaskId 正整数。拨测任务id
     * @param integer $Interval 持续周期。值为任务的Period 乘以0、1、2、3、4。单位：分钟
     * @param string $Operate 目前取值仅支持 lt (小于)。
     * @param integer $Threshold 门限百分比。比如：80，表示80%。成功率低于80%时告警。
     * @param integer $ReceiverGroupId 告警接收组的id。参见： DescribeAlarmGroups 接口。从返回结果里的GroupId 中选取一个。
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

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("ReceiverGroupId",$param) and $param["ReceiverGroupId"] !== null) {
            $this->ReceiverGroupId = $param["ReceiverGroupId"];
        }
    }
}
