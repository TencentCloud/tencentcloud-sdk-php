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
 * 步骤扩展结构
 *
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getStatus() 获取状态
 * @method void setStatus(string $Status) 设置状态
 * @method array getCellIds() 获取cellid数组
 * @method void setCellIds(array $CellIds) 设置cellid数组
 */
class StepExpand extends AbstractModel
{
    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string 状态
     */
    public $Status;

    /**
     * @var array cellid数组
     */
    public $CellIds;

    /**
     * @param string $Title 标题
     * @param string $Status 状态
     * @param array $CellIds cellid数组
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CellIds",$param) and $param["CellIds"] !== null) {
            $this->CellIds = $param["CellIds"];
        }
    }
}
