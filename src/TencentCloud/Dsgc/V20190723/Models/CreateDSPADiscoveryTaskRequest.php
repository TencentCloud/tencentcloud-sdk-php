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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDSPADiscoveryTask请求参数结构体
 *
 * @method string getDspaId() 获取DSPA实例ID
 * @method void setDspaId(string $DspaId) 设置DSPA实例ID
 * @method string getName() 获取任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method void setName(string $Name) 设置任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
 * @method string getDataSourceId() 获取数据源ID
 * @method void setDataSourceId(string $DataSourceId) 设置数据源ID
 * @method integer getEnable() 获取任务开关，0 关闭，1 启用
 * @method void setEnable(integer $Enable) 设置任务开关，0 关闭，1 启用
 * @method integer getGeneralRuleSetEnable() 获取通用规则集开关，0 关闭，1 启用
 * @method void setGeneralRuleSetEnable(integer $GeneralRuleSetEnable) 设置通用规则集开关，0 关闭，1 启用
 * @method integer getPlan() 获取执行计划， 0立即 1定时，选择“立即”时，扫描周期只能选择单次
 * @method void setPlan(integer $Plan) 设置执行计划， 0立即 1定时，选择“立即”时，扫描周期只能选择单次
 * @method integer getPeriod() 获取扫描周期，0单次 1每天 2每周 3每月
 * @method void setPeriod(integer $Period) 设置扫描周期，0单次 1每天 2每周 3每月
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method string getDataSourceType() 获取数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
 * @method string getDescription() 获取任务描述，最大长度为1024个字符
 * @method void setDescription(string $Description) 设置任务描述，最大长度为1024个字符
 * @method string getCondition() 获取用于传入的数据源的条件，目前只支持数据库，所以目前表示数据库的名称，选择多个数据库，之间通过逗号分隔，若不选，则默认选择全部数据库
 * @method void setCondition(string $Condition) 设置用于传入的数据源的条件，目前只支持数据库，所以目前表示数据库的名称，选择多个数据库，之间通过逗号分隔，若不选，则默认选择全部数据库
 * @method array getComplianceGroupIds() 获取合规组ID列表，最多支持添加5个
 * @method void setComplianceGroupIds(array $ComplianceGroupIds) 设置合规组ID列表，最多支持添加5个
 * @method string getTimingStartTime() 获取任务定时启动时间，格式如：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
 * @method void setTimingStartTime(string $TimingStartTime) 设置任务定时启动时间，格式如：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
 */
class CreateDSPADiscoveryTaskRequest extends AbstractModel
{
    /**
     * @var string DSPA实例ID
     */
    public $DspaId;

    /**
     * @var string 任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     */
    public $Name;

    /**
     * @var string 数据源ID
     */
    public $DataSourceId;

    /**
     * @var integer 任务开关，0 关闭，1 启用
     */
    public $Enable;

    /**
     * @var integer 通用规则集开关，0 关闭，1 启用
     */
    public $GeneralRuleSetEnable;

    /**
     * @var integer 执行计划， 0立即 1定时，选择“立即”时，扫描周期只能选择单次
     */
    public $Plan;

    /**
     * @var integer 扫描周期，0单次 1每天 2每周 3每月
     */
    public $Period;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var string 数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
     */
    public $DataSourceType;

    /**
     * @var string 任务描述，最大长度为1024个字符
     */
    public $Description;

    /**
     * @var string 用于传入的数据源的条件，目前只支持数据库，所以目前表示数据库的名称，选择多个数据库，之间通过逗号分隔，若不选，则默认选择全部数据库
     */
    public $Condition;

    /**
     * @var array 合规组ID列表，最多支持添加5个
     */
    public $ComplianceGroupIds;

    /**
     * @var string 任务定时启动时间，格式如：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
     */
    public $TimingStartTime;

    /**
     * @param string $DspaId DSPA实例ID
     * @param string $Name 任务名称，1-60个字符，仅允许输入中文、英文字母、数字、'_'、'-'，并且开头和结尾需为中文、英文字母或者数字，Name不可重复
     * @param string $DataSourceId 数据源ID
     * @param integer $Enable 任务开关，0 关闭，1 启用
     * @param integer $GeneralRuleSetEnable 通用规则集开关，0 关闭，1 启用
     * @param integer $Plan 执行计划， 0立即 1定时，选择“立即”时，扫描周期只能选择单次
     * @param integer $Period 扫描周期，0单次 1每天 2每周 3每月
     * @param string $ResourceRegion 资源所在地域
     * @param string $DataSourceType 数据源类型，可取值如下：
cdb 表示云数据库 MySQL,
dcdb 表示TDSQL MySQL版,
mariadb 表示云数据库 MariaDB,
postgres 表示云数据库 PostgreSQL,
cynosdbpg 表示TDSQL-C PostgreSQL版,
cynosdbmysql 表示TDSQL-C MySQL版,
selfbuilt-db 表示自建数据库
     * @param string $Description 任务描述，最大长度为1024个字符
     * @param string $Condition 用于传入的数据源的条件，目前只支持数据库，所以目前表示数据库的名称，选择多个数据库，之间通过逗号分隔，若不选，则默认选择全部数据库
     * @param array $ComplianceGroupIds 合规组ID列表，最多支持添加5个
     * @param string $TimingStartTime 任务定时启动时间，格式如：2006-01-02 15:04:05
当执行计划（Plan字段）为”立即“时，定时启动时间不会生效，此场景下给该字段传值不会被保存。
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("GeneralRuleSetEnable",$param) and $param["GeneralRuleSetEnable"] !== null) {
            $this->GeneralRuleSetEnable = $param["GeneralRuleSetEnable"];
        }

        if (array_key_exists("Plan",$param) and $param["Plan"] !== null) {
            $this->Plan = $param["Plan"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = $param["Condition"];
        }

        if (array_key_exists("ComplianceGroupIds",$param) and $param["ComplianceGroupIds"] !== null) {
            $this->ComplianceGroupIds = $param["ComplianceGroupIds"];
        }

        if (array_key_exists("TimingStartTime",$param) and $param["TimingStartTime"] !== null) {
            $this->TimingStartTime = $param["TimingStartTime"];
        }
    }
}
