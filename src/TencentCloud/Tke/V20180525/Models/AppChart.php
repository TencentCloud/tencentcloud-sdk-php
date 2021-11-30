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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * app所支持的chart
 *
 * @method string getName() 获取chart名称
 * @method void setName(string $Name) 设置chart名称
 * @method string getLabel() 获取chart的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabel(string $Label) 设置chart的标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLatestVersion() 获取chart的版本
 * @method void setLatestVersion(string $LatestVersion) 设置chart的版本
 */
class AppChart extends AbstractModel
{
    /**
     * @var string chart名称
     */
    public $Name;

    /**
     * @var string chart的标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Label;

    /**
     * @var string chart的版本
     */
    public $LatestVersion;

    /**
     * @param string $Name chart名称
     * @param string $Label chart的标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LatestVersion chart的版本
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("LatestVersion",$param) and $param["LatestVersion"] !== null) {
            $this->LatestVersion = $param["LatestVersion"];
        }
    }
}
