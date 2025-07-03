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
 * @method void setInitType(string $InitType) 设置同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)
 * @method string getDealOfExistSameTable() 获取同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
 * @method void setDealOfExistSameTable(string $DealOfExistSameTable) 设置同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
 * @method string getConflictHandleType() 获取冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
 * @method void setConflictHandleType(string $ConflictHandleType) 设置冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
 * @method boolean getAddAdditionalColumn() 获取是否添加附加列
 * @method void setAddAdditionalColumn(boolean $AddAdditionalColumn) 设置是否添加附加列
 * @method array getOpTypes() 获取所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpTypes(array $OpTypes) 设置所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConflictHandleOption getConflictHandleOption() 获取冲突处理的详细选项，如条件覆盖中的条件行和条件操作
 * @method void setConflictHandleOption(ConflictHandleOption $ConflictHandleOption) 设置冲突处理的详细选项，如条件覆盖中的条件行和条件操作
 * @method array getDdlOptions() 获取DDL同步选项，具体描述要同步哪些DDL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdlOptions(array $DdlOptions) 设置DDL同步选项，具体描述要同步哪些DDL
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaOption getKafkaOption() 获取kafka同步选项
 * @method void setKafkaOption(KafkaOption $KafkaOption) 设置kafka同步选项
 * @method RateLimitOption getRateLimitOption() 获取任务限速信息
 * @method void setRateLimitOption(RateLimitOption $RateLimitOption) 设置任务限速信息
 * @method integer getAutoRetryTimeRangeMinutes() 获取自动重试的时间窗口设置
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置自动重试的时间窗口设置
 * @method string getStartPosition() 获取同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。
 * @method void setStartPosition(string $StartPosition) 设置同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。
 * @method boolean getFilterBeginCommit() 获取同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
 * @method void setFilterBeginCommit(boolean $FilterBeginCommit) 设置同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
 * @method boolean getFilterCheckpoint() 获取同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
 * @method void setFilterCheckpoint(boolean $FilterCheckpoint) 设置同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
 */
class Options extends AbstractModel
{
    /**
     * @var string 同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)
     */
    public $InitType;

    /**
     * @var string 同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
     */
    public $DealOfExistSameTable;

    /**
     * @var string 冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
     */
    public $ConflictHandleType;

    /**
     * @var boolean 是否添加附加列
     */
    public $AddAdditionalColumn;

    /**
     * @var array 所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpTypes;

    /**
     * @var ConflictHandleOption 冲突处理的详细选项，如条件覆盖中的条件行和条件操作
     */
    public $ConflictHandleOption;

    /**
     * @var array DDL同步选项，具体描述要同步哪些DDL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdlOptions;

    /**
     * @var KafkaOption kafka同步选项
     */
    public $KafkaOption;

    /**
     * @var RateLimitOption 任务限速信息
     */
    public $RateLimitOption;

    /**
     * @var integer 自动重试的时间窗口设置
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @var string 同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。
     */
    public $StartPosition;

    /**
     * @var boolean 同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
     */
    public $FilterBeginCommit;

    /**
     * @var boolean 同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
     */
    public $FilterCheckpoint;

    /**
     * @param string $InitType 同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)
     * @param string $DealOfExistSameTable 同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
     * @param string $ConflictHandleType 冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)
     * @param boolean $AddAdditionalColumn 是否添加附加列
     * @param array $OpTypes 所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConflictHandleOption $ConflictHandleOption 冲突处理的详细选项，如条件覆盖中的条件行和条件操作
     * @param array $DdlOptions DDL同步选项，具体描述要同步哪些DDL
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaOption $KafkaOption kafka同步选项
     * @param RateLimitOption $RateLimitOption 任务限速信息
     * @param integer $AutoRetryTimeRangeMinutes 自动重试的时间窗口设置
     * @param string $StartPosition 同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。
     * @param boolean $FilterBeginCommit 同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
     * @param boolean $FilterCheckpoint 同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
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

        if (array_key_exists("RateLimitOption",$param) and $param["RateLimitOption"] !== null) {
            $this->RateLimitOption = new RateLimitOption();
            $this->RateLimitOption->deserialize($param["RateLimitOption"]);
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }

        if (array_key_exists("StartPosition",$param) and $param["StartPosition"] !== null) {
            $this->StartPosition = $param["StartPosition"];
        }

        if (array_key_exists("FilterBeginCommit",$param) and $param["FilterBeginCommit"] !== null) {
            $this->FilterBeginCommit = $param["FilterBeginCommit"];
        }

        if (array_key_exists("FilterCheckpoint",$param) and $param["FilterCheckpoint"] !== null) {
            $this->FilterCheckpoint = $param["FilterCheckpoint"];
        }
    }
}
