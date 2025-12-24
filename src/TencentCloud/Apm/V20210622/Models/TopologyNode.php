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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 拓扑图边节点
 *
 * @method float getErrRate() 获取错误率
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrRate(float $ErrRate) 设置错误率
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKind() 获取节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取节点名
 * @method void setName(string $Name) 设置节点名
 * @method float getWeight() 获取节点权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(float $Weight) 设置节点权重
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColor() 获取节点颜色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColor(string $Color) 设置节点颜色
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDuration() 获取响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(float $Duration) 设置响应时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getQps() 获取吞吐量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQps(float $Qps) 设置吞吐量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置节点类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取节点ID
 * @method void setId(string $Id) 设置节点ID
 * @method string getSize() 获取节点大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(string $Size) 设置节点大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsModule() 获取节点是否为组件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsModule(boolean $IsModule) 设置节点是否为组件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method Position getPosition() 获取节点位置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(Position $Position) 设置节点位置信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取节点标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置节点标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanDrillDown() 获取节点是否可以下钻
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanDrillDown(boolean $CanDrillDown) 设置节点是否可以下钻
注意：此字段可能返回 null，表示取不到有效值。
 * @method Resource getResource() 获取资源层信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(Resource $Resource) 设置资源层信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeView() 获取拓扑节点视图名字
 * @method void setNodeView(string $NodeView) 设置拓扑节点视图名字
 * @method float getConsumerDuration() 获取MQ 消费者视角的响应时间 ms
 * @method void setConsumerDuration(float $ConsumerDuration) 设置MQ 消费者视角的响应时间 ms
 * @method float getConsumerErrRate() 获取MQ 消费者视角的错误率 %
 * @method void setConsumerErrRate(float $ConsumerErrRate) 设置MQ 消费者视角的错误率 %
 * @method float getConsumerQps() 获取MQ 消费者视角的吞吐量
 * @method void setConsumerQps(float $ConsumerQps) 设置MQ 消费者视角的吞吐量
 * @method string getServiceId() 获取应用 ID
 * @method void setServiceId(string $ServiceId) 设置应用 ID
 */
class TopologyNode extends AbstractModel
{
    /**
     * @var float 错误率
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrRate;

    /**
     * @var string 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var string 节点名
     */
    public $Name;

    /**
     * @var float 节点权重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string 节点颜色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Color;

    /**
     * @var float 响应时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var float 吞吐量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qps;

    /**
     * @var string 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 节点ID
     */
    public $Id;

    /**
     * @var string 节点大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var boolean 节点是否为组件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsModule;

    /**
     * @var Position 节点位置信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var array 节点标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean 节点是否可以下钻
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanDrillDown;

    /**
     * @var Resource 资源层信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string 拓扑节点视图名字
     */
    public $NodeView;

    /**
     * @var float MQ 消费者视角的响应时间 ms
     */
    public $ConsumerDuration;

    /**
     * @var float MQ 消费者视角的错误率 %
     */
    public $ConsumerErrRate;

    /**
     * @var float MQ 消费者视角的吞吐量
     */
    public $ConsumerQps;

    /**
     * @var string 应用 ID
     */
    public $ServiceId;

    /**
     * @param float $ErrRate 错误率
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kind 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 节点名
     * @param float $Weight 节点权重
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Color 节点颜色
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Duration 响应时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Qps 吞吐量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 节点类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id 节点ID
     * @param string $Size 节点大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsModule 节点是否为组件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param Position $Position 节点位置信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 节点标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanDrillDown 节点是否可以下钻
注意：此字段可能返回 null，表示取不到有效值。
     * @param Resource $Resource 资源层信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeView 拓扑节点视图名字
     * @param float $ConsumerDuration MQ 消费者视角的响应时间 ms
     * @param float $ConsumerErrRate MQ 消费者视角的错误率 %
     * @param float $ConsumerQps MQ 消费者视角的吞吐量
     * @param string $ServiceId 应用 ID
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
        if (array_key_exists("ErrRate",$param) and $param["ErrRate"] !== null) {
            $this->ErrRate = $param["ErrRate"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Color",$param) and $param["Color"] !== null) {
            $this->Color = $param["Color"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("Qps",$param) and $param["Qps"] !== null) {
            $this->Qps = $param["Qps"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("IsModule",$param) and $param["IsModule"] !== null) {
            $this->IsModule = $param["IsModule"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = new Position();
            $this->Position->deserialize($param["Position"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("CanDrillDown",$param) and $param["CanDrillDown"] !== null) {
            $this->CanDrillDown = $param["CanDrillDown"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("NodeView",$param) and $param["NodeView"] !== null) {
            $this->NodeView = $param["NodeView"];
        }

        if (array_key_exists("ConsumerDuration",$param) and $param["ConsumerDuration"] !== null) {
            $this->ConsumerDuration = $param["ConsumerDuration"];
        }

        if (array_key_exists("ConsumerErrRate",$param) and $param["ConsumerErrRate"] !== null) {
            $this->ConsumerErrRate = $param["ConsumerErrRate"];
        }

        if (array_key_exists("ConsumerQps",$param) and $param["ConsumerQps"] !== null) {
            $this->ConsumerQps = $param["ConsumerQps"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }
    }
}
