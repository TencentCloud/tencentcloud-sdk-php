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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 元数据存储描述属性
 *
 * @method string getLocation() 获取存储地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置存储地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputFormat() 获取输入格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputFormat(string $InputFormat) 设置输入格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputFormat() 获取输出格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputFormat(string $OutputFormat) 设置输出格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNumBuckets() 获取bucket数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNumBuckets(integer $NumBuckets) 设置bucket数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCompressed() 获取是是否压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompressed(boolean $Compressed) 设置是是否压缩
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getStoredAsSubDirectories() 获取是否有子目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStoredAsSubDirectories(boolean $StoredAsSubDirectories) 设置是否有子目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerdeLib() 获取序列化lib
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerdeLib(string $SerdeLib) 设置序列化lib
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSerdeName() 获取序列化名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerdeName(string $SerdeName) 设置序列化名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBucketCols() 获取桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketCols(array $BucketCols) 设置桶名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSerdeParams() 获取序列化参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerdeParams(array $SerdeParams) 设置序列化参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getParams() 获取附加参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(array $Params) 设置附加参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method DMSColumnOrder getSortCols() 获取列排序(Expired)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSortCols(DMSColumnOrder $SortCols) 设置列排序(Expired)
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCols() 获取列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCols(array $Cols) 设置列
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSortColumns() 获取列排序字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSortColumns(array $SortColumns) 设置列排序字段
注意：此字段可能返回 null，表示取不到有效值。
 */
class DMSSds extends AbstractModel
{
    /**
     * @var string 存储地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var string 输入格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputFormat;

    /**
     * @var string 输出格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputFormat;

    /**
     * @var integer bucket数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NumBuckets;

    /**
     * @var boolean 是是否压缩
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Compressed;

    /**
     * @var boolean 是否有子目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StoredAsSubDirectories;

    /**
     * @var string 序列化lib
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerdeLib;

    /**
     * @var string 序列化名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerdeName;

    /**
     * @var array 桶名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketCols;

    /**
     * @var array 序列化参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerdeParams;

    /**
     * @var array 附加参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var DMSColumnOrder 列排序(Expired)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SortCols;

    /**
     * @var array 列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cols;

    /**
     * @var array 列排序字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SortColumns;

    /**
     * @param string $Location 存储地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputFormat 输入格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputFormat 输出格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NumBuckets bucket数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Compressed 是是否压缩
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $StoredAsSubDirectories 是否有子目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerdeLib 序列化lib
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SerdeName 序列化名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BucketCols 桶名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SerdeParams 序列化参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Params 附加参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param DMSColumnOrder $SortCols 列排序(Expired)
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Cols 列
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SortColumns 列排序字段
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
        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("InputFormat",$param) and $param["InputFormat"] !== null) {
            $this->InputFormat = $param["InputFormat"];
        }

        if (array_key_exists("OutputFormat",$param) and $param["OutputFormat"] !== null) {
            $this->OutputFormat = $param["OutputFormat"];
        }

        if (array_key_exists("NumBuckets",$param) and $param["NumBuckets"] !== null) {
            $this->NumBuckets = $param["NumBuckets"];
        }

        if (array_key_exists("Compressed",$param) and $param["Compressed"] !== null) {
            $this->Compressed = $param["Compressed"];
        }

        if (array_key_exists("StoredAsSubDirectories",$param) and $param["StoredAsSubDirectories"] !== null) {
            $this->StoredAsSubDirectories = $param["StoredAsSubDirectories"];
        }

        if (array_key_exists("SerdeLib",$param) and $param["SerdeLib"] !== null) {
            $this->SerdeLib = $param["SerdeLib"];
        }

        if (array_key_exists("SerdeName",$param) and $param["SerdeName"] !== null) {
            $this->SerdeName = $param["SerdeName"];
        }

        if (array_key_exists("BucketCols",$param) and $param["BucketCols"] !== null) {
            $this->BucketCols = $param["BucketCols"];
        }

        if (array_key_exists("SerdeParams",$param) and $param["SerdeParams"] !== null) {
            $this->SerdeParams = [];
            foreach ($param["SerdeParams"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->SerdeParams, $obj);
            }
        }

        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = [];
            foreach ($param["Params"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Params, $obj);
            }
        }

        if (array_key_exists("SortCols",$param) and $param["SortCols"] !== null) {
            $this->SortCols = new DMSColumnOrder();
            $this->SortCols->deserialize($param["SortCols"]);
        }

        if (array_key_exists("Cols",$param) and $param["Cols"] !== null) {
            $this->Cols = [];
            foreach ($param["Cols"] as $key => $value){
                $obj = new DMSColumn();
                $obj->deserialize($value);
                array_push($this->Cols, $obj);
            }
        }

        if (array_key_exists("SortColumns",$param) and $param["SortColumns"] !== null) {
            $this->SortColumns = [];
            foreach ($param["SortColumns"] as $key => $value){
                $obj = new DMSColumnOrder();
                $obj->deserialize($value);
                array_push($this->SortColumns, $obj);
            }
        }
    }
}
