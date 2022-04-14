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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCloudSubMerchant请求参数结构体
 *
 * @method string getMidasAppId() 获取米大师分配的支付主MidasAppId，根应用Id。
 * @method void setMidasAppId(string $MidasAppId) 设置米大师分配的支付主MidasAppId，根应用Id。
 * @method string getParentAppId() 获取父应用Id。
 * @method void setParentAppId(string $ParentAppId) 设置父应用Id。
 * @method string getSubMchName() 获取子商户名。
 * @method void setSubMchName(string $SubMchName) 设置子商户名。
 * @method string getSubMchDescription() 获取子商户描述。
 * @method void setSubMchDescription(string $SubMchDescription) 设置子商户描述。
 * @method string getMidasEnvironment() 获取环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setMidasEnvironment(string $MidasEnvironment) 设置环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method string getSubAppId() 获取子应用Id，为空则自动创建子应用id。
 * @method void setSubAppId(string $SubAppId) 设置子应用Id，为空则自动创建子应用id。
 * @method string getSubMchShortName() 获取子商户名缩写。
 * @method void setSubMchShortName(string $SubMchShortName) 设置子商户名缩写。
 * @method string getOutSubMerchantId() 获取业务平台自定义的子商户Id，唯一。
 * @method void setOutSubMerchantId(string $OutSubMerchantId) 设置业务平台自定义的子商户Id，唯一。
 */
class CreateCloudSubMerchantRequest extends AbstractModel
{
    /**
     * @var string 米大师分配的支付主MidasAppId，根应用Id。
     */
    public $MidasAppId;

    /**
     * @var string 父应用Id。
     */
    public $ParentAppId;

    /**
     * @var string 子商户名。
     */
    public $SubMchName;

    /**
     * @var string 子商户描述。
     */
    public $SubMchDescription;

    /**
     * @var string 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $MidasEnvironment;

    /**
     * @var string 子应用Id，为空则自动创建子应用id。
     */
    public $SubAppId;

    /**
     * @var string 子商户名缩写。
     */
    public $SubMchShortName;

    /**
     * @var string 业务平台自定义的子商户Id，唯一。
     */
    public $OutSubMerchantId;

    /**
     * @param string $MidasAppId 米大师分配的支付主MidasAppId，根应用Id。
     * @param string $ParentAppId 父应用Id。
     * @param string $SubMchName 子商户名。
     * @param string $SubMchDescription 子商户描述。
     * @param string $MidasEnvironment 环境类型
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     * @param string $SubAppId 子应用Id，为空则自动创建子应用id。
     * @param string $SubMchShortName 子商户名缩写。
     * @param string $OutSubMerchantId 业务平台自定义的子商户Id，唯一。
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
        if (array_key_exists("MidasAppId",$param) and $param["MidasAppId"] !== null) {
            $this->MidasAppId = $param["MidasAppId"];
        }

        if (array_key_exists("ParentAppId",$param) and $param["ParentAppId"] !== null) {
            $this->ParentAppId = $param["ParentAppId"];
        }

        if (array_key_exists("SubMchName",$param) and $param["SubMchName"] !== null) {
            $this->SubMchName = $param["SubMchName"];
        }

        if (array_key_exists("SubMchDescription",$param) and $param["SubMchDescription"] !== null) {
            $this->SubMchDescription = $param["SubMchDescription"];
        }

        if (array_key_exists("MidasEnvironment",$param) and $param["MidasEnvironment"] !== null) {
            $this->MidasEnvironment = $param["MidasEnvironment"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("SubMchShortName",$param) and $param["SubMchShortName"] !== null) {
            $this->SubMchShortName = $param["SubMchShortName"];
        }

        if (array_key_exists("OutSubMerchantId",$param) and $param["OutSubMerchantId"] !== null) {
            $this->OutSubMerchantId = $param["OutSubMerchantId"];
        }
    }
}
