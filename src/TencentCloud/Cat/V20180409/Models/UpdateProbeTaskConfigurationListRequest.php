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
 * UpdateProbeTaskConfigurationList请求参数结构体
 *
 * @method array getTaskIds() 获取任务 ID，如task-n1wchki8
 * @method void setTaskIds(array $TaskIds) 设置任务 ID，如task-n1wchki8
 * @method array getNodes() 获取拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。
 * @method void setNodes(array $Nodes) 设置拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。
 * @method integer getInterval() 获取拨测间隔，如30，单位为分钟。
 * @method void setInterval(integer $Interval) 设置拨测间隔，如30，单位为分钟。
 * @method string getParameters() 获取拨测参数，详细参数配置可参考云拨测官网文档。
 * @method void setParameters(string $Parameters) 设置拨测参数，详细参数配置可参考云拨测官网文档。
 * @method string getCron() 获取定时任务cron表达式
 * @method void setCron(string $Cron) 设置定时任务cron表达式
 * @method array getResourceIDs() 获取预付费套餐id
需要与taskId对应
 * @method void setResourceIDs(array $ResourceIDs) 设置预付费套餐id
需要与taskId对应
 * @method integer getNodeIpType() 获取拨测节点的IP类型，0-不限，1-IPv4，2-IPv6
 * @method void setNodeIpType(integer $NodeIpType) 设置拨测节点的IP类型，0-不限，1-IPv4，2-IPv6
 */
class UpdateProbeTaskConfigurationListRequest extends AbstractModel
{
    /**
     * @var array 任务 ID，如task-n1wchki8
     */
    public $TaskIds;

    /**
     * @var array 拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。
     */
    public $Nodes;

    /**
     * @var integer 拨测间隔，如30，单位为分钟。
     */
    public $Interval;

    /**
     * @var string 拨测参数，详细参数配置可参考云拨测官网文档。
     */
    public $Parameters;

    /**
     * @var string 定时任务cron表达式
     */
    public $Cron;

    /**
     * @var array 预付费套餐id
需要与taskId对应
     */
    public $ResourceIDs;

    /**
     * @var integer 拨测节点的IP类型，0-不限，1-IPv4，2-IPv6
     */
    public $NodeIpType;

    /**
     * @param array $TaskIds 任务 ID，如task-n1wchki8
     * @param array $Nodes 拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。
     * @param integer $Interval 拨测间隔，如30，单位为分钟。
     * @param string $Parameters 拨测参数，详细参数配置可参考云拨测官网文档。
     * @param string $Cron 定时任务cron表达式
     * @param array $ResourceIDs 预付费套餐id
需要与taskId对应
     * @param integer $NodeIpType 拨测节点的IP类型，0-不限，1-IPv4，2-IPv6
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("Nodes",$param) and $param["Nodes"] !== null) {
            $this->Nodes = $param["Nodes"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = $param["Parameters"];
        }

        if (array_key_exists("Cron",$param) and $param["Cron"] !== null) {
            $this->Cron = $param["Cron"];
        }

        if (array_key_exists("ResourceIDs",$param) and $param["ResourceIDs"] !== null) {
            $this->ResourceIDs = $param["ResourceIDs"];
        }

        if (array_key_exists("NodeIpType",$param) and $param["NodeIpType"] !== null) {
            $this->NodeIpType = $param["NodeIpType"];
        }
    }
}
