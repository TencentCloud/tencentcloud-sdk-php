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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权企业列表（目前仅用于“企业自动签 -> 合作企业授权”）
 *
 * @method string getOrganizationOpenId() 获取授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrganizationName() 获取授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrganizationName(string $OrganizationName) 设置授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorizedOrganizationOpenId() 获取被授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizedOrganizationOpenId(string $AuthorizedOrganizationOpenId) 设置被授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthorizedOrganizationName() 获取被授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizedOrganizationName(string $AuthorizedOrganizationName) 设置被授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAuthorizeTime() 获取授权时间，格式为时间戳，单位s	
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthorizeTime(integer $AuthorizeTime) 设置授权时间，格式为时间戳，单位s	
注意：此字段可能返回 null，表示取不到有效值。
 */
class HasAuthOrganization extends AbstractModel
{
    /**
     * @var string 授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationOpenId;

    /**
     * @var string 授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrganizationName;

    /**
     * @var string 被授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizedOrganizationOpenId;

    /**
     * @var string 被授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizedOrganizationName;

    /**
     * @var integer 授权时间，格式为时间戳，单位s	
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthorizeTime;

    /**
     * @param string $OrganizationOpenId 授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrganizationName 授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorizedOrganizationOpenId 被授权企业openid，
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthorizedOrganizationName 被授权企业名称	
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AuthorizeTime 授权时间，格式为时间戳，单位s	
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
        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("AuthorizedOrganizationOpenId",$param) and $param["AuthorizedOrganizationOpenId"] !== null) {
            $this->AuthorizedOrganizationOpenId = $param["AuthorizedOrganizationOpenId"];
        }

        if (array_key_exists("AuthorizedOrganizationName",$param) and $param["AuthorizedOrganizationName"] !== null) {
            $this->AuthorizedOrganizationName = $param["AuthorizedOrganizationName"];
        }

        if (array_key_exists("AuthorizeTime",$param) and $param["AuthorizeTime"] !== null) {
            $this->AuthorizeTime = $param["AuthorizeTime"];
        }
    }
}
