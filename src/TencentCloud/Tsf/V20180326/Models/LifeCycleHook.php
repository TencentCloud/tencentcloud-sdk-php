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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * LifeCycleHook
 *
 * @method string getHookType() 获取生命周期函数类型：PostStart|PreStop
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHookType(string $HookType) 设置生命周期函数类型：PostStart|PreStop
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecMode() 获取函数执行方式：execCommand|httpGet|none
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecMode(string $ExecMode) 设置函数执行方式：execCommand|httpGet|none
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecCommandContent() 获取execCommand函数执行内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecCommandContent(string $ExecCommandContent) 设置execCommand函数执行内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method HttpGetOption getHttpGetOption() 获取HttpGet执行内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpGetOption(HttpGetOption $HttpGetOption) 设置HttpGet执行内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class LifeCycleHook extends AbstractModel
{
    /**
     * @var string 生命周期函数类型：PostStart|PreStop
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HookType;

    /**
     * @var string 函数执行方式：execCommand|httpGet|none
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecMode;

    /**
     * @var string execCommand函数执行内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecCommandContent;

    /**
     * @var HttpGetOption HttpGet执行内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpGetOption;

    /**
     * @param string $HookType 生命周期函数类型：PostStart|PreStop
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecMode 函数执行方式：execCommand|httpGet|none
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecCommandContent execCommand函数执行内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param HttpGetOption $HttpGetOption HttpGet执行内容
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
        if (array_key_exists("HookType",$param) and $param["HookType"] !== null) {
            $this->HookType = $param["HookType"];
        }

        if (array_key_exists("ExecMode",$param) and $param["ExecMode"] !== null) {
            $this->ExecMode = $param["ExecMode"];
        }

        if (array_key_exists("ExecCommandContent",$param) and $param["ExecCommandContent"] !== null) {
            $this->ExecCommandContent = $param["ExecCommandContent"];
        }

        if (array_key_exists("HttpGetOption",$param) and $param["HttpGetOption"] !== null) {
            $this->HttpGetOption = new HttpGetOption();
            $this->HttpGetOption->deserialize($param["HttpGetOption"]);
        }
    }
}
