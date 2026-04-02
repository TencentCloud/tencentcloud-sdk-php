<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 邮件模板配置
 *
 * @method LocalizedTemplate getRegisterSignIn() 获取<p>注册登录模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegisterSignIn(LocalizedTemplate $RegisterSignIn) 设置<p>注册登录模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LocalizedTemplate getDefaultTpl() 获取<p>默认模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultTpl(LocalizedTemplate $DefaultTpl) 设置<p>默认模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmailTemplateConfig extends AbstractModel
{
    /**
     * @var LocalizedTemplate <p>注册登录模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegisterSignIn;

    /**
     * @var LocalizedTemplate <p>默认模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultTpl;

    /**
     * @param LocalizedTemplate $RegisterSignIn <p>注册登录模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LocalizedTemplate $DefaultTpl <p>默认模板</p><p>入参限制：模板中必须包含{{.VerificationCode}}变量，用于邮件中验证码的展示，可选变量有{{.Usage}}、{{.ExpireMinutes}}、{{.Email}}。邮件模板中禁止包含 script、javascript、onclick、onload、iframe、link 标签及 CSS expression、CSS url() 等</p>
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
        if (array_key_exists("RegisterSignIn",$param) and $param["RegisterSignIn"] !== null) {
            $this->RegisterSignIn = new LocalizedTemplate();
            $this->RegisterSignIn->deserialize($param["RegisterSignIn"]);
        }

        if (array_key_exists("DefaultTpl",$param) and $param["DefaultTpl"] !== null) {
            $this->DefaultTpl = new LocalizedTemplate();
            $this->DefaultTpl->deserialize($param["DefaultTpl"]);
        }
    }
}
