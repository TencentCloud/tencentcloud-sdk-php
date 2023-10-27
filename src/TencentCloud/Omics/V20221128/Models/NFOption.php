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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nextflow选项。
 *
 * @method string getConfig() 获取Config。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(string $Config) 设置Config。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProfile() 获取Profile。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProfile(string $Profile) 设置Profile。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReport() 获取Report。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReport(boolean $Report) 设置Report。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getResume() 获取Resume。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResume(boolean $Resume) 设置Resume。
注意：此字段可能返回 null，表示取不到有效值。
 */
class NFOption extends AbstractModel
{
    /**
     * @var string Config。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var string Profile。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Profile;

    /**
     * @var boolean Report。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Report;

    /**
     * @var boolean Resume。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Resume;

    /**
     * @param string $Config Config。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Profile Profile。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Report Report。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Resume Resume。
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Profile",$param) and $param["Profile"] !== null) {
            $this->Profile = $param["Profile"];
        }

        if (array_key_exists("Report",$param) and $param["Report"] !== null) {
            $this->Report = $param["Report"];
        }

        if (array_key_exists("Resume",$param) and $param["Resume"] !== null) {
            $this->Resume = $param["Resume"];
        }
    }
}
