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
 * @method string getName() 获取<p>版本名</p>
 * @method void setName(string $Name) 设置<p>版本名</p>
 * @method integer getPort() 获取<p>端口号</p>
 * @method void setPort(integer $Port) 设置<p>端口号</p>
 * @method float getCpu() 获取<p>cpu 规格</p>
 * @method void setCpu(float $Cpu) 设置<p>cpu 规格</p>
 * @method float getMem() 获取<p>mem 规格</p>
 * @method void setMem(float $Mem) 设置<p>mem 规格</p>
 * @method integer getMinNum() 获取<p>最小副本数</p>
 * @method void setMinNum(integer $MinNum) 设置<p>最小副本数</p>
 * @method integer getMaxNum() 获取<p>最大副本数</p>
 * @method void setMaxNum(integer $MaxNum) 设置<p>最大副本数</p>
 * @method array getPolicyDetails() 获取<p>扩缩容策略</p>
 * @method void setPolicyDetails(array $PolicyDetails) 设置<p>扩缩容策略</p>
 * @method string getDockerfile() 获取<p>Dockerfile path</p>
 * @method void setDockerfile(string $Dockerfile) 设置<p>Dockerfile path</p>
 * @method string getBuildDir() 获取<p>目标目录</p>
 * @method void setBuildDir(string $BuildDir) 设置<p>目标目录</p>
 * @method string getEnvParams() 获取<p>环境变量</p>
 * @method void setEnvParams(string $EnvParams) 设置<p>环境变量</p>
 * @method string getStatus() 获取<p>状态</p>
 * @method void setStatus(string $Status) 设置<p>状态</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method string getUpdatedTime() 获取<p>更新时间</p>
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>更新时间</p>
 * @method string getLogPath() 获取<p>日志采集路径</p>
 * @method void setLogPath(string $LogPath) 设置<p>日志采集路径</p>
 * @method string getEntryPoint() 获取<p>entryPoint</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEntryPoint(string $EntryPoint) 设置<p>entryPoint</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmd() 获取<p>Cmd</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmd(string $Cmd) 设置<p>Cmd</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method VpcConf getVpcConf() 获取<p>vpc conf</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcConf(VpcConf $VpcConf) 设置<p>vpc conf</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVolumesConf() 获取<p>volume conf</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVolumesConf(array $VolumesConf) 设置<p>volume conf</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method BuildPacksInfo getBuildPacks() 获取<p>buildpack 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBuildPacks(BuildPacksInfo $BuildPacks) 设置<p>buildpack 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVersionDetailResponse extends AbstractModel
{
    /**
     * @var string <p>版本名</p>
     */
    public $Name;

    /**
     * @var integer <p>端口号</p>
     */
    public $Port;

    /**
     * @var float <p>cpu 规格</p>
     */
    public $Cpu;

    /**
     * @var float <p>mem 规格</p>
     */
    public $Mem;

    /**
     * @var integer <p>最小副本数</p>
     */
    public $MinNum;

    /**
     * @var integer <p>最大副本数</p>
     */
    public $MaxNum;

    /**
     * @var array <p>扩缩容策略</p>
     */
    public $PolicyDetails;

    /**
     * @var string <p>Dockerfile path</p>
     */
    public $Dockerfile;

    /**
     * @var string <p>目标目录</p>
     */
    public $BuildDir;

    /**
     * @var string <p>环境变量</p>
     */
    public $EnvParams;

    /**
     * @var string <p>状态</p>
     */
    public $Status;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdatedTime;

    /**
     * @var string <p>日志采集路径</p>
     */
    public $LogPath;

    /**
     * @var string <p>entryPoint</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EntryPoint;

    /**
     * @var string <p>Cmd</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cmd;

    /**
     * @var VpcConf <p>vpc conf</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcConf;

    /**
     * @var array <p>volume conf</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VolumesConf;

    /**
     * @var BuildPacksInfo <p>buildpack 信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BuildPacks;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name <p>版本名</p>
     * @param integer $Port <p>端口号</p>
     * @param float $Cpu <p>cpu 规格</p>
     * @param float $Mem <p>mem 规格</p>
     * @param integer $MinNum <p>最小副本数</p>
     * @param integer $MaxNum <p>最大副本数</p>
     * @param array $PolicyDetails <p>扩缩容策略</p>
     * @param string $Dockerfile <p>Dockerfile path</p>
     * @param string $BuildDir <p>目标目录</p>
     * @param string $EnvParams <p>环境变量</p>
     * @param string $Status <p>状态</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param string $UpdatedTime <p>更新时间</p>
     * @param string $LogPath <p>日志采集路径</p>
     * @param string $EntryPoint <p>entryPoint</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cmd <p>Cmd</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param VpcConf $VpcConf <p>vpc conf</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $VolumesConf <p>volume conf</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param BuildPacksInfo $BuildPacks <p>buildpack 信息</p>
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

        if (array_key_exists("BuildPacks",$param) and $param["BuildPacks"] !== null) {
            $this->BuildPacks = new BuildPacksInfo();
            $this->BuildPacks->deserialize($param["BuildPacks"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
