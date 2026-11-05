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
 * BindSecurityTemplateToEntity请求参数结构体
 *
 * @method string getZoneId() 获取<p>需要绑定或解绑的域名所属站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>需要绑定或解绑的域名所属站点 ID。</p>
 * @method array getEntities() 获取<p>绑定至策略模板（或者从策略模板解绑）的域名列表。</p>
 * @method void setEntities(array $Entities) 设置<p>绑定至策略模板（或者从策略模板解绑）的域名列表。</p>
 * @method string getOperate() 获取<p>绑定或解绑操作选项。</p><p>枚举值：</p><ul><li>bind： 绑定域名至策略模板。</li><li>unbind-keep-policy： 将域名从策略模板解绑，解绑时保留当前策略。</li><li>unbind-use-default： 将域名从策略模板解绑，并使用默认空白策略。</li></ul>
 * @method void setOperate(string $Operate) 设置<p>绑定或解绑操作选项。</p><p>枚举值：</p><ul><li>bind： 绑定域名至策略模板。</li><li>unbind-keep-policy： 将域名从策略模板解绑，解绑时保留当前策略。</li><li>unbind-use-default： 将域名从策略模板解绑，并使用默认空白策略。</li></ul>
 * @method string getTemplateId() 获取<p>指定绑定或解绑的策略模板 ID 或站点全局策略。<li>如需绑定至策略模板，或从策略模板解绑，请指定策略模板 ID；</li><li>如需绑定至站点全局策略，或从站点全局策略解绑，请使用 @ZoneLevel@domain 参数值。</li></p><p>注意：解绑后，域名将使用独立策略，并单独计算规则配额，请确保解绑前套餐规则配额充足。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>指定绑定或解绑的策略模板 ID 或站点全局策略。<li>如需绑定至策略模板，或从策略模板解绑，请指定策略模板 ID；</li><li>如需绑定至站点全局策略，或从站点全局策略解绑，请使用 @ZoneLevel@domain 参数值。</li></p><p>注意：解绑后，域名将使用独立策略，并单独计算规则配额，请确保解绑前套餐规则配额充足。</p>
 * @method boolean getOverWrite() 获取<p>传入域名如果已经绑定了策略模板（含站点级防护策略），通过设置该参数表示是否替换该模板。</p><p>枚举值：</p><ul><li>true： 替换域名当前绑定的模板。</li><li>false： 不替换域名当前绑定的模板。</li></ul><p>默认值：true</p><p>注意：当设置为 false 时，若传入域名已经绑定策略模板，API  将返回错误；站点级防护策略也为一种策略模板。</p>
 * @method void setOverWrite(boolean $OverWrite) 设置<p>传入域名如果已经绑定了策略模板（含站点级防护策略），通过设置该参数表示是否替换该模板。</p><p>枚举值：</p><ul><li>true： 替换域名当前绑定的模板。</li><li>false： 不替换域名当前绑定的模板。</li></ul><p>默认值：true</p><p>注意：当设置为 false 时，若传入域名已经绑定策略模板，API  将返回错误；站点级防护策略也为一种策略模板。</p>
 */
class BindSecurityTemplateToEntityRequest extends AbstractModel
{
    /**
     * @var string <p>需要绑定或解绑的域名所属站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var array <p>绑定至策略模板（或者从策略模板解绑）的域名列表。</p>
     */
    public $Entities;

    /**
     * @var string <p>绑定或解绑操作选项。</p><p>枚举值：</p><ul><li>bind： 绑定域名至策略模板。</li><li>unbind-keep-policy： 将域名从策略模板解绑，解绑时保留当前策略。</li><li>unbind-use-default： 将域名从策略模板解绑，并使用默认空白策略。</li></ul>
     */
    public $Operate;

    /**
     * @var string <p>指定绑定或解绑的策略模板 ID 或站点全局策略。<li>如需绑定至策略模板，或从策略模板解绑，请指定策略模板 ID；</li><li>如需绑定至站点全局策略，或从站点全局策略解绑，请使用 @ZoneLevel@domain 参数值。</li></p><p>注意：解绑后，域名将使用独立策略，并单独计算规则配额，请确保解绑前套餐规则配额充足。</p>
     */
    public $TemplateId;

    /**
     * @var boolean <p>传入域名如果已经绑定了策略模板（含站点级防护策略），通过设置该参数表示是否替换该模板。</p><p>枚举值：</p><ul><li>true： 替换域名当前绑定的模板。</li><li>false： 不替换域名当前绑定的模板。</li></ul><p>默认值：true</p><p>注意：当设置为 false 时，若传入域名已经绑定策略模板，API  将返回错误；站点级防护策略也为一种策略模板。</p>
     */
    public $OverWrite;

    /**
     * @param string $ZoneId <p>需要绑定或解绑的域名所属站点 ID。</p>
     * @param array $Entities <p>绑定至策略模板（或者从策略模板解绑）的域名列表。</p>
     * @param string $Operate <p>绑定或解绑操作选项。</p><p>枚举值：</p><ul><li>bind： 绑定域名至策略模板。</li><li>unbind-keep-policy： 将域名从策略模板解绑，解绑时保留当前策略。</li><li>unbind-use-default： 将域名从策略模板解绑，并使用默认空白策略。</li></ul>
     * @param string $TemplateId <p>指定绑定或解绑的策略模板 ID 或站点全局策略。<li>如需绑定至策略模板，或从策略模板解绑，请指定策略模板 ID；</li><li>如需绑定至站点全局策略，或从站点全局策略解绑，请使用 @ZoneLevel@domain 参数值。</li></p><p>注意：解绑后，域名将使用独立策略，并单独计算规则配额，请确保解绑前套餐规则配额充足。</p>
     * @param boolean $OverWrite <p>传入域名如果已经绑定了策略模板（含站点级防护策略），通过设置该参数表示是否替换该模板。</p><p>枚举值：</p><ul><li>true： 替换域名当前绑定的模板。</li><li>false： 不替换域名当前绑定的模板。</li></ul><p>默认值：true</p><p>注意：当设置为 false 时，若传入域名已经绑定策略模板，API  将返回错误；站点级防护策略也为一种策略模板。</p>
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

        if (array_key_exists("Entities",$param) and $param["Entities"] !== null) {
            $this->Entities = $param["Entities"];
        }

        if (array_key_exists("Operate",$param) and $param["Operate"] !== null) {
            $this->Operate = $param["Operate"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("OverWrite",$param) and $param["OverWrite"] !== null) {
            $this->OverWrite = $param["OverWrite"];
        }
    }
}
