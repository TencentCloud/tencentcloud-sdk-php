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
 * ModifyWebSecurityTemplate请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。需要传入目标策略模板在访问权限上归属的站点，可使用 DescribeWebSecurityTemplates 接口查询策略模板归属的站点。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。需要传入目标策略模板在访问权限上归属的站点，可使用 DescribeWebSecurityTemplates 接口查询策略模板归属的站点。
 * @method string getTemplateId() 获取策略模板 ID。
 * @method void setTemplateId(string $TemplateId) 设置策略模板 ID。
 * @method string getTemplateName() 获取修改后的策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过32个字符。字段为空时则不修改。
 * @method void setTemplateName(string $TemplateName) 设置修改后的策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过32个字符。字段为空时则不修改。
 * @method SecurityPolicy getSecurityPolicy() 获取安全策略模板配置内容。值为空时不修改；没有传入的子模块结构不会被修改。目前支持 Web 防护模块中的例外规则、自定义规则、速率限制规则和托管规则配置，通过表达式语法对安全策略进行配置。 Bot 管理规则配置暂不支持，正在开发中。
特别说明：当入参某个子模块结构时，请确保携带所有需要保留的规则内容，未传入规则内容视为删除。
 * @method void setSecurityPolicy(SecurityPolicy $SecurityPolicy) 设置安全策略模板配置内容。值为空时不修改；没有传入的子模块结构不会被修改。目前支持 Web 防护模块中的例外规则、自定义规则、速率限制规则和托管规则配置，通过表达式语法对安全策略进行配置。 Bot 管理规则配置暂不支持，正在开发中。
特别说明：当入参某个子模块结构时，请确保携带所有需要保留的规则内容，未传入规则内容视为删除。
 */
class ModifyWebSecurityTemplateRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。需要传入目标策略模板在访问权限上归属的站点，可使用 DescribeWebSecurityTemplates 接口查询策略模板归属的站点。
     */
    public $ZoneId;

    /**
     * @var string 策略模板 ID。
     */
    public $TemplateId;

    /**
     * @var string 修改后的策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过32个字符。字段为空时则不修改。
     */
    public $TemplateName;

    /**
     * @var SecurityPolicy 安全策略模板配置内容。值为空时不修改；没有传入的子模块结构不会被修改。目前支持 Web 防护模块中的例外规则、自定义规则、速率限制规则和托管规则配置，通过表达式语法对安全策略进行配置。 Bot 管理规则配置暂不支持，正在开发中。
特别说明：当入参某个子模块结构时，请确保携带所有需要保留的规则内容，未传入规则内容视为删除。
     */
    public $SecurityPolicy;

    /**
     * @param string $ZoneId 站点 ID。需要传入目标策略模板在访问权限上归属的站点，可使用 DescribeWebSecurityTemplates 接口查询策略模板归属的站点。
     * @param string $TemplateId 策略模板 ID。
     * @param string $TemplateName 修改后的策略模板名称。由中文、英文、数字和下划线组成，不能以下划线开头，且长度不能超过32个字符。字段为空时则不修改。
     * @param SecurityPolicy $SecurityPolicy 安全策略模板配置内容。值为空时不修改；没有传入的子模块结构不会被修改。目前支持 Web 防护模块中的例外规则、自定义规则、速率限制规则和托管规则配置，通过表达式语法对安全策略进行配置。 Bot 管理规则配置暂不支持，正在开发中。
特别说明：当入参某个子模块结构时，请确保携带所有需要保留的规则内容，未传入规则内容视为删除。
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

        if (array_key_exists("SecurityPolicy",$param) and $param["SecurityPolicy"] !== null) {
            $this->SecurityPolicy = new SecurityPolicy();
            $this->SecurityPolicy->deserialize($param["SecurityPolicy"]);
        }
    }
}
