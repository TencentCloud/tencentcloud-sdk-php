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
 * ES的概览页统计数据
 *
 * @method integer getDataAssetType() 获取es
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataAssetType(integer $DataAssetType) 设置es
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveIndexCnt() 获取敏感索引个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveIndexCnt(integer $SensitiveIndexCnt) 设置敏感索引个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalIndexCnt() 获取总的索引个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalIndexCnt(integer $TotalIndexCnt) 设置总的索引个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveFieldCnt() 获取敏感字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveFieldCnt(integer $SensitiveFieldCnt) 设置敏感字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalFieldCnt() 获取总的字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalFieldCnt(integer $TotalFieldCnt) 设置总的字段个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveCategoryCnt() 获取敏感分类的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveCategoryCnt(integer $SensitiveCategoryCnt) 设置敏感分类的个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSensitiveLevel() 获取敏感分级的分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveLevel(array $SensitiveLevel) 设置敏感分级的分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCategoryDistributed() 获取敏感分类的分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryDistributed(array $CategoryDistributed) 设置敏感分类的分布
注意：此字段可能返回 null，表示取不到有效值。
 */
class ESDataAssetCountDto extends AbstractModel
{
    /**
     * @var integer es
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataAssetType;

    /**
     * @var integer 敏感索引个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveIndexCnt;

    /**
     * @var integer 总的索引个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalIndexCnt;

    /**
     * @var integer 敏感字段个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveFieldCnt;

    /**
     * @var integer 总的字段个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalFieldCnt;

    /**
     * @var integer 敏感分类的个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveCategoryCnt;

    /**
     * @var array 敏感分级的分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveLevel;

    /**
     * @var array 敏感分类的分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryDistributed;

    /**
     * @param integer $DataAssetType es
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveIndexCnt 敏感索引个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalIndexCnt 总的索引个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveFieldCnt 敏感字段个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalFieldCnt 总的字段个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveCategoryCnt 敏感分类的个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SensitiveLevel 敏感分级的分布
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CategoryDistributed 敏感分类的分布
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

        if (array_key_exists("SensitiveIndexCnt",$param) and $param["SensitiveIndexCnt"] !== null) {
            $this->SensitiveIndexCnt = $param["SensitiveIndexCnt"];
        }

        if (array_key_exists("TotalIndexCnt",$param) and $param["TotalIndexCnt"] !== null) {
            $this->TotalIndexCnt = $param["TotalIndexCnt"];
        }

        if (array_key_exists("SensitiveFieldCnt",$param) and $param["SensitiveFieldCnt"] !== null) {
            $this->SensitiveFieldCnt = $param["SensitiveFieldCnt"];
        }

        if (array_key_exists("TotalFieldCnt",$param) and $param["TotalFieldCnt"] !== null) {
            $this->TotalFieldCnt = $param["TotalFieldCnt"];
        }

        if (array_key_exists("SensitiveCategoryCnt",$param) and $param["SensitiveCategoryCnt"] !== null) {
            $this->SensitiveCategoryCnt = $param["SensitiveCategoryCnt"];
        }

        if (array_key_exists("SensitiveLevel",$param) and $param["SensitiveLevel"] !== null) {
            $this->SensitiveLevel = [];
            foreach ($param["SensitiveLevel"] as $key => $value){
                $obj = new SensitiveLevel();
                $obj->deserialize($value);
                array_push($this->SensitiveLevel, $obj);
            }
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
