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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI工作台SRE数字分身任务
 *
 * @method string getName() 获取任务名称
 * @method void setName(string $Name) 设置任务名称
 * @method string getTaskType() 获取任务类型
 * @method void setTaskType(string $TaskType) 设置任务类型
 * @method string getTaskConfig() 获取任务配置
 * @method void setTaskConfig(string $TaskConfig) 设置任务配置
 * @method integer getID() 获取唯一标识
 * @method void setID(integer $ID) 设置唯一标识
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method integer getTwinID() 获取所属数字分身ID
 * @method void setTwinID(integer $TwinID) 设置所属数字分身ID
 */
class AIWorkbenchSREDigitalTwinTask extends AbstractModel
{
    /**
     * @var string 任务名称
     */
    public $Name;

    /**
     * @var string 任务类型
     */
    public $TaskType;

    /**
     * @var string 任务配置
     */
    public $TaskConfig;

    /**
     * @var integer 唯一标识
     */
    public $ID;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 所属数字分身ID
     */
    public $TwinID;

    /**
     * @param string $Name 任务名称
     * @param string $TaskType 任务类型
     * @param string $TaskConfig 任务配置
     * @param integer $ID 唯一标识
     * @param string $CreatedAt 创建时间
     * @param integer $TwinID 所属数字分身ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskConfig",$param) and $param["TaskConfig"] !== null) {
            $this->TaskConfig = $param["TaskConfig"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("TwinID",$param) and $param["TwinID"] !== null) {
            $this->TwinID = $param["TwinID"];
        }
    }
}
