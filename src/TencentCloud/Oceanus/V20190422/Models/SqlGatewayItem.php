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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SqlGateway配置信息
 *
 * @method string getSerialId() 获取唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置唯一标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlinkVersion() 获取Flink内核版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlinkVersion(string $FlinkVersion) 设置Flink内核版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefs() 获取引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefs(array $ResourceRefs) 设置引用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCuSpec() 获取Cu规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCuSpec(float $CuSpec) 设置Cu规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取配置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置配置参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpu() 获取Cpu
 * @method void setCpu(float $Cpu) 设置Cpu
 * @method float getMem() 获取Mem
 * @method void setMem(float $Mem) 设置Mem
 */
class SqlGatewayItem extends AbstractModel
{
    /**
     * @var string 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var string Flink内核版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlinkVersion;

    /**
     * @var integer 状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var array 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefs;

    /**
     * @var float Cu规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CuSpec;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array 配置参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var float Cpu
     */
    public $Cpu;

    /**
     * @var float Mem
     */
    public $Mem;

    /**
     * @param string $SerialId 唯一标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlinkVersion Flink内核版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefs 引用资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CuSpec Cu规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties 配置参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Cpu Cpu
     * @param float $Mem Mem
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
        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("FlinkVersion",$param) and $param["FlinkVersion"] !== null) {
            $this->FlinkVersion = $param["FlinkVersion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }

        if (array_key_exists("ResourceRefs",$param) and $param["ResourceRefs"] !== null) {
            $this->ResourceRefs = [];
            foreach ($param["ResourceRefs"] as $key => $value){
                $obj = new GatewayRefItem();
                $obj->deserialize($value);
                array_push($this->ResourceRefs, $obj);
            }
        }

        if (array_key_exists("CuSpec",$param) and $param["CuSpec"] !== null) {
            $this->CuSpec = $param["CuSpec"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new Property();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }
    }
}
