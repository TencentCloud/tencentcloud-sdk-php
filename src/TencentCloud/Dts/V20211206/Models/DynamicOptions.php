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
 * @method array getOpTypes() 获取所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)，PartialDDL(自定义,和DdlOptions一起起作用 )；必填、dts会用该值覆盖原有的值
 * @method void setOpTypes(array $OpTypes) 设置所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)，PartialDDL(自定义,和DdlOptions一起起作用 )；必填、dts会用该值覆盖原有的值
 * @method array getDdlOptions() 获取DDL同步选项，具体描述要同步哪些DDL; 当OpTypes取值PartialDDL时、字段不能为空；必填、dts会用该值覆盖原有的值
 * @method void setDdlOptions(array $DdlOptions) 设置DDL同步选项，具体描述要同步哪些DDL; 当OpTypes取值PartialDDL时、字段不能为空；必填、dts会用该值覆盖原有的值
 * @method string getConflictHandleType() 获取冲突处理选项，ReportError(报错)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖); 目前目标端为kafka的链路不支持修改该配置
 * @method void setConflictHandleType(string $ConflictHandleType) 设置冲突处理选项，ReportError(报错)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖); 目前目标端为kafka的链路不支持修改该配置
 * @method ConflictHandleOption getConflictHandleOption() 获取冲突处理的详细选项，如条件覆盖中的条件行和条件操作；不能部分更新该选项的内部字段；有更新时、需要全量更新该字段
 * @method void setConflictHandleOption(ConflictHandleOption $ConflictHandleOption) 设置冲突处理的详细选项，如条件覆盖中的条件行和条件操作；不能部分更新该选项的内部字段；有更新时、需要全量更新该字段
 * @method KafkaOption getKafkaOption() 获取同步到kafka链路的kafka配置
 * @method void setKafkaOption(KafkaOption $KafkaOption) 设置同步到kafka链路的kafka配置
 * @method boolean getFilterBeginCommit() 获取同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
 * @method void setFilterBeginCommit(boolean $FilterBeginCommit) 设置同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
 * @method boolean getFilterCheckpoint() 获取同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
 * @method void setFilterCheckpoint(boolean $FilterCheckpoint) 设置同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
 * @method string getDealOfExistSameTable() 获取同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
 * @method void setDealOfExistSameTable(string $DealOfExistSameTable) 设置同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
 * @method string getStartPosition() 获取仅增量任务重新设置指定位点
 * @method void setStartPosition(string $StartPosition) 设置仅增量任务重新设置指定位点
 */
class DynamicOptions extends AbstractModel
{
    /**
     * @var array 所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)，PartialDDL(自定义,和DdlOptions一起起作用 )；必填、dts会用该值覆盖原有的值
     */
    public $OpTypes;

    /**
     * @var array DDL同步选项，具体描述要同步哪些DDL; 当OpTypes取值PartialDDL时、字段不能为空；必填、dts会用该值覆盖原有的值
     */
    public $DdlOptions;

    /**
     * @var string 冲突处理选项，ReportError(报错)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖); 目前目标端为kafka的链路不支持修改该配置
     */
    public $ConflictHandleType;

    /**
     * @var ConflictHandleOption 冲突处理的详细选项，如条件覆盖中的条件行和条件操作；不能部分更新该选项的内部字段；有更新时、需要全量更新该字段
     */
    public $ConflictHandleOption;

    /**
     * @var KafkaOption 同步到kafka链路的kafka配置
     */
    public $KafkaOption;

    /**
     * @var boolean 同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
     */
    public $FilterBeginCommit;

    /**
     * @var boolean 同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
     */
    public $FilterCheckpoint;

    /**
     * @var string 同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
     */
    public $DealOfExistSameTable;

    /**
     * @var string 仅增量任务重新设置指定位点
     */
    public $StartPosition;

    /**
     * @param array $OpTypes 所要同步的DML和DDL的选项，Insert(插入操作)、Update(更新操作)、Delete(删除操作)、DDL(结构同步)，PartialDDL(自定义,和DdlOptions一起起作用 )；必填、dts会用该值覆盖原有的值
     * @param array $DdlOptions DDL同步选项，具体描述要同步哪些DDL; 当OpTypes取值PartialDDL时、字段不能为空；必填、dts会用该值覆盖原有的值
     * @param string $ConflictHandleType 冲突处理选项，ReportError(报错)、Ignore(忽略)、Cover(覆盖)、ConditionCover(条件覆盖); 目前目标端为kafka的链路不支持修改该配置
     * @param ConflictHandleOption $ConflictHandleOption 冲突处理的详细选项，如条件覆盖中的条件行和条件操作；不能部分更新该选项的内部字段；有更新时、需要全量更新该字段
     * @param KafkaOption $KafkaOption 同步到kafka链路的kafka配置
     * @param boolean $FilterBeginCommit 同步到kafka链路是否过滤掉begin和commit消息。目前仅mysql2kafka链路支持
     * @param boolean $FilterCheckpoint 同步到kafka链路是否过滤掉checkpoint消息。目前仅mysql2kafka链路支持
     * @param string $DealOfExistSameTable 同名表的处理，ReportErrorAfterCheck(前置校验并报错，默认)、ExecuteAfterIgnore(忽略并继续执行)
     * @param string $StartPosition 仅增量任务重新设置指定位点
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
        if (array_key_exists("OpTypes",$param) and $param["OpTypes"] !== null) {
            $this->OpTypes = $param["OpTypes"];
        }

        if (array_key_exists("DdlOptions",$param) and $param["DdlOptions"] !== null) {
            $this->DdlOptions = [];
            foreach ($param["DdlOptions"] as $key => $value){
                $obj = new DdlOption();
                $obj->deserialize($value);
                array_push($this->DdlOptions, $obj);
            }
        }

        if (array_key_exists("ConflictHandleType",$param) and $param["ConflictHandleType"] !== null) {
            $this->ConflictHandleType = $param["ConflictHandleType"];
        }

        if (array_key_exists("ConflictHandleOption",$param) and $param["ConflictHandleOption"] !== null) {
            $this->ConflictHandleOption = new ConflictHandleOption();
            $this->ConflictHandleOption->deserialize($param["ConflictHandleOption"]);
        }

        if (array_key_exists("KafkaOption",$param) and $param["KafkaOption"] !== null) {
            $this->KafkaOption = new KafkaOption();
            $this->KafkaOption->deserialize($param["KafkaOption"]);
        }

        if (array_key_exists("FilterBeginCommit",$param) and $param["FilterBeginCommit"] !== null) {
            $this->FilterBeginCommit = $param["FilterBeginCommit"];
        }

        if (array_key_exists("FilterCheckpoint",$param) and $param["FilterCheckpoint"] !== null) {
            $this->FilterCheckpoint = $param["FilterCheckpoint"];
        }

        if (array_key_exists("DealOfExistSameTable",$param) and $param["DealOfExistSameTable"] !== null) {
            $this->DealOfExistSameTable = $param["DealOfExistSameTable"];
        }

        if (array_key_exists("StartPosition",$param) and $param["StartPosition"] !== null) {
            $this->StartPosition = $param["StartPosition"];
        }
    }
}
