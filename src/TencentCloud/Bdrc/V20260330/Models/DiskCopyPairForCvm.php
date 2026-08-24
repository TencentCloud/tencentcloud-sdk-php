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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cvm的盘复制对信息
 *
 * @method string getCopyPairId() 获取云硬盘复制对ID
 * @method void setCopyPairId(string $CopyPairId) 设置云硬盘复制对ID
 * @method string getCopyPairName() 获取云硬盘复制对名称
 * @method void setCopyPairName(string $CopyPairName) 设置云硬盘复制对名称
 * @method string getSourceResourceId() 获取生产端云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceResourceId(string $SourceResourceId) 设置生产端云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetResourceId() 获取容灾端云硬盘ID（延迟创建模式且 CVM 未真实创建时被脱敏为空字符串）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetResourceId(string $TargetResourceId) 设置容灾端云硬盘ID（延迟创建模式且 CVM 未真实创建时被脱敏为空字符串）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class DiskCopyPairForCvm extends AbstractModel
{
    /**
     * @var string 云硬盘复制对ID
     */
    public $CopyPairId;

    /**
     * @var string 云硬盘复制对名称
     */
    public $CopyPairName;

    /**
     * @var string 生产端云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceResourceId;

    /**
     * @var string 容灾端云硬盘ID（延迟创建模式且 CVM 未真实创建时被脱敏为空字符串）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetResourceId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param string $CopyPairId 云硬盘复制对ID
     * @param string $CopyPairName 云硬盘复制对名称
     * @param string $SourceResourceId 生产端云硬盘ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetResourceId 容灾端云硬盘ID（延迟创建模式且 CVM 未真实创建时被脱敏为空字符串）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("CopyPairId",$param) and $param["CopyPairId"] !== null) {
            $this->CopyPairId = $param["CopyPairId"];
        }

        if (array_key_exists("CopyPairName",$param) and $param["CopyPairName"] !== null) {
            $this->CopyPairName = $param["CopyPairName"];
        }

        if (array_key_exists("SourceResourceId",$param) and $param["SourceResourceId"] !== null) {
            $this->SourceResourceId = $param["SourceResourceId"];
        }

        if (array_key_exists("TargetResourceId",$param) and $param["TargetResourceId"] !== null) {
            $this->TargetResourceId = $param["TargetResourceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
