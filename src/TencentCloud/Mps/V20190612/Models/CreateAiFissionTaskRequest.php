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
 * CreateAiFissionTask请求参数结构体
 *
 * @method AiFissionInput getInput() 获取<p>ai视频裂变输入信息</p>
 * @method void setInput(AiFissionInput $Input) 设置<p>ai视频裂变输入信息</p>
 * @method VideoDramaCosInfo getCosInfo() 获取<p>用户cos信息</p>
 * @method void setCosInfo(VideoDramaCosInfo $CosInfo) 设置<p>用户cos信息</p>
 * @method FissionTaskInfo getTaskInfo() 获取<p>ai视频裂变任务信息</p>
 * @method void setTaskInfo(FissionTaskInfo $TaskInfo) 设置<p>ai视频裂变任务信息</p>
 */
class CreateAiFissionTaskRequest extends AbstractModel
{
    /**
     * @var AiFissionInput <p>ai视频裂变输入信息</p>
     */
    public $Input;

    /**
     * @var VideoDramaCosInfo <p>用户cos信息</p>
     */
    public $CosInfo;

    /**
     * @var FissionTaskInfo <p>ai视频裂变任务信息</p>
     */
    public $TaskInfo;

    /**
     * @param AiFissionInput $Input <p>ai视频裂变输入信息</p>
     * @param VideoDramaCosInfo $CosInfo <p>用户cos信息</p>
     * @param FissionTaskInfo $TaskInfo <p>ai视频裂变任务信息</p>
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
        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AiFissionInput();
            $this->Input->deserialize($param["Input"]);
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new VideoDramaCosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }

        if (array_key_exists("TaskInfo",$param) and $param["TaskInfo"] !== null) {
            $this->TaskInfo = new FissionTaskInfo();
            $this->TaskInfo->deserialize($param["TaskInfo"]);
        }
    }
}
