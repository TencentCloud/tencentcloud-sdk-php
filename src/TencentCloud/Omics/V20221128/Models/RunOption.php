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
 * 运行应用选项。
 *
 * @method string getFailureMode() 获取运行失败模式，取值范围：
- ContinueWhilePossible
- NoNewCalls
 * @method void setFailureMode(string $FailureMode) 设置运行失败模式，取值范围：
- ContinueWhilePossible
- NoNewCalls
 * @method boolean getUseCallCache() 获取是否使用Call-Caching功能。
 * @method void setUseCallCache(boolean $UseCallCache) 设置是否使用Call-Caching功能。
 * @method boolean getUseErrorOnHold() 获取是否使用错误挂起功能。
 * @method void setUseErrorOnHold(boolean $UseErrorOnHold) 设置是否使用错误挂起功能。
 * @method string getFinalWorkflowOutputsDir() 获取输出归档COS路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFinalWorkflowOutputsDir(string $FinalWorkflowOutputsDir) 设置输出归档COS路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUseRelativeOutputPaths() 获取是否使用相对目录归档输出。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUseRelativeOutputPaths(boolean $UseRelativeOutputPaths) 设置是否使用相对目录归档输出。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RunOption extends AbstractModel
{
    /**
     * @var string 运行失败模式，取值范围：
- ContinueWhilePossible
- NoNewCalls
     */
    public $FailureMode;

    /**
     * @var boolean 是否使用Call-Caching功能。
     */
    public $UseCallCache;

    /**
     * @var boolean 是否使用错误挂起功能。
     */
    public $UseErrorOnHold;

    /**
     * @var string 输出归档COS路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FinalWorkflowOutputsDir;

    /**
     * @var boolean 是否使用相对目录归档输出。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UseRelativeOutputPaths;

    /**
     * @param string $FailureMode 运行失败模式，取值范围：
- ContinueWhilePossible
- NoNewCalls
     * @param boolean $UseCallCache 是否使用Call-Caching功能。
     * @param boolean $UseErrorOnHold 是否使用错误挂起功能。
     * @param string $FinalWorkflowOutputsDir 输出归档COS路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UseRelativeOutputPaths 是否使用相对目录归档输出。
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
        if (array_key_exists("FailureMode",$param) and $param["FailureMode"] !== null) {
            $this->FailureMode = $param["FailureMode"];
        }

        if (array_key_exists("UseCallCache",$param) and $param["UseCallCache"] !== null) {
            $this->UseCallCache = $param["UseCallCache"];
        }

        if (array_key_exists("UseErrorOnHold",$param) and $param["UseErrorOnHold"] !== null) {
            $this->UseErrorOnHold = $param["UseErrorOnHold"];
        }

        if (array_key_exists("FinalWorkflowOutputsDir",$param) and $param["FinalWorkflowOutputsDir"] !== null) {
            $this->FinalWorkflowOutputsDir = $param["FinalWorkflowOutputsDir"];
        }

        if (array_key_exists("UseRelativeOutputPaths",$param) and $param["UseRelativeOutputPaths"] !== null) {
            $this->UseRelativeOutputPaths = $param["UseRelativeOutputPaths"];
        }
    }
}
