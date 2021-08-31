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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 漏洞top统计实体
 *
 * @method string getVulName() 获取漏洞 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulName(string $VulName) 设置漏洞 名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulLevel() 获取危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulLevel(integer $VulLevel) 设置危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulCount() 获取漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulCount(integer $VulCount) 设置漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVulId() 获取漏洞id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVulId(integer $VulId) 设置漏洞id
注意：此字段可能返回 null，表示取不到有效值。
 */
class VulTopInfo extends AbstractModel
{
    /**
     * @var string 漏洞 名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulName;

    /**
     * @var integer 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulLevel;

    /**
     * @var integer 漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulCount;

    /**
     * @var integer 漏洞id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VulId;

    /**
     * @param string $VulName 漏洞 名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulLevel 危害等级：1-低危；2-中危；3-高危；4-严重
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulCount 漏洞数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VulId 漏洞id
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
        if (array_key_exists("VulName",$param) and $param["VulName"] !== null) {
            $this->VulName = $param["VulName"];
        }

        if (array_key_exists("VulLevel",$param) and $param["VulLevel"] !== null) {
            $this->VulLevel = $param["VulLevel"];
        }

        if (array_key_exists("VulCount",$param) and $param["VulCount"] !== null) {
            $this->VulCount = $param["VulCount"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }
    }
}
