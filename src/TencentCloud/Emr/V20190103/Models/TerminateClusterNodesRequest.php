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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TerminateClusterNodes请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method array getCvmInstanceIds() 获取销毁资源列表
 * @method void setCvmInstanceIds(array $CvmInstanceIds) 设置销毁资源列表
 * @method string getNodeFlag() 获取销毁节点类型取值范围：
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method void setNodeFlag(string $NodeFlag) 设置销毁节点类型取值范围：
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
 * @method boolean getGraceDownFlag() 获取优雅缩容开关
  <li>true:开启</li>
  <li>false:不开启</li>
 * @method void setGraceDownFlag(boolean $GraceDownFlag) 设置优雅缩容开关
  <li>true:开启</li>
  <li>false:不开启</li>
 * @method integer getGraceDownTime() 获取优雅缩容等待时间,时间范围60到1800  单位秒
 * @method void setGraceDownTime(integer $GraceDownTime) 设置优雅缩容等待时间,时间范围60到1800  单位秒
 */
class TerminateClusterNodesRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var array 销毁资源列表
     */
    public $CvmInstanceIds;

    /**
     * @var string 销毁节点类型取值范围：
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     */
    public $NodeFlag;

    /**
     * @var boolean 优雅缩容开关
  <li>true:开启</li>
  <li>false:不开启</li>
     */
    public $GraceDownFlag;

    /**
     * @var integer 优雅缩容等待时间,时间范围60到1800  单位秒
     */
    public $GraceDownTime;

    /**
     * @param string $InstanceId 实例ID
     * @param array $CvmInstanceIds 销毁资源列表
     * @param string $NodeFlag 销毁节点类型取值范围：
  <li>MASTER</li>
  <li>TASK</li>
  <li>CORE</li>
  <li>ROUTER</li>
     * @param boolean $GraceDownFlag 优雅缩容开关
  <li>true:开启</li>
  <li>false:不开启</li>
     * @param integer $GraceDownTime 优雅缩容等待时间,时间范围60到1800  单位秒
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }

        if (array_key_exists("NodeFlag",$param) and $param["NodeFlag"] !== null) {
            $this->NodeFlag = $param["NodeFlag"];
        }

        if (array_key_exists("GraceDownFlag",$param) and $param["GraceDownFlag"] !== null) {
            $this->GraceDownFlag = $param["GraceDownFlag"];
        }

        if (array_key_exists("GraceDownTime",$param) and $param["GraceDownTime"] !== null) {
            $this->GraceDownTime = $param["GraceDownTime"];
        }
    }
}
