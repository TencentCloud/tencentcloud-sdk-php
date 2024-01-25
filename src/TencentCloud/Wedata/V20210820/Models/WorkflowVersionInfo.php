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
 * 工作流版本信息
 *
 * @method string getVersionNum() 获取版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionNum(string $VersionNum) 设置版本号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersionId() 获取版本编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersionId(string $VersionId) 设置版本编号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommitter() 获取提交人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommitter(string $Committer) 设置提交人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommitTime() 获取提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommitTime(string $CommitTime) 设置提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommitDesc() 获取提交信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommitDesc(string $CommitDesc) 设置提交信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosUrl() 获取COS地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCosUrl(string $CosUrl) 设置COS地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class WorkflowVersionInfo extends AbstractModel
{
    /**
     * @var string 版本号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionNum;

    /**
     * @var string 版本编号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VersionId;

    /**
     * @var string 提交人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Committer;

    /**
     * @var string 提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommitTime;

    /**
     * @var string 提交信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommitDesc;

    /**
     * @var string COS地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CosUrl;

    /**
     * @param string $VersionNum 版本号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VersionId 版本编号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Committer 提交人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CommitTime 提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CommitDesc 提交信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosUrl COS地址
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
        if (array_key_exists("VersionNum",$param) and $param["VersionNum"] !== null) {
            $this->VersionNum = $param["VersionNum"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }

        if (array_key_exists("Committer",$param) and $param["Committer"] !== null) {
            $this->Committer = $param["Committer"];
        }

        if (array_key_exists("CommitTime",$param) and $param["CommitTime"] !== null) {
            $this->CommitTime = $param["CommitTime"];
        }

        if (array_key_exists("CommitDesc",$param) and $param["CommitDesc"] !== null) {
            $this->CommitDesc = $param["CommitDesc"];
        }

        if (array_key_exists("CosUrl",$param) and $param["CosUrl"] !== null) {
            $this->CosUrl = $param["CosUrl"];
        }
    }
}
