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
 * AddAclRule请求参数结构体
 *
 * @method array getRules() 获取待添加的互联网边界规则列表，不能为空。每条规则均须满足方向、访问源和目的、动作、范围、协议端口及模板限制；整个请求还须满足规则配额和可生效规则数量限制。账号相关值必须来自只读查询：地址模板调用 DescribeAddressTemplateList，请求用 TemplateType=1 或 5 过滤，并确认返回项 Data[].Type 为 1 或 5；将 Data[].Uuid（mb_ 前缀）写入对应 Content，不要使用 Data[].TemplateId（ip-/dm- 前缀）。协议端口模板请求用 TemplateType=6 过滤，并将 Data[].TemplateId（pp- 前缀）写入 ParamTemplateId。资产实例调用 DescribeCfwAssets，解析返回结果后使用 assets[].instance_id；资产分组调用 DescribeResourceGroupNew，传 QueryType=resource、GroupId="0"、ShowType=all，解析返回结果后使用 GroupId；资源标签传 QueryType=tag，跳过“全部资产”根节点，以一级节点 GroupName 为 Key、所选二级子节点 GroupName 为 Value 构造 JSON，不要写入 GroupId。地域调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，并使用 Data[].RegionCode。不得使用展示名称或自行拼接。覆盖导入的范围仅由首条规则的 Direction 决定。
 * @method void setRules(array $Rules) 设置待添加的互联网边界规则列表，不能为空。每条规则均须满足方向、访问源和目的、动作、范围、协议端口及模板限制；整个请求还须满足规则配额和可生效规则数量限制。账号相关值必须来自只读查询：地址模板调用 DescribeAddressTemplateList，请求用 TemplateType=1 或 5 过滤，并确认返回项 Data[].Type 为 1 或 5；将 Data[].Uuid（mb_ 前缀）写入对应 Content，不要使用 Data[].TemplateId（ip-/dm- 前缀）。协议端口模板请求用 TemplateType=6 过滤，并将 Data[].TemplateId（pp- 前缀）写入 ParamTemplateId。资产实例调用 DescribeCfwAssets，解析返回结果后使用 assets[].instance_id；资产分组调用 DescribeResourceGroupNew，传 QueryType=resource、GroupId="0"、ShowType=all，解析返回结果后使用 GroupId；资源标签传 QueryType=tag，跳过“全部资产”根节点，以一级节点 GroupName 为 Key、所选二级子节点 GroupName 为 Value 构造 JSON，不要写入 GroupId。地域调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，并使用 Data[].RegionCode。不得使用展示名称或自行拼接。覆盖导入的范围仅由首条规则的 Direction 决定。
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method string getFrom() 获取添加方式。省略或空字符串表示普通新增；insert_rule 表示指定位置新增；batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除首条规则 Direction 对应的现有可操作规则后再添加 Rules，添加失败时已删除的规则不会恢复，风险极高。覆盖范围仅由首条规则决定，调用方应确保 Rules 的 Direction 一致。仅支持上述取值。
 * @method void setFrom(string $From) 设置添加方式。省略或空字符串表示普通新增；insert_rule 表示指定位置新增；batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除首条规则 Direction 对应的现有可操作规则后再添加 Rules，添加失败时已删除的规则不会恢复，风险极高。覆盖范围仅由首条规则决定，调用方应确保 Rules 的 Direction 一致。仅支持上述取值。
 */
class AddAclRuleRequest extends AbstractModel
{
    /**
     * @var array 待添加的互联网边界规则列表，不能为空。每条规则均须满足方向、访问源和目的、动作、范围、协议端口及模板限制；整个请求还须满足规则配额和可生效规则数量限制。账号相关值必须来自只读查询：地址模板调用 DescribeAddressTemplateList，请求用 TemplateType=1 或 5 过滤，并确认返回项 Data[].Type 为 1 或 5；将 Data[].Uuid（mb_ 前缀）写入对应 Content，不要使用 Data[].TemplateId（ip-/dm- 前缀）。协议端口模板请求用 TemplateType=6 过滤，并将 Data[].TemplateId（pp- 前缀）写入 ParamTemplateId。资产实例调用 DescribeCfwAssets，解析返回结果后使用 assets[].instance_id；资产分组调用 DescribeResourceGroupNew，传 QueryType=resource、GroupId="0"、ShowType=all，解析返回结果后使用 GroupId；资源标签传 QueryType=tag，跳过“全部资产”根节点，以一级节点 GroupName 为 Key、所选二级子节点 GroupName 为 Value 构造 JSON，不要写入 GroupId。地域调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，并使用 Data[].RegionCode。不得使用展示名称或自行拼接。覆盖导入的范围仅由首条规则的 Direction 决定。
     */
    public $Rules;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var string 添加方式。省略或空字符串表示普通新增；insert_rule 表示指定位置新增；batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除首条规则 Direction 对应的现有可操作规则后再添加 Rules，添加失败时已删除的规则不会恢复，风险极高。覆盖范围仅由首条规则决定，调用方应确保 Rules 的 Direction 一致。仅支持上述取值。
     */
    public $From;

    /**
     * @param array $Rules 待添加的互联网边界规则列表，不能为空。每条规则均须满足方向、访问源和目的、动作、范围、协议端口及模板限制；整个请求还须满足规则配额和可生效规则数量限制。账号相关值必须来自只读查询：地址模板调用 DescribeAddressTemplateList，请求用 TemplateType=1 或 5 过滤，并确认返回项 Data[].Type 为 1 或 5；将 Data[].Uuid（mb_ 前缀）写入对应 Content，不要使用 Data[].TemplateId（ip-/dm- 前缀）。协议端口模板请求用 TemplateType=6 过滤，并将 Data[].TemplateId（pp- 前缀）写入 ParamTemplateId。资产实例调用 DescribeCfwAssets，解析返回结果后使用 assets[].instance_id；资产分组调用 DescribeResourceGroupNew，传 QueryType=resource、GroupId="0"、ShowType=all，解析返回结果后使用 GroupId；资源标签传 QueryType=tag，跳过“全部资产”根节点，以一级节点 GroupName 为 Key、所选二级子节点 GroupName 为 Value 构造 JSON，不要写入 GroupId。地域调用 DescribeAclRegInfo：Scope=serial 传 FwType=["SERIAL"]，Scope=side 传 FwType=["BYPASS"]，Scope=all 同时传两项，并使用 Data[].RegionCode。不得使用展示名称或自行拼接。覆盖导入的范围仅由首条规则的 Direction 决定。
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param string $From 添加方式。省略或空字符串表示普通新增；insert_rule 表示指定位置新增；batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除首条规则 Direction 对应的现有可操作规则后再添加 Rules，添加失败时已删除的规则不会恢复，风险极高。覆盖范围仅由首条规则决定，调用方应确保 Rules 的 Direction 一致。仅支持上述取值。
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

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }
    }
}
