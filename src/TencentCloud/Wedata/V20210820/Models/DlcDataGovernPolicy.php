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
 * 数据治理配置项
 *
 * @method DlcRewriteDataInfo getRewriteDataPolicy() 获取数据排布治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRewriteDataPolicy(DlcRewriteDataInfo $RewriteDataPolicy) 设置数据排布治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method DlcExpiredSnapshotsInfo getExpiredSnapshotsPolicy() 获取快照过期治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredSnapshotsPolicy(DlcExpiredSnapshotsInfo $ExpiredSnapshotsPolicy) 设置快照过期治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method DlcRemoveOrphanFilesInfo getRemoveOrphanFilesPolicy() 获取移除孤立文件治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemoveOrphanFilesPolicy(DlcRemoveOrphanFilesInfo $RemoveOrphanFilesPolicy) 设置移除孤立文件治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method DlcMergeManifestsInfo getMergeManifestsPolicy() 获取合并元数据Manifests治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMergeManifestsPolicy(DlcMergeManifestsInfo $MergeManifestsPolicy) 设置合并元数据Manifests治理项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInheritDataBase() 获取是否集成库规则：default（默认继承）、none（不继承）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInheritDataBase(string $InheritDataBase) 设置是否集成库规则：default（默认继承）、none（不继承）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取治理规则类型，Customize: 自定义；Intelligence: 智能治理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置治理规则类型，Customize: 自定义；Intelligence: 智能治理
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGovernEngine() 获取治理引擎
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGovernEngine(string $GovernEngine) 设置治理引擎
注意：此字段可能返回 null，表示取不到有效值。
 */
class DlcDataGovernPolicy extends AbstractModel
{
    /**
     * @var DlcRewriteDataInfo 数据排布治理项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RewriteDataPolicy;

    /**
     * @var DlcExpiredSnapshotsInfo 快照过期治理项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredSnapshotsPolicy;

    /**
     * @var DlcRemoveOrphanFilesInfo 移除孤立文件治理项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RemoveOrphanFilesPolicy;

    /**
     * @var DlcMergeManifestsInfo 合并元数据Manifests治理项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MergeManifestsPolicy;

    /**
     * @var string 是否集成库规则：default（默认继承）、none（不继承）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InheritDataBase;

    /**
     * @var string 治理规则类型，Customize: 自定义；Intelligence: 智能治理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var string 治理引擎
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GovernEngine;

    /**
     * @param DlcRewriteDataInfo $RewriteDataPolicy 数据排布治理项
注意：此字段可能返回 null，表示取不到有效值。
     * @param DlcExpiredSnapshotsInfo $ExpiredSnapshotsPolicy 快照过期治理项
注意：此字段可能返回 null，表示取不到有效值。
     * @param DlcRemoveOrphanFilesInfo $RemoveOrphanFilesPolicy 移除孤立文件治理项
注意：此字段可能返回 null，表示取不到有效值。
     * @param DlcMergeManifestsInfo $MergeManifestsPolicy 合并元数据Manifests治理项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InheritDataBase 是否集成库规则：default（默认继承）、none（不继承）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType 治理规则类型，Customize: 自定义；Intelligence: 智能治理
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GovernEngine 治理引擎
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
        if (array_key_exists("RewriteDataPolicy",$param) and $param["RewriteDataPolicy"] !== null) {
            $this->RewriteDataPolicy = new DlcRewriteDataInfo();
            $this->RewriteDataPolicy->deserialize($param["RewriteDataPolicy"]);
        }

        if (array_key_exists("ExpiredSnapshotsPolicy",$param) and $param["ExpiredSnapshotsPolicy"] !== null) {
            $this->ExpiredSnapshotsPolicy = new DlcExpiredSnapshotsInfo();
            $this->ExpiredSnapshotsPolicy->deserialize($param["ExpiredSnapshotsPolicy"]);
        }

        if (array_key_exists("RemoveOrphanFilesPolicy",$param) and $param["RemoveOrphanFilesPolicy"] !== null) {
            $this->RemoveOrphanFilesPolicy = new DlcRemoveOrphanFilesInfo();
            $this->RemoveOrphanFilesPolicy->deserialize($param["RemoveOrphanFilesPolicy"]);
        }

        if (array_key_exists("MergeManifestsPolicy",$param) and $param["MergeManifestsPolicy"] !== null) {
            $this->MergeManifestsPolicy = new DlcMergeManifestsInfo();
            $this->MergeManifestsPolicy->deserialize($param["MergeManifestsPolicy"]);
        }

        if (array_key_exists("InheritDataBase",$param) and $param["InheritDataBase"] !== null) {
            $this->InheritDataBase = $param["InheritDataBase"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("GovernEngine",$param) and $param["GovernEngine"] !== null) {
            $this->GovernEngine = $param["GovernEngine"];
        }
    }
}
