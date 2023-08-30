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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签信息
 *
 * @method string getTagKey() 获取分账标签键
 * @method void setTagKey(string $TagKey) 设置分账标签键
 * @method integer getStatus() 获取标签类型，0普通标签，1分账标签
 * @method void setStatus(integer $Status) 设置标签类型，0普通标签，1分账标签
 * @method string getUpdateTime() 获取设置分账标签时间，普通标签不返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置设置分账标签时间，普通标签不返回
注意：此字段可能返回 null，表示取不到有效值。
 */
class TagDataInfo extends AbstractModel
{
    /**
     * @var string 分账标签键
     */
    public $TagKey;

    /**
     * @var integer 标签类型，0普通标签，1分账标签
     */
    public $Status;

    /**
     * @var string 设置分账标签时间，普通标签不返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @param string $TagKey 分账标签键
     * @param integer $Status 标签类型，0普通标签，1分账标签
     * @param string $UpdateTime 设置分账标签时间，普通标签不返回
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
        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
