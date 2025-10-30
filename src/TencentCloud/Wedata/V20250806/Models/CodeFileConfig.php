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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据探索脚本配置
 *
 * @method string getParams() 获取高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
 * @method NotebookSessionInfo getNotebookSessionInfo() 获取notebook kernel session信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNotebookSessionInfo(NotebookSessionInfo $NotebookSessionInfo) 设置notebook kernel session信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class CodeFileConfig extends AbstractModel
{
    /**
     * @var string 高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var NotebookSessionInfo notebook kernel session信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NotebookSessionInfo;

    /**
     * @param string $Params 高级运行参数,变量替换，map-json String,String
注意：此字段可能返回 null，表示取不到有效值。
     * @param NotebookSessionInfo $NotebookSessionInfo notebook kernel session信息
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
        if (array_key_exists("Params",$param) and $param["Params"] !== null) {
            $this->Params = $param["Params"];
        }

        if (array_key_exists("NotebookSessionInfo",$param) and $param["NotebookSessionInfo"] !== null) {
            $this->NotebookSessionInfo = new NotebookSessionInfo();
            $this->NotebookSessionInfo->deserialize($param["NotebookSessionInfo"]);
        }
    }
}
