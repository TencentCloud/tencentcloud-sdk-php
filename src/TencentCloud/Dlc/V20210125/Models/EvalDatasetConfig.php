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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 验证数据集配置（作为 DatasetMount 属性，与训练集一对一）
 *
 * @method string getEvalMode() 获取<p>验证集模式：none / split / separate</p>
 * @method void setEvalMode(string $EvalMode) 设置<p>验证集模式：none / split / separate</p>
 * @method float getEvalSplitRatio() 获取<p>自动拆分比例（1-20，即 1%-20%），仅 split 生效</p>
 * @method void setEvalSplitRatio(float $EvalSplitRatio) 设置<p>自动拆分比例（1-20，即 1%-20%），仅 split 生效</p>
 * @method string getEvalDatasetId() 获取<p>独立验证数据集 ID（dataset 表），仅 separate 生效；与 Catalog 二选一</p>
 * @method void setEvalDatasetId(string $EvalDatasetId) 设置<p>独立验证数据集 ID（dataset 表），仅 separate 生效；与 Catalog 二选一</p>
 * @method string getEvalDatasetName() 获取<p>验证数据集名称（dataset 表 name 字段，与 EvalDatasetId 配对）</p>
 * @method void setEvalDatasetName(string $EvalDatasetName) 设置<p>验证数据集名称（dataset 表 name 字段，与 EvalDatasetId 配对）</p>
 * @method string getCatalog() 获取<p>原始 Catalog 卷定义 JSON（仅 separate 生效，无数据集 ID 时使用，直接并入顶层 Catalog；与 EvalDatasetId 二选一）</p>
 * @method void setCatalog(string $Catalog) 设置<p>原始 Catalog 卷定义 JSON（仅 separate 生效，无数据集 ID 时使用，直接并入顶层 Catalog；与 EvalDatasetId 二选一）</p>
 * @method string getFileName() 获取<p>验证用单文件名（可选，JSONL/parquet 文件名，位于挂载目录下；仅基于单个文件验证时指定）</p>
 * @method void setFileName(string $FileName) 设置<p>验证用单文件名（可选，JSONL/parquet 文件名，位于挂载目录下；仅基于单个文件验证时指定）</p>
 */
class EvalDatasetConfig extends AbstractModel
{
    /**
     * @var string <p>验证集模式：none / split / separate</p>
     */
    public $EvalMode;

    /**
     * @var float <p>自动拆分比例（1-20，即 1%-20%），仅 split 生效</p>
     */
    public $EvalSplitRatio;

    /**
     * @var string <p>独立验证数据集 ID（dataset 表），仅 separate 生效；与 Catalog 二选一</p>
     */
    public $EvalDatasetId;

    /**
     * @var string <p>验证数据集名称（dataset 表 name 字段，与 EvalDatasetId 配对）</p>
     */
    public $EvalDatasetName;

    /**
     * @var string <p>原始 Catalog 卷定义 JSON（仅 separate 生效，无数据集 ID 时使用，直接并入顶层 Catalog；与 EvalDatasetId 二选一）</p>
     */
    public $Catalog;

    /**
     * @var string <p>验证用单文件名（可选，JSONL/parquet 文件名，位于挂载目录下；仅基于单个文件验证时指定）</p>
     */
    public $FileName;

    /**
     * @param string $EvalMode <p>验证集模式：none / split / separate</p>
     * @param float $EvalSplitRatio <p>自动拆分比例（1-20，即 1%-20%），仅 split 生效</p>
     * @param string $EvalDatasetId <p>独立验证数据集 ID（dataset 表），仅 separate 生效；与 Catalog 二选一</p>
     * @param string $EvalDatasetName <p>验证数据集名称（dataset 表 name 字段，与 EvalDatasetId 配对）</p>
     * @param string $Catalog <p>原始 Catalog 卷定义 JSON（仅 separate 生效，无数据集 ID 时使用，直接并入顶层 Catalog；与 EvalDatasetId 二选一）</p>
     * @param string $FileName <p>验证用单文件名（可选，JSONL/parquet 文件名，位于挂载目录下；仅基于单个文件验证时指定）</p>
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
        if (array_key_exists("EvalMode",$param) and $param["EvalMode"] !== null) {
            $this->EvalMode = $param["EvalMode"];
        }

        if (array_key_exists("EvalSplitRatio",$param) and $param["EvalSplitRatio"] !== null) {
            $this->EvalSplitRatio = $param["EvalSplitRatio"];
        }

        if (array_key_exists("EvalDatasetId",$param) and $param["EvalDatasetId"] !== null) {
            $this->EvalDatasetId = $param["EvalDatasetId"];
        }

        if (array_key_exists("EvalDatasetName",$param) and $param["EvalDatasetName"] !== null) {
            $this->EvalDatasetName = $param["EvalDatasetName"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
