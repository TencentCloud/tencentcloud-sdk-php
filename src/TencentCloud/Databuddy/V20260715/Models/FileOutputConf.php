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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Notebook/Python单元格输出配置
 *
 * @method string getCellId() 获取单元格 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCellId(string $CellId) 设置单元格 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDashboardConf() 获取Dashboard 图表配置，JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDashboardConf(string $DashboardConf) 设置Dashboard 图表配置，JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputPath() 获取执行结果文件的预签名下载链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputPath(string $OutputPath) 设置执行结果文件的预签名下载链接
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileOutputConf extends AbstractModel
{
    /**
     * @var string 单元格 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CellId;

    /**
     * @var string Dashboard 图表配置，JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DashboardConf;

    /**
     * @var string 执行结果文件的预签名下载链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputPath;

    /**
     * @param string $CellId 单元格 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DashboardConf Dashboard 图表配置，JSON 字符串
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputPath 执行结果文件的预签名下载链接
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
        if (array_key_exists("CellId",$param) and $param["CellId"] !== null) {
            $this->CellId = $param["CellId"];
        }

        if (array_key_exists("DashboardConf",$param) and $param["DashboardConf"] !== null) {
            $this->DashboardConf = $param["DashboardConf"];
        }

        if (array_key_exists("OutputPath",$param) and $param["OutputPath"] !== null) {
            $this->OutputPath = $param["OutputPath"];
        }
    }
}
