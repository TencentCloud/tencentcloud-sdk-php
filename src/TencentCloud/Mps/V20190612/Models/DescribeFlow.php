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
 * @method string getFlowId() 获取<p>流Id。</p>
 * @method void setFlowId(string $FlowId) 设置<p>流Id。</p>
 * @method string getFlowName() 获取<p>流名称。</p>
 * @method void setFlowName(string $FlowName) 设置<p>流名称。</p>
 * @method string getState() 获取<p>流状态，目前有IDLE/RUNNING。</p>
 * @method void setState(string $State) 设置<p>流状态，目前有IDLE/RUNNING。</p>
 * @method integer getMaxBandwidth() 获取<p>最大带宽值。</p>
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置<p>最大带宽值。</p>
 * @method array getInputGroup() 获取<p>输入组。</p>
 * @method void setInputGroup(array $InputGroup) 设置<p>输入组。</p>
 * @method array getOutputGroup() 获取<p>输出组。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputGroup(array $OutputGroup) 设置<p>输出组。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEventId() 获取<p>该Flow关联的媒体传输事件EventId。</p>
 * @method void setEventId(string $EventId) 设置<p>该Flow关联的媒体传输事件EventId。</p>
 * @method string getRegion() 获取<p>媒体传输输入流所属的区域，取值和InputRegion相同。</p>
 * @method void setRegion(string $Region) 设置<p>媒体传输输入流所属的区域，取值和InputRegion相同。</p>
 * @method array getAllowedInputProtocols() 获取<p>该Flow允许创建的输入协议</p>
 * @method void setAllowedInputProtocols(array $AllowedInputProtocols) 设置<p>该Flow允许创建的输入协议</p>
 * @method array getAllowedOutputProtocols() 获取<p>该Flow允许创建的输出协议</p>
 * @method void setAllowedOutputProtocols(array $AllowedOutputProtocols) 设置<p>该Flow允许创建的输出协议</p>
 */
class DescribeFlow extends AbstractModel
{
    /**
     * @var string <p>流Id。</p>
     */
    public $FlowId;

    /**
     * @var string <p>流名称。</p>
     */
    public $FlowName;

    /**
     * @var string <p>流状态，目前有IDLE/RUNNING。</p>
     */
    public $State;

    /**
     * @var integer <p>最大带宽值。</p>
     */
    public $MaxBandwidth;

    /**
     * @var array <p>输入组。</p>
     */
    public $InputGroup;

    /**
     * @var array <p>输出组。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputGroup;

    /**
     * @var string <p>该Flow关联的媒体传输事件EventId。</p>
     */
    public $EventId;

    /**
     * @var string <p>媒体传输输入流所属的区域，取值和InputRegion相同。</p>
     */
    public $Region;

    /**
     * @var array <p>该Flow允许创建的输入协议</p>
     */
    public $AllowedInputProtocols;

    /**
     * @var array <p>该Flow允许创建的输出协议</p>
     */
    public $AllowedOutputProtocols;

    /**
     * @param string $FlowId <p>流Id。</p>
     * @param string $FlowName <p>流名称。</p>
     * @param string $State <p>流状态，目前有IDLE/RUNNING。</p>
     * @param integer $MaxBandwidth <p>最大带宽值。</p>
     * @param array $InputGroup <p>输入组。</p>
     * @param array $OutputGroup <p>输出组。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EventId <p>该Flow关联的媒体传输事件EventId。</p>
     * @param string $Region <p>媒体传输输入流所属的区域，取值和InputRegion相同。</p>
     * @param array $AllowedInputProtocols <p>该Flow允许创建的输入协议</p>
     * @param array $AllowedOutputProtocols <p>该Flow允许创建的输出协议</p>
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

        if (array_key_exists("AllowedInputProtocols",$param) and $param["AllowedInputProtocols"] !== null) {
            $this->AllowedInputProtocols = $param["AllowedInputProtocols"];
        }

        if (array_key_exists("AllowedOutputProtocols",$param) and $param["AllowedOutputProtocols"] !== null) {
            $this->AllowedOutputProtocols = $param["AllowedOutputProtocols"];
        }
    }
}
