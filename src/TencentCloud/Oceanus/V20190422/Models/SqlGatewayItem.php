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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SqlGateway配置信息
 *
 * @method string getSerialId() 获取<p>唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置<p>唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFlinkVersion() 获取<p>Flink内核版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlinkVersion(string $FlinkVersion) 设置<p>Flink内核版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatorUin() 获取<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatorUin(string $CreatorUin) 设置<p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceRefs() 获取<p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRefs(array $ResourceRefs) 设置<p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCuSpec() 获取<p>Cu规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCuSpec(float $CuSpec) 设置<p>Cu规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProperties() 获取<p>配置参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(array $Properties) 设置<p>配置参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpu() 获取<p>Cpu</p>
 * @method void setCpu(float $Cpu) 设置<p>Cpu</p>
 * @method float getMem() 获取<p>Mem</p>
 * @method void setMem(float $Mem) 设置<p>Mem</p>
 * @method string getJdkVersion() 获取<p>jdk版本</p>
 * @method void setJdkVersion(string $JdkVersion) 设置<p>jdk版本</p>
 * @method string getSessionClusterId() 获取<p>session id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionClusterId(string $SessionClusterId) 设置<p>session id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPgUser() 获取<p>pg用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPgUser(string $PgUser) 设置<p>pg用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEndpoints() 获取<p>协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndpoints(array $Endpoints) 设置<p>协议</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SqlGatewayItem extends AbstractModel
{
    /**
     * @var string <p>唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var string <p>Flink内核版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlinkVersion;

    /**
     * @var integer <p>状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatorUin;

    /**
     * @var array <p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRefs;

    /**
     * @var float <p>Cu规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CuSpec;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var array <p>配置参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @var float <p>Cpu</p>
     */
    public $Cpu;

    /**
     * @var float <p>Mem</p>
     */
    public $Mem;

    /**
     * @var string <p>jdk版本</p>
     */
    public $JdkVersion;

    /**
     * @var string <p>session id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionClusterId;

    /**
     * @var string <p>pg用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PgUser;

    /**
     * @var array <p>协议</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Endpoints;

    /**
     * @param string $SerialId <p>唯一标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FlinkVersion <p>Flink内核版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>状态，1.停止 2. 开启中 3. 开启 4. 开启失败 5. 停止中</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatorUin <p>创建人</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceRefs <p>引用资源</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $CuSpec <p>Cu规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Properties <p>配置参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Cpu <p>Cpu</p>
     * @param float $Mem <p>Mem</p>
     * @param string $JdkVersion <p>jdk版本</p>
     * @param string $SessionClusterId <p>session id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PgUser <p>pg用户名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Endpoints <p>协议</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("JdkVersion",$param) and $param["JdkVersion"] !== null) {
            $this->JdkVersion = $param["JdkVersion"];
        }

        if (array_key_exists("SessionClusterId",$param) and $param["SessionClusterId"] !== null) {
            $this->SessionClusterId = $param["SessionClusterId"];
        }

        if (array_key_exists("PgUser",$param) and $param["PgUser"] !== null) {
            $this->PgUser = $param["PgUser"];
        }

        if (array_key_exists("Endpoints",$param) and $param["Endpoints"] !== null) {
            $this->Endpoints = [];
            foreach ($param["Endpoints"] as $key => $value){
                $obj = new SqlGatewayEndpoint();
                $obj->deserialize($value);
                array_push($this->Endpoints, $obj);
            }
        }
    }
}
