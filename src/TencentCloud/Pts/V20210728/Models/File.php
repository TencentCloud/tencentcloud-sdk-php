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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件列表
 *
 * @method string getFileId() 获取文件 ID
 * @method void setFileId(string $FileId) 设置文件 ID
 * @method integer getKind() 获取文件种类，参数文件-1，协议文件-2，请求文件-3
 * @method void setKind(integer $Kind) 设置文件种类，参数文件-1，协议文件-2，请求文件-3
 * @method string getName() 获取文件名
 * @method void setName(string $Name) 设置文件名
 * @method integer getSize() 获取文件字节数
 * @method void setSize(integer $Size) 设置文件字节数
 * @method string getType() 获取文件类型
 * @method void setType(string $Type) 设置文件类型
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method integer getLineCount() 获取文件行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineCount(integer $LineCount) 设置文件行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeadLines() 获取头部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadLines(array $HeadLines) 设置头部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTailLines() 获取尾部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTailLines(array $TailLines) 设置尾部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHeaderInFile() 获取首行是否为参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderInFile(boolean $HeaderInFile) 设置首行是否为参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaderColumns() 获取参数名数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderColumns(array $HeaderColumns) 设置参数名数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileInfos() 获取文件夹中的文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileInfos(array $FileInfos) 设置文件夹中的文件
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScenarioSet() 获取关联场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScenarioSet(array $ScenarioSet) 设置关联场景
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取文件状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置文件状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppID() 获取此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppID(integer $AppID) 设置此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取用户主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置用户主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取用户子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置用户子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取用户账号的 App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置用户账号的 App ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class File extends AbstractModel
{
    /**
     * @var string 文件 ID
     */
    public $FileId;

    /**
     * @var integer 文件种类，参数文件-1，协议文件-2，请求文件-3
     */
    public $Kind;

    /**
     * @var string 文件名
     */
    public $Name;

    /**
     * @var integer 文件字节数
     */
    public $Size;

    /**
     * @var string 文件类型
     */
    public $Type;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var integer 文件行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineCount;

    /**
     * @var array 头部数据行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeadLines;

    /**
     * @var array 尾部数据行
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TailLines;

    /**
     * @var boolean 首行是否为参数名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderInFile;

    /**
     * @var array 参数名数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderColumns;

    /**
     * @var array 文件夹中的文件
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileInfos;

    /**
     * @var array 关联场景
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScenarioSet;

    /**
     * @var integer 文件状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppID;

    /**
     * @var string 用户主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 用户子账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var integer 用户账号的 App ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @param string $FileId 文件 ID
     * @param integer $Kind 文件种类，参数文件-1，协议文件-2，请求文件-3
     * @param string $Name 文件名
     * @param integer $Size 文件字节数
     * @param string $Type 文件类型
     * @param string $UpdatedAt 更新时间
     * @param integer $LineCount 文件行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HeadLines 头部数据行
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TailLines 尾部数据行
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HeaderInFile 首行是否为参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HeaderColumns 参数名数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileInfos 文件夹中的文件
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScenarioSet 关联场景
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 文件状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppID 此字段不再使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 用户主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 用户子账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId 用户账号的 App ID
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
        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("HeadLines",$param) and $param["HeadLines"] !== null) {
            $this->HeadLines = $param["HeadLines"];
        }

        if (array_key_exists("TailLines",$param) and $param["TailLines"] !== null) {
            $this->TailLines = $param["TailLines"];
        }

        if (array_key_exists("HeaderInFile",$param) and $param["HeaderInFile"] !== null) {
            $this->HeaderInFile = $param["HeaderInFile"];
        }

        if (array_key_exists("HeaderColumns",$param) and $param["HeaderColumns"] !== null) {
            $this->HeaderColumns = $param["HeaderColumns"];
        }

        if (array_key_exists("FileInfos",$param) and $param["FileInfos"] !== null) {
            $this->FileInfos = [];
            foreach ($param["FileInfos"] as $key => $value){
                $obj = new FileInfo();
                $obj->deserialize($value);
                array_push($this->FileInfos, $obj);
            }
        }

        if (array_key_exists("ScenarioSet",$param) and $param["ScenarioSet"] !== null) {
            $this->ScenarioSet = [];
            foreach ($param["ScenarioSet"] as $key => $value){
                $obj = new Scenario();
                $obj->deserialize($value);
                array_push($this->ScenarioSet, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }
    }
}
