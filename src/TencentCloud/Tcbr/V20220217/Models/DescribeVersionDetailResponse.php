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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVersionDetail返回参数结构体
 *
 * @method string getName() 获取版本名
 * @method void setName(string $Name) 设置版本名
 * @method integer getPort() 获取端口号
 * @method void setPort(integer $Port) 设置端口号
 * @method float getCpu() 获取cpu 规格
 * @method void setCpu(float $Cpu) 设置cpu 规格
 * @method float getMem() 获取mem 规格
 * @method void setMem(float $Mem) 设置mem 规格
 * @method integer getMinNum() 获取最小副本数
 * @method void setMinNum(integer $MinNum) 设置最小副本数
 * @method integer getMaxNum() 获取最大副本数
 * @method void setMaxNum(integer $MaxNum) 设置最大副本数
 * @method array getPolicyDetails() 获取扩缩容策略
 * @method void setPolicyDetails(array $PolicyDetails) 设置扩缩容策略
 * @method string getDockerfile() 获取Dockerfile path
 * @method void setDockerfile(string $Dockerfile) 设置Dockerfile path
 * @method string getBuildDir() 获取目标目录
 * @method void setBuildDir(string $BuildDir) 设置目标目录
 * @method string getEnvParams() 获取环境变量
 * @method void setEnvParams(string $EnvParams) 设置环境变量
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdatedTime() 获取更新时间
 * @method void setUpdatedTime(string $UpdatedTime) 设置更新时间
 * @method string getLogPath() 获取日志采集路径
 * @method void setLogPath(string $LogPath) 设置日志采集路径
 * @method string getEntryPoint() 获取entryPoint
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntryPoint(string $EntryPoint) 设置entryPoint
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmd() 获取Cmd
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmd(string $Cmd) 设置Cmd
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpcConf getVpcConf() 获取vpc conf
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcConf(VpcConf $VpcConf) 设置vpc conf
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumesConf() 获取volume conf
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumesConf(array $VolumesConf) 设置volume conf
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVersionDetailResponse extends AbstractModel
{
    /**
     * @var string 版本名
     */
    public $Name;

    /**
     * @var integer 端口号
     */
    public $Port;

    /**
     * @var float cpu 规格
     */
    public $Cpu;

    /**
     * @var float mem 规格
     */
    public $Mem;

    /**
     * @var integer 最小副本数
     */
    public $MinNum;

    /**
     * @var integer 最大副本数
     */
    public $MaxNum;

    /**
     * @var array 扩缩容策略
     */
    public $PolicyDetails;

    /**
     * @var string Dockerfile path
     */
    public $Dockerfile;

    /**
     * @var string 目标目录
     */
    public $BuildDir;

    /**
     * @var string 环境变量
     */
    public $EnvParams;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $UpdatedTime;

    /**
     * @var string 日志采集路径
     */
    public $LogPath;

    /**
     * @var string entryPoint
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntryPoint;

    /**
     * @var string Cmd
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cmd;

    /**
     * @var VpcConf vpc conf
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcConf;

    /**
     * @var array volume conf
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumesConf;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 版本名
     * @param integer $Port 端口号
     * @param float $Cpu cpu 规格
     * @param float $Mem mem 规格
     * @param integer $MinNum 最小副本数
     * @param integer $MaxNum 最大副本数
     * @param array $PolicyDetails 扩缩容策略
     * @param string $Dockerfile Dockerfile path
     * @param string $BuildDir 目标目录
     * @param string $EnvParams 环境变量
     * @param string $Status 状态
     * @param string $CreatedTime 创建时间
     * @param string $UpdatedTime 更新时间
     * @param string $LogPath 日志采集路径
     * @param string $EntryPoint entryPoint
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cmd Cmd
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpcConf $VpcConf vpc conf
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VolumesConf volume conf
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("MinNum",$param) and $param["MinNum"] !== null) {
            $this->MinNum = $param["MinNum"];
        }

        if (array_key_exists("MaxNum",$param) and $param["MaxNum"] !== null) {
            $this->MaxNum = $param["MaxNum"];
        }

        if (array_key_exists("PolicyDetails",$param) and $param["PolicyDetails"] !== null) {
            $this->PolicyDetails = [];
            foreach ($param["PolicyDetails"] as $key => $value){
                $obj = new HpaPolicy();
                $obj->deserialize($value);
                array_push($this->PolicyDetails, $obj);
            }
        }

        if (array_key_exists("Dockerfile",$param) and $param["Dockerfile"] !== null) {
            $this->Dockerfile = $param["Dockerfile"];
        }

        if (array_key_exists("BuildDir",$param) and $param["BuildDir"] !== null) {
            $this->BuildDir = $param["BuildDir"];
        }

        if (array_key_exists("EnvParams",$param) and $param["EnvParams"] !== null) {
            $this->EnvParams = $param["EnvParams"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("LogPath",$param) and $param["LogPath"] !== null) {
            $this->LogPath = $param["LogPath"];
        }

        if (array_key_exists("EntryPoint",$param) and $param["EntryPoint"] !== null) {
            $this->EntryPoint = $param["EntryPoint"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("VpcConf",$param) and $param["VpcConf"] !== null) {
            $this->VpcConf = new VpcConf();
            $this->VpcConf->deserialize($param["VpcConf"]);
        }

        if (array_key_exists("VolumesConf",$param) and $param["VolumesConf"] !== null) {
            $this->VolumesConf = [];
            foreach ($param["VolumesConf"] as $key => $value){
                $obj = new VolumeConf();
                $obj->deserialize($value);
                array_push($this->VolumesConf, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
