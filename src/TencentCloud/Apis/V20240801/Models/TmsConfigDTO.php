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
 * @method array getScope() 获取检测范围,请求/响应
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScope(array $Scope) 设置检测范围,请求/响应
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMode() 获取检测形式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置检测形式
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取执行动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAction(string $Action) 设置执行动作
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMergeCount() 获取合并请求检测event数，联动Mode字段sync
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMergeCount(integer $MergeCount) 设置合并请求检测event数，联动Mode字段sync
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBizType() 获取风控策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBizType(string $BizType) 设置风控策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInterceptMessage() 获取响应拦截内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterceptMessage(string $InterceptMessage) 设置响应拦截内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class TmsConfigDTO extends AbstractModel
{
    /**
     * @var array 检测范围,请求/响应
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Scope;

    /**
     * @var string 检测形式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var string 执行动作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Action;

    /**
     * @var integer 合并请求检测event数，联动Mode字段sync
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MergeCount;

    /**
     * @var string 风控策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BizType;

    /**
     * @var string 响应拦截内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InterceptMessage;

    /**
     * @param array $Scope 检测范围,请求/响应
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mode 检测形式
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 执行动作
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MergeCount 合并请求检测event数，联动Mode字段sync
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BizType 风控策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InterceptMessage 响应拦截内容
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
    }
}
