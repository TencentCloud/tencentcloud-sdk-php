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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TriggerEvent请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getName() 获取案例名称
 * @method void setName(string $Name) 设置案例名称
 * @method string getDimension() 获取时间格式：如果选择触发时间：2022年6月21，则设置为20220621
 * @method void setDimension(string $Dimension) 设置时间格式：如果选择触发时间：2022年6月21，则设置为20220621
 * @method string getDescription() 获取描述信息
 * @method void setDescription(string $Description) 设置描述信息
 */
class TriggerEventRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 案例名称
     */
    public $Name;

    /**
     * @var string 时间格式：如果选择触发时间：2022年6月21，则设置为20220621
     */
    public $Dimension;

    /**
     * @var string 描述信息
     */
    public $Description;

    /**
     * @param string $ProjectId 项目Id
     * @param string $Name 案例名称
     * @param string $Dimension 时间格式：如果选择触发时间：2022年6月21，则设置为20220621
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
