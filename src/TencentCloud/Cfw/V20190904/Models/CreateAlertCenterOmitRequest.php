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
 * CreateAlertCenterOmit请求参数结构体
 *
 * @method array getHandleIdList() 获取<p>直接处置的记录 ID 列表，公共请求结构要求提供。TableType=AlertTable 时元素为告警日志 logid；TableType=InterceptionTable 时元素为拦截记录 unique_id。处理时会与 HandleEventIdList 解析出的日志 ID 合并，再删除空字符串并去重；因此仅按聚合事件处置时可传 [""] 作为空占位。HandleIdList 与 HandleEventIdList 不能同时为空。</p>
 * @method void setHandleIdList(array $HandleIdList) 设置<p>直接处置的记录 ID 列表，公共请求结构要求提供。TableType=AlertTable 时元素为告警日志 logid；TableType=InterceptionTable 时元素为拦截记录 unique_id。处理时会与 HandleEventIdList 解析出的日志 ID 合并，再删除空字符串并去重；因此仅按聚合事件处置时可传 [""] 作为空占位。HandleIdList 与 HandleEventIdList 不能同时为空。</p>
 * @method string getTableType() 获取<p>必填的忽略数据来源，只接受 AlertTable 或 InterceptionTable。AlertTable 更新租户告警表中 logid 命中的记录；InterceptionTable 更新租户拦截表中 unique_id 命中的记录。字段没有默认值，缺失、空字符串或其它值均返回参数错误。</p>
 * @method void setTableType(string $TableType) 设置<p>必填的忽略数据来源，只接受 AlertTable 或 InterceptionTable。AlertTable 更新租户告警表中 logid 命中的记录；InterceptionTable 更新租户拦截表中 unique_id 命中的记录。字段没有默认值，缺失、空字符串或其它值均返回参数错误。</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
 * @method array getHandleEventIdList() 获取<p>可选的告警聚合事件 ID 列表。处理时逐个事件 ID 查询其对应的告警日志 logid，并将查询结果并入 HandleIdList；无法解析的事件 ID 不会产生目标 ID。该解析不会改写 TableType：若 TableType=InterceptionTable，解析出的 logid 仍会作为 unique_id 查询拦截表。字段可省略或传空数组，但 HandleIdList 与本字段不能同时为空；若最终合并、去空和去重后没有目标 ID，业务状态为失败。</p>
 * @method void setHandleEventIdList(array $HandleEventIdList) 设置<p>可选的告警聚合事件 ID 列表。处理时逐个事件 ID 查询其对应的告警日志 logid，并将查询结果并入 HandleIdList；无法解析的事件 ID 不会产生目标 ID。该解析不会改写 TableType：若 TableType=InterceptionTable，解析出的 logid 仍会作为 unique_id 查询拦截表。字段可省略或传空数组，但 HandleIdList 与本字段不能同时为空；若最终合并、去空和去重后没有目标 ID，业务状态为失败。</p>
 */
class CreateAlertCenterOmitRequest extends AbstractModel
{
    /**
     * @var array <p>直接处置的记录 ID 列表，公共请求结构要求提供。TableType=AlertTable 时元素为告警日志 logid；TableType=InterceptionTable 时元素为拦截记录 unique_id。处理时会与 HandleEventIdList 解析出的日志 ID 合并，再删除空字符串并去重；因此仅按聚合事件处置时可传 [""] 作为空占位。HandleIdList 与 HandleEventIdList 不能同时为空。</p>
     */
    public $HandleIdList;

    /**
     * @var string <p>必填的忽略数据来源，只接受 AlertTable 或 InterceptionTable。AlertTable 更新租户告警表中 logid 命中的记录；InterceptionTable 更新租户拦截表中 unique_id 命中的记录。字段没有默认值，缺失、空字符串或其它值均返回参数错误。</p>
     */
    public $TableType;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var array <p>可选的告警聚合事件 ID 列表。处理时逐个事件 ID 查询其对应的告警日志 logid，并将查询结果并入 HandleIdList；无法解析的事件 ID 不会产生目标 ID。该解析不会改写 TableType：若 TableType=InterceptionTable，解析出的 logid 仍会作为 unique_id 查询拦截表。字段可省略或传空数组，但 HandleIdList 与本字段不能同时为空；若最终合并、去空和去重后没有目标 ID，业务状态为失败。</p>
     */
    public $HandleEventIdList;

    /**
     * @param array $HandleIdList <p>直接处置的记录 ID 列表，公共请求结构要求提供。TableType=AlertTable 时元素为告警日志 logid；TableType=InterceptionTable 时元素为拦截记录 unique_id。处理时会与 HandleEventIdList 解析出的日志 ID 合并，再删除空字符串并去重；因此仅按聚合事件处置时可传 [""] 作为空占位。HandleIdList 与 HandleEventIdList 不能同时为空。</p>
     * @param string $TableType <p>必填的忽略数据来源，只接受 AlertTable 或 InterceptionTable。AlertTable 更新租户告警表中 logid 命中的记录；InterceptionTable 更新租户拦截表中 unique_id 命中的记录。字段没有默认值，缺失、空字符串或其它值均返回参数错误。</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>。
     * @param array $HandleEventIdList <p>可选的告警聚合事件 ID 列表。处理时逐个事件 ID 查询其对应的告警日志 logid，并将查询结果并入 HandleIdList；无法解析的事件 ID 不会产生目标 ID。该解析不会改写 TableType：若 TableType=InterceptionTable，解析出的 logid 仍会作为 unique_id 查询拦截表。字段可省略或传空数组，但 HandleIdList 与本字段不能同时为空；若最终合并、去空和去重后没有目标 ID，业务状态为失败。</p>
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
        if (array_key_exists("HandleIdList",$param) and $param["HandleIdList"] !== null) {
            $this->HandleIdList = $param["HandleIdList"];
        }

        if (array_key_exists("TableType",$param) and $param["TableType"] !== null) {
            $this->TableType = $param["TableType"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("HandleEventIdList",$param) and $param["HandleEventIdList"] !== null) {
            $this->HandleEventIdList = $param["HandleEventIdList"];
        }
    }
}
