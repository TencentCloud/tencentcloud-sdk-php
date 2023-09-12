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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 体检报告V1版本
 *
 * @method PhysicalExamination getPhysicalExaminationMulti() 获取体检报告信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPhysicalExaminationMulti(PhysicalExamination $PhysicalExaminationMulti) 设置体检报告信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVersion() 获取版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class PhysicalExaminationV1 extends AbstractModel
{
    /**
     * @var PhysicalExamination 体检报告信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PhysicalExaminationMulti;

    /**
     * @var string 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @param PhysicalExamination $PhysicalExaminationMulti 体检报告信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Version 版本
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
        if (array_key_exists("PhysicalExaminationMulti",$param) and $param["PhysicalExaminationMulti"] !== null) {
            $this->PhysicalExaminationMulti = new PhysicalExamination();
            $this->PhysicalExaminationMulti->deserialize($param["PhysicalExaminationMulti"]);
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
