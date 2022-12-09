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
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 输出映射
 *
 * @method string getSourcePath() 获取源端路径
 * @method void setSourcePath(string $SourcePath) 设置源端路径
 * @method string getDestinationPath() 获取目的端路径
 * @method void setDestinationPath(string $DestinationPath) 设置目的端路径
 * @method OutputMappingOption getOutputMappingOption() 获取输出映射选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputMappingOption(OutputMappingOption $OutputMappingOption) 设置输出映射选项
注意：此字段可能返回 null，表示取不到有效值。
 */
class OutputMapping extends AbstractModel
{
    /**
     * @var string 源端路径
     */
    public $SourcePath;

    /**
     * @var string 目的端路径
     */
    public $DestinationPath;

    /**
     * @var OutputMappingOption 输出映射选项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputMappingOption;

    /**
     * @param string $SourcePath 源端路径
     * @param string $DestinationPath 目的端路径
     * @param OutputMappingOption $OutputMappingOption 输出映射选项
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
        if (array_key_exists("SourcePath",$param) and $param["SourcePath"] !== null) {
            $this->SourcePath = $param["SourcePath"];
        }

        if (array_key_exists("DestinationPath",$param) and $param["DestinationPath"] !== null) {
            $this->DestinationPath = $param["DestinationPath"];
        }

        if (array_key_exists("OutputMappingOption",$param) and $param["OutputMappingOption"] !== null) {
            $this->OutputMappingOption = new OutputMappingOption();
            $this->OutputMappingOption->deserialize($param["OutputMappingOption"]);
        }
    }
}
