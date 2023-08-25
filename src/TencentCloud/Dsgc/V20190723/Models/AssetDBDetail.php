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
 * RDB敏感资产详情列表
 *
 * @method string getDataSourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDdName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdName(string $DdName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataType() 获取数据库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataType(string $DataType) 设置数据库类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableNums() 获取表的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableNums(integer $TableNums) 设置表的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveTableNums() 获取敏感表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveTableNums(integer $SensitiveTableNums) 设置敏感表数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFieldNums() 获取字段的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFieldNums(integer $FieldNums) 设置字段的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveFieldNums() 获取敏感字段的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveFieldNums(integer $SensitiveFieldNums) 设置敏感字段的数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDistributionData() 获取敏感数据分布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistributionData(array $DistributionData) 设置敏感数据分布
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssetDBDetail extends AbstractModel
{
    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceId;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdName;

    /**
     * @var string 数据库类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataType;

    /**
     * @var integer 表的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableNums;

    /**
     * @var integer 敏感表数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveTableNums;

    /**
     * @var integer 字段的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FieldNums;

    /**
     * @var integer 敏感字段的数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveFieldNums;

    /**
     * @var array 敏感数据分布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DistributionData;

    /**
     * @param string $DataSourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DdName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataType 数据库类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableNums 表的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveTableNums 敏感表数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FieldNums 字段的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveFieldNums 敏感字段的数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DistributionData 敏感数据分布
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DdName",$param) and $param["DdName"] !== null) {
            $this->DdName = $param["DdName"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("TableNums",$param) and $param["TableNums"] !== null) {
            $this->TableNums = $param["TableNums"];
        }

        if (array_key_exists("SensitiveTableNums",$param) and $param["SensitiveTableNums"] !== null) {
            $this->SensitiveTableNums = $param["SensitiveTableNums"];
        }

        if (array_key_exists("FieldNums",$param) and $param["FieldNums"] !== null) {
            $this->FieldNums = $param["FieldNums"];
        }

        if (array_key_exists("SensitiveFieldNums",$param) and $param["SensitiveFieldNums"] !== null) {
            $this->SensitiveFieldNums = $param["SensitiveFieldNums"];
        }

        if (array_key_exists("DistributionData",$param) and $param["DistributionData"] !== null) {
            $this->DistributionData = [];
            foreach ($param["DistributionData"] as $key => $value){
                $obj = new Note();
                $obj->deserialize($value);
                array_push($this->DistributionData, $obj);
            }
        }
    }
}
