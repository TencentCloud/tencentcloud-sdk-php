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
 * 引擎规格详情
 *
 * @method string getDataEngineId() 获取引擎ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineId(string $DataEngineId) 设置引擎ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataEngineName() 获取引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataEngineName(string $DataEngineName) 设置引擎名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getScaleDetail() 获取引擎规格详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScaleDetail(array $ScaleDetail) 设置引擎规格详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class DataEngineScaleInfo extends AbstractModel
{
    /**
     * @var string 引擎ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineId;

    /**
     * @var string 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataEngineName;

    /**
     * @var array 引擎规格详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScaleDetail;

    /**
     * @param string $DataEngineId 引擎ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataEngineName 引擎名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ScaleDetail 引擎规格详情
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
        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("ScaleDetail",$param) and $param["ScaleDetail"] !== null) {
            $this->ScaleDetail = [];
            foreach ($param["ScaleDetail"] as $key => $value){
                $obj = new DataEngineScaleInfoDetail();
                $obj->deserialize($value);
                array_push($this->ScaleDetail, $obj);
            }
        }
    }
}
