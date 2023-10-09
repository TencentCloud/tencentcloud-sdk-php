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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceMajorVersion请求参数结构体
 *
 * @method string getDBInstanceId() 获取实例ID。
 * @method void setDBInstanceId(string $DBInstanceId) 设置实例ID。
 * @method string getTargetDBKernelVersion() 获取目标内核版本号，可以通过API DescribeDBVersions获取可以升级的目标内核版本号。
 * @method void setTargetDBKernelVersion(string $TargetDBKernelVersion) 设置目标内核版本号，可以通过API DescribeDBVersions获取可以升级的目标内核版本号。
 * @method boolean getUpgradeCheck() 获取是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。
 * @method void setUpgradeCheck(boolean $UpgradeCheck) 设置是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。
 * @method boolean getBackupBeforeUpgrade() 获取升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。
 * @method void setBackupBeforeUpgrade(boolean $BackupBeforeUpgrade) 设置升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。
 * @method integer getStatisticsRefreshOption() 获取统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，
0：不需要收集统计信息；
1：实例恢复写之前收集统计信息；
3：实例恢复写之后收集统计信息。
UpgradeCheck为True时，此参数无效。
 * @method void setStatisticsRefreshOption(integer $StatisticsRefreshOption) 设置统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，
0：不需要收集统计信息；
1：实例恢复写之前收集统计信息；
3：实例恢复写之后收集统计信息。
UpgradeCheck为True时，此参数无效。
 * @method integer getExtensionUpgradeOption() 获取插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行"ALTER EXTENSION UPDATE"。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：
0：不需要自动升级插件；
1：恢复写之前升级插件；
2：恢复写之后升级插件。
UpgradeCheck为True时，此参数无效。
 * @method void setExtensionUpgradeOption(integer $ExtensionUpgradeOption) 设置插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行"ALTER EXTENSION UPDATE"。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：
0：不需要自动升级插件；
1：恢复写之前升级插件；
2：恢复写之后升级插件。
UpgradeCheck为True时，此参数无效。
 * @method integer getUpgradeTimeOption() 获取升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：
0：自动执行，不需要指定时间窗；
1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；
2：在实例运维时间窗内执行。
UpgradeCheck为True时，此参数无效。
 * @method void setUpgradeTimeOption(integer $UpgradeTimeOption) 设置升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：
0：自动执行，不需要指定时间窗；
1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；
2：在实例运维时间窗内执行。
UpgradeCheck为True时，此参数无效。
 * @method string getUpgradeTimeBegin() 获取升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
 * @method void setUpgradeTimeBegin(string $UpgradeTimeBegin) 设置升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
 * @method string getUpgradeTimeEnd() 获取升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
 * @method void setUpgradeTimeEnd(string $UpgradeTimeEnd) 设置升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
 */
class UpgradeDBInstanceMajorVersionRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $DBInstanceId;

    /**
     * @var string 目标内核版本号，可以通过API DescribeDBVersions获取可以升级的目标内核版本号。
     */
    public $TargetDBKernelVersion;

    /**
     * @var boolean 是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。
     */
    public $UpgradeCheck;

    /**
     * @var boolean 升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。
     */
    public $BackupBeforeUpgrade;

    /**
     * @var integer 统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，
0：不需要收集统计信息；
1：实例恢复写之前收集统计信息；
3：实例恢复写之后收集统计信息。
UpgradeCheck为True时，此参数无效。
     */
    public $StatisticsRefreshOption;

    /**
     * @var integer 插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行"ALTER EXTENSION UPDATE"。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：
0：不需要自动升级插件；
1：恢复写之前升级插件；
2：恢复写之后升级插件。
UpgradeCheck为True时，此参数无效。
     */
    public $ExtensionUpgradeOption;

    /**
     * @var integer 升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：
0：自动执行，不需要指定时间窗；
1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；
2：在实例运维时间窗内执行。
UpgradeCheck为True时，此参数无效。
     */
    public $UpgradeTimeOption;

    /**
     * @var string 升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
     */
    public $UpgradeTimeBegin;

    /**
     * @var string 升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
     */
    public $UpgradeTimeEnd;

    /**
     * @param string $DBInstanceId 实例ID。
     * @param string $TargetDBKernelVersion 目标内核版本号，可以通过API DescribeDBVersions获取可以升级的目标内核版本号。
     * @param boolean $UpgradeCheck 是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。
     * @param boolean $BackupBeforeUpgrade 升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。
     * @param integer $StatisticsRefreshOption 统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，
0：不需要收集统计信息；
1：实例恢复写之前收集统计信息；
3：实例恢复写之后收集统计信息。
UpgradeCheck为True时，此参数无效。
     * @param integer $ExtensionUpgradeOption 插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行"ALTER EXTENSION UPDATE"。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：
0：不需要自动升级插件；
1：恢复写之前升级插件；
2：恢复写之后升级插件。
UpgradeCheck为True时，此参数无效。
     * @param integer $UpgradeTimeOption 升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：
0：自动执行，不需要指定时间窗；
1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；
2：在实例运维时间窗内执行。
UpgradeCheck为True时，此参数无效。
     * @param string $UpgradeTimeBegin 升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
     * @param string $UpgradeTimeEnd 升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。
UpgradeCheck为True时，此参数无效。
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("TargetDBKernelVersion",$param) and $param["TargetDBKernelVersion"] !== null) {
            $this->TargetDBKernelVersion = $param["TargetDBKernelVersion"];
        }

        if (array_key_exists("UpgradeCheck",$param) and $param["UpgradeCheck"] !== null) {
            $this->UpgradeCheck = $param["UpgradeCheck"];
        }

        if (array_key_exists("BackupBeforeUpgrade",$param) and $param["BackupBeforeUpgrade"] !== null) {
            $this->BackupBeforeUpgrade = $param["BackupBeforeUpgrade"];
        }

        if (array_key_exists("StatisticsRefreshOption",$param) and $param["StatisticsRefreshOption"] !== null) {
            $this->StatisticsRefreshOption = $param["StatisticsRefreshOption"];
        }

        if (array_key_exists("ExtensionUpgradeOption",$param) and $param["ExtensionUpgradeOption"] !== null) {
            $this->ExtensionUpgradeOption = $param["ExtensionUpgradeOption"];
        }

        if (array_key_exists("UpgradeTimeOption",$param) and $param["UpgradeTimeOption"] !== null) {
            $this->UpgradeTimeOption = $param["UpgradeTimeOption"];
        }

        if (array_key_exists("UpgradeTimeBegin",$param) and $param["UpgradeTimeBegin"] !== null) {
            $this->UpgradeTimeBegin = $param["UpgradeTimeBegin"];
        }

        if (array_key_exists("UpgradeTimeEnd",$param) and $param["UpgradeTimeEnd"] !== null) {
            $this->UpgradeTimeEnd = $param["UpgradeTimeEnd"];
        }
    }
}
