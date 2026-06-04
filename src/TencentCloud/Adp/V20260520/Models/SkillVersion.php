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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SkillVersion Skill 版本信息。
 *
 * @method SkillAnalysisInfo getAnalysisInfo() 获取检测信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnalysisInfo(SkillAnalysisInfo $AnalysisInfo) 设置检测信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取当前生效版本号
 * @method void setVersion(string $Version) 设置当前生效版本号
 * @method string getVersionId() 获取当前生效版本ID
 * @method void setVersionId(string $VersionId) 设置当前生效版本ID
 */
class SkillVersion extends AbstractModel
{
    /**
     * @var SkillAnalysisInfo 检测信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnalysisInfo;

    /**
     * @var string 当前生效版本号
     */
    public $Version;

    /**
     * @var string 当前生效版本ID
     */
    public $VersionId;

    /**
     * @param SkillAnalysisInfo $AnalysisInfo 检测信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 当前生效版本号
     * @param string $VersionId 当前生效版本ID
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
        if (array_key_exists("AnalysisInfo",$param) and $param["AnalysisInfo"] !== null) {
            $this->AnalysisInfo = new SkillAnalysisInfo();
            $this->AnalysisInfo->deserialize($param["AnalysisInfo"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("VersionId",$param) and $param["VersionId"] !== null) {
            $this->VersionId = $param["VersionId"];
        }
    }
}
