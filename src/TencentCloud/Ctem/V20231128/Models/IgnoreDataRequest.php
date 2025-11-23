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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * IgnoreData请求参数结构体
 *
 * @method array getIds() 获取ID列表
 * @method void setIds(array $Ids) 设置ID列表
 * @method string getModule() 获取模块，包括：enterprise：企业架构，domain：主域名，sub_domain：子域名，asset：IP资产，port：端口服务，http：HTTP资产，vul：漏洞信息，app：APP，wechat_applet：微信小程序，wechat_official_account：微信公众号，github：Github信息泄露，manage：管理后台暴露，config：目录爆破，dark_web：暗网泄露，net_disk：文库网盘泄露，supply_chain：供应链，weak_password：弱口令，sensitive_info：敏感信息泄露
 * @method void setModule(string $Module) 设置模块，包括：enterprise：企业架构，domain：主域名，sub_domain：子域名，asset：IP资产，port：端口服务，http：HTTP资产，vul：漏洞信息，app：APP，wechat_applet：微信小程序，wechat_official_account：微信公众号，github：Github信息泄露，manage：管理后台暴露，config：目录爆破，dark_web：暗网泄露，net_disk：文库网盘泄露，supply_chain：供应链，weak_password：弱口令，sensitive_info：敏感信息泄露
 * @method array getCustomerIdList() 获取企业ID列表，可多选
 * @method void setCustomerIdList(array $CustomerIdList) 设置企业ID列表，可多选
 * @method boolean getIsAggregation() 获取是否聚合数据
 * @method void setIsAggregation(boolean $IsAggregation) 设置是否聚合数据
 * @method boolean getIgnored() 获取是否显示被忽略的数据
 * @method void setIgnored(boolean $Ignored) 设置是否显示被忽略的数据
 * @method boolean getIsAffectOther() 获取是否忽略全部
 * @method void setIsAffectOther(boolean $IsAffectOther) 设置是否忽略全部
 */
class IgnoreDataRequest extends AbstractModel
{
    /**
     * @var array ID列表
     */
    public $Ids;

    /**
     * @var string 模块，包括：enterprise：企业架构，domain：主域名，sub_domain：子域名，asset：IP资产，port：端口服务，http：HTTP资产，vul：漏洞信息，app：APP，wechat_applet：微信小程序，wechat_official_account：微信公众号，github：Github信息泄露，manage：管理后台暴露，config：目录爆破，dark_web：暗网泄露，net_disk：文库网盘泄露，supply_chain：供应链，weak_password：弱口令，sensitive_info：敏感信息泄露
     */
    public $Module;

    /**
     * @var array 企业ID列表，可多选
     */
    public $CustomerIdList;

    /**
     * @var boolean 是否聚合数据
     */
    public $IsAggregation;

    /**
     * @var boolean 是否显示被忽略的数据
     */
    public $Ignored;

    /**
     * @var boolean 是否忽略全部
     */
    public $IsAffectOther;

    /**
     * @param array $Ids ID列表
     * @param string $Module 模块，包括：enterprise：企业架构，domain：主域名，sub_domain：子域名，asset：IP资产，port：端口服务，http：HTTP资产，vul：漏洞信息，app：APP，wechat_applet：微信小程序，wechat_official_account：微信公众号，github：Github信息泄露，manage：管理后台暴露，config：目录爆破，dark_web：暗网泄露，net_disk：文库网盘泄露，supply_chain：供应链，weak_password：弱口令，sensitive_info：敏感信息泄露
     * @param array $CustomerIdList 企业ID列表，可多选
     * @param boolean $IsAggregation 是否聚合数据
     * @param boolean $Ignored 是否显示被忽略的数据
     * @param boolean $IsAffectOther 是否忽略全部
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
        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("CustomerIdList",$param) and $param["CustomerIdList"] !== null) {
            $this->CustomerIdList = $param["CustomerIdList"];
        }

        if (array_key_exists("IsAggregation",$param) and $param["IsAggregation"] !== null) {
            $this->IsAggregation = $param["IsAggregation"];
        }

        if (array_key_exists("Ignored",$param) and $param["Ignored"] !== null) {
            $this->Ignored = $param["Ignored"];
        }

        if (array_key_exists("IsAffectOther",$param) and $param["IsAffectOther"] !== null) {
            $this->IsAffectOther = $param["IsAffectOther"];
        }
    }
}
