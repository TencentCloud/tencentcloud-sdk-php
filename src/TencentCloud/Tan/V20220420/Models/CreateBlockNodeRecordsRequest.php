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
namespace TencentCloud\Tan\V20220420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateBlockNodeRecords请求参数结构体
 *
 * @method string getGroupId() 获取盘查组id，可在“盘查组概览”功能中获取。
 * @method void setGroupId(string $GroupId) 设置盘查组id，可在“盘查组概览”功能中获取。
 * @method string getNodeId() 获取节点id，可在“数据接入管理”中获取。
 * @method void setNodeId(string $NodeId) 设置节点id，可在“数据接入管理”中获取。
 * @method string getRecords() 获取节点数据json，具体demo请参考输入示例，其中key为数据接入管理中节点内创建的属性变量名，value为期望的推送值。
 * @method void setRecords(string $Records) 设置节点数据json，具体demo请参考输入示例，其中key为数据接入管理中节点内创建的属性变量名，value为期望的推送值。
 */
class CreateBlockNodeRecordsRequest extends AbstractModel
{
    /**
     * @var string 盘查组id，可在“盘查组概览”功能中获取。
     */
    public $GroupId;

    /**
     * @var string 节点id，可在“数据接入管理”中获取。
     */
    public $NodeId;

    /**
     * @var string 节点数据json，具体demo请参考输入示例，其中key为数据接入管理中节点内创建的属性变量名，value为期望的推送值。
     */
    public $Records;

    /**
     * @param string $GroupId 盘查组id，可在“盘查组概览”功能中获取。
     * @param string $NodeId 节点id，可在“数据接入管理”中获取。
     * @param string $Records 节点数据json，具体demo请参考输入示例，其中key为数据接入管理中节点内创建的属性变量名，value为期望的推送值。
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("Records",$param) and $param["Records"] !== null) {
            $this->Records = $param["Records"];
        }
    }
}
