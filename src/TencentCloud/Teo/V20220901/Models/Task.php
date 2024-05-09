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
 * 内容管理任务结果
 *
 * @method string getJobId() 获取任务 ID。
 * @method void setJobId(string $JobId) 设置任务 ID。
 * @method string getTarget() 获取资源。
 * @method void setTarget(string $Target) 设置资源。
 * @method string getType() 获取任务类型。
 * @method void setType(string $Type) 设置任务类型。
 * @method string getMethod() 获取节点缓存清除方法，取值有：
<li>invalidate：标记过期，用户请求时触发回源校验，即发送带有 If-None-Match 和 If-Modified-Since 头部的 HTTP 条件请求。若源站响应 200，则节点会回源拉取新的资源并更新缓存；若源站响应 304，则节点不会更新缓存；</li>
<li>delete：直接删除节点缓存，用户请求时触发回源拉取资源。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMethod(string $Method) 设置节点缓存清除方法，取值有：
<li>invalidate：标记过期，用户请求时触发回源校验，即发送带有 If-None-Match 和 If-Modified-Since 头部的 HTTP 条件请求。若源站响应 200，则节点会回源拉取新的资源并更新缓存；若源站响应 304，则节点不会更新缓存；</li>
<li>delete：直接删除节点缓存，用户请求时触发回源拉取资源。</li>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取状态。取值有：
<li>processing：处理中；</li>
<li>success：成功；</li>
<li> failed：失败；</li>
<li>timeout：超时。</li>
 * @method void setStatus(string $Status) 设置状态。取值有：
<li>processing：处理中；</li>
<li>success：成功；</li>
<li> failed：失败；</li>
<li>timeout：超时。</li>
 * @method string getCreateTime() 获取任务创建时间。
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间。
 * @method string getUpdateTime() 获取任务完成时间。
 * @method void setUpdateTime(string $UpdateTime) 设置任务完成时间。
 */
class Task extends AbstractModel
{
    /**
     * @var string 任务 ID。
     */
    public $JobId;

    /**
     * @var string 资源。
     */
    public $Target;

    /**
     * @var string 任务类型。
     */
    public $Type;

    /**
     * @var string 节点缓存清除方法，取值有：
<li>invalidate：标记过期，用户请求时触发回源校验，即发送带有 If-None-Match 和 If-Modified-Since 头部的 HTTP 条件请求。若源站响应 200，则节点会回源拉取新的资源并更新缓存；若源站响应 304，则节点不会更新缓存；</li>
<li>delete：直接删除节点缓存，用户请求时触发回源拉取资源。</li>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Method;

    /**
     * @var string 状态。取值有：
<li>processing：处理中；</li>
<li>success：成功；</li>
<li> failed：失败；</li>
<li>timeout：超时。</li>
     */
    public $Status;

    /**
     * @var string 任务创建时间。
     */
    public $CreateTime;

    /**
     * @var string 任务完成时间。
     */
    public $UpdateTime;

    /**
     * @param string $JobId 任务 ID。
     * @param string $Target 资源。
     * @param string $Type 任务类型。
     * @param string $Method 节点缓存清除方法，取值有：
<li>invalidate：标记过期，用户请求时触发回源校验，即发送带有 If-None-Match 和 If-Modified-Since 头部的 HTTP 条件请求。若源站响应 200，则节点会回源拉取新的资源并更新缓存；若源站响应 304，则节点不会更新缓存；</li>
<li>delete：直接删除节点缓存，用户请求时触发回源拉取资源。</li>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 状态。取值有：
<li>processing：处理中；</li>
<li>success：成功；</li>
<li> failed：失败；</li>
<li>timeout：超时。</li>
     * @param string $CreateTime 任务创建时间。
     * @param string $UpdateTime 任务完成时间。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
