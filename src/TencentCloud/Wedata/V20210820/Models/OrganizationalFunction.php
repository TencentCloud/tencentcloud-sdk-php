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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 包含层级信息的函数
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDisplayName() 获取展示名称
 * @method void setDisplayName(string $DisplayName) 设置展示名称
 * @method string getLayerPath() 获取层级路径
 * @method void setLayerPath(string $LayerPath) 设置层级路径
 * @method string getParentLayerPath() 获取上级层级路径
 * @method void setParentLayerPath(string $ParentLayerPath) 设置上级层级路径
 * @method string getType() 获取函数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置函数类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKind() 获取函数分类：窗口函数、聚合函数、日期函数......
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置函数分类：窗口函数、聚合函数、日期函数......
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCategory() 获取函数种类：系统函数、自定义函数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategory(string $Category) 设置函数种类：系统函数、自定义函数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取函数状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置函数状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取函数说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置函数说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsage() 获取函数用法
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsage(string $Usage) 设置函数用法
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParamDesc() 获取函数参数说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParamDesc(string $ParamDesc) 设置函数参数说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReturnDesc() 获取函数返回值说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReturnDesc(string $ReturnDesc) 设置函数返回值说明
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExample() 获取函数示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExample(string $Example) 设置函数示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterIdentifier() 获取集群实例引擎 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterIdentifier(string $ClusterIdentifier) 设置集群实例引擎 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFuncId() 获取函数 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFuncId(string $FuncId) 设置函数 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassName() 获取函数类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassName(string $ClassName) 设置函数类名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResourceList() 获取函数资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceList(array $ResourceList) 设置函数资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOperatorUserIds() 获取操作人 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUserIds(array $OperatorUserIds) 设置操作人 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOwnerUserIds() 获取公有云 Owner ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwnerUserIds(array $OwnerUserIds) 设置公有云 Owner ID 列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDbName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDbName(string $DbName) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubmitErrorMsg() 获取提交失败错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubmitErrorMsg(string $SubmitErrorMsg) 设置提交失败错误信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrganizationalFunction extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 展示名称
     */
    public $DisplayName;

    /**
     * @var string 层级路径
     */
    public $LayerPath;

    /**
     * @var string 上级层级路径
     */
    public $ParentLayerPath;

    /**
     * @var string 函数类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 函数分类：窗口函数、聚合函数、日期函数......
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var string 函数种类：系统函数、自定义函数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Category;

    /**
     * @var string 函数状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 函数说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 函数用法
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Usage;

    /**
     * @var string 函数参数说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParamDesc;

    /**
     * @var string 函数返回值说明
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReturnDesc;

    /**
     * @var string 函数示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Example;

    /**
     * @var string 集群实例引擎 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterIdentifier;

    /**
     * @var string 函数 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FuncId;

    /**
     * @var string 函数类名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClassName;

    /**
     * @var array 函数资源列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceList;

    /**
     * @var array 操作人 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUserIds;

    /**
     * @var array 公有云 Owner ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OwnerUserIds;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DbName;

    /**
     * @var string 提交失败错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubmitErrorMsg;

    /**
     * @param string $Name 名称
     * @param string $DisplayName 展示名称
     * @param string $LayerPath 层级路径
     * @param string $ParentLayerPath 上级层级路径
     * @param string $Type 函数类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kind 函数分类：窗口函数、聚合函数、日期函数......
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Category 函数种类：系统函数、自定义函数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 函数状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 函数说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Usage 函数用法
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParamDesc 函数参数说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReturnDesc 函数返回值说明
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Example 函数示例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterIdentifier 集群实例引擎 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FuncId 函数 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClassName 函数类名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ResourceList 函数资源列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OperatorUserIds 操作人 ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OwnerUserIds 公有云 Owner ID 列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DbName 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubmitErrorMsg 提交失败错误信息
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

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("LayerPath",$param) and $param["LayerPath"] !== null) {
            $this->LayerPath = $param["LayerPath"];
        }

        if (array_key_exists("ParentLayerPath",$param) and $param["ParentLayerPath"] !== null) {
            $this->ParentLayerPath = $param["ParentLayerPath"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Usage",$param) and $param["Usage"] !== null) {
            $this->Usage = $param["Usage"];
        }

        if (array_key_exists("ParamDesc",$param) and $param["ParamDesc"] !== null) {
            $this->ParamDesc = $param["ParamDesc"];
        }

        if (array_key_exists("ReturnDesc",$param) and $param["ReturnDesc"] !== null) {
            $this->ReturnDesc = $param["ReturnDesc"];
        }

        if (array_key_exists("Example",$param) and $param["Example"] !== null) {
            $this->Example = $param["Example"];
        }

        if (array_key_exists("ClusterIdentifier",$param) and $param["ClusterIdentifier"] !== null) {
            $this->ClusterIdentifier = $param["ClusterIdentifier"];
        }

        if (array_key_exists("FuncId",$param) and $param["FuncId"] !== null) {
            $this->FuncId = $param["FuncId"];
        }

        if (array_key_exists("ClassName",$param) and $param["ClassName"] !== null) {
            $this->ClassName = $param["ClassName"];
        }

        if (array_key_exists("ResourceList",$param) and $param["ResourceList"] !== null) {
            $this->ResourceList = [];
            foreach ($param["ResourceList"] as $key => $value){
                $obj = new FunctionVersion();
                $obj->deserialize($value);
                array_push($this->ResourceList, $obj);
            }
        }

        if (array_key_exists("OperatorUserIds",$param) and $param["OperatorUserIds"] !== null) {
            $this->OperatorUserIds = $param["OperatorUserIds"];
        }

        if (array_key_exists("OwnerUserIds",$param) and $param["OwnerUserIds"] !== null) {
            $this->OwnerUserIds = $param["OwnerUserIds"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SubmitErrorMsg",$param) and $param["SubmitErrorMsg"] !== null) {
            $this->SubmitErrorMsg = $param["SubmitErrorMsg"];
        }
    }
}
