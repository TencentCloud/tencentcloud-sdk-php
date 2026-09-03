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
 * 数据文件名（可选），JSONL/parquet 文件名，位于挂载目录下；后训练场景等价于旧 Dataset 字段。数据集 COS 路径指向具体文件时后端自动提取文件名，无需填写
 *
 * @method string getDatasetId() 获取<p>数据集ID</p>
 * @method void setDatasetId(string $DatasetId) 设置<p>数据集ID</p>
 * @method string getDatasetName() 获取<p>数据集名称</p>
 * @method void setDatasetName(string $DatasetName) 设置<p>数据集名称</p>
 * @method string getCatalog() 获取<p>挂载信息</p>
 * @method void setCatalog(string $Catalog) 设置<p>挂载信息</p>
 * @method EvalDatasetConfig getEval() 获取<p>验证集信息</p>
 * @method void setEval(EvalDatasetConfig $Eval) 设置<p>验证集信息</p>
 * @method string getFileName() 获取<p>数据集为单个文件时，若需挂载单个文件，需提供文件名</p>
 * @method void setFileName(string $FileName) 设置<p>数据集为单个文件时，若需挂载单个文件，需提供文件名</p>
 */
class DatasetMount extends AbstractModel
{
    /**
     * @var string <p>数据集ID</p>
     */
    public $DatasetId;

    /**
     * @var string <p>数据集名称</p>
     */
    public $DatasetName;

    /**
     * @var string <p>挂载信息</p>
     */
    public $Catalog;

    /**
     * @var EvalDatasetConfig <p>验证集信息</p>
     */
    public $Eval;

    /**
     * @var string <p>数据集为单个文件时，若需挂载单个文件，需提供文件名</p>
     */
    public $FileName;

    /**
     * @param string $DatasetId <p>数据集ID</p>
     * @param string $DatasetName <p>数据集名称</p>
     * @param string $Catalog <p>挂载信息</p>
     * @param EvalDatasetConfig $Eval <p>验证集信息</p>
     * @param string $FileName <p>数据集为单个文件时，若需挂载单个文件，需提供文件名</p>
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
        if (array_key_exists("DatasetId",$param) and $param["DatasetId"] !== null) {
            $this->DatasetId = $param["DatasetId"];
        }

        if (array_key_exists("DatasetName",$param) and $param["DatasetName"] !== null) {
            $this->DatasetName = $param["DatasetName"];
        }

        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Eval",$param) and $param["Eval"] !== null) {
            $this->Eval = new EvalDatasetConfig();
            $this->Eval->deserialize($param["Eval"]);
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }
    }
}
