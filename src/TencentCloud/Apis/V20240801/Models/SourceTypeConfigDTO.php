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
 * SourceTypeConfigDTO
 *
 * @method string getReqSourceType() 获取json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReqSourceType(string $ReqSourceType) 设置json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReqTargetType() 获取json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReqTargetType(string $ReqTargetType) 设置json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResSourceType() 获取json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResSourceType(string $ResSourceType) 设置json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResTargetType() 获取json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResTargetType(string $ResTargetType) 设置json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
 */
class SourceTypeConfigDTO extends AbstractModel
{
    /**
     * @var string json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReqSourceType;

    /**
     * @var string json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReqTargetType;

    /**
     * @var string json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResSourceType;

    /**
     * @var string json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResTargetType;

    /**
     * @param string $ReqSourceType json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReqTargetType json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResSourceType json xml urlencoded amf0 amf3 hessian1 hessian2

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResTargetType json xml urlencoded amf0 amf3 hessian1 hessian2

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
        if (array_key_exists("ReqSourceType",$param) and $param["ReqSourceType"] !== null) {
            $this->ReqSourceType = $param["ReqSourceType"];
        }

        if (array_key_exists("ReqTargetType",$param) and $param["ReqTargetType"] !== null) {
            $this->ReqTargetType = $param["ReqTargetType"];
        }

        if (array_key_exists("ResSourceType",$param) and $param["ResSourceType"] !== null) {
            $this->ResSourceType = $param["ResSourceType"];
        }

        if (array_key_exists("ResTargetType",$param) and $param["ResTargetType"] !== null) {
            $this->ResTargetType = $param["ResTargetType"];
        }
    }
}
