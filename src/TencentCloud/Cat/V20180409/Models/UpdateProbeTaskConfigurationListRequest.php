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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateProbeTaskConfigurationList请求参数结构体
 *
 * @method array getTaskIds() 获取<p>任务 ID，如task-n1wchki8</p>
 * @method void setTaskIds(array $TaskIds) 设置<p>任务 ID，如task-n1wchki8</p>
 * @method array getNodes() 获取<p>拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。</p>
 * @method void setNodes(array $Nodes) 设置<p>拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。</p>
 * @method integer getInterval() 获取<p>拨测间隔，如30，单位为分钟。</p>
 * @method void setInterval(integer $Interval) 设置<p>拨测间隔，如30，单位为分钟。</p>
 * @method string getParameters() 获取<p>拨测参数，详细参数配置可参考云拨测官网文档。</p>
 * @method void setParameters(string $Parameters) 设置<p>拨测参数，详细参数配置可参考云拨测官网文档。</p>
 * @method string getCron() 获取<p>定时任务cron表达式</p>
 * @method void setCron(string $Cron) 设置<p>定时任务cron表达式</p>
 * @method array getResourceIDs() 获取<p>预付费套餐id<br>需要与taskId对应</p>
 * @method void setResourceIDs(array $ResourceIDs) 设置<p>预付费套餐id<br>需要与taskId对应</p>
 * @method integer getNodeIpType() 获取<p>拨测节点的IP类型，0-不限，1-IPv4，2-IPv6</p>
 * @method void setNodeIpType(integer $NodeIpType) 设置<p>拨测节点的IP类型，0-不限，1-IPv4，2-IPv6</p>
 * @method array getBatchTasks() 获取<p>批量任务名-地址</p>
 * @method void setBatchTasks(array $BatchTasks) 设置<p>批量任务名-地址</p>
 */
class UpdateProbeTaskConfigurationListRequest extends AbstractModel
{
    /**
     * @var array <p>任务 ID，如task-n1wchki8</p>
     */
    public $TaskIds;

    /**
     * @var array <p>拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。</p>
     */
    public $Nodes;

    /**
     * @var integer <p>拨测间隔，如30，单位为分钟。</p>
     */
    public $Interval;

    /**
     * @var string <p>拨测参数，详细参数配置可参考云拨测官网文档。</p>
     */
    public $Parameters;

    /**
     * @var string <p>定时任务cron表达式</p>
     */
    public $Cron;

    /**
     * @var array <p>预付费套餐id<br>需要与taskId对应</p>
     */
    public $ResourceIDs;

    /**
     * @var integer <p>拨测节点的IP类型，0-不限，1-IPv4，2-IPv6</p>
     */
    public $NodeIpType;

    /**
     * @var array <p>批量任务名-地址</p>
     */
    public $BatchTasks;

    /**
     * @param array $TaskIds <p>任务 ID，如task-n1wchki8</p>
     * @param array $Nodes <p>拨测节点，如10001，详细地区运营商拨测编号请联系云拨测。</p>
     * @param integer $Interval <p>拨测间隔，如30，单位为分钟。</p>
     * @param string $Parameters <p>拨测参数，详细参数配置可参考云拨测官网文档。</p>
     * @param string $Cron <p>定时任务cron表达式</p>
     * @param array $ResourceIDs <p>预付费套餐id<br>需要与taskId对应</p>
     * @param integer $NodeIpType <p>拨测节点的IP类型，0-不限，1-IPv4，2-IPv6</p>
     * @param array $BatchTasks <p>批量任务名-地址</p>
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

        if (array_key_exists("BatchTasks",$param) and $param["BatchTasks"] !== null) {
            $this->BatchTasks = [];
            foreach ($param["BatchTasks"] as $key => $value){
                $obj = new ProbeTaskBasicConfiguration();
                $obj->deserialize($value);
                array_push($this->BatchTasks, $obj);
            }
        }
    }
}
