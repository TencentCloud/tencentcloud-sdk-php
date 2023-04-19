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
 * 签署参与者信息
 *
 * @method string getRecipientId() 获取签署人唯一标识
 * @method void setRecipientId(string $RecipientId) 设置签署人唯一标识
 * @method string getRecipientType() 获取参与者类型。默认为空。ENTERPRISE-企业；INDIVIDUAL-个人；PROMOTER-发起方
 * @method void setRecipientType(string $RecipientType) 设置参与者类型。默认为空。ENTERPRISE-企业；INDIVIDUAL-个人；PROMOTER-发起方
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getRoleName() 获取签署方备注信息
 * @method void setRoleName(string $RoleName) 设置签署方备注信息
 * @method boolean getRequireValidation() 获取是否需要校验
 * @method void setRequireValidation(boolean $RequireValidation) 设置是否需要校验
 * @method boolean getRequireSign() 获取是否必须填写
 * @method void setRequireSign(boolean $RequireSign) 设置是否必须填写
 * @method integer getSignType() 获取签署类型
 * @method void setSignType(integer $SignType) 设置签署类型
 * @method integer getRoutingOrder() 获取签署顺序：数字越小优先级越高
 * @method void setRoutingOrder(integer $RoutingOrder) 设置签署顺序：数字越小优先级越高
 * @method boolean getIsPromoter() 获取是否是发起方
 * @method void setIsPromoter(boolean $IsPromoter) 设置是否是发起方
 */
class Recipient extends AbstractModel
{
    /**
     * @var string 签署人唯一标识
     */
    public $RecipientId;

    /**
     * @var string 参与者类型。默认为空。ENTERPRISE-企业；INDIVIDUAL-个人；PROMOTER-发起方
     */
    public $RecipientType;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 签署方备注信息
     */
    public $RoleName;

    /**
     * @var boolean 是否需要校验
     */
    public $RequireValidation;

    /**
     * @var boolean 是否必须填写
     */
    public $RequireSign;

    /**
     * @var integer 签署类型
     */
    public $SignType;

    /**
     * @var integer 签署顺序：数字越小优先级越高
     */
    public $RoutingOrder;

    /**
     * @var boolean 是否是发起方
     */
    public $IsPromoter;

    /**
     * @param string $RecipientId 签署人唯一标识
     * @param string $RecipientType 参与者类型。默认为空。ENTERPRISE-企业；INDIVIDUAL-个人；PROMOTER-发起方
     * @param string $Description 描述
     * @param string $RoleName 签署方备注信息
     * @param boolean $RequireValidation 是否需要校验
     * @param boolean $RequireSign 是否必须填写
     * @param integer $SignType 签署类型
     * @param integer $RoutingOrder 签署顺序：数字越小优先级越高
     * @param boolean $IsPromoter 是否是发起方
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("RecipientType",$param) and $param["RecipientType"] !== null) {
            $this->RecipientType = $param["RecipientType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("RequireValidation",$param) and $param["RequireValidation"] !== null) {
            $this->RequireValidation = $param["RequireValidation"];
        }

        if (array_key_exists("RequireSign",$param) and $param["RequireSign"] !== null) {
            $this->RequireSign = $param["RequireSign"];
        }

        if (array_key_exists("SignType",$param) and $param["SignType"] !== null) {
            $this->SignType = $param["SignType"];
        }

        if (array_key_exists("RoutingOrder",$param) and $param["RoutingOrder"] !== null) {
            $this->RoutingOrder = $param["RoutingOrder"];
        }

        if (array_key_exists("IsPromoter",$param) and $param["IsPromoter"] !== null) {
            $this->IsPromoter = $param["IsPromoter"];
        }
    }
}
