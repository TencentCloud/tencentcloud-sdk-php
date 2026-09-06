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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询AIGC任务列表过滤条件
 *
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskType() 获取<p>任务类型</p><p>枚举值：</p><ul><li>RedrawVideo： 视频重绘</li><li>AIDrama： AI漫剧</li><li>DocGenVideo： 文档生视频</li><li>FissionVideo： 视频裂变</li></ul>
 * @method void setTaskType(string $TaskType) 设置<p>任务类型</p><p>枚举值：</p><ul><li>RedrawVideo： 视频重绘</li><li>AIDrama： AI漫剧</li><li>DocGenVideo： 文档生视频</li><li>FissionVideo： 视频裂变</li></ul>
 * @method string getTaskStatus() 获取<p>任务状态</p>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>任务状态</p>
 * @method string getResolution() 获取<p>分辨率</p>
 * @method void setResolution(string $Resolution) 设置<p>分辨率</p>
 * @method string getRatio() 获取<p>宽高比</p>
 * @method void setRatio(string $Ratio) 设置<p>宽高比</p>
 * @method string getExecuteMode() 获取<p>任务执行模式</p><p>枚举值：</p><ul><li>auto： 直接生成</li><li>phased： 确认后再生成</li></ul>
 * @method void setExecuteMode(string $ExecuteMode) 设置<p>任务执行模式</p><p>枚举值：</p><ul><li>auto： 直接生成</li><li>phased： 确认后再生成</li></ul>
 * @method string getVideoType() 获取<p>裂变任务视频类型过滤: ugc、talk、display、unboxing、reaction</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
 * @method void setVideoType(string $VideoType) 设置<p>裂变任务视频类型过滤: ugc、talk、display、unboxing、reaction</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
 * @method string getModelTier() 获取<p>模型类型</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 高级版</li></ul>
 * @method void setModelTier(string $ModelTier) 设置<p>模型类型</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 高级版</li></ul>
 */
class QueryTaskFilter extends AbstractModel
{
    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务类型</p><p>枚举值：</p><ul><li>RedrawVideo： 视频重绘</li><li>AIDrama： AI漫剧</li><li>DocGenVideo： 文档生视频</li><li>FissionVideo： 视频裂变</li></ul>
     */
    public $TaskType;

    /**
     * @var string <p>任务状态</p>
     */
    public $TaskStatus;

    /**
     * @var string <p>分辨率</p>
     */
    public $Resolution;

    /**
     * @var string <p>宽高比</p>
     */
    public $Ratio;

    /**
     * @var string <p>任务执行模式</p><p>枚举值：</p><ul><li>auto： 直接生成</li><li>phased： 确认后再生成</li></ul>
     */
    public $ExecuteMode;

    /**
     * @var string <p>裂变任务视频类型过滤: ugc、talk、display、unboxing、reaction</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
     */
    public $VideoType;

    /**
     * @var string <p>模型类型</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 高级版</li></ul>
     */
    public $ModelTier;

    /**
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskType <p>任务类型</p><p>枚举值：</p><ul><li>RedrawVideo： 视频重绘</li><li>AIDrama： AI漫剧</li><li>DocGenVideo： 文档生视频</li><li>FissionVideo： 视频裂变</li></ul>
     * @param string $TaskStatus <p>任务状态</p>
     * @param string $Resolution <p>分辨率</p>
     * @param string $Ratio <p>宽高比</p>
     * @param string $ExecuteMode <p>任务执行模式</p><p>枚举值：</p><ul><li>auto： 直接生成</li><li>phased： 确认后再生成</li></ul>
     * @param string $VideoType <p>裂变任务视频类型过滤: ugc、talk、display、unboxing、reaction</p><p>枚举值：</p><ul><li>ugc： UGC种草</li><li>talk： 产品口播</li><li>display： 产品展示</li><li>unboxing： 开箱分享</li><li>reaction： 反应展示</li></ul>
     * @param string $ModelTier <p>模型类型</p><p>枚举值：</p><ul><li>standard： 标准版</li><li>flagship： 高级版</li></ul>
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("Ratio",$param) and $param["Ratio"] !== null) {
            $this->Ratio = $param["Ratio"];
        }

        if (array_key_exists("ExecuteMode",$param) and $param["ExecuteMode"] !== null) {
            $this->ExecuteMode = $param["ExecuteMode"];
        }

        if (array_key_exists("VideoType",$param) and $param["VideoType"] !== null) {
            $this->VideoType = $param["VideoType"];
        }

        if (array_key_exists("ModelTier",$param) and $param["ModelTier"] !== null) {
            $this->ModelTier = $param["ModelTier"];
        }
    }
}
