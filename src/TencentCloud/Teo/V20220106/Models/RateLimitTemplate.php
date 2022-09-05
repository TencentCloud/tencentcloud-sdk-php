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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 速率限制模板
 *
 * @method string getMode() 获取模板等级名称。
1. sup_loose 自适应 - 超级宽松
2. loose     自适应 - 宽松
3. emergency 自适应 - 紧急
4. normal    自适应 - 适中
5. strict    固定阈值 - 严格
6. close     关闭 - 仅精准速率限制生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMode(string $Mode) 设置模板等级名称。
1. sup_loose 自适应 - 超级宽松
2. loose     自适应 - 宽松
3. emergency 自适应 - 紧急
4. normal    自适应 - 适中
5. strict    固定阈值 - 严格
6. close     关闭 - 仅精准速率限制生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method RateLimitTemplateDetail getDetail() 获取模板值详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(RateLimitTemplateDetail $Detail) 设置模板值详情。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RateLimitTemplate extends AbstractModel
{
    /**
     * @var string 模板等级名称。
1. sup_loose 自适应 - 超级宽松
2. loose     自适应 - 宽松
3. emergency 自适应 - 紧急
4. normal    自适应 - 适中
5. strict    固定阈值 - 严格
6. close     关闭 - 仅精准速率限制生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mode;

    /**
     * @var RateLimitTemplateDetail 模板值详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @param string $Mode 模板等级名称。
1. sup_loose 自适应 - 超级宽松
2. loose     自适应 - 宽松
3. emergency 自适应 - 紧急
4. normal    自适应 - 适中
5. strict    固定阈值 - 严格
6. close     关闭 - 仅精准速率限制生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param RateLimitTemplateDetail $Detail 模板值详情。
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
        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new RateLimitTemplateDetail();
            $this->Detail->deserialize($param["Detail"]);
        }
    }
}
