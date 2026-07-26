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
 * AddEnterpriseSecurityGroupRules请求参数结构体
 *
 * @method array getData() 获取待创建的规则数组，不能为空。每条规则必须提供访问源、访问目的、动作、非空描述和字符串 OrderIndex。未使用 ServiceTemplateId 时必须提供 Protocol 和 Port；使用 ServiceTemplateId 时二者可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 可省略，默认使用 SG。
 * @method void setData(array $Data) 设置待创建的规则数组，不能为空。每条规则必须提供访问源、访问目的、动作、非空描述和字符串 OrderIndex。未使用 ServiceTemplateId 时必须提供 Protocol 和 Port；使用 ServiceTemplateId 时二者可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 可省略，默认使用 SG。
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method string getClientToken() 获取保留字段，不提供幂等保证；重复请求仍可能重复创建规则，建议省略。
 * @method void setClientToken(string $ClientToken) 设置保留字段，不提供幂等保证；重复请求仍可能重复创建规则，建议省略。
 * @method string getFrom() 获取添加方式。batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除当前账号的全部可操作企业安全组规则后再添加 Data，添加失败时已删除的规则不会恢复，风险极高。两种批量导入都会使用 Data.Enable。其它值按普通新增处理。
 * @method void setFrom(string $From) 设置添加方式。batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除当前账号的全部可操作企业安全组规则后再添加 Data，添加失败时已删除的规则不会恢复，风险极高。两种批量导入都会使用 Data.Enable。其它值按普通新增处理。
 * @method integer getIsDelay() 获取延迟生效标记。1 表示将规则保留为待生效状态，0 表示按账号当前发布设置处理；省略等同于 0。账号停止自动发布时，规则仍保持待生效。
 * @method void setIsDelay(integer $IsDelay) 设置延迟生效标记。1 表示将规则保留为待生效状态，0 表示按账号当前发布设置处理；省略等同于 0。账号停止自动发布时，规则仍保持待生效。
 * @method integer getIsUseId() 获取规则 ID 复用标记。1 表示使用每条规则的 Data.Id，此时 Data.Id 传十进制数字字符串；其它值由系统分配 ID。重复 ID 会导致创建失败。
 * @method void setIsUseId(integer $IsUseId) 设置规则 ID 复用标记。1 表示使用每条规则的 Data.Id，此时 Data.Id 传十进制数字字符串；其它值由系统分配 ID。重复 ID 会导致创建失败。
 * @method integer getType() 获取添加位置类型，可省略，默认为 0：0 添加到末尾，1 添加到最前，2 从指定顺序插入。Type=0 或 1 按 Data 数组顺序确定最终顺序；Type=2 使用首条 Data.OrderIndex 作为插入位置，超过当前最大顺序时添加到末尾。
 * @method void setType(integer $Type) 设置添加位置类型，可省略，默认为 0：0 添加到末尾，1 添加到最前，2 从指定顺序插入。Type=0 或 1 按 Data 数组顺序确定最终顺序；Type=2 使用首条 Data.OrderIndex 作为插入位置，超过当前最大顺序时添加到末尾。
 */
class AddEnterpriseSecurityGroupRulesRequest extends AbstractModel
{
    /**
     * @var array 待创建的规则数组，不能为空。每条规则必须提供访问源、访问目的、动作、非空描述和字符串 OrderIndex。未使用 ServiceTemplateId 时必须提供 Protocol 和 Port；使用 ServiceTemplateId 时二者可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 可省略，默认使用 SG。
     */
    public $Data;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var string 保留字段，不提供幂等保证；重复请求仍可能重复创建规则，建议省略。
     */
    public $ClientToken;

    /**
     * @var string 添加方式。batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除当前账号的全部可操作企业安全组规则后再添加 Data，添加失败时已删除的规则不会恢复，风险极高。两种批量导入都会使用 Data.Enable。其它值按普通新增处理。
     */
    public $From;

    /**
     * @var integer 延迟生效标记。1 表示将规则保留为待生效状态，0 表示按账号当前发布设置处理；省略等同于 0。账号停止自动发布时，规则仍保持待生效。
     */
    public $IsDelay;

    /**
     * @var integer 规则 ID 复用标记。1 表示使用每条规则的 Data.Id，此时 Data.Id 传十进制数字字符串；其它值由系统分配 ID。重复 ID 会导致创建失败。
     */
    public $IsUseId;

    /**
     * @var integer 添加位置类型，可省略，默认为 0：0 添加到末尾，1 添加到最前，2 从指定顺序插入。Type=0 或 1 按 Data 数组顺序确定最终顺序；Type=2 使用首条 Data.OrderIndex 作为插入位置，超过当前最大顺序时添加到末尾。
     */
    public $Type;

    /**
     * @param array $Data 待创建的规则数组，不能为空。每条规则必须提供访问源、访问目的、动作、非空描述和字符串 OrderIndex。未使用 ServiceTemplateId 时必须提供 Protocol 和 Port；使用 ServiceTemplateId 时二者可同时省略或留空，如填写非空值则必须为 Protocol=ANY、Port=-1/-1。Scope 可省略，默认使用 SG。
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param string $ClientToken 保留字段，不提供幂等保证；重复请求仍可能重复创建规则，建议省略。
     * @param string $From 添加方式。batch_import 表示非覆盖批量导入；batch_import_cover 表示覆盖导入，会删除当前账号的全部可操作企业安全组规则后再添加 Data，添加失败时已删除的规则不会恢复，风险极高。两种批量导入都会使用 Data.Enable。其它值按普通新增处理。
     * @param integer $IsDelay 延迟生效标记。1 表示将规则保留为待生效状态，0 表示按账号当前发布设置处理；省略等同于 0。账号停止自动发布时，规则仍保持待生效。
     * @param integer $IsUseId 规则 ID 复用标记。1 表示使用每条规则的 Data.Id，此时 Data.Id 传十进制数字字符串；其它值由系统分配 ID。重复 ID 会导致创建失败。
     * @param integer $Type 添加位置类型，可省略，默认为 0：0 添加到末尾，1 添加到最前，2 从指定顺序插入。Type=0 或 1 按 Data 数组顺序确定最终顺序；Type=2 使用首条 Data.OrderIndex 作为插入位置，超过当前最大顺序时添加到末尾。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new SecurityGroupRule();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("IsDelay",$param) and $param["IsDelay"] !== null) {
            $this->IsDelay = $param["IsDelay"];
        }

        if (array_key_exists("IsUseId",$param) and $param["IsUseId"] !== null) {
            $this->IsUseId = $param["IsUseId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
