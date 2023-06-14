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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 授权服务信息
 *
 * @method string getType() 获取授权服务类型
OPEN_SERVER_SIGN：开通企业静默签署
OVERSEA_SIGN：企业与港澳台居民签署合同
MOBILE_CHECK_APPROVER：使用手机号验证签署方身份
PAGING_SEAL：骑缝章
BATCH_SIGN：批量签署
 * @method void setType(string $Type) 设置授权服务类型
OPEN_SERVER_SIGN：开通企业静默签署
OVERSEA_SIGN：企业与港澳台居民签署合同
MOBILE_CHECK_APPROVER：使用手机号验证签署方身份
PAGING_SEAL：骑缝章
BATCH_SIGN：批量签署
 * @method string getName() 获取授权服务名称
 * @method void setName(string $Name) 设置授权服务名称
 * @method string getStatus() 获取授权服务状态，ENABLE：开通
DISABLE：未开通
 * @method void setStatus(string $Status) 设置授权服务状态，ENABLE：开通
DISABLE：未开通
 * @method string getOperatorUserId() 获取授权人用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorUserId(string $OperatorUserId) 设置授权人用户id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperateOn() 获取授权时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateOn(integer $OperateOn) 设置授权时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHasAuthUserList() 获取被授权用户列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasAuthUserList(array $HasAuthUserList) 设置被授权用户列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtendAuthInfo extends AbstractModel
{
    /**
     * @var string 授权服务类型
OPEN_SERVER_SIGN：开通企业静默签署
OVERSEA_SIGN：企业与港澳台居民签署合同
MOBILE_CHECK_APPROVER：使用手机号验证签署方身份
PAGING_SEAL：骑缝章
BATCH_SIGN：批量签署
     */
    public $Type;

    /**
     * @var string 授权服务名称
     */
    public $Name;

    /**
     * @var string 授权服务状态，ENABLE：开通
DISABLE：未开通
     */
    public $Status;

    /**
     * @var string 授权人用户id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorUserId;

    /**
     * @var integer 授权时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateOn;

    /**
     * @var array 被授权用户列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasAuthUserList;

    /**
     * @param string $Type 授权服务类型
OPEN_SERVER_SIGN：开通企业静默签署
OVERSEA_SIGN：企业与港澳台居民签署合同
MOBILE_CHECK_APPROVER：使用手机号验证签署方身份
PAGING_SEAL：骑缝章
BATCH_SIGN：批量签署
     * @param string $Name 授权服务名称
     * @param string $Status 授权服务状态，ENABLE：开通
DISABLE：未开通
     * @param string $OperatorUserId 授权人用户id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperateOn 授权时间戳，单位秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HasAuthUserList 被授权用户列表
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OperatorUserId",$param) and $param["OperatorUserId"] !== null) {
            $this->OperatorUserId = $param["OperatorUserId"];
        }

        if (array_key_exists("OperateOn",$param) and $param["OperateOn"] !== null) {
            $this->OperateOn = $param["OperateOn"];
        }

        if (array_key_exists("HasAuthUserList",$param) and $param["HasAuthUserList"] !== null) {
            $this->HasAuthUserList = [];
            foreach ($param["HasAuthUserList"] as $key => $value){
                $obj = new HasAuthUser();
                $obj->deserialize($value);
                array_push($this->HasAuthUserList, $obj);
            }
        }
    }
}
