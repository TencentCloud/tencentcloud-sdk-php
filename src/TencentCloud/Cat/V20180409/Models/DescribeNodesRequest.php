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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNodes请求参数结构体
 *
 * @method integer getNodeType() 获取节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
 * @method void setNodeType(integer $NodeType) 设置节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
 * @method integer getLocation() 获取节点区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外</li>
 * @method void setLocation(integer $Location) 设置节点区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外</li>
 * @method boolean getIsIPv6() 获取是否IPv6
 * @method void setIsIPv6(boolean $IsIPv6) 设置是否IPv6
 * @method string getNodeName() 获取名字模糊搜索
 * @method void setNodeName(string $NodeName) 设置名字模糊搜索
 * @method integer getPayMode() 获取付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
 * @method void setPayMode(integer $PayMode) 设置付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
 * @method integer getTaskType() 获取任务类型
<li>1 = 页面性能</li>
<li>2 = 文件上传</li>
<li>3 = 文件下载</li>
<li>4 = 端口性能</li>
<li>5 = 网络质量</li>
<li>6 = 音视频体验</li>
 * @method void setTaskType(integer $TaskType) 设置任务类型
<li>1 = 页面性能</li>
<li>2 = 文件上传</li>
<li>3 = 文件下载</li>
<li>4 = 端口性能</li>
<li>5 = 网络质量</li>
<li>6 = 音视频体验</li>
 */
class DescribeNodesRequest extends AbstractModel
{
    /**
     * @var integer 节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
     */
    public $NodeType;

    /**
     * @var integer 节点区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外</li>
     */
    public $Location;

    /**
     * @var boolean 是否IPv6
     */
    public $IsIPv6;

    /**
     * @var string 名字模糊搜索
     */
    public $NodeName;

    /**
     * @var integer 付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
     */
    public $PayMode;

    /**
     * @var integer 任务类型
<li>1 = 页面性能</li>
<li>2 = 文件上传</li>
<li>3 = 文件下载</li>
<li>4 = 端口性能</li>
<li>5 = 网络质量</li>
<li>6 = 音视频体验</li>
     */
    public $TaskType;

    /**
     * @param integer $NodeType 节点类型
<li> 1 = IDC </li>
<li> 2 = LastMile </li>
<li> 3 = Mobile </li>
     * @param integer $Location 节点区域
<li> 1 = 中国大陆 </li>
<li> 2 = 港澳台 </li>
<li> 3 = 境外</li>
     * @param boolean $IsIPv6 是否IPv6
     * @param string $NodeName 名字模糊搜索
     * @param integer $PayMode 付费模式
<li>1 = 试用版本</li>
<li> 2 = 付费版本 </li>
     * @param integer $TaskType 任务类型
<li>1 = 页面性能</li>
<li>2 = 文件上传</li>
<li>3 = 文件下载</li>
<li>4 = 端口性能</li>
<li>5 = 网络质量</li>
<li>6 = 音视频体验</li>
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
        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("IsIPv6",$param) and $param["IsIPv6"] !== null) {
            $this->IsIPv6 = $param["IsIPv6"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }
    }
}
