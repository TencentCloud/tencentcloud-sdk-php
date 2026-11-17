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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceMajorVersion请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method string getTargetDBKernelVersion() 获取<p>目标内核版本号，可以通过API <a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取可以升级的目标内核版本号。</p>
 * @method void setTargetDBKernelVersion(string $TargetDBKernelVersion) 设置<p>目标内核版本号，可以通过API <a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取可以升级的目标内核版本号。</p>
 * @method boolean getUpgradeCheck() 获取<p>是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。</p>
 * @method void setUpgradeCheck(boolean $UpgradeCheck) 设置<p>是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。</p>
 * @method boolean getBackupBeforeUpgrade() 获取<p>升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。</p>
 * @method void setBackupBeforeUpgrade(boolean $BackupBeforeUpgrade) 设置<p>升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。</p>
 * @method integer getStatisticsRefreshOption() 获取<p>统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，<br>0：不需要收集统计信息；<br>1：实例恢复写之前收集统计信息；<br>3：实例恢复写之后收集统计信息。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method void setStatisticsRefreshOption(integer $StatisticsRefreshOption) 设置<p>统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，<br>0：不需要收集统计信息；<br>1：实例恢复写之前收集统计信息；<br>3：实例恢复写之后收集统计信息。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method integer getExtensionUpgradeOption() 获取<p>插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行&quot;ALTER EXTENSION UPDATE&quot;。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：<br>0：不需要自动升级插件；<br>1：恢复写之前升级插件；<br>2：恢复写之后升级插件。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method void setExtensionUpgradeOption(integer $ExtensionUpgradeOption) 设置<p>插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行&quot;ALTER EXTENSION UPDATE&quot;。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：<br>0：不需要自动升级插件；<br>1：恢复写之前升级插件；<br>2：恢复写之后升级插件。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method integer getUpgradeTimeOption() 获取<p>升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：<br>0：自动执行，不需要指定时间窗；<br>1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；<br>2：在实例运维时间窗内执行。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method void setUpgradeTimeOption(integer $UpgradeTimeOption) 设置<p>升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：<br>0：自动执行，不需要指定时间窗；<br>1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；<br>2：在实例运维时间窗内执行。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method string getUpgradeTimeBegin() 获取<p>升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method void setUpgradeTimeBegin(string $UpgradeTimeBegin) 设置<p>升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method string getUpgradeTimeEnd() 获取<p>升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method void setUpgradeTimeEnd(string $UpgradeTimeEnd) 设置<p>升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
 * @method boolean getUpgradeReadOnlyInstance() 获取<p>升级时是否携带RO。开启时在RO重建过程中会存在RO数据延迟现象。</p><p>默认值：false</p>
 * @method void setUpgradeReadOnlyInstance(boolean $UpgradeReadOnlyInstance) 设置<p>升级时是否携带RO。开启时在RO重建过程中会存在RO数据延迟现象。</p><p>默认值：false</p>
 */
class UpgradeDBInstanceMajorVersionRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>目标内核版本号，可以通过API <a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取可以升级的目标内核版本号。</p>
     */
    public $TargetDBKernelVersion;

    /**
     * @var boolean <p>是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。</p>
     */
    public $UpgradeCheck;

    /**
     * @var boolean <p>升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。</p>
     */
    public $BackupBeforeUpgrade;

    /**
     * @var integer <p>统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，<br>0：不需要收集统计信息；<br>1：实例恢复写之前收集统计信息；<br>3：实例恢复写之后收集统计信息。<br>UpgradeCheck为True时，此参数无效。</p>
     */
    public $StatisticsRefreshOption;

    /**
     * @var integer <p>插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行&quot;ALTER EXTENSION UPDATE&quot;。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：<br>0：不需要自动升级插件；<br>1：恢复写之前升级插件；<br>2：恢复写之后升级插件。<br>UpgradeCheck为True时，此参数无效。</p>
     */
    public $ExtensionUpgradeOption;

    /**
     * @var integer <p>升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：<br>0：自动执行，不需要指定时间窗；<br>1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；<br>2：在实例运维时间窗内执行。<br>UpgradeCheck为True时，此参数无效。</p>
     */
    public $UpgradeTimeOption;

    /**
     * @var string <p>升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
     */
    public $UpgradeTimeBegin;

    /**
     * @var string <p>升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
     */
    public $UpgradeTimeEnd;

    /**
     * @var boolean <p>升级时是否携带RO。开启时在RO重建过程中会存在RO数据延迟现象。</p><p>默认值：false</p>
     */
    public $UpgradeReadOnlyInstance;

    /**
     * @param string $DBInstanceId <p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param string $TargetDBKernelVersion <p>目标内核版本号，可以通过API <a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取可以升级的目标内核版本号。</p>
     * @param boolean $UpgradeCheck <p>是否为校验模式，若UpgradeCheck为True，表示仅进行内核版本兼容性检查，不会进行实质性的升级操作，对原实例无影响。检查结果可以通过升级日志查看。</p>
     * @param boolean $BackupBeforeUpgrade <p>升级前备份选项。True，表示升级前需要创建全量备份，False，表示升级前不需要创建全量备份。当实例已有备份集可以恢复到升级前的状态时，可选择False，否则需要指定为True。UpgradeCheck为True时，此参数无效。</p>
     * @param integer $StatisticsRefreshOption <p>统计信息收集选项，对主例运行 ANALYZE 以在升级后更新系统统计信息。可选值包括，<br>0：不需要收集统计信息；<br>1：实例恢复写之前收集统计信息；<br>3：实例恢复写之后收集统计信息。<br>UpgradeCheck为True时，此参数无效。</p>
     * @param integer $ExtensionUpgradeOption <p>插件升级选项，pg_upgrade不会升级任何插件，需要在升级完成后在创建过插件的库上执行&quot;ALTER EXTENSION UPDATE&quot;。发起升级实例大版本时可以指定在实例恢复写前/后是否需要升级任务自动升级插件版本。可选值包括：<br>0：不需要自动升级插件；<br>1：恢复写之前升级插件；<br>2：恢复写之后升级插件。<br>UpgradeCheck为True时，此参数无效。</p>
     * @param integer $UpgradeTimeOption <p>升级时间选项，升级过程中会有一段时间实例只读，并会有一次秒级闪断，发起升级时需要选择这段影响的时间窗。可选值包括：<br>0：自动执行，不需要指定时间窗；<br>1：指定本次升级任务的时间窗，通过参数UpgradeTimeBegin和UpgradeTimeEnd设置；<br>2：在实例运维时间窗内执行。<br>UpgradeCheck为True时，此参数无效。</p>
     * @param string $UpgradeTimeBegin <p>升级时间窗开始时间，时间格式：HH:MM:SS，例如：01:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
     * @param string $UpgradeTimeEnd <p>升级时间窗截止时间，时间格式：HH:MM:SS，例如：02:00:00。当UpgradeTimeOption为1时，该参数有效。<br>UpgradeCheck为True时，此参数无效。</p>
     * @param boolean $UpgradeReadOnlyInstance <p>升级时是否携带RO。开启时在RO重建过程中会存在RO数据延迟现象。</p><p>默认值：false</p>
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

        if (array_key_exists("UpgradeReadOnlyInstance",$param) and $param["UpgradeReadOnlyInstance"] !== null) {
            $this->UpgradeReadOnlyInstance = $param["UpgradeReadOnlyInstance"];
        }
    }
}
