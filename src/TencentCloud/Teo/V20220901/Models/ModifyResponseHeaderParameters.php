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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改 HTTP 节点响应头配置参数。
 *
 * @method array getHeaderActions() 获取HTTP 回源头部规则列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaderActions(array $HeaderActions) 设置HTTP 回源头部规则列表。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModifyResponseHeaderParameters extends AbstractModel
{
    /**
     * @var array HTTP 回源头部规则列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HeaderActions;

    /**
     * @param array $HeaderActions HTTP 回源头部规则列表。
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
        if (array_key_exists("HeaderActions",$param) and $param["HeaderActions"] !== null) {
            $this->HeaderActions = [];
            foreach ($param["HeaderActions"] as $key => $value){
                $obj = new HeaderAction();
                $obj->deserialize($value);
                array_push($this->HeaderActions, $obj);
            }
        }
    }
}
