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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 点详细信息
 *
 * @method integer getType() 获取该节点类型，进程:1；网络:2；文件:3；ssh:4
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置该节点类型，进程:1；网络:2；文件:3；ssh:4
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取各节点类型用到的时间，2022-11-29 00:00:00 格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置各节点类型用到的时间，2022-11-29 00:00:00 格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarmInfo() 获取告警信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmInfo(array $AlarmInfo) 设置告警信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProcName() 获取进程名，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProcName(string $ProcName) 设置进程名，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmdLine() 获取命令行，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdLine(string $CmdLine) 设置命令行，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPid() 获取进程id，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPid(string $Pid) 设置进程id，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileMd5() 获取文件md5，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileMd5(string $FileMd5) 设置文件md5，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileContent() 获取文件写入内容，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileContent(string $FileContent) 设置文件写入内容，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFilePath() 获取文件路径，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilePath(string $FilePath) 设置文件路径，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileCreateTime() 获取文件创建时间，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileCreateTime(string $FileCreateTime) 设置文件创建时间，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAddress() 获取请求目的地址，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddress(string $Address) 设置请求目的地址，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDstPort() 获取目标端口，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstPort(integer $DstPort) 设置目标端口，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcIP() 获取登录源ip，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcIP(string $SrcIP) 设置登录源ip，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUser() 获取登录用户名用户组，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUser(string $User) 设置登录用户名用户组，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulName() 获取漏洞名称，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulName(string $VulName) 设置漏洞名称，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulTime() 获取漏洞利用时间，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulTime(string $VulTime) 设置漏洞利用时间，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpContent() 获取http请求内容，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpContent(string $HttpContent) 设置http请求内容，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVulSrcIP() 获取漏洞利用者来源ip，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulSrcIP(string $VulSrcIP) 设置漏洞利用者来源ip，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVertexId() 获取点id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVertexId(string $VertexId) 设置点id
注意：此字段可能返回 null，表示取不到有效值。
 */
class VertexDetail extends AbstractModel
{
    /**
     * @var integer 该节点类型，进程:1；网络:2；文件:3；ssh:4
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 各节点类型用到的时间，2022-11-29 00:00:00 格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var array 告警信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmInfo;

    /**
     * @var string 进程名，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProcName;

    /**
     * @var string 命令行，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdLine;

    /**
     * @var string 进程id，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Pid;

    /**
     * @var string 文件md5，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileMd5;

    /**
     * @var string 文件写入内容，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileContent;

    /**
     * @var string 文件路径，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FilePath;

    /**
     * @var string 文件创建时间，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileCreateTime;

    /**
     * @var string 请求目的地址，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Address;

    /**
     * @var integer 目标端口，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstPort;

    /**
     * @var string 登录源ip，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcIP;

    /**
     * @var string 登录用户名用户组，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $User;

    /**
     * @var string 漏洞名称，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulName;

    /**
     * @var string 漏洞利用时间，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulTime;

    /**
     * @var string http请求内容，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpContent;

    /**
     * @var string 漏洞利用者来源ip，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulSrcIP;

    /**
     * @var string 点id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VertexId;

    /**
     * @param integer $Type 该节点类型，进程:1；网络:2；文件:3；ssh:4
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 各节点类型用到的时间，2022-11-29 00:00:00 格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlarmInfo 告警信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProcName 进程名，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CmdLine 命令行，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Pid 进程id，当该节点为进程时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileMd5 文件md5，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileContent 文件写入内容，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FilePath 文件路径，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileCreateTime 文件创建时间，当该节点为文件时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Address 请求目的地址，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DstPort 目标端口，当该节点为网络时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcIP 登录源ip，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $User 登录用户名用户组，当该节点为ssh时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulName 漏洞名称，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulTime 漏洞利用时间，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpContent http请求内容，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VulSrcIP 漏洞利用者来源ip，当该节点为漏洞时生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VertexId 点id
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("AlarmInfo",$param) and $param["AlarmInfo"] !== null) {
            $this->AlarmInfo = [];
            foreach ($param["AlarmInfo"] as $key => $value){
                $obj = new AlarmInfo();
                $obj->deserialize($value);
                array_push($this->AlarmInfo, $obj);
            }
        }

        if (array_key_exists("ProcName",$param) and $param["ProcName"] !== null) {
            $this->ProcName = $param["ProcName"];
        }

        if (array_key_exists("CmdLine",$param) and $param["CmdLine"] !== null) {
            $this->CmdLine = $param["CmdLine"];
        }

        if (array_key_exists("Pid",$param) and $param["Pid"] !== null) {
            $this->Pid = $param["Pid"];
        }

        if (array_key_exists("FileMd5",$param) and $param["FileMd5"] !== null) {
            $this->FileMd5 = $param["FileMd5"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileCreateTime",$param) and $param["FileCreateTime"] !== null) {
            $this->FileCreateTime = $param["FileCreateTime"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = $param["DstPort"];
        }

        if (array_key_exists("SrcIP",$param) and $param["SrcIP"] !== null) {
            $this->SrcIP = $param["SrcIP"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulTime",$param) and $param["VulTime"] !== null) {
            $this->VulTime = $param["VulTime"];
        }

        if (array_key_exists("HttpContent",$param) and $param["HttpContent"] !== null) {
            $this->HttpContent = $param["HttpContent"];
        }

        if (array_key_exists("VulSrcIP",$param) and $param["VulSrcIP"] !== null) {
            $this->VulSrcIP = $param["VulSrcIP"];
        }

        if (array_key_exists("VertexId",$param) and $param["VertexId"] !== null) {
            $this->VertexId = $param["VertexId"];
        }
    }
}
