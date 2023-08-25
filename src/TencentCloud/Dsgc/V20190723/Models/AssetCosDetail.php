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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据资产报告-cos的资产详情
 *
 * @method string getBucket() 获取桶的名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucket(string $Bucket) 设置桶的名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataType(string $DataType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileNums() 获取文件的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileNums(integer $FileNums) 设置文件的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveFileNums() 获取敏感的文件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveFileNums(integer $SensitiveFileNums) 设置敏感的文件个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDistributionData() 获取敏感分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistributionData(array $DistributionData) 设置敏感分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMatchedNum() 获取cos文件的敏感数据个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMatchedNum(integer $MatchedNum) 设置cos文件的敏感数据个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetCosDetail extends AbstractModel
{
    /**
     * @var string 桶的名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bucket;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataType;

    /**
     * @var integer 文件的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileNums;

    /**
     * @var integer 敏感的文件个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveFileNums;

    /**
     * @var array 敏感分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DistributionData;

    /**
     * @var integer cos文件的敏感数据个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MatchedNum;

    /**
     * @param string $Bucket 桶的名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileNums 文件的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveFileNums 敏感的文件个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DistributionData 敏感分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MatchedNum cos文件的敏感数据个数
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
        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("FileNums",$param) and $param["FileNums"] !== null) {
            $this->FileNums = $param["FileNums"];
        }

        if (array_key_exists("SensitiveFileNums",$param) and $param["SensitiveFileNums"] !== null) {
            $this->SensitiveFileNums = $param["SensitiveFileNums"];
        }

        if (array_key_exists("DistributionData",$param) and $param["DistributionData"] !== null) {
            $this->DistributionData = [];
            foreach ($param["DistributionData"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->DistributionData, $obj);
            }
        }

        if (array_key_exists("MatchedNum",$param) and $param["MatchedNum"] !== null) {
            $this->MatchedNum = $param["MatchedNum"];
        }
    }
}
