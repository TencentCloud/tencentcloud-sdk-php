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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateStreamLinkFlow请求参数结构体
 *
 * @method string getFlowName() 获取流名称。
 * @method void setFlowName(string $FlowName) 设置流名称。
 * @method integer getMaxBandwidth() 获取最大带宽，单位bps，可选[10000000, 20000000, 50000000]。
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置最大带宽，单位bps，可选[10000000, 20000000, 50000000]。
 * @method array getInputGroup() 获取流的输入组。
 * @method void setInputGroup(array $InputGroup) 设置流的输入组。
 * @method string getEventId() 获取该Flow关联的媒体传输事件ID，每个flow只能关联一个Event。
 * @method void setEventId(string $EventId) 设置该Flow关联的媒体传输事件ID，每个flow只能关联一个Event。
 */
class CreateStreamLinkFlowRequest extends AbstractModel
{
    /**
     * @var string 流名称。
     */
    public $FlowName;

    /**
     * @var integer 最大带宽，单位bps，可选[10000000, 20000000, 50000000]。
     */
    public $MaxBandwidth;

    /**
     * @var array 流的输入组。
     */
    public $InputGroup;

    /**
     * @var string 该Flow关联的媒体传输事件ID，每个flow只能关联一个Event。
     */
    public $EventId;

    /**
     * @param string $FlowName 流名称。
     * @param integer $MaxBandwidth 最大带宽，单位bps，可选[10000000, 20000000, 50000000]。
     * @param array $InputGroup 流的输入组。
     * @param string $EventId 该Flow关联的媒体传输事件ID，每个flow只能关联一个Event。
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
        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("InputGroup",$param) and $param["InputGroup"] !== null) {
            $this->InputGroup = [];
            foreach ($param["InputGroup"] as $key => $value){
                $obj = new CreateInput();
                $obj->deserialize($value);
                array_push($this->InputGroup, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }
    }
}
