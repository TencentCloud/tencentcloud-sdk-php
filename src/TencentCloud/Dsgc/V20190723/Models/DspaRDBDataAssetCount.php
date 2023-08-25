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
 * RDB关系型数据库敏感数据资产统计
 *
 * @method integer getDataAssetType() 获取数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataAssetType(integer $DataAssetType) 设置数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalDbCnt() 获取已扫描的数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalDbCnt(integer $TotalDbCnt) 设置已扫描的数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalTableCnt() 获取数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalTableCnt(integer $TotalTableCnt) 设置数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveCategoryCnt() 获取敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveCategoryCnt(integer $SensitiveCategoryCnt) 设置敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveFieldCnt() 获取敏感字段的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveFieldCnt(integer $SensitiveFieldCnt) 设置敏感字段的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSensitiveLevel() 获取敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveLevel(array $SensitiveLevel) 设置敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveDbCnt() 获取敏感数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveDbCnt(integer $SensitiveDbCnt) 设置敏感数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveTableCnt() 获取敏感数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveTableCnt(integer $SensitiveTableCnt) 设置敏感数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalFieldCnt() 获取扫描字段的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalFieldCnt(integer $TotalFieldCnt) 设置扫描字段的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCategoryDistributed() 获取数据分类分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryDistributed(array $CategoryDistributed) 设置数据分类分布
注意：此字段可能返回 null，表示取不到有效值。
 */
class DspaRDBDataAssetCount extends AbstractModel
{
    /**
     * @var integer 数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataAssetType;

    /**
     * @var integer 已扫描的数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalDbCnt;

    /**
     * @var integer 数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalTableCnt;

    /**
     * @var integer 敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveCategoryCnt;

    /**
     * @var integer 敏感字段的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveFieldCnt;

    /**
     * @var array 敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveLevel;

    /**
     * @var integer 敏感数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveDbCnt;

    /**
     * @var integer 敏感数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveTableCnt;

    /**
     * @var integer 扫描字段的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalFieldCnt;

    /**
     * @var array 数据分类分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryDistributed;

    /**
     * @param integer $DataAssetType 数组资产类型，0代表关系型数据库资产，1代表对象存储COS资产
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalDbCnt 已扫描的数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalTableCnt 数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveCategoryCnt 敏感数据类型个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveFieldCnt 敏感字段的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SensitiveLevel 敏感等级分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveDbCnt 敏感数据库的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveTableCnt 敏感数据库表的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalFieldCnt 扫描字段的个数
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

        if (array_key_exists("TotalDbCnt",$param) and $param["TotalDbCnt"] !== null) {
            $this->TotalDbCnt = $param["TotalDbCnt"];
        }

        if (array_key_exists("TotalTableCnt",$param) and $param["TotalTableCnt"] !== null) {
            $this->TotalTableCnt = $param["TotalTableCnt"];
        }

        if (array_key_exists("SensitiveCategoryCnt",$param) and $param["SensitiveCategoryCnt"] !== null) {
            $this->SensitiveCategoryCnt = $param["SensitiveCategoryCnt"];
        }

        if (array_key_exists("SensitiveFieldCnt",$param) and $param["SensitiveFieldCnt"] !== null) {
            $this->SensitiveFieldCnt = $param["SensitiveFieldCnt"];
        }

        if (array_key_exists("SensitiveLevel",$param) and $param["SensitiveLevel"] !== null) {
            $this->SensitiveLevel = [];
            foreach ($param["SensitiveLevel"] as $key => $value){
                $obj = new SensitiveLevel();
                $obj->deserialize($value);
                array_push($this->SensitiveLevel, $obj);
            }
        }

        if (array_key_exists("SensitiveDbCnt",$param) and $param["SensitiveDbCnt"] !== null) {
            $this->SensitiveDbCnt = $param["SensitiveDbCnt"];
        }

        if (array_key_exists("SensitiveTableCnt",$param) and $param["SensitiveTableCnt"] !== null) {
            $this->SensitiveTableCnt = $param["SensitiveTableCnt"];
        }

        if (array_key_exists("TotalFieldCnt",$param) and $param["TotalFieldCnt"] !== null) {
            $this->TotalFieldCnt = $param["TotalFieldCnt"];
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
