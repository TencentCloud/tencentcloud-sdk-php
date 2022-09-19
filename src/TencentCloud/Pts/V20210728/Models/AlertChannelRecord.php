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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警通知接收组
 *
 * @method string getNoticeId() 获取Notice ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeId(string $NoticeId) 设置Notice ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAMPConsumerId() 获取Consumer ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAMPConsumerId(string $AMPConsumerId) 设置Consumer ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProjectId() 获取项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProjectId(string $ProjectId) 设置项目 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAppId() 获取App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置App ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置主账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取子账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置子账号
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlertChannelRecord extends AbstractModel
{
    /**
     * @var string Notice ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeId;

    /**
     * @var string Consumer ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AMPConsumerId;

    /**
     * @var string 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProjectId;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var integer App ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 主账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 子账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @param string $NoticeId Notice ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AMPConsumerId Consumer ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProjectId 项目 ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AppId App ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 主账号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 子账号
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
        if (array_key_exists("NoticeId",$param) and $param["NoticeId"] !== null) {
            $this->NoticeId = $param["NoticeId"];
        }

        if (array_key_exists("AMPConsumerId",$param) and $param["AMPConsumerId"] !== null) {
            $this->AMPConsumerId = $param["AMPConsumerId"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }
    }
}
