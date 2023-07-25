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
namespace TencentCloud\Lighthouse\V20200324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Docker活动信息
 *
 * @method string getActivityId() 获取活动ID。
 * @method void setActivityId(string $ActivityId) 设置活动ID。
 * @method string getActivityName() 获取活动名称。
 * @method void setActivityName(string $ActivityName) 设置活动名称。
 * @method string getActivityState() 获取活动状态。取值范围： 
<li>INIT：表示初始化，活动尚未执行</li>
<li>OPERATING：表示活动执行中</li>
<li>SUCCESS：表示活动执行成功</li>
<li>FAILED：表示活动执行失败</li>
 * @method void setActivityState(string $ActivityState) 设置活动状态。取值范围： 
<li>INIT：表示初始化，活动尚未执行</li>
<li>OPERATING：表示活动执行中</li>
<li>SUCCESS：表示活动执行成功</li>
<li>FAILED：表示活动执行失败</li>
 * @method string getActivityCommandOutput() 获取活动执行的命令输出，以base64编码。
 * @method void setActivityCommandOutput(string $ActivityCommandOutput) 设置活动执行的命令输出，以base64编码。
 * @method array getContainerIds() 获取容器ID列表。
 * @method void setContainerIds(array $ContainerIds) 设置容器ID列表。
 * @method string getCreatedTime() 获取创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
 * @method string getEndTime() 获取结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DockerActivity extends AbstractModel
{
    /**
     * @var string 活动ID。
     */
    public $ActivityId;

    /**
     * @var string 活动名称。
     */
    public $ActivityName;

    /**
     * @var string 活动状态。取值范围： 
<li>INIT：表示初始化，活动尚未执行</li>
<li>OPERATING：表示活动执行中</li>
<li>SUCCESS：表示活动执行成功</li>
<li>FAILED：表示活动执行失败</li>
     */
    public $ActivityState;

    /**
     * @var string 活动执行的命令输出，以base64编码。
     */
    public $ActivityCommandOutput;

    /**
     * @var array 容器ID列表。
     */
    public $ContainerIds;

    /**
     * @var string 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
     */
    public $CreatedTime;

    /**
     * @var string 结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $ActivityId 活动ID。
     * @param string $ActivityName 活动名称。
     * @param string $ActivityState 活动状态。取值范围： 
<li>INIT：表示初始化，活动尚未执行</li>
<li>OPERATING：表示活动执行中</li>
<li>SUCCESS：表示活动执行成功</li>
<li>FAILED：表示活动执行失败</li>
     * @param string $ActivityCommandOutput 活动执行的命令输出，以base64编码。
     * @param array $ContainerIds 容器ID列表。
     * @param string $CreatedTime 创建时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
     * @param string $EndTime 结束时间。按照 ISO8601 标准表示，并且使用 UTC 时间。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ActivityId",$param) and $param["ActivityId"] !== null) {
            $this->ActivityId = $param["ActivityId"];
        }

        if (array_key_exists("ActivityName",$param) and $param["ActivityName"] !== null) {
            $this->ActivityName = $param["ActivityName"];
        }

        if (array_key_exists("ActivityState",$param) and $param["ActivityState"] !== null) {
            $this->ActivityState = $param["ActivityState"];
        }

        if (array_key_exists("ActivityCommandOutput",$param) and $param["ActivityCommandOutput"] !== null) {
            $this->ActivityCommandOutput = $param["ActivityCommandOutput"];
        }

        if (array_key_exists("ContainerIds",$param) and $param["ContainerIds"] !== null) {
            $this->ContainerIds = $param["ContainerIds"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
