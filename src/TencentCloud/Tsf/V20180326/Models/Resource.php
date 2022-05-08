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
 * tsf-privilege 模块，资源
 *
 * @method string getResourceId() 获取资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceCode() 获取资源编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceCode(string $ResourceCode) 设置资源编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceName() 获取资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceName(string $ResourceName) 设置资源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceCode() 获取资源所属产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceCode(string $ServiceCode) 设置资源所属产品编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceAction() 获取选取资源使用的Action
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceAction(string $ResourceAction) 设置选取资源使用的Action
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdField() 获取资源数据查询的ID字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdField(string $IdField) 设置资源数据查询的ID字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNameField() 获取资源数据查询的名称字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNameField(string $NameField) 设置资源数据查询的名称字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelectIdsField() 获取资源数据查询的ID过滤字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectIdsField(string $SelectIdsField) 设置资源数据查询的ID过滤字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(integer $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastUpdateTime() 获取最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(integer $LastUpdateTime) 设置最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteFlag() 获取删除标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置删除标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceDesc() 获取资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceDesc(string $ResourceDesc) 设置资源描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanSelectAll() 获取是否可以选择全部
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanSelectAll(boolean $CanSelectAll) 设置是否可以选择全部
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSearchWordField() 获取资源数据查询的模糊查询字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSearchWordField(string $SearchWordField) 设置资源数据查询的模糊查询字段名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndex() 获取排序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndex(integer $Index) 设置排序
注意：此字段可能返回 null，表示取不到有效值。
 */
class Resource extends AbstractModel
{
    /**
     * @var string 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string 资源编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceCode;

    /**
     * @var string 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceName;

    /**
     * @var string 资源所属产品编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceCode;

    /**
     * @var string 选取资源使用的Action
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceAction;

    /**
     * @var string 资源数据查询的ID字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdField;

    /**
     * @var string 资源数据查询的名称字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NameField;

    /**
     * @var string 资源数据查询的ID过滤字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectIdsField;

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
     * @var boolean 删除标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlag;

    /**
     * @var string 资源描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceDesc;

    /**
     * @var boolean 是否可以选择全部
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanSelectAll;

    /**
     * @var string 资源数据查询的模糊查询字段名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SearchWordField;

    /**
     * @var integer 排序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Index;

    /**
     * @param string $ResourceId 资源ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceCode 资源编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceName 资源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceCode 资源所属产品编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceAction 选取资源使用的Action
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdField 资源数据查询的ID字段名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NameField 资源数据查询的名称字段名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelectIdsField 资源数据查询的ID过滤字段名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastUpdateTime 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteFlag 删除标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceDesc 资源描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanSelectAll 是否可以选择全部
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SearchWordField 资源数据查询的模糊查询字段名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Index 排序
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceCode",$param) and $param["ResourceCode"] !== null) {
            $this->ResourceCode = $param["ResourceCode"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("ServiceCode",$param) and $param["ServiceCode"] !== null) {
            $this->ServiceCode = $param["ServiceCode"];
        }

        if (array_key_exists("ResourceAction",$param) and $param["ResourceAction"] !== null) {
            $this->ResourceAction = $param["ResourceAction"];
        }

        if (array_key_exists("IdField",$param) and $param["IdField"] !== null) {
            $this->IdField = $param["IdField"];
        }

        if (array_key_exists("NameField",$param) and $param["NameField"] !== null) {
            $this->NameField = $param["NameField"];
        }

        if (array_key_exists("SelectIdsField",$param) and $param["SelectIdsField"] !== null) {
            $this->SelectIdsField = $param["SelectIdsField"];
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

        if (array_key_exists("ResourceDesc",$param) and $param["ResourceDesc"] !== null) {
            $this->ResourceDesc = $param["ResourceDesc"];
        }

        if (array_key_exists("CanSelectAll",$param) and $param["CanSelectAll"] !== null) {
            $this->CanSelectAll = $param["CanSelectAll"];
        }

        if (array_key_exists("SearchWordField",$param) and $param["SearchWordField"] !== null) {
            $this->SearchWordField = $param["SearchWordField"];
        }

        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }
    }
}
