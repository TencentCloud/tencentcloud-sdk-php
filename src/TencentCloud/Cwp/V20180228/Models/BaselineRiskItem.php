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
 * 基线检测项top5
 *
 * @method integer getItemId() 获取检测项Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemId(integer $ItemId) 设置检测项Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemName() 获取检测项名字
 * @method void setItemName(string $ItemName) 设置检测项名字
 * @method integer getLevel() 获取风险等级
 * @method void setLevel(integer $Level) 设置风险等级
 * @method integer getHostCount() 获取影响服务器数
 * @method void setHostCount(integer $HostCount) 设置影响服务器数
 */
class BaselineRiskItem extends AbstractModel
{
    /**
     * @var integer 检测项Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemId;

    /**
     * @var string 检测项名字
     */
    public $ItemName;

    /**
     * @var integer 风险等级
     */
    public $Level;

    /**
     * @var integer 影响服务器数
     */
    public $HostCount;

    /**
     * @param integer $ItemId 检测项Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemName 检测项名字
     * @param integer $Level 风险等级
     * @param integer $HostCount 影响服务器数
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemName",$param) and $param["ItemName"] !== null) {
            $this->ItemName = $param["ItemName"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }
    }
}
