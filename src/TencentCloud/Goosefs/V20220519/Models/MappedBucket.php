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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 关联的对象Bucket, 并将其映射到文件系统某个路径上
 *
 * @method string getBucketName() 获取对象存储Bucket名
 * @method void setBucketName(string $BucketName) 设置对象存储Bucket名
 * @method string getFileSystemPath() 获取映射到的文件系统路径, 默认为/
 * @method void setFileSystemPath(string $FileSystemPath) 设置映射到的文件系统路径, 默认为/
 * @method array getDataRepositoryTaskAutoStrategy() 获取数据流动的自动策略, 包含加载与沉降。策略可以是多种的组合
按需加载(OnDemandImport)
自动加载元数据(AutoImportMeta)
自动加载数据(AutoImportData)
周期加载(PeriodImport)

周期沉降(PeriodExport)
立即沉降(ImmediateExport)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataRepositoryTaskAutoStrategy(array $DataRepositoryTaskAutoStrategy) 设置数据流动的自动策略, 包含加载与沉降。策略可以是多种的组合
按需加载(OnDemandImport)
自动加载元数据(AutoImportMeta)
自动加载数据(AutoImportData)
周期加载(PeriodImport)

周期沉降(PeriodExport)
立即沉降(ImmediateExport)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleId() 获取绑定bucket的数据流动策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置绑定bucket的数据流动策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleDescription() 获取规则备注与描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleDescription(string $RuleDescription) 设置规则备注与描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取桶关联状态 0：关联中 1：关联完成
 * @method void setStatus(integer $Status) 设置桶关联状态 0：关联中 1：关联完成
 * @method boolean getAccelerateFlag() 获取是否使用全球加速域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccelerateFlag(boolean $AccelerateFlag) 设置是否使用全球加速域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBucketRegion() 获取桶所在的园区
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBucketRegion(string $BucketRegion) 设置桶所在的园区
注意：此字段可能返回 null，表示取不到有效值。
 */
class MappedBucket extends AbstractModel
{
    /**
     * @var string 对象存储Bucket名
     */
    public $BucketName;

    /**
     * @var string 映射到的文件系统路径, 默认为/
     */
    public $FileSystemPath;

    /**
     * @var array 数据流动的自动策略, 包含加载与沉降。策略可以是多种的组合
按需加载(OnDemandImport)
自动加载元数据(AutoImportMeta)
自动加载数据(AutoImportData)
周期加载(PeriodImport)

周期沉降(PeriodExport)
立即沉降(ImmediateExport)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataRepositoryTaskAutoStrategy;

    /**
     * @var string 绑定bucket的数据流动策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string 规则备注与描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleDescription;

    /**
     * @var integer 桶关联状态 0：关联中 1：关联完成
     */
    public $Status;

    /**
     * @var boolean 是否使用全球加速域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccelerateFlag;

    /**
     * @var string 桶所在的园区
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BucketRegion;

    /**
     * @param string $BucketName 对象存储Bucket名
     * @param string $FileSystemPath 映射到的文件系统路径, 默认为/
     * @param array $DataRepositoryTaskAutoStrategy 数据流动的自动策略, 包含加载与沉降。策略可以是多种的组合
按需加载(OnDemandImport)
自动加载元数据(AutoImportMeta)
自动加载数据(AutoImportData)
周期加载(PeriodImport)

周期沉降(PeriodExport)
立即沉降(ImmediateExport)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleId 绑定bucket的数据流动策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleDescription 规则备注与描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 桶关联状态 0：关联中 1：关联完成
     * @param boolean $AccelerateFlag 是否使用全球加速域名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BucketRegion 桶所在的园区
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
        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("FileSystemPath",$param) and $param["FileSystemPath"] !== null) {
            $this->FileSystemPath = $param["FileSystemPath"];
        }

        if (array_key_exists("DataRepositoryTaskAutoStrategy",$param) and $param["DataRepositoryTaskAutoStrategy"] !== null) {
            $this->DataRepositoryTaskAutoStrategy = $param["DataRepositoryTaskAutoStrategy"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleDescription",$param) and $param["RuleDescription"] !== null) {
            $this->RuleDescription = $param["RuleDescription"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AccelerateFlag",$param) and $param["AccelerateFlag"] !== null) {
            $this->AccelerateFlag = $param["AccelerateFlag"];
        }

        if (array_key_exists("BucketRegion",$param) and $param["BucketRegion"] !== null) {
            $this->BucketRegion = $param["BucketRegion"];
        }
    }
}
