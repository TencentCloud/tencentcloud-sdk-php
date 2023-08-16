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
 * 抄送信息
 *
 * @method string getMobile() 获取被抄送方手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。
 * @method void setMobile(string $Mobile) 设置被抄送方手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。
 * @method string getName() 获取被抄送方姓名。
抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。
 * @method void setName(string $Name) 设置被抄送方姓名。
抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。
 * @method integer getCcType() 获取被抄送方类型, 可设置以下类型:

- 0:个人抄送方
- 1:企业员工抄送方
 * @method void setCcType(integer $CcType) 设置被抄送方类型, 可设置以下类型:

- 0:个人抄送方
- 1:企业员工抄送方
 * @method integer getCcPermission() 获取被抄送方权限, 可设置如下权限:

- 0:可查看合同内容
- 1:可查看合同内容也可下载原文
 * @method void setCcPermission(integer $CcPermission) 设置被抄送方权限, 可设置如下权限:

- 0:可查看合同内容
- 1:可查看合同内容也可下载原文
 * @method string getNotifyType() 获取通知签署方经办人的方式,  有以下途径:

- sms:  (默认)短信 
- none: 不通知
 * @method void setNotifyType(string $NotifyType) 设置通知签署方经办人的方式,  有以下途径:

- sms:  (默认)短信 
- none: 不通知
 */
class CcInfo extends AbstractModel
{
    /**
     * @var string 被抄送方手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。
     */
    public $Mobile;

    /**
     * @var string 被抄送方姓名。
抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。
     */
    public $Name;

    /**
     * @var integer 被抄送方类型, 可设置以下类型:

- 0:个人抄送方
- 1:企业员工抄送方
     */
    public $CcType;

    /**
     * @var integer 被抄送方权限, 可设置如下权限:

- 0:可查看合同内容
- 1:可查看合同内容也可下载原文
     */
    public $CcPermission;

    /**
     * @var string 通知签署方经办人的方式,  有以下途径:

- sms:  (默认)短信 
- none: 不通知
     */
    public $NotifyType;

    /**
     * @param string $Mobile 被抄送方手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此业务通知方。
     * @param string $Name 被抄送方姓名。
抄送方的姓名将用于身份认证，请确保填写的姓名为抄送方的真实姓名，而非昵称等代名。
     * @param integer $CcType 被抄送方类型, 可设置以下类型:

- 0:个人抄送方
- 1:企业员工抄送方
     * @param integer $CcPermission 被抄送方权限, 可设置如下权限:

- 0:可查看合同内容
- 1:可查看合同内容也可下载原文
     * @param string $NotifyType 通知签署方经办人的方式,  有以下途径:

- sms:  (默认)短信 
- none: 不通知
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
        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CcType",$param) and $param["CcType"] !== null) {
            $this->CcType = $param["CcType"];
        }

        if (array_key_exists("CcPermission",$param) and $param["CcPermission"] !== null) {
            $this->CcPermission = $param["CcPermission"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }
    }
}
