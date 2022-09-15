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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTaskList请求参数结构体
 *
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method string getTaskTitle() 获取演练名称
 * @method void setTaskTitle(string $TaskTitle) 设置演练名称
 * @method array getTaskTag() 获取标签键
 * @method void setTaskTag(array $TaskTag) 设置标签键
 * @method integer getTaskStatus() 获取状态
 * @method void setTaskStatus(integer $TaskStatus) 设置状态
 * @method string getTaskStartTime() 获取开始时间，固定格式%Y-%m-%d %H:%M:%S
 * @method void setTaskStartTime(string $TaskStartTime) 设置开始时间，固定格式%Y-%m-%d %H:%M:%S
 * @method string getTaskEndTime() 获取结束时间，固定格式%Y-%m-%d %H:%M:%S
 * @method void setTaskEndTime(string $TaskEndTime) 设置结束时间，固定格式%Y-%m-%d %H:%M:%S
 * @method array getTags() 获取标签对
 * @method void setTags(array $Tags) 设置标签对
 */
class DescribeTaskListRequest extends AbstractModel
{
    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var string 演练名称
     */
    public $TaskTitle;

    /**
     * @var array 标签键
     */
    public $TaskTag;

    /**
     * @var integer 状态
     */
    public $TaskStatus;

    /**
     * @var string 开始时间，固定格式%Y-%m-%d %H:%M:%S
     */
    public $TaskStartTime;

    /**
     * @var string 结束时间，固定格式%Y-%m-%d %H:%M:%S
     */
    public $TaskEndTime;

    /**
     * @var array 标签对
     */
    public $Tags;

    /**
     * @param integer $Limit 分页Limit
     * @param integer $Offset 分页Offset
     * @param string $TaskTitle 演练名称
     * @param array $TaskTag 标签键
     * @param integer $TaskStatus 状态
     * @param string $TaskStartTime 开始时间，固定格式%Y-%m-%d %H:%M:%S
     * @param string $TaskEndTime 结束时间，固定格式%Y-%m-%d %H:%M:%S
     * @param array $Tags 标签对
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("TaskTitle",$param) and $param["TaskTitle"] !== null) {
            $this->TaskTitle = $param["TaskTitle"];
        }

        if (array_key_exists("TaskTag",$param) and $param["TaskTag"] !== null) {
            $this->TaskTag = $param["TaskTag"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
