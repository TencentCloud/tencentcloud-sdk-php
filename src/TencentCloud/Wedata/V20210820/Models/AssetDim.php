<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产维度信息结构定义
 *
 * @method integer getFolderId() 获取文件夹 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(integer $FolderId) 设置文件夹 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimCode() 获取维度编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimCode(string $DimCode) 设置维度编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimName() 获取维度名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimName(string $DimName) 设置维度名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取维度描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置维度描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOwnerAccount() 获取维度负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerAccount(integer $OwnerAccount) 设置维度负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwner() 获取维度负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置维度负责人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getModifyUserId() 获取变更人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyUserId(integer $ModifyUserId) 设置变更人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyUser() 获取维度最近修改人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyUser(string $ModifyUser) 设置维度最近修改人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDimType() 获取维度录入方式， 取值：manual-手动录入；dict-关联字典表；
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimType(string $DimType) 设置维度录入方式， 取值：manual-手动录入；dict-关联字典表；
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getValuePairCount() 获取枚举值数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValuePairCount(integer $ValuePairCount) 设置枚举值数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndicatorPairCount() 获取关联指标数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorPairCount(integer $IndicatorPairCount) 设置关联指标数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTableColumnCount() 获取关联字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableColumnCount(integer $TableColumnCount) 设置关联字段数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDimId() 获取维度 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimId(integer $DimId) 设置维度 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method DimTableLink getDimTableLink() 获取维度关联表字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimTableLink(DimTableLink $DimTableLink) 设置维度关联表字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getValuePairs() 获取枚举值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValuePairs(array $ValuePairs) 设置枚举值列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableColumns() 获取维度关联字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableColumns(array $TableColumns) 设置维度关联字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceIndicatorIds() 获取关联指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceIndicatorIds(array $SourceIndicatorIds) 设置关联指标列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method PermissionStatus getDimPermission() 获取权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimPermission(PermissionStatus $DimPermission) 设置权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getProjectName() 获取项目名称
 * @method void setProjectName(string $ProjectName) 设置项目名称
 */
class AssetDim extends AbstractModel
{
    /**
     * @var integer 文件夹 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var string 维度编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimCode;

    /**
     * @var string 维度名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimName;

    /**
     * @var string 维度描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 维度负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerAccount;

    /**
     * @var string 维度负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var integer 变更人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyUserId;

    /**
     * @var string 维度最近修改人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyUser;

    /**
     * @var string 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 维度录入方式， 取值：manual-手动录入；dict-关联字典表；
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimType;

    /**
     * @var integer 枚举值数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValuePairCount;

    /**
     * @var integer 关联指标数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorPairCount;

    /**
     * @var integer 关联字段数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableColumnCount;

    /**
     * @var integer 维度 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimId;

    /**
     * @var DimTableLink 维度关联表字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimTableLink;

    /**
     * @var array 枚举值列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValuePairs;

    /**
     * @var array 维度关联字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableColumns;

    /**
     * @var array 关联指标列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceIndicatorIds;

    /**
     * @var PermissionStatus 权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimPermission;

    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 项目名称
     */
    public $ProjectName;

    /**
     * @param integer $FolderId 文件夹 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DimCode 维度编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DimName 维度名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 维度描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OwnerAccount 维度负责人UserId
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Owner 维度负责人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ModifyUserId 变更人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyUser 维度最近修改人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DimType 维度录入方式， 取值：manual-手动录入；dict-关联字典表；
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ValuePairCount 枚举值数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndicatorPairCount 关联指标数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TableColumnCount 关联字段数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DimId 维度 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param DimTableLink $DimTableLink 维度关联表字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ValuePairs 枚举值列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableColumns 维度关联字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceIndicatorIds 关联指标列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param PermissionStatus $DimPermission 权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目id
     * @param string $ProjectName 项目名称
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
        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("DimCode",$param) and $param["DimCode"] !== null) {
            $this->DimCode = $param["DimCode"];
        }

        if (array_key_exists("DimName",$param) and $param["DimName"] !== null) {
            $this->DimName = $param["DimName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OwnerAccount",$param) and $param["OwnerAccount"] !== null) {
            $this->OwnerAccount = $param["OwnerAccount"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("ModifyUserId",$param) and $param["ModifyUserId"] !== null) {
            $this->ModifyUserId = $param["ModifyUserId"];
        }

        if (array_key_exists("ModifyUser",$param) and $param["ModifyUser"] !== null) {
            $this->ModifyUser = $param["ModifyUser"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DimType",$param) and $param["DimType"] !== null) {
            $this->DimType = $param["DimType"];
        }

        if (array_key_exists("ValuePairCount",$param) and $param["ValuePairCount"] !== null) {
            $this->ValuePairCount = $param["ValuePairCount"];
        }

        if (array_key_exists("IndicatorPairCount",$param) and $param["IndicatorPairCount"] !== null) {
            $this->IndicatorPairCount = $param["IndicatorPairCount"];
        }

        if (array_key_exists("TableColumnCount",$param) and $param["TableColumnCount"] !== null) {
            $this->TableColumnCount = $param["TableColumnCount"];
        }

        if (array_key_exists("DimId",$param) and $param["DimId"] !== null) {
            $this->DimId = $param["DimId"];
        }

        if (array_key_exists("DimTableLink",$param) and $param["DimTableLink"] !== null) {
            $this->DimTableLink = new DimTableLink();
            $this->DimTableLink->deserialize($param["DimTableLink"]);
        }

        if (array_key_exists("ValuePairs",$param) and $param["ValuePairs"] !== null) {
            $this->ValuePairs = [];
            foreach ($param["ValuePairs"] as $key => $value){
                $obj = new Pair();
                $obj->deserialize($value);
                array_push($this->ValuePairs, $obj);
            }
        }

        if (array_key_exists("TableColumns",$param) and $param["TableColumns"] !== null) {
            $this->TableColumns = [];
            foreach ($param["TableColumns"] as $key => $value){
                $obj = new AssetDimTableColumn();
                $obj->deserialize($value);
                array_push($this->TableColumns, $obj);
            }
        }

        if (array_key_exists("SourceIndicatorIds",$param) and $param["SourceIndicatorIds"] !== null) {
            $this->SourceIndicatorIds = [];
            foreach ($param["SourceIndicatorIds"] as $key => $value){
                $obj = new IndicatorBaseSimpleInfo();
                $obj->deserialize($value);
                array_push($this->SourceIndicatorIds, $obj);
            }
        }

        if (array_key_exists("DimPermission",$param) and $param["DimPermission"] !== null) {
            $this->DimPermission = new PermissionStatus();
            $this->DimPermission->deserialize($param["DimPermission"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
