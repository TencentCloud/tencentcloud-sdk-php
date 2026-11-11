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
 * @method float getErrRate() 获取<p>错误率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrRate(float $ErrRate) 设置<p>错误率</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKind() 获取<p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置<p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>节点名</p>
 * @method void setName(string $Name) 设置<p>节点名</p>
 * @method float getWeight() 获取<p>节点权重</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(float $Weight) 设置<p>节点权重</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColor() 获取<p>节点颜色</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColor(string $Color) 设置<p>节点颜色</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getDuration() 获取<p>响应时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(float $Duration) 设置<p>响应时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getQps() 获取<p>吞吐量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQps(float $Qps) 设置<p>吞吐量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取<p>节点ID</p>
 * @method void setId(string $Id) 设置<p>节点ID</p>
 * @method string getSize() 获取<p>节点大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(string $Size) 设置<p>节点大小</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsModule() 获取<p>节点是否为组件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsModule(boolean $IsModule) 设置<p>节点是否为组件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Position getPosition() 获取<p>节点位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(Position $Position) 设置<p>节点位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>节点标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>节点标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanDrillDown() 获取<p>节点是否可以下钻</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanDrillDown(boolean $CanDrillDown) 设置<p>节点是否可以下钻</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Resource getResource() 获取<p>资源层信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(Resource $Resource) 设置<p>资源层信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNodeView() 获取<p>拓扑节点视图名字</p>
 * @method void setNodeView(string $NodeView) 设置<p>拓扑节点视图名字</p>
 * @method float getConsumerDuration() 获取<p>MQ 消费者视角的响应时间 ms</p>
 * @method void setConsumerDuration(float $ConsumerDuration) 设置<p>MQ 消费者视角的响应时间 ms</p>
 * @method float getConsumerErrRate() 获取<p>MQ 消费者视角的错误率 %</p>
 * @method void setConsumerErrRate(float $ConsumerErrRate) 设置<p>MQ 消费者视角的错误率 %</p>
 * @method float getConsumerQps() 获取<p>MQ 消费者视角的吞吐量</p>
 * @method void setConsumerQps(float $ConsumerQps) 设置<p>MQ 消费者视角的吞吐量</p>
 * @method string getServiceId() 获取<p>应用 ID</p>
 * @method void setServiceId(string $ServiceId) 设置<p>应用 ID</p>
 * @method integer getReqCnt() 获取<p>调用次数</p>
 * @method void setReqCnt(integer $ReqCnt) 设置<p>调用次数</p>
 * @method integer getConsumerReqCnt() 获取<p>消息队列消费者视角的调用次数</p>
 * @method void setConsumerReqCnt(integer $ConsumerReqCnt) 设置<p>消息队列消费者视角的调用次数</p>
 * @method string getServiceID() 获取<p>应用 ID</p>
 * @method void setServiceID(string $ServiceID) 设置<p>应用 ID</p>
 */
class TopologyNode extends AbstractModel
{
    /**
     * @var float <p>错误率</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrRate;

    /**
     * @var string <p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var string <p>节点名</p>
     */
    public $Name;

    /**
     * @var float <p>节点权重</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var string <p>节点颜色</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Color;

    /**
     * @var float <p>响应时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var float <p>吞吐量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Qps;

    /**
     * @var string <p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>节点ID</p>
     */
    public $Id;

    /**
     * @var string <p>节点大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var boolean <p>节点是否为组件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsModule;

    /**
     * @var Position <p>节点位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @var array <p>节点标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var boolean <p>节点是否可以下钻</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanDrillDown;

    /**
     * @var Resource <p>资源层信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var string <p>拓扑节点视图名字</p>
     */
    public $NodeView;

    /**
     * @var float <p>MQ 消费者视角的响应时间 ms</p>
     */
    public $ConsumerDuration;

    /**
     * @var float <p>MQ 消费者视角的错误率 %</p>
     */
    public $ConsumerErrRate;

    /**
     * @var float <p>MQ 消费者视角的吞吐量</p>
     */
    public $ConsumerQps;

    /**
     * @var string <p>应用 ID</p>
     * @deprecated
     */
    public $ServiceId;

    /**
     * @var integer <p>调用次数</p>
     */
    public $ReqCnt;

    /**
     * @var integer <p>消息队列消费者视角的调用次数</p>
     */
    public $ConsumerReqCnt;

    /**
     * @var string <p>应用 ID</p>
     */
    public $ServiceID;

    /**
     * @param float $ErrRate <p>错误率</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kind <p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>节点名</p>
     * @param float $Weight <p>节点权重</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Color <p>节点颜色</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Duration <p>响应时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Qps <p>吞吐量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>节点类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id <p>节点ID</p>
     * @param string $Size <p>节点大小</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsModule <p>节点是否为组件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Position $Position <p>节点位置信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>节点标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanDrillDown <p>节点是否可以下钻</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Resource $Resource <p>资源层信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NodeView <p>拓扑节点视图名字</p>
     * @param float $ConsumerDuration <p>MQ 消费者视角的响应时间 ms</p>
     * @param float $ConsumerErrRate <p>MQ 消费者视角的错误率 %</p>
     * @param float $ConsumerQps <p>MQ 消费者视角的吞吐量</p>
     * @param string $ServiceId <p>应用 ID</p>
     * @param integer $ReqCnt <p>调用次数</p>
     * @param integer $ConsumerReqCnt <p>消息队列消费者视角的调用次数</p>
     * @param string $ServiceID <p>应用 ID</p>
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

        if (array_key_exists("ReqCnt",$param) and $param["ReqCnt"] !== null) {
            $this->ReqCnt = $param["ReqCnt"];
        }

        if (array_key_exists("ConsumerReqCnt",$param) and $param["ConsumerReqCnt"] !== null) {
            $this->ConsumerReqCnt = $param["ConsumerReqCnt"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }
    }
}
