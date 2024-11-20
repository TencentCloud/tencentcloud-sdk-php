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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台简略信息
 *
 * @method integer getCasterId() 获取导播台ID
 * @method void setCasterId(integer $CasterId) 设置导播台ID
 * @method string getCasterName() 获取导播台名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCasterName(string $CasterName) 设置导播台名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取导播台的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置导播台的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStartBillingTime() 获取开始计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartBillingTime(integer $StartBillingTime) 设置开始计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStopBillingTime() 获取结束计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStopBillingTime(integer $StopBillingTime) 设置结束计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateTime() 获取创建时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取导播台状态
0：停止状态，无预监，无输出
1：无预监，有输出状态（非法状态）
2：有预监，无输出状态
3：有预监，有输出状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置导播台状态
0：停止状态，无预监，无输出
1：无预监，有输出状态（非法状态）
2：有预监，无输出状态
3：有预监，有输出状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpireTime() 获取导播台的过期时间，值为-1或unix时间戳。
当值为-1时，代表永不过期。
当值为特定unix时间戳时，代表过期时间为对应的时间，导播台在该时间自动停止。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(integer $ExpireTime) 设置导播台的过期时间，值为-1或unix时间戳。
当值为-1时，代表永不过期。
当值为特定unix时间戳时，代表过期时间为对应的时间，导播台在该时间自动停止。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFeeType() 获取计费字段，该字段暂无作用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeeType(integer $FeeType) 设置计费字段，该字段暂无作用
注意：此字段可能返回 null，表示取不到有效值。
 */
class CasterBriefInfo extends AbstractModel
{
    /**
     * @var integer 导播台ID
     */
    public $CasterId;

    /**
     * @var string 导播台名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CasterName;

    /**
     * @var string 导播台的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 开始计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartBillingTime;

    /**
     * @var integer 结束计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StopBillingTime;

    /**
     * @var integer 创建时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var integer 导播台状态
0：停止状态，无预监，无输出
1：无预监，有输出状态（非法状态）
2：有预监，无输出状态
3：有预监，有输出状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 导播台的过期时间，值为-1或unix时间戳。
当值为-1时，代表永不过期。
当值为特定unix时间戳时，代表过期时间为对应的时间，导播台在该时间自动停止。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var integer 计费字段，该字段暂无作用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeeType;

    /**
     * @param integer $CasterId 导播台ID
     * @param string $CasterName 导播台名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 导播台的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StartBillingTime 开始计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StopBillingTime 结束计费时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateTime 创建时间，值为unix时间戳
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 导播台状态
0：停止状态，无预监，无输出
1：无预监，有输出状态（非法状态）
2：有预监，无输出状态
3：有预监，有输出状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExpireTime 导播台的过期时间，值为-1或unix时间戳。
当值为-1时，代表永不过期。
当值为特定unix时间戳时，代表过期时间为对应的时间，导播台在该时间自动停止。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FeeType 计费字段，该字段暂无作用
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
        if (array_key_exists("CasterId",$param) and $param["CasterId"] !== null) {
            $this->CasterId = $param["CasterId"];
        }

        if (array_key_exists("CasterName",$param) and $param["CasterName"] !== null) {
            $this->CasterName = $param["CasterName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("StartBillingTime",$param) and $param["StartBillingTime"] !== null) {
            $this->StartBillingTime = $param["StartBillingTime"];
        }

        if (array_key_exists("StopBillingTime",$param) and $param["StopBillingTime"] !== null) {
            $this->StopBillingTime = $param["StopBillingTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("FeeType",$param) and $param["FeeType"] !== null) {
            $this->FeeType = $param["FeeType"];
        }
    }
}
