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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询Flow的配置信息。
 *
 * @method string getFlowId() 获取流Id。
 * @method void setFlowId(string $FlowId) 设置流Id。
 * @method string getFlowName() 获取流名称。
 * @method void setFlowName(string $FlowName) 设置流名称。
 * @method string getEventId() 获取该Flow关联的媒体传输事件EventId。
 * @method void setEventId(string $EventId) 设置该Flow关联的媒体传输事件EventId。
 * @method string getFlowRegion() 获取媒体传输输入流所属的区域，取值和InputRegion相同。
 * @method void setFlowRegion(string $FlowRegion) 设置媒体传输输入流所属的区域，取值和InputRegion相同。
 * @method string getOutputRegion() 获取当返回是输出类型时非空，output所在Region。
 * @method void setOutputRegion(string $OutputRegion) 设置当返回是输出类型时非空，output所在Region。
 * @method string getEventName() 获取EventName。
 * @method void setEventName(string $EventName) 设置EventName。
 * @method string getInputName() 获取InOutType为Input有效。
 * @method void setInputName(string $InputName) 设置InOutType为Input有效。
 * @method string getOutputName() 获取InOutType为Output有效。
 * @method void setOutputName(string $OutputName) 设置InOutType为Output有效。
 * @method string getInOutId() 获取Input或者Output的Id。
 * @method void setInOutId(string $InOutId) 设置Input或者Output的Id。
 * @method string getInOutType() 获取输入/输出类型，可选值：
Input：输入
Outpu：输出。
 * @method void setInOutType(string $InOutType) 设置输入/输出类型，可选值：
Input：输入
Outpu：输出。
 */
class FlowInOutResp extends AbstractModel
{
    /**
     * @var string 流Id。
     */
    public $FlowId;

    /**
     * @var string 流名称。
     */
    public $FlowName;

    /**
     * @var string 该Flow关联的媒体传输事件EventId。
     */
    public $EventId;

    /**
     * @var string 媒体传输输入流所属的区域，取值和InputRegion相同。
     */
    public $FlowRegion;

    /**
     * @var string 当返回是输出类型时非空，output所在Region。
     */
    public $OutputRegion;

    /**
     * @var string EventName。
     */
    public $EventName;

    /**
     * @var string InOutType为Input有效。
     */
    public $InputName;

    /**
     * @var string InOutType为Output有效。
     */
    public $OutputName;

    /**
     * @var string Input或者Output的Id。
     */
    public $InOutId;

    /**
     * @var string 输入/输出类型，可选值：
Input：输入
Outpu：输出。
     */
    public $InOutType;

    /**
     * @param string $FlowId 流Id。
     * @param string $FlowName 流名称。
     * @param string $EventId 该Flow关联的媒体传输事件EventId。
     * @param string $FlowRegion 媒体传输输入流所属的区域，取值和InputRegion相同。
     * @param string $OutputRegion 当返回是输出类型时非空，output所在Region。
     * @param string $EventName EventName。
     * @param string $InputName InOutType为Input有效。
     * @param string $OutputName InOutType为Output有效。
     * @param string $InOutId Input或者Output的Id。
     * @param string $InOutType 输入/输出类型，可选值：
Input：输入
Outpu：输出。
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("FlowRegion",$param) and $param["FlowRegion"] !== null) {
            $this->FlowRegion = $param["FlowRegion"];
        }

        if (array_key_exists("OutputRegion",$param) and $param["OutputRegion"] !== null) {
            $this->OutputRegion = $param["OutputRegion"];
        }

        if (array_key_exists("EventName",$param) and $param["EventName"] !== null) {
            $this->EventName = $param["EventName"];
        }

        if (array_key_exists("InputName",$param) and $param["InputName"] !== null) {
            $this->InputName = $param["InputName"];
        }

        if (array_key_exists("OutputName",$param) and $param["OutputName"] !== null) {
            $this->OutputName = $param["OutputName"];
        }

        if (array_key_exists("InOutId",$param) and $param["InOutId"] !== null) {
            $this->InOutId = $param["InOutId"];
        }

        if (array_key_exists("InOutType",$param) and $param["InOutType"] !== null) {
            $this->InOutType = $param["InOutType"];
        }
    }
}
