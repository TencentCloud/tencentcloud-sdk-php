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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSecurityDropPage请求参数结构体
 *
 * @method string getZoneId() 获取站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method void setZoneId(string $ZoneId) 设置站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method string getEntity() 获取子域名/应用名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method void setEntity(string $Entity) 设置子域名/应用名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
 * @method string getName() 获取自定义页面的文件名。
 * @method void setName(string $Name) 设置自定义页面的文件名。
 * @method string getContent() 获取自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
 * @method void setContent(string $Content) 设置自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
 * @method string getType() 获取上传的类型，取值有：
<li> file：将页面文件内容进行urlencode编码，填入Content字段；</li>
<li> url：将待上传的url地址进行urlencode编码，填入Content字段，即时下载，内容不会自动更新。</li>
 * @method void setType(string $Type) 设置上传的类型，取值有：
<li> file：将页面文件内容进行urlencode编码，填入Content字段；</li>
<li> url：将待上传的url地址进行urlencode编码，填入Content字段，即时下载，内容不会自动更新。</li>
 * @method string getModule() 获取页面所属的模块，取值有：
<li> waf ：托管规则模块；</li>
<li> rate：自定义规则模块。</li>
 * @method void setModule(string $Module) 设置页面所属的模块，取值有：
<li> waf ：托管规则模块；</li>
<li> rate：自定义规则模块。</li>
 * @method string getTemplateId() 获取模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
 * @method void setTemplateId(string $TemplateId) 设置模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
 */
class CreateSecurityDropPageRequest extends AbstractModel
{
    /**
     * @var string 站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     */
    public $ZoneId;

    /**
     * @var string 子域名/应用名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     */
    public $Entity;

    /**
     * @var string 自定义页面的文件名。
     */
    public $Name;

    /**
     * @var string 自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
     */
    public $Content;

    /**
     * @var string 上传的类型，取值有：
<li> file：将页面文件内容进行urlencode编码，填入Content字段；</li>
<li> url：将待上传的url地址进行urlencode编码，填入Content字段，即时下载，内容不会自动更新。</li>
     */
    public $Type;

    /**
     * @var string 页面所属的模块，取值有：
<li> waf ：托管规则模块；</li>
<li> rate：自定义规则模块。</li>
     */
    public $Module;

    /**
     * @var string 模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
     */
    public $TemplateId;

    /**
     * @param string $ZoneId 站点Id。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     * @param string $Entity 子域名/应用名。当使用ZoneId和Entity时可不填写TemplateId，否则必须填写TemplateId。
     * @param string $Name 自定义页面的文件名。
     * @param string $Content 自定义页面的内容，本字段的内容需要将数据经过urlencode后传入。
     * @param string $Type 上传的类型，取值有：
<li> file：将页面文件内容进行urlencode编码，填入Content字段；</li>
<li> url：将待上传的url地址进行urlencode编码，填入Content字段，即时下载，内容不会自动更新。</li>
     * @param string $Module 页面所属的模块，取值有：
<li> waf ：托管规则模块；</li>
<li> rate：自定义规则模块。</li>
     * @param string $TemplateId 模板Id。当使用模板Id时可不填ZoneId和Entity，否则必须填写ZoneId和Entity。
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

        if (array_key_exists("Entity",$param) and $param["Entity"] !== null) {
            $this->Entity = $param["Entity"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }
    }
}
