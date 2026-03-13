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
 * 指标查询出参
 *
 * @method string getName() 获取名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndicatorCode() 获取指标编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorCode(string $IndicatorCode) 设置指标编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIndicatorType() 获取指标类型（1-原子指标 2-衍生指标 3-复合指标）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorType(integer $IndicatorType) 设置指标类型（1-原子指标 2-衍生指标 3-复合指标）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizOwner() 获取业务负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizOwner(string $BizOwner) 设置业务负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTechOwner() 获取技术负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTechOwner(string $TechOwner) 设置技术负责人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizCaliber() 获取业务口径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCaliber(string $BizCaliber) 设置业务口径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置指标描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLevel() 获取等级：40-L4核心 30-L3重要 20-L2一般 10-L1临时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(integer $Level) 设置等级：40-L4核心 30-L3重要 20-L2一般 10-L1临时
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalLogic() 获取计算逻辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalLogic(string $CalLogic) 设置计算逻辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCalFreq() 获取计算频次
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCalFreq(string $CalFreq) 设置计算频次
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMeasureUnit() 获取度量单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMeasureUnit(integer $MeasureUnit) 设置度量单位
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAccuracy() 获取精度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccuracy(integer $Accuracy) 设置精度
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceIndicatorIds() 获取关联指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceIndicatorIds(array $SourceIndicatorIds) 设置关联指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDimensionIds() 获取维度列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDimensionIds(array $DimensionIds) 设置维度列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFolderId() 获取文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFolderId(integer $FolderId) 设置文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizOwnerName() 获取业务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizOwnerName(string $BizOwnerName) 设置业务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTechOwnerName() 获取技术负责人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTechOwnerName(string $TechOwnerName) 设置技术负责人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishTime() 获取发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishTime(string $PublishTime) 设置发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishAccount() 获取发布人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishAccount(string $PublishAccount) 设置发布人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublishAccountName() 获取发布人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublishAccountName(string $PublishAccountName) 设置发布人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifyTime() 获取最后修订时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifyTime(string $LastModifyTime) 设置最后修订时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifyAccount() 获取最后修订人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifyAccount(string $LastModifyAccount) 设置最后修订人ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifyAccountName() 获取最后修订人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifyAccountName(string $LastModifyAccountName) 设置最后修订人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChangeLogList() 获取变更日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChangeLogList(array $ChangeLogList) 设置变更日志
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableColumns() 获取字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableColumns(array $TableColumns) 设置字段列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllSourceIndicatorIds() 获取关联指标(包含多层级关联指标)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllSourceIndicatorIds(array $AllSourceIndicatorIds) 设置关联指标(包含多层级关联指标)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetId() 获取资产guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetId(string $AssetId) 设置资产guid
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(string $AssetType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetCode() 获取资产编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetCode(string $AssetCode) 设置资产编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelatedIndicatorIds() 获取被关联的指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelatedIndicatorIds(array $RelatedIndicatorIds) 设置被关联的指标
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizCatalogIds() 获取数据目录ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCatalogIds(array $BizCatalogIds) 设置数据目录ID列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBizCatalogNames() 获取数据目录名称列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizCatalogNames(array $BizCatalogNames) 设置数据目录名称列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetLevel() 获取资产等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetLevel(integer $AssetLevel) 设置资产等级
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssetStatus() 获取资产发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetStatus(integer $AssetStatus) 设置资产发布状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetPublishTime() 获取资产发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetPublishTime(string $AssetPublishTime) 设置资产发布时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetPublishAccount() 获取资产发布人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetPublishAccount(string $AssetPublishAccount) 设置资产发布人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetPublishAccountName() 获取资产发布人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetPublishAccountName(string $AssetPublishAccountName) 设置资产发布人名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method PermissionStatus getIndicatorPermission() 获取指标权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndicatorPermission(PermissionStatus $IndicatorPermission) 设置指标权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method DataAssetOption getOperateOption() 获取资产权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateOption(DataAssetOption $OperateOption) 设置资产权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectName(string $ProjectName) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class IndicatorBaseInfo extends AbstractModel
{
    /**
     * @var string 名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 指标编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorCode;

    /**
     * @var integer 指标类型（1-原子指标 2-衍生指标 3-复合指标）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorType;

    /**
     * @var string 业务负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizOwner;

    /**
     * @var string 技术负责人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TechOwner;

    /**
     * @var string 业务口径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCaliber;

    /**
     * @var string 指标描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 等级：40-L4核心 30-L3重要 20-L2一般 10-L1临时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 计算逻辑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalLogic;

    /**
     * @var string 计算频次
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CalFreq;

    /**
     * @var integer 度量单位
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MeasureUnit;

    /**
     * @var integer 精度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Accuracy;

    /**
     * @var array 关联指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceIndicatorIds;

    /**
     * @var integer ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var array 维度列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DimensionIds;

    /**
     * @var integer 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FolderId;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 业务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizOwnerName;

    /**
     * @var string 技术负责人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TechOwnerName;

    /**
     * @var string 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishTime;

    /**
     * @var string 发布人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishAccount;

    /**
     * @var string 发布人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublishAccountName;

    /**
     * @var string 最后修订时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifyTime;

    /**
     * @var string 最后修订人ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifyAccount;

    /**
     * @var string 最后修订人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifyAccountName;

    /**
     * @var array 变更日志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChangeLogList;

    /**
     * @var array 字段列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableColumns;

    /**
     * @var array 关联指标(包含多层级关联指标)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllSourceIndicatorIds;

    /**
     * @var string 资产guid
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetId;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var string 资产编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetCode;

    /**
     * @var array 被关联的指标
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelatedIndicatorIds;

    /**
     * @var array 数据目录ID列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCatalogIds;

    /**
     * @var array 数据目录名称列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizCatalogNames;

    /**
     * @var integer 资产等级
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetLevel;

    /**
     * @var integer 资产发布状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetStatus;

    /**
     * @var string 资产发布时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetPublishTime;

    /**
     * @var string 资产发布人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetPublishAccount;

    /**
     * @var string 资产发布人名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetPublishAccountName;

    /**
     * @var PermissionStatus 指标权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndicatorPermission;

    /**
     * @var DataAssetOption 资产权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateOption;

    /**
     * @var string 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectName;

    /**
     * @param string $Name 名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndicatorCode 指标编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IndicatorType 指标类型（1-原子指标 2-衍生指标 3-复合指标）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizOwner 业务负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TechOwner 技术负责人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizCaliber 业务口径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 指标描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Level 等级：40-L4核心 30-L3重要 20-L2一般 10-L1临时
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalLogic 计算逻辑
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CalFreq 计算频次
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MeasureUnit 度量单位
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Accuracy 精度
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceIndicatorIds 关联指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DimensionIds 维度列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FolderId 文件夹ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizOwnerName 业务负责人名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TechOwnerName 技术负责人名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishTime 发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishAccount 发布人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublishAccountName 发布人名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifyTime 最后修订时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifyAccount 最后修订人ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifyAccountName 最后修订人名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChangeLogList 变更日志
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableColumns 字段列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllSourceIndicatorIds 关联指标(包含多层级关联指标)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetId 资产guid
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetCode 资产编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelatedIndicatorIds 被关联的指标
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizCatalogIds 数据目录ID列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BizCatalogNames 数据目录名称列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetLevel 资产等级
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssetStatus 资产发布状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetPublishTime 资产发布时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetPublishAccount 资产发布人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetPublishAccountName 资产发布人名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param PermissionStatus $IndicatorPermission 指标权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param DataAssetOption $OperateOption 资产权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectName 项目名称
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IndicatorCode",$param) and $param["IndicatorCode"] !== null) {
            $this->IndicatorCode = $param["IndicatorCode"];
        }

        if (array_key_exists("IndicatorType",$param) and $param["IndicatorType"] !== null) {
            $this->IndicatorType = $param["IndicatorType"];
        }

        if (array_key_exists("BizOwner",$param) and $param["BizOwner"] !== null) {
            $this->BizOwner = $param["BizOwner"];
        }

        if (array_key_exists("TechOwner",$param) and $param["TechOwner"] !== null) {
            $this->TechOwner = $param["TechOwner"];
        }

        if (array_key_exists("BizCaliber",$param) and $param["BizCaliber"] !== null) {
            $this->BizCaliber = $param["BizCaliber"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("CalLogic",$param) and $param["CalLogic"] !== null) {
            $this->CalLogic = $param["CalLogic"];
        }

        if (array_key_exists("CalFreq",$param) and $param["CalFreq"] !== null) {
            $this->CalFreq = $param["CalFreq"];
        }

        if (array_key_exists("MeasureUnit",$param) and $param["MeasureUnit"] !== null) {
            $this->MeasureUnit = $param["MeasureUnit"];
        }

        if (array_key_exists("Accuracy",$param) and $param["Accuracy"] !== null) {
            $this->Accuracy = $param["Accuracy"];
        }

        if (array_key_exists("SourceIndicatorIds",$param) and $param["SourceIndicatorIds"] !== null) {
            $this->SourceIndicatorIds = [];
            foreach ($param["SourceIndicatorIds"] as $key => $value){
                $obj = new IndicatorBaseSimpleInfo();
                $obj->deserialize($value);
                array_push($this->SourceIndicatorIds, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("DimensionIds",$param) and $param["DimensionIds"] !== null) {
            $this->DimensionIds = [];
            foreach ($param["DimensionIds"] as $key => $value){
                $obj = new AssetDimSimpleVO();
                $obj->deserialize($value);
                array_push($this->DimensionIds, $obj);
            }
        }

        if (array_key_exists("FolderId",$param) and $param["FolderId"] !== null) {
            $this->FolderId = $param["FolderId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BizOwnerName",$param) and $param["BizOwnerName"] !== null) {
            $this->BizOwnerName = $param["BizOwnerName"];
        }

        if (array_key_exists("TechOwnerName",$param) and $param["TechOwnerName"] !== null) {
            $this->TechOwnerName = $param["TechOwnerName"];
        }

        if (array_key_exists("PublishTime",$param) and $param["PublishTime"] !== null) {
            $this->PublishTime = $param["PublishTime"];
        }

        if (array_key_exists("PublishAccount",$param) and $param["PublishAccount"] !== null) {
            $this->PublishAccount = $param["PublishAccount"];
        }

        if (array_key_exists("PublishAccountName",$param) and $param["PublishAccountName"] !== null) {
            $this->PublishAccountName = $param["PublishAccountName"];
        }

        if (array_key_exists("LastModifyTime",$param) and $param["LastModifyTime"] !== null) {
            $this->LastModifyTime = $param["LastModifyTime"];
        }

        if (array_key_exists("LastModifyAccount",$param) and $param["LastModifyAccount"] !== null) {
            $this->LastModifyAccount = $param["LastModifyAccount"];
        }

        if (array_key_exists("LastModifyAccountName",$param) and $param["LastModifyAccountName"] !== null) {
            $this->LastModifyAccountName = $param["LastModifyAccountName"];
        }

        if (array_key_exists("ChangeLogList",$param) and $param["ChangeLogList"] !== null) {
            $this->ChangeLogList = [];
            foreach ($param["ChangeLogList"] as $key => $value){
                $obj = new ChangeLog();
                $obj->deserialize($value);
                array_push($this->ChangeLogList, $obj);
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

        if (array_key_exists("AllSourceIndicatorIds",$param) and $param["AllSourceIndicatorIds"] !== null) {
            $this->AllSourceIndicatorIds = [];
            foreach ($param["AllSourceIndicatorIds"] as $key => $value){
                $obj = new IndicatorBaseInfo();
                $obj->deserialize($value);
                array_push($this->AllSourceIndicatorIds, $obj);
            }
        }

        if (array_key_exists("AssetId",$param) and $param["AssetId"] !== null) {
            $this->AssetId = $param["AssetId"];
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("AssetCode",$param) and $param["AssetCode"] !== null) {
            $this->AssetCode = $param["AssetCode"];
        }

        if (array_key_exists("RelatedIndicatorIds",$param) and $param["RelatedIndicatorIds"] !== null) {
            $this->RelatedIndicatorIds = [];
            foreach ($param["RelatedIndicatorIds"] as $key => $value){
                $obj = new IndicatorBaseInfo();
                $obj->deserialize($value);
                array_push($this->RelatedIndicatorIds, $obj);
            }
        }

        if (array_key_exists("BizCatalogIds",$param) and $param["BizCatalogIds"] !== null) {
            $this->BizCatalogIds = $param["BizCatalogIds"];
        }

        if (array_key_exists("BizCatalogNames",$param) and $param["BizCatalogNames"] !== null) {
            $this->BizCatalogNames = $param["BizCatalogNames"];
        }

        if (array_key_exists("AssetLevel",$param) and $param["AssetLevel"] !== null) {
            $this->AssetLevel = $param["AssetLevel"];
        }

        if (array_key_exists("AssetStatus",$param) and $param["AssetStatus"] !== null) {
            $this->AssetStatus = $param["AssetStatus"];
        }

        if (array_key_exists("AssetPublishTime",$param) and $param["AssetPublishTime"] !== null) {
            $this->AssetPublishTime = $param["AssetPublishTime"];
        }

        if (array_key_exists("AssetPublishAccount",$param) and $param["AssetPublishAccount"] !== null) {
            $this->AssetPublishAccount = $param["AssetPublishAccount"];
        }

        if (array_key_exists("AssetPublishAccountName",$param) and $param["AssetPublishAccountName"] !== null) {
            $this->AssetPublishAccountName = $param["AssetPublishAccountName"];
        }

        if (array_key_exists("IndicatorPermission",$param) and $param["IndicatorPermission"] !== null) {
            $this->IndicatorPermission = new PermissionStatus();
            $this->IndicatorPermission->deserialize($param["IndicatorPermission"]);
        }

        if (array_key_exists("OperateOption",$param) and $param["OperateOption"] !== null) {
            $this->OperateOption = new DataAssetOption();
            $this->OperateOption->deserialize($param["OperateOption"]);
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("ProjectName",$param) and $param["ProjectName"] !== null) {
            $this->ProjectName = $param["ProjectName"];
        }
    }
}
