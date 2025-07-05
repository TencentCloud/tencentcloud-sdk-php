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
 * 事件实例信息
 *
 * @method string getCaseId() 获取事件实例id
 * @method void setCaseId(string $CaseId) 设置事件实例id
 * @method string getName() 获取事件名
 * @method void setName(string $Name) 设置事件名
 * @method string getDimension() 获取事件格式
 * @method void setDimension(string $Dimension) 设置事件格式
 * @method string getCreationTs() 获取创建时间
 * @method void setCreationTs(string $CreationTs) 设置创建时间
 * @method string getConsumerId() 获取消费者id
 * @method void setConsumerId(string $ConsumerId) 设置消费者id
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 */
class EventCaseDTO extends AbstractModel
{
    /**
     * @var string 事件实例id
     */
    public $CaseId;

    /**
     * @var string 事件名
     */
    public $Name;

    /**
     * @var string 事件格式
     */
    public $Dimension;

    /**
     * @var string 创建时间
     */
    public $CreationTs;

    /**
     * @var string 消费者id
     */
    public $ConsumerId;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @param string $CaseId 事件实例id
     * @param string $Name 事件名
     * @param string $Dimension 事件格式
     * @param string $CreationTs 创建时间
     * @param string $ConsumerId 消费者id
     * @param string $Description 描述信息
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
        if (array_key_exists("CaseId",$param) and $param["CaseId"] !== null) {
            $this->CaseId = $param["CaseId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("CreationTs",$param) and $param["CreationTs"] !== null) {
            $this->CreationTs = $param["CreationTs"];
        }

        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
