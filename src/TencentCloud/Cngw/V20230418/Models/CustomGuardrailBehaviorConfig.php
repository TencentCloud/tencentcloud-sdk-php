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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义安全护栏处理行为配置
 *
 * @method string getDirection() 获取<p>审核方向：input 只审核业务请求，output 只审核业务响应，both 两者均审核；创建默认 input。送审包及审核日志使用 request/response 表示方向，不使用 input/output。</p>
 * @method void setDirection(string $Direction) 设置<p>审核方向：input 只审核业务请求，output 只审核业务响应，both 两者均审核；创建默认 input。送审包及审核日志使用 request/response 表示方向，不使用 input/output。</p>
 * @method string getHandleAction() 获取<p>命中后的处理：block 执行阻断或符合条件的输出替换；observe 仅观察记录命中，不执行命中阻断或替换。创建默认 block。审核调用异常另由 FailureMode 处理，不应把 observe 当作所有故障无条件放行。</p>
 * @method void setHandleAction(string $HandleAction) 设置<p>命中后的处理：block 执行阻断或符合条件的输出替换；observe 仅观察记录命中，不执行命中阻断或替换。创建默认 block。审核调用异常另由 FailureMode 处理，不应把 observe 当作所有故障无条件放行。</p>
 * @method integer getTimeoutMs() 获取<p>审核调用超时，单位毫秒，范围 50～5000，创建默认 500。不是整个模型生成/SSE 连接的总时长限制；流式多批次分别发生审核 HTTP 调用。应按引擎网络及处理耗时设置，示例中的 5000 是显式测试值，不是默认值。</p>
 * @method void setTimeoutMs(integer $TimeoutMs) 设置<p>审核调用超时，单位毫秒，范围 50～5000，创建默认 500。不是整个模型生成/SSE 连接的总时长限制；流式多批次分别发生审核 HTTP 调用。应按引擎网络及处理耗时设置，示例中的 5000 是显式测试值，不是默认值。</p>
 * @method string getFailureMode() 获取<p>审核失败时的策略：open 尝试失败放行（创建默认值，有内容未审核即放行风险）；closed 失败关闭。此项处理网络、超时、响应契约等异常，不改变正常 block 判定。open 不能绕过所有 Relay 安全/生命周期错误，也不保证已派发业务请求可安全重放。</p>
 * @method void setFailureMode(string $FailureMode) 设置<p>审核失败时的策略：open 尝试失败放行（创建默认值，有内容未审核即放行风险）；closed 失败关闭。此项处理网络、超时、响应契约等异常，不改变正常 block 判定。open 不能绕过所有 Relay 安全/生命周期错误，也不保证已派发业务请求可安全重放。</p>
 */
class CustomGuardrailBehaviorConfig extends AbstractModel
{
    /**
     * @var string <p>审核方向：input 只审核业务请求，output 只审核业务响应，both 两者均审核；创建默认 input。送审包及审核日志使用 request/response 表示方向，不使用 input/output。</p>
     */
    public $Direction;

    /**
     * @var string <p>命中后的处理：block 执行阻断或符合条件的输出替换；observe 仅观察记录命中，不执行命中阻断或替换。创建默认 block。审核调用异常另由 FailureMode 处理，不应把 observe 当作所有故障无条件放行。</p>
     */
    public $HandleAction;

    /**
     * @var integer <p>审核调用超时，单位毫秒，范围 50～5000，创建默认 500。不是整个模型生成/SSE 连接的总时长限制；流式多批次分别发生审核 HTTP 调用。应按引擎网络及处理耗时设置，示例中的 5000 是显式测试值，不是默认值。</p>
     */
    public $TimeoutMs;

    /**
     * @var string <p>审核失败时的策略：open 尝试失败放行（创建默认值，有内容未审核即放行风险）；closed 失败关闭。此项处理网络、超时、响应契约等异常，不改变正常 block 判定。open 不能绕过所有 Relay 安全/生命周期错误，也不保证已派发业务请求可安全重放。</p>
     */
    public $FailureMode;

    /**
     * @param string $Direction <p>审核方向：input 只审核业务请求，output 只审核业务响应，both 两者均审核；创建默认 input。送审包及审核日志使用 request/response 表示方向，不使用 input/output。</p>
     * @param string $HandleAction <p>命中后的处理：block 执行阻断或符合条件的输出替换；observe 仅观察记录命中，不执行命中阻断或替换。创建默认 block。审核调用异常另由 FailureMode 处理，不应把 observe 当作所有故障无条件放行。</p>
     * @param integer $TimeoutMs <p>审核调用超时，单位毫秒，范围 50～5000，创建默认 500。不是整个模型生成/SSE 连接的总时长限制；流式多批次分别发生审核 HTTP 调用。应按引擎网络及处理耗时设置，示例中的 5000 是显式测试值，不是默认值。</p>
     * @param string $FailureMode <p>审核失败时的策略：open 尝试失败放行（创建默认值，有内容未审核即放行风险）；closed 失败关闭。此项处理网络、超时、响应契约等异常，不改变正常 block 判定。open 不能绕过所有 Relay 安全/生命周期错误，也不保证已派发业务请求可安全重放。</p>
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
        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }

        if (array_key_exists("HandleAction",$param) and $param["HandleAction"] !== null) {
            $this->HandleAction = $param["HandleAction"];
        }

        if (array_key_exists("TimeoutMs",$param) and $param["TimeoutMs"] !== null) {
            $this->TimeoutMs = $param["TimeoutMs"];
        }

        if (array_key_exists("FailureMode",$param) and $param["FailureMode"] !== null) {
            $this->FailureMode = $param["FailureMode"];
        }
    }
}
