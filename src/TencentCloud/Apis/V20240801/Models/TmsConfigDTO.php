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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容安全配置
 *
 * @method array getScope() 获取<p>检测范围,请求/响应</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(array $Scope) 设置<p>检测范围,请求/响应</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取<p>检测形式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置<p>检测形式</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取<p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置<p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMergeCount() 获取<p>合并请求检测event数，联动Mode字段sync</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMergeCount(integer $MergeCount) 设置<p>合并请求检测event数，联动Mode字段sync</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取<p>风控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置<p>风控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInterceptMessage() 获取<p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterceptMessage(string $InterceptMessage) 设置<p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContextScope() 获取<p>检测上下文</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContextScope(string $ContextScope) 设置<p>检测上下文</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TmsConfigDTO extends AbstractModel
{
    /**
     * @var array <p>检测范围,请求/响应</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @var string <p>检测形式</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var string <p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var integer <p>合并请求检测event数，联动Mode字段sync</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MergeCount;

    /**
     * @var string <p>风控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var string <p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterceptMessage;

    /**
     * @var string <p>检测上下文</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContextScope;

    /**
     * @param array $Scope <p>检测范围,请求/响应</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode <p>检测形式</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action <p>执行动作</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MergeCount <p>合并请求检测event数，联动Mode字段sync</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType <p>风控策略</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InterceptMessage <p>响应拦截内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ContextScope <p>检测上下文</p>
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("MergeCount",$param) and $param["MergeCount"] !== null) {
            $this->MergeCount = $param["MergeCount"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("InterceptMessage",$param) and $param["InterceptMessage"] !== null) {
            $this->InterceptMessage = $param["InterceptMessage"];
        }

        if (array_key_exists("ContextScope",$param) and $param["ContextScope"] !== null) {
            $this->ContextScope = $param["ContextScope"];
        }
    }
}
