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
 * CreateEmailIdentity返回参数结构体
 *
 * @method string getIdentityType() 获取<p>验证类型。固定值：DOMAIN</p>
 * @method void setIdentityType(string $IdentityType) 设置<p>验证类型。固定值：DOMAIN</p>
 * @method boolean getVerifiedForSendingStatus() 获取<p>是否已通过验证</p>
 * @method void setVerifiedForSendingStatus(boolean $VerifiedForSendingStatus) 设置<p>是否已通过验证</p>
 * @method array getAttributes() 获取<p>需要配置的DNS信息</p>
 * @method void setAttributes(array $Attributes) 设置<p>需要配置的DNS信息</p>
 * @method integer getDKIMOption() 获取<p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
 * @method void setDKIMOption(integer $DKIMOption) 设置<p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateEmailIdentityResponse extends AbstractModel
{
    /**
     * @var string <p>验证类型。固定值：DOMAIN</p>
     */
    public $IdentityType;

    /**
     * @var boolean <p>是否已通过验证</p>
     */
    public $VerifiedForSendingStatus;

    /**
     * @var array <p>需要配置的DNS信息</p>
     */
    public $Attributes;

    /**
     * @var integer <p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
     */
    public $DKIMOption;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $IdentityType <p>验证类型。固定值：DOMAIN</p>
     * @param boolean $VerifiedForSendingStatus <p>是否已通过验证</p>
     * @param array $Attributes <p>需要配置的DNS信息</p>
     * @param integer $DKIMOption <p>dkim位数</p><p>枚举值：</p><ul><li>0： 1024</li><li>1： 2048</li><li>2： 双签</li></ul>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("IdentityType",$param) and $param["IdentityType"] !== null) {
            $this->IdentityType = $param["IdentityType"];
        }

        if (array_key_exists("VerifiedForSendingStatus",$param) and $param["VerifiedForSendingStatus"] !== null) {
            $this->VerifiedForSendingStatus = $param["VerifiedForSendingStatus"];
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new DNSAttributes();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }

        if (array_key_exists("DKIMOption",$param) and $param["DKIMOption"] !== null) {
            $this->DKIMOption = $param["DKIMOption"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
