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
 * hadoopYarn资源信息
 *
 * @method string getClusterGroupSerialId() 获取ClusterGroupSerialId
 * @method void setClusterGroupSerialId(string $ClusterGroupSerialId) 设置ClusterGroupSerialId
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpu() 获取cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(float $Cpu) 设置cpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMem() 获取mem
 * @method void setMem(float $Mem) 设置mem
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getConfig() 获取配置文件内容
 * @method void setConfig(string $Config) 设置配置文件内容
 * @method string getCreatorUin() 获取CreatorUin
 * @method void setCreatorUin(string $CreatorUin) 设置CreatorUin
 */
class HadoopYarnItem extends AbstractModel
{
    /**
     * @var string ClusterGroupSerialId
     */
    public $ClusterGroupSerialId;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var float cpu
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var float mem
     */
    public $Mem;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 配置文件内容
     */
    public $Config;

    /**
     * @var string CreatorUin
     */
    public $CreatorUin;

    /**
     * @param string $ClusterGroupSerialId ClusterGroupSerialId
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Cpu cpu
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Mem mem
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Config 配置文件内容
     * @param string $CreatorUin CreatorUin
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
        if (array_key_exists("ClusterGroupSerialId",$param) and $param["ClusterGroupSerialId"] !== null) {
            $this->ClusterGroupSerialId = $param["ClusterGroupSerialId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("CreatorUin",$param) and $param["CreatorUin"] !== null) {
            $this->CreatorUin = $param["CreatorUin"];
        }
    }
}
