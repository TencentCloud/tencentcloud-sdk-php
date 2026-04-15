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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据同步中的选项
 *
 * @method string getInitType() 获取<p>同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)；mongodb链路只支持全量数据初始化或仅增量。</p>
 * @method void setInitType(string $InitType) 设置<p>同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)；mongodb链路只支持全量数据初始化或仅增量。</p>
 * @method string getDealOfExistSameTable() 获取<p>同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)</p>
 * @method void setDealOfExistSameTable(string $DealOfExistSameTable) 设置<p>同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)</p>
 * @method string getConflictHandleType() 获取<p>冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)</p>
 * @method void setConflictHandleType(string $ConflictHandleType) 设置<p>冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)</p>
 * @method boolean getAddAdditionalColumn() 获取<p>是否添加附加列</p>
 * @method void setAddAdditionalColumn(boolean $AddAdditionalColumn) 设置<p>是否添加附加列</p>
 * @method array getOpTypes() 获取<p>所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpTypes(array $OpTypes) 设置<p>所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ConflictHandleOption getConflictHandleOption() 获取<p>冲突处理的详细选项，如条件覆盖中的条件行和条件操作</p>
 * @method void setConflictHandleOption(ConflictHandleOption $ConflictHandleOption) 设置<p>冲突处理的详细选项，如条件覆盖中的条件行和条件操作</p>
 * @method array getDdlOptions() 获取<p>DDL同步选项，具体描述要同步哪些DDL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDdlOptions(array $DdlOptions) 设置<p>DDL同步选项，具体描述要同步哪些DDL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KafkaOption getKafkaOption() 获取<p>kafka同步选项</p>
 * @method void setKafkaOption(KafkaOption $KafkaOption) 设置<p>kafka同步选项</p>
 * @method RateLimitOption getRateLimitOption() 获取<p>任务限速信息</p>
 * @method void setRateLimitOption(RateLimitOption $RateLimitOption) 设置<p>任务限速信息</p>
 * @method integer getAutoRetryTimeRangeMinutes() 获取<p>自动重试的时间窗口设置</p>
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置<p>自动重试的时间窗口设置</p>
 * @method string getStartPosition() 获取<p>同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。</p>
 * @method void setStartPosition(string $StartPosition) 设置<p>同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。</p>
 * @method boolean getFilterBeginCommit() 获取<p>同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持</p>
 * @method void setFilterBeginCommit(boolean $FilterBeginCommit) 设置<p>同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持</p>
 * @method boolean getFilterCheckpoint() 获取<p>同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持</p>
 * @method void setFilterCheckpoint(boolean $FilterCheckpoint) 设置<p>同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持</p>
 */
class Options extends AbstractModel
{
    /**
     * @var string <p>同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)；mongodb链路只支持全量数据初始化或仅增量。</p>
     */
    public $InitType;

    /**
     * @var string <p>同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)</p>
     */
    public $DealOfExistSameTable;

    /**
     * @var string <p>冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)</p>
     */
    public $ConflictHandleType;

    /**
     * @var boolean <p>是否添加附加列</p>
     */
    public $AddAdditionalColumn;

    /**
     * @var array <p>所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpTypes;

    /**
     * @var ConflictHandleOption <p>冲突处理的详细选项，如条件覆盖中的条件行和条件操作</p>
     */
    public $ConflictHandleOption;

    /**
     * @var array <p>DDL同步选项，具体描述要同步哪些DDL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DdlOptions;

    /**
     * @var KafkaOption <p>kafka同步选项</p>
     */
    public $KafkaOption;

    /**
     * @var RateLimitOption <p>任务限速信息</p>
     */
    public $RateLimitOption;

    /**
     * @var integer <p>自动重试的时间窗口设置</p>
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @var string <p>同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。</p>
     */
    public $StartPosition;

    /**
     * @var boolean <p>同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持</p>
     */
    public $FilterBeginCommit;

    /**
     * @var boolean <p>同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持</p>
     */
    public $FilterCheckpoint;

    /**
     * @param string $InitType <p>同步初始化选项，Data(全量数据初始化)、Structure(结构初始化)、Full(全量数据且结构初始化，默认)、None(仅增量)；mongodb链路只支持全量数据初始化或仅增量。</p>
     * @param string $DealOfExistSameTable <p>同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)</p>
     * @param string $ConflictHandleType <p>冲突处理选项，ReportError(报错，默认为该值)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖)</p>
     * @param boolean $AddAdditionalColumn <p>是否添加附加列</p>
     * @param array $OpTypes <p>所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)， PartialDDL(自定义,和DdlOptions一起配合使用)。注意，这里至少需要包含DML中的一种。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ConflictHandleOption $ConflictHandleOption <p>冲突处理的详细选项，如条件覆盖中的条件行和条件操作</p>
     * @param array $DdlOptions <p>DDL同步选项，具体描述要同步哪些DDL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KafkaOption $KafkaOption <p>kafka同步选项</p>
     * @param RateLimitOption $RateLimitOption <p>任务限速信息</p>
     * @param integer $AutoRetryTimeRangeMinutes <p>自动重试的时间窗口设置</p>
     * @param string $StartPosition <p>同步到kafka链路指定位点。目前只支持时间格式：2023-12-20T19:24:23+08:00。如果没有指定位点，为空。</p>
     * @param boolean $FilterBeginCommit <p>同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持</p>
     * @param boolean $FilterCheckpoint <p>同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持</p>
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
