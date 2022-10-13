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
namespace TencentCloud\Trp\V20210515\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 商户信息
 *
 * @method string getMerchantId() 获取商户标识码
 * @method void setMerchantId(string $MerchantId) 设置商户标识码
 * @method integer getCorpId() 获取企业id
 * @method void setCorpId(integer $CorpId) 设置企业id
 * @method string getName() 获取商户名称
 * @method void setName(string $Name) 设置商户名称
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getCodeRule() 获取商户码规则
 * @method void setCodeRule(string $CodeRule) 设置商户码规则
 * @method integer getCodeType() 获取码来源类型 0: 安心平台 1: 第三方码
 * @method void setCodeType(integer $CodeType) 设置码来源类型 0: 安心平台 1: 第三方码
 * @method string getCodeUrl() 获取第三方码域名前缀
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCodeUrl(string $CodeUrl) 设置第三方码域名前缀
注意：此字段可能返回 null，表示取不到有效值。
 */
class Merchant extends AbstractModel
{
    /**
     * @var string 商户标识码
     */
    public $MerchantId;

    /**
     * @var integer 企业id
     */
    public $CorpId;

    /**
     * @var string 商户名称
     */
    public $Name;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 商户码规则
     */
    public $CodeRule;

    /**
     * @var integer 码来源类型 0: 安心平台 1: 第三方码
     */
    public $CodeType;

    /**
     * @var string 第三方码域名前缀
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CodeUrl;

    /**
     * @param string $MerchantId 商户标识码
     * @param integer $CorpId 企业id
     * @param string $Name 商户名称
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $CodeRule 商户码规则
     * @param integer $CodeType 码来源类型 0: 安心平台 1: 第三方码
     * @param string $CodeUrl 第三方码域名前缀
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
        if (array_key_exists("MerchantId",$param) and $param["MerchantId"] !== null) {
            $this->MerchantId = $param["MerchantId"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("CodeRule",$param) and $param["CodeRule"] !== null) {
            $this->CodeRule = $param["CodeRule"];
        }

        if (array_key_exists("CodeType",$param) and $param["CodeType"] !== null) {
            $this->CodeType = $param["CodeType"];
        }

        if (array_key_exists("CodeUrl",$param) and $param["CodeUrl"] !== null) {
            $this->CodeUrl = $param["CodeUrl"];
        }
    }
}
