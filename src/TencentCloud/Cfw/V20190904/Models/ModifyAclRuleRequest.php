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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAclRule请求参数结构体
 *
 * @method array getRules() 获取待修改的规则数组，必须恰好包含一条完整规则，不是局部更新。调用 DescribeCfwRules，传 RuleType=border、目标 RuleUuid、ExpandNames=false 获取原规则。字段转换：uuid→Uuid，sequence→OrderIndex，src_ip→SourceContent，src_type→SourceType，dst_content→TargetContent，dst_type→TargetType，dst_port→Port，detail→Description；action 的 0、1、2 分别转换为 log、drop、accept，enabled 的布尔值转换为字符串 true、false；protocol、direction、scope、param_template_id、rule_source、log_id 分别写入 Protocol、Direction、Scope、ParamTemplateId、RuleSource、LogId。src_type 和 dst_type 的 1、2、3、4/5、6、8、9、10、100、101、102 分别对应 net、url、domain、template、instance、tag、dnsparse、domainiptwoverify、group、location、vendor；仅当转换结果属于对应 SourceType 或 TargetType 的有效取值时才能提交。用户要求改为某地域时，调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，按用户地域名称匹配 Data[].RegionName，并将对应 Data[].RegionCode 写入 location 类型的 Content；不得使用 ap-guangzhou 等云资源地域、中文地域名称或自行拼接代码。vendor 类型的 Content 仅使用 tencent、aliyun、aws、huawei、azure 或 all，不使用“腾讯云”等展示名称。省略的可写字段不会继承旧值。
 * @method void setRules(array $Rules) 设置待修改的规则数组，必须恰好包含一条完整规则，不是局部更新。调用 DescribeCfwRules，传 RuleType=border、目标 RuleUuid、ExpandNames=false 获取原规则。字段转换：uuid→Uuid，sequence→OrderIndex，src_ip→SourceContent，src_type→SourceType，dst_content→TargetContent，dst_type→TargetType，dst_port→Port，detail→Description；action 的 0、1、2 分别转换为 log、drop、accept，enabled 的布尔值转换为字符串 true、false；protocol、direction、scope、param_template_id、rule_source、log_id 分别写入 Protocol、Direction、Scope、ParamTemplateId、RuleSource、LogId。src_type 和 dst_type 的 1、2、3、4/5、6、8、9、10、100、101、102 分别对应 net、url、domain、template、instance、tag、dnsparse、domainiptwoverify、group、location、vendor；仅当转换结果属于对应 SourceType 或 TargetType 的有效取值时才能提交。用户要求改为某地域时，调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，按用户地域名称匹配 Data[].RegionName，并将对应 Data[].RegionCode 写入 location 类型的 Content；不得使用 ap-guangzhou 等云资源地域、中文地域名称或自行拼接代码。vendor 类型的 Content 仅使用 tencent、aliyun、aws、huawei、azure 或 all，不使用“腾讯云”等展示名称。省略的可写字段不会继承旧值。
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 */
class ModifyAclRuleRequest extends AbstractModel
{
    /**
     * @var array 待修改的规则数组，必须恰好包含一条完整规则，不是局部更新。调用 DescribeCfwRules，传 RuleType=border、目标 RuleUuid、ExpandNames=false 获取原规则。字段转换：uuid→Uuid，sequence→OrderIndex，src_ip→SourceContent，src_type→SourceType，dst_content→TargetContent，dst_type→TargetType，dst_port→Port，detail→Description；action 的 0、1、2 分别转换为 log、drop、accept，enabled 的布尔值转换为字符串 true、false；protocol、direction、scope、param_template_id、rule_source、log_id 分别写入 Protocol、Direction、Scope、ParamTemplateId、RuleSource、LogId。src_type 和 dst_type 的 1、2、3、4/5、6、8、9、10、100、101、102 分别对应 net、url、domain、template、instance、tag、dnsparse、domainiptwoverify、group、location、vendor；仅当转换结果属于对应 SourceType 或 TargetType 的有效取值时才能提交。用户要求改为某地域时，调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，按用户地域名称匹配 Data[].RegionName，并将对应 Data[].RegionCode 写入 location 类型的 Content；不得使用 ap-guangzhou 等云资源地域、中文地域名称或自行拼接代码。vendor 类型的 Content 仅使用 tencent、aliyun、aws、huawei、azure 或 all，不使用“腾讯云”等展示名称。省略的可写字段不会继承旧值。
     */
    public $Rules;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @param array $Rules 待修改的规则数组，必须恰好包含一条完整规则，不是局部更新。调用 DescribeCfwRules，传 RuleType=border、目标 RuleUuid、ExpandNames=false 获取原规则。字段转换：uuid→Uuid，sequence→OrderIndex，src_ip→SourceContent，src_type→SourceType，dst_content→TargetContent，dst_type→TargetType，dst_port→Port，detail→Description；action 的 0、1、2 分别转换为 log、drop、accept，enabled 的布尔值转换为字符串 true、false；protocol、direction、scope、param_template_id、rule_source、log_id 分别写入 Protocol、Direction、Scope、ParamTemplateId、RuleSource、LogId。src_type 和 dst_type 的 1、2、3、4/5、6、8、9、10、100、101、102 分别对应 net、url、domain、template、instance、tag、dnsparse、domainiptwoverify、group、location、vendor；仅当转换结果属于对应 SourceType 或 TargetType 的有效取值时才能提交。用户要求改为某地域时，调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，按用户地域名称匹配 Data[].RegionName，并将对应 Data[].RegionCode 写入 location 类型的 Content；不得使用 ap-guangzhou 等云资源地域、中文地域名称或自行拼接代码。vendor 类型的 Content 仅使用 tencent、aliyun、aws、huawei、azure 或 all，不使用“腾讯云”等展示名称。省略的可写字段不会继承旧值。
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
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
        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new CreateRuleItem();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }
    }
}
