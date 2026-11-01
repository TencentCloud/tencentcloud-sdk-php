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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BYOK 上游模型灰度操作。Set 开启灰度或调整同一候选比例，Promote 全量切换，Rollback 结束灰度并恢复主模型。
 *
 * @method string getOperation() 获取<p>上游模型灰度操作类型。Set：开始灰度或调整同一候选的比例；Promote：全量切换到候选模型并结束灰度；Rollback：保留当前主模型并结束灰度。</p><p>入参限制：仅支持 Set、Promote、Rollback，区分大小写。Promote 和 Rollback 仅允许在灰度中使用，且禁止携带 ModelName、Weight。</p>
 * @method void setOperation(string $Operation) 设置<p>上游模型灰度操作类型。Set：开始灰度或调整同一候选的比例；Promote：全量切换到候选模型并结束灰度；Rollback：保留当前主模型并结束灰度。</p><p>入参限制：仅支持 Set、Promote、Rollback，区分大小写。Promote 和 Rollback 仅允许在灰度中使用，且禁止携带 ModelName、Weight。</p>
 * @method string getModelName() 获取<p>候选上游模型的原始名称，保留名称中的斜杠。</p><p>入参限制：Operation 为 Set 时必填，非空且最长 128 个字符；不能与当前主模型相同，不能占用同一 BYOK 的其他主模型或有效灰度候选名称。Promote、Rollback 禁止传入。</p>
 * @method void setModelName(string $ModelName) 设置<p>候选上游模型的原始名称，保留名称中的斜杠。</p><p>入参限制：Operation 为 Set 时必填，非空且最长 128 个字符；不能与当前主模型相同，不能占用同一 BYOK 的其他主模型或有效灰度候选名称。Promote、Rollback 禁止传入。</p>
 * @method integer getWeight() 获取<p>候选上游模型的灰度流量比例。</p><p>取值范围：[1, 99]</p><p>单位：%</p><p>Set 时必填，无默认值，必须为整数；拒绝 0、100、小数、布尔值及字符串。Promote、Rollback 禁止传入。比例只影响需要重新选择上游的请求，已有有效 Sticky 绑定不迁移，实际流量占比不保证等于配置比例。</p>
 * @method void setWeight(integer $Weight) 设置<p>候选上游模型的灰度流量比例。</p><p>取值范围：[1, 99]</p><p>单位：%</p><p>Set 时必填，无默认值，必须为整数；拒绝 0、100、小数、布尔值及字符串。Promote、Rollback 禁止传入。比例只影响需要重新选择上游的请求，已有有效 Sticky 绑定不迁移，实际流量占比不保证等于配置比例。</p>
 */
class UpstreamRolloutOperation extends AbstractModel
{
    /**
     * @var string <p>上游模型灰度操作类型。Set：开始灰度或调整同一候选的比例；Promote：全量切换到候选模型并结束灰度；Rollback：保留当前主模型并结束灰度。</p><p>入参限制：仅支持 Set、Promote、Rollback，区分大小写。Promote 和 Rollback 仅允许在灰度中使用，且禁止携带 ModelName、Weight。</p>
     */
    public $Operation;

    /**
     * @var string <p>候选上游模型的原始名称，保留名称中的斜杠。</p><p>入参限制：Operation 为 Set 时必填，非空且最长 128 个字符；不能与当前主模型相同，不能占用同一 BYOK 的其他主模型或有效灰度候选名称。Promote、Rollback 禁止传入。</p>
     */
    public $ModelName;

    /**
     * @var integer <p>候选上游模型的灰度流量比例。</p><p>取值范围：[1, 99]</p><p>单位：%</p><p>Set 时必填，无默认值，必须为整数；拒绝 0、100、小数、布尔值及字符串。Promote、Rollback 禁止传入。比例只影响需要重新选择上游的请求，已有有效 Sticky 绑定不迁移，实际流量占比不保证等于配置比例。</p>
     */
    public $Weight;

    /**
     * @param string $Operation <p>上游模型灰度操作类型。Set：开始灰度或调整同一候选的比例；Promote：全量切换到候选模型并结束灰度；Rollback：保留当前主模型并结束灰度。</p><p>入参限制：仅支持 Set、Promote、Rollback，区分大小写。Promote 和 Rollback 仅允许在灰度中使用，且禁止携带 ModelName、Weight。</p>
     * @param string $ModelName <p>候选上游模型的原始名称，保留名称中的斜杠。</p><p>入参限制：Operation 为 Set 时必填，非空且最长 128 个字符；不能与当前主模型相同，不能占用同一 BYOK 的其他主模型或有效灰度候选名称。Promote、Rollback 禁止传入。</p>
     * @param integer $Weight <p>候选上游模型的灰度流量比例。</p><p>取值范围：[1, 99]</p><p>单位：%</p><p>Set 时必填，无默认值，必须为整数；拒绝 0、100、小数、布尔值及字符串。Promote、Rollback 禁止传入。比例只影响需要重新选择上游的请求，已有有效 Sticky 绑定不迁移，实际流量占比不保证等于配置比例。</p>
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
        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }
    }
}
