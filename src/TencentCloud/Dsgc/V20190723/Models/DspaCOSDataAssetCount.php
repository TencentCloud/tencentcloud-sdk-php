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
 * COS对象存储敏感数据资产统计
 *
 * @method integer getDataAssetType() 获取数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataAssetType(integer $DataAssetType) 设置数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalBucketCnt() 获取已扫描的存储桶的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalBucketCnt(integer $TotalBucketCnt) 设置已扫描的存储桶的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalObjectCnt() 获取对象总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalObjectCnt(integer $TotalObjectCnt) 设置对象总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveCategoryCnt() 获取敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveCategoryCnt(integer $SensitiveCategoryCnt) 设置敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveDataCnt() 获取敏感数据条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveDataCnt(integer $SensitiveDataCnt) 设置敏感数据条数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSensitiveLevel() 获取敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveLevel(array $SensitiveLevel) 设置敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveBucketCnt() 获取敏感存储桶个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveBucketCnt(integer $SensitiveBucketCnt) 设置敏感存储桶个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveObjectCnt() 获取敏感对象个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveObjectCnt(integer $SensitiveObjectCnt) 设置敏感对象个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCategoryDistributed() 获取数据分类分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryDistributed(array $CategoryDistributed) 设置数据分类分布
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaCOSDataAssetCount extends AbstractModel
{
    /**
     * @var integer 数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataAssetType;

    /**
     * @var integer 已扫描的存储桶的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalBucketCnt;

    /**
     * @var integer 对象总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalObjectCnt;

    /**
     * @var integer 敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveCategoryCnt;

    /**
     * @var integer 敏感数据条数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveDataCnt;

    /**
     * @var array 敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveLevel;

    /**
     * @var integer 敏感存储桶个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveBucketCnt;

    /**
     * @var integer 敏感对象个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveObjectCnt;

    /**
     * @var array 数据分类分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryDistributed;

    /**
     * @param integer $DataAssetType 数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalBucketCnt 已扫描的存储桶的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalObjectCnt 对象总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveCategoryCnt 敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveDataCnt 敏感数据条数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SensitiveLevel 敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveBucketCnt 敏感存储桶个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveObjectCnt 敏感对象个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CategoryDistributed 数据分类分布
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
        if (array_key_exists("DataAssetType",$param) and $param["DataAssetType"] !== null) {
            $this->DataAssetType = $param["DataAssetType"];
        }

        if (array_key_exists("TotalBucketCnt",$param) and $param["TotalBucketCnt"] !== null) {
            $this->TotalBucketCnt = $param["TotalBucketCnt"];
        }

        if (array_key_exists("TotalObjectCnt",$param) and $param["TotalObjectCnt"] !== null) {
            $this->TotalObjectCnt = $param["TotalObjectCnt"];
        }

        if (array_key_exists("SensitiveCategoryCnt",$param) and $param["SensitiveCategoryCnt"] !== null) {
            $this->SensitiveCategoryCnt = $param["SensitiveCategoryCnt"];
        }

        if (array_key_exists("SensitiveDataCnt",$param) and $param["SensitiveDataCnt"] !== null) {
            $this->SensitiveDataCnt = $param["SensitiveDataCnt"];
        }

        if (array_key_exists("SensitiveLevel",$param) and $param["SensitiveLevel"] !== null) {
            $this->SensitiveLevel = [];
            foreach ($param["SensitiveLevel"] as $key => $value){
                $obj = new SensitiveLevel();
                $obj->deserialize($value);
                array_push($this->SensitiveLevel, $obj);
            }
        }

        if (array_key_exists("SensitiveBucketCnt",$param) and $param["SensitiveBucketCnt"] !== null) {
            $this->SensitiveBucketCnt = $param["SensitiveBucketCnt"];
        }

        if (array_key_exists("SensitiveObjectCnt",$param) and $param["SensitiveObjectCnt"] !== null) {
            $this->SensitiveObjectCnt = $param["SensitiveObjectCnt"];
        }

        if (array_key_exists("CategoryDistributed",$param) and $param["CategoryDistributed"] !== null) {
            $this->CategoryDistributed = [];
            foreach ($param["CategoryDistributed"] as $key => $value){
                $obj = new DspaDataCategoryDistributed();
                $obj->deserialize($value);
                array_push($this->CategoryDistributed, $obj);
            }
        }
    }
}
