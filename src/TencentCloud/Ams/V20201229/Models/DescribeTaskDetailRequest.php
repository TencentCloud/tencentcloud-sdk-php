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
namespace TencentCloud\Ams\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskDetail请求参数结构体
 *
 * @method string getTaskId() 获取<p>该字段表示创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。<br><br>备注：查询接口单次最大查询量为<strong>20条每次</strong>。</p>
 * @method void setTaskId(string $TaskId) 设置<p>该字段表示创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。<br><br>备注：查询接口单次最大查询量为<strong>20条每次</strong>。</p>
 * @method boolean getShowAllSegments() 获取<p>该布尔字段表示是否展示全部的音频片段，取值：True(展示全部的音频分片)、False(只展示命中审核规则的音频分片)；默认值为False。</p>
 * @method void setShowAllSegments(boolean $ShowAllSegments) 设置<p>该布尔字段表示是否展示全部的音频片段，取值：True(展示全部的音频分片)、False(只展示命中审核规则的音频分片)；默认值为False。</p>
 */
class DescribeTaskDetailRequest extends AbstractModel
{
    /**
     * @var string <p>该字段表示创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。<br><br>备注：查询接口单次最大查询量为<strong>20条每次</strong>。</p>
     */
    public $TaskId;

    /**
     * @var boolean <p>该布尔字段表示是否展示全部的音频片段，取值：True(展示全部的音频分片)、False(只展示命中审核规则的音频分片)；默认值为False。</p>
     */
    public $ShowAllSegments;

    /**
     * @param string $TaskId <p>该字段表示创建音频审核任务后返回的任务ID（在Results参数中），用于标识需要查询任务详情的审核任务。<br><br>备注：查询接口单次最大查询量为<strong>20条每次</strong>。</p>
     * @param boolean $ShowAllSegments <p>该布尔字段表示是否展示全部的音频片段，取值：True(展示全部的音频分片)、False(只展示命中审核规则的音频分片)；默认值为False。</p>
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

        if (array_key_exists("ShowAllSegments",$param) and $param["ShowAllSegments"] !== null) {
            $this->ShowAllSegments = $param["ShowAllSegments"];
        }
    }
}
