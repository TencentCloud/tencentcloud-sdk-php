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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户池
 *
 * @method string getTenantId() 获取租户ID
 * @method void setTenantId(string $TenantId) 设置租户ID
 * @method string getUserStoreLogo() 获取用户池logo
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserStoreLogo(string $UserStoreLogo) 设置用户池logo
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserStoreDesc() 获取用户池描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserStoreDesc(string $UserStoreDesc) 设置用户池描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserStoreName() 获取用户池名称
 * @method void setUserStoreName(string $UserStoreName) 设置用户池名称
 * @method integer getUserNum() 获取用户数量
 * @method void setUserNum(integer $UserNum) 设置用户数量
 * @method string getUserStoreId() 获取用户池ID
 * @method void setUserStoreId(string $UserStoreId) 设置用户池ID
 * @method integer getAppNum() 获取应用数量
 * @method void setAppNum(integer $AppNum) 设置应用数量
 * @method boolean getLastStatus() 获取上次切换的用户池
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastStatus(boolean $LastStatus) 设置上次切换的用户池
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDefaultStatus() 获取默认用户池
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultStatus(boolean $DefaultStatus) 设置默认用户池
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCreateDate() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateDate(integer $CreateDate) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLastStatusTime() 获取上次切换时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastStatusTime(integer $LastStatusTime) 设置上次切换时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserStoreProtocolHost() 获取用户目录域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserStoreProtocolHost(string $UserStoreProtocolHost) 设置用户目录域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserStore extends AbstractModel
{
    /**
     * @var string 租户ID
     */
    public $TenantId;

    /**
     * @var string 用户池logo
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserStoreLogo;

    /**
     * @var string 用户池描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserStoreDesc;

    /**
     * @var string 用户池名称
     */
    public $UserStoreName;

    /**
     * @var integer 用户数量
     */
    public $UserNum;

    /**
     * @var string 用户池ID
     */
    public $UserStoreId;

    /**
     * @var integer 应用数量
     */
    public $AppNum;

    /**
     * @var boolean 上次切换的用户池
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastStatus;

    /**
     * @var boolean 默认用户池
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultStatus;

    /**
     * @var integer 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateDate;

    /**
     * @var integer 上次切换时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastStatusTime;

    /**
     * @var string 用户目录域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserStoreProtocolHost;

    /**
     * @param string $TenantId 租户ID
     * @param string $UserStoreLogo 用户池logo
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserStoreDesc 用户池描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserStoreName 用户池名称
     * @param integer $UserNum 用户数量
     * @param string $UserStoreId 用户池ID
     * @param integer $AppNum 应用数量
     * @param boolean $LastStatus 上次切换的用户池
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DefaultStatus 默认用户池
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CreateDate 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LastStatusTime 上次切换时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserStoreProtocolHost 用户目录域名
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
        if (array_key_exists("TenantId",$param) and $param["TenantId"] !== null) {
            $this->TenantId = $param["TenantId"];
        }

        if (array_key_exists("UserStoreLogo",$param) and $param["UserStoreLogo"] !== null) {
            $this->UserStoreLogo = $param["UserStoreLogo"];
        }

        if (array_key_exists("UserStoreDesc",$param) and $param["UserStoreDesc"] !== null) {
            $this->UserStoreDesc = $param["UserStoreDesc"];
        }

        if (array_key_exists("UserStoreName",$param) and $param["UserStoreName"] !== null) {
            $this->UserStoreName = $param["UserStoreName"];
        }

        if (array_key_exists("UserNum",$param) and $param["UserNum"] !== null) {
            $this->UserNum = $param["UserNum"];
        }

        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("AppNum",$param) and $param["AppNum"] !== null) {
            $this->AppNum = $param["AppNum"];
        }

        if (array_key_exists("LastStatus",$param) and $param["LastStatus"] !== null) {
            $this->LastStatus = $param["LastStatus"];
        }

        if (array_key_exists("DefaultStatus",$param) and $param["DefaultStatus"] !== null) {
            $this->DefaultStatus = $param["DefaultStatus"];
        }

        if (array_key_exists("CreateDate",$param) and $param["CreateDate"] !== null) {
            $this->CreateDate = $param["CreateDate"];
        }

        if (array_key_exists("LastStatusTime",$param) and $param["LastStatusTime"] !== null) {
            $this->LastStatusTime = $param["LastStatusTime"];
        }

        if (array_key_exists("UserStoreProtocolHost",$param) and $param["UserStoreProtocolHost"] !== null) {
            $this->UserStoreProtocolHost = $param["UserStoreProtocolHost"];
        }
    }
}
