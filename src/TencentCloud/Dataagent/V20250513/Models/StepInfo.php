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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务步骤
 *
 * @method integer getId() 获取步骤id
 * @method void setId(integer $Id) 设置步骤id
 * @method string getName() 获取步骤名称
 * @method void setName(string $Name) 设置步骤名称
 * @method string getStatus() 获取步骤状态
 * @method void setStatus(string $Status) 设置步骤状态
 * @method string getType() 获取类型(text/expand)
 * @method void setType(string $Type) 设置类型(text/expand)
 * @method string getSummary() 获取总结
 * @method void setSummary(string $Summary) 设置总结
 * @method StepExpand getExpand() 获取步骤扩展结构
 * @method void setExpand(StepExpand $Expand) 设置步骤扩展结构
 * @method string getDesc() 获取描述
 * @method void setDesc(string $Desc) 设置描述
 */
class StepInfo extends AbstractModel
{
    /**
     * @var integer 步骤id
     */
    public $Id;

    /**
     * @var string 步骤名称
     */
    public $Name;

    /**
     * @var string 步骤状态
     */
    public $Status;

    /**
     * @var string 类型(text/expand)
     */
    public $Type;

    /**
     * @var string 总结
     */
    public $Summary;

    /**
     * @var StepExpand 步骤扩展结构
     */
    public $Expand;

    /**
     * @var string 描述
     */
    public $Desc;

    /**
     * @param integer $Id 步骤id
     * @param string $Name 步骤名称
     * @param string $Status 步骤状态
     * @param string $Type 类型(text/expand)
     * @param string $Summary 总结
     * @param StepExpand $Expand 步骤扩展结构
     * @param string $Desc 描述
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Expand",$param) and $param["Expand"] !== null) {
            $this->Expand = new StepExpand();
            $this->Expand->deserialize($param["Expand"]);
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
