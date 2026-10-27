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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKmsInstance请求参数结构体
 *
 * @method string getInstanceChargeType() 获取<p>实例付费类型(PREPAID)</p>
 * @method void setInstanceChargeType(string $InstanceChargeType) 设置<p>实例付费类型(PREPAID)</p>
 * @method string getProductVersion() 获取<p>版本类型</p><p>枚举值：</p><ul><li>professional： 专业版</li></ul>
 * @method void setProductVersion(string $ProductVersion) 设置<p>版本类型</p><p>枚举值：</p><ul><li>professional： 专业版</li></ul>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>预付费实例信息</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>预付费实例信息</p>
 * @method string getClientToken() 获取<p>可重入客户端ID</p>
 * @method void setClientToken(string $ClientToken) 设置<p>可重入客户端ID</p>
 * @method array getTags() 获取<p>实例标签</p>
 * @method void setTags(array $Tags) 设置<p>实例标签</p>
 */
class CreateKmsInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>实例付费类型(PREPAID)</p>
     */
    public $InstanceChargeType;

    /**
     * @var string <p>版本类型</p><p>枚举值：</p><ul><li>professional： 专业版</li></ul>
     */
    public $ProductVersion;

    /**
     * @var InstanceChargePrepaid <p>预付费实例信息</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @var string <p>可重入客户端ID</p>
     */
    public $ClientToken;

    /**
     * @var array <p>实例标签</p>
     */
    public $Tags;

    /**
     * @param string $InstanceChargeType <p>实例付费类型(PREPAID)</p>
     * @param string $ProductVersion <p>版本类型</p><p>枚举值：</p><ul><li>professional： 专业版</li></ul>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>预付费实例信息</p>
     * @param string $ClientToken <p>可重入客户端ID</p>
     * @param array $Tags <p>实例标签</p>
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
        if (array_key_exists("InstanceChargeType",$param) and $param["InstanceChargeType"] !== null) {
            $this->InstanceChargeType = $param["InstanceChargeType"];
        }

        if (array_key_exists("ProductVersion",$param) and $param["ProductVersion"] !== null) {
            $this->ProductVersion = $param["ProductVersion"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
