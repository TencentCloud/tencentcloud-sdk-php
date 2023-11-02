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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainCustomLine请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getName() 获取修改后的自定义线路名称，如果不修改名称，需要和PreName保持一致
 * @method void setName(string $Name) 设置修改后的自定义线路名称，如果不修改名称，需要和PreName保持一致
 * @method string getArea() 获取自定义线路IP段，用-分割
 * @method void setArea(string $Area) 设置自定义线路IP段，用-分割
 * @method string getPreName() 获取修改前的自定义线路名称
 * @method void setPreName(string $PreName) 设置修改前的自定义线路名称
 * @method integer getDomainId() 获取域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 * @method void setDomainId(integer $DomainId) 设置域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 */
class ModifyDomainCustomLineRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 修改后的自定义线路名称，如果不修改名称，需要和PreName保持一致
     */
    public $Name;

    /**
     * @var string 自定义线路IP段，用-分割
     */
    public $Area;

    /**
     * @var string 修改前的自定义线路名称
     */
    public $PreName;

    /**
     * @var integer 域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
     */
    public $DomainId;

    /**
     * @param string $Domain 域名
     * @param string $Name 修改后的自定义线路名称，如果不修改名称，需要和PreName保持一致
     * @param string $Area 自定义线路IP段，用-分割
     * @param string $PreName 修改前的自定义线路名称
     * @param integer $DomainId 域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Area",$param) and $param["Area"] !== null) {
            $this->Area = $param["Area"];
        }

        if (array_key_exists("PreName",$param) and $param["PreName"] !== null) {
            $this->PreName = $param["PreName"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
