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
 * tsf-privilege模块，数据项
 *
 * @method string getProgramItemId() 获取数据项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramItemId(string $ProgramItemId) 设置数据项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method Resource getResource() 获取资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResource(Resource $Resource) 设置资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValueList() 获取数据值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueList(array $ValueList) 设置数据值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsAll() 获取全选标识，true: 全选；false: 非全选
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAll(boolean $IsAll) 设置全选标识，true: 全选；false: 非全选
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(integer $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTime() 获取最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteFlag() 获取删除标识，true: 可删除；false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置删除标识，true: 可删除；false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProgramId() 获取数据集ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProgramId(string $ProgramId) 设置数据集ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ProgramItem extends AbstractModel
{
    /**
     * @var string 数据项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramItemId;

    /**
     * @var Resource 资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resource;

    /**
     * @var array 数据值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueList;

    /**
     * @var boolean 全选标识，true: 全选；false: 非全选
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAll;

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
     * @var boolean 删除标识，true: 可删除；false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlag;

    /**
     * @var string 数据集ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProgramId;

    /**
     * @param string $ProgramItemId 数据项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param Resource $Resource 资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ValueList 数据值列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsAll 全选标识，true: 全选；false: 非全选
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTime 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteFlag 删除标识，true: 可删除；false: 不可删除
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProgramId 数据集ID
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
        if (array_key_exists("ProgramItemId",$param) and $param["ProgramItemId"] !== null) {
            $this->ProgramItemId = $param["ProgramItemId"];
        }

        if (array_key_exists("Resource",$param) and $param["Resource"] !== null) {
            $this->Resource = new Resource();
            $this->Resource->deserialize($param["Resource"]);
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = $param["ValueList"];
        }

        if (array_key_exists("IsAll",$param) and $param["IsAll"] !== null) {
            $this->IsAll = $param["IsAll"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("ProgramId",$param) and $param["ProgramId"] !== null) {
            $this->ProgramId = $param["ProgramId"];
        }
    }
}
