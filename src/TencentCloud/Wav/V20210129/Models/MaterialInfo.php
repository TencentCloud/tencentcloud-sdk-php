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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 素材信息响应体
 *
 * @method integer getMaterialId() 获取素材id
 * @method void setMaterialId(integer $MaterialId) 设置素材id
 * @method string getMaterialName() 获取素材名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaterialName(string $MaterialName) 设置素材名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取素材状态, -1: 删除 0: 启用 1: 禁用
 * @method void setStatus(integer $Status) 设置素材状态, -1: 删除 0: 启用 1: 禁用
 */
class MaterialInfo extends AbstractModel
{
    /**
     * @var integer 素材id
     */
    public $MaterialId;

    /**
     * @var string 素材名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaterialName;

    /**
     * @var integer 素材状态, -1: 删除 0: 启用 1: 禁用
     */
    public $Status;

    /**
     * @param integer $MaterialId 素材id
     * @param string $MaterialName 素材名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 素材状态, -1: 删除 0: 启用 1: 禁用
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
        if (array_key_exists("MaterialId",$param) and $param["MaterialId"] !== null) {
            $this->MaterialId = $param["MaterialId"];
        }

        if (array_key_exists("MaterialName",$param) and $param["MaterialName"] !== null) {
            $this->MaterialName = $param["MaterialName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
