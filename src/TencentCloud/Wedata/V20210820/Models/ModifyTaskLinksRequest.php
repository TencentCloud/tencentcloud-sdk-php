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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyTaskLinks请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getTaskFrom() 获取父任务ID
 * @method void setTaskFrom(string $TaskFrom) 设置父任务ID
 * @method string getTaskTo() 获取子任务ID
 * @method void setTaskTo(string $TaskTo) 设置子任务ID
 * @method string getWorkflowId() 获取子任务工作流
 * @method void setWorkflowId(string $WorkflowId) 设置子任务工作流
 * @method string getRealFromWorkflowId() 获取父任务工作流
 * @method void setRealFromWorkflowId(string $RealFromWorkflowId) 设置父任务工作流
 * @method string getLinkDependencyType() 获取父子任务之间的依赖关系
    /** 正常的依赖父任务全部实例  启用**/
    normal_all(1),
    normal_first_one(2),// 正常的依赖父任务 第一个
    normal_last_one(3),// 正常的依赖父任务 最后一个
    normal_any_one(4),// 正常的依赖父任务 任意一个
    normal_specific_one(5),// 正常的依赖父任务 指定的一个
    self(6),// 自身依赖，可能用不到

    /** // 非正常的依赖父任务全部实例  启用（向前依赖  明天）**/
    non_normal_all_forward(11),
    non_normal_first_one_forward(12),// 非正常的依赖父任务 第一个
    non_normal_last_one_forward(13),// 非正常的依赖父任务 最后一个
    non_normal_any_one_forward(14),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_forward(15),// 非正常的依赖父任务 指定一个

    /** // 非正常的依赖父任务全部实例  启用（向后依赖 昨天） **/
    non_normal_all_backward(21),
    non_normal_first_one_backward(22),// 非正常的依赖父任务 第一个
    non_normal_last_one_backward(23),// 非正常的依赖父任务 最后一个
    non_normal_any_one_backward(24),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_backward(25);// 非正常的依赖父任务 指定一个


 * @method void setLinkDependencyType(string $LinkDependencyType) 设置父子任务之间的依赖关系
    /** 正常的依赖父任务全部实例  启用**/
    normal_all(1),
    normal_first_one(2),// 正常的依赖父任务 第一个
    normal_last_one(3),// 正常的依赖父任务 最后一个
    normal_any_one(4),// 正常的依赖父任务 任意一个
    normal_specific_one(5),// 正常的依赖父任务 指定的一个
    self(6),// 自身依赖，可能用不到

    /** // 非正常的依赖父任务全部实例  启用（向前依赖  明天）**/
    non_normal_all_forward(11),
    non_normal_first_one_forward(12),// 非正常的依赖父任务 第一个
    non_normal_last_one_forward(13),// 非正常的依赖父任务 最后一个
    non_normal_any_one_forward(14),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_forward(15),// 非正常的依赖父任务 指定一个

    /** // 非正常的依赖父任务全部实例  启用（向后依赖 昨天） **/
    non_normal_all_backward(21),
    non_normal_first_one_backward(22),// 非正常的依赖父任务 第一个
    non_normal_last_one_backward(23),// 非正常的依赖父任务 最后一个
    non_normal_any_one_backward(24),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_backward(25);// 非正常的依赖父任务 指定一个
 */
class ModifyTaskLinksRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 父任务ID
     */
    public $TaskFrom;

    /**
     * @var string 子任务ID
     */
    public $TaskTo;

    /**
     * @var string 子任务工作流
     */
    public $WorkflowId;

    /**
     * @var string 父任务工作流
     */
    public $RealFromWorkflowId;

    /**
     * @var string 父子任务之间的依赖关系
    /** 正常的依赖父任务全部实例  启用**/
    normal_all(1),
    normal_first_one(2),// 正常的依赖父任务 第一个
    normal_last_one(3),// 正常的依赖父任务 最后一个
    normal_any_one(4),// 正常的依赖父任务 任意一个
    normal_specific_one(5),// 正常的依赖父任务 指定的一个
    self(6),// 自身依赖，可能用不到

    /** // 非正常的依赖父任务全部实例  启用（向前依赖  明天）**/
    non_normal_all_forward(11),
    non_normal_first_one_forward(12),// 非正常的依赖父任务 第一个
    non_normal_last_one_forward(13),// 非正常的依赖父任务 最后一个
    non_normal_any_one_forward(14),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_forward(15),// 非正常的依赖父任务 指定一个

    /** // 非正常的依赖父任务全部实例  启用（向后依赖 昨天） **/
    non_normal_all_backward(21),
    non_normal_first_one_backward(22),// 非正常的依赖父任务 第一个
    non_normal_last_one_backward(23),// 非正常的依赖父任务 最后一个
    non_normal_any_one_backward(24),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_backward(25);// 非正常的依赖父任务 指定一个


     */
    public $LinkDependencyType;

    /**
     * @param string $ProjectId 项目Id
     * @param string $TaskFrom 父任务ID
     * @param string $TaskTo 子任务ID
     * @param string $WorkflowId 子任务工作流
     * @param string $RealFromWorkflowId 父任务工作流
     * @param string $LinkDependencyType 父子任务之间的依赖关系
    /** 正常的依赖父任务全部实例  启用**/
    normal_all(1),
    normal_first_one(2),// 正常的依赖父任务 第一个
    normal_last_one(3),// 正常的依赖父任务 最后一个
    normal_any_one(4),// 正常的依赖父任务 任意一个
    normal_specific_one(5),// 正常的依赖父任务 指定的一个
    self(6),// 自身依赖，可能用不到

    /** // 非正常的依赖父任务全部实例  启用（向前依赖  明天）**/
    non_normal_all_forward(11),
    non_normal_first_one_forward(12),// 非正常的依赖父任务 第一个
    non_normal_last_one_forward(13),// 非正常的依赖父任务 最后一个
    non_normal_any_one_forward(14),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_forward(15),// 非正常的依赖父任务 指定一个

    /** // 非正常的依赖父任务全部实例  启用（向后依赖 昨天） **/
    non_normal_all_backward(21),
    non_normal_first_one_backward(22),// 非正常的依赖父任务 第一个
    non_normal_last_one_backward(23),// 非正常的依赖父任务 最后一个
    non_normal_any_one_backward(24),// 非正常的依赖父任务 任意一个
    non_normal_specific_one_backward(25);// 非正常的依赖父任务 指定一个
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

        if (array_key_exists("TaskFrom",$param) and $param["TaskFrom"] !== null) {
            $this->TaskFrom = $param["TaskFrom"];
        }

        if (array_key_exists("TaskTo",$param) and $param["TaskTo"] !== null) {
            $this->TaskTo = $param["TaskTo"];
        }

        if (array_key_exists("WorkflowId",$param) and $param["WorkflowId"] !== null) {
            $this->WorkflowId = $param["WorkflowId"];
        }

        if (array_key_exists("RealFromWorkflowId",$param) and $param["RealFromWorkflowId"] !== null) {
            $this->RealFromWorkflowId = $param["RealFromWorkflowId"];
        }

        if (array_key_exists("LinkDependencyType",$param) and $param["LinkDependencyType"] !== null) {
            $this->LinkDependencyType = $param["LinkDependencyType"];
        }
    }
}
