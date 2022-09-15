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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tsf-privilege模块 Program数据集
 *
 * @method string getProgramId() 获取数据集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramId(string $ProgramId) 设置数据集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgramName() 获取数据集名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramName(string $ProgramName) 设置数据集名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgramDesc() 获取数据集描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramDesc(string $ProgramDesc) 设置数据集描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteFlag() 获取删除标识，true: 可以删除; false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置删除标识，true: 可以删除; false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(integer $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTime() 获取最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProgramItemList() 获取数据项列表，无值时返回空数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramItemList(array $ProgramItemList) 设置数据项列表，无值时返回空数组
注意：此字段可能返回 null，表示取不到有效值。
 */
class Program extends AbstractModel
{
    /**
     * @var string 数据集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramId;

    /**
     * @var string 数据集名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramName;

    /**
     * @var string 数据集描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramDesc;

    /**
     * @var boolean 删除标识，true: 可以删除; false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlag;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var integer 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var array 数据项列表，无值时返回空数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramItemList;

    /**
     * @param string $ProgramId 数据集ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgramName 数据集名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgramDesc 数据集描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteFlag 删除标识，true: 可以删除; false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTime 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProgramItemList 数据项列表，无值时返回空数组
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
        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }

        if (array_key_exists("ProgramName",$param) and $param["ProgramName"] !== null) {
            $this->ProgramName = $param["ProgramName"];
        }

        if (array_key_exists("ProgramDesc",$param) and $param["ProgramDesc"] !== null) {
            $this->ProgramDesc = $param["ProgramDesc"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("ProgramItemList",$param) and $param["ProgramItemList"] !== null) {
            $this->ProgramItemList = [];
            foreach ($param["ProgramItemList"] as $key => $value){
                $obj = new ProgramItem();
                $obj->deserialize($value);
                array_push($this->ProgramItemList, $obj);
            }
        }
    }
}
