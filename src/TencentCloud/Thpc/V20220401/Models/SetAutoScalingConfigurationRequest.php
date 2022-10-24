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
namespace TencentCloud\Thpc\V20220401\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetAutoScalingConfiguration请求参数结构体
 *
 * @method string getClusterId() 获取集群ID。
 * @method void setClusterId(string $ClusterId) 设置集群ID。
 * @method integer getExpansionBusyTime() 获取任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
 * @method void setExpansionBusyTime(integer $ExpansionBusyTime) 设置任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
 * @method integer getShrinkIdleTime() 获取节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
 * @method void setShrinkIdleTime(integer $ShrinkIdleTime) 设置节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
 * @method array getQueueConfigs() 获取扩容队列配置列表。
 * @method void setQueueConfigs(array $QueueConfigs) 设置扩容队列配置列表。
 * @method boolean getDryRun() 获取是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
 * @method void setDryRun(boolean $DryRun) 设置是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
 */
class SetAutoScalingConfigurationRequest extends AbstractModel
{
    /**
     * @var string 集群ID。
     */
    public $ClusterId;

    /**
     * @var integer 任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
     */
    public $ExpansionBusyTime;

    /**
     * @var integer 节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
     */
    public $ShrinkIdleTime;

    /**
     * @var array 扩容队列配置列表。
     */
    public $QueueConfigs;

    /**
     * @var boolean 是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
     */
    public $DryRun;

    /**
     * @param string $ClusterId 集群ID。
     * @param integer $ExpansionBusyTime 任务连续等待时间，队列的任务处于连续等待的时间。单位秒。默认值120。
     * @param integer $ShrinkIdleTime 节点连续空闲（未运行作业）时间，一个节点连续处于空闲状态时间。单位秒。默认值300。
     * @param array $QueueConfigs 扩容队列配置列表。
     * @param boolean $DryRun 是否只预检此次请求。
true：发送检查请求，不会绑定弹性伸缩组。检查项包括是否填写了必需参数，请求格式，业务限制。
如果检查不通过，则返回对应错误码；
如果检查通过，则返回RequestId。
false（默认）：发送正常请求，通过检查后直接绑定弹性伸缩组。
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
