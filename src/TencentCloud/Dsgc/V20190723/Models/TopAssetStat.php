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
 * 设敏top资产的信息
 *
 * @method string getDataSourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubData() 获取db_name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubData(string $SubData) 设置db_name
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSensitiveCnt() 获取敏感个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSensitiveCnt(integer $SensitiveCnt) 设置敏感个数
注意：此字段可能返回 null，表示取不到有效值。
 */
class TopAssetStat extends AbstractModel
{
    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceId;

    /**
     * @var string db_name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubData;

    /**
     * @var integer 敏感个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SensitiveCnt;

    /**
     * @param string $DataSourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubData db_name
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SensitiveCnt 敏感个数
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

        if (array_key_exists("SubData",$param) and $param["SubData"] !== null) {
            $this->SubData = $param["SubData"];
        }

        if (array_key_exists("SensitiveCnt",$param) and $param["SensitiveCnt"] !== null) {
            $this->SensitiveCnt = $param["SensitiveCnt"];
        }
    }
}
