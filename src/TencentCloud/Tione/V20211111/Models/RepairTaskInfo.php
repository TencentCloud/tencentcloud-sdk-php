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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * cvm维修任务信息
 *
 * @method string getTaskId() 获取<p>维修任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>维修任务ID</p>
 * @method integer getTaskTypeId() 获取<p>任务类型ID<br>// - <code>101</code>：实例运行隐患<br>    // - <code>102</code>：实例运行异常<br>    // - <code>103</code>：实例硬盘异常<br>    // - <code>104</code>：实例网络连接异常<br>    // - <code>105</code>：实例运行预警<br>    // - <code>106</code>：实例硬盘预警<br>    // - <code>107</code>：实例维护升级</p>
 * @method void setTaskTypeId(integer $TaskTypeId) 设置<p>任务类型ID<br>// - <code>101</code>：实例运行隐患<br>    // - <code>102</code>：实例运行异常<br>    // - <code>103</code>：实例硬盘异常<br>    // - <code>104</code>：实例网络连接异常<br>    // - <code>105</code>：实例运行预警<br>    // - <code>106</code>：实例硬盘预警<br>    // - <code>107</code>：实例维护升级</p>
 * @method string getTaskTypeName() 获取<p>任务类型中文名</p>
 * @method void setTaskTypeName(string $TaskTypeName) 设置<p>任务类型中文名</p>
 * @method string getCreateTime() 获取<p>任务创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建时间</p>
 * @method string getTaskDetail() 获取<p>任务详情</p>
 * @method void setTaskDetail(string $TaskDetail) 设置<p>任务详情</p>
 * @method string getProduct() 获取<p>产品类型，支持取值：<br>    //<br>    // - <code>CVM</code>：云服务器<br>    // - <code>CDH</code>：专用宿主机<br>    // - <code>CPM2.0</code>：裸金属云服务器</p>
 * @method void setProduct(string $Product) 设置<p>产品类型，支持取值：<br>    //<br>    // - <code>CVM</code>：云服务器<br>    // - <code>CDH</code>：专用宿主机<br>    // - <code>CPM2.0</code>：裸金属云服务器</p>
 */
class RepairTaskInfo extends AbstractModel
{
    /**
     * @var string <p>维修任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>任务类型ID<br>// - <code>101</code>：实例运行隐患<br>    // - <code>102</code>：实例运行异常<br>    // - <code>103</code>：实例硬盘异常<br>    // - <code>104</code>：实例网络连接异常<br>    // - <code>105</code>：实例运行预警<br>    // - <code>106</code>：实例硬盘预警<br>    // - <code>107</code>：实例维护升级</p>
     */
    public $TaskTypeId;

    /**
     * @var string <p>任务类型中文名</p>
     */
    public $TaskTypeName;

    /**
     * @var string <p>任务创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务详情</p>
     */
    public $TaskDetail;

    /**
     * @var string <p>产品类型，支持取值：<br>    //<br>    // - <code>CVM</code>：云服务器<br>    // - <code>CDH</code>：专用宿主机<br>    // - <code>CPM2.0</code>：裸金属云服务器</p>
     */
    public $Product;

    /**
     * @param string $TaskId <p>维修任务ID</p>
     * @param integer $TaskTypeId <p>任务类型ID<br>// - <code>101</code>：实例运行隐患<br>    // - <code>102</code>：实例运行异常<br>    // - <code>103</code>：实例硬盘异常<br>    // - <code>104</code>：实例网络连接异常<br>    // - <code>105</code>：实例运行预警<br>    // - <code>106</code>：实例硬盘预警<br>    // - <code>107</code>：实例维护升级</p>
     * @param string $TaskTypeName <p>任务类型中文名</p>
     * @param string $CreateTime <p>任务创建时间</p>
     * @param string $TaskDetail <p>任务详情</p>
     * @param string $Product <p>产品类型，支持取值：<br>    //<br>    // - <code>CVM</code>：云服务器<br>    // - <code>CDH</code>：专用宿主机<br>    // - <code>CPM2.0</code>：裸金属云服务器</p>
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

        if (array_key_exists("TaskTypeId",$param) and $param["TaskTypeId"] !== null) {
            $this->TaskTypeId = $param["TaskTypeId"];
        }

        if (array_key_exists("TaskTypeName",$param) and $param["TaskTypeName"] !== null) {
            $this->TaskTypeName = $param["TaskTypeName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TaskDetail",$param) and $param["TaskDetail"] !== null) {
            $this->TaskDetail = $param["TaskDetail"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
