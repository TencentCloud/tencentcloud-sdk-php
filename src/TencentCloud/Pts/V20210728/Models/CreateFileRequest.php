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
 * CreateFile请求参数结构体
 *
 * @method string getFileId() 获取文件 ID
 * @method void setFileId(string $FileId) 设置文件 ID
 * @method string getProjectId() 获取项目 ID
 * @method void setProjectId(string $ProjectId) 设置项目 ID
 * @method integer getKind() 获取文件种类，参数文件-1，协议文件-2，请求文件-3
 * @method void setKind(integer $Kind) 设置文件种类，参数文件-1，协议文件-2，请求文件-3
 * @method string getName() 获取文件名
 * @method void setName(string $Name) 设置文件名
 * @method integer getSize() 获取文件大小
 * @method void setSize(integer $Size) 设置文件大小
 * @method string getType() 获取文件类型，文件夹-folder
 * @method void setType(string $Type) 设置文件类型，文件夹-folder
 * @method integer getLineCount() 获取行数
 * @method void setLineCount(integer $LineCount) 设置行数
 * @method array getHeadLines() 获取前几行数据
 * @method void setHeadLines(array $HeadLines) 设置前几行数据
 * @method array getTailLines() 获取后几行数据
 * @method void setTailLines(array $TailLines) 设置后几行数据
 * @method boolean getHeaderInFile() 获取表头是否在文件内
 * @method void setHeaderInFile(boolean $HeaderInFile) 设置表头是否在文件内
 * @method array getHeaderColumns() 获取表头
 * @method void setHeaderColumns(array $HeaderColumns) 设置表头
 * @method array getFileInfos() 获取文件夹中的文件
 * @method void setFileInfos(array $FileInfos) 设置文件夹中的文件
 */
class CreateFileRequest extends AbstractModel
{
    /**
     * @var string 文件 ID
     */
    public $FileId;

    /**
     * @var string 项目 ID
     */
    public $ProjectId;

    /**
     * @var integer 文件种类，参数文件-1，协议文件-2，请求文件-3
     */
    public $Kind;

    /**
     * @var string 文件名
     */
    public $Name;

    /**
     * @var integer 文件大小
     */
    public $Size;

    /**
     * @var string 文件类型，文件夹-folder
     */
    public $Type;

    /**
     * @var integer 行数
     */
    public $LineCount;

    /**
     * @var array 前几行数据
     */
    public $HeadLines;

    /**
     * @var array 后几行数据
     */
    public $TailLines;

    /**
     * @var boolean 表头是否在文件内
     */
    public $HeaderInFile;

    /**
     * @var array 表头
     */
    public $HeaderColumns;

    /**
     * @var array 文件夹中的文件
     */
    public $FileInfos;

    /**
     * @param string $FileId 文件 ID
     * @param string $ProjectId 项目 ID
     * @param integer $Kind 文件种类，参数文件-1，协议文件-2，请求文件-3
     * @param string $Name 文件名
     * @param integer $Size 文件大小
     * @param string $Type 文件类型，文件夹-folder
     * @param integer $LineCount 行数
     * @param array $HeadLines 前几行数据
     * @param array $TailLines 后几行数据
     * @param boolean $HeaderInFile 表头是否在文件内
     * @param array $HeaderColumns 表头
     * @param array $FileInfos 文件夹中的文件
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

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
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
    }
}
