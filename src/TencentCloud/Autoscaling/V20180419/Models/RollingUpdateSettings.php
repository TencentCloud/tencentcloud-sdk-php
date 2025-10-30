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
namespace TencentCloud\Autoscaling\V20180419\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 滚动更新设置。
 *
 * @method integer getBatchNumber() 获取批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
 * @method void setBatchNumber(integer $BatchNumber) 设置批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
 * @method string getBatchPause() 获取批次间暂停策略。默认值为 Automatic，取值范围如下：
<li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li>
<li>BATCH_INTERVAL_PAUSE：批次间暂停</li>
<li>AUTOMATIC：不暂停</li>
 * @method void setBatchPause(string $BatchPause) 设置批次间暂停策略。默认值为 Automatic，取值范围如下：
<li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li>
<li>BATCH_INTERVAL_PAUSE：批次间暂停</li>
<li>AUTOMATIC：不暂停</li>
 * @method integer getMaxSurge() 获取最大额外数量。设置该参数后，在滚动更新开始前根据启动配置创建一批按量计费的额外实例，滚动更新完成后销毁额外实例。
该参数用于保证滚动更新过程中可用实例的数量，最大额外数量不能超过滚动更新单个批次的刷新实例数。回滚流程暂不支持该参数。
 * @method void setMaxSurge(integer $MaxSurge) 设置最大额外数量。设置该参数后，在滚动更新开始前根据启动配置创建一批按量计费的额外实例，滚动更新完成后销毁额外实例。
该参数用于保证滚动更新过程中可用实例的数量，最大额外数量不能超过滚动更新单个批次的刷新实例数。回滚流程暂不支持该参数。
 * @method string getFailProcess() 获取失败处理策略。默认值为 AUTO_PAUSE，取值范围如下：
<li>AUTO_PAUSE：刷新失败后暂停</li>
<li>AUTO_ROLLBACK：刷新失败后回滚。回滚时每批次回滚一台实例，CheckInstanceTargetHealth 参数值与原刷新活动一致。MaxSurge参数引入的扩缩容流程失败无需回滚，会用取消动作代替回滚</li>
<li>AUTO_CANCEL：刷新失败后取消</li>
 * @method void setFailProcess(string $FailProcess) 设置失败处理策略。默认值为 AUTO_PAUSE，取值范围如下：
<li>AUTO_PAUSE：刷新失败后暂停</li>
<li>AUTO_ROLLBACK：刷新失败后回滚。回滚时每批次回滚一台实例，CheckInstanceTargetHealth 参数值与原刷新活动一致。MaxSurge参数引入的扩缩容流程失败无需回滚，会用取消动作代替回滚</li>
<li>AUTO_CANCEL：刷新失败后取消</li>
 */
class RollingUpdateSettings extends AbstractModel
{
    /**
     * @var integer 批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
     */
    public $BatchNumber;

    /**
     * @var string 批次间暂停策略。默认值为 Automatic，取值范围如下：
<li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li>
<li>BATCH_INTERVAL_PAUSE：批次间暂停</li>
<li>AUTOMATIC：不暂停</li>
     */
    public $BatchPause;

    /**
     * @var integer 最大额外数量。设置该参数后，在滚动更新开始前根据启动配置创建一批按量计费的额外实例，滚动更新完成后销毁额外实例。
该参数用于保证滚动更新过程中可用实例的数量，最大额外数量不能超过滚动更新单个批次的刷新实例数。回滚流程暂不支持该参数。
     */
    public $MaxSurge;

    /**
     * @var string 失败处理策略。默认值为 AUTO_PAUSE，取值范围如下：
<li>AUTO_PAUSE：刷新失败后暂停</li>
<li>AUTO_ROLLBACK：刷新失败后回滚。回滚时每批次回滚一台实例，CheckInstanceTargetHealth 参数值与原刷新活动一致。MaxSurge参数引入的扩缩容流程失败无需回滚，会用取消动作代替回滚</li>
<li>AUTO_CANCEL：刷新失败后取消</li>
     */
    public $FailProcess;

    /**
     * @param integer $BatchNumber 批次数量。批次数量为大于 0 的正整数，但不能大于待刷新实例数量。
     * @param string $BatchPause 批次间暂停策略。默认值为 Automatic，取值范围如下：
<li>FIRST_BATCH_PAUSE：第一批次更新完成后暂停</li>
<li>BATCH_INTERVAL_PAUSE：批次间暂停</li>
<li>AUTOMATIC：不暂停</li>
     * @param integer $MaxSurge 最大额外数量。设置该参数后，在滚动更新开始前根据启动配置创建一批按量计费的额外实例，滚动更新完成后销毁额外实例。
该参数用于保证滚动更新过程中可用实例的数量，最大额外数量不能超过滚动更新单个批次的刷新实例数。回滚流程暂不支持该参数。
     * @param string $FailProcess 失败处理策略。默认值为 AUTO_PAUSE，取值范围如下：
<li>AUTO_PAUSE：刷新失败后暂停</li>
<li>AUTO_ROLLBACK：刷新失败后回滚。回滚时每批次回滚一台实例，CheckInstanceTargetHealth 参数值与原刷新活动一致。MaxSurge参数引入的扩缩容流程失败无需回滚，会用取消动作代替回滚</li>
<li>AUTO_CANCEL：刷新失败后取消</li>
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
        if (array_key_exists("BatchNumber",$param) and $param["BatchNumber"] !== null) {
            $this->BatchNumber = $param["BatchNumber"];
        }

        if (array_key_exists("BatchPause",$param) and $param["BatchPause"] !== null) {
            $this->BatchPause = $param["BatchPause"];
        }

        if (array_key_exists("MaxSurge",$param) and $param["MaxSurge"] !== null) {
            $this->MaxSurge = $param["MaxSurge"];
        }

        if (array_key_exists("FailProcess",$param) and $param["FailProcess"] !== null) {
            $this->FailProcess = $param["FailProcess"];
        }
    }
}
