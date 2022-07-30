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
 * 测试数据集
 *
 * @method string getName() 获取测试数据集所在的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置测试数据集所在的文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getSplit() 获取测试数据集是否分片
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSplit(boolean $Split) 设置测试数据集是否分片
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHeaderInFile() 获取首行是否为参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderInFile(boolean $HeaderInFile) 设置首行是否为参数名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaderColumns() 获取参数名数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderColumns(array $HeaderColumns) 设置参数名数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLineCount() 获取文件行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLineCount(integer $LineCount) 设置文件行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取文件字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置文件字节数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeadLines() 获取头部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeadLines(array $HeadLines) 设置头部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTailLines() 获取尾部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTailLines(array $TailLines) 设置尾部数据行
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取文件 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置文件 ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class TestData extends AbstractModel
{
    /**
     * @var string 测试数据集所在的文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var boolean 测试数据集是否分片
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Split;

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
     * @var integer 文件行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LineCount;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var integer 文件字节数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

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
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 文件 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @param string $Name 测试数据集所在的文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Split 测试数据集是否分片
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HeaderInFile 首行是否为参数名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HeaderColumns 参数名数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LineCount 文件行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 文件字节数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HeadLines 头部数据行
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TailLines 尾部数据行
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 文件 ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Split",$param) and $param["Split"] !== null) {
            $this->Split = $param["Split"];
        }

        if (array_key_exists("HeaderInFile",$param) and $param["HeaderInFile"] !== null) {
            $this->HeaderInFile = $param["HeaderInFile"];
        }

        if (array_key_exists("HeaderColumns",$param) and $param["HeaderColumns"] !== null) {
            $this->HeaderColumns = $param["HeaderColumns"];
        }

        if (array_key_exists("LineCount",$param) and $param["LineCount"] !== null) {
            $this->LineCount = $param["LineCount"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("HeadLines",$param) and $param["HeadLines"] !== null) {
            $this->HeadLines = $param["HeadLines"];
        }

        if (array_key_exists("TailLines",$param) and $param["TailLines"] !== null) {
            $this->TailLines = $param["TailLines"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
