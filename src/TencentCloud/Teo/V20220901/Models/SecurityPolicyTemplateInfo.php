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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略模板信息
 *
 * @method string getZoneId() 获取策略模板所属的站点 ID。
 * @method void setZoneId(string $ZoneId) 设置策略模板所属的站点 ID。
 * @method string getTemplateId() 获取策略模板 ID。
 * @method void setTemplateId(string $TemplateId) 设置策略模板 ID。
 * @method string getTemplateName() 获取策略模板名称。
 * @method void setTemplateName(string $TemplateName) 设置策略模板名称。
 * @method array getBindDomains() 获取策略模板绑定的域名信息。
 * @method void setBindDomains(array $BindDomains) 设置策略模板绑定的域名信息。
 */
class SecurityPolicyTemplateInfo extends AbstractModel
{
    /**
     * @var string 策略模板所属的站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 策略模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 策略模板名称。
     */
    public $TemplateName;

    /**
     * @var array 策略模板绑定的域名信息。
     */
    public $BindDomains;

    /**
     * @param string $ZoneId 策略模板所属的站点 ID。
     * @param string $TemplateId 策略模板 ID。
     * @param string $TemplateName 策略模板名称。
     * @param array $BindDomains 策略模板绑定的域名信息。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("BindDomains",$param) and $param["BindDomains"] !== null) {
            $this->BindDomains = [];
            foreach ($param["BindDomains"] as $key => $value){
                $obj = new BindDomainInfo();
                $obj->deserialize($value);
                array_push($this->BindDomains, $obj);
            }
        }
    }
}
