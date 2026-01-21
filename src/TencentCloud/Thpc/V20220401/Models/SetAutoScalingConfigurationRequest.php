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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetAutoScalingConfiguration请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID。</p>
 * @method integer getExpansionBusyTime() 获取<p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。</p>
 * @method void setExpansionBusyTime(integer $ExpansionBusyTime) 设置<p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。</p>
 * @method integer getShrinkIdleTime() 获取<p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。</p>
 * @method void setShrinkIdleTime(integer $ShrinkIdleTime) 设置<p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。</p>
 * @method array getQueueConfigs() 获取<p>扩容队列配置列表。</p>
 * @method void setQueueConfigs(array $QueueConfigs) 设置<p>扩容队列配置列表。</p>
 * @method boolean getDryRun() 获取<p>是否只预检此次请求。<br>true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId。<br>false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。</p>
 * @method void setDryRun(boolean $DryRun) 设置<p>是否只预检此次请求。<br>true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId。<br>false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。</p>
 */
class SetAutoScalingConfigurationRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID。</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。</p>
     */
    public $ExpansionBusyTime;

    /**
     * @var integer <p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。</p>
     */
    public $ShrinkIdleTime;

    /**
     * @var array <p>扩容队列配置列表。</p>
     */
    public $QueueConfigs;

    /**
     * @var boolean <p>是否只预检此次请求。<br>true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId。<br>false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。</p>
     */
    public $DryRun;

    /**
     * @param string $ClusterId <p>集群ID。</p>
     * @param integer $ExpansionBusyTime <p>任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。</p>
     * @param integer $ShrinkIdleTime <p>节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。</p>
     * @param array $QueueConfigs <p>扩容队列配置列表。</p>
     * @param boolean $DryRun <p>是否只预检此次请求。<br>true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。<br>如果检查不通过，则返回对应错误码；<br>如果检查通过，则返回RequestId。<br>false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ExpansionBusyTime",$param) and $param["ExpansionBusyTime"] !== null) {
            $this->ExpansionBusyTime = $param["ExpansionBusyTime"];
        }

        if (array_key_exists("ShrinkIdleTime",$param) and $param["ShrinkIdleTime"] !== null) {
            $this->ShrinkIdleTime = $param["ShrinkIdleTime"];
        }

        if (array_key_exists("QueueConfigs",$param) and $param["QueueConfigs"] !== null) {
            $this->QueueConfigs = [];
            foreach ($param["QueueConfigs"] as $key => $value){
                $obj = new QueueConfig();
                $obj->deserialize($value);
                array_push($this->QueueConfigs, $obj);
            }
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
