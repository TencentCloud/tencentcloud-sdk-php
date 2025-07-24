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
namespace TencentCloud\Igtm\V20231024\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance请求参数结构体
 *
 * @method string getDomain() 获取业务域名
 * @method void setDomain(string $Domain) 设置业务域名
 * @method string getAccessType() 获取CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
 * @method void setAccessType(string $AccessType) 设置CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
 * @method integer getGlobalTtl() 获取解析生效时间	
 * @method void setGlobalTtl(integer $GlobalTtl) 设置解析生效时间	
 * @method string getPackageType() 获取套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
 * @method void setPackageType(string $PackageType) 设置套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getAccessDomain() 获取接入主域名
 * @method void setAccessDomain(string $AccessDomain) 设置接入主域名
 * @method string getAccessSubDomain() 获取接入子域名
 * @method void setAccessSubDomain(string $AccessSubDomain) 设置接入子域名
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getResourceId() 获取套餐资源id
 * @method void setResourceId(string $ResourceId) 设置套餐资源id
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 业务域名
     */
    public $Domain;

    /**
     * @var string CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
     */
    public $AccessType;

    /**
     * @var integer 解析生效时间	
     */
    public $GlobalTtl;

    /**
     * @var string 套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
     */
    public $PackageType;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 接入主域名
     */
    public $AccessDomain;

    /**
     * @var string 接入子域名
     */
    public $AccessSubDomain;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 套餐资源id
     */
    public $ResourceId;

    /**
     * @param string $Domain 业务域名
     * @param string $AccessType CUSTOM: 自定义接入域名
SYSTEM: 系统接入域名
     * @param integer $GlobalTtl 解析生效时间	
     * @param string $PackageType 套餐类型
FREE: 免费版
STANDARD：标准版
ULTIMATE：旗舰版
     * @param string $InstanceName 实例名称
     * @param string $AccessDomain 接入主域名
     * @param string $AccessSubDomain 接入子域名
     * @param string $Remark 备注
     * @param string $ResourceId 套餐资源id
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("GlobalTtl",$param) and $param["GlobalTtl"] !== null) {
            $this->GlobalTtl = $param["GlobalTtl"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("AccessDomain",$param) and $param["AccessDomain"] !== null) {
            $this->AccessDomain = $param["AccessDomain"];
        }

        if (array_key_exists("AccessSubDomain",$param) and $param["AccessSubDomain"] !== null) {
            $this->AccessSubDomain = $param["AccessSubDomain"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }
    }
}
