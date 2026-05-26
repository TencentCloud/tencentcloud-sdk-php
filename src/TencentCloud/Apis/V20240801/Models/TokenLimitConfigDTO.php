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
 * Token限流配置
 *
 * @method string getType() 获取<p>限流类型</p><p>枚举值：</p><ul><li>minute： 时间窗口</li><li>day： 自然日</li><li>month： 自然月</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>限流类型</p><p>枚举值：</p><ul><li>minute： 时间窗口</li><li>day： 自然日</li><li>month： 自然月</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimitRequestBody() 获取<p>单次请求上限，k</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitRequestBody(integer $LimitRequestBody) 设置<p>单次请求上限，k</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLimitWindows() 获取<p>累次token总量消耗上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimitWindows(array $LimitWindows) 设置<p>累次token总量消耗上限</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TokenLimitConfigDTO extends AbstractModel
{
    /**
     * @var string <p>限流类型</p><p>枚举值：</p><ul><li>minute： 时间窗口</li><li>day： 自然日</li><li>month： 自然月</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer <p>单次请求上限，k</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitRequestBody;

    /**
     * @var array <p>累次token总量消耗上限</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LimitWindows;

    /**
     * @param string $Type <p>限流类型</p><p>枚举值：</p><ul><li>minute： 时间窗口</li><li>day： 自然日</li><li>month： 自然月</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LimitRequestBody <p>单次请求上限，k</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LimitWindows <p>累次token总量消耗上限</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LimitRequestBody",$param) and $param["LimitRequestBody"] !== null) {
            $this->LimitRequestBody = $param["LimitRequestBody"];
        }

        if (array_key_exists("LimitWindows",$param) and $param["LimitWindows"] !== null) {
            $this->LimitWindows = [];
            foreach ($param["LimitWindows"] as $key => $value){
                $obj = new LimitWindowsDTO();
                $obj->deserialize($value);
                array_push($this->LimitWindows, $obj);
            }
        }
    }
}
