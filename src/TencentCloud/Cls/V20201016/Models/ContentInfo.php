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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递日志的内容格式配置
 *
 * @method string getFormat() 获取内容格式，支持json、csv
 * @method void setFormat(string $Format) 设置内容格式，支持json、csv
 * @method CsvInfo getCsv() 获取csv格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCsv(CsvInfo $Csv) 设置csv格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method JsonInfo getJson() 获取json格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJson(JsonInfo $Json) 设置json格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method ParquetInfo getParquet() 获取parquet格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParquet(ParquetInfo $Parquet) 设置parquet格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
 */
class ContentInfo extends AbstractModel
{
    /**
     * @var string 内容格式，支持json、csv
     */
    public $Format;

    /**
     * @var CsvInfo csv格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Csv;

    /**
     * @var JsonInfo json格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Json;

    /**
     * @var ParquetInfo parquet格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Parquet;

    /**
     * @param string $Format 内容格式，支持json、csv
     * @param CsvInfo $Csv csv格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param JsonInfo $Json json格式内容描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param ParquetInfo $Parquet parquet格式内容描述
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
        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("Csv",$param) and $param["Csv"] !== null) {
            $this->Csv = new CsvInfo();
            $this->Csv->deserialize($param["Csv"]);
        }

        if (array_key_exists("Json",$param) and $param["Json"] !== null) {
            $this->Json = new JsonInfo();
            $this->Json->deserialize($param["Json"]);
        }

        if (array_key_exists("Parquet",$param) and $param["Parquet"] !== null) {
            $this->Parquet = new ParquetInfo();
            $this->Parquet->deserialize($param["Parquet"]);
        }
    }
}
