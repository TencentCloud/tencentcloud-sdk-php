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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * agentApp查询排序
 *
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取修改时间
 * @method void setUpdateTime(integer $UpdateTime) 设置修改时间
 * @method integer getName() 获取名称
 * @method void setName(integer $Name) 设置名称
 * @method integer getStatus() 获取状态
 * @method void setStatus(integer $Status) 设置状态
 */
class DescribeAgentAppsSortDTO extends AbstractModel
{
    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 修改时间
     */
    public $UpdateTime;

    /**
     * @var integer 名称
     */
    public $Name;

    /**
     * @var integer 状态
     */
    public $Status;

    /**
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 修改时间
     * @param integer $Name 名称
     * @param integer $Status 状态
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
        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
