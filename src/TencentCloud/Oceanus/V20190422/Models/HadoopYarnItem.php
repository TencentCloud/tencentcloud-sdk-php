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
 * @method string getClusterGroupSerialId() 获取<p>ClusterGroupSerialId</p>
 * @method void setClusterGroupSerialId(string $ClusterGroupSerialId) 设置<p>ClusterGroupSerialId</p>
 * @method integer getStatus() 获取<p>状态</p><p>枚举值：</p><ul><li>1： 停止</li><li>2： 开启中</li><li>3： 启动</li><li>4： 开启失败</li><li>5： 停止中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>状态</p><p>枚举值：</p><ul><li>1： 停止</li><li>2： 开启中</li><li>3： 启动</li><li>4： 开启失败</li><li>5： 停止中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getCpu() 获取<p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCpu(float $Cpu) 设置<p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getMem() 获取<p>mem</p>
 * @method void setMem(float $Mem) 设置<p>mem</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 * @method string getConfig() 获取<p>配置文件内容</p>
 * @method void setConfig(string $Config) 设置<p>配置文件内容</p>
 * @method string getCreatorUin() 获取<p>CreatorUin</p>
 * @method void setCreatorUin(string $CreatorUin) 设置<p>CreatorUin</p>
 */
class HadoopYarnItem extends AbstractModel
{
    /**
     * @var string <p>ClusterGroupSerialId</p>
     */
    public $ClusterGroupSerialId;

    /**
     * @var integer <p>状态</p><p>枚举值：</p><ul><li>1： 停止</li><li>2： 开启中</li><li>3： 启动</li><li>4： 开启失败</li><li>5： 停止中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var float <p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cpu;

    /**
     * @var float <p>mem</p>
     */
    public $Mem;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>配置文件内容</p>
     */
    public $Config;

    /**
     * @var string <p>CreatorUin</p>
     */
    public $CreatorUin;

    /**
     * @param string $ClusterGroupSerialId <p>ClusterGroupSerialId</p>
     * @param integer $Status <p>状态</p><p>枚举值：</p><ul><li>1： 停止</li><li>2： 开启中</li><li>3： 启动</li><li>4： 开启失败</li><li>5： 停止中</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Cpu <p>cpu</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Mem <p>mem</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
     * @param string $Config <p>配置文件内容</p>
     * @param string $CreatorUin <p>CreatorUin</p>
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
