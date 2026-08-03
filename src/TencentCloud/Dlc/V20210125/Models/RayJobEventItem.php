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
 * Ray 任务事件项
 *
 * @method integer getEventTime() 获取<p>事件时间（Unix 时间戳，毫秒）</p>
 * @method void setEventTime(integer $EventTime) 设置<p>事件时间（Unix 时间戳，毫秒）</p>
 * @method string getComponent() 获取<p>组件名称，来源于 event.involvedObject.kind</p>
 * @method void setComponent(string $Component) 设置<p>组件名称，来源于 event.involvedObject.kind</p>
 * @method string getLevel() 获取<p>事件级别，来源于 event.type 的原始值（如 Normal、Warning）</p>
 * @method void setLevel(string $Level) 设置<p>事件级别，来源于 event.type 的原始值（如 Normal、Warning）</p>
 * @method string getMessage() 获取<p>事件内容，来源于 event.message</p>
 * @method void setMessage(string $Message) 设置<p>事件内容，来源于 event.message</p>
 * @method string getInvolvedObjectName() 获取<p>关联的 K8s 对象名称，来源于 event.involvedObject.name</p>
 * @method void setInvolvedObjectName(string $InvolvedObjectName) 设置<p>关联的 K8s 对象名称，来源于 event.involvedObject.name</p>
 * @method string getSourceComponent() 获取<p>事件来源组件，来源于 event.source.component</p>
 * @method void setSourceComponent(string $SourceComponent) 设置<p>事件来源组件，来源于 event.source.component</p>
 * @method string getReason() 获取<p>事件原因，来源于 event.reason</p>
 * @method void setReason(string $Reason) 设置<p>事件原因，来源于 event.reason</p>
 */
class RayJobEventItem extends AbstractModel
{
    /**
     * @var integer <p>事件时间（Unix 时间戳，毫秒）</p>
     */
    public $EventTime;

    /**
     * @var string <p>组件名称，来源于 event.involvedObject.kind</p>
     */
    public $Component;

    /**
     * @var string <p>事件级别，来源于 event.type 的原始值（如 Normal、Warning）</p>
     */
    public $Level;

    /**
     * @var string <p>事件内容，来源于 event.message</p>
     */
    public $Message;

    /**
     * @var string <p>关联的 K8s 对象名称，来源于 event.involvedObject.name</p>
     */
    public $InvolvedObjectName;

    /**
     * @var string <p>事件来源组件，来源于 event.source.component</p>
     */
    public $SourceComponent;

    /**
     * @var string <p>事件原因，来源于 event.reason</p>
     */
    public $Reason;

    /**
     * @param integer $EventTime <p>事件时间（Unix 时间戳，毫秒）</p>
     * @param string $Component <p>组件名称，来源于 event.involvedObject.kind</p>
     * @param string $Level <p>事件级别，来源于 event.type 的原始值（如 Normal、Warning）</p>
     * @param string $Message <p>事件内容，来源于 event.message</p>
     * @param string $InvolvedObjectName <p>关联的 K8s 对象名称，来源于 event.involvedObject.name</p>
     * @param string $SourceComponent <p>事件来源组件，来源于 event.source.component</p>
     * @param string $Reason <p>事件原因，来源于 event.reason</p>
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
        if (array_key_exists("EventTime",$param) and $param["EventTime"] !== null) {
            $this->EventTime = $param["EventTime"];
        }

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("InvolvedObjectName",$param) and $param["InvolvedObjectName"] !== null) {
            $this->InvolvedObjectName = $param["InvolvedObjectName"];
        }

        if (array_key_exists("SourceComponent",$param) and $param["SourceComponent"] !== null) {
            $this->SourceComponent = $param["SourceComponent"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }
    }
}
