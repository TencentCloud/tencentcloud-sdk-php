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
 * ModifyServiceProviderModelAttributes请求参数结构体
 *
 * @method string getServiceProviderId() 获取<p>BYOK 实例 ID</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK 实例 ID</p>
 * @method string getModelName() 获取<p>待修改的模型的名称（原始模型名称）</p>
 * @method void setModelName(string $ModelName) 设置<p>待修改的模型的名称（原始模型名称）</p>
 * @method array getInputModalities() 获取<p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>video： 支持视频输入</li></ul>
 * @method void setInputModalities(array $InputModalities) 设置<p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>video： 支持视频输入</li></ul>
 * @method string getNewModelName() 获取<p>新的上游模型名称</p>
 * @method void setNewModelName(string $NewModelName) 设置<p>新的上游模型名称</p>
 * @method string getNewModelAlias() 获取<p>新的对外模型名称</p>
 * @method void setNewModelAlias(string $NewModelAlias) 设置<p>新的对外模型名称</p>
 * @method UpstreamRolloutOperation getUpstreamRollout() 获取<p>上游模型灰度操作，支持 Set、Promote、Rollback。</p><p>入参限制：未传时沿用普通属性编辑；显式 null、空对象及未知字段拒绝。与显式传入的 NewModelName、NewModelAlias、InputModalities 互斥，包括 null 和空别名。</p><p>Set 必须提供候选 ModelName 和 1～99 的整数 Weight，可调整同一候选的比例；相同配置在资源可编辑时成功且不重复下发。Promote、Rollback 仅传 Operation，分别全量切换到候选或恢复主模型并结束灰度。外层 ModelName 定位当前主模型；响应仍为 RequestId，任务通过 DescribeAsyncJobs 查询。</p>
 * @method void setUpstreamRollout(UpstreamRolloutOperation $UpstreamRollout) 设置<p>上游模型灰度操作，支持 Set、Promote、Rollback。</p><p>入参限制：未传时沿用普通属性编辑；显式 null、空对象及未知字段拒绝。与显式传入的 NewModelName、NewModelAlias、InputModalities 互斥，包括 null 和空别名。</p><p>Set 必须提供候选 ModelName 和 1～99 的整数 Weight，可调整同一候选的比例；相同配置在资源可编辑时成功且不重复下发。Promote、Rollback 仅传 Operation，分别全量切换到候选或恢复主模型并结束灰度。外层 ModelName 定位当前主模型；响应仍为 RequestId，任务通过 DescribeAsyncJobs 查询。</p>
 */
class ModifyServiceProviderModelAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>BYOK 实例 ID</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>待修改的模型的名称（原始模型名称）</p>
     */
    public $ModelName;

    /**
     * @var array <p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>video： 支持视频输入</li></ul>
     */
    public $InputModalities;

    /**
     * @var string <p>新的上游模型名称</p>
     */
    public $NewModelName;

    /**
     * @var string <p>新的对外模型名称</p>
     */
    public $NewModelAlias;

    /**
     * @var UpstreamRolloutOperation <p>上游模型灰度操作，支持 Set、Promote、Rollback。</p><p>入参限制：未传时沿用普通属性编辑；显式 null、空对象及未知字段拒绝。与显式传入的 NewModelName、NewModelAlias、InputModalities 互斥，包括 null 和空别名。</p><p>Set 必须提供候选 ModelName 和 1～99 的整数 Weight，可调整同一候选的比例；相同配置在资源可编辑时成功且不重复下发。Promote、Rollback 仅传 Operation，分别全量切换到候选或恢复主模型并结束灰度。外层 ModelName 定位当前主模型；响应仍为 RequestId，任务通过 DescribeAsyncJobs 查询。</p>
     */
    public $UpstreamRollout;

    /**
     * @param string $ServiceProviderId <p>BYOK 实例 ID</p>
     * @param string $ModelName <p>待修改的模型的名称（原始模型名称）</p>
     * @param array $InputModalities <p>该模型支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>video： 支持视频输入</li></ul>
     * @param string $NewModelName <p>新的上游模型名称</p>
     * @param string $NewModelAlias <p>新的对外模型名称</p>
     * @param UpstreamRolloutOperation $UpstreamRollout <p>上游模型灰度操作，支持 Set、Promote、Rollback。</p><p>入参限制：未传时沿用普通属性编辑；显式 null、空对象及未知字段拒绝。与显式传入的 NewModelName、NewModelAlias、InputModalities 互斥，包括 null 和空别名。</p><p>Set 必须提供候选 ModelName 和 1～99 的整数 Weight，可调整同一候选的比例；相同配置在资源可编辑时成功且不重复下发。Promote、Rollback 仅传 Operation，分别全量切换到候选或恢复主模型并结束灰度。外层 ModelName 定位当前主模型；响应仍为 RequestId，任务通过 DescribeAsyncJobs 查询。</p>
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
        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("InputModalities",$param) and $param["InputModalities"] !== null) {
            $this->InputModalities = $param["InputModalities"];
        }

        if (array_key_exists("NewModelName",$param) and $param["NewModelName"] !== null) {
            $this->NewModelName = $param["NewModelName"];
        }

        if (array_key_exists("NewModelAlias",$param) and $param["NewModelAlias"] !== null) {
            $this->NewModelAlias = $param["NewModelAlias"];
        }

        if (array_key_exists("UpstreamRollout",$param) and $param["UpstreamRollout"] !== null) {
            $this->UpstreamRollout = new UpstreamRolloutOperation();
            $this->UpstreamRollout->deserialize($param["UpstreamRollout"]);
        }
    }
}
