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
 * 查询Flow的配置信息。
 *
 * @method string getFlowId() 获取流Id。
 * @method void setFlowId(string $FlowId) 设置流Id。
 * @method string getFlowName() 获取流名称。
 * @method void setFlowName(string $FlowName) 设置流名称。
 * @method string getState() 获取流状态，目前有IDLE/RUNNING。
 * @method void setState(string $State) 设置流状态，目前有IDLE/RUNNING。
 * @method integer getMaxBandwidth() 获取最大带宽值。
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置最大带宽值。
 * @method array getInputGroup() 获取输入组。
 * @method void setInputGroup(array $InputGroup) 设置输入组。
 * @method array getOutputGroup() 获取输出组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputGroup(array $OutputGroup) 设置输出组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventId() 获取该Flow关联的媒体传输事件EventId。
 * @method void setEventId(string $EventId) 设置该Flow关联的媒体传输事件EventId。
 * @method string getRegion() 获取媒体传输输入流所属的区域，取值和InputRegion相同。
 * @method void setRegion(string $Region) 设置媒体传输输入流所属的区域，取值和InputRegion相同。
 */
class DescribeFlow extends AbstractModel
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
     * @var string 流状态，目前有IDLE/RUNNING。
     */
    public $State;

    /**
     * @var integer 最大带宽值。
     */
    public $MaxBandwidth;

    /**
     * @var array 输入组。
     */
    public $InputGroup;

    /**
     * @var array 输出组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputGroup;

    /**
     * @var string 该Flow关联的媒体传输事件EventId。
     */
    public $EventId;

    /**
     * @var string 媒体传输输入流所属的区域，取值和InputRegion相同。
     */
    public $Region;

    /**
     * @param string $FlowId 流Id。
     * @param string $FlowName 流名称。
     * @param string $State 流状态，目前有IDLE/RUNNING。
     * @param integer $MaxBandwidth 最大带宽值。
     * @param array $InputGroup 输入组。
     * @param array $OutputGroup 输出组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId 该Flow关联的媒体传输事件EventId。
     * @param string $Region 媒体传输输入流所属的区域，取值和InputRegion相同。
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

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("InputGroup",$param) and $param["InputGroup"] !== null) {
            $this->InputGroup = [];
            foreach ($param["InputGroup"] as $key => $value){
                $obj = new DescribeInput();
                $obj->deserialize($value);
                array_push($this->InputGroup, $obj);
            }
        }

        if (array_key_exists("OutputGroup",$param) and $param["OutputGroup"] !== null) {
            $this->OutputGroup = [];
            foreach ($param["OutputGroup"] as $key => $value){
                $obj = new DescribeOutput();
                $obj->deserialize($value);
                array_push($this->OutputGroup, $obj);
            }
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
