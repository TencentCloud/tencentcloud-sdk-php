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
namespace TencentCloud\Faceid\V20180301\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 额外的详细信息
 *
 * @method array getRetrievalLivenessExtraInfo() 获取命中模板的详细信息，仅返回命中的相似度最高的模板信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetrievalLivenessExtraInfo(array $RetrievalLivenessExtraInfo) 设置命中模板的详细信息，仅返回命中的相似度最高的模板信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtraInfo extends AbstractModel
{
    /**
     * @var array 命中模板的详细信息，仅返回命中的相似度最高的模板信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetrievalLivenessExtraInfo;

    /**
     * @param array $RetrievalLivenessExtraInfo 命中模板的详细信息，仅返回命中的相似度最高的模板信息
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
        if (array_key_exists("RetrievalLivenessExtraInfo",$param) and $param["RetrievalLivenessExtraInfo"] !== null) {
            $this->RetrievalLivenessExtraInfo = [];
            foreach ($param["RetrievalLivenessExtraInfo"] as $key => $value){
                $obj = new RetrievalLivenessExtraInfo();
                $obj->deserialize($value);
                array_push($this->RetrievalLivenessExtraInfo, $obj);
            }
        }
    }
}
