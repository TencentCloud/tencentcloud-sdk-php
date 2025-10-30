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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回容器的事件，比如 k8s deployment 或者 pod 的 events
 *
 * @method integer getFirstTimestamp() 获取第一次出现的时间，以 ms 为单位的时间戳
 * @method void setFirstTimestamp(integer $FirstTimestamp) 设置第一次出现的时间，以 ms 为单位的时间戳
 * @method integer getLastTimestamp() 获取最后一次出现的时间，以 ms 为单位的时间戳
 * @method void setLastTimestamp(integer $LastTimestamp) 设置最后一次出现的时间，以 ms 为单位的时间戳
 * @method string getType() 获取级别
 * @method void setType(string $Type) 设置级别
 * @method string getKind() 获取Kubernetes 资源类型，典型取值有 Deployment(部署资源)、Pod(容器组)、Service(服务资源) 等
 * @method void setKind(string $Kind) 设置Kubernetes 资源类型，典型取值有 Deployment(部署资源)、Pod(容器组)、Service(服务资源) 等
 * @method string getName() 获取资源名称
 * @method void setName(string $Name) 设置资源名称
 * @method string getReason() 获取内容
 * @method void setReason(string $Reason) 设置内容
 * @method string getMessage() 获取详细描述
 * @method void setMessage(string $Message) 设置详细描述
 * @method integer getCount() 获取出现次数
 * @method void setCount(integer $Count) 设置出现次数
 */
class ContainerEvent extends AbstractModel
{
    /**
     * @var integer 第一次出现的时间，以 ms 为单位的时间戳
     */
    public $FirstTimestamp;

    /**
     * @var integer 最后一次出现的时间，以 ms 为单位的时间戳
     */
    public $LastTimestamp;

    /**
     * @var string 级别
     */
    public $Type;

    /**
     * @var string Kubernetes 资源类型，典型取值有 Deployment(部署资源)、Pod(容器组)、Service(服务资源) 等
     */
    public $Kind;

    /**
     * @var string 资源名称
     */
    public $Name;

    /**
     * @var string 内容
     */
    public $Reason;

    /**
     * @var string 详细描述
     */
    public $Message;

    /**
     * @var integer 出现次数
     */
    public $Count;

    /**
     * @param integer $FirstTimestamp 第一次出现的时间，以 ms 为单位的时间戳
     * @param integer $LastTimestamp 最后一次出现的时间，以 ms 为单位的时间戳
     * @param string $Type 级别
     * @param string $Kind Kubernetes 资源类型，典型取值有 Deployment(部署资源)、Pod(容器组)、Service(服务资源) 等
     * @param string $Name 资源名称
     * @param string $Reason 内容
     * @param string $Message 详细描述
     * @param integer $Count 出现次数
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
        if (array_key_exists("FirstTimestamp",$param) and $param["FirstTimestamp"] !== null) {
            $this->FirstTimestamp = $param["FirstTimestamp"];
        }

        if (array_key_exists("LastTimestamp",$param) and $param["LastTimestamp"] !== null) {
            $this->LastTimestamp = $param["LastTimestamp"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }
    }
}
