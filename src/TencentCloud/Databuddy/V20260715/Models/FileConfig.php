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
 * 文件运行配置
 *
 * @method string getParams() 获取<p>高级运行参数，变量替换用，map-json String,String</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParams(string $Params) 设置<p>高级运行参数，变量替换用，map-json String,String</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取<p>执行资源 ID。来源：ListComputeResources 接口返回的 ResourceId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置<p>执行资源 ID。来源：ListComputeResources 接口返回的 ResourceId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultCatalog() 获取<p>默认 catalog</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultCatalog(string $DefaultCatalog) 设置<p>默认 catalog</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultSchema() 获取<p>默认 schema</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultSchema(string $DefaultSchema) 设置<p>默认 schema</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAdvanceConfig() 获取<p>高级配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvanceConfig(string $AdvanceConfig) 设置<p>高级配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraParams() 获取<p>扩展参数，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraParams(string $ExtraParams) 设置<p>扩展参数，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWidgets() 获取<p>Notebook 交互控件定义，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWidgets(string $Widgets) 设置<p>Notebook 交互控件定义，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOutputConf() 获取<p>各单元格输出配置。仅 Get 出参返回，入参忽略</p>
 * @method void setOutputConf(array $OutputConf) 设置<p>各单元格输出配置。仅 Get 出参返回，入参忽略</p>
 * @method string getSqlSyntax() 获取<p>SQL脚本语法标记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlSyntax(string $SqlSyntax) 设置<p>SQL脚本语法标记</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClusterId() 获取<p>平台集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterId(string $ClusterId) 设置<p>平台集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileConfig extends AbstractModel
{
    /**
     * @var string <p>高级运行参数，变量替换用，map-json String,String</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Params;

    /**
     * @var string <p>执行资源 ID。来源：ListComputeResources 接口返回的 ResourceId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var string <p>默认 catalog</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultCatalog;

    /**
     * @var string <p>默认 schema</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultSchema;

    /**
     * @var string <p>高级配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvanceConfig;

    /**
     * @var string <p>扩展参数，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraParams;

    /**
     * @var string <p>Notebook 交互控件定义，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Widgets;

    /**
     * @var array <p>各单元格输出配置。仅 Get 出参返回，入参忽略</p>
     */
    public $OutputConf;

    /**
     * @var string <p>SQL脚本语法标记</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlSyntax;

    /**
     * @var string <p>平台集群id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterId;

    /**
     * @param string $Params <p>高级运行参数，变量替换用，map-json String,String</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId <p>执行资源 ID。来源：ListComputeResources 接口返回的 ResourceId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultCatalog <p>默认 catalog</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultSchema <p>默认 schema</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AdvanceConfig <p>高级配置，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraParams <p>扩展参数，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Widgets <p>Notebook 交互控件定义，JSON 字符串</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OutputConf <p>各单元格输出配置。仅 Get 出参返回，入参忽略</p>
     * @param string $SqlSyntax <p>SQL脚本语法标记</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ClusterId <p>平台集群id</p>
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

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DefaultCatalog",$param) and $param["DefaultCatalog"] !== null) {
            $this->DefaultCatalog = $param["DefaultCatalog"];
        }

        if (array_key_exists("DefaultSchema",$param) and $param["DefaultSchema"] !== null) {
            $this->DefaultSchema = $param["DefaultSchema"];
        }

        if (array_key_exists("AdvanceConfig",$param) and $param["AdvanceConfig"] !== null) {
            $this->AdvanceConfig = $param["AdvanceConfig"];
        }

        if (array_key_exists("ExtraParams",$param) and $param["ExtraParams"] !== null) {
            $this->ExtraParams = $param["ExtraParams"];
        }

        if (array_key_exists("Widgets",$param) and $param["Widgets"] !== null) {
            $this->Widgets = $param["Widgets"];
        }

        if (array_key_exists("OutputConf",$param) and $param["OutputConf"] !== null) {
            $this->OutputConf = [];
            foreach ($param["OutputConf"] as $key => $value){
                $obj = new FileOutputConf();
                $obj->deserialize($value);
                array_push($this->OutputConf, $obj);
            }
        }

        if (array_key_exists("SqlSyntax",$param) and $param["SqlSyntax"] !== null) {
            $this->SqlSyntax = $param["SqlSyntax"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
