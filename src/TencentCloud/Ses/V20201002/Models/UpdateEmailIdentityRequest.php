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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEmailIdentity请求参数结构体
 *
 * @method string getEmailIdentity() 获取<p>请求验证的域名</p>
 * @method void setEmailIdentity(string $EmailIdentity) 设置<p>请求验证的域名</p>
 * @method boolean getNewAPI() 获取<p>匹分控制台新老API</p>
 * @method void setNewAPI(boolean $NewAPI) 设置<p>匹分控制台新老API</p>
 * @method integer getDKIMOption() 获取<p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
 * @method void setDKIMOption(integer $DKIMOption) 设置<p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
 */
class UpdateEmailIdentityRequest extends AbstractModel
{
    /**
     * @var string <p>请求验证的域名</p>
     */
    public $EmailIdentity;

    /**
     * @var boolean <p>匹分控制台新老API</p>
     */
    public $NewAPI;

    /**
     * @var integer <p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
     */
    public $DKIMOption;

    /**
     * @param string $EmailIdentity <p>请求验证的域名</p>
     * @param boolean $NewAPI <p>匹分控制台新老API</p>
     * @param integer $DKIMOption <p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
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
        if (array_key_exists("EmailIdentity",$param) and $param["EmailIdentity"] !== null) {
            $this->EmailIdentity = $param["EmailIdentity"];
        }

        if (array_key_exists("NewAPI",$param) and $param["NewAPI"] !== null) {
            $this->NewAPI = $param["NewAPI"];
        }

        if (array_key_exists("DKIMOption",$param) and $param["DKIMOption"] !== null) {
            $this->DKIMOption = $param["DKIMOption"];
        }
    }
}
