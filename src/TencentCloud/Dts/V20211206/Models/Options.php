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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据同步中的选项
 *
 * @method string getInitType() 获取同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInitType(string $InitType) 设置同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDealOfExistSameTable() 获取同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、InitializeAfterDelete(删除并重新初始化)、ExecuteAfterIgnore(忽略并继续执行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealOfExistSameTable(string $DealOfExistSameTable) 设置同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、InitializeAfterDelete(删除并重新初始化)、ExecuteAfterIgnore(忽略并继续执行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConflictHandleType() 获取冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConflictHandleType(string $ConflictHandleType) 设置冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getAddAdditionalColumn() 获取是否添加附加列
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAddAdditionalColumn(boolean $AddAdditionalColumn) 设置是否添加附加列
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOpTypes() 获取所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， 不填（不选），PartialDDL(自定义,和DdlOptions一起起作用 )
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpTypes(array $OpTypes) 设置所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， 不填（不选），PartialDDL(自定义,和DdlOptions一起起作用 )
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConflictHandleOption getConflictHandleOption() 获取冲突处理的详细选项，如条件覆盖中的条件行和条件操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConflictHandleOption(ConflictHandleOption $ConflictHandleOption) 设置冲突处理的详细选项，如条件覆盖中的条件行和条件操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDdlOptions() 获取DDL同步选项，具体描述要同步那些DDL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdlOptions(array $DdlOptions) 设置DDL同步选项，具体描述要同步那些DDL
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaOption getKafkaOption() 获取kafka同步选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKafkaOption(KafkaOption $KafkaOption) 设置kafka同步选项
注意：此字段可能返回 null，表示取不到有效值。
 */
class Options extends AbstractModel
{
    /**
     * @var string 同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InitType;

    /**
     * @var string 同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、InitializeAfterDelete(删除并重新初始化)、ExecuteAfterIgnore(忽略并继续执行)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealOfExistSameTable;

    /**
     * @var string 冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConflictHandleType;

    /**
     * @var boolean 是否添加附加列
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AddAdditionalColumn;

    /**
     * @var array 所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， 不填（不选），PartialDDL(自定义,和DdlOptions一起起作用 )
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpTypes;

    /**
     * @var ConflictHandleOption 冲突处理的详细选项，如条件覆盖中的条件行和条件操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConflictHandleOption;

    /**
     * @var array DDL同步选项，具体描述要同步那些DDL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdlOptions;

    /**
     * @var KafkaOption kafka同步选项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $KafkaOption;

    /**
     * @param string $InitType 同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DealOfExistSameTable 同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、InitializeAfterDelete(删除并重新初始化)、ExecuteAfterIgnore(忽略并继续执行)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConflictHandleType 冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $AddAdditionalColumn 是否添加附加列
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OpTypes 所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， 不填（不选），PartialDDL(自定义,和DdlOptions一起起作用 )
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConflictHandleOption $ConflictHandleOption 冲突处理的详细选项，如条件覆盖中的条件行和条件操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DdlOptions DDL同步选项，具体描述要同步那些DDL
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaOption $KafkaOption kafka同步选项
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
        if (array_key_exists("InitType",$param) and $param["InitType"] !== null) {
            $this->InitType = $param["InitType"];
        }

        if (array_key_exists("DealOfExistSameTable",$param) and $param["DealOfExistSameTable"] !== null) {
            $this->DealOfExistSameTable = $param["DealOfExistSameTable"];
        }

        if (array_key_exists("ConflictHandleType",$param) and $param["ConflictHandleType"] !== null) {
            $this->ConflictHandleType = $param["ConflictHandleType"];
        }

        if (array_key_exists("AddAdditionalColumn",$param) and $param["AddAdditionalColumn"] !== null) {
            $this->AddAdditionalColumn = $param["AddAdditionalColumn"];
        }

        if (array_key_exists("OpTypes",$param) and $param["OpTypes"] !== null) {
            $this->OpTypes = $param["OpTypes"];
        }

        if (array_key_exists("ConflictHandleOption",$param) and $param["ConflictHandleOption"] !== null) {
            $this->ConflictHandleOption = new ConflictHandleOption();
            $this->ConflictHandleOption->deserialize($param["ConflictHandleOption"]);
        }

        if (array_key_exists("DdlOptions",$param) and $param["DdlOptions"] !== null) {
            $this->DdlOptions = [];
            foreach ($param["DdlOptions"] as $key => $value){
                $obj = new DdlOption();
                $obj->deserialize($value);
                array_push($this->DdlOptions, $obj);
            }
        }

        if (array_key_exists("KafkaOption",$param) and $param["KafkaOption"] !== null) {
            $this->KafkaOption = new KafkaOption();
            $this->KafkaOption->deserialize($param["KafkaOption"]);
        }
    }
}
