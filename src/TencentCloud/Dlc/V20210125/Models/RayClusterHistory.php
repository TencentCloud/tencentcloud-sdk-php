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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群状态历史详情
 *
 * @method integer getId() 获取<p>历史记录ID</p>
 * @method void setId(integer $Id) 设置<p>历史记录ID</p>
 * @method string getClusterId() 获取<p>集群/数据实验室ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群/数据实验室ID</p>
 * @method string getClusterName() 获取<p>集群/数据实验室名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群/数据实验室名称</p>
 * @method string getFromState() 获取<p>源状态</p>
 * @method void setFromState(string $FromState) 设置<p>源状态</p>
 * @method string getToState() 获取<p>目标状态</p>
 * @method void setToState(string $ToState) 设置<p>目标状态</p>
 * @method string getEvent() 获取<p>触发事件</p>
 * @method void setEvent(string $Event) 设置<p>触发事件</p>
 * @method string getMessage() 获取<p>消息</p>
 * @method void setMessage(string $Message) 设置<p>消息</p>
 * @method integer getTransitionTime() 获取<p>转换时间（毫秒时间戳）</p>
 * @method void setTransitionTime(integer $TransitionTime) 设置<p>转换时间（毫秒时间戳）</p>
 */
class RayClusterHistory extends AbstractModel
{
    /**
     * @var integer <p>历史记录ID</p>
     */
    public $Id;

    /**
     * @var string <p>集群/数据实验室ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群/数据实验室名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>源状态</p>
     */
    public $FromState;

    /**
     * @var string <p>目标状态</p>
     */
    public $ToState;

    /**
     * @var string <p>触发事件</p>
     */
    public $Event;

    /**
     * @var string <p>消息</p>
     */
    public $Message;

    /**
     * @var integer <p>转换时间（毫秒时间戳）</p>
     */
    public $TransitionTime;

    /**
     * @param integer $Id <p>历史记录ID</p>
     * @param string $ClusterId <p>集群/数据实验室ID</p>
     * @param string $ClusterName <p>集群/数据实验室名称</p>
     * @param string $FromState <p>源状态</p>
     * @param string $ToState <p>目标状态</p>
     * @param string $Event <p>触发事件</p>
     * @param string $Message <p>消息</p>
     * @param integer $TransitionTime <p>转换时间（毫秒时间戳）</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("FromState",$param) and $param["FromState"] !== null) {
            $this->FromState = $param["FromState"];
        }

        if (array_key_exists("ToState",$param) and $param["ToState"] !== null) {
            $this->ToState = $param["ToState"];
        }

        if (array_key_exists("Event",$param) and $param["Event"] !== null) {
            $this->Event = $param["Event"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("TransitionTime",$param) and $param["TransitionTime"] !== null) {
            $this->TransitionTime = $param["TransitionTime"];
        }
    }
}
