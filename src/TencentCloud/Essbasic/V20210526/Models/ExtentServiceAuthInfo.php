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
 * 企业扩展服务授权信息
 *
 * @method string getType() 获取扩展服务类型
  AUTO_SIGN             企业静默签（自动签署）
  OVERSEA_SIGN          企业与港澳台居民*签署合同
  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份
  PAGING_SEAL           骑缝章
  DOWNLOAD_FLOW         授权渠道下载合同 
 * @method void setType(string $Type) 设置扩展服务类型
  AUTO_SIGN             企业静默签（自动签署）
  OVERSEA_SIGN          企业与港澳台居民*签署合同
  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份
  PAGING_SEAL           骑缝章
  DOWNLOAD_FLOW         授权渠道下载合同 
 * @method string getName() 获取扩展服务名称 
 * @method void setName(string $Name) 设置扩展服务名称 
 * @method string getStatus() 获取服务状态 
ENABLE 开启 
DISABLE 关闭
 * @method void setStatus(string $Status) 设置服务状态 
ENABLE 开启 
DISABLE 关闭
 * @method string getOperatorOpenId() 获取最近操作人openid（经办人openid）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorOpenId(string $OperatorOpenId) 设置最近操作人openid（经办人openid）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOperateOn() 获取最近操作时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateOn(integer $OperateOn) 设置最近操作时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExtentServiceAuthInfo extends AbstractModel
{
    /**
     * @var string 扩展服务类型
  AUTO_SIGN             企业静默签（自动签署）
  OVERSEA_SIGN          企业与港澳台居民*签署合同
  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份
  PAGING_SEAL           骑缝章
  DOWNLOAD_FLOW         授权渠道下载合同 
     */
    public $Type;

    /**
     * @var string 扩展服务名称 
     */
    public $Name;

    /**
     * @var string 服务状态 
ENABLE 开启 
DISABLE 关闭
     */
    public $Status;

    /**
     * @var string 最近操作人openid（经办人openid）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorOpenId;

    /**
     * @var integer 最近操作时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateOn;

    /**
     * @param string $Type 扩展服务类型
  AUTO_SIGN             企业静默签（自动签署）
  OVERSEA_SIGN          企业与港澳台居民*签署合同
  MOBILE_CHECK_APPROVER 使用手机号验证签署方身份
  PAGING_SEAL           骑缝章
  DOWNLOAD_FLOW         授权渠道下载合同 
     * @param string $Name 扩展服务名称 
     * @param string $Status 服务状态 
ENABLE 开启 
DISABLE 关闭
     * @param string $OperatorOpenId 最近操作人openid（经办人openid）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OperateOn 最近操作时间
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

        if (array_key_exists("OperatorOpenId",$param) and $param["OperatorOpenId"] !== null) {
            $this->OperatorOpenId = $param["OperatorOpenId"];
        }

        if (array_key_exists("OperateOn",$param) and $param["OperateOn"] !== null) {
            $this->OperateOn = $param["OperateOn"];
        }
    }
}
