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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 模型信息
 *
 * @method string getGroupName() 获取<p>模型分组</p><p>枚举值：</p><ul><li>hunyuan-exp： 内置 hunyuan 分组，Models 中包含混元生文模型</li><li>hunyuan-image： 内置 hunyuan 分组，Models 中包含混元生图模型</li><li>deepseek： 内置 deepseek 分组，Models 中包含Deepseek生文模型</li><li>cloudbase： 内置 cloudbase 分组，Models 中包含云开发提供的模型，支持的所有模型可从 DescribeManagedAIModelList 获取</li><li>custom-xxxx： 自定义模型分组，Models 中包含用户自行配置的模型</li></ul>
 * @method void setGroupName(string $GroupName) 设置<p>模型分组</p><p>枚举值：</p><ul><li>hunyuan-exp： 内置 hunyuan 分组，Models 中包含混元生文模型</li><li>hunyuan-image： 内置 hunyuan 分组，Models 中包含混元生图模型</li><li>deepseek： 内置 deepseek 分组，Models 中包含Deepseek生文模型</li><li>cloudbase： 内置 cloudbase 分组，Models 中包含云开发提供的模型，支持的所有模型可从 DescribeManagedAIModelList 获取</li><li>custom-xxxx： 自定义模型分组，Models 中包含用户自行配置的模型</li></ul>
 * @method array getModels() 获取<p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModels(array $Models) 设置<p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取<p>模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型分组类别</li><li>custom： 用户自定义模型分组类别</li></ul>
 * @method void setType(string $Type) 设置<p>模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型分组类别</li><li>custom： 用户自定义模型分组类别</li></ul>
 * @method string getOriginType() 获取<p>原始模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型类型</li><li>custom： 用户自定义模型类型</li></ul>
 * @method void setOriginType(string $OriginType) 设置<p>原始模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型类型</li><li>custom： 用户自定义模型类型</li></ul>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getBaseUrl() 获取<p>模型地址</p>
 * @method void setBaseUrl(string $BaseUrl) 设置<p>模型地址</p>
 * @method integer getStatus() 获取<p>模型状态, 1: 开启, 2: 关闭</p>
 * @method void setStatus(integer $Status) 设置<p>模型状态, 1: 开启, 2: 关闭</p>
 * @method AIModelSecret getSecret() 获取<p>模型密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecret(AIModelSecret $Secret) 设置<p>模型密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getUpdateTime() 获取<p>更新时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
 */
class AIModelGroup extends AbstractModel
{
    /**
     * @var string <p>模型分组</p><p>枚举值：</p><ul><li>hunyuan-exp： 内置 hunyuan 分组，Models 中包含混元生文模型</li><li>hunyuan-image： 内置 hunyuan 分组，Models 中包含混元生图模型</li><li>deepseek： 内置 deepseek 分组，Models 中包含Deepseek生文模型</li><li>cloudbase： 内置 cloudbase 分组，Models 中包含云开发提供的模型，支持的所有模型可从 DescribeManagedAIModelList 获取</li><li>custom-xxxx： 自定义模型分组，Models 中包含用户自行配置的模型</li></ul>
     */
    public $GroupName;

    /**
     * @var array <p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Models;

    /**
     * @var string <p>模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型分组类别</li><li>custom： 用户自定义模型分组类别</li></ul>
     */
    public $Type;

    /**
     * @var string <p>原始模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型类型</li><li>custom： 用户自定义模型类型</li></ul>
     */
    public $OriginType;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>模型地址</p>
     */
    public $BaseUrl;

    /**
     * @var integer <p>模型状态, 1: 开启, 2: 关闭</p>
     */
    public $Status;

    /**
     * @var AIModelSecret <p>模型密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Secret;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdateTime;

    /**
     * @param string $GroupName <p>模型分组</p><p>枚举值：</p><ul><li>hunyuan-exp： 内置 hunyuan 分组，Models 中包含混元生文模型</li><li>hunyuan-image： 内置 hunyuan 分组，Models 中包含混元生图模型</li><li>deepseek： 内置 deepseek 分组，Models 中包含Deepseek生文模型</li><li>cloudbase： 内置 cloudbase 分组，Models 中包含云开发提供的模型，支持的所有模型可从 DescribeManagedAIModelList 获取</li><li>custom-xxxx： 自定义模型分组，Models 中包含用户自行配置的模型</li></ul>
     * @param array $Models <p>模型列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type <p>模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型分组类别</li><li>custom： 用户自定义模型分组类别</li></ul>
     * @param string $OriginType <p>原始模型类型</p><p>枚举值：</p><ul><li>builtin： 内置模型类型</li><li>custom： 用户自定义模型类型</li></ul>
     * @param string $Remark <p>备注</p>
     * @param string $BaseUrl <p>模型地址</p>
     * @param integer $Status <p>模型状态, 1: 开启, 2: 关闭</p>
     * @param AIModelSecret $Secret <p>模型密钥</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $UpdateTime <p>更新时间</p>
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Models",$param) and $param["Models"] !== null) {
            $this->Models = [];
            foreach ($param["Models"] as $key => $value){
                $obj = new AIModel();
                $obj->deserialize($value);
                array_push($this->Models, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("BaseUrl",$param) and $param["BaseUrl"] !== null) {
            $this->BaseUrl = $param["BaseUrl"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = new AIModelSecret();
            $this->Secret->deserialize($param["Secret"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
