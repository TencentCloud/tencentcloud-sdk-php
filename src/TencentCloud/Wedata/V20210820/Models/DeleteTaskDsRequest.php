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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTaskDs请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method boolean getDeleteScript() 获取是否删除脚本
true：删除
false：不删除
不传默认false
 * @method void setDeleteScript(boolean $DeleteScript) 设置是否删除脚本
true：删除
false：不删除
不传默认false
 * @method boolean getOperateInform() 获取任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
 * @method void setOperateInform(boolean $OperateInform) 设置任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
 * @method string getTaskId() 获取任务ID
和VirtualTaskId选填一个
 * @method void setTaskId(string $TaskId) 设置任务ID
和VirtualTaskId选填一个
 * @method string getVirtualTaskId() 获取虚拟任务id
和TaskId选填一个

 * @method void setVirtualTaskId(string $VirtualTaskId) 设置虚拟任务id
和TaskId选填一个

 * @method boolean getVirtualFlag() 获取虚拟任务标记
true：是虚拟任务
false：不是虚拟任务
不传默认false
 * @method void setVirtualFlag(boolean $VirtualFlag) 设置虚拟任务标记
true：是虚拟任务
false：不是虚拟任务
不传默认false
 * @method boolean getDeleteMode() 获取任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false

 * @method void setDeleteMode(boolean $DeleteMode) 设置任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false
 */
class DeleteTaskDsRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var boolean 是否删除脚本
true：删除
false：不删除
不传默认false
     */
    public $DeleteScript;

    /**
     * @var boolean 任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
     */
    public $OperateInform;

    /**
     * @var string 任务ID
和VirtualTaskId选填一个
     */
    public $TaskId;

    /**
     * @var string 虚拟任务id
和TaskId选填一个

     */
    public $VirtualTaskId;

    /**
     * @var boolean 虚拟任务标记
true：是虚拟任务
false：不是虚拟任务
不传默认false
     */
    public $VirtualFlag;

    /**
     * @var boolean 任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false

     */
    public $DeleteMode;

    /**
     * @param string $ProjectId 项目Id
     * @param boolean $DeleteScript 是否删除脚本
true：删除
false：不删除
不传默认false
     * @param boolean $OperateInform 任务操作是否消息通知下游任务责任人true：通知
false：不通知
不传默认false
     * @param string $TaskId 任务ID
和VirtualTaskId选填一个
     * @param string $VirtualTaskId 虚拟任务id
和TaskId选填一个

     * @param boolean $VirtualFlag 虚拟任务标记
true：是虚拟任务
false：不是虚拟任务
不传默认false
     * @param boolean $DeleteMode 任务删除方式
true：不针对下游任务实例进行强制失败
false：针对下游任务实例进行强制失败
不传默认false
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("DeleteScript",$param) and $param["DeleteScript"] !== null) {
            $this->DeleteScript = $param["DeleteScript"];
        }

        if (array_key_exists("OperateInform",$param) and $param["OperateInform"] !== null) {
            $this->OperateInform = $param["OperateInform"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("VirtualTaskId",$param) and $param["VirtualTaskId"] !== null) {
            $this->VirtualTaskId = $param["VirtualTaskId"];
        }

        if (array_key_exists("VirtualFlag",$param) and $param["VirtualFlag"] !== null) {
            $this->VirtualFlag = $param["VirtualFlag"];
        }

        if (array_key_exists("DeleteMode",$param) and $param["DeleteMode"] !== null) {
            $this->DeleteMode = $param["DeleteMode"];
        }
    }
}
