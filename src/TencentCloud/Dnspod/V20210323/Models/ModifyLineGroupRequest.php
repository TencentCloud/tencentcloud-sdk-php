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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLineGroup请求参数结构体
 *
 * @method string getName() 获取自定义线路分组的名称。
 * @method void setName(string $Name) 设置自定义线路分组的名称。
 * @method string getLines() 获取自定义线路分组包含的线路列表，包含多个线路时用英文逗号分隔。例如，铁通,奇虎
 * @method void setLines(string $Lines) 设置自定义线路分组包含的线路列表，包含多个线路时用英文逗号分隔。例如，铁通,奇虎
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method integer getLineGroupId() 获取自定义线路分组ID
 * @method void setLineGroupId(integer $LineGroupId) 设置自定义线路分组ID
 * @method integer getDomainId() 获取域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 * @method void setDomainId(integer $DomainId) 设置域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
 */
class ModifyLineGroupRequest extends AbstractModel
{
    /**
     * @var string 自定义线路分组的名称。
     */
    public $Name;

    /**
     * @var string 自定义线路分组包含的线路列表，包含多个线路时用英文逗号分隔。例如，铁通,奇虎
     */
    public $Lines;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var integer 自定义线路分组ID
     */
    public $LineGroupId;

    /**
     * @var integer 域名ID，如果传了DomainId，系统将会忽略Domain参数，优先使用DomainId
     */
    public $DomainId;

    /**
     * @param string $Name 自定义线路分组的名称。
     * @param string $Lines 自定义线路分组包含的线路列表，包含多个线路时用英文逗号分隔。例如，铁通,奇虎
     * @param string $Domain 域名
     * @param integer $LineGroupId 自定义线路分组ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Lines",$param) and $param["Lines"] !== null) {
            $this->Lines = $param["Lines"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("LineGroupId",$param) and $param["LineGroupId"] !== null) {
            $this->LineGroupId = $param["LineGroupId"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }
    }
}
